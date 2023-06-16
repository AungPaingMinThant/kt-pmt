@extends('layouts.frontend-app')

@section('title', 'Card Services – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/site-map.css') }}" />

@section('content')
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <div class="layout-page">
            @include('layouts.header', ['page'=>'digital_services'])
            <div class="menu-overlay"></div>
            <div>
                @include('sitemap.sitemap-header', ['header_title'=>'Card Services'])

                <div class="container y-4">
                    <div class="row">
                        <div class="col-md-4 px-3">
                            <h5>
                                <a class="f-body-color" href="{{ url('/digital-services/card-services/merchant-services') }}">Merchant Services <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
                            </h5>
                            <p class="px-3">
                                <a class="f-body-color" href="{{ url('/digital-services/card-services/prepaid-card') }}">Prepaid Card <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
                            </p>
                            <p class="px-3">
                                <a class="f-body-color" href="{{ url('/digital-services/card-services/simple-pay') }}">Simple Pay <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
                            </p>
                            
                        </div>
                        <div class="col-md-4 px-3">
                            <p>
                                <a class="f-body-color" href="{{ url('/digital-services/card-services/credit-card') }}">Credit Card <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
                            </p>
                            <p>
                                <a class="f-body-color" href="{{ url('/digital-services/card-services/debit-card') }}">Debit Card <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
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