@extends('layout')

@section('content')

  <div id="home_schooling" class="control-wrapper life">
  @include('menu')
  @include('header')

  <!-- key visual  -->
    <div id="page-visual">
      <div class="visual">
        <img src="{{ asset('img/sp/home_schooling/life/main.jpg') }}" width="100%" alt="">
      </div>
    </div>
    <!-- end key visual -->


    <div id="page-name">
      <div class="inner">
        <p class="icon-title"><span>通信制</span><br/>学校生活</p>
      </div>
      <p class="middle-line"></p>
    </div>

    <div class="wrapper">

      <div class="cnt-detail content-block">

        <div class="cnt-section">

          <h3 class="title">学校生活</h3>
          <p class="middle-line small blue m15"></p>

          <ul class="life-ul">
            <li class="life-li">
              <p class="photo"><img src="{{ asset('img/pc/home_schooling/school_life/photo_01.jpg') }}" alt=""></p>
              <p class="photo-txt">入学式</p>
              <p class="note"></p>
            </li>
            <li class="life-li">
              <p class="photo"><img src="{{ asset('img/pc/home_schooling/school_life/photo_02.jpg') }}" alt=""></p>
              <p class="photo-txt">受付·日課表提出</p>
              <p class="note">登校したら当日受講する日課票を受付に提出します。</p>
            </li>
            <li class="life-li">
              <p class="photo"><img src="{{ asset('img/pc/home_schooling/school_life/photo_03.jpg') }}" alt=""></p>
              <p class="photo-txt">ホームルーム</p>
              <p class="note">昼食後SHRがあり諸連絡があります。</p>
            </li>
            <li class="life-li">
              <p class="photo"><img src="{{ asset('img/pc/home_schooling/school_life/photo_04.jpg') }}" alt=""></p>
              <p class="photo-txt">スクーリング</p>
              <p class="note">1人1人レポートに取り組みます。</p>
            </li>
            <li class="life-li">
              <p class="photo"><img src="{{ asset('img/pc/home_schooling/school_life/photo_05.jpg') }}" alt=""></p>
              <p class="photo-txt">体育実技</p>
              <p class="note">運動可能な服装で楽し＜！</p>
            </li>
            <li class="life-li">
              <p class="photo"><img src="{{ asset('img/pc/home_schooling/school_life/photo_06.jpg') }}" alt=""></p>
              <p class="photo-txt">調理実習</p>
              <p class="note">年2回家庭科目を履修している生徒対象に実習を行っています。</p>
            </li>
            <li class="life-li">
              <p class="photo"><img src="{{ asset('img/pc/home_schooling/school_life/photo_07.jpg') }}" alt=""></p>
              <p class="photo-txt">一日遠足</p>
              <p class="note">特別活動で楽しい1日旅行です。 みんな楽しみにしています。</p>
            </li>
            <li class="life-li">
              <p class="photo"><img src="{{ asset('img/pc/home_schooling/school_life/photo_08.jpg') }}" alt=""></p>
              <p class="photo-txt">防府天満宮参拝</p>
              <p class="note">日本三大天神の一つ防府天満宮に参拝します。</p>
            </li>
            <li class="life-li">
              <p class="photo"><img src="{{ asset('img/pc/home_schooling/school_life/photo_09.jpg') }}" alt=""></p>
              <p class="photo-txt">卒業式</p>
              <p class="note">単位修得のためみんな真剣に取り組んでいます。</p>
            </li>
          </ul>

        </div>

      </div>


    </div>

  </div>

@endsection
