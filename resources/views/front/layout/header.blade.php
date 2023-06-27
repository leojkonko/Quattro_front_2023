<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <x-custom-code type="head" />
    <x-lgpd-head-script />

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Agência Ellite Digital">

    {{-- Favicons --}}
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('front/images/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('front/images/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('front/images/favicons/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('front/images/favicons/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('front/images/favicons/safari-pinned-tab.svg') }}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    {{-- Fonte temporária --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">

    {{-- Swiper.js --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.2.0/swiper-bundle.min.css" integrity="sha512-Ja1oxinMmERBeokXx+nbQVVXeNX771tnUSWWOK4mGIbDAvMrWcRsiteRyTP2rgdmF8bwjLdEJADIwdMXQA5ccg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- Fancybox --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    {{--  --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    {{-- Front css --}}
    @vite(['resources/front/sass/vendors/bootstrap/bootstrap.scss', 'resources/front/sass/main.scss'])

    <x-head-tags />
    @livewireStyles
</head>

<body>
    <x-custom-code type="body" />

    <header class="header w-100  isolation-isolate position-absolute w-100 top-0 start-0 w-100 py-1 py-lg-2" data-aos="zoom-out-up">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-2 col-6">
                    <a class="d-flex header-logo" href="{{ route('home') }}" title="Página principal">
                        <img class="" width="100px" src="{{ asset('front/images/logos/logo.svg') }}" alt="Logo {{ env('APP_NAME') }}">
                    </a>
                </div>

                <div class="col-lg-7 col-6 me-auto m-lg-auto d-flex justify-content-end justify-content-lg-center">

                    {{-- Botão mobile --}}
                    <button class="d-lg-none btn btn-outline-light p-0-50 p-sm-1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasHeader" aria-controls="offcanvasHeader">
                        <svg class="w-1-50 h-1-50" xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" stroke-width="1.5" stroke="white">
                            <path stroke-linecap="white" stroke-linejoin="white" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>

                    <div class="offcanvas-lg offcanvas-start" tabindex="-1" id="offcanvasHeader" aria-labelledby="offcanvasHeaderLabel">
                        <div class="offcanvas-header">
                            <button type="button" class="btn-close text-white" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasHeader" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body position-relative">
                            <div class="d-flex justify-content-center w-100 gap-4">
                                <x-site-menu />
                            </div>
                            <div class="position-absolute start-50 translate-middle-x d-none img-offcanvas" style="bottom: 4%;">
                                <a class="d-flex header-logo" href="{{ route('home') }}" title="Página principal">
                                    <img class="w-100 h-100 object-fit-contain" src="{{ asset('front/images/logos/logo.svg') }}" alt="Logo {{ env('APP_NAME') }}">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="col-lg-3 d-flex justify-content-end ms-auto d-none d-lg-flex">
                        <div>
                            <button class="btn btn-outline-light rounded-0">
                                Área do cliente
                            </button>
                        </div>                                
                    </div>
                </div>
            </div>
        </div>
    </header>
    <header class="header w-100  isolation-isolate position-absolute w-100 top-0 start-0 w-100 py-1 py-lg-2" id="headerBody">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-2 col-6">
                    <a class="d-flex header-logo" href="{{ route('home') }}" title="Página principal">
                        <img class="" width="100px" src="{{ asset('front/images/logos/logo.svg') }}" alt="Logo {{ env('APP_NAME') }}">
                    </a>
                </div>

                <div class="col-lg-7 col-6 me-auto m-lg-auto d-flex justify-content-end justify-content-lg-center">

                    {{-- Botão mobile --}}
                    <button class="d-lg-none btn btn-outline-light p-0-50 p-sm-1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasHeader" aria-controls="offcanvasHeader">
                        <svg class="w-1-50 h-1-50" xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" stroke-width="1.5" stroke="white">
                            <path stroke-linecap="white" stroke-linejoin="white" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>

                    <div class="offcanvas-lg offcanvas-start" tabindex="-1" id="offcanvasHeader" aria-labelledby="offcanvasHeaderLabel">
                        <div class="offcanvas-header">
                            <button type="button" class="btn-close text-white" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasHeader" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body position-relative">
                            <div class="d-flex justify-content-center w-100 gap-4">
                                <x-site-menu />
                            </div>
                            <div class="position-absolute start-50 translate-middle-x d-none img-offcanvas" style="bottom: 4%;">
                                <a class="d-flex header-logo" href="{{ route('home') }}" title="Página principal">
                                    <img class="w-100 h-100 object-fit-contain" src="{{ asset('front/images/logos/logo.svg') }}" alt="Logo {{ env('APP_NAME') }}">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="col-lg-3 d-flex justify-content-end ms-auto d-none d-lg-flex">
                        <div>
                            <button class="btn btn-outline-light rounded-0">
                                Área do cliente
                            </button>
                        </div>                                
                    </div>
                </div>
            </div>
        </div>
    </header>

    @if (!Route::is('home'))
        <x-breadcrumbs />
    @endif
