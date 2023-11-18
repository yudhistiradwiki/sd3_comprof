@extends('layouts.layout_landing')

@section('title')
    UMMI
@endsection

@section('content')
    <!-- Page Header Start -->
    <div class="py-5 mb-5 container-fluid page-header wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="text-white display-3 animated slideInRight">Ummi</h1>
            <nav aria-label="breadcrumb">
                <ol class="mb-0 breadcrumb animated slideInRight">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Ummi</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="py-5 container-xxl">
        {{-- @if ($ppdb) --}}
            <div class="container">
                <section id="faq" class="faq">
                    <div class="container-fluid" data-aos="fade-up">
                        <div class="row gy-4">
                            <div class="order-1 col-lg-5 align-items-stretch order-lg-2 img">&nbsp;
                                <img src="{{ asset('file/ummi/ummi.png') }}"
                                    width="500px" height="530px">
                            </div>
                            <div
                                class="order-2 col-lg-7 d-flex flex-column justify-content-center align-items-stretch order-lg-1">
                                <div class="content px-xl-5">
                                    <h2><strong> Metodologi Pembelajaran Ummi</strong>
                                    </h2>
                                    <br>
                                    <p>
                                        Selamat datang di metodologi pembelajaran Ummi. Anda bisa membaca dan mendownloadnya secara gratis.
                                    </p>
                                </div>

                                <div class="accordion accordion-flush px-xl-5" id="faqlist">
{{--
                                    @foreach ($ppdbdetail as $item) --}}
                                        <div class="accordion-item" data-aos="fade-up" data-aos-delay="200">
                                            <h3 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#faq-content-1">
                                                    {{-- <i class="bi bi-question-circle question-icon"></i> --}}
                                                    <strong>Materi Metode Ummi</strong>
                                                </button>
                                            </h3>
                                            <div id="faq-content-1" class="accordion-collapse collapse"
                                                data-bs-parent="#faqlist">
                                                <div class="accordion-body">
                                                    <a href="https://drive.google.com/file/d/1zpt1UXaLZwSAdY8YlW0MV64rhVjbPQmv/view?usp=sharing"><p style="text-align: justify">Ummi Jilid 1</p></a>
                                                    <a href="https://drive.google.com/file/d/157Z0tE1NkTGLKQeEn0Q4PKGqxa3het7l/view?usp=sharing"><p style="text-align: justify">Ummi Jilid 2</p></a>
                                                    <a href="https://docs.google.com/presentation/d/1jgj0FoO_Gp6mxAIa_jgJPoLhjf5nVm9h/edit?usp=sharing&ouid=111896522886963390727&rtpof=true&sd=true"><p style="text-align: justify">Ummi Jilid 3</p></a>
                                                    <a href="https://docs.google.com/presentation/d/1K71uKxTX0p_iFM0oGnCZcxdgoepqXgqF/edit?usp=sharing&ouid=111896522886963390727&rtpof=true&sd=true"><p style="text-align: justify">Ummi Jilid 4</p></a>
                                                    <a href="https://drive.google.com/file/d/1trgJqNjTSaEagrelWTtN8wAL7oVof3lC/view?usp=sharing"><p style="text-align: justify">Ummi Jilid 5</p></a>
                                                    <a href="https://drive.google.com/file/d/1asVuX6wEMz2p59ayFXfk64ApTW7uHLmP/view?usp=sharing"><p style="text-align: justify">Ummi Jilid 6</p></a>
                                                    <a href="https://drive.google.com/file/d/1OI7C7GwYyiTGkK2viTSD3NabXdv7KKiq/view?usp=sharing"><p style="text-align: justify">Ummi Ghoroibul Qur'an</p></a>
                                                    <a href="https://drive.google.com/file/d/1EB-K0nJDHwL5odf2f8fyIWy3Aby94Kpb/view?usp=sharing"><p style="text-align: justify">Ummi Tajwid Dasar</p></a>
                                                </div>
                                            </div>
                                        </div><!-- # Faq item-->
                                    {{-- @endforeach --}}
                                </div>

                            </div>


                        </div>
                    </div>
                </section><!-- End F.A.Q Section -->
        {{-- @endif --}}
    </div>
    </div><!-- Area End -->
@endsection
