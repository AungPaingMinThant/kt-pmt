@extends('layouts.frontend-app')

@section('title', 'About AYA – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/site-map.css') }}" />

@section('content')
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <div class="layout-page">
            @include('layouts.header', ['page'=>'about_aya'])
            <div class="menu-overlay"></div>
            <div>
                @include('sitemap.sitemap-header', ['header_title'=>'About AYA', 'page'=>'about_aya'])

                <div class="container y-4">
                    <div class="row">
                        <div class="col-md-4 px-3 mb-40">
                            <div class="card h-100 sitemap_card">
                                <img class="card-img-top" src="{{ url('/images/sitemap/who-we-are.webp') }}" alt="Card image cap" />
                                <div class="card-body">
                                    <h5 class="card-title">WHO WE ARE</h5>
                                    <p class="card-text">
                                        <a class="theme_text_color" href="{{ url('/about-aya/who-we-are') }}">Explore more <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 px-3 mb-40">
                            <div class="card h-100 sitemap_card">
                                <img class="card-img-top" src="{{ url('/images/sitemap/careers.webp') }}" alt="Card image cap" />
                                <div class="card-body">
                                    <h5 class="card-title">CAREER</h5>
                                    <p class="card-text">
                                        <a class="theme_text_color" href="{{ url('/about-aya/career') }}">Explore more <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 px-3 mb-40">
                            <div class="card h-100 sitemap_card">
                                <img class="card-img-top" src="{{ url('/images/sitemap/governane.webp') }}" alt="Card image cap" />
                                <div class="card-body">
                                    <h5 class="card-title">GOVERNANCE</h5>
                                    <p class="card-text">
                                        <a class="theme_text_color" href="{{ url('/about-aya/governance')}}">Explore more <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 px-3 mb-40">
                            <div class="card h-100 sitemap_card">
                                <img class="card-img-top" src="{{ url('/images/sitemap/sustainability.webp') }}" alt="Card image cap" />
                                <div class="card-body">
                                    <h5 class="card-title">SUSTAINABILITY</h5>
                                    <p class="card-text">
                                        <a class="theme_text_color" href="{{ url('/about-aya/sustainability') }}">Explore more <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 px-3 mb-40">
                            <div class="card h-100 sitemap_card">
                                <img class="card-img-top" src="{{ url('/images/sitemap/news-room.webp') }}" alt="Card image cap" />
                                <div class="card-body">
                                    <h5 class="card-title">NEWSROOM</h5>
                                    <p class="card-text">
                                        <a class="theme_text_color" href="{{ url('/about-aya/news-room') }}">Explore more <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 px-3 mb-40">
                            <div class="card h-100 sitemap_card">
                                <img class="card-img-top" src="{{ url('/images/sitemap/network.webp') }}" alt="Card image cap" />
                                <div class="card-body">
                                    <h5 class="card-title">NETWORK</h5>
                                    <p class="card-text">
                                        <a class="theme_text_color" href="{{ url('/about-aya/network') }}">Explore more <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
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