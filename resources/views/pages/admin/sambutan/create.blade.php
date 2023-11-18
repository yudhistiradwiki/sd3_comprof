@extends('layouts.layout_admin')

@section('title')
Create Sambutan
@endsection

@section('content')
<a href="{{ route('admin.sambutan.index') }}" type="button" class="mb-3 btn btn-primary ">
    Kembali
</a>

<div class="row">
    <div class="col-md-12">
        <div class="mb-4 card">
            <h5 class="card-header">Create Sambutan</h5>

            <hr class="my-0" />
            <div class="card-body">
                <form action="{{ route('admin.sambutan.store') }}" id="formAccountSettings" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">

                        <div class="mb-3 col-md-6">
                            <label for="sambutan" class="form-label">Sambutan</label>
                            <textarea class="form-control" @error('sambutan') is-invalid @enderror id="sambutan" name="sambutan"
                                placeholder="Masukkan sambutan disini">
                        </textarea>

                            @error('sambutan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3 col-md-6">
                            <label for="nama_kepsek" class="form-label">Nama Kepala Sekolah</label>
                            <input class="form-control @error('nama_kepsek') is-invalid @enderror" type="text" id="firstName"
                                name="nama_kepsek" value="{{ old('nama_kepsek') }}" autofocus />
                            @error('nama_kepsek')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3 col-md-12">
                            <label for="" class="form-label">Upload Foto</label>
                            <input class="form-control" type="file" id="formFile" name="file" value="{{ old('file') }}"/>
                            {{-- <input type="file" name="file"> --}}
                            @error('file')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                    </div>
                    <div class="mt-2">
                        <button type="submit" class="btn btn-primary me-2">Simpan</button>
                    </div>
                </form>
            </div>

        </div>

    </div>
</div>

<script>
    ClassicEditor
        .create(document.querySelector('#sambutan'))
        .catch(error => {
            console.error(error);
        });
</script>
@endsection
