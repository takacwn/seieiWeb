@extends('layout')

@section('content')

  <div id="exam" class="control-wrapper tour">
  @include('menu')
  @include('header')

  <!-- key visual  -->
    <div id="page-visual">
      <div class="visual">
        <img src="{{ asset('img/sp/exam/tour/main.jpg') }}" width="100%" alt="">
      </div>
    </div>

    <div id="page-name">
      <div class="inner">
        <p><img src="{{ asset('img/pc/exam/icon.png') }}" width="40" alt=""></p>
        <p class="icon-title"><span>入試情報</span><br/>学校説明会・見学お申し込み</p>
      </div>
      <p class="middle-line"></p>
    </div>

    <div class="cnt-detail content-block">


      <div class="cnt-section">

        <div class="wrapper">
          <h3 class="title">学校見学</h3>
          <p class="middle-line small m10"></p>

          <div class="desc">
            <div class="wrap">

              <div class="read">
                授業や部活動風景などを見学されたい際には、いつでもキャンパス内をご案内いたします。<br/>
                通常は以下のスケジュールの中での対応が可能ですが、時期によって異なりますので、必ず事前にお電話またはお申し込みフォームよりお問い合わせください。
              </div>

            </div>
          </div>
        </div>

        <ul class="tour-ul">
          <li class="tour-li">
            <h3 class="h3">授業（課外含む）</h3>
            <p class="img"><img src="{{ asset('img/pc/exam/tour/01.jpg') }}" alt=""></p>
            <p class="info">
              平日：8:50～15:40（水曜日は14:45まで）<br/>土曜日：9:00～12:00（進学コース課外）
            </p>
          </li>
          <li class="tour-li">
            <h3 class="h3">部活動（運動部）</h3>
            <p class="img"><img src="{{ asset('img/pc/exam/tour/02.jpg') }}" alt=""></p>
            <p class="info">
              平日：16:00以降<br/>土日：部活による
            </p>
          </li>
        </ul>

        <p class="button ora">
          <a href="/request">学校見学のお申し込みはこちら</a>
        </p>

      </div>
    </div>
  </div>

@endsection
