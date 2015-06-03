@extends('portal.app')

@section('content')
	<div id="newIndex">
		<div class="sub-nav">
			<div class="container">
				<ol class="breadcrumb">
				  <li><a href="#">{{ trans('portal.header.home') }}</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i></li>
				  <li><a href="#">{{ trans('portal.header.auction-notice') }}</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i></li>
				  <li class="active">{{ trans('portal.header.auction-guide') }}</li>
				</ol>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-xs-2">
					<ul class="left-menu">
						<li class="active"><a href="/auction-guide">{{ trans('portal.header.auction-guide') }}</a></li>
						<li><a href="/transaction-read">{{ trans('portal.header.transaction-read') }}</a></li>
						<li><a href="/auction-reference">{{ trans('portal.header.auction-reference') }}</a></li>
						<li><a href="/auction-book">{{ trans('portal.header.auction-book') }}</a></li>
					</ul>
				</div>
				<div class="col-xs-10 content">
					@if(\App::getLocale() === 'zh-TW')

						<h1>拍賣規則</h1>
						<p>本規則的制定依據是相關法律法規同時參照了國際通行慣例按照以下規章執行</p>

						<p>第一條     總則</p>
						<div style='padding-left:50px;'>
							<p>（一）     橫濱國際拍賣（香港）（以下稱：本會）是由橫濱國際拍賣（香港）有限公司主辦的拍賣活動，本會有權根據實際情況隨時對本規則進行修改。</p>
							<p>（二）     本規則適用於日本國的法律，凡參加本會的委託人，競買人，買受人和其他相關各方均應按照本規則執行，並對自己參加本會拍賣活動的行為負責，如因未仔細</p>閱讀本規則而引發的任何損失或責任均由行為人自行承擔。本規則的解釋權屬於橫濱國際拍賣（香港）有限公司。
							<p>（三）     本會特別聲名不能保證拍賣品的真贋及品質，對拍賣品的瑕疵不承擔擔保責任。競買人應親自審看拍賣品實物，並對自己競買拍賣品的行為承擔法律責任。</p>
							<p>（四）     本規則有英文和中文版本，原則上以中文版為準。</p>
						</div>
						<br>
						<p>第二條     拍賣圖錄</p>
						<div style='padding-left:50px;'>
							<p>（一）     本會為便於競買人參加本會拍賣活動，制作了拍賣圖錄。此圖錄只是對拍賣品的作者，年代，尺寸，素材，保存狀態及估計售價等提供意見性說明的文字及圖片</p>資料，僅供競買人參考。出現的誤差及因印刷或攝影導致圖錄作品的色調，形狀等与實物有差別時，均以實物為準，本會對此類誤差不承擔任何責任。
							<p>（二）     拍賣圖錄可能出現未經事前通告而在拍賣會場以書面或口頭形式進行變更的情況。如出現上述情況，拍賣以變更後的內容為準。</p>
						</div>
						<br>
						<p>第三條     登記</p>
						<div style='padding-left:50px;'>
							<p>（一）     競買人必須事前向本會出示有效的身份證明（護照，身份證，駕照等），填寫登記文件，領取競投號牌。否則不視為正式競買人。</p>
							<p>（二）     競買人參加本會拍賣時，應在領取競投號牌前交納保證金（10萬港幣現金）。拍賣結束，返還競投號牌時，如競買人未能購得競買品則全額無息退還競買人。若競</p>買人購得拍賣品則可抵作購買價款的一部分。若有余款，則於競買人領取拍賣品時一併返還。
							<p>（三）     本會有權拒絕任何人參加本會舉行的拍賣活動或進入拍賣會現場。以及拒絕在拍賣現場進行拍照，錄音，攝像等行為。</p>
							<p>（四）     當拍賣會現場出現異常情況影響拍賣活動正常進行時，本會有權根據實際情況做出相應處理，直至暫停拍賣活動。如拍賣現場出現任何爭議，本會有權於以協調解決。</p>
						</div>
						<br>
						<p>第四條     拍賣</p>
						<div style='padding-left:50px;'>
							<p>（一）現場競投</p>
							<div style='padding-left:50px;'>
								<p>a. 本會只認可本會頒發的競投號牌。競買人通過此競投號牌來參加拍賣。拍賣結束後必須歸還競投號牌。
								本會鄭重提示，競買人應妥善保管競投號牌，不得借與他人使用。一旦丟失，應立即以本會認可的書面方式辦理掛失手續。
								無論是否接受競買人的委託，凡持競投號牌者在拍賣會活動中進行的一切競買行為均視為競投號牌登記人本人所為，競買人應當對其行為承擔法律責任。（競投號牌登記人本人以本會認可的書面方式在本會辦理了該競投號牌的掛失手續，並由拍賣師現場宣布該競投號牌作廢除外。）</p>
								<p>b.     拍賣由本會全權委託的拍賣師執行。以估計的價格為參考，通過競投方式決定落槌價格。拍賣師有權代表本會酌情提高或降低競價階梯，拒絕拍賣師認定的不正常競投，決定最終競買人，執行競買手續。參加拍賣的競買人必須無條件接受拍賣師的裁定。</p>
								<p>c. 最高競價經拍賣師落槌確認時，該競買人競投成功，即表明該競買人與本會為代理人之間達成了關於該拍品的買賣合同。</p>
								<p>d.      競買人競投成功後，即成為該拍賣品的買受人。買受人需支付其提出的競投價即落槌價之外，還必須支付給本會手續費（落槌價的15%）。</p>
								<p>e. 本會有權在買賣合同成立之後酌情解除買賣合同。買受人除本會特別規定之外，不得以任何理由解除合同。</p>
							</div>
							<p>（二）書面委託競投／電話委託競投</p>
							<div style='padding-left:50px;'>
								<p>a. 競買人原則上需親自出席拍賣會。如不能出席，可採用書面形式委託本會代為競投。本會有權決定是否接受上述委託。</p>
								<p>b.      採取書面委託競投的競買人填寫書面競投委託書（本圖錄附有此委託書）。委託書必須在規定日之前交付本會，可通過郵寄或傳真到本會指定地址。並按本規章交付保證金（10萬港幣）。保證金必須在規定日之前交付本會。可以通過匯款形式交付。如果在截止日期之內未能確認保證金或委託書，參加申請將視為無效。</p>
								<p>c.      拍賣會當日不能親自到場的競買人可以通過電話方式參加當日的拍賣。但必須在規定日之前交付保證金（10萬港幣）並填寫登記表，登記手續可以通過電話進行。保證金交付確認後，由本會告知競買人競投號牌和會場的競投電話號碼。</p>
							</div>
						</div>
						<br>
						<p>第五條付款及所有權轉移</p>
						<div style='padding-left:50px;'>
							<p>（一）     拍賣成交後拍賣當天以現金（只限港幣）或信用卡，銀聯卡結算為原則。如當天不能結算，可在10天內通過銀行匯款方式結算。在指定的期限內如買受人仍未能足額支付購買價款，本會有權就落槌價</p>格按其日息0.1％收取利息直至買受人金額支付為止。
							<p>（二）     拍賣成交後買受人無權撤銷交易。如出現買受人未能如期支付相應價款等糾紛時，本會有權徵收撤銷交易手續費。撤銷交易手續費為落槌價格的30％。無法解決，協商的情況下，依據日本法律進行</p>裁決。買受當事人應承擔一切訴訟費，並且本會有權禁止其參加以後的拍賣活動。
							<p>（三）與出品委託人的結算結束後，本會不接受任何索賠。</p>

							第六條領取拍賣品
							<p>（一）     若買受人未能在規定時期內領取拍賣品，逾期後對該拍賣品的相關保管，搬運，保險等費用均由買受人承擔，且買受人應對其所拍得作品承擔全部責任。</p>
							<p>（二）     本會應買受人要求代為包裝及郵送拍賣品時產生的費用均由買受人自行承擔。此外，對於本會向買受人推薦的包裝公司及搬運公司所造成的一切錯誤，遺漏，損失等，本會亦不承擔責任。</p>
							<p>（三）     因本會原因造成買受人錯誤領取買賣品的情況，本會負責退還。買受人應盡快將誤領拍賣品返還給本會。</p>

							<p>（四）     特別提示：根據日本國及其他相關法律，法規規定，限制出口的拍賣品請買受人慎重處理，如若產生法律糾紛，買受人將承擔一切責任；允許出口的拍賣品，買受人應根據日本國有關規定</p>
						</div>
					@else
						<h1>Auction Terms and Conditions</h1>
						<p>The Yokohama International Auction (Hong Kong) shall be conducted by Yokohama International Auction Co., Ltd. (Yokohama International Auction) as the organizer in accordance with the following terms and conditions.</p>
						
						<h2>Buyer regulations</h2>
						<h3>Article 1 General Principles</h3>
						<ul>
							<li>1) These Terms and Conditions shall be governed by Japanese laws and regulations.</li>
							<li>2) The Yokohama International Auction (Hong Kong) is a public auction that is open, in principle, to anyone who either applies in advance or registers as a member on the day. However, Yokohama International Auction reserves the right to, at its discretion and without providing a reason, refuse a participation request, and may alter these Terms and Conditions as necessary.</li>
							<li>3) Participation is conditional on compliance with these Terms and Conditions: Auction participants must ensure that they read these Terms and Conditions carefully and adhere to the provisions unconditionally. All rights associated with the auction shall belong to Yokohama International Auction.</li>
							<li>4) Yokohama International Auction accepts in principle no responsibility whatsoever for the authenticity of a lot. Anyone wishing to make a purchase is asked to place a bid using their own judgement.</li>
							<li>5) These Terms and Conditions are also available in English and Chinese. In the event of any inconsistencies, the English version shall prevail for this auction.</li>
						</ul>
						
						<h3>Article 2 Catalogue</h3>
						<ul>
							<li>1) Yokohama International Auction will compile a catalogue presenting the lots for those wishing to participate in the auction. This catalogue is to serve as a reference for auction participants in identifying the individual items; the photographs and descriptions are only the opinion of Yokohama International Auction, and are in no way intended to provide a guarantee of the basis for the purchase and sale. Yokohama International Auction accepts no legal responsibility regarding the content of the catalogue.</li>
							<li>2) The content of the catalogue may be altered without notice and for any reason. Yokohama International Auction will provide verbal or written notification of any alterations on the day of the auction. In such a case, the auction will be conducted based on the new content.</li>
							<li>3) When choosing to participate, we ask you to bear in mind that the catalogue is not a complete source of information concerning the lots. Therefore, participants are strongly recommended to attend the preview if possible, in order to examine for themselves the items they wish to purchase, and to apply their own judgement and accept personal responsibility in making a purchase. Once a bid has been accepted, a discrepancy between the catalogue information and the lot will not constitute a valid reason for cancelling the purchase agreement.</li>
						</ul>

						<h3>Article 3 Registration</h3>
						<ul>
							<li>1) Those wishing to participate need to present official identity documents beforehand to Yokohama International Auction as proof of their identity (driving licence, passport, etc.) and enter their name, address and other necessary details on the form as specified by Yokohama International Auction in order to register as members.</li>
							<li>2) Those wishing to participate need to pay, either in advance or at reception on the day, a security deposit of 100,000 Hong Kong dollars in cash. Yokohama International Auction will issue a deposit certificate in exchange for the deposit and issue the depositor with a paddle. If a bid is successful and a purchase price needs to be paid, the purchase price will first be offset against the deposit. The deposit will not be subject to interest. The deposit will be returned in exchange for the deposit certificate when the depositor returns the paddle in person. If someone other than the depositor returns the deposit certificate, or if the deposit certificate has been lost, Yokohama International Auction shall retain the deposit until a reason sufficiently warranting the return of the deposit has been established.</li>
							<li>3) Yokohama International Auction may, under any circumstances and without needing to seek consent, refuse or withdraw the participation registration of any participant it judges to be hindering the running of the auction.</li>
						</ul>

						<h3>Article 4 Saleroom rules</h3>
						<ul>
							<li>1) Acts such as taking photographs or making video or sound recordings are prohibited at the preview or in the saleroom.</li>
							<li>2) Anybody engaging in disorderly behaviour at the preview or in the saleroom will be asked to leave.</li>
							<li>3) We ask you to refrain from examining items in such a way as to damage a lot at the preview or in the saleroom.</li>
							<li>4) The preview will take place, in principle, on the day before or on the morning of the auction at the auction house. Yokohama International Auction will announce concrete details of the time of the auction and preview each time via our website or pamphlets. At the preview, we endeavour as far as possible to provide a service to aid examination of the actual items.</li>
						</ul>

						<h3>Article 5 The auction</h3>
						<h4>1. In the saleroom</h4>
						<ul>
							<li>1) Entry to the Yokohama International Auction saleroom is restricted in principle to those who have been invited or referred by Yokohama International Auction. Paddles must be returned to reception by the end of the sale.</li>
							<li>2) The auctioneer is entrusted with running the auction in the saleroom at his or her discretion. This includes the discretion to determine the start price, determine bid increments, and determine or reject the buyer. Participants and all relevant parties must comply with the auctioneer’s decisions.</li>
							<li>3) The buyer is the participant accepted by the auctioneer as ultimately having placed the highest bid. The auctioneer determines the buyer with the fall of the hammer. This establishes a purchase contract between the seller, who has appointed Yokohama International Auction its agent, and the buyer. After winning the bid, the buyer needs to sign and seal the bid confirmation form stipulated by Yokohama International Auction.</li>
							<li>4) Yokohama International Auction is a sale by auction that requires participants to register to participate in the auction process. Participants place offers to buy items by holding up the paddles distributed by Yokohama International Auction on the day of the sale. Participants must ensure that they return their paddles to Yokohama International Auction when leaving the auction room. Yokohama International Auction will charge the buyer a buyer’s premium of 15% of the hammer price for each lot number. This premium will incur an additional 5% VAT.</li>
							<li>5) Yokohama International Auction will not accept requests from other companies after the auction to sell items. Yokohama International Auction may prioritise its own circumstances and cancel a purchase contract that has been established. In doing so, Yokohama International Auction is not obliged to disclose the reason. The buyer, however, may not, unless expressly prescribed by Yokohama International Auction, cancel an established purchase contract for any reason.</li>
						</ul>

						<h4>2. Absentee bidding</h4>
						<ul>
							<li>1) We strongly recommend that you attend in person on the day of the auction. However, those unable to attend may still participate in the bidding process by submitting the relevant absentee or telephone bidding documentation. Yokohama International Auction reserves the right to refuse to accept a bid under any circumstances.</li>
							<li>2) If you would like to register for absentee bidding, please transfer the security deposit (100,000 Hong Kong dollars) by the stipulated date and complete the registration process within the specified period. Those registered will be informed of their registration number. This will become invalid if receipt of the deposit has not been confirmed by the stipulated date. After sending by post or fax the bid request form at the back of the auction catalogue, please check whether it has been received and confirm the details with Yokohama International Auction by telephone.</li>
							<li>3) It is possible to participate in the bidding process by a telephone line directly connected to the saleroom. Since the number of available Yokohama International Auction staff and telephone lines are limited, please submit your telephone bid request to Yokohama International Auction by the stipulated date. <br><br>

							If you would like to register for telephone bidding, please transfer the security deposit (100,000 Hong Kong dollars) by the stipulated date and complete the registration process within the specified period. Those registered will be informed of their registration number and the telephone number to use for the bidding process. This will become invalid if receipt of the deposit has not been confirmed by the specified date. Please confirm the details at the time of application. Yokohama International Auction accepts no responsibility whatsoever for not being able to successfully bid on a requested lot for reasons such as the following: <br>
							<p>1. Problems with the line or other mechanical faults.</p>
							<p>2. If we were unable to contact you for any reason at the time of the bid of the requested lot.</p>
							<p>3. If it was not possible to match the bids and the auctioneer identified that we had no intention of placing a higher bid.</p>

							</li>
						</ul>

						<h3>Article 6 Buying and making payment</h3>
						<ul>
							<li>1) Payment after the auction shall, in principle, by made on the day in Hong Kong dollars either by cash or specified cards. You may transfer payment at a later date, on the condition that permission has been granted by Yokohama International Auction. In such a case, payment should be made within ten (10) days. Please confirm the bank details for the payment in advance or ask at reception on the day. The total purchase price that the buyer must pay to Yokohama International Auction is the hammer price for the purchased lot, plus the buyer’s premium and VAT on the premium as stipulated in Article 5(1)(4) of these Terms and Conditions. If payment is to be made at a later date, the buyer must pay all transfer charges. If payment is not received by the deadline, interest of 0.1% for each subsequent day that the payment is late will be added to the amount.</li>
							<li>2) The successful bid of the person accepted by the auctioneer as the highest bidder may not be withdrawn for any reason. However, if Yokohama International Auction grants permission for the cancellation, a penalty of 30% of the hammer price will be imposed on the buyer. Legal action will be taken to deal with a matter that is proving difficult to resolve through discussion. The buyer must pay all costs relating to the case, and his or her membership registration will be withdrawn and he or she will be prohibited from any future participation.</li>
							<li>3) Yokohama International Auction will not accept any claims after the bidding has finished and the hammer price has been decided. </li>
						</ul>

						<h3>Article 7 Collection</h3>
						<ul>
							<li>1) Ownership rights of the lot will be transferred to the buyer upon confirmation by Yokohama International Auction of payment of the purchase price, and the purchase will be completed by handing over the item to the buyer. The lot will be handed over after payment has been made in full.</li>
							<li>2) Yokohama International Auction may, in the unlikely event that it delivers the wrong item, demand that the buyer return the item. In this case, the buyer must return the item in response to the demand without delay.</li>
							<li>3) Items using animals protected under the Washington Convention may not be taken out of the country (ivory, coral, etc.).</li>
						</ul>
					@endif
					<br>
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