@extends('layouts.frontend-app')

@section('title', 'Digital Services – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/site-map.css') }}" />

@section('content')
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <div class="layout-page">
            @include('layouts.header', ['page'=>'digital_services'])
            <div class="menu-overlay"></div>
            <div>
                @include('sitemap.sitemap-header', ['header_title'=>'Digital Services', 'page'=>'digital_services'])

                <div class="container y-4">
                    <div class="row">
                        <div class="col-md-4 px-3 mb-40">
                            <div class="card h-100 sitemap_card">
                                <img class="card-img-top" src="{{ url('/images/sitemap/digital-internet-banking.jpg') }}" alt="Card image cap" />
                                <div class="card-body">
                                    <h5 class="card-title">ONLINE PAYMENT SERVICES</h5>
                                    <p class="card-text">
                                        <a class="theme_text_color" href="{{ url('/digital-services/online-payment-services') }}">Explore more <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 px-3 mb-40">
                            <div class="card h-100 sitemap_card">
                                <img class="card-img-top" src="{{ url('/images/sitemap/digital-card-services.jpg') }}" alt="Card image cap" />
                                <div class="card-body">
                                    <h5 class="card-title">CARD SERVICES</h5>
                                    <p class="card-text">
                                        <a class="theme_text_color" href="{{ url('/digital-services/card-services') }}">Explore more <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 px-3 mb-40">
                            <div class="card h-100 sitemap_card">
                                <img class="card-img-top" src="{{ url('/images/sitemap/digital-atm.jpg') }}" alt="Card image cap" />
                                <div class="card-body">
                                    <h5 class="card-title">ATM</h5>
                                    <p class="card-text">
                                        <a class="theme_text_color" href="{{ url('/digital-services/atm') }}">Explore more <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 px-3 mb-40">
                            <div class="card h-100 sitemap_card">
                                <img class="card-img-top" src="{{ url('/images/sitemap/digital-wallet-solution.jpg') }}" alt="Card image cap" />
                                <div class="card-body">
                                    <h5 class="card-title">WALLET SOLUTION</h5>
                                    <p class="card-text">
                                        <a class="theme_text_color" href="{{ url('/digital-services/wallet-solution') }}">Explore more <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 px-3 mb-40">
                            <div class="card h-100 sitemap_card">
                                <img class="card-img-top" src="{{ url('/images/sitemap/digital-guideline.jpg') }}" alt="Card image cap" />
                                <div class="card-body">
                                    <h5 class="card-title">GUIDELINE</h5>
                                    <p class="card-text">
                                        <a class="theme_text_color" href="{{ url('/digital-services/guideline') }}">Explore more <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
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