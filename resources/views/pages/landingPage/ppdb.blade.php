@extends('layouts.layout_landing')

@section('title')
    PPDB
@endsection

@section('content')
    <!-- Page Header Start -->
    <div class="py-5 mb-5 container-fluid page-header wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="text-white display-3 animated slideInRight">PPDB</h1>
            <nav aria-label="breadcrumb">
                <ol class="mb-0 breadcrumb animated slideInRight">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Penerimaan Peserta Didik Baru</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="py-5 container-xxl">
        @if ($ppdb)
            <div class="container">
                <section id="faq" class="faq">
                    <div class="container-fluid" data-aos="fade-up">
                        <div class="row gy-4">
                            <div
                                class="order-2 col-lg-7 d-flex flex-column justify-content-center align-items-stretch order-lg-1">
                                <div class="content px-xl-5">
                                    <h2 style="text-align: center;"><strong> {{ $ppdb->title }}</strong>
                                    </h2>
                                    <br>
                                    <p>
                                        {{ $ppdb->subtitle }}
                                    </p>
                                </div>

                                <div class="accordion accordion-flush px-xl-5" id="faqlist">

                                    <?php $aos = 100; ?>

                                    @foreach ($ppdbdetail as $item)
                                        <div class="accordion-item" data-aos="fade-up" data-aos-delay="{{ $aos += 100 }}">
                                            <h3 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#faq-content-{{ $loop->iteration }}">
                                                    {{-- <i class="bi bi-question-circle question-icon"></i> --}}
                                                    <strong>{{ $loop->iteration }}. {{ $item->title }}</strong>
                                                </button>
                                            </h3>
                                            <div id="faq-content-{{ $loop->iteration }}" class="accordion-collapse collapse"
                                                data-bs-parent="#faqlist">
                                                <div class="accordion-body">
                                                    <p style="text-align: justify">{{ $item->description }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div><!-- # Faq item-->
                                    @endforeach
                                    <br>
                                    <button class="btn btn-outline-danger btn-block">Form Pendaftaran</button>
                                </div>

                            </div>

                            <div class="order-1 col-lg-5 align-items-stretch order-lg-2 img">&nbsp;
                                <img src="{{ asset($ppdb->file ? $ppdb->file : 'assetsLanding/img/service-2.jpg') }}"
                                    width="500px" height="530px">
                            </div>
                        </div>
                    </div>
                </section><!-- End F.A.Q Section -->
        @endif
    </div>
    </div><!-- Area End -->

    <!-- Sambutan Start -->
    <div class="p-5 my-5 container-fluid sambutan">
        <center>
            <h2>Rincian Biaya Pendidikan</h2>
        </center><br>
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="position-relative me-lg-4">
                    <center>
                        <h6>Kelas Reguler</h6>
                    </center>
                    <img class="img-fluid w-100" style="object-fit: cover; object-position: center; height: 650px"
                        src="{{ asset('file/biaya/reguler-1.png') }}" alt=""><br><br>
                    <center>
                        <a href="{{ asset('file/biaya/reguler-1.pdf') }}" class="btn btn-outline-danger btn-block" download><i class="fa fa-download"></i> Download PDF</a>
                    </center>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="position-relative me-lg-4">
                    <center>
                        <h6>Kelas Bahasa & Tahfidz</h6>
                    </center>
                    <img class="img-fluid w-100" style="object-fit: cover; object-position: center; height: 650px"
                        src="{{ asset('file/biaya/tahfidz.png') }}" alt=""><br><br>
                    <center>
                        <a href="{{ asset('file/biaya/tahfidz.pdf') }}" class="btn btn-outline-danger btn-block" download><i class="fa fa-download"></i> Download PDF</a>
                    </center>
                </div>
            </div>
        </div>
    </div>
    <!-- Sambutan End -->
@endsection
