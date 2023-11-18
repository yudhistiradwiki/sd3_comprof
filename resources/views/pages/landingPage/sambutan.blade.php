@extends('layouts.layout_landing')

@section('title')
    SAMBUTAN KEPALA SEKOLAH
@endsection

@section('content')
    <!-- Page Header Start -->
    <div class="py-5 mb-5 container-fluid page-header wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="text-white display-3 animated slideInRight">Sambutan Kepala Sekolah</h1>
            <nav aria-label="breadcrumb">
                <ol class="mb-0 breadcrumb animated slideInRight">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Sambutan Kepala Sekolah</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Sambutan Start -->
    <div class="p-5 my-5 container-fluid sambutan">
        @if ($sambutan)
            <div class="row g-5 align-items-center">
                <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.5s">
                    <p class="mb-2 text-primary fw-medium text-uppercase">PROFIL KEPALA SEKOLAH</p>
                    <h2 class="mb-4 display-5">Sambutan Kepala Sekolah</h2>
                    <div class="row gy-4">
                        <div class="col-12">
                            <p align="justify">
                                {!! html_entity_decode($sambutan->sambutan) !!}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative me-lg-4">
                        <img class="img-fluid w-100" style="object-fit: cover; object-position: center; height: 750px"
                            src="{{ asset($sambutan->file ? $sambutan->file : 'template/img/Album1.jpg') }}"
                            alt=""><br><br>
                        <center>
                            <h5>{{ $sambutan->nama_kepsek }}</h5>
                            <p class="text-primary">Kepala Sekolah SD Plus 3 Al-Muhajirin</p>
                        </center>
                    </div>
                </div>
            </div>
        @endif
    </div>
    <!-- Sambutan End -->
@endsection
