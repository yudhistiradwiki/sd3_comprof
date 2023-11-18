@extends('layouts.layout_landing')

@section('title')
    SD PLUS 3 AL-MUHAJIRIN
@endsection

@section('content')
    <!-- Carousel Start -->
    @if ($carousels)
        <div class="px-0 mb-5 container-fluid">
            <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">

                    @foreach ($carousels as $index => $carousel)
                        <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                            <img class="w-100"
                                src="{{ $carousel->file ? asset($carousel->file) : asset('assetsLanding/img/carousel-1.jpg') }}"
                                alt="Image">
                            <div class="carousel-caption">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-10 text-start">
                                            <p class="fs-5 fw-medium text-primary text-uppercase animated slideInRight">
                                                {{ $carousel->title }}</p>
                                            <h1 class="mb-5 text-white display-1 animated slideInRight">
                                                {{ $carousel->subtitle }}
                                            </h1>
                                            <a href="{{ route('contact.index') }}"
                                                class="px-5 py-3 btn btn-primary animated slideInRight">Kontak Kami</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    @endif
    <!-- Carousel End -->


    <!-- About Start -->
    @if ($about)
        <div class="py-5 container-xxl about" id="about">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-5">
                        <div class="position-relative me-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                            <img class="img-fluid w-100 about-img"
                                src="{{ asset($about->file ? $about->file : 'assetsLanding/img/service-2.jpg') }}"
                                alt="">
                        </div>
                    </div>
                    <div class="col-lg-7 wow fadeIn" data-wow-delay="0.5s">
                        <p class="mb-2 fw-medium text-uppercase text-primary">Profil Sekolah</p>
                        <h1 class="mb-4 display-5">{{ $about->title }}</h1>
                        <p class="mb-4" align="justify">
                            {{ $about->description }}
                        </p>
                        <div class="pt-2 row">
                            <div class="col-sm-7">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                        <i class="text-white fa fa-envelope-open"></i>
                                    </div>
                                    <div class="ms-3">
                                        <p class="mb-2">Email</p>
                                        <h6 class="mb-0">
                                            {{ $profile->email ? $profile->email : 'pt.nuryeni2018@gmail.com' }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                        <i class="text-white fa fa-phone-alt"></i>
                                    </div>
                                    <div class="ms-3">
                                        <p class="mb-2">Telepon</p>
                                        <h6 class="mb-0">
                                            {{ $profile->telepon ? $profile->telepon : '(0264)88305518' }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
    <!-- About End -->


    <!-- Facts Start -->
    <div class="p-5 my-5 container-fluid facts">
        <div class="row g-5">
            <div class="col-md-6 col-xl-3 wow fadeIn" data-wow-delay="0.1s">
                <div class="p-5 text-center border">
                    <i class="mb-3 text-white fa fa-certificate fa-3x"></i>
                    <h1 class="mb-0 display-2 text-primary" data-toggle="counter-up">{{ $profile->pengalaman }}</h1>
                    <span class="text-white fs-5 fw-semi-bold">Tahun Pengalaman</span>
                </div>
            </div>
            <div class="col-md-6 col-xl-3 wow fadeIn" data-wow-delay="0.3s">
                <div class="p-5 text-center border">
                    <i class="mb-3 text-white fa fa-users-cog fa-3x"></i>
                    <h1 class="mb-0 display-2 text-primary" data-toggle="counter-up">{{ $profile->anggota }}</h1>
                    <span class="text-white fs-5 fw-semi-bold">Anggota Tim</span>
                </div>
            </div>
            <div class="col-md-6 col-xl-3 wow fadeIn" data-wow-delay="0.5s">
                <div class="p-5 text-center border">
                    <i class="mb-3 text-white fa fa-users fa-3x"></i>
                    <h1 class="mb-0 display-2 text-primary" data-toggle="counter-up">{{ $profile->penilaian }}</h1>
                    <span class="text-white fs-5 fw-semi-bold">Penilaian Positif</span>
                </div>
            </div>
            <div class="col-md-6 col-xl-3 wow fadeIn" data-wow-delay="0.7s">
                <div class="p-5 text-center border">
                    <i class="mb-3 text-white fa fa-check-double fa-3x"></i>
                    <h1 class="mb-0 display-2 text-primary" data-toggle="counter-up">{{ $profile->proyek }}</h1>
                    <span class="text-white fs-5 fw-semi-bold">Proyek Selesai</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->


    <!-- Features Start -->
    @if ($whychoose)
        <div class="py-5 container-xxl">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="position-relative me-lg-4">
                            <img class="img-fluid w-100" style="object-fit: cover; object-position: center; height: 800px"
                                src="{{ asset($whychoose->file ? $whychoose->file : 'assetsLanding/img/service-2.jpg') }}"
                                alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <p class="mb-2 fw-medium text-uppercase text-primary">{{ $whychoose->title }}</p>
                        <h1 class="mb-4 display-5">{{ $whychoose->subtitle }}</h1>
                        <div class="row gy-4">

                            @foreach ($whychooseDetail as $item)
                                <div class="col-12">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                            <i class="text-white fa fa-check"></i>
                                        </div>
                                        <div class="ms-4">
                                            <h4>{{ $item->title }}</h4>
                                            <span>{{ $item->description }}</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
    <!-- Features End -->


    <!-- Service Start -->
    @if (count($services) > 0)
        <div class="py-5 container-xxl" id="service">
            <div class="container">
                <div class="pb-4 mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <p class="mb-2 fw-medium text-uppercase text-primary">Layanan Sekolah</p>
                    <h1 class="mb-4 display-5">Kami Memberikan Pelayanan Terbaik</h1>
                </div>
                <div class="row gy-5 gx-4">

                    @foreach ($services as $service)
                        <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.1s">
                            <a href="{{$service->link}}">
                                <div class="service-item">
                                    <img class="img-fluid service-img-cover"
                                        src="{{ $service->file ? asset($service->file) : asset('assetsLanding/img/placeholder.jpg') }}"
                                        alt="service">
                                    <div class="service-img">
                                        <img class="img-fluid"
                                            src="{{ $service->file ? asset($service->file) : asset('assetsLanding/img/placeholder.jpg') }}"
                                            alt="service">
                                    </div>
                                    <div class="service-detail">
                                        <div class="service-title">
                                            <hr class="w-25">
                                            <h3 class="mb-0">{{ $service->title }}</h3>
                                            <hr class="w-25">
                                        </div>
                                        <div class="service-text">
                                            <p class="mb-0 text-white">{{ $service->description }}</p>
                                        </div>
                                    </div>
                                    {{-- <a class="btn btn-light" href="">Read More</a> --}}
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif
    <!-- Service End -->


    <!-- Fasilitas Start -->
    @if ($facility)
        <div class="px-0 pt-5 my-5 container-fluid bg-dark">
            <div class="mx-auto mt-5 text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="mb-2 fw-medium text-uppercase text-primary">FASILITAS</p>
                <h1 class="mb-5 text-white display-5">Fasilitas SD Plus 3 Al-Muhajirin</h1>
            </div>
            <div class="owl-carousel project-carousel wow fadeIn" data-wow-delay="0.1s">
                @foreach ($facility as $x)
                    <a class="project-item" href="">
                        <img class="img-fluid"
                            src="{{ $x->file ? asset($x->file) : asset('assetsLanding/img/placeholder.jpg') }}"
                            alt="">
                        <div class="project-title">
                            <h5 class="mb-0 text-primary">{{ $x->title }}</h5>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    @endif
    <!-- Project End -->


    <!-- Testimonial Start -->
    @if ($testimonials)
        <div class="py-5 container-xxl">
            <div class="container">
                <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <p class="mb-2 fw-medium text-uppercase text-primary">Testimonial</p>
                    <h1 class="mb-5 display-5">Apa Kata Mereka</h1>
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">

                    @foreach ($testimonials as $testi)
                        <div class="text-center testimonial-item">
                            <div class="testimonial-img position-relative">
                                <img class="mx-auto mb-5 img-fluid rounded-circle"
                                    src="{{ $testi->file ? asset($testi->file) : asset('assetsLanding/img/placeholder.jpg') }}">
                                <div class="btn-square bg-primary rounded-circle">
                                    <i class="text-white fa fa-quote-left"></i>
                                </div>
                            </div>
                            <div class="p-4 text-center rounded testimonial-text">
                                <p>{{ $testi->description }}</p>
                                <h5 class="mb-1">{{ $testi->nama }}</h5>
                                <span class="fst-italic">{{ $testi->title }}</span>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    @endif
    <!-- Testimonial End -->
@endsection
