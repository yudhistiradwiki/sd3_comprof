@extends('layouts.layout_admin')

@section('title')
Create ppdb
@endsection

@section('content')
<a href="{{ route('admin.ppdb.show', $ppdb->id) }}" type="button" class="mb-3 btn btn-primary ">
    Kembali
</a>

<div class="row">
    <div class="col-md-12">
        <div class="mb-4 card">
            <h5 class="card-header">Create ppdb</h5>

            <hr class="my-0" />
            <div class="card-body">
                <form action="{{ route('whyItem.store', $ppdb->id) }}" id="formAccountSettings" method="POST"
                    enctype="multipart/form-data">
                    @csrf

                    <div class="row input">
                        <div class="mb-3 col-md-12">
                            <label for="firstName" class="form-label">Tittle</label>
                            <input class="form-control  @error('title') is-invalid @enderror" type="text" id="firstName"
                                name="title" value="{{ old('title') }}" autofocus />
                            @error('title')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3 col-md-12">
                            <label for="email" class="form-label">Description</label>
                            <textarea class="form-control  @error('description') is-invalid @enderror" id="description"
                                name="description" value="{{ old('description') }}" placeholder=""></textarea>
                            @error('description')
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
