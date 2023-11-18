<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\File;

class TestimoniController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Testimoni::all();

            return DataTables::of($data)
                ->addIndexColumn()
                ->editColumn('description', function ($row) {
                    return '<p class="white-space">' . $row->description . '</p>';
                })
                ->addColumn('file', function ($row) {
                    $image = '<img src="' . asset($row->file) . '" width="50px">';
                    return $image;
                })
                ->addColumn('action', function ($row) {
                    $btn = '
                    <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="' . route('admin.testimonial.edit', $row->id) . '"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                              <a class="dropdown-item" href="javascript:hapus(\'' . $row->id . '\')"><i class="bx bx-trash me-1"></i> Delete</a>
                            </div>
                    </div>
                    ';
                    return $btn;
                })
                ->rawColumns(['action', 'file', 'description'])
                ->make(true);
        }
        return view('pages.admin.testimoni.index');
    }

    public function create()
    {
        return view('pages.admin.testimoni.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:255',
            'title' => 'required|string|max:255',
            'description' => 'required',
            'file' => 'required',
        ]);

        try{
            $file = $request->file('file');
            if (file_exists($file)) {
                $nama_file = time() . "-" . $file->getClientOriginalName();
                $namaFolder2 = 'file/testimonial';
                $file->move($namaFolder2, $nama_file);
                $pathPublic = $namaFolder2 . "/" . $nama_file;
            } else {
                $pathPublic = null;
            }

            Testimoni::create([
                'nama' => $request->nama,
                'title' => $request->title,
                'description' => $request->description,
                'file' => $pathPublic,
            ]);
            return redirect()->route('admin.testimonial.index')->with('success', 'Testimoni created successfully');
        }catch(\Throwable $e) {
            //return $e->getMessage();
            return back()->with(['error' => 'Data gagal disimpan.']);
        }
    }

    public function edit(string $id)
    {
        // get all services
        $testimoni = Testimoni::findOrFail($id);
        return view('pages.admin.testimoni.edit', compact('testimoni'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|max:255',
            'title' => 'required|string|max:255',
            'description' => 'required',
            'file' => '',
        ]);

        try {
            //check passwordy
            $file = $request->file('file');
            //echo $file;
            if (file_exists($file)) {
                $nama_file = time() . "-" . $file->getClientOriginalName();
                $namaFolder2 = 'file/testimonial';
                $file->move($namaFolder2, $nama_file);
                $pathPublic2 = $namaFolder2 . "/" . $nama_file;
                $data = Testimoni::where('id', $id)->first();
                File::delete($data->file);
                // echo $pathPublic2;
            } else {
                $pathPublic2 = $request->pathFile;
            }
            //update user with password
            Testimoni::where("id", $id)->update([
                'nama' => $request->nama,
                'title' => $request->title,
                'description' => $request->description,
                'file' => $pathPublic2,
            ]);
            return redirect()->route('admin.testimonial.index')->with('success', 'Testimoni updated successfully');
        } catch (\Throwable $th) {
            //return $th->getMessage();
            return back()->with(['error' => 'Data gagal diperbarui.']);
        }
    }

    public function destroy($id)
    {
        try {
            $data = Testimoni::find($id);
            // delete data
            $data->delete();
            // delete file
            File::delete($data->file);
            return redirect()->route('admin.testimonial.index')->with('success', 'Testimoni deleted successfully');
        } catch (\Throwable $th) {
            return back()->with(['error' => 'Data gagal dihapus.']);
        }
    }
}
