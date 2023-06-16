@extends('front.layout.app')

@section('content')
    <main id="empresa" class="row gx-0 gy-2 gy-lg-4 py-lg-4 py-2 overflow-hidden" style="background: #f5f5f5">
        <div class="position-absolute top-0 start-0" id="infos"></div>
        <section class="">
            <div class="container">
                <div class="row">
                    <div class="comparar-swiper swiper">
                        <div class="swiper-wrapper mb-4">
                    @php
                        $n = 0
                    @endphp
                            @foreach (range(0,4) as $image)
                            @php
                                $n++
                            @endphp
                                <div class="d-block swiper-slide" data-aos="zoom-out-up">
                                    <div class="ratio ratio-80" style="--bs-aspect-ratio: 80%;">
                                        <img class="w-100 h-100 object-fit-cover" src="{{ asset("front/images/backgrounds/casa-home.png") }}" alt="" title="">
                                        <div class="bottom-0 start-0 z-index-1" id="fundo_img"></div>
                                        <div class="z-index-2 start-0 top-0" style="left: 3%; top:3%;">
                                            <button class="btn-dark btn fs-12 fw-400 rounded-0 me-0-50">Vendas</button>
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="position-relative z-index-3" id="fundo_black">
                                            <div class=" pb-1">
                                                <div class="bg-white text-lg-start text-center" style="box-shadow: 0px 0px 24px rgba(0, 0, 0, 0.15);">
                                                    <p class="fs-16 fw-400 w-100 bg-white p-0-50 p-sm-1 mb-0">Casa nova, mobiliada e equipada</p>
                                                    <p class="fs-16 fw-400  p-0-50 p-sm-1 mb-0 bg-cinza">
                                                        <svg class="me-0-25" width="18" height="12" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M1 0V5C1 5.55228 1.44772 6 2 6H16C16.5523 6 17 6.44772 17 7V9M1 12V10C1 9.44772 1.44772 9 2 9H17M17 12V9M2.5 4H6.5" stroke="#808080"/>
                                                        </svg>                                                        
                                                        1
                                                    </p>
                                                    <p class="fs-16 fw-400 p-0-50 p-sm-1 mb-0 bg-white">
                                                        <svg class="me-0-25" width="18" height="12" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M1 0V5C1 5.55228 1.44772 6 2 6H16C16.5523 6 17 6.44772 17 7V9M1 12V10C1 9.44772 1.44772 9 2 9H17M17 12V9M2.5 4H6.5" stroke="#808080"/>
                                                        </svg>                                                        
                                                        1
                                                    </p>
                                                    <p class="fs-16 fw-400 p-0-50 p-sm-1 mb-0 bg-cinza">
                                                        <svg class="me-0-25" width="18" height="12" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M1 0V5C1 5.55228 1.44772 6 2 6H16C16.5523 6 17 6.44772 17 7V9M1 12V10C1 9.44772 1.44772 9 2 9H17M17 12V9M2.5 4H6.5" stroke="#808080"/>
                                                        </svg>                                                        
                                                        1
                                                    </p>
                                                    <p class="fs-16 fw-400 p-0-50 p-sm-1 mb-0 bg-white">
                                                        <svg class="me-0-25" width="18" height="12" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M1 0V5C1 5.55228 1.44772 6 2 6H16C16.5523 6 17 6.44772 17 7V9M1 12V10C1 9.44772 1.44772 9 2 9H17M17 12V9M2.5 4H6.5" stroke="#808080"/>
                                                        </svg>                                                        
                                                        1
                                                    </p>
                                                    <p class="fs-16 fw-400 p-0-50 p-sm-1 mb-0 bg-cinza">
                                                        <svg class="me-0-25" width="18" height="12" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M1 0V5C1 5.55228 1.44772 6 2 6H16C16.5523 6 17 6.44772 17 7V9M1 12V10C1 9.44772 1.44772 9 2 9H17M17 12V9M2.5 4H6.5" stroke="#808080"/>
                                                        </svg>                                                        
                                                        1
                                                    </p>
                                                    <p class="fs-16 fw-400 p-0-50 p-sm-1 mb-0 bg-white">
                                                        R$ 1.800.000,00
                                                    </p>
                                                </div>
                                                <div class="gap-1 mt-2">
                                                    <a href="{{ route_lang('products') }}">
                                                        <button class="btn btn-dark fs-16 fw-400 rounded-0 w-100">
                                                            Fale com um corretor
                                                        </button>
                                                    </a>
                                                    <button id="comprar" class="btn fs-16 fw-400 rounded-0 w-100 d-flex justify-content-center text-decoration-underline">
                                                        Remover imóvel
                                                    </button>
                                                </div>
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
            </div>
        </section>
        <section class="py-lg-4 py-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="ratio ratio-6x9" data-aos="fade-left">
                            <img class="w-100 h-100 object-fit-contain" src="{{ asset("front/images/backgrounds/comparar.png") }}" alt="" title="">
                        </div>
                    </div>
                    <div class="col-lg-8 d-flex align-items-center justify-content-center" data-aos="fade-right">
                        <div class="px-lg-4 text-secondary">
                            <h2 class="text-secondary w-100 text-lg-start text-center fs-48 fw-600 mb-1">Você ainda não pode comparar!</h2>
                            <p class="fs-18 fw-400">
                                Para utilizar nossa ferramenta de comparação, leia o passo a passo e
                                siga as instruções indicadas:
                            </p>
                            <p class="fs-18 fw-400">
                                1. Ao encontrar um imóvel de interesse que queira comparar, clique no botão ‘Comparar’, disposto ao lado do botão ‘Saiba mais’, e sinalizado na imagem ao lado.
                            </p>
                            <p class="fs-18 fw-400">
                                2. Adicione no mínimo dois imóveis para que a comparação funcione corretamente. Um contador numérico no botão e no cabeçalho do site indicarão a quantidade de imóveis selecionados.
                            </p>
                            <p class="fs-18 fw-400">
                                3. Com os imóveis desejados selecionados, acesse a página ‘Comparar’ novamente e aproveite a ferramenta da QUATTRO. 
                            </p>
                            <div class="d-flex w-100 justify-content-lg-start justify-content-center">
                                <button class="btn btn-dark rounded-0 mt-1">
                                    Encontrat imóveis
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection