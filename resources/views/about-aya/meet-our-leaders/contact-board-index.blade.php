@extends('layouts.frontend-app')

@section('title', 'Contact to the Board – Meet Our Leaders – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/about-aya/news.css') }}">

@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'about_aya'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'contact_board'])

			<div class="container">
				<div class="space-40"></div>
				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-8 text-center">
						<p class="mb-30">Persons reaching out to communicate with the Board, or any members of the Board, or any Committees of the Board should send a letter addressed to </p>
						<p class="mb-30"><b>“The Board Secretary, AYA Bank Public Company Limited, 416, Corner of Maharbandoola Road and Maharbandoola Garden Street, Kyauktada Township, Yangon, Myanmar.”</b></p>
						<p class="mb-30">The Letter should mention to whom the communication is intended in the Subject Line.</p>
						<p class="mb-30">The Board Secretary or the Secretary of the designated Committee may scrutinize the contents of the letter/ matters being addressed and shall reply as deemed fit to the discretion of the receiver.</p>
						<p>Communications which are of commercial nature, complaints or matters not related to investors relations or Committee matters will not be entertained but will be diverted to the General Contact Center for further consideration.</p>
						<!-- <p>The letter should indicate to whom the communication is intended.</p>
						<p>The Board Secretary or the Secretary of the designated committee may sort or summarize the communications as appropriate.</p>
						<p>Communications that are commercial solicitations, customer complaints, incoherent or obscene will not be communicated to the Board or any director or committee of the Board.</p> -->
					</div>
					<div class="col-md-2"></div>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="space-60"></div>
@include('layouts.footer', ['page'=>''])


@endsection('content')