<!-- Footer Start -->
<div class="container-fluid bg-dark footer py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h5 class="text-white mb-4"> {{ $profile->name ? $profile->name : 'sd' }}</h5>
                <img src="{{ $profile->logo ? asset($profile->logo) : asset('logo/logo.png') }}" alt="logo" class="mb-2"
                    width="75">
                <p>
                    {{ $profile->about ? $profile->about : 'sd ' }}
                </p>
            </div>
            <div class="col-lg-2 col-md-6">
                <h5 class="text-white mb-4">Quick Links</h5>
                <a class="btn btn-link" href="/#about">About</a>
                <a class="btn btn-link" href="/service">Services</a>
                <a class="btn btn-link" href="/contact">Contact</a>

            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-white mb-4">Jam kerja</h5>
                <p class="mb-1">Senin - Jumat</p>
                <h6 class="text-light">08:00 - 17:00</h6>
                <p class="mb-1">Sabtu - Minggu</p>
                <h6 class="text-light">Tutup</h6>
            </div>
            <div class="col-lg-4 col-md-6">
                <h5 class="text-white mb-4">Contact Details</h5>
                <div class="row">
                    <div class="col-1">
                        <i class="fa fa-map-marker-alt me-3"></i>
                    </div>
                    <div class="col-11">
                        {{$profile->alamat ? $profile->alamat : 'Purwakarta' }}
                    </div>


                    <div class="col-1">
                        <i class="fa fa-phone-alt me-3"></i>
                    </div>
                    <div class="col-11">
                        {{ $profile->telepon ? $profile->telepon : '(0264)88305518'}}
                    </div>


                    <div class="col-1">
                        <i class="fa fa-envelope me-3"></i>
                    </div>
                    <div class="col-11">
                        {{ $profile->email ? $profile->email : 'sd' }}
                    </div>
                </div>

                <p class="mb-2">
                </p>
                <div class="d-flex pt-3">
                    {{-- ig --}}
                    @if($profile->instagram)
                    <a class="btn btn-square btn-primary rounded-circle me-2" href="{{ $profile->instagram }}"
                        target="_blank">
                        <i class="fab fa-instagram"></i>
                    </a>
                    @endif
                    {{-- fb --}}
                    @if($profile->facebook)
                    <a class="btn btn-square btn-primary rounded-circle me-2" href="{{ $profile->facebook }}"
                        target="_blank">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    @endif
                    {{-- yt --}}
                    @if($profile->youtube)
                    <a class="btn btn-square btn-primary rounded-circle me-2" href="{{ $profile->youtube }}"
                        target="_blank">
                        <i class="fab fa-youtube"></i>
                    </a>
                    @endif
                    {{-- linked --}}
                    @if($profile->linkedin)
                    <a class="btn btn-square btn-primary rounded-circle me-2" href="{{ $profile->linkedin }}"
                        target="_blank">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    @endif
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Copyright Start -->
<div class="container-fluid copyright bg-dark py-4">
    <div class="container text-center">
        <p class="mb-2">Copyright &copy; <a class="fw-semi-bold" href="#">Gen-Z Company</a>, All Right Reserved.
        </p>
    </div>
</div>
<!-- Copyright End -->
