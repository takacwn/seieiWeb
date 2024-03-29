@extends('layout')

@section('content')

	<div id="exam" class="control-wrapper open">
	@include('menu')
	@include('header')

	<!-- key visual  -->
		<div id="page-visual" class="wrapper">
			<div class="visual">
				<img src="{{ asset('img/pc/exam/open/main1.jpg') }}" width="100%" alt="">
			</div>
		</div>


		<div class="wrapper">

			<div class="content-block">

				<div class="cnt-section">
					<p class="icon"><img src="/img/pc/exam/open/01.png" alt=""></p>

					<div class="desc">
						<div class="section">
                <div class="infomation">
                                <p class="txt">誠英高等学校は、以下の日程でオープンキャンパスを開催します。<br/>中学生および保護者の方々が、本校のコース内容や学校生活について深く理解していただけるよう、先生と先輩が多彩な体験プログラムをご用意してお越しをお待ちしています。</p>
								</div>
								<div class="info-dt">
                                    開催日時：<br>
                                    1回目：2019年7月31日 (水)　9:00〜12:00 （受付 8:30） <br>
                                    2回目：2019年8月28日 (水)　9:00〜12:00 （受付 8:30） <br>
									場　　所：誠英高等学校<br/>
								</div>


								<div class="sh">
									<p class="date">日程（予定）</p>

									<div class="recruit-block">
										<div class="rwrap">
											<p class="label">8:30～9:00</p>
											<p class="value">受付 (講堂)</p>
										</div>
										<div class="rwrap">
											<p class="label">9:00～9:05</p>
											<p class="value">諸注意 (講堂)</p>
										</div>
										<div class="rwrap">
											<p class="label">9:05～9:40</p>
											<p class="value">学校紹介 (講堂)</p>
										</div>
                    <div class="rwrap">
											<p class="label">9:40～11:15</p>
											<p class="value">校内見学・体験学習</p>
										</div>
										<div class="rwrap">
											<p class="label">11:30～11:45</p>
											<p class="value">能楽部による仕舞披露 (仕舞)生徒、(謡)能楽師 長宗敦子先生</p>
										</div>
                    <div class="rwrap">
											<p class="label">11:45～11:55</p>
											<p class="value">制服＆部活ユニフォーム紹介・吹奏楽同好会の演奏</p>
										</div>
										<div class="rwrap">
											<p class="label">11:55～12:00</p>
											<p class="value">学校長挨拶・質疑応答・軽食配布</p>
										</div>

									</div>
								</div>



					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="exam-slider">
		<div class="control-wrapper">
			<ul>
				<li><img src="/img/pc/exam/open/photo_01.jpg" alt=""></li>
				<li><img src="/img/pc/exam/open/photo_02.jpg" alt=""></li>
				<li><img src="/img/pc/exam/open/photo_03.jpg" alt=""></li>
				<li><img src="/img/pc/exam/open/photo_04.jpg" alt=""></li>
				<li><img src="/img/pc/exam/open/photo_05.jpg" alt=""></li>
				<li><img src="/img/pc/exam/open/photo_06.jpg" alt=""></li>
				<li><img src="/img/pc/exam/open/photo_07.jpg" alt=""></li>
				<li><img src="/img/pc/exam/open/photo_08.jpg" alt=""></li>
				<li><img src="/img/pc/exam/open/photo_09.jpg" alt=""></li>
				<li><img src="/img/pc/exam/open/photo_10.jpg" alt=""></li>
				<li><img src="/img/pc/exam/open/photo_11.jpg" alt=""></li>
				<li><img src="/img/pc/exam/open/photo_01.jpg" alt=""></li>
				<li><img src="/img/pc/exam/open/photo_02.jpg" alt=""></li>
				<li><img src="/img/pc/exam/open/photo_03.jpg" alt=""></li>
				<li><img src="/img/pc/exam/open/photo_04.jpg" alt=""></li>
				<li><img src="/img/pc/exam/open/photo_05.jpg" alt=""></li>
				<li><img src="/img/pc/exam/open/photo_06.jpg" alt=""></li>
				<li><img src="/img/pc/exam/open/photo_07.jpg" alt=""></li>
				<li><img src="/img/pc/exam/open/photo_08.jpg" alt=""></li>
				<li><img src="/img/pc/exam/open/photo_09.jpg" alt=""></li>
				<li><img src="/img/pc/exam/open/photo_10.jpg" alt=""></li>
				<li><img src="/img/pc/exam/open/photo_11.jpg" alt=""></li>
			</ul>
		</div>
	</div>

	<div id="exam" class="control-wrapper open">


		<div class="wrapper">
			<div class="content-block">
				<div class="cnt-section">
					<div class="desc">
						<div class="wrap">
							<div class="program">
								<h4>体験学習プログラム</h4>
								<ul class="ul">
                                    <li class="li"><p><b>学校紹介</b></p></li>
                                    <li class="li"><p><b>スタディサプリを体験しよう・入試問題できるかな</b><br/><span style="font-size: 14px;">普通科 特別進学コース</span></p></li>
                                    <li class="li"><p><b>調理実習を体験して試食をしよう</b><br/><span style="font-size: 14px;">普通科 生活文化コース食文化専攻</span></p></li>
                                    <li class="li"><p><b>ピン・クッションを作ってみよう</b><br/><span style="font-size: 14px;">普通科 生活文化コース生活教養専攻</span></p></li>
                                    <li class="li"><p><b>タブレットを使ってオリジナル作品を作ろう</b><br/><span style="font-size: 14px;">普通科 情報文化コース</span></p></li>
                                    <li class="li"><p><b>電卓をたたいて検定にチャレンジしよう</b><br/><span style="font-size: 14px;">情報会計科 情報会計専攻</span></p></li>
                                    <li class="li"><p><b>電気ケーブルを接続してみよう</b><br/><span style="font-size: 14px;">情報会計科 工業専攻</span></p></li>
                                    <li class="li"><p><b>福祉実習を体験してみよう</b><br/><span style="font-size: 14px;">福祉科</span></p></li>
                                    <li class="li"><p><b>制服を試着して記念撮影をしよう</b><br/><span style="font-size: 14px;">制服試着コーナー</span></p></li>
																		<li class="li"><p><b>５つの味覚をチェックしよう</b><br/><span style="font-size: 14px;">理科</span></p></li>
                                    <li class="li"><p><b>ネイティブな英語に触れて会話を楽しもう</b><br/><span style="font-size: 14px;">英会話同好会</span></p></li>
                                    <li class="li"><p><b>作法や日本文化にふれよう</b><br/><span style="font-size: 14px;">茶道部</span></p></li>
								</ul>
								<p class="note">
									<span class="bold">注意事項</span><br/>
									● 上履のご用意をお願いします。<br/>
									● 軽食を用意しております。お帰りの際に体育館下でお受け取りください。<br/>
									● オープンキャンパスの参加には事前のお申し込みが必要です。 <br/>
											中学校の先生を通じてのお申し込み、または、下記のリンクよりお申し込みください。
								</p>
{{--
                	<p class="note">
											<span class="bold">その他</span><br/>
											｢部活紹介番外編｣として、以下の部活見学も可能です。<br/>
		                                    ● 男子バスケット部見学（日時： 8月2日 12:45〜13:45／場所： 誠英高等学校体育館）<br/>
		                                    ● 野球部見学（スペシャルゲスト 谷沢健一さん）※雨天の場合中止<br/>
		                                    日時：8月2日 15:30〜17:30／8月30日 15:30〜17:30<br/>
		                                    場所： 防府スポーツセンター野球場（防府市大字浜方182-5）
									</p>
--}}

								<div class="button ora">
									<a href="/request">オープンキャンパスの参加お申し込み</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection
