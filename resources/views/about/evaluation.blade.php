@extends('layout')

@section('content')

  <div id="about" class="control-wrapper evaluation">
  @include('menu')
  @include('header')

  <!-- key visual  -->
    <div id="page-visual" class="wrapper">
      <div class="visual">
        <img src="{{ asset('img/pc/about/evaluation/main.jpg') }}" width="100%" alt="">
      </div>


      <div class="cnt-detail content-block">

        <div class="cnt-section">

          <h3 class="title">
            学校評価
          </h3>

          <p class="middle-line no"></p>

          <p class="read">
            誠英高等学校の学校評価については、下記のPDF資料よりご覧ください。
          </p>

          <div class="desc">
            <div class="wrap wrap-inner">
              <a href="{{ asset('pdf/school_evaluation_2015.pdf') }}" target="_blank">2015年度 学校評価書まとめ</a>
            </div>
          </div>

          <div class="desc">
            <div class="wrap wrap-inner">
              <a href="{{ asset('pdf/school_evaluation_2016.pdf') }}" target="_blank">2016年度 学校評価書まとめ</a>
            </div>
          </div>

          <div class="desc">
            <div class="wrap wrap-inner">
              <a href="{{ asset('pdf/school_evaluation_2017.pdf') }}" target="_blank">2017年度 学校評価書まとめ</a>
            </div>
          </div>

          <div class="desc">
            <div class="wrap wrap-inner">
              <a href="{{ asset('pdf/school_evaluation_2018.pdf') }}" target="_blank">2018年度 学校評価書まとめ</a>
            </div>
          </div>
        </div>



    </div>
  </div>

@endsection
