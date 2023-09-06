@extends('layouts.frontend-app')

@section('title', 'Network – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/site-map.css') }}" />

@section('content')
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <div class="layout-page">
            @include('layouts.header', ['page'=>'about_aya'])
            <div class="menu-overlay"></div>
            <div>
                @include('sitemap.sitemap-header', ['header_title'=>'Network', 'page'=>'who_we_are'])

                <div class="container y-4">
                    <div class="row">
                        <div class="col-md-3 px-3">
                            <p>
                                <a class="f-body-color" href="{{ url('/about-aya/network/branch-locations') }}">Branch Locations <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
                            </p>
                        </div>
                        <div class="col-md-3 px-3">
                            <p>
                                <a class="f-body-color" href="{{ url('/about-aya/network/atm-locations') }}">ATM Locations <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
                            </p>
                        </div>
                        <div class="col-md-3 px-3">
                            <p>
                                <a class="f-body-color" href="{{ url('/about-aya/network/fx-counter-locations') }}">FX Counter Locations <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
                            </p>
                        </div>
                        <div class="col-md-3 px-3">
                            <p>
                                <a class="f-body-color" href="{{ url('/about-aya/network/correspondent-bank') }}">Correspondent Bank <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
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