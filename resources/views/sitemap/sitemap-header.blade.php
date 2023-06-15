<div class="container-fluid sitemap-banner py-4">
     <div class="row">
        <div class="text-center">
            <h1 class="text-uppercase" style="font-weight: 400;margin-bottom: 0;font-size: 26px;line-height: 60px;">{{$header_title}}</h1>
            @if($header_title != 'Digital Services' && $header_title != 'Merchant Services')
                <p>
                    <a class="f-body-color" href="{{ url('/digital-services') }}">Digital Services</a> &nbsp;<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
                    <span class="text-capitalize">{{$header_title}}</span>
                </p>
            @endif
            @if($header_title == 'Merchant Services')
                <p>
                    <a class="f-body-color" href="{{ url('/digital-services') }}">Digital Services</a> &nbsp;<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
                    <a class="f-body-color" href="{{ url('/digital-services/card-services') }}">Card Services</a> &nbsp;<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
                    <span class="text-capitalize">{{$header_title}}</span>
                </p>
            @endif
            @if($header_title == 'Digital Services')
                <p>
                    <a class="f-body-color" href="{{ url('/') }}">Home</a> &nbsp;<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
                    <span class="text-capitalize">{{$header_title}}</span>
                </p>
            @endif
        </div>
     </div>
 </div>

 <div class="space-40"></div>