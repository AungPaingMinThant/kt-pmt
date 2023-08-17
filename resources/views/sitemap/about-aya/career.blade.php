@extends('layouts.frontend-app')

@section('title', 'Career – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/site-map.css') }}" />

@section('content')
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <div class="layout-page">
            @include('layouts.header', ['page'=>'about_aya'])
            <div class="menu-overlay"></div>
            <div>
                @include('sitemap.sitemap-header', ['header_title'=>'Career', 'page'=>'career'])

                <div class="container y-4">
                    <div class="row">
                        <div class="col-md-3 px-3">
                            <p>
                                <a class="f-body-color" href="{{ url('/about-aya/career/career-opportunities') }}">Career Opportunities <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
                            </p>
                        </div>
                        <div class="col-md-3 px-3">
                            <p>
                                <a class="f-body-color" href="{{ url('/about-aya/career/aya-culture') }}">AYA Culture <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
                            </p>
                        </div>
                        <div class="col-md-4 px-3">
                            <p>
                                <a class="f-body-color" href="{{ url('/about-aya/career/life-at-aya') }}">Life At AYA <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
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