<div class="imoveis-swiper swiper" >
    <div class="swiper-wrapper mb-4">

        @foreach (range(0,4) as $image)
            <div class="d-block swiper-slide" >
                <div class="swiper imoveis-internos-swiper">
                    <div class="swiper-wrapper">
                        @foreach (range(0,4) as $product)
                            <div class="swiper-slide h-100">
                                <div class="ratio ratio-80" style="--bs-aspect-ratio: 80%;">
                                    <div class="z-index-2" style="left: 3%; top:91%;">
                                        <p class="fs-16 fw-400 text-white">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_205_889)">
                                                <path d="M6 9V18H15M9 13L12 9.5L14.5 12M15 10L18 13M18 6H9V15H18V6Z" stroke="white"/>
                                                </g>
                                                <defs>
                                                <clipPath id="clip0_205_889">
                                                <rect width="24" height="24" fill="white"/>
                                                </clipPath>
                                                </defs>
                                            </svg>
                                            15                                
                                        </p>
                                    </div>
                                    <div class="bottom-0 start-0 z-index-1" id="fundo_img"></div>
                                    <div class="z-index-2 start-0 top-0" style="left: 3%; top:3%;">
                                        <button class="btn-dark btn fs-12 fw-400 rounded-0 me-0-50">Vendas</button>
                                        <button class="btn-light btn fs-12 fw-400 rounded-0">AAA0001</button>
                                    </div>
                                    <img class="w-100 h-100 object-fit-cover" src="{{ asset("front/images/backgrounds/casa-home.png") }}" alt="" title="">
                                    
                                </div>
                            </div>
                        @endforeach
                        
                    </div>
                    <div class="swiper-button-prev imoveis-internos-button">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16 10L4 10M4 10L10 16M4 10L10 4" stroke="white" stroke-linejoin="round"/>
                        </svg>                                
                    </div>
                    <div class="swiper-button-next imoveis-internos-button2">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 10L16 10M16 10L10 4M16 10L10 16" stroke="white" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>
                <div class="">
                    <div class="position-relative z-index-3" id="fundo_black">
                        <div class="px-1 pb-1">
                            <div class="bg-white p-2" style="box-shadow: 0px 0px 24px rgba(0, 0, 0, 0.15);">
                                <p class="fs-16 fw-400 text-lg-start text-center">Casa nova, mobiliada e equipada</p>
                                <p class="fs-16 fw-700 text-lg-start text-center">R$ 1.500.000,00</p>
                                <div class="d-flex gap-sm-2 gap-1 gap-md-1 gap-lg-0-50 gap-xl-1 gap-xxl-2 justify-content-lg-start justify-content-center">
                                        <p class="fs-16 fw-400">
                                            <svg class="me-0-25" width="18" height="12" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 0V5C1 5.55228 1.44772 6 2 6H16C16.5523 6 17 6.44772 17 7V9M1 12V10C1 9.44772 1.44772 9 2 9H17M17 12V9M2.5 4H6.5" stroke="#808080"/>
                                            </svg>                                                        
                                            1
                                        </p>
                                        <p class="fs-16 fw-400">
                                            <svg class="me-0-25" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_227_162)">
                                                <path d="M7 9V7.5C7 6.67157 6.32843 6 5.5 6V6C4.67157 6 4 6.67157 4 7.5V11C4 11.5523 4.44772 12 5 12H18.6126C19.2951 12 19.7771 12.6687 19.5613 13.3162L18.4558 16.6325C18.1836 17.4491 17.4193 18 16.5585 18H7.44152C6.58066 18 5.81638 17.4491 5.54415 16.6325L5 15" stroke="#808080"/>
                                                </g>
                                                <defs>
                                                <clipPath id="clip0_227_162">
                                                <rect width="24" height="24" fill="white"/>
                                                </clipPath>
                                                </defs>
                                            </svg>                                                                                                       
                                            1
                                        </p>
                                        <p class="fs-16 fw-400">
                                            <svg class="me-0-25" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_227_172)">
                                                <path d="M18 10L16.5937 7.8906C16.2228 7.3342 15.5983 7 14.9296 7H9.07037C8.40166 7 7.7772 7.3342 7.40627 7.8906L6 10H4M18 10V13C18 14.1046 17.1046 15 16 15V15M18 10H20M6 12V13C6 14.1046 6.89543 15 8 15V15M8 17V15M8 15H16M16 17V15M16 12.5H14M8 12.5H10" stroke="#808080"/>
                                                </g>
                                                <defs>
                                                <clipPath id="clip0_227_172">
                                                <rect width="24" height="24" fill="white"/>
                                                </clipPath>
                                                </defs>
                                            </svg>                                                                                                     
                                            1
                                        </p>
                                        <p class="fs-16 fw-400">
                                            <svg class="me-0-25" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_227_182)">
                                                <path d="M6 14V18M6 18H10M6 18L10 14M14 10L18 6M18 6H14M18 6V10M12 11.5L11.5 12L12 12.5L12.5 12L12 11.5Z" stroke="#808080"/>
                                                </g>
                                                <defs>
                                                <clipPath id="clip0_227_182">
                                                <rect width="24" height="24" fill="white"/>
                                                </clipPath>
                                                </defs>
                                            </svg>                                                                                                       
                                            100 m³
                                        </p>
                                </div>
                                <p class="fs-16 fw-400 text-lg-start text-center">
                                    <svg class="me-0-50" width="14" height="18" viewBox="0 0 14 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7 1C3.68722 1 1 3.58749 1 6.77731C1 11.8929 7 17 7 17C7 17 13 11.8929 13 6.77731C13 3.58749 10.3128 1 7 1ZM7 9.26299C5.57269 9.26299 4.4185 8.15164 4.4185 6.77731C4.4185 5.40297 5.57269 4.29162 7 4.29162C8.42731 4.29162 9.5815 5.40297 9.5815 6.77731C9.5815 8.15164 8.42731 9.26299 7 9.26299Z" stroke="#808080"/>
                                    </svg>                                                      
                                    Localização
                                </p>
                                <div class="d-flex gap-1 mt-2 justify-content-lg-start justify-content-center">
                                    <a href="{{ route_lang('products') }}">
                                        <button class="btn btn-dark fs-16 fw-400 rounded-0">
                                            Saiba mais
                                        </button>
                                    </a>
                                    <button id="comprar" class="btn btn-outline-dark fs-16 fw-400 rounded-0 d-flex">
                                        Comprar
                                        <span class="rounded-circle text-white ms-0-50" id="compra" style="background: #808080;width: 20px;height: 20px;font-size:10px"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
    <div class="w-100 m-auto position-relative z-index-1 controle-banner" style="width: 200px; height: 100px;margin-top: -10rem;margin-bottom: 7rem;">
        <div class=" w-100 h-100 position-absolute">
            <div class="swiper-button-prev imoveis-swiper-button" style="z-index: 13">
                <svg width="13" height="14" viewBox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13 7L1 7M1 7L7 13M1 7L7 0.999999" stroke="#3C4C71" stroke-linejoin="round"/>
                </svg>                                                                         
            </div>
            <div class="swiper-button-next imoveis-swiper-button2 style="z-index: 13"">
                <svg width="13" height="14" viewBox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 7H12M12 7L6 1M12 7L6 13" stroke="#3C4C71" stroke-linejoin="round"/>
                </svg>                                                                                                                                           
            </div>
            <div class="swiper-pagination mb-2"></div>
        </div>
    </div>
</div>