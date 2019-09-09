@extends('layout')

@section('content')

	<div id="front" class="control-wrapper download">
	@include('menu')
	@include('header')

	<!-- key visual  -->
		<div id="page-visual" class="wrapper">
			<div class="visual">
				<img src="{{ asset('img/pc/front/download/main.jpg') }}" width="100%" alt="">
			</div>
		</div>

<div class="wrapper">
		<div class="cnt-detail content-block">
			<div class="cnt-section">
				<h3 class="title">資料請求</h3>
				<p class="middle-line no"></p>
				<!-- subject  -->
				<div class="subject">
					誠英高等学校の資料を下記に用意いたしました。<br/>
					紙面での学校案内パンフレット、募集要項については下記の【資料請求】よりお願いいたします。
				</div>
                <div class="buttons"><a href="/request"><p class="button ora">資料請求</a></p><br/><br/></div>
				<!-- end subject  -->

				<div class="desc pdf">
					<h3 class="label">● 資料ダウンロード（PDF）</h3>
					<div class="wrap wrap-inner-box">
						<div class="left">
							<img src="{{ asset('img/pc/front/download/requirements.jpg') }}"></div>
						<div class="right">
							<p class="pdf-txt">
								<a href="{{ asset('pdf/seiei_requirements_2019.pdf') }}" target="_blank">2019年度誠英高等学校募集要項</a>
							</p>
						</div>
					</div>

{{--		//すみません、生徒・保護者の同意が得られてないため，まだ公開できません。
					<div class="wrap wrap-inner-box">
						<div class="left">
							<img src="{{ asset('img/pc/front/download/pamphlet.jpg') }}"></div>
						<div class="right">
							<p class="pdf-txt">
								<a href="{{ asset('pdf/seiei_pamphlet_2018.pdf') }}" target="_blank">誠英高等学校パンフレット</a>
							</p>
						</div>
					</div>
--}}

					<div class="wrap wrap-inner-box">
						<div class="left">
							<img src="{{ asset('img/pc/front/download/pamphlet.jpg') }}"></div>
						<div class="right">
							<p class="pdf-txt">
								<a href="{{ asset('pdf/seiei_guide2018.pdf') }}" target="_blank">誠英高等学校パンフレット</a>
							</p>
						</div>
					</div>

					<div class="wrap wrap-inner-box">
						<div class="left">
							<img src="{{ asset('img/pc/front/download/leaflet.jpg') }}"></div>
						<div class="right">
							<p class="pdf-txt">
								<a href="{{ asset('pdf/seiei_leaflet_2017.pdf') }}" target="_blank">誠英高等学校リーフレット</a>
							</p>
						</div>
					</div>
				</div>
			</div>


			<div class="cnt-section">

				<h3 class="title">各種証明書の発行手続きについて</h3>

				<p class="middle-line m40"></p>

				<div class="desc">
					<table>
						<tr>
							<th class="kind">種別</th>
							<th>発行手数料（１通）</th>
							<th>発行までに要する日数</th>
							<th>発行可能期間</th>
						</tr>
						<tr>
							<td class="kind">卒業証明書</td>
							<td>４００円</td>
							<td>2日</td>
							<td></td>
						</tr>
						<tr>
							<td class="kind">成績証明書</td>
							<td>４００円</td>
							<td rowspan="4">7日</td>
							<td rowspan="3">卒業後５年間</td>
						</tr>
						<tr>
							<td class="kind">進学用調査書</td>
							<td>６００円</td>
						</tr>
						<tr>
							<td class="kind">就職用調査書</td>
							<td>７００円</td>
						</tr>
						<tr>
							<td class="kind">単位修得証明書</td>
							<td>４００円</td>
							<td>卒業後２０年間</td>
						</tr>
					</table>

					<p class="note">
						・上記以外の証明書が必要な場合は直接お問い合わせください。<br/>
						・2016年7月1日付で発行手数料の一部を改訂しております。
					</p>

					<h5>【窓口での申請】</h5>
					<div class="section">
						<div class="left">

							<p class="txt">
								<span class="bo">本人の場合</span> <br>
                                1. 証明書交付申請書（<a href="{{ asset('pdf/certificate_application.pdf') }}" target="_blank"><img src="{{ asset('img/pc/front/download/pdf_icon.png') }}"><b>PDF</b></a>）
								<br>
								2. 調査書交付願（調査書の場合のみ）（<a href="{{ asset('pdf/survey_request.pdf') }}" target="_blank"><img src="{{ asset('img/pc/front/download/pdf_icon.png') }}"><b>PDF</b></a>）
								<br>
								3. 本人の身分証明書（運転免許証、保険証などで確認）
							</p>
						</div>
						<div class="right">
							<p class="txt">
								<span class="bo">代理人の場合</span> <br>
								1. 証明書交付申請書（<a href="{{ asset('pdf/certificate_application.pdf') }}" target="_blank"><img src="{{ asset('img/pc/front/download/pdf_icon.png') }}"><b>PDF</b></a>）
								<br>
								2. 調査書交付願（調査書の場合のみ）（<a href="{{ asset('pdf/survey_request.pdf') }}" target="_blank"><img src="{{ asset('img/pc/front/download/pdf_icon.png') }}"><b>PDF</b></a>）
								<br>
								3. 本人と代理人の身分証明書（運転免許証、保険証などで確認）　　　<br>
								4. 委任状（<a href="{{ asset('pdf/delegation_sheet.pdf') }}" target="_blank"><img src="{{ asset('img/pc/front/download/pdf_icon.png') }}"><b>PDF</b></a>）
								<br>
							</p>
						</div>
					</div>

				</div>


				<div class="details">
					<div class="txt">
						<span class="bo">【郵送での申請】</span> <br>
						申請者本人が直接学校に出向く事が出来ない場合は、郵送により申請を行うことができます。 <br>
						詳しい申請方法については、事前にお問い合わせください
					</div>
					<div class="txt">
						<span class="bo">● その他留意事項</span> <br>
						・各証明書等は卒業時の氏名での交付となります。 <br>
						・発行可能期間を過ぎたことにより調査書等が発行できない旨の証明書を無料で交付いたします。ご希望の場合は連絡ください。<br>
						・電話やFAXでの交付申請および発行はできません。<br>
						・提出された書類及び個人情報は、証明書等作成発行の用途以外には使用いたしません。
					</div>

					<div class="txt">
						<span class="bo">● お問い合わせ先</span> <br>
						<span class="bo">全日制課程事務室</span><br>
						TEL：0835-38-5252 <br>
						受付時間：8時20分～17時00分（月曜から金曜）
						<br><br>
						<span class="bo">通信制課程事務室</span> <br>
						TEL：0835-38-6161<br>
						受付時間：8時20分～17時00分（火曜から金曜）／8時20分～12時00分（土曜・日曜のスクーリング開講日のみ）
					</div>

				</div>

			</div>


		</div>
	</div>

</div>
@endsection
