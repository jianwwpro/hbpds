@extends('portal.app')

@section('content')
	<div id="newIndex">
		<div class="sub-nav">
			<div class="container">
				<ol class="breadcrumb">
				  <li><a href="#">{{ trans('portal.header.home') }}</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i></li>
				  <li><a href="#">{{ trans('portal.header.auction-notice') }}</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i></li>
				  <li class="active">{{ trans('portal.header.auction-book') }}</li>
				</ol>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-xs-2">
					<ul class="left-menu">
						<li><a href="/auction-guide">{{ trans('portal.header.auction-guide') }}</a></li>
						<li><a href="/transaction-read">{{ trans('portal.header.transaction-read') }}</a></li>
						<li><a href="/auction-reference">{{ trans('portal.header.auction-reference') }}</a></li>
						<li class="active"><a href="/auction-book">{{ trans('portal.header.auction-book') }}</a></li>
					</ul>
				</div>
				<div class="col-xs-10 content">
					<h1>拍卖委托书</h1>
					<p style="text-align: right;"><a href="/download-book">下載委託書</a></p>
					
					@if(\App::getLocale() === 'zh-TW')
						<img src="/imgs/book.jpg" alt="" style="width:100%;">
					@else
						<img src="/imgs/book-en.jpg" alt="" style="width:100%;">
					@endif
				</div>
			</div>
		</div>
	</div>

	<style type="text/css">
		.left-menu{
	  		width: 165px!important;
	  	}
	  	.content{
	  		width: 975px!important;
	  	}
	</style>
@endsection