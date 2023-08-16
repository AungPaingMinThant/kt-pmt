<div class="container-fluid sitemap-banner py-4">
     <div class="row">
        <div class="text-center">
            <h1 class="text-uppercase" style="font-weight: 400;margin-bottom: 0;font-size: 26px;line-height: 60px;">{{$header_title}}</h1>
            @if($page == 'digital_services' || $page == 'personal_banking' || $page == 'business_banking' || $page == 'about_aya')
                <p>
                    <a class="f-body-color" href="{{ url('/') }}">Home</a> &nbsp;<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
                    <span class="text-capitalize">{{$header_title}}</span>
                </p>
            @endif
            @if($page == 'digital_online_payment' || $page == 'digital_card_services' || $page == 'digital_wallet' || $page == 'digital_guide')
                <p>
                    <a class="f-body-color" href="{{ url('/digital-services') }}">Digital Services</a> &nbsp;<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
                    <span class="text-capitalize">{{$header_title}}</span>
                </p>
            @endif
            @if($page == 'digital_merchant_services')
                <p>
                    <a class="f-body-color" href="{{ url('/digital-services') }}">Digital Services</a> &nbsp;<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
                    <a class="f-body-color" href="{{ url('/digital-services/card-services') }}">Card Services</a> &nbsp;<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
                    <span class="text-capitalize">{{$header_title}}</span>
                </p>
            @endif
            @if($page == 'personal_banking_ac' || $page == 'personal_banking_borrowing' || $page == 'personal_banking_remit' || $page == 'personal_banking_ins' || $page == 'personal_banking_other_services')
                <p>
                    <a class="f-body-color" href="{{ url('/personal-banking') }}">Personal Banking</a> &nbsp;<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
                    <span class="text-capitalize">{{$header_title}}</span>
                </p>
            @endif
            @if($page == 'personal_banking_hirepurchase')
                <p>
                    <a class="f-body-color" href="{{ url('/personal-banking') }}">Personal Banking</a> &nbsp;<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
                    <a class="f-body-color" href="{{ url('/personal-banking/borrowing') }}">Borrowing</a> &nbsp;<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
                    <span class="text-capitalize">{{$header_title}}</span>
                </p>
            @endif
            @if($page == 'personal_banking_life_ins' || $page == 'personal_banking_travel_ins')
                <p>
                    <a class="f-body-color" href="{{ url('/personal-banking') }}">Personal Banking</a> &nbsp;<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
                    <a class="f-body-color" href="{{ url('/personal-banking/insurance') }}">Insurance</a> &nbsp;<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
                    <span class="text-capitalize">{{$header_title}}</span>
                </p>
            @endif
            @if($page == 'business_banking_ac' || $page == 'business_banking_remit' || $page == 'business_banking_borrowing' || $page == 'business_banking_trade' || $page == 'business_banking_trade' || $page == 'business_banking_cash' || $page == 'business_banking_ins')
                <p>
                    <a class="f-body-color" href="{{ url('/business-banking') }}">Business Banking</a> &nbsp;<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
                    <span class="text-capitalize">{{$header_title}}</span>
                </p>
            @endif
            @if($page == 'who_we_are' || $page == 'news_room'  || $page == 'career')
                <p>
                    <a class="f-body-color" href="{{ url('/about-aya') }}">About AYA</a> &nbsp;<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
                    <span class="text-capitalize">{{$header_title}}</span>
                </p>
            @endif
            @if($page == 'corporate_profile' || $page == 'leadership' || $page == 'our_strategies' || $page == 'governance')
                <p>
                    <a class="f-body-color" href="{{ url('/about-aya') }}">About AYA</a> &nbsp;<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
                    <a class="f-body-color" href="{{ url('/about-aya/who-we-are') }}">Who We Are</a> &nbsp;<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
                    <span class="text-capitalize">{{$header_title}}</span>
                </p>
            @endif
            @if($page == 'sustainability')
                <p>
                    <a class="f-body-color" href="{{ url('/about-aya') }}">About AYA</a> &nbsp;<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
                    <span class="text-capitalize">{{$header_title}}</span>
                </p>
            @endif
            @if($page == 'our_approach')
                <p>
                    <a class="f-body-color" href="{{ url('/about-aya') }}">About AYA</a> &nbsp;<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
                    <a class="f-body-color" href="{{ url('/about-aya/sustainability') }}">Sustainability</a> &nbsp;<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
                    <span class="text-capitalize">{{$header_title}}</span>
                </p>
            @endif
        </div>
     </div>
 </div>

 <div class="space-40"></div>