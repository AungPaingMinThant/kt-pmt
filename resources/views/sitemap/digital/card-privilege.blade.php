@extends('layouts.frontend-app')

@section('title', 'Card Privilege – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/site-map.css') }}" />

@section('content')
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <div class="layout-page">
            @include('layouts.header', ['page'=>'digital_services'])
            <div class="menu-overlay"></div>
            <div>
                @include('sitemap.sitemap-header', ['header_title'=>'Card Privilege', 'page'=>'digital_card_services'])

                <div class="container y-4">
                    <div class="row">
                        <div class="col-md-4 px-3">
                            <p class="px-3">
                                <a class="f-body-color" href="{{ url('/digital-services/card-services/simple-pay') }}">Simple Pay <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
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