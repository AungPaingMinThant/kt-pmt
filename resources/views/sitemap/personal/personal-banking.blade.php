@extends('layouts.frontend-app')

@section('title', 'Personal Banking – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/site-map.css') }}" />

@section('content')
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <div class="layout-page">
            @include('layouts.header', ['page'=>'personal_banking'])
            <div class="menu-overlay"></div>
            <div>
                @include('sitemap.sitemap-header', ['header_title'=>'Personal Banking', 'page'=>'personal_banking'])

                <div class="container y-4">
                    <div class="row">
                        <div class="col-md-4 px-3 mb-40">
                            <div class="card h-100 sitemap_card">
                                <img class="card-img-top" src="{{ url('/images/sitemap_placeholder.webp') }}" alt="Card image cap" />
                                <div class="card-body">
                                    <h5 class="card-title">ACCOUNTS & SAVINGS</h5>
                                    <p class="card-text">
                                        <a class="theme_text_color" href="{{ url('/personal-banking/account-saving') }}">Explore more <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 px-3 mb-40">
                            <div class="card h-100 sitemap_card">
                                <img class="card-img-top" src="{{ url('/images/sitemap_placeholder.webp') }}" alt="Card image cap" />
                                <div class="card-body">
                                    <h5 class="card-title">BORROWING</h5>
                                    <p class="card-text">
                                        <a class="theme_text_color" href="{{ url('/personal-banking/borrowing') }}">Explore more <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 px-3 mb-40">
                            <div class="card h-100 sitemap_card">
                                <img class="card-img-top" src="{{ url('/images/sitemap_placeholder.webp') }}" alt="Card image cap" />
                                <div class="card-body">
                                    <h5 class="card-title">REMITTANCE & PAYMENTS</h5>
                                    <p class="card-text">
                                        <a class="theme_text_color" href="{{ url('/personal-banking/remittance') }}">Explore more <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 px-3 mb-40">
                            <div class="card h-100 sitemap_card">
                                <img class="card-img-top" src="{{ url('images/premium-banking/mobile_KV.jpg') }}" alt="Card image cap" />
                                <div class="card-body">
                                    <h5 class="card-title">ROYAL BANKING</h5>
                                    <p class="card-text">
                                        <a class="theme_text_color" href="{{ url('/personal-banking/royal-banking') }}">Explore more <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 px-3 mb-40">
                            <div class="card h-100 sitemap_card">
                                <img class="card-img-top" src="{{ url('/images/sitemap_placeholder.webp') }}" alt="Card image cap" />
                                <div class="card-body">
                                    <h5 class="card-title">INSURANCE</h5>
                                    <p class="card-text">
                                        <a class="theme_text_color" href="{{ url('/personal-banking/insurance') }}">Explore more <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 px-3 mb-40">
                            <div class="card h-100 sitemap_card">
                                <img class="card-img-top" src="{{ url('/images/sitemap_placeholder.webp') }}" alt="Card image cap" />
                                <div class="card-body">
                                    <h5 class="card-title">OTHER SERVICES</h5>
                                    <p class="card-text">
                                        <a class="theme_text_color" href="{{ url('/personal-banking/other-services') }}">Explore more <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
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