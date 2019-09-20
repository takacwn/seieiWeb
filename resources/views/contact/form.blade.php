@extends('layout')

@section('content')

  <div id="contact" class="control-wrapper">
  @include('menu')
  @include('header')

  <!-- key visual  -->
    <div id="page-visual" class="wrapper">
      <div class="visual">
        <img src="{{ asset('img/pc/contact/main.jpg') }}" width="100%" alt="">
      </div>
    </div>

<div class="wrapper">
    <div class="cnt-detail content-block">

      <div class="cnt-section">

        <div class="read">お問い合わせ、ご質問等がございましたらお気軽にお問い合わせください。<br/>※ いただいた個人情報は、上記記載目的以外は使用いたしません。</div>

        @if($error)
          <div class="error">
            @foreach($error as $e)
              {{ $e }}<br/>
            @endforeach
          </div>
        @endif

        <div id="form-wrapper">

          <form action="" method="post">
            {{ csrf_field() }}
            <div class="form-section">

              <div class="inputstyle">
                <div class="label">
                  <h3 class="h3">・お名前 <span class="require">必須</span></h3>
                </div>
                <div class="value-box">
                  <div class="value-wrapper">
                    <input type="text" name="lastname" class="input middle m10" placeholder="姓" value="{{ Request::get('lastname') }}">
                    <input type="text" name="firstname" class="input middle" placeholder="名" value="{{ Request::get('firstname') }}">
                  </div>
                </div>
              </div>

              <div class="inputstyle">
                <div class="label">
                  <h3 class="h3">・所属、学校 <span class="require">必須</span></h3>
                </div>
                <div class="value-box">
                  <div class="value-wrapper">
                    <input type="text" name="school" class="input" placeholder="例）中学校名" value="{{ Request::get('school') }}">
                  </div>
                </div>
              </div>

              <div class="inputstyle">
                <div class="label">
                  <h3 class="h3">・メールアドレス <span class="require">必須</span></h3>
                </div>
                <div class="value-box">
                  <div class="value-wrapper">
                    <p class="box"><input type="text" name="email" class="input" value="{{ Request::get('email') }}"></p>
                    <p class="box"><input type="text" name="email_confirmation" class="input" placeholder="確認のためもう一度入力ください。" value="{{  Request::get('email_confirmation') }}"></p>
                    <p class="notice">
                      このメールアドレスを登録して、今後本校の行事や活動についての報告や案内を受け取ることを希望しますか？いただいた情報は、本目的以外には使用しません。
                    </p>
                    <div class="radio-block">
                      <p class="radio"><input type="radio" name="mailmagazine" value="1" @if(Request::get('mailmagazine') == '1') checked="checked" @endif> <b>希望する</b></p>
                      <p class="radio"><input type="radio" name="mailmagazine" value="0" @if(Request::get('mailmagazine') == '0') checked="checked" @endif> <b>希望しない</b></p>
                      <p class="radio"><input type="radio" name="mailmagazine" value="9" @if(Request::get('mailmagazine') == '9') checked="checked" @endif> <b>既に登録している</b></p>
                    </div>

                    <p class="notice">「希望する」を選んだ方は、メールマガジンの配信対象を選択してください。</p>

                    <div class="radio-block">
                      <input type="radio" name="site" value="1" @if(Request::get('site') == '1') checked="checked" @endif> <b>全日制</b>
                      <div class="select-block oneline">
                        <select name="tag1" id="">
                          <option value="">配信対象を選択してください</option>
                          <option value="在校生・保護者" @if(Request::get('tag1') == '在校生・保護者') selected="selected" @endif>在校生・保護者</option>
                          <option value="中学生・保護者" @if(Request::get('tag1') == '中学生・保護者') selected="selected" @endif>中学生・保護者</option>
                          <option value="卒業生" @if(Request::get('tag1') == '"卒業生') selected="selected" @endif>卒業生</option>
                          <option value="一般" @if(Request::get('tag1') == '一般') selected="selected" @endif>一般</option>
                        </select>
                      </div>
                    </div>

                    <div class="radio-block">
                      <input type="radio" name="site" value="2" @if(Request::get('site') == '2') checked="checked" @endif> <b>通信制</b>
                      <div class="select-block oneline">
                        <select name="tag2" id="">
                          <option value="">配信対象を選択してください</option>
                          <option value="在校生・保護者" @if(Request::get('tag2') == '在校生・保護者') selected="selected" @endif>在校生・保護者</option>
                          <option value="中学生・保護者" @if(Request::get('tag2') == '中学生・保護者') selected="selected" @endif>中学生・保護者</option>
                          <option value="卒業生" @if(Request::get('tag2') == '"卒業生') selected="selected" @endif>卒業生</option>
                          <option value="一般" @if(Request::get('tag2') == '一般') selected="selected" @endif>一般</option>
                        </select>
                      </div>
                    </div>

                  </div>
                </div>
              </div>

              <div class="inputstyle">
                <div class="label">
                  <h3 class="h3">・件名 <span class="require">必須</span></h3>
                </div>
                <div class="value-box">
                  <div class="value-wrapper">
                    <input type="text" name="subject" class="input" value="{{ Request::get('subject') }}">
                  </div>
                </div>
              </div>

              <div class="inputstyle">
                <div class="label">
                  <h3 class="h3">・お問合わせ内容 <span class="require">必須</span></h3>
                </div>
                <div class="value-box">
                  <div class="value-wrapper">
                    <textarea class="textarea" name="body">{{ Request::get('body') }}</textarea>
                  </div>
                </div>
              </div>

            </div>

            <div class="buttons">
              <p><button class="button ora">送信内容を確認</button></p>
              <p class="button last"><a href="{{ url('/') }}">TOPページに戻る</a></p>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>

</div>
@endsection
