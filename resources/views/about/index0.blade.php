@extends('layout')


@section('content')

  <div id="guide" class="control-wrapper">
  @include('menu')
  @include('header')

  <!-- key visual  -->
    <div id="page-visual" class="wrapper">
      <div class="left">
        <div class="pop">
          <div class="box">
            <div class="inner">
              <p><img src="{{ asset('img/pc/guide/icon.png') }}" alt=""></p>
              <p class="icon-title">学校案内</p>
            </div>
          </div>
          <p><img src="{{ asset('img/pc/guide/bg.png') }}" width="100%" alt=""></p>
        </div>
        <p><img src="{{ asset('img/pc/guide/visual_top01.jpg') }}" width="100%" alt=""></p>
      </div>
      <div class="right">
        <img src="{{ asset('img/pc/guide/visual_top.jpg') }}" width="100%" alt="">
      </div>
    </div>
    <!-- end visual  -->

    <div class="wrapper category-index top">
      <div class="content-block">

        <div class="intro">
          <div class="title">
            「至誠一貫」の精神で人格を育む
          </div>
          <p class="middle-line"></p>

          <p class="read">
            90年以上の歴史を誇る誠英高校では、自由でのびやかな校風のもと、<br/>「至誠一貫」の精神で何事も主体的に捉えて取り組む人格を育んでまいります。
          </p>
        </div>

        <ul class="ul">
          <li class="li middle">
            <a href="/about/message/">
              <div class="wrap">
                <p class="key">
                  <img src="{{ asset('img/pc/top/guide/01.jpg') }}" alt="">
                </p>
                  <p class="txt">
                    <img src="{{ asset('img/pc/arrow.png') }}" class="arrow" alt="">理事長メッセージ
                  </p>
              </div>
            </a>
          </li>
          <li class="li middle">
            <a href="/about/message2/">
              <div class="wrap">
                <p class="key">
                  <img src="{{ asset('img/pc/top/guide/07.jpg') }}" alt="">
                </p>
                  <p class="txt">
                    <img src="{{ asset('img/pc/arrow.png') }}" class="arrow" alt="">校長メッセージ
                  </p>
              </div>
            </a>
          </li>
          <li class="li middle">
            <a href="/about/idea/">
              <div class="wrap">
                <p class="key">
                  <img src="{{ asset('img/pc/top/guide/02.jpg') }}" alt="">
                </p>
                  <p class="txt">
                    <img src="{{ asset('img/pc/arrow.png') }}" class="arrow" alt="">建学の精神・校訓・教育方針
                  </p>
              </div>
            </a>
          </li>
          <li class="li middle">
            <a href="/about/history/">
              <div class="wrap">
                <p class="key">
                  <img src="{{ asset('img/pc/top/guide/03.jpg') }}" alt="">
                </p>
                  <p class="txt">
                    <img src="{{ asset('img/pc/arrow.png') }}" class="arrow" alt="">誠英高等学校の歴史
                  </p>
              </div>
            </a>
          </li>

          <li class="li middle">
            <a href="/about/history-detail/">
              <div class="wrap">
                <p class="key">
                  <img src="{{ asset('img/pc/top/guide/04.jpg') }}" alt="">
                </p>
                <p class="txt">
                  <img src="{{ asset('img/pc/arrow.png') }}" class="arrow" alt="">沿革
                </p>
              </div>
            </a>
          </li>

          <li class="li middle">
            <a href="/about/school/">
              <div class="wrap">
                <p class="key">
                  <img src="{{ asset('img/pc/top/guide/05.jpg') }}" alt="">
                </p>
                <p class="txt">
                  <img src="{{ asset('img/pc/arrow.png') }}" class="arrow" alt="">校章・校歌・応援歌
                </p>
              </div>
            </a>
          </li>

          <li class="li middle">
            <a href="/about/evaluation/">
              <div class="wrap">
                <p class="key">
                  <img src="{{ asset('img/pc/top/guide/06.jpg') }}" alt="">
                </p>
                <p>
                  <img src="{{ asset('img/pc/arrow.png') }}" class="arrow" alt="">学校評価（PDF）
                </p>
              </div>
            </a>
          </li>

        </ul>


      </div>

    </div>

  </div>

@endsection
