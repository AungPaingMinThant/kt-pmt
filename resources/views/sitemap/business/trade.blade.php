@extends('layouts.frontend-app')

@section('title', 'Trade – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/site-map.css') }}" />

@section('content')
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <div class="layout-page">
            @include('layouts.header', ['page'=>'business_banking'])
            <div class="menu-overlay"></div>
            <div>
                @include('sitemap.sitemap-header', ['header_title'=>'Trade', 'page'=>'business_banking_trade'])

                <div class="container y-4">
                    <div class="row">
                        <div class="row">
                            <div class="col-md-4 px-3 mb-40">
                                <div class="card h-100 sitemap_card">
                                    <img class="card-img-top" src="{{ url('/images/sitemap_placeholder.webp') }}" alt="Card image cap" />
                                    <div class="card-body">
                                        <h5 class="card-title">Trade Financing</h5>
                                        <p class="card-text">
                                            <a class="theme_text_color" href="{{ url('/business/trade/trade-financing') }}">Explore more <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 px-3 mb-40">
                                <div class="card h-100 sitemap_card">
                                    <img class="card-img-top" src="{{ url('/images/sitemap_placeholder.webp') }}" alt="Card image cap" />
                                    <div class="card-body">
                                        <h5 class="card-title">Trade Services</h5>
                                        <p class="card-text">
                                            <a class="theme_text_color" href="{{ url('/business/trade/trade-services') }}">Explore more <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
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