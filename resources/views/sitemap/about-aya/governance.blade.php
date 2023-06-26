@extends('layouts.frontend-app')

@section('title', 'Governance – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/site-map.css') }}" />

@section('content')
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <div class="layout-page">
            @include('layouts.header', ['page'=>'about_aya'])
            <div class="menu-overlay"></div>
            <div>
                @include('sitemap.sitemap-header', ['header_title'=>'Governance', 'page'=>'governance'])

                <div class="container y-4">
                    <div class="row">
                        <div class="col-md-4 px-3">
                            <p>
                                <a class="f-body-color" href="{{ url('/about-aya/governance/corporate-governance') }}">Corporate Governance <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
                            </p>
                        </div>
                        <div class="col-md-4 px-3">
                            <p>
                                <a class="f-body-color" href="{{ url('/about-aya/governance/compliance') }}">Compliance <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
                            </p>
                            <p>
                                <a class="f-body-color" href="{{ url('/about-aya/governance/compliance/aml-cft') }}">Implementations Of AML/CFT <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
                            </p>
                            
                        </div>
                        <div class="col-md-4 px-3">
                            <p>
                                <a class="f-body-color" href="{{ url('/about-aya/governance/risk-management') }}">Risk Management <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
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