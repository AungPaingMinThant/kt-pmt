@extends('layouts.frontend-app')

@section('title', 'Account & Saving – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/site-map.css') }}" />

@section('content')
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <div class="layout-page">
            @include('layouts.header', ['page'=>'personal_banking'])
            <div class="menu-overlay"></div>
            <div>
                @include('sitemap.sitemap-header', ['header_title'=>'Accounts & Savings', 'page'=>'personal_banking_ac'])

                <div class="container y-4">
                    <div class="row">
                        <div class="col-md-4 px-3 mb-40">
                            <div class="card h-100 sitemap_card">
                                <img class="card-img-top" src="{{ url('/images/acc_saving/saving-deposit/mobile_KV.jpg') }}" alt="Card image cap" />
                                <div class="card-body">
                                    <h5 class="card-title">Saving Deposit</h5>
                                    <p class="card-text">
                                        <a class="theme_text_color" href="{{ url('/personal-banking/account-saving/saving-deposit') }}">Explore more <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 px-3 mb-40">
                            <div class="card h-100 sitemap_card">
                                <img class="card-img-top" src="{{ url('/images/acc_saving/call_deposit/mobile_KV.jpg') }}" alt="Card image cap" />
                                <div class="card-body">
                                    <h5 class="card-title">Call Deposit</h5>
                                    <p class="card-text">
                                        <a class="theme_text_color" href="{{ url('/personal-banking/account-saving/call-deposit') }}">Explore more <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 px-3 mb-40">
                            <div class="card h-100 sitemap_card">
                                <img class="card-img-top" src="{{ url('/images/acc_saving/current_deposit/mobile_KV_2.jpg') }}" alt="Card image cap" />
                                <div class="card-body">
                                    <h5 class="card-title">Current Deposit</h5>
                                    <p class="card-text">
                                        <a class="theme_text_color" href="{{ url('/personal-banking/account-saving/current-deposit') }}">Explore more <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 px-3 mb-40">
                            <div class="card h-100 sitemap_card">
                                <img class="card-img-top" src="{{ url('/images/acc_saving/fixed-deposit/mobile_KV.jpg') }}" alt="Card image cap" />
                                <div class="card-body">
                                    <h5 class="card-title">Fixed Deposit</h5>
                                    <p class="card-text">
                                        <a class="theme_text_color" href="{{ url('/personal-banking/account-saving/fixed-deposit') }}">Explore more <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
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