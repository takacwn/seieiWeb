@extends('layout')

@section('content')

	<div id="blog" class="control-wrapper index">
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
            <ul class="list">
              <li class="li">
                <h3 class="title">主権者教育</h3>
                <p class="middle-line no m10"></p>
                <p class="ssub">2016/06/08 | 学校行事</p>
                <div class="desc-little">
									<p class="txt">
									  谷沢健一さんは、早稲田大学を卒業後、ドラフト1位で中日ドラゴンズに入団され、新人王受賞、二度の首位打者獲得、2000本安打達成、二度のリーグ優勝貢献など、プロ野球選手として輝かしい成績をおさめられました <a href="">(続きをよむ...)</a>
									</p>
                </div>
              </li>
              <li class="li">
                <h3 class="title">主権者教育</h3>
                <p class="middle-line no m10"></p>
                <p class="ssub">2016/06/08 | 学校行事</p>
                <div class="desc-little">
                  <p class="photo"></p>
                  <p class="txt">
                    谷沢健一さんは、早稲田大学を卒業後、ドラフト1位で中日ドラゴンズに入団され、新人王受賞、二度の首位打者獲得、2000本安打達成、二度のリーグ優勝貢献など、プロ野球選手として輝かしい成績をおさめられました <a href="">(続きをよむ...)</a>
                  </p>
                </div>
              </li>
              <li class="li">
                <h3 class="title">主権者教育</h3>
                <p class="middle-line no m10"></p>
                <p class="ssub">2016/06/08 | 学校行事</p>
                <div class="desc-little">
                  <p class="photo"></p>
                  <p class="txt">
                    谷沢健一さんは、早稲田大学を卒業後、ドラフト1位で中日ドラゴンズに入団され、新人王受賞、二度の首位打者獲得、2000本安打達成、二度のリーグ優勝貢献など、プロ野球選手として輝かしい成績をおさめられました <a href="">(続きをよむ...)</a>
                  </p>
                </div>
              </li>
            </ul>
            <div class="paginate">
              @foreach(range(1, 5) as $i)
              <p class="num {{ $i == 1? 'active': '' }}">{{ $i }}</p>
            @endforeach
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
