<?php

namespace App\Http\Controllers;

use App\Models\Sambutan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\File;

class SambutanController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Sambutan::all();

            return DataTables::of($data)
                ->addIndexColumn()
                ->editColumn('sambutan', function ($row) {
                    return Str::limit($row->sambutan);
                })
                ->addColumn('file', function ($row) {
                    $image = '<img src="' . asset($row->file) . '" width="50px">';
                    return $image;
                })
                ->addColumn('action', function ($row) {
                    $btn = '
                    <div class="dropdown">
                            <button type="button" class="p-0 btn dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="' . route('admin.sambutan.edit', $row->id) . '"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                              <a class="dropdown-item" href="javascript:hapus(\'' . $row->id . '\')"><i class="bx bx-trash me-1"></i> Delete</a>
                            </div>
                    </div>
                    ';
                    return $btn;
                })
                ->rawColumns(['action', 'file', 'description'])
                ->make(true);
        }
        return view('pages.admin.sambutan.index');
    }

    public function create()
    {
        return view('pages.admin.sambutan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'sambutan' => 'required',
            'nama_kepsek' => 'required|string|max:255',
            'file' => 'required',
        ]);

        try {
            // create user
            $file = $request->file('file');
            if (file_exists($file)) {
                $nama_file = time() . "-" . $file->getClientOriginalName();
                $namaFolder2 = 'file/sambutan';
                $file->move($namaFolder2, $nama_file);
                $pathPublic = $namaFolder2 . "/" . $nama_file;
            } else {
                $pathPublic = null;
            }

            $service = Sambutan::create([
                'nama_kepsek' => $request->nama_kepsek,
                'sambutan' => $request->sambutan,
                // 'description' => $request->description,
                'file' => $pathPublic,
            ]);

            //echo $service;
            //redirect
            return redirect()->route('admin.sambutan.index')->with('success', 'Sambutan created successfully');
        } catch (\Throwable $e) {
            //return $e->getMessage();
            return back()->with(['error' => 'Data gagal disimpan.']);
        }
    }

    public function edit(string $id)
    {
        // get all services
        $sambutan = Sambutan::findOrFail($id);
        return view('pages.admin.sambutan.edit', compact('sambutan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            // 'title' => 'required|string|max:255',
            'sambutan' => 'required',
            'nama_kepsek' => 'required',
            'file' => '',
        ]);

        try {
            //check passwordy
            $file = $request->file('file');
            //echo $file;
            if (file_exists($file)) {
                $nama_file = time() . "-" . $file->getClientOriginalName();
                $namaFolder2 = 'file/services';
                $file->move($namaFolder2, $nama_file);
                $pathPublic2 = $namaFolder2 . "/" . $nama_file;
                $data = Sambutan::where('id', $id)->first();
                File::delete($data->file);
                echo $pathPublic2;
            } else {
                $pathPublic2 = $request->pathFile;
            }
            //update user with password
            Sambutan::where("id", $id)->update([
                'nama_kepsek' => $request->nama_kepsek,
                'sambutan' => $request->sambutan,
                // 'description' => $request->description,
                'file' => $pathPublic2,
            ]);
            return redirect()->route('admin.sambutan.index')->with('success', 'Sambutan updated successfully');
        } catch (\Throwable $th) {
            return back()->with(['error' => 'Data gagal diperbarui.']);
        }
    }

    public function destroy($id)
    {
        try {
            $data = Sambutan::find($id);

            // delete data
            $data->delete();

            // delete file
            File::delete($data->file);

            return redirect()->route('admin.sambutan.index')->with('success', 'Sambutan deleted successfully');

        } catch (\Throwable $th) {
            return back()->with(['error' => 'Data gagal dihapus.']);
        }
    }
}
