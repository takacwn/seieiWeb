@extends('layout')

@section('content')

  <div id="page-top">

    <div class="control-wrapper">
    @include('menu')
    @include('header')


    <!-- key visual  -->
      <div id="main">
        <div class="slider-wrapper">

          <div class="copy">
            <p class="read"><img src="{{ asset('img/pc/top/main/copy.png') }}" width="90%" alt=""></p>
            <p class="hidden"><img src="{{ asset('img/pc/top/main/01.jpg') }}" width="90%" alt=""></p>
          </div>

          <div class="slider">
            <p><img src="{{ asset('img/pc/top/main/01.jpg') }}" width="100%" alt=""></p>
            <p><img src="{{ asset('img/pc/top/main/02.jpg') }}" width="100%" alt=""></p>
            <p><img src="{{ asset('img/pc/top/main/03.jpg') }}" width="100%" alt=""></p>
            <p><img src="{{ asset('img/pc/top/main/04.jpg') }}" width="100%" alt=""></p>
            <p><img src="{{ asset('img/pc/top/main/05.jpg') }}" width="100%" alt=""></p>
          </div>

        </div>

        <div class="banner-wrapper">
          <div class="banners">
            <div class="banner">
              <p><a href="/blog/blog/2019/08/27/%e8%aa%a0%e8%8b%b1%e9%ab%98%e7%ad%89%e5%ad%a6%e6%a0%a1%e3%82%aa%e3%83%bc%e3%83%97%e3%83%b3%e3%82%ad%e3%83%a3%e3%83%b3%e3%83%91%e3%82%b9%e4%b8%ad%e6%ad%a2%e3%81%ae%e3%81%8a%e7%9f%a5%e3%82%89%e3%81%9b/"><img src="{{ asset('img/pc/banner/09.png') }}" width="100%" alt=""></a></p>
            </div>
            <!--div class="banner2">
              <p><a href="{{ asset('pdf/ExperienceBaseball.pdf') }}" target="_blank"><img src="{{ asset('img/pc/banner/07.png') }}" width="100%" alt=""></a></p>
            </div -->
            <!-- <div class="banner2">
              <p><a href="https://forms.gle/bweeVkgZ88bsz7xj8"><img src="{{ asset('img/pc/banner/baseballKesseki2.png') }}" width="100%" alt=""></a></p>
            </div> -->

            <!-- <div class="banner">
              <p><a href="/exam/explanation/"><img src="{{ asset('img/pc/banner/04.png') }}" width="100%" alt=""></a></p>
            </div>

            <div class="banner2">
              <p><a href="/recruit/"><img src="{{ asset('img/pc/banner/06.png') }}" width="100%" alt=""></a></p>
            </div> -->


          <!-- <div class="banner3">
            <p><a href="/exam/points/"><img src="{{ asset('img/sp/banner/033.png') }}" width="100%" alt=""></a></p>
          </div> -->
        </div>

      </div>

    </div>


    <div class="control-wrapper">

      <div id="news" class="wrapper">
        <div class="content-block">
          <h3 class="title">お知らせ・最新情報（<a href="/blog/">一覧はこちら</a>）</h3>
          <p class="small-line"></p>
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


    </div>

    <div class="control-wrapper">
      <div id="guide">
        <div class="content-block category-index">

          <h3 class="h3">
              <a href="about/"><img src="{{ asset('img/pc/arrow_right.png') }}" class="arrow-right" alt="">学校案内</a>
          </h3>

          <p class="htxt">90年以上の歴史を誇る誠英高校では自由でのびやかな校風のもと、「至誠一貫」の精神で何事も主体的に捉え、取り組む人格を育んでまいります。
          </p>

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
                      <img src="{{ asset('img/pc/arrow.png') }}" class="arrow" alt="">校訓・教育方針
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
                    <img src="{{ asset('img/pc/arrow.png') }}" class="arrow" alt="">校章・校歌
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


    <div class="control-wrapper">
      <div id="life">
        <div class="content-block">
          <h3 class="h3">
              <a href="school/"><img src="{{ asset('img/pc/arrow_right.png') }}" class="arrow-right" alt="">学校生活</a>
          </h3>
        </div>

        <div class="slider-wrapper">
          <div class="al">
            <img src="{{ asset('img/sp/top/arrow-left.png') }}" width="20" alt="">
          </div>
          <div class="ar">
            <img src="{{ asset('img/sp/top/arrow-right.png') }}" width="20" alt="">
          </div>

          <div class="inner wrapper">

            <div class="sul">
              <div class="sli">
                <p class="vs">
                  <img src="{{ asset('img/pc/top/life/cal/04.jpg') }}" alt="">
                </p>
                <div class="info">
                  <div class="left">
                    <div class="label_j">4月</div>
                  </div>
                  <div class="right">
                    <div class="sch">
                      入学式／始業式／新入生オリエンテーション／学友区会／健康診断
                    </div>
                  </div>
                </div>
              </div>
              <div class="sli">
                <p class="vs">
                  <img src="{{ asset('img/pc/top/life/cal/05.jpg') }}" alt="">
                </p>
                <div class="info">
                  <div class="left">
                    <div class="label_j">5月</div>
                  </div>
                  <div class="right">
                    <div class="sch">
                      中間考査／育友会総会／教育後援会総会／県総合体育大会
                    </div>
                  </div>
                </div>
              </div>
              <div class="sli">
                <p class="vs">
                  <img src="{{ asset('img/pc/top/life/cal/06.jpg') }}" alt="">
                </p>
                <div class="info">
                  <div class="left">
                    <div class="label_j">6月</div>
                  </div>
                  <div class="right">
                    <div class="sch">
                      誠英祭（文化祭）／県高校総合文化祭／生徒総会／進学ガイダンス／教育実習
                    </div>
                  </div>
                </div>
              </div>
              <div class="sli">
                <p class="vs">
                  <img src="{{ asset('img/pc/top/life/cal/07.jpg') }}" alt="">
                </p>
                <div class="info">
                  <div class="left">
                    <div class="label_j">7月</div>
                  </div>
                  <div class="right">
                    <div class="sch">
                      期末考査／全国高校総合体育大会／クラスマッチ／クリーン作戦／保護者会／終業式
                    </div>
                  </div>
                </div>
              </div>
              <div class="sli">
                <p class="vs">
                  <img src="{{ asset('img/pc/top/life/cal/08.jpg') }}" alt="">
                </p>
                <div class="info">
                  <div class="left">
                    <div class="label_j">8月</div>
                  </div>
                  <div class="right">
                    <div class="sch">
                      オープンキャンパス／全国高校総合文化祭／インターンシップ
                    </div>
                  </div>
                </div>
              </div>
              <div class="sli">
                <p class="vs">
                  <img src="{{ asset('img/pc/top/life/cal/09.jpg') }}" alt="">
                </p>
                <div class="info">
                  <div class="left">
                    <div class="label_j">9月</div>
                  </div>
                  <div class="right">
                    <div class="sch">
                      始業式／運動会／防災訓練／教育実習
                    </div>
                  </div>
                </div>
              </div>
              <div class="sli">
                <p class="vs">
                  <img src="{{ asset('img/pc/top/life/cal/10.jpg') }}" alt="">
                </p>
                <div class="info">
                  <div class="left">
                    <div class="label_j">10月</div>
                  </div>
                  <div class="right">
                    <div class="sch">
                      中間考査／国民体育大会
                    </div>
                  </div>
                </div>
              </div>
              <div class="sli">
                <p class="vs">
                  <img src="{{ asset('img/pc/top/life/cal/11.jpg') }}" alt="">
                </p>
                <div class="info">
                  <div class="left">
                    <div class="label_j">11月</div>
                  </div>
                  <div class="right">
                    <div class="sch">
                      期末考査／生徒会役員選挙
                    </div>
                  </div>
                </div>
              </div>
              <div class="sli">
                <p class="vs">
                  <img src="{{ asset('img/pc/top/life/cal/12.jpg') }}" alt="">
                </p>
                <div class="info">
                  <div class="left">
                    <div class="label_j">12月</div>
                  </div>
                  <div class="right">
                    <div class="sch">
                      終業式
                    </div>
                  </div>
                </div>
              </div>
              <div class="sli">
                <p class="vs">
                  <img src="{{ asset('img/pc/top/life/cal/01.jpg') }}" alt="">
                </p>
                <div class="info">
                  <div class="left">
                    <div class="label_j">1月</div>
                  </div>
                  <div class="right">
                    <div class="sch">
                      始業式／卒業考査（3年生）／推薦入試／一般入試（1次）
                    </div>
                  </div>
                </div>
              </div>
              <div class="sli">
                <p class="vs">
                  <img src="{{ asset('img/pc/top/life/cal/02.jpg') }}" alt="">
                </p>
                <div class="info">
                  <div class="left">
                    <div class="label_j">2月</div>
                  </div>
                  <div class="right">
                    <div class="sch">
                      修学旅行（2年生）／3年家庭学習
                    </div>
                  </div>
                </div>
              </div>
              <div class="sli">
                <p class="vs">
                  <img src="{{ asset('img/pc/top/life/cal/03.jpg') }}" alt="">
                </p>
                <div class="info">
                  <div class="left">
                    <div class="label_j">3月</div>
                  </div>
                  <div class="right">
                    <div class="sch">
                      賞品・賞状授与式／卒業式／学年末考査／一般入試（2次）
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="content-block category-index">
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



    <div class="control-wrapper">
      <div id="gakka">
        <div class="content-block category-index">
          <h3 class="h3">
              <a href="course/"><img src="{{ asset('img/pc/arrow_right.png') }}" class="arrow-right" alt="">学科・コース案内</a>
          </h3>

          <div class="wrapper">
            <p class="read">
              特徵的なコースを設けることで、一人ひとりの才能を伸ばし、将来につながる学びを。各コースで広く深い基礎学力を培っていきます。</p>
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

    <div class="control-wrapper">
      <div id="shiken">
        <div class="content-block category-index">

          <div class="section">

            <h3 class="h3">
              <a href="exam/"><img src="{{ asset('img/pc/arrow_right.png') }}" class="arrow-right" alt="">入試情報</a>
            </h3>

            <div class="left">
              <p class="txt">受験をお考えの方に向けての各種情報です。<br/>入試に関するお問い合わせは、本校へお電話いただくか、各種説明会にご参加いただき、お気軽にご相談ください。
              </p>


            </div>
          </div>


          <ul class="ul">
            <li class="li middle">
              <a href="/exam/points">
              <div class="wrap">
                <p class="key">
                  <img src="{{ asset('img/pc/top/shiken/01.png') }}" alt="">
                </p>
                <div class="txt-wrap">
                  <p class="txt">
                    <img src="{{ asset('img/pc/arrow.png') }}" class="arrow" alt="">平成31年度 募集要項
                    <!-- <img src="{{ asset('img/pc/arrow.png') }}" class="arrow" alt="">10月下旬頃公開予定 -->
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
                    <img src="{{ asset('img/pc/arrow.png') }}" class="arrow" alt="">オープンキャンパス 2019
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
