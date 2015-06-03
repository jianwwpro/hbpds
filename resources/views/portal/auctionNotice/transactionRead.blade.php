@extends('portal.app')

@section('content')
	<div id="newIndex">
		<div class="sub-nav">
			<div class="container">
				<ol class="breadcrumb">
				  <li><a href="#">{{ trans('portal.header.home') }}</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i></li>
				  <li><a href="#">{{ trans('portal.header.auction-notice') }}</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i></li>
				  <li class="active">{{ trans('portal.header.transaction-read') }}</li>
				</ol>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-xs-2">
					<ul class="left-menu">
						<li><a href="/auction-guide">{{ trans('portal.header.auction-guide') }}</a></li>
						<li class="active"><a href="/transaction-read">{{ trans('portal.header.transaction-read') }}</a></li>
						<li><a href="/auction-reference">{{ trans('portal.header.auction-reference') }}</a></li>
						<li><a href="/auction-book">{{ trans('portal.header.auction-book') }}</a></li>
					</ul>
				</div>
				<div class="col-xs-10 content">
					@if(\App::getLocale() === 'zh-TW')
						<h1>成交必讀</h1>

						<p>横濱國際拍賣(香港)須知</p>
						<p>競買者請在競投前認真閱讀横浜国際拍賣（香港）規章</p>
						<p>在充分理解各項條款前提下參與競投</p>
						
						<h2>拍賣流程</h2>
						<p>［登記］     競買人必須事前向本會出示有效的身份證明（護照，身分證，駕照等），填寫登記文件，交納保證金（10萬港幣現金）後,領取競投號牌，否則不視為正式競買人。</p>
						 
						<p>［預展］     拍賣會將舉行預展。在預展時將展出拍賣品，請在競投前仔細查看拍賣品原物。對實物進行充分的確認。一旦做出競投決定即表明本人接受拍品之一切現狀，在拍賣成交後不得解約，事後關於成交品的投訴也不予受理。</p>
						 
						<p>［拍賣］</p>
						<div style="padding-left:50px;">
							<p>１     現場競投</p>
							<p>競買人用申領到的本會頒發的競投號牌來參與拍賣，拍賣原則上按圖錄順序進行，拍賣師以港幣金額進行拍賣。希望購入作品的時候，請高舉自己的號牌，保證拍賣師注意到您。在無意購買的情況下請放下號牌。最高競價經拍賣師落槌確認時，即決定該拍品的成交及落槌價。如果您的競投號牌被拍賣師確認為落槌號牌時，即表示該拍品為您競投有效，請在競買成交確認書上簽名，簽名後即表示合同成立。</p>
						 
						    <p>２     書面委託競投</p>
						    <p>競買人如不能出席拍賣會現場時，可採用書面形式委託競投。需填寫書面競投委託書（本圖錄附有此委託書）。委託書必須在拍賣會舉行日期十日前交付本會，並通過郵寄或傳真到本會指定地址，再按本會規章交付保證金（10萬港幣）。保證金必須在拍賣會舉行日期十日之前交付本會。可以通過匯款形式支付，如果截止日期之內未能確認保證金或委託書，參加申請將視為無效。</p>
						 
						    <p>３  電話委託競投</p>
						    <p>拍賣會當天不能親自到場的競買人可以通過電話方式參加當日的拍賣。但必須在拍賣會舉行日期十日之前交付保證金（10萬港幣）並填寫登記文件，登記手續可以通過電話進行。保證金交付確認後，告知競投號牌和會場的競投電話號碼。</p>
						 </div>
						<p>［付款］     競買人競投成功後需支付其提出的競投價即落槌價之外，還須支付給本會手續費。</p>
						<div style="padding-left:50px;">
						    <p>1     手續費</p>
						 	<p>落槌價的15％。</p>
						 
						 	<p>（例）落槌價10萬港幣</p>
						 	<p>落槌價      100，000港幣</p>
						 	<p>落槌價格手續費（15％）      15，000港幣</p>
						 	<p>支付金額      115，000 港幣</p>
						 
							<p>2     支付方式</p>
							<p>現金支付：     只限港幣</p>
							<p>信用卡支付：     VISA</p>
							<p>銀聯卡支付：     無需額外交付手續費</p>
							<p>延期支付：     如當日不能支付，可在10日內通過銀行匯款方式支付。所產生的一切費用由          買受人承擔。</p>
						</div>
						<p>［領取拍賣品］     在支付全部價款之後即可領取拍賣作品。不能當日結算的情況下，在本會確認收到貨款之後，即可領取發送拍賣作品。如要求代為包裝及郵送購買的拍賣作品時，郵送發生的費用由買受人支付。郵送過程中發生的任何問題，本會不承擔一切責任。</p>
						 
						<p>［匯款方式］     開戶銀行：HSBC Hong Kong</p>
						<div style="padding-left:50px;">
							<p>支店：Hong Kong Office</p>
							<p>SWIFT CODE：HSBCHKHHHKH</p>
							<p>銀行賬戶： 165-756875-838</p>
							<p>開戶名稱： YOKOHAMA INTERNATIONAL AUCTION (HONG KONG) CO., LIMITED</p>
							<p>銀行地址： 1 Queen's Road Central,Central,Hong Kong</p>
						</div>
					@else
						<h1>Yokohama International Auction (Hong Kong) Co., Limited</h1>

						<h2>About buying</h2>
						<p>Yokohama International Auction (Hong Kong) is open to the public and conducted in accordance with the auction terms and conditions set out at the back of this catalogue. If you would like to participate in the auction as a buyer, please read the terms and conditions and the information below carefully first.</p>
						 
						<h2>Dear participants</h2>
						<p>You will need to register in advance to participate in the auction. After completing the stipulated registration form, you will need to pay a security deposit of 100,000 Hong Kong dollars in cash. We will also ask you to provide original documents as proof of identity, such as a driving licence, passport or insurance certificate for individuals, or a seal registration certificate or company registration certificate for corporations. We ask for your cooperation in providing these documents in order to prevent financial crimes such as the laundering of illicit funds.</p>

						<h2>Preview</h2>
						<p>The preview is held from the day before the auction onwards. This is where all of the items for auction are exhibited, and it is an opportunity for you to examine the lots before the sale. You are strongly advised to inspect the actual items for yourself, as the colour or condition may differ from the photographs shown in the catalogue. If you have any questions or queries, please do not hesitate to speak to a member of staff in one of the exhibition areas. It may also be possible to view an item before the official preview. Please let us know if you wish to do this.</p>

						<h2>Participating in the auction</h2>
						<p>There are three ways to participate in the Yokohama International Auction:</p>
						<ul>
							<li>
								<h3>1. In the saleroom</h3>
								<p>Once you have paid your deposit and registered at reception on the day of the sale, you will receive a numbered paddle to place your bid. Lots will be auctioned in the order they are presented in the catalogue. The auctioneer will call and accept the bids (in Hong Kong dollars) from the rostrum. If you would like to place a bid, you need to hold up your paddle so that he or she can see. The person to place the highest bid accepted by the auctioneer in each case is considered the buyer. More precisely, the buyer is the person whose paddle number is called when the auctioneer's hammer falls. A member of staff will then bring a bid confirmation form for the buyer to check and sign. Please remember that it is not possible to withdraw a bid once it has been accepted. <br><br>
								To ensure the smooth running of the auction, Yokohama International Auction reserves the right to refuse entry at our discretion.</p>
							</li>
							<li>
								<h3>2. Absentee bidding</h3>
								<p>We strongly recommend that you attend the auction in person. However, those unable to do so may still participate in the bidding process by submitting the relevant absentee bidding documentation. Please complete the absentee bidding form, and send it by post or fax to the address below ten days before the day of the auction. Please also ensure that a security deposit of 100,000 Hong Kong dollars is transferred to our company bank account ten days before the day of the auction. <br><br>
								<span style="color:red">Fax: 045-228-8638</span><br>
								<span style="color:red">Bank details:</span><br>
								<span style="color:red">HSBS regular deposit account: 165-756875-838</span><br>
								<span style="color:red">Account name: YOKOHAMA INTERNATIONAL AUCTION (HONG KONG) CO., LIMITED</span><br>
								</p>
							</li>
							<li>
								<h3>3. By telephone</h3>
								<p>If you are unable to attend the auction in person, you may also place bids by telephone. Please complete the registration procedures ten days before the day of the auction. Please also ensure that a security deposit of 100,000 Hong Kong dollars is transferred ten days before the day of the auction. There are restrictions in terms of staff availability and telephone lines. When choosing to participate in this way, please bear in mind the various problems that may occur due to the nature of telephone communication.</p>
							</li>
						</ul>

						<h2>Payment and premiums</h2>
						<p>In addition to the hammer price, you will also need to pay a 15% buyer’s premium.<br>
							For example, with a sale price of 100,000 Hong Kong dollars:<br>
							Sale price (hammer price)       = 100,000 HKD   <br>   
							Buyer’s premium (15%) =       15,000 HKD<br>
							Amount to pay (total purchase price) = 115,000 HKD</p>

						<h2>Payment methods</h2>
						<p>The buyer is asked to make payment at reception as set out in the section concerning payment.</p>

						<h2>Payment on the day</h2>
						<p>Cash payments should be made in Hong Kong dollars. All major credit cards and China Union cards are also accepted. Payments by China Union card will not incur a fee.</p>

						<h2>Collection</h2>
						<p>Buyers who complete payment on the day may collect their lot from the collections counter. <br>
							* Please note that jewellery items must be paid for and collected on the day.</p>

						<h2>Deposit</h2>
						<p>Your deposit will be returned on the day.</p>

						<h2>Payment at a later date</h2>
						<p>If you would like to complete payment at a later date, please complete the shipping request form stipulated by Yokohama International Auction after the end of the sale.

						The outstanding amount must be paid in full by bank transfer within ten days of the end of the sale. Please let us know once the transfer has been made. We will then confirm receipt and ship your item. Any shipping costs are to be paid by the buyer. Yokohama International Auction accepts no responsibility whatsoever for items that are broken or lost after being dispatched (including items that are stolen).</p>


						<h2>Bank details:　</h2>
						<p>HSBC Hong Kong branch, 238 NATHAN ROAD 

						Account number: 165-756875-838

						Account name: Yokohama International Auction (Hong Kong) Co., Limited</p>


						<h2>Glossary of terms</h2>
						<ul>
							<li>
								<h3>Auctioneer</h3>
								<p>The person who conducts the auction.</p>
							</li>
							<li>
								<h3>Lot number</h3>
								<p>The number assigned to the item in accordance with the order it appears in the catalogue. Each item is usually allocated one lot number. However, a single lot number may be allocated to multiple items that are to be sold as a set, and the auction will proceed based on this lot number.</p>
							</li>
							<li>
								<h3>Hammer price</h3>
								<p>The highest bid accepted by the auctioneer for a given lot.</p>
							</li>
							<li>
								<h3>Estimate</h3>
								<p>The predicted selling price. It serves to guide the bidding and can be found in our catalogue.</p>
							</li>
							<li>
								<h3>Paddle</h3>
								<p>The numbered card given to those who have completed the prescribed registration procedures. Participants use this to take part in the auction.</p>
							</li>
							<li>
								<h3>Bidding</h3>
								<p>When a participant indicates an intention to purchase a particular lot by raising the numbered paddle. This includes absentee bidding and bidding by telephone.</p>
							</li>
							<li>
								<h3>Buyer</h3>
								<p>The auction participant who places the highest bid and is accepted by the auctioneer as the winning bidder.</p>
							</li>
						</ul>
					@endif
				</div>
			</div>
		</div>
	</div>

	<style type="text/css">
		p {
	  		line-height: 2em;
	  	}
	  	.left-menu{
	  		width: 165px!important;
	  	}
	  	.content{
	  		width: 975px!important;
	  	}
	</style>
@endsection