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

          <h2 class="ssub alarge">お問合わせありがとうございました。</h2>

          <div class="read">お問い合わせいただいた内容について、内容をご確認させていただき後日ご回答いたします。</div>

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
