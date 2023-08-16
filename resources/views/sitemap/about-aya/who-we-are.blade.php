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
                        <div class="col-md-3 px-3">
                            <p>
                                <a class="f-body-color" href="{{ url('/about-aya/who-we-are/corporate-profile') }}">Corporate Profile <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
                            </p>
                            <!-- <p>
                                <a class="f-body-color" href="{{ url('/about-aya/who-we-are/corporate-profile/ayabank-profile') }}">AYA Bank Profile <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
                            </p> -->
                        </div>
                        <div class="col-md-3 px-3">
                            <p>
                                <a class="f-body-color" href="{{ url('/about-aya/who-we-are/leadership') }}">Leadership <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
                            </p>
                           <!--  <p>
                                <a class="f-body-color" href="{{ url('/about-aya/who-we-are/corporate-profile/mission-corporate-value-brand-promise') }}">Mission, Corporate Values And Brand Value <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
                            </p> -->
                        </div>
                        <div class="col-md-3 px-3">
                            <p>
                                <a class="f-body-color" href="{{ url('/about-aya/who-we-are/our-strategies') }}">Our Strategies <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
                            </p>
                        </div>
                        <div class="col-md-3 px-3">
                            <p>
                                <a class="f-body-color" href="{{ url('/about-aya/who-we-are/why-us') }}">Why Us <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
                            </p>
                        </div>
                        <div class="col-md-3 px-3">
                            <p>
                                <a class="f-body-color" href="{{ url('/about-aya/who-we-are/foreign-direct-investment') }}">Foreign Direct Investment <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
                            </p>
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