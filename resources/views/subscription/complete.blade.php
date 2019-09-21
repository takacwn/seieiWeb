@extends('layout')

@section('content')

	<div id="subscription" class="control-wrapper">
	@include('menu')
	@include('header')

	<!-- key visual  -->
		<div id="page-visual" class="wrapper">
			<div class="visual">
				<img src="{{ asset('img/pc/subscription/main.jpg') }}" width="100%" alt="">
			</div>
		</div>

    <div class="wrapper">
		<div class="cnt-detail content-block">
			<div class="cnt-section">

				<h2 class="ssub alarge">お申込みありがとうございます。</h2>

				<div class="read">
					お申し込み確認のメールを送信いたしました。<br />

						@if($join_area == '防府エリア(2018年11月3日)')
							2018年11月3日 (土)　デザインプラザＨＯＦＵにてお待ちしております。
						@endif
						@if($join_area == '周南エリア(2018年10月20日)')
							2018年10月20日 (土)　新南陽ふれあいセンターにてお待ちしております。
						@endif
						@if($join_area == '山口エリア(2018年11月17日)')
							2018年11月17日 (土)　山口県健康づくりセンターにてお待ちしております。
						@endif
				</div>


				<div id="form-wrapper" class="complete">

						<div class="buttons">
							<p class="button ora"><a href="{{ url('/') }}">TOPページに戻る</a></p>
						</div>

					</form>




				</div>
			</div>
		</div>

	</div>
</div>
@endsection
