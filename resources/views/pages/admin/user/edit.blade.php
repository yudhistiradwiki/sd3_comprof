@extends('layouts.layout_admin')

@section('title')
Update User
@endsection

@section('content')
<a href="{{ route('admin.user.index') }}" type="button" class="mb-3 btn btn-primary ">
    Kembali
</a>

<div class="row">
    <div class="col-md-12">
        <div class="mb-4 card">
            <h5 class="card-header">Update User</h5>

            <hr class="my-0" />
            <div class="card-body">
                <form action="{{ route('admin.user.update', $user->id) }}" id="formAccountSettings" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="firstName" class="form-label">Nama</label>
                            <input class="form-control  @error('name') is-invalid @enderror" type="text" id="firstName"
                                name="name" value="{{ old('name', $user->name) }}" autofocus />
                            @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-3 col-md-6">
                            <label for="email" class="form-label">E-mail</label>
                            <input class="form-control  @error('email') is-invalid @enderror" type="email" id="email"
                                name="email" value="{{ old('email', $user->email) }}" placeholder="" />
                            @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-3 col-md-6">
                            <label class="form-label">Password Baru</label>
                            <input class="form-control  @error('password') is-invalid @enderror" type="password"
                                name="password" />
                            @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-3 col-md-6">
                            <label for="" class="form-label">Confirm Password</label>
                            <input class="form-control" type="password" name="password_confirmation" />

                            @error('password_confirmation')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-12 col-md-12">
                            <label for="" class="form-label">Role</label>
                            <select class="form-control" name="role" id="role">
                                <option value="{{ old('role', $user->role) }}" selected>{{ old('role', $user->role) }}</option>
                                <option value="admin">Admin</option>
                                <option value="humas">Humas</option>
                            </select>

                            @error('role')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                    </div>
                    <div class="mt-2">
                        <button type="submit" class="btn btn-primary me-2">Update</button>
                    </div>
                </form>
            </div>

        </div>

    </div>
</div>
@endsection
