@inject('site', 'App\\Services\\SiteService')

@if (Route::is('products'))
@else
<section class="position-relative" style="" data-aos="fade-left">
    <div class="w-100 h-100 position-absolute top-0 start-0 z-index-1" style="background: linear-gradient(90deg, #202020 0%, rgba(32, 32, 32, 0) 100%);
        opacity: 0.7;"></div>
    <div class="col-lg-12 position-relative end-0 top-0 d-lg-block" >
        <div class="ratio ratio-xl-22 ratio-lg-21x9 ratio-70 ratio-sm-21x9" style="">
            <img class="w-100 h-100 object-fit-cover" src="{{ asset("front/images/backgrounds/footer.png") }}" alt="">
            <div class="position-breadcrumb">
                <div class="container">
                    <nav aria-label="breadcrumb" class="d-flex flex-column flex-sm-row gap-0-50 align-items-center justify-content-between position-relative z-index-1">
                        @if ($site->getBreadTitle())
                            <h1 class="fs-48 fw-800 text-white mb-0">
                                {{ $site->getBreadTitle() }}
                            </h1>
                        @endif
                        <ol class="breadcrumb d-flex justify-content-end align-items-center">
                            @foreach ($site->getBreadCrumbs() as $bread)
                                @if ($loop->last)
                                    <li class="breadcrumb-item active" aria-current="{{ $bread->getText() }}">{{ $bread->getText() }}</li>
                                @else
                                    <li class="breadcrumb-item">
                                        <a class="text-decoration-none text-white" href="{{ $bread->getUrl() }}">{{ $bread->getText() }}</a>
                                    </li>
                                @endif
                            @endforeach
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
@endif
@if (Route::is('products'))
<section class="position-relative" style="" data-aos="fade-left"> 
    <div class="w-100 h-100 position-absolute top-0 start-0 z-index-1" style="background: linear-gradient(90deg, #202020 0%, rgba(32, 32, 32, 0) 100%);
        opacity: 0.7;"></div>
    <div class="col-lg-12 position-relative end-0 top-0 d-lg-block" >
        <div class="ratio ratio-xl-42 ratio-xxl-32 ratio-lg-48 ratio-70 ratio-sm-21x9" style="">
            <img class="w-100 h-100 object-fit-cover" src="{{ asset("front/images/backgrounds/footer.png") }}" alt="">
            <div class="position-breadcrumb-products">
                <div class="container">
                    <nav aria-label="breadcrumb" class="d-flex flex-column flex-sm-row gap-0-50 align-items-center justify-content-between position-relative z-index-1">
                        @if ($site->getBreadTitle())
                            <h1 class="fs-48 fw-800 text-white mb-0">
                                {{ $site->getBreadTitle() }}
                            </h1>
                        @endif
                        <ol class="breadcrumb d-flex justify-content-end align-items-center">
                            @foreach ($site->getBreadCrumbs() as $bread)
                                @if ($loop->last)
                                    <li class="breadcrumb-item active" aria-current="{{ $bread->getText() }}">{{ $bread->getText() }}</li>
                                @else
                                    <li class="breadcrumb-item">
                                        <a class="text-decoration-none text-white" href="{{ $bread->getUrl() }}">{{ $bread->getText() }}</a>
                                    </li>
                                @endif
                            @endforeach
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
         
        <div class="position-absolute w-100 start-50 translate-middle-x container bottom-0 z-index-1 d-none d-lg-block">
            <div class="position-absolute bottom-0 w-100 start-50 translate-middle-x" id="infos">
                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                        Compra
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link position-relative" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                            <div class="w-100 h-100 position-absolute start-0 bottom-0 z-index-background bg-danger"></div>
                            <span class="position-relative opacity-1" style="opacity: 1">Aluguel</span>
                        </button>
                    </li>
                  </ul>
                  <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active bg-dark" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <div class="ps-lg-3">
                            <div class="row">
                                @foreach (range(0,4) as $banner)
                                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mt-2 mb-1 d-flex justify-content-center">
                                    <select name="" id="" class="form-select js-example-basic-multiple" name="states[]" multiple="multiple">
                                        @foreach (range(0,4) as $banne2r)
                                        <option value="">Tipo do imóvel</option>
                                        @endforeach
                                    </select>
                                </div>
                                @endforeach
                                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mt-2 mb-1 d-flex justify-content-center">
                                    
                                </div>
                                @foreach (range(0,4) as $banner)
                                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mt-2 mb-1 d-flex justify-content-center pb-1">
                                    <select name="" id="" class="form-select js-example-basic-multiple" name="states[]" multiple="multiple">
                                        <option value="">Tipo do imóvel</option>
                                    </select>
                                </div>
                                @endforeach
                                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mt-2 mb-1 d-flex justify-content-center pb-1">
                                    <button class="btn btn-outline-light rounded-0">
                                        Buscar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade bg-dark" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="ps-lg-3">
                            <div class="row">
                                @foreach (range(0,4) as $banner)
                                <div class="col-lg-2 col-md-3 col-sm-4 col-6 d-flex justify-content-center">
                                    <select name="" id="" class="form-select my-1 js-example-basic-multiple" name="states[]" multiple="multiple">
                                        <option value="">Tipo do imóvel</option>
                                    </select>
                                </div>
                                @endforeach
                                <div class="col-lg-2 col-md-3 col-sm-4 col-6 d-flex justify-content-center">
                                    
                                </div>
                                @foreach (range(0,4) as $banner)
                                <div class="col-lg-2 col-md-3 col-sm-4 col-6 d-flex justify-content-center">
                                    <select name="" id="" class="form-select my-1 js-example-basic-multiple" name="states[]" multiple="multiple">
                                        <option value="">Tipo do imóvel</option>
                                    </select>
                                </div>
                                @endforeach
                                <div class="col-lg-2 col-md-3 col-sm-4 col-6 d-flex justify-content-center">
                                    <button class="btn btn-outline-light rounded-0 my-1">
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
@endif
@if (Route::is('products')) 
<section class="d-lg-none py-2" style="background: #f5f5f5" data-aos="zoom-out-up">
    <div class="container position-relative">
        <div class="position-relative z-index-1">
            <div class="">
                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-home-tab1" data-bs-toggle="pill" data-bs-target="#pills-home1" type="button" role="tab" aria-controls="pills-home1" aria-selected="true">
                        Compra
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link position-relative" id="pills-profile-tab1" data-bs-toggle="pill" data-bs-target="#pills-profile1" type="button" role="tab" aria-controls="pills-profile1" aria-selected="false">
                            <div class="w-100 h-100  start-0 bottom-0 z-index-background"></div>
                            <span class="position-relative opacity-1" style="opacity: 1">Aluguel</span>
                        </button>
                    </li>
                  </ul>
                  <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active bg-dark px-1" id="pills-home1" role="tabpanel" aria-labelledby="pills-home-tab1">
                        <div class="ps-lg-3">
                            <div class="row">
                                @foreach (range(0,4) as $banner)
                                <div class="col-lg-2 col-md-3 col-sm-4 col-6 d-flex justify-content-center">
                                    <select name="" id="" class="form-select my-2">
                                        <option value="">Tipo do imóvel</option>
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
                                @foreach (range(0,4) as $banner)
                                <div class="col-lg-2 col-md-3 col-sm-4 col-6 d-flex justify-content-center">
                                    <select name="" id="" class="form-select my-2">
                                        <option value="">Tipo do imóvel</option>
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
@endif
