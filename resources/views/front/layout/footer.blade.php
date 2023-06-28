<footer id="footer" class="overflow-hidden bg-light" style="background-image: url({{ asset('front/images/backgrounds/footer.png') }})">
    <div class="container position-relative z-index-1">
        <div class="w-100 h-100 position-absolute start-0 top-0" style="background: rgba(32, 32, 32, 0.9);
        backdrop-filter: blur(45px);"></div> 
        <div class="row gy-2 gy-lg-0 text-center text-lg-start align-items-center justify-content-between pt-2 pt-lg-4 position-relative">
            <div class="col-lg-3 d-flex justify-content-center" data-aos="fade-left">
                <a href="{{ route_lang('home') }}" class="d-block m-auto m-lg-0">
                    <img class="" width="216px" src="{{ asset('front/images/logos/logo.svg') }}" title="Página principal" alt="Logo {{ env('APP_NAME') }}">
                </a>
            </div>
            <div class="col-lg-2 d-flex justify-content-center mt-2 mt-lg-0" data-aos="fade-left">
                <div>
                    <h2 class="fs-20 fw-600 text-white w-100 text-lg-start text-center">Menus</h2>
                    <nav class="menu">
                        <ul class="mb-0 list-unstyled">
                            <li class="mt-1">
                                <a href="" class="@if (Route::is('products')) active @endif fs-16 fw-400 text-decoration-none text-white">
                                    Imóveis      
                                </a>
                            </li>
                            <li class="mt-1">
                                <a href="{{ route_lang('company') }}" title="Empresa" class="@if (Route::is('company')) active @endif fs-16 fw-400 text-decoration-none text-white">A empresa</a>
                            </li>
                            <li class="mt-1">
                                <a href="" title="solutions" class="@if (Route::is('solutions')) active @endif fs-16 fw-400 text-decoration-none text-white">Comparar</a>
                            </li>
                            <li class="mt-1">
                                <a href="{{ route_lang('blog') }}" title="Blog" class="@if (Route::is('blog')) active @endif fs-16 fw-400 text-decoration-none text-white">Blog</a>
                            </li>
                            <li class="mt-1">
                                <a href="{{ route_lang('contact') }}" title="Contato" class="@if (Route::is('contact')) active @endif fs-16 fw-400 text-decoration-none text-white">Contato</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-lg-4 d-flex justify-content-center mt-3 mt-lg-0" data-aos="fade-right">
                <div> 
                    <h2 class="fs-20 fw-600 text-white w-100 text-lg-start text-center">Contato</h2>
                    <ul class="list-unstyled">
                        <li class="mt-1">
                            <a target="_blank" href="" class="fs-16 fw-400 text-decoration-none text-white">(54) 99950-8776</a>
                        </li>
                        <li class="mt-1">
                            <a target="_blank" href="" class="fs-16 fw-400 text-decoration-none text-white">contato@quattroimob.com.br</a>
                        </li>
                    </ul>
                    <h2 class="fs-20 fw-600 text-white w-100 text-lg-start text-center mt-lg-3 mt-3 mt-lg-2">Contato</h2>
                    <ul class="list-unstyled">
                        <li class="mt-1">
                            <a target="_blank" href="" class="fs-16 fw-400 text-decoration-none text-white">Av. Júlio de Castilhos, 1481, <br>
                                Caxias do Sul</a>
                        </li>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 d-flex justify-content-center" data-aos="fade-right">
                <ul class="list-unstyled d-flex gap-1 d-lg-block"> 
                    <li class="mt-1">
                        <a target="_blank" href="" class="fs-16 fw-400 text-decoration-none text-white svg-footer btn btn-outline-light rounded-0" style="padding: 15px;">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2.162C15.204 2.162 15.584 2.174 16.849 2.232C18.157 2.292 19.504 2.59 20.457 3.543C21.419 4.505 21.708 5.839 21.768 7.151C21.826 8.416 21.838 8.796 21.838 12C21.838 15.204 21.826 15.584 21.768 16.849C21.709 18.15 21.404 19.51 20.457 20.457C19.495 21.419 18.162 21.708 16.849 21.768C15.584 21.826 15.204 21.838 12 21.838C8.796 21.838 8.416 21.826 7.151 21.768C5.86 21.709 4.482 21.397 3.543 20.457C2.586 19.5 2.292 18.153 2.232 16.849C2.174 15.584 2.162 15.204 2.162 12C2.162 8.796 2.174 8.416 2.232 7.151C2.291 5.855 2.599 4.487 3.543 3.543C4.503 2.583 5.842 2.292 7.151 2.232C8.416 2.174 8.796 2.162 12 2.162ZM12 0C8.741 0 8.332 0.014 7.052 0.072C5.197 0.157 3.355 0.673 2.014 2.014C0.668 3.36 0.157 5.198 0.072 7.052C0.014 8.332 0 8.741 0 12C0 15.259 0.014 15.668 0.072 16.948C0.157 18.801 0.675 20.648 2.014 21.986C3.359 23.331 5.2 23.843 7.052 23.928C8.332 23.986 8.741 24 12 24C15.259 24 15.668 23.986 16.948 23.928C18.802 23.843 20.646 23.326 21.986 21.986C23.333 20.639 23.843 18.802 23.928 16.948C23.986 15.668 24 15.259 24 12C24 8.741 23.986 8.332 23.928 7.052C23.843 5.197 23.326 3.354 21.986 2.014C20.643 0.671 18.797 0.156 16.948 0.072C15.668 0.014 15.259 0 12 0Z" fill="white"/>
                                <path d="M12 5.838C8.597 5.838 5.838 8.597 5.838 12C5.838 15.403 8.597 18.162 12 18.162C15.403 18.162 18.162 15.403 18.162 12C18.162 8.597 15.403 5.838 12 5.838ZM12 16C9.791 16 8 14.209 8 12C8 9.791 9.791 8 12 8C14.209 8 16 9.791 16 12C16 14.209 14.209 16 12 16Z" fill="white"/>
                                <path d="M18.406 7.034C19.2013 7.034 19.846 6.38929 19.846 5.594C19.846 4.79871 19.2013 4.154 18.406 4.154C17.6107 4.154 16.966 4.79871 16.966 5.594C16.966 6.38929 17.6107 7.034 18.406 7.034Z" fill="white"/>
                            </svg>                                                              
                        </a>
                    </li>
                    <li class="mt-1">
                        <a target="_blank" href="" class="fs-16 fw-400 text-decoration-none text-white svg-footer btn btn-outline-light rounded-0" style="padding: 15px;">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_19_1897)">
                                <path d="M24 12.0729C24 18.0983 19.606 23.0935 13.87 24V15.5862H16.659L17.19 12.1051H13.87V9.84649C13.87 8.89373 14.334 7.96613 15.82 7.96613H17.329V5.00222C17.329 5.00222 15.959 4.7668 14.65 4.7668C11.916 4.7668 10.13 6.43387 10.13 9.4511V12.1041H7.091V15.5852H10.13V23.999C4.395 23.0915 0 18.0973 0 12.0729C0 5.40566 5.373 0 12 0C18.627 0 24 5.40465 24 12.0729Z" fill="white"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_19_1897">
                                <rect width="24" height="24" fill="white" transform="matrix(1 0 0 -1 0 24)"/>
                                </clipPath>
                                </defs>
                            </svg>                                                                
                        </a>
                    </li>
                    <li class="mt-1">
                        <a target="_blank" href="" class="fs-16 fw-400 text-decoration-none text-white svg-footer btn btn-outline-light rounded-0" style="padding: 15px;">
                            <svg width="24" height="24" viewBox="0 0 20 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20 9.86641C17.9558 9.86641 16.0608 9.18238 14.5145 8.02033V16.4057C14.5145 20.5939 11.2586 24 7.25726 24C5.71101 24 4.27657 23.49 3.09824 22.6239C1.22706 21.2489 0 18.9748 0 16.4057C0 12.2175 3.25593 8.81037 7.25822 8.81037C7.59079 8.81037 7.91571 8.83937 8.23586 8.88437V9.86141V13.0965C7.92622 12.9955 7.59939 12.9365 7.25822 12.9365C5.431 12.9365 3.944 14.4926 3.944 16.4057C3.944 17.7377 4.66648 18.8948 5.72152 19.4758C6.18119 19.7288 6.70394 19.8738 7.25918 19.8738C9.04434 19.8738 10.5008 18.3878 10.5677 16.5357L10.5705 0H14.5136C14.5136 0.358015 14.547 0.707029 14.6063 1.04704C14.8844 2.61911 15.776 3.96816 17.0117 4.8112C17.8717 5.39822 18.8981 5.74124 19.999 5.74124L20 9.86641Z" fill="white"/>
                            </svg>                                                                                            
                        </a>
                    </li>
                </ul>
            </div>
            <div class="pt-2" >
                <div class=" py-1 container position-relative">
                    <svg class="position-absolute w-100 top-0 start-0" width="1176" height="2" viewBox="0 0 1176 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.5" d="M0 1L1176 0.999897" stroke="white"/>
                    </svg>                        
                    <div class="position-absolute bottom-0 start-50 translate-middle-x h-100 border-top border-secondary z-index-background" style="width: 80%"></div>
                    <div class="row">
                        <div class="col-lg-6 d-flex justify-content-center">
                            <small class="text-muted small text-center text-lg-start px-1 px-lg-0">Copyright &copy{{ date('Y') }} {{ env('APP_NAME') }}. Todos os direitos reservados. CNPJ 00.000.000/0000-00</small>
                        </div>
                        <div class="col-lg-3 d-flex justify-content-center">
                            @inject('site', 'App\\Services\\SiteService')
                            @if ($site->hasPrivacy())
                                <a href="{{ route_lang('privacy') }}" class="small text-muted text-decoration-none my-2 my-lg-0" title="Política de privacidade">Política de privacidade</a>
                            @elseif ($site->useLgpd())
                                <button onClick="ElliteLgpdApi.showModal()" class="btn btn-link p-0 text-muted text-decoration-none small my-2 my-lg-0">Gerenciar preferências de cookies</button>
                            @endif
                        </div>
                        <div class="col-lg-3 d-flex justify-content-center">
                            <a href="https://www.ellitedigital.com.br" target="_blank">
                                <svg width="78" height="17" viewBox="0 0 78 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.168 14.0833H5.42779C4.35236 14.0833 3.47947 13.2078 3.47947 12.1291V9.57514C3.47947 8.49646 4.35236 7.62095 5.42779 7.62095H13.2162C14.7136 7.62095 15.9265 6.40442 15.9265 4.9025C15.9265 4.79366 15.8397 4.70417 15.7312 4.70417H4.30654C1.92902 4.70176 0 6.6366 0 9.02129V12.6733C0 15.058 1.92902 16.9928 4.30654 16.9928H6.55385C6.63825 16.9953 6.72264 17.0001 6.80945 17.0001H10.653C12.1504 17.0001 13.3633 15.7836 13.3633 14.2816C13.3633 14.1728 13.2765 14.0833 13.168 14.0833Z" fill="white"/>
                                    <path d="M16.5269 0.0170213H14.2796C14.1952 0.0146027 14.1108 0.00976562 14.024 0.00976562H10.1804C8.68301 0.00976562 7.47014 1.2263 7.47014 2.72822C7.47014 2.83705 7.55694 2.92654 7.66545 2.92654H15.4057C16.4811 2.92654 17.354 3.80205 17.354 4.88073V7.43472C17.354 8.51339 16.4811 9.38891 15.4057 9.38891H7.61723C6.11982 9.38891 4.90695 10.6054 4.90695 12.1074C4.90695 12.2162 4.99376 12.3057 5.10226 12.3057H16.5245C18.902 12.3057 20.831 10.3708 20.831 7.98615V4.33414C20.8334 1.95186 18.9068 0.0170213 16.5269 0.0170213Z" fill="white"/>
                                    <path d="M42.6917 0H42.3613C40.7434 0 39.434 1.31569 39.434 2.93612V15.2683C39.434 15.3917 39.5353 15.4932 39.6583 15.4932H39.9886C41.6066 15.4932 42.9159 14.1776 42.9159 12.5571V0.224925C42.9159 0.101579 42.8147 0 42.6917 0Z" fill="white"/>
                                    <path d="M37.7944 0.0120928H28.0552C25.6729 0.0120928 23.7415 1.94935 23.7415 4.33888V11.164C23.7415 13.5536 25.6729 15.4908 28.0552 15.4908H30.3074C30.3918 15.4932 30.4762 15.4981 30.563 15.4981H34.4114C35.9112 15.4981 37.1265 14.2791 37.1265 12.7772C37.1265 12.6684 37.0397 12.5789 36.9311 12.5789H29.1765C28.0986 12.5789 27.2233 11.7034 27.2233 10.6199V9.20743C27.2233 9.1518 27.2692 9.10585 27.3246 9.10585H32.668C34.1437 9.10585 35.3373 7.90625 35.3373 6.42851C35.3373 6.31968 35.2505 6.23019 35.142 6.23019H27.3246C27.2692 6.23019 27.2233 6.18424 27.2233 6.12861V4.89273C27.2233 3.81164 28.0962 2.9337 29.1765 2.9337H35.277C36.7768 2.9337 37.9921 1.71475 37.9921 0.212833C37.9897 0.0991606 37.9029 0.0120928 37.7944 0.0120928Z" fill="white"/>
                                    <path d="M52.561 3.46578H53.9909C54.9024 3.46578 55.6403 2.72571 55.6403 1.8115V0.377294C55.6403 0.169299 55.4715 0 55.2641 0H53.8342C52.9227 0 52.1849 0.740077 52.1849 1.65429V3.08849C52.1849 3.29649 52.3537 3.46578 52.561 3.46578Z" fill="white"/>
                                    <path d="M49.0816 0H48.7512C47.1333 0 45.8239 1.31569 45.8239 2.93612V15.2683C45.8239 15.3917 45.9252 15.4932 46.0482 15.4932H46.3785C47.9965 15.4932 49.3058 14.1776 49.3058 12.5571V0.224925C49.3058 0.101579 49.2045 0 49.0816 0Z" fill="white"/>
                                    <path d="M72.2154 3.46578C70.3273 3.46578 68.7624 4.08977 67.6894 5.27486C66.7201 6.34386 66.1872 7.8482 66.1872 9.51217C66.1872 12.9973 68.8758 15.6263 72.4396 15.6263C75.6249 15.6263 77.1537 13.6793 77.4358 13.2779C77.4599 13.2416 77.4527 13.1908 77.4213 13.1642L77.3128 13.0723C76.3411 12.2524 75.0269 11.9888 73.8092 12.3491C73.3631 12.4821 72.8327 12.5765 72.2226 12.5765C70.9422 12.5765 69.862 11.8727 69.3604 10.8327H76.6811C77.4093 10.8327 77.9976 10.2426 78 9.51217C77.9976 6.12136 75.4585 3.46578 72.2154 3.46578ZM69.2567 8.32466C69.6474 7.2218 70.6071 6.33419 72.0996 6.33419C74.1203 6.33419 74.7014 7.93043 74.8147 8.32466H69.2567Z" fill="white"/>
                                    <path d="M55.4281 4.20828H55.0977C53.4797 4.20828 52.1704 5.52397 52.1704 7.1444V15.2683C52.1704 15.3917 52.2717 15.4932 52.3947 15.4932H52.725C54.343 15.4932 55.6523 14.1776 55.6523 12.5571V4.43321C55.6523 4.30986 55.5534 4.20828 55.4281 4.20828Z" fill="white"/>
                                    <path d="M64.5981 3.31825H62.3557V0.522407C62.3557 0.413572 62.305 0.31683 62.2206 0.251529C62.1338 0.186228 62.0253 0.16688 61.924 0.198321L61.355 0.370038C60.0457 0.766681 59.1631 1.94935 59.1462 3.31583H57.4969C57.3113 3.31583 57.1618 3.46579 57.1618 3.65201V6.08266C57.1618 6.26889 57.3113 6.41884 57.4969 6.41884H59.1462V11.5534C59.1462 13.1642 59.5827 14.3009 60.4435 14.9346C61.068 15.3941 62.0229 15.6238 63.2936 15.6238C63.706 15.6238 64.1496 15.5997 64.6271 15.5513C64.8007 15.5344 64.9333 15.3892 64.9333 15.2151V12.9344C64.9333 12.8401 64.8971 12.7554 64.8296 12.6901C64.7621 12.6273 64.6753 12.5934 64.5837 12.5982C64.1231 12.62 63.7229 12.62 63.3925 12.6007C63.0453 12.5789 62.7825 12.487 62.6088 12.3274C62.4401 12.1726 62.3557 11.9114 62.3557 11.5558V6.42367H64.5981C64.7838 6.42367 64.9333 6.27372 64.9333 6.0875V3.65443C64.9333 3.4682 64.7838 3.31825 64.5981 3.31825Z" fill="white"/>
                                </svg>                            
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

{{-- Whatsapp fixed button --}}
<x-whatsapp-fixed />

{{-- Jquery --}}
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

{{-- Swiper.js --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.2.0/swiper-bundle.min.js" integrity="sha512-KBCt3sdFOcFtYTgEfE3uJckVpvPr1w8HPugyPgHFE/4iJOwhwj6eSaF27bDJTHRX2jyAFOgV3Ve9vOD97rbjrg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

{{-- Fancybox --}}
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>

{{-- GSAP (caso necessário) --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.0/gsap.min.js"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
{{-- Front js --}}
@vite(['resources/front/js/vendors/bootstrap.bundle.min.js', 'resources/front/js/main.js'])
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
@livewireScripts


</body>

</html>
