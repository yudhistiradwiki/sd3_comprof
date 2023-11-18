@extends('layouts.layout_admin')

@section('title')
Edit Facility
@endsection

@section('content')
<a href="{{ route('admin.facility.index') }}" type="button" class="mb-3 btn btn-primary ">
    Kembali
</a>

<div class="row">
    <div class="col-md-12">
        <div class="mb-4 card">
            <h5 class="card-header">Create Facility</h5>

            <hr class="my-0" />
            <div class="card-body">
                <form action="{{ route('admin.facility.update', $facility->id) }}" id="formAccountSettings" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="firstName" class="form-label">Tittle</label>
                            <input class="form-control  @error('title') is-invalid @enderror" type="text" id="firstName"
                                name="title" value="{{ old('title', $facility->title) }}" autofocus />
                            @error('title')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        {{-- <div class="mb-3 col-md-6">
                            <label for="email" class="form-label">Description</label>
                            <textarea class="form-control  @error('description') is-invalid @enderror" id="description"
                                name="description" value="{{ old('description') }}" placeholder=""></textarea>
                            @error('description')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div> --}}
                        <div class="mb-3 col-md-6">
                            <label for="" class="form-label">Upload Foto</label>
                            <input class="form-control" type="file" id="formFile" name="file" value="{{ old('file') }}"/>
                            <input type="text" name="pathFile" value="{{ $facility->file }}" hidden>
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
@endsection
