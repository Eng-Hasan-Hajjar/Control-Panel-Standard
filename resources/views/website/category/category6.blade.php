@extends('layouts.app')

@section('content')


	<div class="catgorycercelcontainer">
		<ul class='circle-container'>
			<li><img src="{{Request::root()}}/website/images/cln.png" alt=""></li>
			<li><img src="{{Request::root()}}/website/images/Crpt.png" alt=""></li>
			<li><img src="{{Request::root()}}/website/images/dct.png" alt=""></li>
			<li><img src="{{Request::root()}}/website/images/tool.png" alt=""></li>
			<li><img src="{{Request::root()}}/website/images/wlpnt.png" alt=""></li>
			<li><img src="{{Request::root()}}/website/images/Plmb.png" alt=""></li>
			<li><img src="{{Request::root()}}/website/images/Elct.png" alt=""></li>
			<li><img src="{{Request::root()}}/website/images/weld.png" alt=""></li>
			<li><img class="home" src="{{Request::root()}}/website/images/Plmb.png" alt=""></li>
		</ul>
		<ul class="circle-container-mobile">
			<div class="row-in-line">
				<li><img src="{{Request::root()}}/website/images/cln.png" alt=""></li>
				<li><img src="{{Request::root()}}/website/images/Crpt.png" alt=""></li>
			</div>
			<div class="row-in-line">
				<li><img src="{{Request::root()}}/website/images/dct.png" alt=""></li>
				<li><img src="{{Request::root()}}/website/images/tool.png" alt=""></li>
			</div>
			<div class="row-in-line">
				<li><img src="{{Request::root()}}/website/images/wlpnt.png" alt=""></li>
				<li><img src="{{Request::root()}}/website/images/Plmb.png" alt=""></li>
			</div>
			<div class="row-in-line">
				<li><img src="{{Request::root()}}/website/images/Elct.png" alt=""></li>
				<li><img src="{{Request::root()}}/website/images/weld.png" alt=""></li>
			</div>
		</ul>
	</div>


@endsection