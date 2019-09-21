@extends('layout')

@section('content')

  <div id="exam" class="control-wrapper top">
  @include('menu')
  @include('header')

  <!-- key visual  -->
    <div id="page-visual">
      <img src="{{ asset('img/sp/exam/visual_top.jpg') }}" width="100%" alt="">
    </div>

    <div id="page-name">
      <div class="inner">
        <p><img src="{{ asset('img/pc/exam/icon.png') }}" width="40" alt=""></p>
        <p class="icon-title">入試情報</p>
      </div>
      <p class="middle-line"></p>
    </div>

    <div class="category-index top">
      <div class="content-block">

        <div class="wrapper">

          <div class="intro">
            <div class="title">
              受験をお考えのみなさまへ
            </div>

            <p class="read">
              受験をお考えのみなさまとその保護者の方に向けた各種情報です。<br/>入試に関するお問い合わせは、本校へお電話いただくか、各種説明会にご参加いただき、お気軽にご相談ください。</p>
          </div>

        </div>

        <div id="news">
          <h2 class="title">お知らせ・最新情報</h2>
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
        </div>

        <div class="category">

          <ul class="ul">
            <li class="li middle">
              <a href="/exam/points">
              <div class="wrap">
                <p class="key">
                  <img src="{{ asset('img/pc/top/shiken/01.png') }}" alt="">
                </p>
                <div class="txt-wrap">
                  <p class="txt">
                    <img src="{{ asset('img/pc/arrow.png') }}" class="arrow" alt="">平成30年度 募集要項
                  </p>
                </div>
              </div>
              </a>
            </li>

            <li class="li middle">
              <a href="/exam/tour">
                <div class="wrap">
                  <p class="key">
                    <img src="{{ asset('img/pc/top/shiken/02.jpg') }}" alt="">
                  </p>
                  <div class="txt-wrap">
                    <p class="txt">
                      <img src="{{ asset('img/pc/arrow.png') }}" class="arrow" alt="">学校説明会・見学お申し込み
                    </p>
                  </div>
                </div>
              </a>
            </li>


            <li class="li middle">
              <a href="/exam/open">
                <div class="wrap">
                  <p class="key">
                    <img src="{{ asset('img/pc/top/shiken/04.jpg') }}" alt="">
                  </p>
                  <p class="txt">
                    <img src="{{ asset('img/pc/arrow.png') }}" class="arrow" alt="">オープンキャンパス2018
                  </p>
                </div>
              </a>
            </li>

          </ul>

        </div>

      </div>
    </div>
  </div>

@endsection
