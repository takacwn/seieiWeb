@extends('layout')

@section('content')

  @unless($open)
    <div class="page-intro">
      <div class="wrap">
        <p class="copy"><img src="{{ asset('img/pc/top/intro_copy.png') }}" alt=""></p>
        <p class="read">
          果てしなく大きな夢を見よう。<br/>
          志を抱いたその日から誠意をもって打ち込めば<br/>
          思い描く未来は、いつか必ず、キミの手のなかに。
        </p>
        <p><a href="#" class="start"><img src="{{ asset('img/pc/top/arrow.png') }}" alt=""></a></p>
      </div>
    </div>
  @endunless


  <div id="page-top">

    <div class="control-wrapper">
    @include('menu')
    @include('header')


    <!-- key visual  -->
      <div id="main" class="wrapper">
        <div class="slider-wrapper">



          <!-- <div class="banner">
            <p><a href="/exam/explanation"><img src="{{ asset('img/pc/banner/04.png') }}" alt=""></a></p>
          </div>
          <div class="banner2">
			         <p><a href="/exam/points"><img src="{{ asset('img/pc/banner/08.png') }}" alt=""></a></p>
          </div>
          <div class="banner3">
               <p><a href="/recruit"><img src="{{ asset('img/pc/banner/06.png') }}" alt=""></a></p>
          </div> -->
          <div class="banner">
			         <p><a href="/blog/blog/2019/08/27/%e8%aa%a0%e8%8b%b1%e9%ab%98%e7%ad%89%e5%ad%a6%e6%a0%a1%e3%82%aa%e3%83%bc%e3%83%97%e3%83%b3%e3%82%ad%e3%83%a3%e3%83%b3%e3%83%91%e3%82%b9%e4%b8%ad%e6%ad%a2%e3%81%ae%e3%81%8a%e7%9f%a5%e3%82%89%e3%81%9b/"><img src="{{ asset('img/pc/banner/09.png') }}" alt=""></a></p>
          </div>
          <!--div class="banner2">
              <p><a href="{{ asset('pdf/oc_baseballclub.pdf') }}" target="_blank"><img src="{{ asset('img/pc/banner/07.png') }}" alt=""></a></p>
          </div-->
          <!-- <div class="banner3">
               <p><a href="https://forms.gle/bweeVkgZ88bsz7xj8"><img src="{{ asset('img/pc/banner/baseballKesseki2.png') }}" alt=""></a></p>
          </div> -->


          <div class="copy">
            <p class="read"><img src="{{ asset('img/pc/top/main/copy.png') }}" alt=""></p>
            <p class="hidden"><img src="{{ asset('img/pc/top/main/01.jpg') }}" width="100%" alt=""></p>
          </div>

          <div class="slider">
            <p><img src="{{ asset('img/pc/top/main/01.jpg') }}" width="100%" alt=""></p>
            <p><img src="{{ asset('img/pc/top/main/02.jpg') }}" width="100%" alt=""></p>
            <p><img src="{{ asset('img/pc/top/main/03.jpg') }}" width="100%" alt=""></p>
            <p><img src="{{ asset('img/pc/top/main/04.jpg') }}" width="100%" alt=""></p>
            <p><img src="{{ asset('img/pc/top/main/05.jpg') }}" width="100%" alt=""></p>
          </div>

        </div>

        <ul class="thumbs">
          <li class="li active"><p class="cover"></p><img src="{{ asset('img/pc/top/main/s_01.jpg') }}" alt=""></li>
          <li class="li"><p class="cover"></p><img src="{{ asset('img/pc/top/main/s_02.jpg') }}" alt=""></li>
          <li class="li"><p class="cover"></p><img src="{{ asset('img/pc/top/main/s_03.jpg') }}" alt=""></li>
          <li class="li"><p class="cover"></p><img src="{{ asset('img/pc/top/main/s_04.jpg') }}" alt=""></li>
          <li class="li"><p class="cover"></p><img src="{{ asset('img/pc/top/main/s_05.jpg') }}" alt=""></li>
        </ul>

      </div>

    </div>


    <div class="control-wrapper">

      <div id="news" class="wrapper">
        <div class="content-block">
          <h2 class="title">お知らせ・最新情報（<a href="/blog/">一覧はこちら</a>）</h2>
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
      </div>


    </div>

    <div class="control-wrapper">
      <div id="guide" class="wrapper">
        <div class="wide-line-left"></div>
        <div class="content-block category-index">
          <h3 class="h3">
              <a href="about/"><img src="{{ asset('img/pc/arrow_right.png') }}" class="arrow-right" alt="">学校案内</a>
          </h3>

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
      <div id="history" class="wrapper">
        <div class="content-block">
          <p class="img-title">
            <img src="{{ asset('img/pc/top/history/title.png') }}" alt=""></p>
          <div class="section">
            <div class="left">
              <p class="h01">
                <img src="{{ asset('img/pc/top/history/01.jpg') }}" alt=""></p>
              <p class="txt">90年以上の歴史を誇る誠英高校では自由でのびやかな校風の<br />
                  もと、「至誠一貫」の精神で何事も主体的に捉え、<br />
                  取り組む人格を育んでまいります。
              </p>
            </div>
            <div class="right">
              <p class="h02">
                <img src="{{ asset('img/pc/top/history/02.jpg') }}" alt=""></p>
              <p class="h03">
                <img src="{{ asset('img/pc/top/history/03.jpg') }}" alt=""></p>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="control-wrapper">
      <div id="life" class="wrapper">

        <div class="wide-line-right"></div>

        <div class="content-block up">
          <h3 class="h3">
              <a href="school/"><img src="{{ asset('img/pc/arrow_right.png') }}" class="arrow-right" alt="">学校生活</a>
          </h3>
        </div>

        <div class="slider-wrapper">
          <div class="al">
            <img src="{{ asset('img/pc/top/life/cal/arrow-left.png') }}" alt="">
          </div>
          <div class="ar">
            <img src="{{ asset('img/pc/top/life/cal/arrow-right.png') }}" alt="">
          </div>

          <div class="inner wrapper">

            <div class="sul">
              <div class="sli">
                <p class="vs">
                  <img src="{{ asset('img/pc/top/life/cal/04.jpg') }}" alt="">
                </p>
                <div class="info">
                  <div class="left">
                    <div class="label">April</div>
                    <div class="label_j">4月</div>
                  </div>
                  <div class="right">
                    <div class="sch">
                      ・入学式<br>・始業式<br>・新入生オリエンテーション<br>・学友区会<br>・健康診断
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
                    <div class="label">May</div>
                    <div class="label_j">5月</div>
                  </div>
                  <div class="right">
                    <div class="sch">
                      ・中間考査<br>・育友会総会<br>・教育後援会総会<br>・県総合体育大会
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
                    <div class="label">June</div>
                    <div class="label_j">6月</div>
                  </div>
                  <div class="right">
                    <div class="sch">
                      ・誠英祭（文化祭）<br>・県高校総合文化祭<br>・生徒総会<br>・進学ガイダンス<br>・教育実習
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
                    <div class="label">July</div>
                    <div class="label_j">7月</div>
                  </div>
                  <div class="right">
                    <div class="sch">
                      ・期末考査<br>・全国高校総合体育大会<br>・クラスマッチ<br>・クリーン作戦<br>・保護者会<br>・終業式
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
                    <div class="label">August</div>
                    <div class="label_j">8月</div>
                  </div>
                  <div class="right">
                    <div class="sch">
                      ・オープンキャンパス<br>・全国高校総合文化祭<br>・インターンシップ
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
                    <div class="label">September</div>
                    <div class="label_j">9月</div>
                  </div>
                  <div class="right">
                    <div class="sch">
                      ・始業式<br>・運動会<br>・防災訓練<br>・教育実習
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
                    <div class="label">October</div>
                    <div class="label_j">10月</div>
                  </div>
                  <div class="right">
                    <div class="sch">
                      ・中間考査<br>・国民体育大会
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
                    <div class="label">November</div>
                    <div class="label_j">11月</div>
                  </div>
                  <div class="right">
                    <div class="sch">
                      ・期末考査<br>・生徒会役員選挙
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
                    <div class="label">December</div>
                    <div class="label_j">12月</div>
                  </div>
                  <div class="right">
                    <div class="sch">
                      ・終業式
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
                    <div class="label">January</div>
                    <div class="label_j">1月</div>
                  </div>
                  <div class="right">
                    <div class="sch">
                      ・始業式<br>・卒業考査（3年生）<br>・推薦入試<br>・一般入試（1次）
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
                    <div class="label">February</div>
                    <div class="label_j">2月</div>
                  </div>
                  <div class="right">
                    <div class="sch">
                      ・修学旅行（2年生）<br>・3年家庭学習
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
                     <div class="label">March</div>
                    <div class="label_j">3月</div>
                  </div>
                  <div class="right">
                    <div class="sch">
                      ・賞品・賞状授与式<br>・卒業式<br>・学年末考査<br>・一般入試（2次）
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
      <div id="dream" class="wrapper">

        <div class="content-block">
          <p class="img-title">
            <img src="{{ asset('img/pc/top/dream/title.png') }}" alt=""></p>
          <div class="section">
            <div class="left">
              <p class="d01">
                <img src="{{ asset('img/pc/top/dream/01.jpg') }}" alt=""></p>
              <p class="d02">
                <img src="{{ asset('img/pc/top/dream/02.jpg') }}" alt=""></p>
            </div>
            <div class="right">
              <p class="d03">
                <img src="{{ asset('img/pc/top/dream/03.jpg') }}" alt=""></p>
              <p class="txt">特徵的なコースを設けることで、<br/>一人ひとりの才能を伸ばし、将来につながる学びを。<br/>各コースで広く深い基礎学力を培っていきます。
              </p>
            </div>
          </div>
        </div>

      </div>
    </div>


    <div class="control-wrapper">
      <div id="gakka" class="wrapper">
        <div class="wide-line-left"></div>
        <div class="content-block category-index">
          <h3 class="h3">
              <a href="course/"><img src="{{ asset('img/pc/arrow_right.png') }}" class="arrow-right" alt="">学科・コース案内</a>
          </h3>

          <div class="flow">
            <div class="flow-left">
              <h4 class="title h4">進学サポート特別メニュー</h4>
              <p class="sub">一人ひとりをしっかりと見つめ進路選びをサポートし、生徒のやる気に応えます。</p>
              <h4 class="title h4">就職サポート特別メニュー</h4>
              <p class="sub">高校生活は社会に出る前の大切なステップです。じっくりと納得のいくまで、一緒に考え、しっかりと準備をしましょう。社会へと大きく羽ばたけるよう、サポートします。</p>
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

    <div class="control-wrapper">
      <div id="shiken" class="wrapper">
        <div class="wide-line-right"></div>
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
                        <p class="txt">
                          <img src="{{ asset('img/pc/arrow.png') }}" class="arrow" alt="">平成31年度 募集要項
                          <!-- <img src="{{ asset('img/pc/arrow.png') }}" class="arrow" alt="">10月下旬頃公開予定 -->
                        </p>
                    </div>
                  </a>
                </li>

                <li class="li middle">
                  <a href="/exam/tour">
                    <div class="wrap">
                      <p class="key">
                        <img src="{{ asset('img/pc/top/shiken/02.jpg') }}" alt="">
                      </p>
                        <p class="txt">
                          <img src="{{ asset('img/pc/arrow.png') }}" class="arrow" alt="">学校説明会・見学お申し込み
                        </p>
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
