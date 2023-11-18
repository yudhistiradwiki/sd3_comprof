@extends('layouts.layout_admin')

@section('title')
Detail ppdb
@endsection

@section('content')
<a href="{{ route('admin.ppdb.index') }}" type="button" class="mb-3 btn btn-primary ">
    Kembali
</a>

<div class="row">
    <div class="col-md-12">
        {{-- 1 --}}
        <div class="mb-4 border-0 shadow card">
            <div class="card-body">
                <h5><i class="fa fa-edit"></i> Detail Ujian</h5>
                <hr />
                <div class="table-responsive">
                    <table class="table mb-0 rounded table-bordered table-centered table-nowrap">
                        <tbody>
                            <tr>
                                <td style="width: 30%" class="fw-bold">
                                    Nama Ujian
                                </td>
                                <td>{{ $ppdb->title }}</td>
                            </tr>
                            <tr class="white-space">
                                <td class="fw-bold">Materi Ujian</td>
                                <td>{{ $ppdb->subtitle }}</td>
                            </tr>
                            <tr>
                                <td class="fw-bold">Gambar</td>
                                <td><img src=" {{ asset($ppdb->file)  }} " width="100px"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


        {{-- 2 --}}
        <div class="border-0 shadow card">
            <div class="card-body">
                <h5>
                    <i class="fa fa-question-circle"></i> Item Why Choose
                </h5>
                <hr />
                <a href="{{ route('whyItem.create', $ppdb->id) }}" type="button" class="mb-3 btn btn-primary ">
                    <span class="tf-icons bx bx-plus-circle"></span>&nbsp; Tambah
                </a>


                <div class="mt-3 table-responsive">
                    <table class="table table-bordered data-table nowrap w-100">
                        <thead>
                            <tr>
                                <th width="5%">#</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th width="10%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ppdbdetail as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->description }}</td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="p-0 btn dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="/admin/ppdb/{{ $ppdb->id }}/whyitem/{{ $item->id}}/edit">
                                                <i class="bx bx-edit-alt me-1"></i>
                                                Edit
                                            </a>
                                            <a class="dropdown-item delete" href="#" data-id="{{ $item->id }}" data-id1="{{ $ppdb->id }}">
                                                <i class="bx bx-trash me-1"></i>
                                                Delete
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>

    </div>
</div>
@endsection



@push('scripts')
<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script type="text/javascript">
    $('.delete').click(function() {

        var id1 = $(this).attr('data-id1');
        var id2 = $(this).attr('data-id');

        Swal.fire({
            title: 'Apakah Anda Yakin?'
            , text: "Ingin Menghapus Data Ini!"
            , icon: 'warning'
            , showCancelButton: true
            , confirmButtonColor: '#3085d6'
            , cancelButtonColor: '#d33'
            , confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location = "/admin/ppdb/" + id1 + "/whyitem/" + id2;

                swal("Data berhasil dihapus!", {
                    icon: "success"
                , });
            }
        })

    });

</script>
@endpush
