<style type="text/css">
	.mbanking_banner {
		background-image:url('http://localhost/ayab/public/images/MobileBanking_KV.jpg');
		background-size: cover;
		height: 400px;
		background-position: center right;
	}
	.ibanking_banner{
		background-image:url('./images/IB_KV.jpg');
		background-size: cover;
		height: 400px;
		background-position: center right;
	}
	.debitcard_banner {
		background-image:url('./images/debit_KV.jpg');
		background-size: cover;
		height: 400px;
		background-position: center right;
	}
	.creditcard_banner{
		background-image:url('./images/KV_credit.jpg');
		background-size: cover;
		height: 400px;
		background-position: center right;
	}
	.bread_crumb_text {
		font-size: 11px;
	}
	@media  only screen and (max-width: 576px) {
		.mbanking_banner {
			background-image:url('./images/MobileBanking_KV_mobile.jpg');
		}
		.ibanking_banner{
			background-image:url('./images/IB_KV_mobile.jpg');
			background-position: 70% center;
		}
		.debitcard_banner{
			background-image:url('./images/debit_KV_mobile.jpg');
			background-position: 96% center;
		}
		.creditcard_banner{
			background-image:url('./images/KV_credit_mobile.jpg');
			background-position: 90% center;
		}
		.bread_crumb_text {
			font-size: 10px;
		}
	}
</style>
@if($page == 'mobilebanking')
<div class="mbanking_banner">
	<div class="container">
		<div class="row d-none d-sm-block">
			<div class="col-md-6 text-right" style="text-align: right;position: relative;">
				<p style="font-size: 30px;font-weight: 400;margin-bottom: 0;line-height: 34px;position: absolute;top: 156px;right: 0;">Designed to make banking</p>
				<p style="font-size: 30px;font-weight: 400;margin-bottom: 0;line-height: 34px;color: #a02226;position: absolute;top: 193px;right: 0;">simple, faster and</p>
				<p style="font-size: 30px;font-weight: 400;margin-bottom: 0;line-height: 34px;color: #a02226;position: absolute;top: 230px;right: 0;">more secure</p>
			</div>
			<div class="col-md-6" style="text-align: right;">
				<p></p>
			</div>
		</div>
		<div class="row d-block d-sm-none">
			<div class="col-md-12 text-left" style="text-align: left;position: relative;">
				<div style="position: absolute;top: 45px;left: 25px;">
					<p style="font-size: 20px;font-weight: 400;margin-bottom: 0;line-height: 22px;">Designed to make banking</p>
					<p style="font-size: 20px;font-weight: 400;margin-bottom: 0;line-height: 22px;color: #a02226;">simple, faster and</p>
					<p style="font-size: 20px;font-weight: 400;margin-bottom: 0;line-height: 22px;color: #a02226;">more secure</p>
				</div>
				
			</div>
		</div>
	</div>
</div>

<div style="background-color: #f5f5f7;">
	<div class="container">
		<p class="bread_crumb_text" style="margin: 1.5rem 0;">HOME&nbsp;
			<i class='bx bxs-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;DIGITAL SERVICES&nbsp;
			<i class='bx bxs-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;ONLINE PAYMENT SERVICES&nbsp;
			<i class='bx bxs-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
			<span style="color: #a02226;">MOBILE BANKING</span>
		</p>
	</div>
</div>
@endif

@if($page == 'internetbanking')
<div class="ibanking_banner" style="">
	<div class="container">
		<div class="row d-none d-sm-block">
			<div class="col-md-6 text-right" style="text-align: right;position: relative;">
				<p style="font-size: 30px;font-weight: 400;margin-bottom: 0;line-height: 34px;position: absolute;top: 156px;right: 0;color: #a02226;">Stay safe and bank</p>
				<p style="font-size: 30px;font-weight: 400;margin-bottom: 0;line-height: 34px;position: absolute;top: 193px;right: 0;">from the comfort of your home</p>
				<p style="font-size: 30px;font-weight: 400;margin-bottom: 0;line-height: 34px;position: absolute;top: 230px;right: 0;"></p>
			</div>
			<div class="col-md-6" style="text-align: right;">
				<p></p>
			</div>
		</div>
		<div class="row d-block d-sm-none">
			<div class="col-md-12 text-left" style="text-align: left;position: relative;">
				<div style="position: absolute;top: 45px;left: 25px;">
					<p style="font-size: 20px;font-weight: 400;margin-bottom: 0;line-height: 22px;color: #a02226;">Stay safe and bank</p>
					<p style="font-size: 20px;font-weight: 400;margin-bottom: 0;line-height: 22px;">from the comfort</p>
					<p style="font-size: 20px;font-weight: 400;margin-bottom: 0;line-height: 22px;">of your home</p>
				</div>
			</div>
		</div>
	</div>
</div>

<div style="background-color: #f5f5f7;">
	<div class="container">
		<p class="bread_crumb_text" style="margin: 1.5rem 0;">HOME&nbsp;
			<i class='bx bxs-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;DIGITAL SERVICES&nbsp;
			<i class='bx bxs-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;ONLINE PAYMENT SERVICES&nbsp;
			<i class='bx bxs-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
			<span style="color: #a02226;">INTERNET BANKING</span>
		</p>
	</div>
</div>
@endif


@if($page == 'debitcard')
<div class="debitcard_banner" style="">
	<div class="container">
		<div class="row d-none d-sm-block">
			<div class="col-md-6 text-right" style="text-align: right;position: relative;">
				<p style="font-size: 26px;font-weight: 400;margin-bottom: 0;line-height: 28px;position: absolute;top: 156px;right: 0;color: #a02226;">The journey starts from here.</p>
				<p style="font-size: 26px;font-weight: 400;margin-bottom: 0;line-height: 28px;position: absolute;top: 193px;right: 0;">
					Make every transaction meaningful with
				</p>
				<p style="font-size: 26px;font-weight: 400;margin-bottom: 0;line-height: 28px;position: absolute;top: 230px;right: 0;">
					AYA Debit Cards that brings <span style="color: #a02226;">Power</span>
				</p>
			</div>
			<div class="col-md-6" style="text-align: right;">
				<p></p>
			</div>
		</div>
		<div class="row d-block d-sm-none">
			<div class="col-md-12 text-left" style="text-align: left;position: relative;">
				<div style="position: absolute;top: 45px;left: 25px;">
					<p style="font-size: 18px;font-weight: 400;margin-bottom: 0;line-height: 20px;color: #a02226;">The journey starts from here.</p>
					<p style="font-size: 18px;font-weight: 400;margin-bottom: 0;line-height: 20px;">Make every transaction meaningful with</p>
					<p style="font-size: 18px;font-weight: 400;margin-bottom: 0;line-height: 20px;">AYA Debit Cards that brings <span style="color: #a02226;">Power</span></p>
				</div>
			</div>
		</div>
	</div>
</div>

<div style="background-color: #f5f5f7;">
	<div class="container">
		<p class="bread_crumb_text" style="margin: 1.5rem 0;">HOME&nbsp;
			<i class='bx bxs-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;DIGITAL SERVICES&nbsp;
			<i class='bx bxs-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;CARD SERVICES&nbsp;
			<i class='bx bxs-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
			<span style="color: #a02226;">DEBIT CARD</span>
		</p>
	</div>
</div>
@endif

@if($page == 'creditcard')
<div class="creditcard_banner" style="">
	<div class="container">
		<div class="row d-none d-sm-block">
			<div class="col-md-6 text-right" style="text-align: right;position: relative;">
				<p style="font-size: 26px;font-weight: 400;margin-bottom: 0;line-height: 28px;position: absolute;top: 156px;right: 0;"><span style="color: #a02226;">Make your priorities</span> with AYA Credit Cards.</p>
				<p style="font-size: 26px;font-weight: 400;margin-bottom: 0;line-height: 28px;position: absolute;top: 193px;right: 0;">
					A Step that changes your <span style="color: #a02226;">lifestyle.</span>
				</p>
				<p style="font-size: 26px;font-weight: 400;margin-bottom: 0;line-height: 28px;position: absolute;top: 230px;right: 0;">
					
				</p>
			</div>
			<div class="col-md-6" style="text-align: right;">
				<p></p>
			</div>
		</div>
		<div class="row d-block d-sm-none">
			<div class="col-md-12 text-left" style="text-align: left;position: relative;">
				<div style="position: absolute;top: 45px;left: 25px;">
					<p style="font-size: 18px;font-weight: 400;margin-bottom: 0;line-height: 20px;"><span style="color: #a02226;">Make your priorities</span> with AYA Credit Cards.</p>
					<p style="font-size: 18px;font-weight: 400;margin-bottom: 0;line-height: 20px;">A Step that changes your <span style="color: #a02226;">lifestyle.</span></p>
					<p style="font-size: 18px;font-weight: 400;margin-bottom: 0;line-height: 20px;"></p>
				</div>
			</div>
		</div>
	</div>
</div>

<div style="background-color: #f5f5f7;">
	<div class="container">
		<p class="bread_crumb_text" style="margin: 1.5rem 0;">HOME&nbsp;
			<i class='bx bxs-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;DIGITAL SERVICES&nbsp;
			<i class='bx bxs-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;CARD SERVICES&nbsp;
			<i class='bx bxs-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
			<span style="color: #a02226;">CREDIT CARD</span>
		</p>
	</div>
</div>
@endif