@extends('layout')

@section('content')

	<div id="home_schooling" class="control-wrapper top">
	@include('menu')
	@include('header')

	<!-- key visual  -->
		<div id="page-visual" class="wrapper">
			<div class="left">
				<div class="pop">
					<div class="box no-icon">
						<div class="inner">
							<p class="icon-title">通信制</p>
						</div>
					</div>
					<p><img src="{{ asset('img/pc/guide/bg.png') }}" width="100%" alt="">
					</p>
				</div>
				<p>
					<img src="{{ asset('img/pc/home_schooling/visual_top01.jpg') }}" width="100%" alt="">
				</p>
			</div>
			<div class="right">
				<img src="{{ asset('img/pc/home_schooling/visual_top.jpg') }}" width="100%" alt="">
			</div>
		</div>

		<div class="wrapper category-index top">
			<div class="content-block">

				<div class="intro">
					<div class="title">
						キミの夢 応援します！
					</div>
					<p class="middle-line"></p>

					<p class="read">
						「学びたい時に学ぶ意欲のある人へ学習の機会を与える開かれた学校」としてみなさんの未来を応援します。
</p>
				</div>

				<div id="news">
					<h2 class="title">通信制 お知らせ（<a href="/blog/tusin/">一覧はこちら</a>）</h2>
					<p class="small-line"></p>

					<ul class="news-ul">
						@foreach($news as $row)
							<li class="news-li">
								<div class="wrap">
									<p class="date">{{ date('Y.m.d', strtotime($row->date)) }}</p>
									<p class="news-subject">
										<a href="{{ $row->link }}">{{ $row->title }}</a></p>
								</div>
							</li>
						@endforeach
					</ul>
					<div class="news-media">
						<div class="news-media-wrapper">
							<div class="thumb-slider">
								@foreach($news as $row)
									@if($row->img && !preg_match('/pnenoimgs/', $row->img))
										<p><img src="{{ $row->img }}" alt=""></p>
									@endif
								@endforeach
							</div>
						</div>
					</div>


				</div>



				<div class="category-index top">
      <div class="content-block">

        <ul class="ul">
          <li class="li homeschooling">
            <a href="/home_schooling/about">
              <div class="wrap">
                <p class="key">
                  <img src="{{ asset('img/pc/home_schooling/index/01.jpg') }}" alt=""></p>
                <p class="txt">
                  <img src="{{ asset('img/pc/arrow.png') }}" class="arrow" alt="">通信制とは
                </p>
              </div>
            </a>
          </li>
          <li class="li homeschooling">
            <a href="/home_schooling/way">
              <div class="wrap">
                <p class="key">
                  <img src="{{ asset('img/pc/home_schooling/index/02.jpg') }}" alt=""></p>
                <p class="txt">
                  <img src="{{ asset('img/pc/arrow.png') }}" class="arrow" alt="">学習方法
                </p>
              </div>
            </a>
          </li>
          <li class="li homeschooling">
            <a href="/home_schooling/life">
              <div class="wrap">
                <p class="key">
                  <img src="{{ asset('img/pc/home_schooling/index/03.jpg') }}" alt=""></p>
                <p class="txt">
                  <img src="{{ asset('img/pc/arrow.png') }}" class="arrow" alt="">学校生活
              </div>
            </a>
          </li>

          <li class="li homeschooling">
            <a href="/home_schooling/guide">
              <div class="wrap">
                <p class="key">
                  <img src="{{ asset('img/pc/home_schooling/index/04.jpg') }}" alt=""></p>
                <p class="txt">
                  <img src="{{ asset('img/pc/arrow.png') }}" class="arrow" alt="">入学案内
                </p>
              </div>
            </a>
          </li>



        </ul>
      </div>

    </div>


				<div class="schedule">
					<ul class="schedule-ul">
						<li class="schedule-li">
							<h3>4月</h3>
							<p class="cnt">
								前期入学式<br/>
								オリエンテーション<br/>
								前期始業式<br/>
								身体測定
							</p>
						</li>
						<li class="schedule-li">
							<h3>5月</h3>
							<p class="cnt">
								健康診断
							</p>
						</li>
						<li class="schedule-li">
							<h3>6月</h3>
							<p class="cnt">
								県定時制通信制体育大会
							</p>
						</li>
						<li class="schedule-li">
							<h3>8月</h3>
							<p class="cnt">
								進路相談<br/>
								前期単位認定試験<br/>
								全国定時制通信制体育大会
							</p>
						</li>
					</ul>
					<ul class="schedule-ul">
						<li class="schedule-li">
							<h3>9月</h3>
							<p class="cnt">
								前期卒業式<br/>
								前期終業式
							</p>
						</li>
						<li class="schedule-li">
							<h3>10月</h3>
							<p class="cnt">
								後期入学式<br/>
								オリエンテーション<br/>
								後期始業式
							</p>
						</li>
						<li class="schedule-li">
							<h3>11月</h3>
							<p class="cnt">
								校外スクーリング（1日遠足）
							</p>
						</li>
						<li class="schedule-li">
							<h3>1月</h3>
							<p class="cnt">
								進路相談
							</p>
						</li>
					</ul>
					<ul class="schedule-ul">
						<li class="schedule-li">
							<h3>2月</h3>
							<p class="cnt">
								後期単位認定試験
							</p>
						</li>
						<li class="schedule-li">
							<h3>3月</h3>
							<p class="cnt">
								後期卒業式<br/>
								後期終業式
							</p>
						</li>
					</ul>
				</div>

			</div>
		</div>
	</div>

@endsection
