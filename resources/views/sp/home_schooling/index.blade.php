@extends('layout')

@section('content')

  <div id="home_schooling" class="control-wrapper top">
  @include('menu')
  @include('header')

  <!-- key visual  -->
    <div id="page-visual">
      <img src="{{ asset('img/sp/home_schooling/visual_top.jpg') }}" width="100%" alt="">
    </div>

    <div id="page-name">
      <div class="inner">
        {{--        <p><img src="{{ asset('img/pc/exam/icon.png') }}" width="40" alt=""></p>--}}
        <p class="icon-title">通信制</p>
      </div>
      <p class="middle-line"></p>
    </div>

    <div class="category-index top">
      <div class="content-block">

        <div class="wrapper">
          <div class="intro">
            <div class="title">
              キミの夢 応援します！
            </div>
            <p class="read">
              「学びたい時に学ぶ意欲のある人へ学習の機会を与える開かれた学校」としてみなさんの未来を応援します。
            </p>
          </div>
        </div>

        <div id="news">
          <h2 class="title">通信制 お知らせ（<a href="/blog/tusin/">一覧はこちら</a>）</h2>

          <div class="wrapper">
            <ul class="news-ul">
              @foreach($news as $row)
                <li class="news-li">
                  <div class="wrap">
                    <p class="date">{{ date('Y.m.d', strtotime($row->date)) }}</p>
                    <p class="news-subject">
                      <a href="{{ $row->link }}">{{ $row->title }}</a></p>
                  </div>
                </li>
              @endforeach
            </ul>
          </div>
          <div class="news-media">
            <div class="news-media-wrapper">
              <div class="thumb-slider">
                @foreach($news as $row)
                  @if($row->img && !preg_match('/pnenoimgs/', $row->img))
                    <p><img src="{{ $row->img }}" alt=""></p>
                  @endif
                @endforeach
              </div>
            </div>
          </div>


        </div>


        <div class="category-index top">
          <div class="content-block">

            <ul class="ul">
              <li class="li homeschooling">
                <a href="/home_schooling/about">
                  <div class="wrap">
                    <p class="key">
                      <img src="{{ asset('img/pc/home_schooling/index/01.jpg') }}" alt=""></p>
                    <p class="txt">
                      <img src="{{ asset('img/pc/arrow.png') }}" class="arrow" alt="">通信制とは
                    </p>
                  </div>
                </a>
              </li>
              <li class="li homeschooling">
                <a href="/home_schooling/way">
                  <div class="wrap">
                    <p class="key">
                      <img src="{{ asset('img/pc/home_schooling/index/02.jpg') }}" alt=""></p>
                    <p class="txt">
                      <img src="{{ asset('img/pc/arrow.png') }}" class="arrow" alt="">学習方法
                    </p>
                  </div>
                </a>
              </li>
              <li class="li homeschooling">
                <a href="/home_schooling/life">
                  <div class="wrap">
                    <p class="key">
                      <img src="{{ asset('img/pc/home_schooling/index/03.jpg') }}" alt=""></p>
                    <p class="txt">
                      <img src="{{ asset('img/pc/arrow.png') }}" class="arrow" alt="">学校生活
                  </div>
                </a>
              </li>

              <li class="li homeschooling">
                <a href="/home_schooling/guide">
                  <div class="wrap">
                    <p class="key">
                      <img src="{{ asset('img/pc/home_schooling/index/04.jpg') }}" alt=""></p>
                    <p class="txt">
                      <img src="{{ asset('img/pc/arrow.png') }}" class="arrow" alt="">入学案内
                    </p>
                  </div>
                </a>
              </li>


            </ul>
          </div>

        </div>

      </div>
    </div>
  </div>

@endsection
