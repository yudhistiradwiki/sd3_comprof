@extends('layouts.layout_landing')

@section('title')
KONTAK
@endsection

@section('content')
<!-- Page Header Start -->
<div class="py-5 mb-5 container-fluid page-header wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <h1 class="text-white display-3 animated slideInRight">Kontak</h1>
        <nav aria-label="breadcrumb">
            <ol class="mb-0 breadcrumb animated slideInRight">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Kontak</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Contact Start -->
<div class="py-5 container-xxl">
    <div class="container">
        <div class="mb-5 row g-5 justify-content-center">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="p-5 text-center bg-light h-100">
                    <div class="mx-auto mb-4 bg-white btn-square rounded-circle" style="width: 90px; height: 90px;">
                        <i class="fa fa-phone-alt fa-2x text-primary"></i>
                    </div>
                    <h4 class="mb-3">Nomor Telepon</h4>
                    <p class="mb-2">
                        {{ $profile->telepon ? $profile->telepon : '(0264)88305518'}}
                    </p>

                    <br>
                    @if($profile->whatsapp)
                    <a class="px-4 btn btn-primary"
                        href="https://api.whatsapp.com/send?phone=62{{ substr($profile->whatsapp, 1) }}"
                        target="_blank">
                        Chat via Whatsapp
                        <i class="fa fa-arrow-right ms-2"></i>
                    </a>
                    @endif
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="p-5 text-center bg-light h-100">
                    <div class="mx-auto mb-4 bg-white btn-square rounded-circle" style="width: 90px; height: 90px;">
                        <i class="fa fa-envelope-open fa-2x text-primary"></i>
                    </div>
                    <h4 class="mb-3">Email</h4>
                    <p class="mb-2">
                        {{ $profile->email ? $profile->email : 'pt.nuryeni2018@gmail.com'}}
                    </p>
                    @if($profile->email)
                    <a class="px-4 btn btn-primary" href="mailto:{{ $profile->email }}">
                        Email Sekarang <i class="fa fa-arrow-right ms-2"></i>
                    </a>
                    @endif
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="p-5 text-center bg-light h-100">
                    <div class="mx-auto mb-4 bg-white btn-square rounded-circle" style="width: 90px; height: 90px;">
                        <i class="fa fa-map-marker-alt fa-2x text-primary"></i>
                    </div>
                    <h4 class="mb-3">Alamat Kantor</h4>
                    <p class="mb-2">
                        {{$profile->alamat ? $profile->alamat : 'Cilangkap, Kec. Babakancikao, Kabupaten Purwakarta,
                        Jawa Barat 41151' }}
                    </p>
                    @if($profile->maps)
                    <a class="px-4 btn btn-primary"
                        href="{{ $profile->maps ? $profile->maps : 'https://goo.gl/maps/TSFRY1FHQkHWhtoK9'}} "
                        target="blank">
                        Arahkan
                        <i class="fa fa-arrow-right ms-2"></i>
                    </a>
                    @endif

                </div>
            </div>
        </div>
        <div class="mb-5 row">
            <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                <iframe class="w-100"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.0021132670786!2d107.45750737483979!3d-6.521413563754339!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e690d774b217251%3A0xf1c463b471e01297!2sSD%20Plus%203%20Al-Muhajirin%20Purwakarta!5e0!3m2!1sid!2sid!4v1699644409910!5m2!1sid!2sid"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <p class="mb-2 fw-medium text-uppercase text-primary">Kontak Kami</p>
                <h1 class="mb-4 display-5">Jangan Ragu Untuk Menghubungi Kami</h1>
                <p class="mb-4">Jika Anda memiliki pertanyaan atau membutuhkan informasi, silahkan hubungi kami atau
                    mengisi formulir di samping ini:</p>
                <div class="row g-4">
                    <div class="col-6">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-square bg-primary rounded-circle">
                                <i class="text-white fa fa-phone-alt"></i>
                            </div>
                            <div class="ms-3">
                                <h6>Telepon</h6>
                                <span>{{ $profile->telepon ? $profile->telepon : '(0264)88305518'}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-square bg-primary rounded-circle">
                                <i class="text-white fa fa-envelope"></i>
                            </div>
                            <div class="ms-3">
                                <h6>Email</h6>
                                <span>{{ $profile->email ? $profile->email : 'pt.nuryeni2018@gmail.com'}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <form method="POST" action="{{ route('contact.store') }}">
                    @csrf

                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input name="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                    id="name" placeholder="Nama" value="{{ old('name') }}">
                                <label for="name">Nama</label>
                                @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input name="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" id="email"
                                    placeholder="Email" value="{{ old('email') }}">
                                <label for="email">Email</label>
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input name="phone" type="text"
                                    class="form-control @error('phone') is-invalid @enderror" id="phone"
                                    placeholder="phone" value="{{ old('phone') }}">
                                <label for="phone">Telepon</label>
                                @error('phone')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input name="subject" type="text"
                                    class="form-control @error('subject') is-invalid @enderror" id="subject"
                                    placeholder="Subject" value="{{ old('subject') }}">
                                <label for="subject">Subject</label>
                                @error('subject')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea name="message" class="form-control @error('message') is-invalid @enderror"
                                    placeholder="Pesan" id="message" style="height: 150px"
                                    value="">{{ old('message') }}</textarea>
                                <label for="message">Pesan</label>
                                @error('message')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="px-5 py-3 btn btn-primary" type="submit">Kirim Pesan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->



@endsection
