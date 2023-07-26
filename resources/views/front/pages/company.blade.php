@extends('front.layout.app')

@section('content')

    <main id="empresa" class="row gx-0 gy-2 gy-lg-4 overflow-hidden">
<div class="position-absolute top-0 start-0" id="infos"></div>
        <section class="mt-2">
            <div class="ratio ratio-lg-32 ratio-md-16x9 ratio-1x1" data-aos="fade-left">
                <a href="{{ asset("front/images/backgrounds/company.png") }}" data-fancybox="gallery">
                <svg class="position-absolute start-50 top-50 translate-middle z-index-2 width-mobile" style="" width="160" height="160" viewBox="0 0 160 160" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.9" fill-rule="evenodd" clip-rule="evenodd" d="M80 160C124.183 160 160 124.183 160 80C160 35.8172 124.183 0 80 0C35.8172 0 0 35.8172 0 80C0 124.183 35.8172 160 80 160ZM60 114.641L120 80L60 45.359L60 114.641Z" fill="white"/>
                </svg>                    
                
                    <img class="w-100 h-100 object-fit-cover" data-aos="fade-right" src="{{ asset("front/images/backgrounds/company.png") }}" alt="">
                </a>
                <img class="start-0 top-50 translate-middle-y z-index-2 svg-empresa" style="width: 580px !important;" src="{{ asset("front/images/backgrounds/sombra-company.svg") }}" alt="">                                 
            </div>
        </section>
        <section class="mt-0">
            <div class="container container-start">
                <div class="row">
                    <div class="col-xl-7 col-lg-6 d-flex align-items-center" data-aos="fade-right"
                    data-aos-offset="300"
                    data-aos-easing="ease-in-sine">
                        <div class="p-lg-2 p-xl-0 py-2 py-lg-0">
                            <h2 class="fs-32 fw-600 mb-2 w-100 text-center text-lg-start">                          
                                    QUEM SOMOS
                                <svg class="ms-1"width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="1.5" y="10.5" width="12" height="12" transform="rotate(-45 1.5 10.5)" stroke="#808080" stroke-width="2"/>
                                </svg>  
                            </h2>
                                <div class="text-center text-lg-start text-company">
                                    <p class="fs-18 fw-400">
                                        Precisando de uma solução ou querendo investir no mercado imobiliário, conte com a máxima transparência e atenção de um corretor especializado. Somos especializados na compra e venda de imóveis, onde prestamos toda assessoria necessária à realização de uma transação segura e tranquila, com acompanhamento jurídico e operacional de qualidade.
                                    </p>
                                    <p class="fs-18 fw-400">
                                        Reconhecidos pela ética profissional e transparência no mercado imobiliário, oferecemos a nossos clientes um atendimento personalizado, resultando em segurança e satisfação a todos os negócios realizados. Possuímos profissionais capacitados e diferenciados para uma total eficiência e garantia nas intermediações imobiliárias. Entre em contato, teremos o prazer em ajudá-lo a realizar o seu sonho.
                                    </p>
                                </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6" style="" data-aos="fade-left"
                    data-aos-offset="300"
                    data-aos-easing="ease-in-sine">
                        <div class="empresa-swiper swiper h-100">
                            <div class="swiper-wrapper">
                        
                                @foreach (range(0,2) as $image)
                                    <div class="d-block swiper-slide">
                                        <a href="{{ url("/front/images/backgrounds/empresa.png") }}" data-fancybox="gallery" class="d-block video-slide swiper-slide">
                                            <div class="ratio ratio-80 h-100">
                                                <img class="w-100 h-100 object-fit-cover" src="{{ url("/front/images/backgrounds/empresa.png") }}" alt="Icone">
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                        
                            </div> 
                            <div class="w-100 m-auto position-relative z-index-1 controle-banner" style="width: 200px; height: 100px;">
                                <div class=" w-100 h-100 position-absolute" style="margin-top: -5rem;">
                                    <div class="swiper-button-prev">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M16 10L4 10M4 10L10 16M4 10L10 4" stroke="white" stroke-linejoin="round"/>
                                        </svg>                                                                                                                   
                                    </div>
                                    <div class="swiper-button-next">
                                        <svg width="13" height="14" viewBox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 7L12 7M12 7L6 1M12 7L6 13" stroke="white" stroke-linejoin="round"/>
                                        </svg>                                                                                                                                                                                      
                                    </div>
                                    <div class="swiper-pagination mb-2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-secondary py-lg-4 py-2 mt-0 position-relative z-index-1" style="background-image: url({{ url("/front/images/backgrounds/empresa2.png") }}); background-repeat: no-repeat;
        background-position-y: 50%;
        background-size: cover;">
        <div class="position-absolute h-100 w-100 z-index-background top-0 start-0" style="background: #202020;
        opacity: 0.8;"></div>
            <div class="container">
                <div class="row">
                    @php
                        $texts = [
                            'missao' => [
                                //'image' => $page->icon_mission->first()->url(),
                                'title' => 'Missão',
                                //'description' => $page->text_mission,
                            ],
                            'visao' => [
                                //'image' => $page->icon_vision->first()->url(),
                                'title' => 'Visão',
                                //'description' => $page->text_vision,
                            ],
                            'valores' => [
                                //'image' => $page->icon_values->first()->url(),
                                'title' => 'Valores',
                                //'description' => $page->text_values,
                            ],
                        ];
                        $opa = 0
                    @endphp
                    @foreach ($texts as $text)
                    @php
                    $opa++
                    @endphp
                        <div class="col-lg-4 border-dark {{ $opa >= 2 ? 'border-lg-start' : '' }} d-flex justify-content-center align-items-start">
                            <div class="px-2 text-center text-lg-start py-2">
                                <h2 class="fs-32 text-primary fw-600 text-center text-lg-start w-100 mt-1 mt-lg-0 text-secondary">
                                    {{ __($text['title']) }}
                                </h2>
                                <p class="p text-center text-lg-start px-1">
                                    @if ($text['title'] == "Missão")
                                        <p class="fs-16 fw-400 text-white" data-aos="zoom-out-down">
                                            O Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão. O Lorem Ipsum tem vindo a ser o texto padrão usado por estas indústrias desde o ano de 1500, quando uma misturou os caracteres de um texto para criar um espécime de livro.
                                        </p>
                                        @elseif($text['title'] == "Visão")
                                        <p class="fs-16 fw-400 text-white" data-aos="zoom-out-down">
                                            O Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão. O Lorem Ipsum tem vindo a ser o texto padrão usado por estas indústrias desde o ano de 1500, quando uma misturou os caracteres de um texto para criar um espécime de livro.  
                                        </p>
                                        @elseif($text['title'] == "Valores")
                                        <p class="fs-16 fw-400 text-white" data-aos="zoom-out-down">
                                            O Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão. O Lorem Ipsum tem vindo a ser o texto padrão usado por estas indústrias desde o ano de 1500, quando uma misturou os caracteres de um texto para criar um espécime de livro.  
                                        </p>
                                    @endif
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <section class="py-lg-4 py-2 bg-dark position-relative mt-0">
            <svg class="position-absolute top-0 start-0" width="642" height="381" viewBox="0 0 642 381" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="132.117" y="-637.293" width="719" height="719" transform="rotate(45 132.117 -637.293)" stroke="#808080"/>
            </svg>   
            <svg class="position-absolute bottom-0 end-0" width="641" height="380" viewBox="0 0 641 380" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="509.117" y="0.707107" width="719" height="719" transform="rotate(45 509.117 0.707107)" stroke="#808080"/>
            </svg>                             
            <div class="container">
                <div class="row">
                    <h2 class="fs-32 fw-600 mb-2 w-100 text-center text-white">
                        <svg class="me-1"width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="1.5" y="10.5" width="12" height="12" transform="rotate(-45 1.5 10.5)" stroke="#808080" stroke-width="2"/>
                        </svg>                            
                        Nossa equipe
                        <svg class="ms-1"width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="1.5" y="10.5" width="12" height="12" transform="rotate(-45 1.5 10.5)" stroke="#808080" stroke-width="2"/>
                        </svg>  
                    </h2>
                    <div class="equipe-swiper swiper">
                        <div class="swiper-wrapper"> 
                    
                            @foreach (range(0,4) as $image)
                                <div class="d-block swiper-slide" data-aos="zoom-out-up">
                                    <div class="d-block video-slide swiper-slide card">
                                        <div class="ratio ratio-6x9 overflow-hidden" style="">
                                            <div class="z-index-1" style="background: linear-gradient(90deg, #202020 0%, rgba(32, 32, 32, 0) 100%);
                                            opacity: 0.8;"></div>
                                            <img class="w-100 h-100 object-fit-cover" src="{{ url("/front/images/backgrounds/equipe.png") }}" alt="Icone">
                                            <div class="z-index-2" style="">
                                                <div class="position-absolute bottom-0 start-0 p-1 position-conteudo">
                                                    <p class="fs-20 fw-600 text-white">Felipe Camargo</p>
                                                    <p class="fs-16 fw-400 text-white">
                                                        Corretor de imóvies e CEO <br>
                                                        CRECI/RS: 00000-0
                                                    </p>
                                                    <div class="d-flex gap-1 redes-card">
                                                        <a target="_blank" href="" class="fs-16 fw-400 text-decoration-none text-white svg-footer btn btn-outline-light rounded-0" style="padding: 12px;">
                                                            <svg width="24" height="24" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M13.6695 2.32533C12.165 0.826667 10.1647 0.000666667 8.03383 0C3.64279 0 0.0689973 3.556 0.0669877 7.928C0.0663178 9.32533 0.43341 10.6893 1.13075 11.892L0 16L4.2229 14.8973C5.38648 15.5293 6.69675 15.862 8.02981 15.8627H8.03316C12.4235 15.8627 15.998 12.306 16 7.934C16.0013 5.816 15.1734 3.82333 13.6695 2.32533ZM8.03383 14.5233H8.03115C6.84279 14.5233 5.67787 14.2053 4.661 13.6047L4.41917 13.462L1.91317 14.116L2.58237 11.684L2.42495 11.4347C1.76178 10.3853 1.4121 9.17267 1.41277 7.928C1.41411 4.29467 4.38501 1.33867 8.03718 1.33867C9.80565 1.33867 11.4683 2.02533 12.7183 3.27067C13.9683 4.51667 14.6562 6.172 14.6556 7.93267C14.6535 11.5673 11.6833 14.5233 8.03383 14.5233ZM11.6659 9.588C11.4669 9.48867 10.4883 9.00933 10.3054 8.94333C10.1232 8.87733 9.99054 8.844 9.85723 9.042C9.72393 9.24 9.34344 9.68667 9.22688 9.81933C9.11099 9.95133 8.99443 9.968 8.79548 9.86867C8.59653 9.76933 7.95478 9.56067 7.19447 8.88533C6.60297 8.36 6.20306 7.71133 6.08717 7.51267C5.97128 7.314 6.07511 7.20733 6.17425 7.10867C6.26401 7.02 6.3732 6.87733 6.47302 6.76133C6.5735 6.64667 6.60632 6.564 6.67331 6.43133C6.73963 6.29933 6.7068 6.18333 6.65656 6.084C6.60632 5.98533 6.20841 5.01 6.04295 4.61333C5.88152 4.22667 5.7174 4.27933 5.59481 4.27333C5.47892 4.26733 5.34628 4.26667 5.21298 4.26667C5.08034 4.26667 4.86464 4.316 4.68244 4.51467C4.50023 4.71333 3.98576 5.19267 3.98576 6.16733C3.98576 7.14267 4.69918 8.08467 4.79833 8.21667C4.89747 8.34867 6.20172 10.35 8.19862 11.208C8.67356 11.412 9.04467 11.534 9.33339 11.6253C9.81034 11.776 10.2444 11.7547 10.5874 11.704C10.9699 11.6473 11.765 11.2247 11.9312 10.762C12.0973 10.2993 12.0973 9.902 12.0471 9.82C11.9975 9.73667 11.8649 9.68733 11.6659 9.588Z" fill="white"/>
                                                            </svg>                                                                                             
                                                        </a>
                                                        <a target="_blank" href="" class="fs-16 fw-400 text-decoration-none text-white svg-footer btn btn-outline-light rounded-0" style="padding: 12px;">
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M12 2.162C15.204 2.162 15.584 2.174 16.849 2.232C18.157 2.292 19.504 2.59 20.457 3.543C21.419 4.505 21.708 5.839 21.768 7.151C21.826 8.416 21.838 8.796 21.838 12C21.838 15.204 21.826 15.584 21.768 16.849C21.709 18.15 21.404 19.51 20.457 20.457C19.495 21.419 18.162 21.708 16.849 21.768C15.584 21.826 15.204 21.838 12 21.838C8.796 21.838 8.416 21.826 7.151 21.768C5.86 21.709 4.482 21.397 3.543 20.457C2.586 19.5 2.292 18.153 2.232 16.849C2.174 15.584 2.162 15.204 2.162 12C2.162 8.796 2.174 8.416 2.232 7.151C2.291 5.855 2.599 4.487 3.543 3.543C4.503 2.583 5.842 2.292 7.151 2.232C8.416 2.174 8.796 2.162 12 2.162ZM12 0C8.741 0 8.332 0.014 7.052 0.072C5.197 0.157 3.355 0.673 2.014 2.014C0.668 3.36 0.157 5.198 0.072 7.052C0.014 8.332 0 8.741 0 12C0 15.259 0.014 15.668 0.072 16.948C0.157 18.801 0.675 20.648 2.014 21.986C3.359 23.331 5.2 23.843 7.052 23.928C8.332 23.986 8.741 24 12 24C15.259 24 15.668 23.986 16.948 23.928C18.802 23.843 20.646 23.326 21.986 21.986C23.333 20.639 23.843 18.802 23.928 16.948C23.986 15.668 24 15.259 24 12C24 8.741 23.986 8.332 23.928 7.052C23.843 5.197 23.326 3.354 21.986 2.014C20.643 0.671 18.797 0.156 16.948 0.072C15.668 0.014 15.259 0 12 0Z" fill="white"/>
                                                                <path d="M12 5.838C8.597 5.838 5.838 8.597 5.838 12C5.838 15.403 8.597 18.162 12 18.162C15.403 18.162 18.162 15.403 18.162 12C18.162 8.597 15.403 5.838 12 5.838ZM12 16C9.791 16 8 14.209 8 12C8 9.791 9.791 8 12 8C14.209 8 16 9.791 16 12C16 14.209 14.209 16 12 16Z" fill="white"/>
                                                                <path d="M18.406 7.034C19.2013 7.034 19.846 6.38929 19.846 5.594C19.846 4.79871 19.2013 4.154 18.406 4.154C17.6107 4.154 16.966 4.79871 16.966 5.594C16.966 6.38929 17.6107 7.034 18.406 7.034Z" fill="white"/>
                                                            </svg>                                                                                             
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                    
                        </div>
                        <div class="w-100 m-auto position-relative z-index-1 controle-banner" style="width: 200px; height: 100px;">
                            <div class=" w-100 h-100 position-absolute" style="margin-top: -5rem;">
                                <div class="swiper-button-prev">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16 10L4 10M4 10L10 16M4 10L10 4" stroke="white" stroke-linejoin="round"/>
                                    </svg>                                                                                                                   
                                </div>
                                <div class="swiper-button-next">
                                    <svg width="13" height="14" viewBox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 7L12 7M12 7L6 1M12 7L6 13" stroke="white" stroke-linejoin="round"/>
                                    </svg>                                                                                                                                                                                      
                                </div>
                                <div class="swiper-pagination mb-2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
