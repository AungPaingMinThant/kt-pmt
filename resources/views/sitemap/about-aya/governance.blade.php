@extends('layouts.frontend-app')

@section('title', 'Governance – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/site-map.css') }}" />

@section('content')
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <div class="layout-page">
            @include('layouts.header', ['page'=>'about_aya'])
            <div class="menu-overlay"></div>
            <div>
                @include('sitemap.sitemap-header', ['header_title'=>'Governance', 'page'=>'who_we_are'])
                <div class="container y-4">
                    <div class="row">
                        <div class="col-md-4 px-3 mb-40">
                            <div class="card h-100 sitemap_card">
                                <img class="card-img-top" src="{{ url('/images/about-aya/corporate-governance/mobile_KV.webp') }}" alt="Card image cap" />
                                <div class="card-body">
                                    <h5 class="card-title">Corporate Governance</h5>
                                    <p class="card-text">
                                        <a class="theme_text_color" href="{{ url('/about-aya/governance/corporate-governance') }}">Explore more <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 px-3 mb-40">
                            <div class="card h-100 sitemap_card">
                                <img class="card-img-top" src="{{ url('/images/about-aya/corporate-policy/mobile_KV.webp') }}" alt="Card image cap" />
                                <div class="card-body">
                                    <h5 class="card-title">Corporate Policies</h5>
                                    <p class="card-text">
                                        <a class="theme_text_color" href="{{ url('/about-aya/governance/corporate-policies') }}">Explore more <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 px-3 mb-40">
                            <div class="card h-100 sitemap_card">
                                <img class="card-img-top" src="{{ url('/images/sitemap_placeholder.webp') }}" alt="Card image cap" />
                                <div class="card-body">
                                    <h5 class="card-title">Compliance</h5>
                                    <p class="card-text">
                                        <a class="theme_text_color" href="{{ url('/about-aya/governance/compliance') }}">Explore more <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 px-3 mb-40">
                            <div class="card h-100 sitemap_card">
                                <img class="card-img-top" src="{{ url('/images/about-aya/risk-management/mobile_KV.webp') }}" alt="Card image cap" />
                                <div class="card-body">
                                    <h5 class="card-title">Risk Management</h5>
                                    <p class="card-text">
                                        <a class="theme_text_color" href="{{ url('/about-aya/governance/risk-management') }}">Explore more <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
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