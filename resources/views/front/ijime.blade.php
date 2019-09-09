@extends('layout')

@section('content')

  <div id="front" class="control-wrapper ijume">
    @include('menu')
    @include('header')

    <!-- key visual  -->
    <div id="page-visual" class="wrapper">
      <div class="visual">
        <img src="{{ asset('img/pc/front/ijime/main.jpg') }}" width="100%" alt="">
      </div>
    </div>

<div class="wrapper">
    <div class="cnt-detail content-block">

      <div class="cnt-section">

        <h3 class="title">いじめ防止基本方針</h3>

        <p class="middle-line no"></p>

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
