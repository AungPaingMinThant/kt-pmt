@extends('layouts.frontend-app')

@section('title', 'Network – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/site-map.css') }}" />

@section('content')
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <div class="layout-page">
            @include('layouts.header', ['page'=>'about_aya'])
            <div class="menu-overlay"></div>
            <div>
                @include('sitemap.sitemap-header', ['header_title'=>'Network', 'page'=>'who_we_are'])

                <div class="container">
                    <div class="row">
                        <div class="col-md-4 px-3 mb-40">
                            <div class="card h-100 sitemap_card">
                                <img class="card-img-top" src="{{ url('/images/sitemap/correspondent-bank.png') }}" alt="Card image cap" />
                                <div class="card-body">
                                    <h5 class="card-title">Correspondent Bank</h5>
                                    <p class="card-text">
                                        <a class="theme_text_color" href="{{ url('/about-aya/network/correspondent-bank') }}">Explore more <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 px-3 mb-40">
                            <div class="card h-100 sitemap_card">
                                <img class="card-img-top" src="{{ url('/images/about-aya/network/branch-locations/mobile_KV.webp') }}" alt="Card image cap" />
                                <div class="card-body">
                                    <h5 class="card-title">Branch Locations</h5>
                                    <p class="card-text">
                                        <a class="theme_text_color" href="{{ url('/about-aya/network/branch-locations') }}">Explore more <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 px-3 mb-40">
                            <div class="card h-100 sitemap_card">
                                <img class="card-img-top" src="{{ url('/images/sitemap/atm.png') }}" alt="Card image cap" />
                                <div class="card-body">
                                    <h5 class="card-title">ATM Locations</h5>
                                    <p class="card-text">
                                        <a class="theme_text_color" href="{{ url('/about-aya/network/atm-locations') }}">Explore more <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 px-3 mb-40">
                            <div class="card h-100 sitemap_card">
                                <img class="card-img-top" src="{{ url('/images/about-aya/network/fx-locations/mobile_KV.webp') }}" alt="Card image cap" />
                                <div class="card-body">
                                    <h5 class="card-title">FX Counter Locations</h5>
                                    <p class="card-text">
                                        <a class="theme_text_color" href="{{ url('/about-aya/network/fx-counter-locations') }}">Explore more <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
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

<div class="space-60"></div>
@include('layouts.footer', ['page'=>'mobilebanking'])

@endsection('content')