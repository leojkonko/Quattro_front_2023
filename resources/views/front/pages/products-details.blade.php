@extends('front.layout.app')

@section('content')
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
            <section class="form-wrapper bg-cinza overflow-hidden">
                <div class="container container-start">
                    <div class="row justify-content-center g-0">
                        <div class="col-xl-7 col-lg-6">
                            <div class="formulario h-100 bg-cinza rounded-0 p-lg-3 p-2 d-flex align-items-center">
                                <div>
                                    <p class="fs-16 fw-400" data-bs-dismiss="modal" aria-label="Close">
                                        <svg class="me-0-50" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M16 10L4 10M4 10L10 16M4 10L10 4" stroke="#202020" stroke-linejoin="round"/>
                                        </svg>
                                        Voltar</p>
                                    <h2 class="fs-32 fw-600 text-dark w-100 mb-2 text-lg-start text-center">Entre em contato</h2>
                                    <livewire:form-contact />
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6">
                            <div class="ratio ratio-1x1 h-100">
                                <img class="w-100 h-100 object-fit-cover" src="{{ asset("front/images/backgrounds/contato.png") }}" alt="" title="">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
      </div>
    </div>
  </div>
    <main id="produto bg-cinza" class="overflow-hidden">
        <div class="position-absolute top-0 start-0" id="infos"></div>
        <section class="produto-detalhe bg-cinza">
            <div class="container container-end">
                <div class="row ">
                    <div class="col-lg-6" data-aos="fade-left">
                        <div class="empresa-swiper swiper h-100">
                            <div class="swiper-wrapper">
                        
                                @foreach (range(0,2) as $image)
                                    <div class="d-block swiper-slide">
                                        <a href="{{ asset("front/images/backgrounds/casa-home.png") }}" data-fancybox="gallery">
                                            <div class="ratio ratio-1x1 h-100">
                                                <svg class="position-absolute start-50 top-50 translate-middle z-index-2 width-mobile" style="width: initial; height: initial; top: initial: left: initial;" width="160" height="160" viewBox="0 0 160 160" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.9" fill-rule="evenodd" clip-rule="evenodd" d="M80 160C124.183 160 160 124.183 160 80C160 35.8172 124.183 0 80 0C35.8172 0 0 35.8172 0 80C0 124.183 35.8172 160 80 160ZM60 114.641L120 80L60 45.359L60 114.641Z" fill="white"/>
                                                </svg>  
                                                <img class="w-100 h-100 object-fit-cover" src="{{ asset("front/images/backgrounds/produto-detalhe.png") }}" alt="" title="">
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
                    <div class="col-lg-6" data-aos="fade-right">
                        <div class="p-2 ps-lg-4">
                            <div class="d-flex" style="">
                                <button class="btn-dark btn fs-12 fw-400 rounded-0 me-0-50">Aluguel</button>
                                <button class="btn-light btn fs-12 fw-400 rounded-0">AAA0001</button>
                            </div>
                            <h2 class="fs-32 fw-600 w-100 text-lg-start text-center mt-2">Casa mobiliada e equipada</h2>
                            <p class="fs-16 fw-400 mt-2">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 4C8.68722 4 6 6.58749 6 9.77731C6 14.8929 12 20 12 20C12 20 18 14.8929 18 9.77731C18 6.58749 15.3128 4 12 4ZM12 12.263C10.5727 12.263 9.4185 11.1516 9.4185 9.77731C9.4185 8.40297 10.5727 7.29162 12 7.29162C13.4273 7.29162 14.5815 8.40297 14.5815 9.77731C14.5815 11.1516 13.4273 12.263 12 12.263Z" stroke="#808080"/>
                                </svg>                                    
                                Exposição                               
                            </p>
                            <div class="d-flex gap-2 ms-0-50">
                                @foreach (range(0,3) as $a)
                                    <p class="fs-16 fw-400">
                                        <svg class="me-0-25" width="18" height="12" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 0V5C1 5.55228 1.44772 6 2 6H16C16.5523 6 17 6.44772 17 7V9M1 12V10C1 9.44772 1.44772 9 2 9H17M17 12V9M2.5 4H6.5" stroke="#808080"/>
                                        </svg>                                                        
                                        1
                                    </p>
                                @endforeach
                            </div>
                            <p class="fs-16 fw-700 mt-2">
                                R$ 35.000,00 /mês
                            </p>
                            <div class="bg-white p-2 p-sm-1 p-xl-2 mt-lg-4 shadow-lg">
                                <div class="d-flex gap-2 align-items-center justify-content-xl-center justify-content-around">
                                    <div class="ratio ratio-1x1 " style="width: 95px; heigth: 70px;">
                                        <img class="w-100 h-100 object-fit-cover rounded-circle" src="{{ asset("front/images/backgrounds/produto-detalhe.png") }}" alt="" title="">
                                    </div>
                                    <div class="me-auto d-none d-sm-block d-lg-none d-xl-block">
                                        <p class="fs-16 fw-400">Corretora responsável</p>
                                        <p class="fs-16 fw-600 m-0">Amanda Gomes</p>
                                        <p class="fs-14 fs-400 text-secondary m-0">CRECI/RS: 00000-0</p>
                                    </div>
                                    <div class="">
                                        <a class="d-flex rounded-0 btn btn-outline-dark p-1" title="Compartilhe no WhatsApp" href="https://api.whatsapp.com/send?text=" target="_blank" aria-label="Whatsapp">
                                            <svg class="" id="whatsapp" width="30px" height="30px" viewBox="0 0 256 256" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M207.15 47.8406C186.013 26.6531 157.864 15 127.95 15C66.2031 15 15.9585 65.2446 15.9585 126.991C15.9585 146.716 21.104 165.986 30.8906 182.987L15 241L74.3754 225.412C90.7201 234.341 109.133 239.033 127.899 239.033H127.95C189.646 239.033 241 188.788 241 127.042C241 97.1268 228.287 69.0281 207.15 47.8406V47.8406ZM127.95 220.166C111.201 220.166 94.8062 215.676 80.5299 207.201L77.15 205.183L41.9384 214.415L51.3214 180.061L49.1018 176.529C39.7692 161.698 34.8759 144.597 34.8759 126.991C34.8759 75.6871 76.6455 33.9174 128 33.9174C152.87 33.9174 176.227 43.6031 193.782 61.2089C211.337 78.8147 222.133 102.171 222.083 127.042C222.083 178.396 179.254 220.166 127.95 220.166V220.166ZM179.001 150.449C176.227 149.036 162.455 142.276 159.882 141.368C157.309 140.41 155.443 139.956 153.576 142.781C151.71 145.606 146.362 151.861 144.698 153.778C143.083 155.645 141.419 155.897 138.644 154.484C122.199 146.262 111.403 139.804 100.557 121.19C97.6817 116.246 103.433 116.599 108.78 105.904C109.688 104.038 109.234 102.424 108.528 101.011C107.821 99.5987 102.222 85.8268 99.9013 80.2272C97.6312 74.779 95.3107 75.5357 93.5955 75.4348C91.9812 75.3339 90.1147 75.3339 88.2482 75.3339C86.3817 75.3339 83.3549 76.0402 80.7821 78.8147C78.2094 81.6397 70.9955 88.3996 70.9955 102.171C70.9955 115.943 81.0344 129.261 82.3964 131.128C83.8089 132.994 102.121 161.244 130.22 173.402C147.977 181.07 154.938 181.725 163.817 180.414C169.215 179.607 180.363 173.654 182.684 167.096C185.004 160.538 185.004 154.938 184.298 153.778C183.642 152.517 181.776 151.811 179.001 150.449Z" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="text-center mt-2 d-sm-none d-lg-block d-xl-none">
                                    <p class="fs-16 fw-400">Corretora responsável</p>
                                    <p class="fs-16 fw-600 m-0">Amanda Gomes</p>
                                    <p class="fs-14 fs-400 text-secondary m-0">CRECI/RS: 00000-0</p>
                                </div>
                            </div>
                            <div class="d-block d-sm-flex gap-1 mt-3 text-center">
                                <button class="btn btn-dark rounded-0 fs-16 fw-400" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Tenho interesse
                                </button>
                                <button class="btn btn-outline-dark rounded-0 fs-16 fw-400 mt-2 mt-sm-0">
                                    Compare o imóvel
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="mt-0 py-lg-4 py-2 bg-cinza">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12" data-aos="zoom-out-up">
                        <p class="fs-16 fw-400 text-lg-start text-center">
                            Uma residência exclusiva, meticulosamente projetada para oferecer o máximo em luxo e conforto. Essa casa de tirar o fôlego possui uma decoração sofisticada, móveis e acabamentos de alta qualidade, além de uma ampla variedade de comodidades e tecnologias modernas. Experimente o requinte e o estilo de vida excepcional neste oásis residencial, projetado para encantar os gostos mais exigentes.
                        </p>
                    </div>
                    <div class="col-6" data-aos="zoom-out-up">
                        <select name="" id="" class="form-select form-select-white mt-1" disabled>
                            <option value="">Conheça o imóvel</option>
                        </select>
                    </div>
                    <div class="col-6" data-aos="zoom-out-up">
                        <select name="" id="" class="form-select form-select-white mt-1" disabled>
                            <option value="">Empreendimento com</option>
                        </select>
                    </div>
                    <div class="d-flex gap-1" >
                        <div class="col-lg-6" data-aos="fade-left">
                            <ul class="">
                                <li class="fs-16 fw-400 mt-2">Amplo, novo e moderno</li>
                                <li class="fs-16 fw-400">Totalmente mobiliado e equipado</li>
                                <li class="fs-16 fw-400">São 106 m² privativos</li>
                                <li class="fs-16 fw-400">3 dormitórios sendo</li>
                                <li class="fs-16 fw-400">1 suíte com mega closet.</li>
                                <li class="fs-16 fw-400">Estar e jantar integrados.</li>
                                <li class="fs-16 fw-400">Amplo, novo e moderno</li>
                                <li class="fs-16 fw-400">Cozinha equipada e em conceito aberto.</li>
                                <li class="fs-16 fw-400">Churrasqueira na cozinha.</li>
                                <li class="fs-16 fw-400">Área de serviço separada.</li>
                                <li class="fs-16 fw-400">Ampla sacada.</li>
                                <li class="fs-16 fw-400">Piso em porcelanato e laminado.</li>
                            </ul>
                        </div>
                        <div class="col-lg-6" data-aos="fade-right">
                            <ul class="">
                                <li class="fs-16 fw-400 mt-2">Esperas para split.</li>
                                <li class="fs-16 fw-400">Projeto de iluminação personalizado.</li>
                                <li class="fs-16 fw-400">Esquadrias em PVC com espera para vidros duplos.</li>
                                <li class="fs-16 fw-400">Espera para água quente.</li>
                                <li class="fs-16 fw-400">4 vagas de garagem.</li>
                                <li class="fs-16 fw-400">Posição solar: Norte/Oeste</li>
                                <li class="fs-16 fw-400">Entregue em 2018</li>
                                <li class="fs-16 fw-400">Caxias do Sul, Exposição.</li>
                                <li class="fs-16 fw-400">Condomínio: R$280,00</li>
                                <li class="fs-16 fw-400">Valor: R$ 35.000,00 /mês</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-dark">
            <div class="container container-start">
                <div class="row">
                    <div class="col-lg-8 py-2">
                        <div class="py-lg-3 py-xl-4 pe-lg-4 pe-2" data-aos="zoom-out-up">
                            <h2 class="fs-20 fw-600 text-white text-lg-start text-center w-100 mb-1">Onde você vai morar</h2>
                            <p class="fs-16 fw-400 text-white text-lg-start text-center">Onde você vai morar

                                O bairro é um lugar tranquilo e acolhedor, onde as pessoas se conhecem e se ajudam. Nele, é possível encontrar ruas arborizadas, praças bem cuidadas e diversas opções de lazer para toda a família. Além disso, é um bairro extremamente seguro, com patrulhamento constante da polícia e câmeras de segurança em todas as ruas. As escolas são de excelente qualidade e há um hospital moderno e bem equipado para atender às necessidades de saúde da comunidade. Se busca um lugar para viver com qualidade de vida e segurança, este bairro é a escolha certa!</p>
                        </div>
                    </div>
                    <div class="col-lg-4" data-aos="zoom-out-up">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3483.8971870276396!2d-51.181529811639685!3d-29.167701827674968!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x951ebd780c9ba527%3A0x29d8026bcfb31988!2sQuattro%20Imob!5e0!3m2!1spt-BR!2sbr!4v1686829630069!5m2!1spt-BR!2sbr" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                        VOCÊ TAMBÉM PODE GOSTAR
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
