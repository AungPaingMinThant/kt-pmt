@extends('layouts.frontend-app')

@section('title', 'Digital Secure – Myanmar Version – AYA Bank')
<style type="text/css">
	.outer_benefit_box {
		margin-bottom: 20px;*/
		padding: 20px !important;
		border: 1px solid #dedede;
		border-radius: 10px;
		margin-bottom: 20px;
		margin-top: 40px;
	}
	.why_use_AYA_outer > .col-md-6 {
		width: 48%;
	}
	.apply_now_btn {
		background-color: #ae071d !important;
		color: #fff !important;
		padding: 15px 25px !important;
		border-color: #ae071d !important;
		margin-bottom: 2rem !important;
	}
	.apply_now_btn:hover{
		background-color: #fff !important;
		border-color: #ae071d !important;
		color: #ae071d !important;
	}
	.safety_tip_1 > li {
		margin-bottom: 5px;
	}
	@media only screen and (max-width: 576px){
		.why_use_AYA_outer > .col-md-6 {
			width: 100%;
		}
	}
</style>
@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'digital_services'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'digital_secure_mm'])

			<div class="container section_1" >
				@include('layouts.tagline', ['page'=>'digital_secure_mm'])

				<div class="row">
					<div class="col-md-12">
						<h4 style="color: #1d1d1f;margin-bottom: 20px;">
							၁) အွန်လိုင်းဘဏ်လုပ်ငန်းအတွက်လိုက်နာရန် လိုအပ်သော လုံခြုံရေး အကြံပြုချက်များ
						</h4>
					</div>
					<div class="col-md-4 col-sm-12">
						<img src="{{ url('/images/digital_secure/safety_tip_1.png') }}" class="img-fluid" style="margin-bottom: 20px;">
					</div>
					<div class="col-md-8 col-sm-12">
						<ul class="safety_tip_1" style="list-style: disc;">
							<li>သင်၏ OTP ကုဒ် (One-time Password) သို့မဟုတ် တစ်ခါသုံးလျှို့ဝှက်နံပါတ် ကို မည်သူနှင့်မျှ မမျှဝေပါနှင့်။</li>
							<li>သင်၏ ကိုယ်ပိုင်စက်ပစ္စည်းဖြင့်သာ အွန်လိုင်းဘဏ်လုပ်ငန်းကို မှတ်ပုံတင်ပြီး သင်အဝေးရောက်နေချိန်တွင် သင့်ကွန်ပျူတာနှင့် မိုဘိုင်းဖုန်းကို အမြဲလော့ခ်ချထားပါ။</li>
							<li>အကောင့်ဝင်ရန် အများသူငှာ ကွန်ပျူတာများကို မသုံးပါနှင့်။</li>
							<li>အကောင့်ဝင်ရန်အချက်အလက် သို့မဟုတ် စကားဝှက်ကို မသိမ်းဆည်းပါနှင့်။</li>
							<li>အွန်လိုင်းဘဏ်လုပ်ငန်းပြီးသည်နှင့် စနစ်မှထွက်ရန်သတိရပါ ၊ browser ကို ပိတ်ရန် မမေ့ပါနှင့်။</li>
							<li>စာလုံးအကြီးနှင့် အသေး၊ နံပါတ်များနှင့် အထူးအက္ခရာများပါရှိသော ခိုင်မာသော စကားဝှက်ကို အသုံးပြုသည့် အလေ့အကျင့်ကို လိုက်နာပါ။</li>
							<li>သင့်စကားဝှက်ကို တစ်စုံတစ်ဦးက ထုတ်ဖော်ရန် ကြိုးပမ်းထားကြောင်း သံသယရှိပါက ချက်ချင်းပြောင်းပါ။</li>
							<li>သင်၏အွန်လိုင်းဘဏ်စာရင်းသို့ မကြာခဏဝင်ရောက်ကာ ငွေလွှဲ၊ ငွေပေးချေမှု၊ ငွေထုတ်ယူမှုများကို ပြန်လည်စစ်ဆေးခြင်းဖြင့် သင်၏ဘဏ်စာရင်းကို စောင့်ကြည့်ပါ။</li>
							<li>သင်၏ဘဏ်စာရင်းကို မကြာခဏစစ်ဆေးပါ။ သင့်အကောင့်တွင်ဖြစ်ပျက်နေသည်များကိုခြေရာခံရန် <a href="{{ url('/digital-services/guideline/digital-secure/sms-alert') }}" style="color: #A5000B;text-decoration: underline;">စာတိုဝန်ဆောင်မှု(SMS Alert Service)</a>  သတိပေးချက်ကိုသုံးပါ။</li>
							<li>အကယ်၍ သင်သည် သံသယဖြစ်ဖွယ် ဆက်သွယ်ရေးကို လက်ခံရရှိပါက သို့မဟုတ် သံသယဖြစ်ဖွယ် ငွေသွင်းငွေထုတ်ယူမှုများကို တွေ့ရှိပါက ဧရာဝတီဘဏ်၏ Call Center <a href="tel:012317777" style="color: #A5000B;">01-2317777</a> (သို့မဟုတ်) အနီးဆုံးဘဏ်ခွဲတွင် တာဝန်ခံနှင့် တိုင်ပင်ဆွေးနွေးပါ။</li>
						</ul>
					</div>
					<div class="space-60"></div>
					<div class="col-md-12">
						<h4 style="color: #1d1d1f;margin-bottom: 20px;">
							၂) ဒစ်ဂျစ်တယ်ငွေပေးချေမှုများ (သို့မဟုတ်) ငွေသွင်းငွေထုတ်ယူမှုများအတွက် လိုက်နာရန် လိုအပ်သော အကြံပြုချက်များ
						</h4>
					</div>
					<div class="col-md-4 col-sm-12 d-block d-sm-none">
						<img src="{{ url('/images/digital_secure/safety_tip_2.png') }}" class="img-fluid" style="margin-bottom: 20px;">
					</div>
					<div class="col-md-8 col-sm-12">
						<ul class="safety_tip_1" style="list-style: disc;padding-left: 17px;">
							<li>သင်၏ PIN (Personal Identification Number) သို့မဟုတ် ကိုယ်ပိုင်လျှို့ဝှက်နံပါတ် ကို မည်သူနှင့်မျှ မမျှဝေပါနှင့်။</li>
							<li>သင်၏ ဂဏန်း (၁၆) လုံးပါ ကတ်နံပါတ် သို့မဟုတ် သင့်ကတ်၏ ဓာတ်ပုံကို မည်သူနှင့်မျှ မမျှဝေပါနှင့်။</li>
							<li>သင့်ကတ်များကို ငွေသားကဲ့သို့ ကာကွယ်ပါ။</li>
							<li>ခရက်ဒစ်ကတ် / ဒက်ဘစ်ကတ် / ကြိုတင်ငွေပေးကတ်ကို သုံးရန် သင်၏ PIN ကို အလွတ်ကျက်ပါ။ အထူးသဖြင့် ကတ်ပြားပေါ်တွင် မည်သည့်နေရာတွင်မျှ မရေးပါနှင့်။</li>
							<li>သင်၏ ခွင့်ပြုချက်မရှိသည့် ငွေပေးချေမှုများကို တတ်နိုင်သမျှ အမြန်ဆုံးအတည်ပြုရန် ငွေပေးငွေယူသတိပေးချက်များကို အနီးကပ်စောင့်ကြည့်ပါ။</li>
							<li>
								ကတ်များကိုအသုံးပြု၍ ဒစ်ဂျစ်တယ်ငွေပေးချေမှုများ/ ငွေပေးငွေယူများ သတိထားသင့်သော နေရာသုံးမျိုး -
								<ul style="list-style: myanmar;">
									<li>ATM (Automatic Teller Machine) - သင့်ကတ်နှင့် အချက်အလက်များကို လုံခြုံသော ပတ်ဝန်းကျင်တွင်သာ ထည့်သွင်းပါ။ ငွေလက်ခံဖြတ်ပိုင်းများ သို့မဟုတ် ငွေပေးငွေယူမှတ်တမ်းများကို မထားခဲ့ပါနှင့်။</li>
									<li>အွန်လိုင်းမှဝယ်ယူခြင်း - ယုံကြည်ရသော ဝဘ်ဆိုဒ်ကို အသုံးပြုပါ။ ငွေပေးငွေယူများအတွက် သီးသန့် window ကို အသုံးပြုပါ။ အွန်လိုင်းတွင် ဝယ်ယူမှုများပြုလုပ်သောအခါတွင် သင်၏ဒက်ဘစ်/ခရက်ဒစ်ကတ် အသေးစိတ်အချက်အလက်များကို မသိမ်းဆည်းထားကြောင်း သေချာအောင်စစ်ဆေးပါ။</li>
									<li>ဆိုင် သို့မဟုတ် စားသောက်ဆိုင် သို့မဟုတ် ဓာတ်ဆီဆိုင် - ငွေပေးချေမှုပြုလုပ်သည့်အခါ သင့်ကတ်ကို စောင့်ကြည့်ပါ။ သင့်လက်မှတ်မထိုးမီ အရောင်းဘောက်ချာများကို မှန်ကန်သော ဝယ်ယူမှုပမာဏသေချာအောင် အမြဲစစ်ဆေးပါ။</li>
								</ul>
							</li>
							
							<li>သင်၏ ကတ်ပျောက်ဆုံးခြင်း (သို့မဟုတ်) ခိုးယူခံရပါက ဧရာဝတီဘဏ်၏ Call Center  (သို့မဟုတ်) နီးစပ်ရာဘဏ်ခွဲသို့ ချက်ချင်း တိုင်ကြားပါ။</li>
						</ul>
					</div>
					<div class="col-md-4 col-sm-12 d-none d-sm-block">
						<img src="{{ url('/images/digital_secure/safety_tip_2.png') }}" class="img-fluid" style="margin-bottom: 20px;">
					</div>
					<div class="space-60"></div>
					<div class="col-md-12">
						<h4 style="color: #1d1d1f;margin-bottom: 20px;">
							၃) လိမ်လည်သော အီးမေးလ်များ (သို့မဟုတ်) မက်ဆေ့ချ်အတုများ၊ Application အတု များ
						</h4>
					</div>
					<div class="col-md-4 col-sm-12">
						<img src="{{ url('/images/digital_secure/safety_tip_3.png') }}" class="img-fluid" style="margin-bottom: 20px;">
					</div>
					<div class="col-md-8 col-sm-12">
						<!-- <p style="font-weight: 600;color: #A5000B;">Beware of phishing scams.</p> -->
						<p>လိမ်လည်မှုများကို သတိထားပါ။ အီးမေးလ်များ (သို့မဟုတ်) မက်ဆေ့ချ်အတုများ ပေးပို့ခြင်း၏ အဓိကရည်ရွယ်ချက်မှာ သင့်ဘဏ်စာရင်း၏ အသေးစိတ်အချက်အလက်များကို ခိုးယူရန်ဖြစ်သည်။ လိမ်လည်သူများသည် ဧရာဝတီဘဏ်၏ ဝန်ဆောင်မှုများ/ဝန်ထမ်းများအဖြစ် အယောင်ဆောင်ကာ သင့်ဘဏ်အကောင့်နှင့် သက်ဆိုင်သည့် သင်၏ တစ်ခါသုံးလျှို့ဝှက်နံပါတ် (သို့မဟုတ်) စကားဝှက် (သို့မဟုတ်) အခြား ကိုယ်ရေးကိုယ်တာ အချက်အလက်များကို မေးမြန်းသော မက်ဆေ့ချ်များ ပေးပို့မည်ဖြစ်ပါသည်။</p>
						<p>တနည်းအားဖြင့် ၎င်းတို့သည် သင့်အား ဝဘ်ဆိုဒ်အတုတစ်ခုသို့ ခေါ်ဆောင်သွားမည့် လင့်ခ်တစ်ခုကို အီးမေးလ်ဖြင့် ပေးပို့မည်ဖြစ်ပြီး ကတ်အသေးစိတ် သို့မဟုတ် ဘဏ်စာရင်းအသေးစိတ်ကဲ့သို့ သင်၏ အရေးကြီးအချက်အလက်များကို ပေးခိုင်းမည်ဖြစ်သည်။ အကယ်၍ သင်သည် ဤအထောက်အထားများကို အခြားတစ်ဦးတစ်ယောက်အား ပေးလိုက်ပါက သင့်အကောင့်မှ ငွေများကို ထုတ်ယူသွားမည်ဖြစ်ပါသည်။</p>
						<p class="fw-semibold">Application အတု များ သည် သင့်၏ ငွေကြေးဆိုင်ရာသတင်းအချက်အလက်များ များခိုးယူနိုင်သောကြောင့် သတိထားရန် လိုအပ်ပါသည်။ Play Store နှင့် App Store များမှ တရားဝင် Application များရယူခြင်းဖြင့် ကာကွယ်နိုင် ပါသည်။</p>
						<p>ဧရာဝတီဘဏ်သည် OTP ၊ PIN ၊ CVV နံပါတ် ကဲ့သို့သော အထောက်အထားများ သို့မဟုတ် အခြားကိုယ်ရေးကိုယ်တာ အထောက်အထားများကို ဘယ်သောအခါမှ <span class="fw-semibold">အီးမေးလ် (သို့မဟုတ်) မက်ဆေ့ချ် (သို့မဟုတ်) ဖုန်း</span> မှတဆင့် တောင်းမည်မဟုတ်ကြောင်း သတိရပါ။</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="space-60"></div>
@include('layouts.footer', ['page'=>'digital-secure'])


@endsection('content')