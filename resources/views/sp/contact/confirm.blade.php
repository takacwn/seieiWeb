@extends('layout')

@section('content')

  <div id="contact" class="control-wrapper">
    @include('menu')
    @include('header')

    <div id="page-visual">
      <div class="visual">
        <img src="{{ asset('img/sp/contact/main.jpg') }}" width="100%" alt="">
      </div>
    </div>

    <div id="page-name">
      <div class="inner">
        <p class="icon-title">お問い合わせ</p>
      </div>
      <p class="middle-line"></p>
    </div>

    <div class="wrapper">
      <div class="cnt-detail content-block">

        <div class="cnt-section">

          <div class="read">お問い合わせ、ご質問等がございましたらお気軽にお問い合わせください。<br/>※ いただいた個人情報は、上記記載目的以外は使用いたしません。</div>

          <div id="form-wrapper" class="confirm">

            <form action="" method="post">
              <input type="hidden" name="send" value="1">
              @foreach(Request::all() as $key => $value)
                <input type="hidden" name="{{ $key }}" value="{{ $value }}">
              @endforeach

              <div class="form-section">

                <div class="inputstyle">
                  <div class="label">
                    <h3 class="h3">・お名前 <span class="require">必須</span></h3>
                  </div>
                  <div class="value-box">
                    <div class="value-wrapper">{{ Request::get('lastname') }} {{ Request::input('firstname') }} </div>
                  </div>
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
                          希望する
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
                    <h3 class="h3">・件名 <span class="require">必須</span></h3>
                  </div>
                  <div class="value-box">
                    <div class="value-wrapper">{{ Request::get('subject') }}</div>
                  </div>
                </div>

                <div class="inputstyle">
                  <div class="label">
                    <h3 class="h3">・お問合わせ内容 <span class="require">必須</span></h3>
                  </div>
                  <div class="value-box">
                    <div class="value-wrapper">{{ Request::get('body') }}</div>
                  </div>
                </div>

              </div>

              <div class="buttons">
                <p>
                  <button class="button ora">送信する</button>
                </p>
                <p class="button last"><a href="#" onclick="history.back();">修正する</a></p>
              </div>

            </form>

          </div>


        </div>

      </div>
    </div>
  </div>

@endsection
