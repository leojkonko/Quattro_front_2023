<div class="imoveis-swiper swiper">
    <div class="swiper-wrapper mb-4">

        @foreach (range(0,4) as $image)
            <div class="d-block swiper-slide" data-aos="fade-left">
                <div class="ratio ratio-80" style="--bs-aspect-ratio: 80%;">
                    <img class="w-100 h-100 object-fit-cover" src="{{ asset("front/images/backgrounds/casa-home.png") }}" alt="" title="">
                    <div class="bottom-0 start-0 z-index-1" id="fundo_img"></div>
                    <div class="z-index-2 start-0 top-0" style="left: 3%; top:3%;">
                        <button class="btn-dark btn fs-12 fw-400 rounded-0 me-0-50">Vendas</button>
                        <button class="btn-light btn fs-12 fw-400 rounded-0">AAA0001</button>
                    </div>
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
                </div>
                <div class="">
                    <div class="position-relative z-index-3" id="fundo_black">
                        <div class="px-1 pb-1">
                            <div class="bg-white p-2" style="box-shadow: 0px 0px 24px rgba(0, 0, 0, 0.15);">
                                <p class="fs-16 fw-400">Casa nova, mobiliada e equipada</p>
                                <p class="fs-16 fw-700">R$ 1.500.000,00</p>
                                <div class="d-flex gap-2">
                                    @foreach (range(0,3) as $a)
                                        <p class="fs-16 fw-400">
                                            <svg class="me-0-25" width="18" height="12" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 0V5C1 5.55228 1.44772 6 2 6H16C16.5523 6 17 6.44772 17 7V9M1 12V10C1 9.44772 1.44772 9 2 9H17M17 12V9M2.5 4H6.5" stroke="#808080"/>
                                            </svg>                                                        
                                            1
                                        </p>
                                    @endforeach
                                </div>
                                <p class="fs-16 fw-400">
                                    <svg class="me-0-50" width="14" height="18" viewBox="0 0 14 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7 1C3.68722 1 1 3.58749 1 6.77731C1 11.8929 7 17 7 17C7 17 13 11.8929 13 6.77731C13 3.58749 10.3128 1 7 1ZM7 9.26299C5.57269 9.26299 4.4185 8.15164 4.4185 6.77731C4.4185 5.40297 5.57269 4.29162 7 4.29162C8.42731 4.29162 9.5815 5.40297 9.5815 6.77731C9.5815 8.15164 8.42731 9.26299 7 9.26299Z" stroke="#808080"/>
                                    </svg>                                                      
                                    Localização
                                </p>
                                <div class="d-flex gap-1 mt-2">
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