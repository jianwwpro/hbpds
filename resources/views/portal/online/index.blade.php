@extends('portal.app')

@section('content')
	<div id="onlineIndex">
		<div class="sub-nav">
			<div class="container">
				<ol class="breadcrumb">
				  <li><a href="/">{{ trans('portal.header.home') }}</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i></li>
				  <li class="active">{{ trans('portal.header.auction-online') }}</li>
				</ol>
			</div>
		</div>
		<div class="container content">
			<p>下列拍賣會均可以參與網上拍賣，點擊下面 <a href="" class="hb-btn">參加網上拍賣</a> 即可參與競投</p>

			<ul class="prodcut-list">
				@foreach($asas as $asa)
					<li class="clearfix">
						<div class="col-xs-2 date">
							<h2>{{ date('Y', strtotime($asa['begin_time'])) }}</h2>
							<p>{{ date('m月d日', strtotime($asa['begin_time'])) }} 開始</p>
						</div>
						<div class="col-xs-4 img">
							<img src="{{ $asa['asa_image'] }}" alt="" style="height:208px;">
						</div>
						<div class="col-xs-6 info">
							<h2>{{ $asa['asa_name'] }}</h2>
							<br>
							<p>
								<span>拍賣時間: </span>
								{{ date('m月d日', strtotime($asa['begin_time'])) }}-{{ date('m月d日', strtotime($asa['end_time'])) }}
							</p>
							<br>
							<a href="{{ $asa['asa_online_url'] }}" class="hb-btn" target="_blank">參加網上拍賣</a>
							@if($asa['asa_online_logo'])
								<a href="{{ $asa['asa_online_url'] }}" class="yp-logo" target="_blank">
									<img src="{{$asa['asa_online_logo']}}" alt="" style="width:100px;height:35px;">	
								</a>
							@endif
						</div>
					</li>
				@endforeach
			</ul>

			{!! $asas->render() !!}
		</div>
	</div>
@endsection