@extends('layouts.frontend-app')

@section('title', 'Merchant Services – AYA Bank')

<style type="text/css">
    .sitemap-banner {
        background-color: #f5f5f7;
    }
    .f-body-color:hover > i {
        animation: myAnim 1s ease 0s 1 normal forwards;
    }
    @keyframes myAnim {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(10px);
        }
    }
</style>
@section('content')
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <div class="layout-page">
            @include('layouts.header', ['page'=>'digital_services'])
            <div class="menu-overlay"></div>
            <div>
                @include('sitemap.sitemap-header', ['header_title'=>'Merchant Services'])

                <div class="container y-4">
                    <div class="row">
                        <div class="col-md-4 px-3">
                            <p>
                                <a class="f-body-color" href="{{ url('/digital-services/card-services/merchant-services/pos') }}"> POS <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
                            </p>
                            <p>
                                <a class="f-body-color" href="{{ url('/digital-services/card-services/merchant-services/ecommerce') }}"> E-Commerce <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
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