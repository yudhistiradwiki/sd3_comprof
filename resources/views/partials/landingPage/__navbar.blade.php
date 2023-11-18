<!-- Topbar Start -->
<div class="px-0 container-fluid bg-dark">
    <div class="row g-0 d-none d-lg-flex">
        <div class="col-lg-6 ps-5 text-start">
            <div class="text-white h-100 d-inline-flex align-items-center">
                <span>Follow Us:</span>
                {{-- fb --}}
                @if($profile->facebook)
                <a class="btn btn-link text-light" href="{{ $profile->facebook }}" target="_blank">
                    <i class="fab fa-facebook-f"></i></a>
                @endif

                {{-- yt --}}
                @if($profile->youtube)
                <a class="btn btn-link text-light" href="{{ $profile->youtube }}" target="_blank">
                    <i class="fab fa-youtube"></i>
                </a>
                @endif

                {{-- linked --}}
                @if($profile->linkedin)
                <a class="btn btn-link text-light" href="{{ $profile->linkedin }}" target="_blank">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                @endif

                {{-- ig --}}
                @if($profile->instagram)
                <a class="btn btn-link text-light" href="{{ $profile->instagram }}" target="_blank">
                    <i class="fab fa-instagram"></i>
                </a>
                @endif
            </div>
        </div>
        <div class="col-lg-6 text-end">
            <div class="px-5 py-2 text-white h-100 topbar-right d-inline-flex align-items-center">
                <span class="fs-5 fw-bold me-2"><i class="fa fa-phone-alt me-2"></i>Call Us:</span>
                <span class="fs-5 fw-bold">
                    {{ $profile->telepon ? $profile->telepon : '-'}}
                </span>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->


<!-- Navbar Start -->
<nav class="py-0 bg-white navbar navbar-expand-lg navbar-light sticky-top pe-5">
    <a href="/" class="navbar-brand ps-5 me-0">
        <img src="{{ asset('logo/logo.png') }}" alt="logo" class="app-brand-logo demo" width="75">
        {{-- <h1 class="m-0 text-white">SD Plus 3 Al-Muhajirin</h1> --}}
    </a>
    <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="p-4 navbar-nav ms-auto p-lg-0">
            <a href="/" class="nav-item nav-link {{ (request()->is('/')) ? 'active' : '' }}">Home</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle {{ (request()->is('struktur-organisasi', 'visi-misi')) ? 'active' : '' }}" data-bs-toggle="dropdown">Profil Sekolah</a>
                <div class="m-0 dropdown-menu bg-light">
                    {{-- <a href="/#about" class="dropdown-item">About</a> --}}
                    <a href="/sambutan" class="dropdown-item">Sambutan Kepala Sekolah</a>
                    <a href="/visi-misi" class="dropdown-item {{ (request()->is('visi-misi')) ? 'active' : '' }}">Visi dan Misi</a>
                    <a href="/struktur-organisasi" class="dropdown-item {{ (request()->is('struktur-organisasi')) ? 'active' : '' }}">Struktur Organisasi</a>
                </div>
            </div>
            <a href="/service" class="nav-item nav-link {{ (request()->is('service')) ? 'active' : '' }}">Layanan Sekolah</a>
            <a href="/ppdb" class="nav-item nav-link {{ (request()->is('ppdb')) ? 'active' : '' }}">PPDB</a>
            <a href="/ummi" class="nav-item nav-link {{ (request()->is('ummi')) ? 'active' : '' }}">Ummi</a>
            <a href="/berita" class="nav-item nav-link {{ (request()->is('berita*')) ? 'active' : '' }}">Papan Informasi</a>
            <a href="/contact" class="nav-item nav-link {{ (request()->is('contact')) ? 'active' : '' }}">Kontak</a>
        </div>
        {{-- <a href="" class="px-3 btn btn-primary d-none d-lg-block">Get A Quote</a> --}}
    </div>
</nav>
<!-- Navbar End -->
