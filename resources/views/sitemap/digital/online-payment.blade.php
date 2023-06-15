@extends('layouts.frontend-app')

@section('title', 'Online Payment Services – AYA Bank')

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
            
            <div class="">
                <div class="container-fluid sitemap-banner py-4">
                    <div class="row">
                       <div class="text-center">
                           <h1 style="font-weight: 400;margin-bottom: 0;font-size: 26px;line-height: 60px;"> ONLINE PAYMENT SERVICES</h1>
                       </div>
                    </div>
                </div>

                <div class="space-40"></div>

                <div class="container-fluid y-4">
                    <div class="row">
                        <div class="col-md-4 px-3">
                            <p>
                                <a class="f-body-color" href="http://103.94.54.111/internet-banking"> Internet Banking<i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
                            </p>
                            <p>
                                <a class="f-body-color" href="http://103.94.54.111/mobile-banking"> Mobile Banking<i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
                            </p>
                            <p>
                                <a class="f-body-color" href="http://103.94.54.111/corporate-internet-banking">Corporate Internet Banking <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
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