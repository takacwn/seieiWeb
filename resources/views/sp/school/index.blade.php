@extends('layout')

@section('content')

  <div id="school" class="control-wrapper">
  @include('menu')
  @include('header')

  <!-- key visual  -->
    <div id="page-visual">
      <img src="{{ asset('img/sp/school/visual_top.jpg') }}" width="100%" alt="">
    </div>

    <div id="page-name">
      <div class="inner">
        <p><img src="{{ asset('img/pc/school/icon.png') }}" width="40" alt=""></p>
        <p class="icon-title">学校生活</p>
      </div>
      <p class="middle-line"></p>
    </div>


    <div class="category-index top">
      <div class="content-block">

        <div class="wrapper">

          <div class="intro">
            <div class="title">
              一人ひとりが主人公として主体的に
            </div>

            <p class="read">四季折々を彩るさまざまな行事。<br/>目的を達成する喜びや他者と協力しあうことの尊さを学んでいきます。

            </p>
          </div>

        </div>


        <ul class="ul">
          <li class="li large">
            <a href="/school/event">
              <div class="wrap">
                <p class="key">
                  <img src="{{ asset('img/pc/top/life/03.jpg') }}" alt=""></p>
                <p class="txt">
                  <img src="{{ asset('img/pc/arrow.png') }}" class="arrow" alt="">年間行事
                </p>
              </div>
            </a>
          </li>

          <li class="li large">
            <a href="/school/club">
              <div class="wrap">
                <p class="key">
                  <img src="{{ asset('img/pc/top/life/02.jpg') }}" alt=""></p>
                <p class="txt">
                  <img src="{{ asset('img/pc/arrow.png') }}" class="arrow" alt="">クラブ活動
                </p>
              </div>
            </a>
          </li>

          <li class="li large">
            <a href="/school/uniform">
              <div class="wrap">
                <p class="key">
                  <img src="{{ asset('img/pc/top/life/01.jpg') }}" alt=""></p>
                <p class="txt">
                  <img src="{{ asset('img/pc/arrow.png') }}" class="arrow" alt="">制服紹介
                </p>
              </div>
            </a>
          </li>
            
          <li class="li large">
            <a href="/school/dream">
              <div class="wrap">
                <p class="key">
                  <img src="{{ asset('img/pc/top/life/04.jpg') }}" alt=""></p>
                <p class="txt">
                  <img src="{{ asset('img/pc/arrow.png') }}" class="arrow" alt="">未来はキミの手の中に
                </p>
              </div>
            </a>
          </li>

        </ul>
      </div>

    </div>

  </div>

@endsection
