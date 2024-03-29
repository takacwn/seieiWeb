@extends('layout')

@section('content')

  <div id="front" class="control-wrapper ijume">
  @include('menu')
  @include('header')

  <!-- key visual  -->
    <div id="page-visual">
      <div class="visual">
        <img src="{{ asset('img/sp/front/ijime/main.jpg') }}" width="100%" alt="">
      </div>
    </div>

    <div id="page-name">
      <div class="inner">
        <p class="icon-title">いじめ防止基本方針</p>
      </div>
      <p class="middle-line"></p>
    </div>

    <div class="wrapper">
      <div class="cnt-detail content-block">

        <div class="cnt-section">

          <h3 class="title">いじめ防止基本方針</h3>

          <p class="middle-line small no"></p>

          <p class="subject">
            誠英高等学校のいじめ防止基本方針については、下記のPDF資料よりご覧ください。
          </p>

          <div class="desc">
            <div class="wrap wrap-inner-box">
              <a href="{{ asset('pdf/bullying_prevention.pdf') }}" target="_blank">いじめ防止基本方針</a>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>
@endsection
