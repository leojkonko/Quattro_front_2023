@extends('front.layout.app')

@section('content')
    <main id="main" style="background: #f5f5f5">

        <x-banners />
        <section class="d-lg-none py-2" style="background: #f5f5f5" data-aos="zoom-out-up">
            <div class="container position-relative">
                <div class="position-relative z-index-1">
                    <div class="">
                        <ul class="nav nav-pills" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-home-tab1" data-bs-toggle="pill" data-bs-target="#pills-home1" type="button" role="tab" aria-controls="pills-home1" aria-selected="true">
                                Home
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link position-relative" id="pills-profile-tab1" data-bs-toggle="pill" data-bs-target="#pills-profile1" type="button" role="tab" aria-controls="pills-profile1" aria-selected="false">
                                    <div class="w-100 h-100  start-0 bottom-0 z-index-background"></div>
                                    <span class="position-relative opacity-1" style="opacity: 1">Profile</span>
                                </button>
                            </li>
                          </ul>
                          <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active bg-dark px-1" id="pills-home1" role="tabpanel" aria-labelledby="pills-home-tab1">
                                <div class="ps-lg-3">
                                    <div class="row">
                                        @foreach (range(0,3) as $banner)
                                        <div class="col-lg-2 col-md-3 col-sm-4 col-6 mt-2 mb-1 d-flex justify-content-center">
                                            <select name="" id="" class="form-select js-example-basic-multiple" name="states[]" multiple="multiple" data-placeholder="Tipo do imóvel">
                                                @foreach (range(0,4) as $banne2r)
                                                <option value="opa">Tipo do imóvel</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        @endforeach
                                        <div class="col-lg-2 col-md-3 col-sm-4 col-6 d-flex justify-content-center">
                                            <button class="btn btn-outline-light rounded-0 my-2">
                                                Buscar
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade bg-dark px-1" id="pills-profile1" role="tabpanel" aria-labelledby="pills-profile-tab1">
                                <div class="ps-lg-3">
                                    <div class="row">
                                        @foreach (range(0,3) as $banner)
                                            <div class="col-lg-2 col-md-3 col-sm-4 col-6 mt-2 mb-1 d-flex justify-content-center">
                                                <select name="" id="" class="form-select js-example-basic-multiple" name="states[]" multiple="multiple" data-placeholder="Tipo do imóvel">
                                                    @foreach (range(0,4) as $banne2r)
                                                    <option value="opa">Tipo do imóvel</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        @endforeach
                                        <div class="col-lg-2 col-md-3 col-sm-4 col-6 d-flex justify-content-center">
                                            <button class="btn btn-outline-light rounded-0 my-2">
                                                Buscar
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </section>
        <section>   
            <div class="row g-0">
                <div class="locacoes-swiper swiper">
                    <div class="swiper-wrapper mb-4">
                
                        @foreach (range(0,6) as $image)
                            <div class="d-block swiper-slide" data-aos="zoom-out-up">
                                <div class="">
                                    <div class="ratio ratio-80 ratio-principal" style="--bs-aspect-ratio: 80%;">
                                        <div class="w-100 h-100 z-index-1 imagem-effect-bg" style="background: #202020;
                                        opacity: 0.6;" id="imagem-effect"></div>
                                        <img class="object-fit-cover w-100 h-100  efeito-img imagem-effect" id="" src="{{ asset("front/images/backgrounds/casa.png") }}" alt="">
                                        <div class="div-conteudo">
                                            <img class="position-absolute top-50 start-50 translate-middle z-index-1 img-icone" width="50px" src="{{ asset("front/images/backgrounds/icone.svg") }}" alt="">
                                            <h2 class="position-absolute top-50 start-50 translate-middle z-index-1 mt-3 fs-32 fw-600 text-white">
                                                Casas
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                
                    </div>
                    <div class="w-100 m-auto position-relative z-index-1 controle-banner" style="width: 200px; height: 100px;margin-top: -10rem;margin-bottom: 7rem;">
                        <div class=" w-100 h-100 position-absolute">
                            <div class="swiper-button-prev">
                                <svg width="13" height="14" viewBox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13 7L1 7M1 7L7 13M1 7L7 0.999999" stroke="#3C4C71" stroke-linejoin="round"/>
                                </svg>                                                                         
                            </div>
                            <div class="swiper-button-next">
                                <svg width="13" height="14" viewBox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 7H12M12 7L6 1M12 7L6 13" stroke="#3C4C71" stroke-linejoin="round"/>
                                </svg>                                                                                                                                           
                            </div>
                            <div class="swiper-pagination mb-2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pt-lg-4 pt-2">
            <div class="container">
                <div class="row">
                    <h2 class="fs-32 fw-600 mb-2 w-100 text-center">
                        <svg class="me-1"width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="1.5" y="10.5" width="12" height="12" transform="rotate(-45 1.5 10.5)" stroke="#808080" stroke-width="2"/>
                        </svg>                            
                        Prontos para morar
                        <svg class="ms-1"width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="1.5" y="10.5" width="12" height="12" transform="rotate(-45 1.5 10.5)" stroke="#808080" stroke-width="2"/>
                        </svg>  
                    </h2>
                    <x-destaques />
                </div>
            </div>
        </section>
        <section class="" data-aos="zoom-out-up">
            <div class="ratio ratio-lg-32 ratio-6x9 d-none d-lg-block">
                <img class="w-100 h-100 object-fit-cover" src="{{ asset("front/images/backgrounds/encontre.png") }}" alt="" title="">
            </div>
            <div class="container d-lg-none">
                <div class="ratio ratio-6x9">
                    <img class="w-100 h-100 object-fit-cover" src="{{ asset("front/images/backgrounds/encontre.png") }}" alt="" title="">
                </div>
            </div>
        </section>
        <section class="py-lg-4 py-2">
            <div class="container">
                <div class="row">
                    <h2 class="fs-32 fw-600 mb-2 w-100 text-center">
                        <svg class="me-1"width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="1.5" y="10.5" width="12" height="12" transform="rotate(-45 1.5 10.5)" stroke="#808080" stroke-width="2"/>
                        </svg>                            
                        Destaques
                        <svg class="ms-1"width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="1.5" y="10.5" width="12" height="12" transform="rotate(-45 1.5 10.5)" stroke="#808080" stroke-width="2"/>
                        </svg>  
                    </h2>
                    <x-destaques />
                </div>
            </div>
        </section>
    </main>
@endsection
