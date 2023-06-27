@extends('layouts.frontend-app')

@section('title', 'Insurance – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/site-map.css') }}" />

@section('content')
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <div class="layout-page">
            @include('layouts.header', ['page'=>'personal_banking'])
            <div class="menu-overlay"></div>
            <div>
                @include('sitemap.sitemap-header', ['header_title'=>'Insurance', 'page'=>'personal_banking_ins'])

                <div class="container y-4">
                    <div class="row">
                        <div class="col-md-6 px-3">
                            <h5>General Insurance</h5>
                            <p>
                                <a class="f-body-color" href="{{ url('/personal-banking/insurance/health') }}"> Health Insurance <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
                            </p>
                            <p>
                                <a class="f-body-color" href="{{ url('/personal-banking/insurance/motor') }}">Motor Insurance <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
                            </p>
                            <p>
                                <a class="f-body-color" href="{{ url('/personal-banking/insurance/fire') }}">Fire Insurance <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
                            </p>
                            <p>
                                <a class="f-body-color" href="{{ url('/personal-banking/insurance/personal-accident') }}">Personal Accident Insurance <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
                            </p>
                            <p>
                                <a class="f-body-color" href="{{ url('/personal-banking/insurance/travel/aya-go') }}"> AYA Go Travel Insurance <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
                            </p>
                            <p>
                                <a class="f-body-color" href="{{ url('/personal-banking/insurance/travel/aya-joy') }}">AYA Joy Travel Insurance <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
                            </p>
                        </div>
                        <div class="col-md-6 px-3">
                            <h5>Life Insurance</h5>
                            <p>
                                <a class="f-body-color" href="{{ url('/personal-banking/insurance/life/universal') }}">Universal Life Insurance <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
                            </p>
                            <p>
                                <a class="f-body-color" href="{{ url('/personal-banking/insurance/life/education') }}">Education Life Insurance <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
                            </p>
                            <p>
                                <a class="f-body-color" href="{{ url('/personal-banking/insurance/life/one-health-solution-individual-plan') }}">One Health Solution Individual Plan <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
                            </p>
                            <p>
                                <a class="f-body-color" href="{{ url('/personal-banking/insurance/life/short-term') }}">Short Term Endowment Life Insurance <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
                            </p>
                        </div>
                        <div class="space-40"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="space-60"></div>
@include('layouts.footer', ['page'=>'mobilebanking'])

@endsection('content')