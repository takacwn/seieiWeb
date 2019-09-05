@extends('layout')


@section('content')

  <div id="course" class="control-wrapper">
  @include('menu')
  @include('header')

  <!-- key visual  -->
    <div id="page-visual" class="wrapper">
      <div class="left">
        <div class="pop">
          <div class="box">
            <div class="inner">
              <p><img src="{{ asset('img/pc/course/icon.png') }}" alt=""></p>
              <p class="icon-title">学科・コース案内</p>
            </div>
          </div>
          <p><img src="{{ asset('img/pc/guide/bg.png') }}" width="100%" alt=""></p>
        </div>
        <p><img src="{{ asset('img/pc/course/visual_top01.jpg') }}" width="100%" alt=""></p>
      </div>
      <div class="right">
        <img src="{{ asset('img/pc/course/visual_top.jpg') }}" width="100%" alt="">
      </div>
    </div>

    <div class="wrapper category-index top">
      <div class="content-block">

        <div class="intro">
          <div class="title">
            視野を広げ、学ぶ力を伸ばす
          </div>
          <p class="middle-line"></p>

          <p class="read">
            特徴的なコースを設けることで、一人ひとりの才能を伸ばし、将来につながる学びを。<br/>各コースで広く深い基礎学力を培っていきます。</p>
        </div>


        <div class="flow">
          <div class="flow-left">
            <h4 class="title h4">進学サポート特別メニュー</h4>
            <p class="sub">一人ひとりをしっかり見つめ進路選びをサポートし、生徒のやる気に応えます。</p>
            <h4 class="title h4">就職サポート特別メニュー</h4>
            <p class="sub">社会に出る前の大切なステップをじっくりと納得のいくまで、一緒に考え、<br/>
              しっかりと準備をして、多種多様な社会へと大きく羽ばたく君の夢をサポートします。</p>
          </div>

          <div class="flow-right">
            <div class="li middle">
              <a href="/course/support">
                <div class="wrap">
                  <p class="key">
                    <img src="{{ asset('img/pc/top/gakka/07.jpg') }}" alt="">
                  </p>
                    <p class="txt">
                      <img src="{{ asset('img/pc/arrow.png') }}" class="arrow" alt="">進学・就職サポート
                    </p>
                </div>
              </a>
            </div>
          </div>
        </div>


        <ul class="ul">
          <li class="li middle">
            <a href="/course/special-advance">
              <div class="wrap">
                <p class="key">
                  <img src="{{ asset('img/pc/top/gakka/01.jpg') }}" alt="">
                </p>
                  <p class="txt">
                    <img src="{{ asset('img/pc/arrow.png') }}" class="arrow" alt="">普通科 特別進学コース
                  </p>
              </div>
            </a>
          </li>

          <li class="li middle">
            <a href="/course/life-culture">
              <div class="wrap">
                <p class="key">
                  <img src="{{ asset('img/pc/top/gakka/02.jpg') }}" alt="">
                </p>
                  <p>
                    <img src="{{ asset('img/pc/arrow.png') }}" class="arrow" alt="">普通科 生活文化コース・食文化専攻
                  </p>
              </div>
            </a>
          </li>

          <li class="li middle">
            <a href="/course/culture">
              <div class="wrap">
                <p class="key">
                  <img src="{{ asset('img/pc/top/gakka/03.jpg') }}" alt="">
                </p>
                  <p>
                    <img src="{{ asset('img/pc/arrow.png') }}" class="arrow" alt="">普通科 生活文化コース・生活教養専攻
                  </p>
              </div>
            </a>
          </li>
          <li class="li middle">
            <a href="/course/infomation-culture">
              <div class="wrap">
                <p class="key">
                  <img src="{{ asset('img/pc/top/gakka/04.jpg') }}" alt="">
                </p>
                  <p class="txt">
                    <img src="{{ asset('img/pc/arrow.png') }}" class="arrow" alt="">普通科 情報文化コース
                  </p>
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
