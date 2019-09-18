@extends('layout')

@section('content')

	<div id="contact" class="control-wrapper">
	@include('menu')
	@include('header')

	<!-- key visual  -->
		<div id="page-visual" class="wrapper">
			<div class="visual">
        <img src="{{ asset('img/pc/mail/main.jpg') }}" width="100%" alt="">
			</div>
		</div>

    <div class="wrapper">
		<div class="cnt-detail content-block">
			<div class="cnt-section">

				<h2 class="ssub alarge">メルマガ登録解除しました。</h2>

				{{--<div class="read">入力頂いたメールアドレスに確認用メールを送信しました。</div>--}}

				<div id="form-wrapper" class="complete">

					<div class="buttons">
						<p class="button ora"><a href="{{ url('/') }}">TOPページに戻る</a></p>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>
@endsection
