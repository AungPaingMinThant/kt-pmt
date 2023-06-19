@extends('layouts.frontend-app')

@section('title', 'Online Payment Services – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/site-map.css') }}" />

@section('content')
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <div class="layout-page">
            @include('layouts.header', ['page'=>'digital_services'])
            <div class="menu-overlay"></div>
            <div>
                @include('sitemap.sitemap-header', ['header_title'=>'Online Payment Services', 'page'=>'digital_online_payment'])

                <div class="container y-4">
                    <div class="row">
                        <div class="col-md-4 px-3">
                            <p>
                                <a class="f-body-color" href="{{ url('/digital-services/online-payment-services/internet-banking') }}"> Internet Banking<i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
                            </p>
                            <p>
                                <a class="f-body-color" href="{{ url('/digital-services/online-payment-services/mobile-banking') }}"> Mobile Banking<i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
                            </p>
                            <p>
                                <a class="f-body-color" href="{{ url('/digital-services/online-payment-services/corporate-internet-banking') }}">Corporate Internet Banking <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
                            </p>
                            
                        </div>
                        <div class="col-md-4 px-3">
                            
                        </div>
                        <div class="col-md-4 px-3">
                            
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