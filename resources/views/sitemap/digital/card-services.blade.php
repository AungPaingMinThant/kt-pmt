@extends('layouts.frontend-app')

@section('title', 'Card Services – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/site-map.css') }}" />

@section('content')
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <div class="layout-page">
            @include('layouts.header', ['page'=>'digital_services'])
            <div class="menu-overlay"></div>
            <div>
                @include('sitemap.sitemap-header', ['header_title'=>'Card Services', 'page'=>'digital_card_services'])

                <div class="container y-4">
                    <div class="row">
                        <div class="col-md-4 px-3 mb-40">
                            <div class="card h-100 sitemap_card">
                                <img class="card-img-top" src="{{ url('/images/sitemap_placeholder.webp') }}" alt="Card image cap" />
                                <div class="card-body">
                                    <h5 class="card-title">Merchant Services</h5>
                                    <p class="card-text">
                                        <a class="theme_text_color" href="{{ url('/digital-services/card-services/merchant-services') }}">Explore more <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 px-3 mb-40">
                            <div class="card h-100 sitemap_card">
                                <img class="card-img-top" src="{{ url('/images/KV_credit_mobile.jpg') }}" alt="Card image cap" />
                                <div class="card-body">
                                    <h5 class="card-title">Credit Card</h5>
                                    <p class="card-text">
                                        <a class="theme_text_color" href="{{ url('/digital-services/card-services/credit-card') }}">Explore more <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                            <!-- <p class="px-3">
                                <a class="f-body-color" href="{{ url('/digital-services/card-services/prepaid-card') }}">Prepaid Card <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
                            </p>
                            <p class="px-3">
                                <a class="f-body-color" href="{{ url('/digital-services/card-services/simple-pay') }}">Simple Pay <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
                            </p> -->
                            <div class="col-md-4 px-3 mb-40">
                                <div class="card h-100 sitemap_card">
                                    <img class="card-img-top" src="{{ url('/images/prepaid/mobile_KV.jpg') }}" alt="Card image cap" />
                                    <div class="card-body">
                                        <h5 class="card-title">Prepaid Card</h5>
                                        <p class="card-text">
                                            <a class="theme_text_color" href="{{ url('/digital-services/card-services/prepaid-card') }}">Explore more <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 px-3 mb-40">
                                <div class="card h-100 sitemap_card">
                                    <img class="card-img-top" src="{{ url('/images/debit_KV_mobile.jpg') }}" alt="Card image cap" />
                                    <div class="card-body">
                                        <h5 class="card-title">Debit Card</h5>
                                        <p class="card-text">
                                            <a class="theme_text_color" href="{{ url('/digital-services/card-services/debit-card') }}">Explore more <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
                                        </p>
                                    </div>
                                </div>
                            </div>                         
                            <div class="col-md-4 px-3 mb-40">
                                <div class="card h-100 sitemap_card">
                                    <img class="card-img-top" src="{{ url('/images/sitemap_placeholder.webp') }}" alt="Card image cap" />
                                    <div class="card-body">
                                        <h5 class="card-title">Card Privilege</h5>
                                        <p class="card-text">
                                            <a class="theme_text_color" href="{{ url('/digital-services/card-services/card-privilege') }}">Explore more <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
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