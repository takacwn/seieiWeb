@extends('layout')

@section('content')

	<div id="exam" class="control-wrapper explanation">
	@include('menu')
	@include('header')

	<!-- key visual  -->
		<div id="page-visual" class="wrapper">
			<div class="visual">
				<img src="{{ asset('img/pc/exam/explanation/main.jpg') }}" width="100%" alt="">
			</div>
		</div>


		<div class="wrapper">

			<div class="content-block">

				<div class="cnt-section" style="margin-top:30px;margin-bottom:30px;">
					<p class="icon"><img src="/img/pc/exam/explanation/explan_copy.png" alt="" style="display: block;margin-left: auto;margin-right: auto;"></p>
					<div class="desc">
						<div class="section">


								<div class="content-block" style="display: block;margin:50px;text-align: center; ">
									<div class="explain-info" style="display: inline-block;vertical-align: middle;margin:0px 10px; width:420px;text-align:left;line-height: 1.5em;">
										本校の教育方針をはじめ、科・コースの説明、進学や就職実績の紹介のほか、募集要項を詳しくご案内いたします。<br/>
										また、個別に進路相談も行っております。ご遠慮なくご相談ください。<br/>
										多くの方々のご参加をお待ちしております。<br/>
									</div>
									<div class="explain-photo" style="display: inline-block;vertical-align: middle; margin-left:10px;">
											<img src="/img/pc/exam/explanation/explain_photo.jpg" alt="" style="display: inline-block;border-radius: 50%;-moz-border-image: border-radius: 50%;-webkit-border-image: border-radius: 50%;width: 250px;height: 250px;">
									</div>
								</div>

								<div class="sub-title" style="display: block;margin:margin:30px 50px 10px 10px;padding:12px;display:block; background-color:#ff9900;color:#ffffff;font-weight:bold;font-size: 18px;">
										内容（各エリア共通）
								</div>


								<ul class="ul" style="list-style-type: none;display: inline-block;margin:10px 30px;padding:10px;">
									<li class="li" style="margin-left:10px;padding-left: 20px;padding-bottom: 10px;background: url(/img/pc/arrow_right.png) no-repeat 2px 5px;float: left;width: 250px;height: 20px;display: table;"><p>本校の教育方針</p></li>
									<li class="li" style="margin-left:10px;padding-left: 20px;padding-bottom: 10px;background: url(/img/pc/arrow_right.png) no-repeat 2px 5px;float: left;width: 250px;height: 20px;display: table;"><p>科・コース紹介</p></li>
									<li class="li" style="margin-left:10px;padding-left: 20px;padding-bottom: 10px;background: url(/img/pc/arrow_right.png) no-repeat 2px 5px;float: left;width: 250px;height: 20px;display: table;"><p>進学・就職実績紹介</p></li>
									<li class="li" style="margin-left:10px;padding-left: 20px;padding-bottom: 10px;background: url(/img/pc/arrow_right.png) no-repeat 2px 5px;float: left;width: 250px;height: 20px;display: table;"><p>募集要項説明</p></li>
									<li class="li" style="margin-left:10px;padding-left: 20px;padding-bottom: 10px;background: url(/img/pc/arrow_right.png) no-repeat 2px 5px;float: left;width: 250px;height: 20px;display: table;"><p>個別進路相談</p></li>
								</ul>
								{{--
								<div class="content-block" style="display: block;margin:10px 30px;padding:10px;">
									<div class="content" style="display: inline-block;font-weight:bold;font-size: 18px;margin:5px;width:250px;">◎本校の教育方針</div>
									<div class="content" style="display: inline-block;font-weight:bold;font-size: 18px;margin:5px;width:250px;">◎科・コース紹介</div>
									<div class="content" style="display: inline-block;font-weight:bold;font-size: 18px;margin:5px;width:250px;">◎進学・就職実績紹介</div>
									<div class="content" style="display: inline-block;font-weight:bold;font-size: 18px;margin:5px;width:250px;">◎募集要項説明</div>
									<div class="content" style="display: inline-block;font-weight:bold;font-size: 18px;margin:5px;width:250px;">◎個別進路相談</div>
								</div>
								--}}

								<div class="content-block" style="display: block;margin:20px 30px 0px 30px;padding:10px;border-top:2px solid #ff9900;border-bottom:1px solid #ff9900;">
									<div class="explain-place" style="display: inline-block;vertical-align: middle;font-weight:bold;font-size: 18px;">
										防府エリア
									</div>
									<div class="explain-dt" style="display: inline-block;vertical-align: middle;margin:0px 30px;">
	                  開催日時：2017年11月3日 (金・祝)<br/>
										　　　　　10:00～11:30　（受付9:30～）<br/>
										場　　所：デザインプラザＨＯＦＵ<br/>
									</div>
									<div class="explain-map" style="display: inline-block;vertical-align: middle;">
										<iframe style="margin-left: auto;margin-right: auto;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3305.4290133757304!2d131.5654225148353!3d34.05851508060418!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x354492f33842b7ed%3A0xe68d8e1e0f617626!2z44OH44K244Kk44Oz44OX44Op44K277yo77yv77ym77y1!5e0!3m2!1sja!2sjp!4v1475059568107" width="360" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
									</div>
								</div>

								<div class="content-block" style="display: block;margin:0px 30px 0px 30px;padding:10px;border-top:1px solid #ff9900;border-bottom:1px solid #ff9900;">
									<div class="explain-place" style="display: inline-block;vertical-align: middle;font-weight:bold;font-size: 18px;">
										周南エリア
									</div>

									<div class="explain-dt" style="display: inline-block;vertical-align: middle; margin:0px 30px;">
										開催日時：2017年11月11日 (土)<br/>
										　　　　　10:00～11:30　（受付9:30～）<br/>
										場　　所：新南陽ふれあいセンター<br/>
									</div>
									<div class="explain-map" style="display: inline-block;vertical-align: middle;">
										<iframe width="360" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.co.jp/maps?ll=34.071409, 131.737818&q=新南陽ふれあいセンター&output=embed&t=m&z=16"></iframe>
									</div>
								</div>

								<div class="content-block" style="display: block;margin:0px 30px 50px 30px;padding:10px;border-top:1px solid #ff9900;border-bottom:2px solid #ff9900;">
									<div class="explain-place" style="display: inline-block;vertical-align: middle;font-weight:bold;font-size: 18px;">
										山口エリア
									</div>
									<div class="explain-dt" style="display: inline-block;vertical-align: middle;margin:0px 30px;">
	                  開催日時：2017年11月25日 (土)<br/>
										　　　　　10:00～11:30　（受付9:30～）<br/>
										場　　所：山口県健康づくりセンター<br/>
										　　　　　（山口県総合保健会館）
									</div>
									<div class="explain-map" style="display: inline-block;vertical-align: middle;">
										<iframe width="360" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.co.jp/maps?ll=34.161182, 131.446049&q=山口県健康づくりセンター&output=embed&t=m&z=16"></iframe>
									</div>
								</div>


{{--
								<h4 style="padding: 30px 0 10px 0;font-size: 18px;line-height: 36px;">中学生保護者の方々対象に以下の内容をご用意しています。</h4>
								<ul class="ul" style="list-style-type: none;display: inline-block;">
									<li class="li" style="margin-left:10px;padding-left: 20px;padding-bottom: 10px;background: url(/img/pc/arrow_right.png) no-repeat 2px 5px;float: left;width: 400px;height: 20px;display: table;"><p>教員および生徒による科・コース紹介</p></li>
									<li class="li" style="margin-left:10px;padding-left: 20px;padding-bottom: 10px;background: url(/img/pc/arrow_right.png) no-repeat 2px 5px;float: left;width: 400px;height: 20px;display: table;"><p>進学・就職の取り組みと実績紹介</p></li>
									<li class="li" style="margin-left:10px;padding-left: 20px;padding-bottom: 10px;background: url(/img/pc/arrow_right.png) no-repeat 2px 5px;float: left;width: 400px;height: 20px;display: table;"><p>募集要項の説明</p></li>
									<li class="li" style="margin-left:10px;padding-left: 20px;padding-bottom: 10px;background: url(/img/pc/arrow_right.png) no-repeat 2px 5px;float: left;width: 400px;height: 20px;display: table;"><p>個別進路相談</p></li>
								</ul>

								<div style="margin-left: 80px;margin-right: 80px;padding: 20px 30px;font-size: 18px;font-weight: bold;border: 4px solid #ff9900;">来場特典　入試問題集過去２年分（平成２７・２８年度）</div>

								<div style="padding: 30px 0 30px 0;font-size: 18px;line-height: 28px;">
									参加ご希望の方は、本校ホームページまたはお電話でお申し込みください。<br />
									ご在籍の中学校を通じてのお申し込みも可能です。
								</div>
--}}

								<div style="text-align: center; margin:60px;">
									<div style="display: inline-block;">
										<img src="/img/pc/exam/explanation/photo_01.jpg" alt="">
										<img src="/img/pc/exam/explanation/photo_02.jpg" alt="">
										<img src="/img/pc/exam/explanation/photo_03.jpg" alt="">
										<img src="/img/pc/exam/explanation/photo_04.jpg" alt="">
									</div>
								</div>


							</div>


							<div class="button ora" style="margin-bottom:50px;">
								<a href="/subscription">入試説明会の参加お申し込み</a>
							</div>


					</div>
				</div>
			</div>
		</div>







@endsection
