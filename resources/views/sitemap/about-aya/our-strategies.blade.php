@extends('layouts.frontend-app')

@section('title', 'Our Strategies – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/site-map.css') }}" />

@section('content')
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <div class="layout-page">
            @include('layouts.header', ['page'=>'about_aya'])
            <div class="menu-overlay"></div>
            <div>
                @include('sitemap.sitemap-header', ['header_title'=>'Our Strategies', 'page'=>'our_strategies'])

                <div class="container y-4">
                    <div class="row">
                        <div class="col-md-4 px-3 mb-40">
                            <div class="card h-100 sitemap_card">
                                <img class="card-img-top" src="{{ url('/images/about-aya/corporate-strategy/mobile_KV.webp') }}" alt="Card image cap" />
                                <div class="card-body">
                                    <h5 class="card-title">Corporate Strategy</h5>
                                    <p class="card-text">
                                        <a class="theme_text_color" href="{{ url('/about-aya/who-we-are/our-strategies/corporate-strategy') }}">Explore more <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 px-3 mb-40">
                            <div class="card h-100 sitemap_card">
                                <img class="card-img-top" src="{{ url('/images/about-aya/stakeholder-management/mobile_KV.webp') }}" alt="Card image cap" />
                                <div class="card-body">
                                    <h5 class="card-title">Stakeholder Management</h5>
                                    <p class="card-text">
                                        <a class="theme_text_color" href="{{ url('/about-aya/who-we-are/our-strategies/corporate-strategy') }}">Explore more <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
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