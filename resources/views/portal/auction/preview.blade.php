@extends('portal.app')

@section('content')
	<div id="auctionPreview">
		<div class="sub-nav">
			<div class="container">
				<ol class="breadcrumb">
				  <li><a href="/">首頁</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i></li>
				  <li><a href="/">拍賣日曆</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i></li>
				  <li class="active">拍賣預展</li>
				</ol>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-4 left-menu">
					<h1>2015 年</h1>
					<ul>
						@foreach( $auctions as $auction)
							<li>
								<h4>{{ $auction['auction_name'] }}</h4>
								<hr>
								<div>
									<h3>11月25-27日</h3>
									<ul>
										<li><a href="/auction/preview/asa/123">私人收藏</a></li>
									</ul>
								</div>
								<hr>
								<div>
									<h3>11月25-27日</h3>
									<ul>
										<li><a href="">名貴珠寶、手錶專場</a></li>
										<li><a href="">名貴珠寶、手錶專場</a></li>
										<li><a href="">名貴珠寶、手錶專場</a></li>
										<li><a href="">名貴珠寶、手錶專場</a></li>
										<li><a href="">名貴珠寶、手錶專場</a></li>
										<li><a href="">名貴珠寶、手錶專場</a></li>
										<li><a href="">名貴珠寶、手錶專場</a></li>
										<li><a href="">名貴珠寶、手錶專場</a></li>
									</ul>
								</div>
								<hr>
							</li>
						@endforeach
						<li>
							<h1>歷史拍賣</h1>
							<hr>
						</li>
					</ul>
				</div>
				<div class="col-md-8 content">
					<div class="row">
						<div class="col-md-6">
							<img src="/imgs/p1.png" alt="">
						</div>
						<div class="col-md-6">
							<h3>私人珍藏</h3>
							<p>預展\拍賣會</p>
							<p>香港萬麗海景酒店 XXXx</p>
							<p>11月25日 10:00 開拍</p>
							<p>11月25日 10:00 預覽</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<img src="/imgs/p1.png" alt="">
						</div>
						<div class="col-md-6">
							<p>私人珍藏</p>
							<p>預展\拍賣會</p>
							<p>香港萬麗海景酒店 XXXx</p>
							<p>11月25日 10:00 開拍</p>
							<p>11月25日 10:00 預覽</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<img src="/imgs/p1.png" alt="">
						</div>
						<div class="col-md-6">
							<p>私人珍藏</p>
							<p>預展\拍賣會</p>
							<p>香港萬麗海景酒店 XXXx</p>
							<p>11月25日 10:00 開拍</p>
							<p>11月25日 10:00 預覽</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection