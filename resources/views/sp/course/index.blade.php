@extends('layout')


@section('content')

  <div id="course" class="control-wrapper top">
  @include('menu')
  @include('header')

  <!-- key visual  -->
    <div id="page-visual">
      <img src="{{ asset('img/sp/course/visual_top.jpg') }}" width="100%" alt="">
    </div>

    <div id="page-name">
      <div class="inner">
        <p><img src="{{ asset('img/pc/course/icon.png') }}" width="40" alt=""></p>
        <p class="icon-title">学科・コース案内</p>
      </div>
      <p class="middle-line"></p>
    </div>

    <div class="category-index top">
      <div class="content-block">

        <div class="wrapper">
          <div class="intro">
            <div class="title">
              視野を広げ、学ぶ力を伸ばす
            </div>
            <p class="read">
              特徴的なコースを設けることで、一人ひとりの才能を伸ばし、将来につながる学びを。各コースで広く深い基礎学力を培っていきます。</p>
          </div>

        </div>


        <div class="ul-first">

          <ul class="ul">
            <li class="li middle text">
              <a href="/course/support">
                <div class="wrap">
                  <p >センパイを超えてゆけ！</p>
                </div>
              </a>
            </li>

            <li class="li middle">
              <a href="/course/support">
                <div class="wrap">
                  <img src="{{ asset('img/pc/top/gakka/07.jpg') }}" width="100%" alt="">
                </div>
              </a>
            </li>
          </ul>

          <p class="txt">
            <img src="{{ asset('img/pc/arrow.png') }}" class="arrow" alt="">進学・就職サポート
          </p>

        </div>

        <ul class="ul">
          <li class="li middle">
            <a href="/course/special-advance">
              <div class="wrap">
                <p class="key">
                  <img src="{{ asset('img/pc/top/gakka/01.jpg') }}" alt="">
                </p>
                <div class="txt-wrap">
                  <p class="txt">
                    <img src="{{ asset('img/pc/arrow.png') }}" class="arrow" alt="">普通科 特別進学コース
                  </p>
                </div>
              </div>
            </a>
          </li>

          <li class="li middle">
            <a href="/course/life-culture">
              <div class="wrap">
                <p class="key">
                  <img src="{{ asset('img/pc/top/gakka/02.jpg') }}" alt="">
                </p>
                <div class="txt-wrap">
                  <p class="txt">
                    <img src="{{ asset('img/pc/arrow.png') }}" class="arrow" alt="">普通科 生活文化コース<br/>食文化専攻
                  </p>
                </div>
              </div>
            </a>
          </li>

          <li class="li middle">
            <a href="/course/culture">
              <div class="wrap">
                <p class="key">
                  <img src="{{ asset('img/pc/top/gakka/03.jpg') }}" alt="">
                </p>
                <div class="txt-wrap">
                  <p class="txt">
                    <img src="{{ asset('img/pc/arrow.png') }}" class="arrow" alt="">普通科 生活文化コース<br/>生活教養専攻
                  </p>
                </div>
              </div>
            </a>
          </li>
          <li class="li middle">
            <a href="/course/infomation-culture">
              <div class="wrap">
                <p class="key">
                  <img src="{{ asset('img/pc/top/gakka/04.jpg') }}" alt="">
                </p>
                <div class="txt-wrap">
                  <p class="txt">
                    <img src="{{ asset('img/pc/arrow.png') }}" class="arrow" alt="">普通科 情報文化コース
                  </p>
                </div>
              </div>
            </a>
          </li>

          <li class="li middle">
            <a href="/course/infomation-finance">
              <div class="wrap">
                <p class="key">
                  <img src="{{ asset('img/pc/top/gakka/05.jpg') }}" alt="">
                </p>
                <p class="txt">
                  <img src="{{ asset('img/pc/arrow.png') }}" class="arrow" alt="">情報会計科
                </p>
              </div>
            </a>
          </li>

          <li class="li">
            <a href="/course/welfare/">
              <div class="wrap">
                <p class="key">
                  <img src="{{ asset('img/pc/top/gakka/06.jpg') }}" alt="">
                </p>
                <p class="txt">
                  <img src="{{ asset('img/pc/arrow.png') }}" class="arrow" alt="">福祉科
                </p>
              </div>
            </a>
          </li>
        </ul>

      </div>

    </div>

  </div>

@endsection
