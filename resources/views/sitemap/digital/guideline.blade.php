@extends('layouts.frontend-app')

@section('title', 'Guideline – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/site-map.css') }}" />

@section('content')
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <div class="layout-page">            
            @include('layouts.header', ['page'=>'digital_services'])
            <div class="menu-overlay"></div>
            <div>
                @include('sitemap.sitemap-header', ['header_title'=>'Guideline', 'page'=>'digital_guide'])

                <div class="container y-4">
                    <div class="row">
                        <div class="col-md-4 px-3 mb-40">
                            <div class="card h-100 sitemap_card">
                                <img class="card-img-top" src="{{ url('/images/sitemap/digital-secure.jpg') }}" alt="Card image cap" />
                                <div class="card-body">
                                    <h5 class="card-title">Security Advices for Digital Services</h5>
                                    <p class="card-text">
                                        <a class="theme_text_color" href="{{ url('/digital-services/guideline/digital-secure') }}">Explore more <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 px-3 mb-40">
                            <div class="card h-100 sitemap_card">
                                <img class="card-img-top" src="{{ url('/images/sitemap/digital-frequently.jpg') }}" alt="Card image cap" />
                                <div class="card-body">
                                    <h5 class="card-title">Frequently Used Digital Services</h5>
                                    <p class="card-text">
                                        <a class="theme_text_color" href="{{ url('/digital-services/guideline/frequently-used-digital') }}">Explore more <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
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