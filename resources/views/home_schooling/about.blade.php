@extends('layout')

@section('content')

	<div id="home_schooling" class="control-wrapper about">
	@include('menu')
	@include('header')

	<!-- key visual  -->
		<div id="page-visual" class="wrapper">
			<div class="visual">
				<img src="{{ asset('img/pc/home_schooling/about/main.jpg') }}" width="100%" alt="">
			</div>
		</div>
		<!-- end key visual -->


		<div class="wrapper">

			<div class="cnt-detail content-block">

				<div class="cnt-section">

					<h3 class="title">本校の通信制について</h3>
					<p class="middle-line blue m40"></p>

					<div class="desc">
						<div class="read">
							◇ 多様な学習ニーズに応えるため、自宅で自学自習を基本とする学習形態で高等学校教育を提供します。<br/>
							◇ 通信制課程は『学年』という概念がない単位制です。<br/>
							◇ 与えられたレポート（報告課題）を提出し添削指導を受け年間に定められた時間のスクーリング（面接指導）に出席します。<br/>
							◇ 定期的に実施される試験（年間2回）に合格すれば単位を修得できるシステムです。<br/>
							◇ 必要な要件を満たし規定の単位を修得すれば 高校卒業資格が与えられ、大学や短大·専門学校への進学の道が開かれます。
						</div>
					</div>
				</div>

				<div class="cnt-section">
					<div class="section">
						<div class="left">
							<h3 class="title">教育目標</h3>
							<p class="middle-line blue m40"></p>

							<div class="desc">
								<div class="read">
									1. 個に応じた習熟度別学習を行います。 <br>
									2. 個に応じたカウンセリングを行います。 <br>
									3. 個に応じた進路指導を行います。
								</div>
							</div>
						</div>
						<div class="right">
							<h3 class="title">特色</h3>
							<p class="middle-line blue m40"></p>

							<div class="desc">
								<div class="read">
									1. きめ細やかなサポートの下、毎年90%以上の高い卒業率を達成しています。 <br>
									2. 月2日程度スクーリングに出席すれば3年間で卒業できます。 <br>
									3. 前籍校での在籍期間·修得単位がプラスされます。 <br>
									4. 単位の修得に向け特別指導をします。
								</div>
							</div>

						</div>
					</div>



					<p class="info">
						<img src="{{ asset('img/pc/home_schooling/about/01.png') }}" alt="">
					</p>
				</div>

			</div>


		</div>

	</div>

@endsection
