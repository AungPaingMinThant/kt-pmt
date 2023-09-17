@extends('layouts.frontend-app')

@section('title', 'Who We Are – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/site-map.css') }}" />

@section('content')
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <div class="layout-page">
            @include('layouts.header', ['page'=>'about_aya'])
            <div class="menu-overlay"></div>
            <div>
                @include('sitemap.sitemap-header', ['header_title'=>'Who We Are', 'page'=>'who_we_are'])

                <div class="container y-4">
                    <div class="row">
                        <div class="col-md-4 px-3 mb-40">
                            <div class="card h-100 sitemap_card">
                                <img class="card-img-top" src="{{ url('/images/sitemap_placeholder.webp') }}" alt="Card image cap" />
                                <div class="card-body">
                                    <h5 class="card-title">Corporate Profile</h5>
                                    <p class="card-text">
                                        <a class="theme_text_color" href="{{ url('/about-aya/who-we-are/corporate-profile') }}">Explore more <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 px-3 mb-40">
                            <div class="card h-100 sitemap_card">
                                <img class="card-img-top" src="{{ url('/images/sitemap_placeholder.webp') }}" alt="Card image cap" />
                                <div class="card-body">
                                    <h5 class="card-title">Leadership</h5>
                                    <p class="card-text">
                                        <a class="theme_text_color" href="{{ url('/about-aya/who-we-are/leadership') }}">Explore more <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
                                     </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 px-3 mb-40">
                            <div class="card h-100 sitemap_card">
                                <img class="card-img-top" src="{{ url('/images/sitemap/our-strategies.webp') }}" alt="Card image cap" />
                                <div class="card-body">
                                    <h5 class="card-title">Our Strategies</h5>
                                    <p class="card-text">
                                        <a class="theme_text_color" href="{{ url('/about-aya/who-we-are/our-strategies') }}">Explore more <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 px-3 mb-40">
                            <div class="card h-100 sitemap_card">
                                <img class="card-img-top" src="{{ url('/images/about-aya/why-us/mobile_KV.webp') }}" alt="Card image cap" />
                                <div class="card-body">
                                    <h5 class="card-title">Why Us</h5>
                                    <p class="card-text">
                                        <a class="theme_text_color" href="{{ url('/about-aya/who-we-are/why-us') }}">Explore more <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 px-3 mb-40">
                            <div class="card h-100 sitemap_card">
                                <img class="card-img-top" src="{{ url('/images/about-aya/who-we-are/foreign-direct-investment/mobile_KV.webp') }}" alt="Card image cap" />
                                <div class="card-body">
                                    <h5 class="card-title">Foreign Direct Investment</h5>
                                    <p class="card-text">
                                        <a class="theme_text_color" href="{{ url('/about-aya/who-we-are/foreign-direct-investment') }}">Explore more <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
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