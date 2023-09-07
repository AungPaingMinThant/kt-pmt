@extends('layouts.frontend-app')

@section('title', 'Career – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/site-map.css') }}" />

@section('content')
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <div class="layout-page">
            @include('layouts.header', ['page'=>'about_aya'])
            <div class="menu-overlay"></div>
            <div>
                @include('sitemap.sitemap-header', ['header_title'=>'Career', 'page'=>'career'])

                <div class="container y-4">
                    <div class="row">
                        <div class="col-md-4 px-3 mb-40">
                            <div class="card h-100 sitemap_card">
                                <img class="card-img-top" src="{{ url('/images/about-aya/career/career-opportunities/mobile_KV.webp') }}" alt="Card image cap" />
                                <div class="card-body">
                                    <h5 class="card-title">Career Opportunities</h5>
                                    <p class="card-text">
                                        <a class="theme_text_color" href="{{ url('/about-aya/career/career-opportunities') }}">Explore more <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 px-3 mb-40">
                            <div class="card h-100 sitemap_card">
                                <img class="card-img-top" src="{{ url('/images/about-aya/career/aya-culture/mobile_KV.webp') }}" alt="Card image cap" />
                                <div class="card-body">
                                    <h5 class="card-title">AYA Culture</h5>
                                    <p class="card-text">
                                        <a class="theme_text_color" href="{{ url('/about-aya/career/aya-culture') }}">Explore more <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 px-3 mb-40">
                            <div class="card h-100 sitemap_card">
                                <img class="card-img-top" src="{{ url('/images/about-aya/career/life-at-aya/mobile_KV.webp') }}" alt="Card image cap" />
                                <div class="card-body">
                                    <h5 class="card-title">Life At AYA</h5>
                                    <p class="card-text">
                                        <a class="theme_text_color" href="{{ url('/about-aya/career/life-at-aya') }}">Explore more <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 px-3 mb-40">
                            <div class="card h-100 sitemap_card">
                                <img class="card-img-top" src="{{ url('/images/about-aya/career/employee-development/mobile_KV.webp') }}" alt="Card image cap" />
                                <div class="card-body">
                                    <h5 class="card-title">Employee Development</h5>
                                    <p class="card-text">
                                        <a class="theme_text_color" href="{{ url('/about-aya/career/employee-development') }}">Explore more <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
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