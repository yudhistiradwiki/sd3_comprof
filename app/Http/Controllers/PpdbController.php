<?php

namespace App\Http\Controllers;

use App\Models\Ppdb;
use App\Models\PpdbDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Yajra\DataTables\DataTables;

class PpdbController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Ppdb::all();

            return DataTables::of($data)
                ->addIndexColumn()
                ->editColumn('subtitle', function ($row) {
                    return '<p class="white-space">' . $row->subtitle . '</p>';
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
                              <a class="dropdown-item" href="' . route('admin.ppdb.show', $row->id) . '"><i class="bx bx-show me-1"></i> Detail</a>
                              <a class="dropdown-item" href="' . route('admin.ppdb.edit', $row->id) . '"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                              <a class="dropdown-item" href="javascript:hapus(\'' . $row->id . '\')"><i class="bx bx-trash me-1"></i> Delete</a>
                            </div>
                    </div>
                    ';
                    return $btn;
                })
                ->rawColumns(['action', 'file', 'subtitle'])
                ->make(true);
        }
        return view('pages.admin.ppdb.index');
    }

    public function create()
    {
        return view('pages.admin.ppdb.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title2' => 'required|string|max:50',
            'subtitle' => 'required|string|max:100',
            'file' => 'required|mimes:png,jpg,png|max:2048',
            'title' => 'required|max:255',
            'description' => 'required|max:255',
        ]);

        try {
            DB::beginTransaction();

            // jika upload file
            $file = $request->file('file');
            if (file_exists($file)) {
                $nama_file = time() . "-" . $file->getClientOriginalName();
                $namaFolder2 = 'file/ppdb';
                $file->move($namaFolder2, $nama_file);
                $pathPublic = $namaFolder2 . "/" . $nama_file;
            } else {
                $pathPublic = null;
            }

            // create wheychose
            $ppdb = Ppdb::create([
                'title' => $request->title2,
                'subtitle' => $request->subtitle,
                'file' => $pathPublic,
            ]);

            // create detail
            $data = count($request->title);
            for ($i = 0; $i < $data; $i++) {

                PpdbDetail::create([
                    'ppdbs_id' => $ppdb->id,
                    'title' => $request->title[$i],
                    'description' => $request->description[$i],
                ]);
            }

            DB::commit();
            return redirect()->route('admin.ppdb.index')->with('success', 'PPDB created successfully');

        } catch (\Throwable $e) {
            DB::rollBack();
            return back()->with(['error' => 'Data gagal disimpan.']);
        }
    }

    public function edit(string $id)
    {
        // get
        $ppdb = Ppdb::findOrFail($id);

        return view('pages.admin.ppdb.edit', compact('ppdb'));
    }

    public function update(Request $request, Ppdb $ppdb)
    {
        //validate
        $request->validate([
            'title' => 'required|string|max:50',
            'subtitle' => 'required|string|max:100',
            'file' => 'nullable|mimes:png,jpg,png|max:2048',
        ]);

        try {
            // jika upload file
            $file = $request->file('file');
            if (file_exists($file)) {

                //create
                $nama_file = time() . "-" . $file->getClientOriginalName();
                $namaFolder2 = 'file/ppdb';
                $file->move($namaFolder2, $nama_file);
                $pathPublic2 = $namaFolder2 . "/" . $nama_file;

                // delete
                File::delete($ppdb->file);

            } else {
                $pathPublic2 = $ppdb->file;
            }

            // update
            $ppdb->update([
                'title' => $request->title,
                'subtitle' => $request->subtitle,
                'file' => $pathPublic2,
            ]);

            return redirect()->route('admin.ppdb.index')->with('success', 'PPDB updated successfully');

        } catch (\Throwable $th) {
            return back()->with(['error' => 'Data gagal diperbarui.']);
        }
    }

    public function destroy($id)
    {
        try {
            $data = Ppdb::find($id);

            // delete data
            $data->delete();

            // delete file
            File::delete($data->file);

            return redirect()->route('admin.ppdb.index')->with('success', 'PPDB deleted successfully');

        } catch (\Throwable $th) {
            return back()->with(['error' => 'Data gagal dihapus.']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // get
        $ppdb = Ppdb::findOrFail($id);

        // get detail
        $ppdbdetail = PpdbDetail::where('ppdbs_id', $ppdb->id)->get();

        return view('pages.admin.ppdb.show', compact('ppdb', 'ppdbdetail'));
    }

    /**
     * createWhyItem
     *
     * @param  mixed $id
     * @return void
     */
    public function createWhyItem(string $id)
    {
        // get
        $ppdb = Ppdb::findOrFail($id);

        return view('pages.admin.ppdb.detail.create', compact('ppdb'));
    }

    /**
     * storeWhyItem
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return void
     */
    public function storeWhyItem(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required|max:255',
        ]);

        try {

            PpdbDetail::create([
                'ppdbs_id' => $id,
                'title' => $request->title,
                'description' => $request->description,
            ]);

            return redirect()->route('admin.ppdb.show', $id)->with('success', 'PPDB Item created successfully');

        } catch (\Throwable $th) {
            return back()->with(['error' => 'Data gagal disimpan.']);
        }

    }

    /**
     * editWhyItem
     *
     * @param  mixed $whychoose
     * @param  mixed $whychooseDetail
     * @return void
     */
    public function editWhyItem(Ppdb $ppdb, PpdbDetail $ppdbdetail)
    {
        return view('pages.admin.ppdb.detail.edit', compact('ppdb', 'ppdbdetail'));
    }

    /**
     * updateWhyItem
     *
     * @param  mixed $request
     * @param  mixed $whychoose
     * @param  mixed $whychooseDetail
     * @return void
     */
    public function updateWhyItem(Request $request, Ppdb $ppdb, PpdbDetail $ppdbdetail)
    {
        //validate
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required|max:255',
        ]);

        try {

            // update
            $ppdbdetail->update([
                'title' => $request->title,
                'description' => $request->description,
            ]);

            return redirect()->route('admin.ppdb.show', $ppdb->id)->with('success', 'PPDB updated successfully');

        } catch (\Throwable $th) {
            return back()->with(['error' => 'Data gagal diperbarui.']);
        }
    }

    /**
     * destroyWhyItem
     *
     * @param  mixed $whychoose
     * @param  mixed $whychooseDetail
     * @return void
     */
    public function destroyWhyItem(Ppdb $ppdb, PpdbDetail $ppdbdetail)
    {
        try {
            $data = PpdbDetail::find($ppdbdetail->id);

            // delete data
            $data->delete();

            // delete file
            File::delete($data->file);

            return redirect()->route('admin.ppdb.show', $ppdb->id)->with('success', 'WhyChoose deleted successfully');

        } catch (\Throwable $th) {
            return back()->with(['error' => 'Data gagal dihapus.']);
        }
    }
}
