@extends('portal.app')

@section('content')
	<div id="auctionPreview">
		<div class="sub-nav">
			<div class="container">
				<ol class="breadcrumb">
				  <li><a href="/">{{ trans('portal.header.home') }}</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i></li>
				  <li><a href="/auction/preview">{{ trans('portal.header.auction-calendar') }}</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i></li>
				  <li class="active">{{ trans('portal.header.auction-preview') }}</li>
				</ol>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-xs-4 left-menu">
					@if($auctions)
						<h1>2015 年</h1>
						<ul>
							@foreach( $auctions as $auction)
								<li>
									<h4>{{ $auction['auction_name'] }}</h4>
									<h6 style="color:#999;">拍賣會場：{{ $auction['auction_addr'] }}</h6>
									<h6 style="color:#999;">預展會場：{{ $auction['auction_preview_addr'] }}</h6>
									<hr>
									@foreach( $auction->auctionGroup() as $group)
										<div>
											<h3>
												{{ date('m月d日', strtotime($group['beginDate'])) }}-{{ date('m月d日', strtotime($group['endDate'])) }}
											</h3>
											<ul>
												@foreach( $auction->asasByGroup($group['asa_group']) as $asa)
													<li>
														@if( date('Y-m-d H:i:s') > $asa['preview_begin_time'] && 
															date('Y-m-d H:i:s') < $asa['preview_end_time'] )
															<span style="float:left;background-image:url('/imgs/today_bg.png');height:35px;width:35px;">
																<span style="line-height: 35px;color:white;font-size:14px;">今天&nbsp;</span>
															</span>
														@endif
														&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
														<a href="/auction/preview/asa/{{ $asa['id'] }}" style="display: inline-block;">
															{{ $asa['asa_name'] }}
														</a>
													</li>
												@endforeach
											</ul>
										</div>
									@endforeach
								</li>
							@endforeach
						</ul>
						<hr>
					<!-- <h1><a href="/auction/history">歷史拍賣</a></h1>
					<hr> -->
					@else
						<h1>暫無預展信息</h1>
					@endif
				</div>
				<div class="col-xs-8 content">
					@foreach($asas as $asa)
						<div class="row">
							<div class="col-xs-6">
								<a href="/auction/preview/asa/{{ $asa['id'] }}">
									<img src="{{ $asa['asa_image'] }}" alt="">
								</a>
							</div>
							<div class="col-xs-6">
								<h3>{{ $asa['asa_name'] }}</h3>
								<!-- @if($asa['asa_only_online'])
									<a href="{{ $asa['asa_online_url'] }}">仅限网上拍卖</a>
									<br>
									<br>
								@else
									@if(strlen($asa['asa_preview_addr']) == 0 || 
										strlen($asa['asa_addr']) == 0 || 
										['asa_addr'] == $asa['asa_preview_addr'])
										<p>預展\拍賣会场</p>
										<p>{{ $asa['asa_addr']}}</p>
									@else
										<p>預展会场：{{ $asa['asa_preview_addr']}}</p>
										<p>拍賣会场：{{ $asa['asa_addr']}}</p>
									@endif
								@endif -->
								<br>
								<div style="  height: 60px;">
									@if($asa['asa_online_logo'])
										<a href="{{ $asa['asa_online_url'] }}" class="yp-logo" target="_blank">
											<img src="{{$asa['asa_online_logo']}}" alt="" style="width:100px;height:35px;">	
										</a>
									@endif
									@if($asa['asa_only_online'] == 1 )
										<a href="{{ $asa['asa_online_url'] }}" style="color:#ffcc00">僅網上拍賣</a>
									@endif
								</div>
								<br>
								<p>{{ date('Y-m-d H:i', strtotime($asa['begin_time'])) }}&nbsp;&nbsp;開拍</p>
								<!-- <p>{{ date('Y-m-d H:i', strtotime($asa['preview_begin_time'])) }}&nbsp;&nbsp;預覽</p> -->
							</div>
						</div>
					@endforeach

					{!! $asas->render() !!}
				</div>
			</div>
		</div>
	</div>
@endsection