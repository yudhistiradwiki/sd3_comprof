@extends('layouts.layout_landing')

@section('title')
LAYANAN SEKOLAH
@endsection

@section('content')
<!-- Page Header Start -->
<div class="py-5 mb-5 container-fluid page-header wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <h1 class="text-white display-3 animated slideInRight">Layanan Sekolah</h1>
        <nav aria-label="breadcrumb">
            <ol class="mb-0 breadcrumb animated slideInRight">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Layanan Sekolah</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- Service Start -->
@if(count($services) > 0)
<div class="py-5 container-xxl">
    <div class="container">
        <div class="pb-4 mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <p class="mb-2 fw-medium text-uppercase text-primary">Layanan Sekolah</p>
            <h1 class="mb-4 display-7">Kami Memberikan Pelayanan Terbaik Untuk Siswa</h1>
        </div>
        <div class="row gy-5 gx-4">

            @foreach ($services as $service)
            <div class="mb-4 col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item">
                    <img class="img-fluid service-img-cover" src="{{ $service->file ? asset($service->file) : asset('assetsLanding/img/placeholder.jpg') }}" alt="service">
                    <div class="service-img">
                        <img class="img-fluid" src="{{ $service->file ? asset($service->file) : asset('assetsLanding/img/placeholder.jpg') }}" alt="service">
                    </div>
                    <div class="service-detail">
                        <div class="service-title">
                            <hr class="w-25">
                            <h3 class="mb-0">{{ $service->title }}</h3>
                            <hr class="w-25">
                        </div>
                        <div class="service-text">
                            <p class="mb-0 text-white">{{$service->description}}</p>
                        </div>
                    </div>
                    {{-- <a class="btn btn-light" href="">Read More</a> --}}
                </div>
            </div>
            @endforeach

            {!! $services->withQueryString()->links('pagination::bootstrap-5') !!}

        </div>
    </div>
</div>
@endif
<!-- Service End -->


@endsection
