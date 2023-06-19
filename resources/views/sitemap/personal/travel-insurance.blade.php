@extends('layouts.frontend-app')

@section('title', 'Travel Insurance – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/site-map.css') }}" />

@section('content')
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <div class="layout-page">
            @include('layouts.header', ['page'=>'personal_banking'])
            <div class="menu-overlay"></div>
            <div>
                @include('sitemap.sitemap-header', ['header_title'=>'Travel Insurance', 'page'=>'personal_banking_travel_ins'])

                <div class="container y-4">
                    <div class="row">
                        <div class="col-md-4 px-3">
                           <p>
                                <a class="f-body-color" href="{{ url('/personal-banking/insurance/travel/aya-go') }}"> AYA Go Travel Insurance <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
                            </p>
                            <p>
                                <a class="f-body-color" href="{{ url('/personal-banking/insurance/travel/aya-joy') }}">AYA Joy Travel Insurance <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
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