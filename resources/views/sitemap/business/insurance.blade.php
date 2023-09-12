@extends('layouts.frontend-app')

@section('title', 'Insurance – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/site-map.css') }}" />

@section('content')
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <div class="layout-page">
            @include('layouts.header', ['page'=>'business_banking'])
            <div class="menu-overlay"></div>
            <div>
                @include('sitemap.sitemap-header', ['header_title'=>'Insurance', 'page'=>'business_banking_ins'])

                <div class="container y-4">
                    <div class="row">
                            <div class="col-md-4 px-3 mb-40">
                                <div class="card h-100 sitemap_card">
                                    <img class="card-img-top" src="{{ url('/images/sitemap_placeholder.webp') }}" alt="Card image cap" />
                                    <div class="card-body">
                                        <h5 class="card-title">Group Life Insurance</h5>
                                        <p class="card-text">
                                            <a class="theme_text_color" href="{{ url('/business/insurance/group-life') }}">Explore more <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 px-3 mb-40">
                                <div class="card h-100 sitemap_card">
                                    <img class="card-img-top" src="{{ url('/images/sitemap_placeholder.webp') }}" alt="Card image cap" />
                                    <div class="card-body">
                                        <h5 class="card-title">Fire Insurance</h5>
                                        <p class="card-text">
                                            <a class="theme_text_color" href="{{ url('/business/insurance/fire') }}">Explore more <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 px-3 mb-40">
                                <div class="card h-100 sitemap_card">
                                    <img class="card-img-top" src="{{ url('/images/sitemap_placeholder.webp') }}" alt="Card image cap" />
                                    <div class="card-body">
                                        <h5 class="card-title">Motor Insurance</h5>
                                        <p class="card-text">
                                            <a class="theme_text_color" href="{{ url('/business/insurance/motor') }}">Explore more <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="col-md-4 px-3 mb-40">
                                <div class="card h-100 sitemap_card">
                                    <img class="card-img-top" src="{{ url('/images/sitemap_placeholder.webp') }}" alt="Card image cap" />
                                    <div class="card-body">
                                        <h5 class="card-title">Motor Insurance</h5>
                                        <p class="card-text">
                                            <a class="theme_text_color" href="{{ url('/business/insurance/motor') }}">Explore more <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
                                        </p>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="col-md-4 px-3 mb-40">
                                <div class="card h-100 sitemap_card">
                                    <img class="card-img-top" src="{{ url('/images/sitemap_placeholder.webp') }}" alt="Card image cap" />
                                    <div class="card-body">
                                        <h5 class="card-title">Domestice Marine Cargo Insurance</h5>
                                        <p class="card-text">
                                            <a class="theme_text_color" href="{{ url('/business/insurance/domestic-marine-cargo') }}">Explore more <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 px-3 mb-40">
                                <div class="card h-100 sitemap_card">
                                    <img class="card-img-top" src="{{ url('/images/sitemap_placeholder.webp') }}" alt="Card image cap" />
                                    <div class="card-body">
                                        <h5 class="card-title">Oversea Marine Cargo Insurance</h5>
                                        <p class="card-text">
                                            <a class="theme_text_color" href="{{ url('/business/insurance/oversea-marine-cargo') }}">Explore more <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 px-3 mb-40">
                                <div class="card h-100 sitemap_card">
                                    <img class="card-img-top" src="{{ url('/images/sitemap_placeholder.webp') }}" alt="Card image cap" />
                                    <div class="card-body">
                                        <h5 class="card-title">Domestic Inland Transit Insurance</h5>
                                        <p class="card-text">
                                            <a class="theme_text_color" href="{{ url('/business/insurance/domestic-inland-transit') }}">Explore more <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 px-3 mb-40">
                                <div class="card h-100 sitemap_card">
                                    <img class="card-img-top" src="{{ url('/images/sitemap_placeholder.webp') }}" alt="Card image cap" />
                                    <div class="card-body">
                                        <h5 class="card-title">Industrial All Risk Insurance (IAR)</h5>
                                        <p class="card-text">
                                            <a class="theme_text_color" href="{{ url('/business/insurance/industrial-all-risk') }}">Explore more <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 px-3 mb-40">
                                <div class="card h-100 sitemap_card">
                                    <img class="card-img-top" src="{{ url('/images/sitemap_placeholder.webp') }}" alt="Card image cap" />
                                    <div class="card-body">
                                        <h5 class="card-title">Contractot's All Risk & Erection All Risk</h5>
                                        <p class="card-text">
                                            <a class="theme_text_color" href="{{ url('/business/insurance/car-ear') }}">Explore more <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="space-60"></div>
@include('layouts.footer', ['page'=>'mobilebanking'])

@endsection('content')