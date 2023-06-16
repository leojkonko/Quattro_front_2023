@extends('front.layout.app')

@section('content')
    <main id="blog" class="overflow-hidden py-2 py-lg-4 position-relative">
        <div class="position-absolute top-0 start-0" id="infos"></div>
        <svg class="position-absolute bottom-0 start-0" width="642" height="688" viewBox="0 0 642 688" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect y="0.707107" width="719" height="719" transform="matrix(-0.707107 0.707107 0.707107 0.707107 131.617 0.207107)" stroke="#808080"/>
        </svg>      
        <svg class="position-absolute top-0 end-0" width="641" height="671" viewBox="0 0 641 671" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect y="0.707107" width="719" height="719" transform="matrix(-0.707107 0.707107 0.707107 0.707107 508.617 -347.793)" stroke="#808080"/>
        </svg>                  
        <section class="py-2 position-relative z-index-3">
            <div class="container">
                <div class="row">
                    <div class="d-md-flex d-inline-block gap-1 align-items-center" data-aos="fade-left">
                        <p class="fs-16 fw-400 m-0 me-1 mb-1 mb-md-0">Filtrando por:</p>
                        <button class="btn btn-dark rounded-0">Todos</button>
                        <button class="btn btn-outline-dark rounded-0">Notícias</button>
                        <button class="btn btn-outline-dark rounded-0">Artigos</button>
                    </div>
                </div>
            </div>
        </section>
        {{--<section class="busca">
            <div class="container">
                <div class="row g-2">

                    @if (count($categories))
                        <div class="col-12">
                            <button class="btn btn-primary d-flex align-items-center gap-0-50" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasCategorias" aria-controls="offcanvasCategorias">
                                <svg class="w-1-25 h-1-25" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M10 18h4v-2h-4v2zM3 6v2h18V6H3zm3 7h12v-2H6v2z" />
                                </svg>
                                Categorias
                            </button>
                            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasCategorias" aria-labelledby="offcanvasCategoriasLabel">
                                <div class="offcanvas-header">
                                    <h5 class="offcanvas-title" id="offcanvasCategoriasLabel">Categorias</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body">
                                    <p>Selecione uma categoria:</p>
                                    <ul class="list-unstyled mb-0 p-0">
                                        @foreach ($categories as $category)
                                            <li>
                                                <a href="{{ route_lang('blog', ['categoria' => $category->slug]) }}" class="@if (route_lang('blog', ['categoria' => $category->slug]) === Request::fullUrl()) active @endif">{{ $category->name }}</a>
                                            </li>
                                        @endforeach
                                        <li>
                                            <a href="{{ route_lang('blog') }}" class="fw-bold">Ver todos</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endif

                    @if ($posts->count())
                        @foreach ($posts as $post)
                            <div class="col-6 col-lg-4 col-xl-3">
                                <x-blog-card :post="$post" />
                            </div>
                        @endforeach
                    @else
                        <p>
                            Nenhum artigo encontrado.
                        </p>
                    @endif
                </div>
            </div>
            @if ($posts->total() > $posts->perPage())
                <div class="row py-2">
                    <div class="col-12 d-flex justify-content-center">
                        <x-pagination :list="$posts" />
                    </div>
                </div>
            @endif
        </section>--}}
<section class="py-lg-4 py-2">
    <div class="container">
        <div class="row">
            @foreach (range(0,4) as $image)
                <div class="col-lg-6" data-aos="zoom-out-up">
                    <div class="d-block video-slide swiper-slide card mb-1">
                        <div class="ratio ratio-md-16x9 ratio-70 overflow-hidden" style="">
                            <div class="z-index-1" style="background: linear-gradient(90deg, #202020 0%, rgba(32, 32, 32, 0) 100%);
                            opacity: 0.9;"></div>
                            <img class="w-100 h-100 object-fit-cover" src="{{ url("/front/images/backgrounds/blog.png") }}" alt="Icone">
                            <div class="z-index-2" style="">
                                <div class="position-absolute bottom-0 start-0 p-1 position-conteudo-blog">
                                    <div class="d-flex align-items-center">
                                        <button class="btn btn-dark fs-14 fw-400 rounded-0">Noticias</button>
                                        <p class="fs-14 fw-400 text-white m-0 ms-1">Postado há 2 semanas</p>
                                    </div>
                                    <h2 class="fs-20 fw-600 text-white mt-1 mb-1 mb-md-0">Dicas para escolher o imóvel dos seus sonhos</h2>
                                    <p class="fs-16 fw-400 text-white d-none d-md-block">
                                        Procurando o lugar perfeito para chamar de lar? Descubra nossas melhores dicas para escolher o imóvel dos seus sonhos e transformar sua busca em realidade!
                                    </p>
                                    <div class="d-flex gap-1 redes-card">
                                        <a href="{{ route_lang('blog-details') }}">
                                            <button class="fs-16 fw-400 btn btn-outline-light rounded-0">Saiba mais</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<section class="pb-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
                <nav aria-label="...">
                    <ul class="pagination">
                      <li class="page-item">
                        <a class="page-link" href="#">
                            <svg width="13" height="14" viewBox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13 7L1 7M1 7L7 13M1 7L7 0.999999" stroke="#808080" stroke-linejoin="round"/>
                            </svg>  
                        </a>
                      </li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item active" aria-current="page">
                        <span class="page-link">2</span>
                      </li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item">
                        <a class="page-link" href="#">
                            <svg width="13" height="14" viewBox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 7L12 7M12 7L6 1M12 7L6 13" stroke="#808080" stroke-linejoin="round"/>
                            </svg>
                        </a>
                      </li>
                    </ul>
                  </nav>
            </div>
        </div>
    </div>
</section>
    </main>
@endsection
