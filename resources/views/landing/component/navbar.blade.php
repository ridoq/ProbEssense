<nav class="layout-navbar shadow-none py-0">
    <div class="navbar navbar-expand-lg landing-navbar px-4 px-md-8"
        style="border: none; border-radius: 0px; border-bottom: 1px solid rgba(255,255,255,.2); border-top: 1px solid rgba(255,255,255,.2); background:rgba(0,0,0,.1);">
        <div class="navbar-brand app-brand demo d-flex py-0 py-lg-2 me-auto">
            <button class="navbar-toggler border-0 px-0 me-2" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="tf-icons ri-menu-fill ri-24px align-middle"></i>
            </button>
            <a href="{{ route('landing') }}" class="app-brand-link">
                <img src="{{ asset('assets/img/logo.jpg') }}" style="height: 40px; border-radius:10px;" alt="">
                <span class="app-brand-text demo menu-text fw-semibold ms-2 ps-1 text-white">ProboCulture</span>
            </a>
        </div>
        <div class="collapse navbar-collapse landing-nav-menu" style="flex-grow: 0" id="navbarSupportedContent">
            <button class="navbar-toggler border-0 text-heading position-absolute end-0 top-0 scaleX-n1-rtl"
                type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="tf-icons ri-close-fill"></i>
            </button>
            <ul class="navbar-nav me-auto p-4 p-lg-0 ms-auto">
                <li class="nav-item">
                    <a class="nav-link fw-medium {{ request()->routeIs('landing') ? 'text-primary' : '' }}"
                        href="{{ route('landing') }}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-medium {{ request()->routeIs('about') ? 'text-primary' : '' }}"
                        href="{{ route('about') }}">Tentang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-medium {{ request()->routeIs('budaya') ? 'text-primary' : '' }}"
                        href="{{ route('budaya') }}">Budaya</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-medium {{ request()->routeIs('umkm') ? 'text-primary' : '' }}"
                        href="{{ route('umkm') }}">UMKM</a>
                </li>
            </ul>
        </div>
        <div class="landing-menu-overlay d-lg-none" style="background: rgba(0,0,0,.3)"></div>
    </div>
</nav>
