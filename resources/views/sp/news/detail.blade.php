@extends('layout')

@section('content')

	<div id="blog" class="control-wrapper dt">
	@include('menu')
	@include('header')

	<!-- key visual  -->
		<div id="page-visual" class="wrapper">
			<div class="visual">
				<img src="{{ asset('img/pc/news/main.jpg') }}" width="100%" alt="">
			</div>
		</div>

		<div class="cnt-detail content-block">

			<div class="cnt-section">

				<div class="section">

          <!-- cnt -->
					<div class="blog-cnt">

						<div class="wrap">

							<h3 class="title">元プロ野球選手・現在野球評論家　谷沢健一さん来校</h3>

							<p class="middle-line no m10"></p>
							<p class="ssub">2016/06/08 | 学校行事</p>

							<div class="blog-desc">

								<div class="images">
                  <p class="prev"><img src="/img/pc/news/prev.png" alt=""></p>
                  <p class="next"><img src="/img/pc/news/next.png" alt=""></p>
									<div class="slider">
									</div>
								</div>

								<p>
									谷沢健一さんは、早稲田大学を卒業後、ドラフト1位で中日ドラゴンズに入団され、新人王受賞、二度の首位打者獲得、2000本安打達成、二度のリーグ優勝貢献など、プロ野球選手として輝かしい成績をおさめられました。引退後は、野球評論家やプロ野球チームの打撃コーチとして活躍され、50才のときに早稲田大学大学院アジア太平洋研究科に入学され、国際経営学の修士号MBAを取得されました。
									<br>
									<br>

									現在は、野球評論家という顔だけでなく、早稲田大学講師、東京大学野球部特別コーチ、NPO法人谷沢野球コミュニティ柏・理事長など様々な顔をお持ちです。また、野球界の国際的発展のためにも尽力されており、今年設立された、学生野球夏季リーグ「サンディエゴ・サマーリーグ」では、最高顧問として、メジャーリーグ球団を中心に日本を含め世界各国の野球リーグへ進むことのできる選手育成を目指していらっしゃいます。
									<br>
									<br>

									本校においては、6月2日に、軟式野球部のご指導、6月3日には、月頭訓話でご講演、お昼休みには生徒達と一緒にお弁当を食べなから、直接お話を伺ったり、サインをいただく機会がありました。放課後は、軟式野球部メンバーと自衛隊野球チームとの合同指導をしていただきました。
								</p>
							</div>
						</div>

						<div class="page">
							<p class="page-left">前のお知らせへ <img src="/img/pc/arrow.png" class="arrow" alt=""> </p>
							<p class="page-next"><img src="/img/pc/arrow.png" class="arrow" alt="">次のお知らせへ </p>
						</div>

					</div>
          <!--    end cnt        -->

          <div class="blog-sidebar">
            <div class="swrap">
              <h3><img src="/img/pc/news/icon_category.png" alt=""></h3>
              <ul class="ss-ul">
                <li class="ss-li">・学校行事</li>
                <li class="ss-li">・学校行事</li>
                <li class="ss-li">・学校行事</li>
                <li class="ss-li">・学校行事</li>
                <li class="ss-li">・学校行事</li>
              </ul>
            </div>

            <div class="swrap">
              <h3><img src="/img/pc/news/icon_archive.png" alt=""></h3>
              <div class="select-block">
                <select id="" name="">
                  <option value="">選択してください</option>
                </select>
              </div>
            </div>

            <div class="swrap">
              <h3><img src="/img/pc/news/icon_recent.png" alt=""></h3>
              <ul class="ss-ulr">
                <li class="ss-li">2016/06/27<br/>主権者教育</li>
                <li class="ss-li">2016/06/27<br/>主権者教育</li>
                <li class="ss-li">2016/06/27<br/>主権者教育</li>
                <li class="ss-li">2016/06/27<br/>主権者教育</li>
                <li class="ss-li">2016/06/27<br/>主権者教育</li>
                <li class="ss-li">2016/06/27<br/>主権者教育</li>
              </ul>
            </div>
          </div>

				</div>

			</div>

		</div>


	</div>

@endsection
