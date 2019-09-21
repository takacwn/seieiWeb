@extends('layout')

@section('content')

	<div id="contact" class="control-wrapper">
	@include('menu')
	@include('header')

	<!-- key visual  -->
    <div id="page-visual">
      <div class="visual">
        <img src="{{ asset('img/sp/req/main.jpg') }}" width="100%" alt="">
      </div>
    </div>

    <div id="page-name">
      <div class="inner">
        <p class="icon-title">資料請求</p>
      </div>
      <p class="middle-line"></p>
    </div>

<div class="wrapper">
		<div class="cnt-detail content-block">

			<div class="cnt-section">

				<div class="read">
					誠英高等学校のことを、さらに理解していただくために、オープン・スクールや学校見学を実施しています。本校のパンフレットや入試要項などの資料請求も承っております。以下より申し込んでください。また、本校にご興味をお持ちの方は、下記のフォーム内でメールアドレスをご登録ください。ご登録いただいた方には、本校の行事や活動についての報告や案内をメールにてお送りいたします。<br/>
					※ パンフレットは毎年7月末、入試要項は10月中旬より、翌年度向けの情報に更新されます。<br/>
					※ 携帯電話で迷惑メール対策の設定をしていると、本校からのメールが届かない場合がありますので、seiei.ac.jp ドメインからのメールを受け取れるようにしてください。<br/>※ いただいた個人情報は、上記記載目的以外は使用いたしません。
				</div>

				<div id="form-wrapper" class="confirm">

					<form action="" method="post">
            <input type="hidden" name="send" value="1">
						@foreach(Request::all() as $key => $value)
							<input type="hidden" name="{{ $key }}" value="{{ $value }}">
						@endforeach


						<div class="form-section first">

							<div class="inputstyle">
								<h3 class="h3">・お申し込み内容 <span class="require">必須</span> <span class="small">ご希望のものにチェックを入れてください。（複数選択可）</span></h3>

								@if(Request::has('open1') || Request::has('open2'))
								<h2 class="h2">■ オープンキャンパスのお申し込み</h2>
										<div class="values">
				                  @if(Request::has('open1'))
													<div class="checkblock">
														オープンキャンパス 1回目（2019年7月31日 9:00〜12:00）参加
													</div>
				                  @endif

													@if(Request::has('open2'))
													<div class="checkblock">
														オープンキャンパス 2回目（2019年8月28日 9:00〜12:00）参加
													</div>
													@endif
										</div>
								@endif

							@if(Request::has('disp1') || Request::has('disp2'))
							<div class="inputstyle">
								<h2 class="h2">■ 学校見学のお申し込み</h2>
								<p class="notice">本校のスケジュールによっては、ご希望に添えない場合がありますが、こちらから再調整のご連絡をさせていただきます。</p>
								<div class="values">
                  @if(Request::has('disp1'))
									<div class="checkblock">
											学校見学： {{ Request::get('disp1_val') }}（見学希望日時：{{ Request::get('disp1_date') }}）
									</div>
                  @endif
                  @if(Request::has('disp2'))
                    <div class="checkblock">
                      学校見学： {{ Request::get('disp2_val') }}（見学希望日時：{{ Request::get('disp2_date') }}）
                    </div>
                  @endif
								</div>
							</div>
							@endif

							@if(Request::has('s_guide') || Request::has('s_youkou'))
							<div class="inputstyle">
								<h2 class="h2">■ 資料請求</h2>
								<div class="values">

									@if(Request::has('s_guide'))
                  <div class="checkblock">
                      資料請求（学校案内パンフレット）{{ Request::get('guide_num') }}部
                  </div>
									@endif

									@if(Request::has('s_youkou'))
									<div class="checkblock">
                      資料請求（募集要項）{{ Request::get('youkou_num') }}部
									</div>
									@endif

								</div>
							</div>
						</div>
						@endif


						<div class="form-section">

							<div class="inputstyle">
								<div class="label">
									<h3 class="h3">・お名前 <span class="require">必須</span></h3>
								</div>
                <div class="value-box">{{ Request::get('lastname') }} {{ Request::input('firstname') }} </div>
							</div>


							<div class="inputstyle">
								<div class="label">
									<h3 class="h3">・所属、学校</h3>
								</div>
								<div class="value-box">
									<div class="value-wrapper">{{ Request::get('school') }}</div>
								</div>
							</div>

							<div class="inputstyle">
								<div class="label">
									<h3 class="h3">・区分</h3>
								</div>
								<div class="value-box">{{ Request::get('category') }} </div>
							</div>


							<div class="inputstyle">
								<div class="label">
									<h3 class="h3">・メールアドレス <span class="require">必須</span></h3>
								</div>
								<div class="value-box">
									<div class="value-wrapper">
                    <p class="box">{{  Request::get('email') }}</p>
                    <p class="notice box">
											このメールアドレスを登録して、今後本校の行事や活動についての報告や案内を受け取ることを希望しますか？いただいた情報は、本目的以外には使用しません。
										</p>
										<p class="box">
                      @if(Request::get('mailmagazine') == '1')
                        @if(Request::get('site') == '1')
                          全日制
                          @foreach(['在校生・保護者', '中学生・保護者', '卒業生', '一般']  as $v)
                            @if($v == Request::get('tag1'))
                              {{ $v }}
                            @endif
                          @endforeach
                        @elseif(Request::get('site') == '2')
                          通信制

                          @foreach(['在校生・保護者', '中学生・保護者', '卒業生', '一般']  as $v)
                            @if($v == Request::get('tag2'))
                              {{ $v }}
                            @endif
                          @endforeach
                        @endif
                      @elseif(Request::get('mailmagazine') == '9')
                        既に登録している
                      @else
                        希望しない
                      @endif
                    </p>
									</div>
								</div>
							</div>

							<div class="inputstyle">
								<div class="label">
									<h3 class="h3">・住所</h3>
									<p class="note">資料請求の場合はご入力ください</p>
								</div>
								<div class="value-box">
									<div class="value-wrapper">
                    {{ Request::get('zipcode') }} <br/>
                    {{ Request::get('address') }}
									</div>
								</div>
							</div>

							<div class="inputstyle">
								<div class="label">
									<h3 class="h3">・電話番号</h3>
								</div>
								<div class="value-box">
									<div class="value-wrapper">{{ Request::get('tel') }}</div>
								</div>
							</div>

							<div class="inputstyle">
								<div class="label">
									<h3 class="h3">・その他連絡事項</h3>
								</div>
								<div class="value-box">
									<div class="value-wrapper">{{ Request::get('body') }}</div>
								</div>
							</div>
						</div>


						<div class="buttons">
              <p><button class="button ora">送信する</button></p>
							<p class="button last"><a href="#" onclick="history.back();">修正する</a></p>
						</div>

					</form>

				</div>


			</div>

		</div>
	</div>

</div>
@endsection