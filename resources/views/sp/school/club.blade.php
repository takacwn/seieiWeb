@extends('layout')

@section('content')

  <div id="school" class="control-wrapper club">
  @include('menu')
  @include('header')


  <!-- key visual  -->
    <div id="page-visual">
      <div class="visual">
        <img src="{{ asset('img/sp/school/club/main.jpg') }}" width="100%" alt="">
      </div>
    </div>
    <!-- end key visual -->


    <div id="page-name">
      <div class="inner">
        <p><img src="{{ asset('img/pc/school/icon.png') }}" width="40" alt=""></p>
        <p class="icon-title"><span>学校生活</span><br/>クラブ活動</p>
      </div>
      <p class="middle-line"></p>
    </div>

    <div class="wrapper">
      <div class="cnt-detail content-block">


        <div class="cnt-section">

          <h3 class="title">運動部</h3>
          <p class="middle-line small m15"></p>

          <div class="desc">

            <p class="banner">
              <a href="/school/club/baseball"><img src="{{ asset('/img/pc/school/club/banner.jpg') }}" width="100%" alt=""></a></p>

            <ul class="ul">
              <li class="li">
                <div class="cat">

                  <div class="cat-sec">
                    <div class="cat-photo">
                      <img src="{{ asset('/img/pc/school/club/01.jpg') }}" alt="">
                    </div>
                    <h3 class="cat-title">女子バレーボール部</h3>
                  </div>

                  <div class="cat-detail">
                    <p>第71回全日本高等学校バレーボール選手権大会 2回戦</p>
                    <p>第73回国民体育大会中国ブロック大会 第3位</p>
                    <p>平成30年度全国高等学校総合体育大会 2回戦</p>
                    <p>第69回山口県高等学校総合体育大会 優勝</p>
                    <p>第70回中国高等学校バレーボール選手権大会 優勝</p>
                    <p>第70回全日本高等学校バレーボール選手権大会 第3位</p>
                    <p>第72回国民体育大会 第8位</p>
                    <p>第72回国民体育大会中国ブロック大会 優勝</p>
                    <p>平成29年度全国高等学校総合体育大会 準優勝</p>
                    <p>第68回山口県高等学校総合体育大会 優勝</p>
                    <p>第69回中国高等学校バレーボール選手権大会 優勝</p>
                  </div>

                  <div class="button-link">
                    <a href="/school/club/info_volleyball"><img src="{{ asset('img/pc/arrow.png') }}" class="arrow" alt="">詳しい活動実績はこちら</a>
                  </div>

                  <div class="button-link">
                    <a href="/school/club/volleyball"><img src="{{ asset('img/pc/arrow.png') }}" class="arrow" alt="">女子バレーボール部
                      指導者インタビュー</a>
                  </div>

                </div>
              </li>
              <li class="li">
                <div class="cat">

                  <div class="cat-sec">
                    <div class="cat-photo">
                      <img src="{{ asset('/img/pc/school/club/02.jpg') }}" alt="">
                    </div>
                    <h3 class="cat-title">男子バスケットボール部</h3>
                  </div>

                  <div class="cat-detail">
                    <p>平成30年度山口県高等学校バスケットボール新人大会<br/>ベスト10</p>
                    <p>第71回全国高等学校バスケットボール選手権大会<br/>山口県予選会 ベスト8</p>
                    <p>第69回山口県高等学校総合体育大会 ベスト4</p>
                    <p>第62回中国高等学校バスケットボール選手権大会 出場</p>
                    <p>第62回中国高等学校バスケットボール選手権大会<br/>山口県予選会 第3位</p>
                    <p>平成29年度山口県高等学校バスケットボール新人大会 出場</p>
                    <p>第30回tys杯高校バスケットボール選手権大会 第5位</p>
                    <p>第70回全国高等学校選抜優勝大会山口県予選会ベスト8</p>
                    <p>第68回山口県高等学校総合体育大会 ベスト8</p>
                  </div>
                </div>
              </li>
              <li class="li">
                <div class="cat">

                  <div class="cat-sec">
                    <div class="cat-photo">
                      <img src="{{ asset('/img/pc/school/club/03.jpg') }}" alt="">
                    </div>
                    <h3 class="cat-title">女子バスケットボール部</h3>
                  </div>

                  <div class="cat-detail">
                    <p>平成30年度山口県高等学校バスケットボール新人大会<br/>第5位</p>
                    <p>第71回全国高等学校バスケットボール選手権大会<br/>山口県予選会 ベスト4</p>
                    <p>第69回山口県高等学校総合体育大会 ベスト4</p>
                    <p>第62回中国高等学校バスケットボール選手権大会 出場</p>
                    <p>第62回中国高等学校バスケットボール選手権大会<br/>山口県予選会 第3位</p>
                    <p>平成29年度山口県高等学校バスケットボール新人大会<br/>第4位</p>
                    <p>第30回tys杯高校バスケットボール選手権大会 準優勝</p>
                    <p>第70回全国高等学校選抜優勝大会山口県予選会ベスト8</p>
                    <p>第68回山口県高等学校総合体育大会 3回戦</p>
                    <p>第61回中国高等学校バスケットボール選手権大会 出場</p>
                    <p>第61回中国高等学校バスケットボール選手権大会<br/>山口県予選会 第4位</p>
                  </div>
                </div>
              </li>
            </ul>

            <ul class="ul">

              <li class="li">
                <div class="cat">

                  <div class="cat-sec">
                    <div class="cat-photo">
                      <img src="{{ asset('/img/pc/school/club/04.jpg') }}" alt="">
                    </div>
                    <h3 class="cat-title">陸上競技部</h3>
                  </div>

                  <div class="cat-detail">
                    <p>平成30年度山口県体育大会<br/>男子 200m 第1位、4×100mR 第2位、
                      <br/>110mH 3000mSC 第3位、走高跳 第8位、<br/>総合 第8位
                      <br/>女子 走高跳 第3位、走幅跳 三段跳 第8位</p>
                    <p>第73回国民体育大会<br/>男子 少年Ｂ100m 4×100mR 出場</p>
                    <p>山口県高等学校新人陸上競技大会<br/>男子 100m 400m 110mH 第4位、走高跳 第5位、4×100mR 第7位
                      <br/>女子 走高跳 第4位、走高跳 第5位、<br/>4×100mR 第7位、200m 走幅跳 三段跳 第8位</p>
                    <p>第72回中国五県陸上競技対抗選手権大会<br/>男子 100m 200m 4×100mR 出場
                      <br/>女子 走高跳 走幅跳 三段跳 出場</p>
                    <P>第71回中国高等学校陸上競技対校選手権大会<br/>男子 4×100mR 第7位、200m 110mH 出場
                      <br/>女子 走高跳 三段跳 七種競技 出場</p>
                    <p>第69回山口県高等学校総合体育大会<br/>男子 4×100mR 第2位、200m 第3位、
                      <br/>110mH 第6位、200m 第8位
                      <br/>女子 七種競技 第2位、走高跳 三段跳 第4位、4×100mR 第7位</p>
                    <p>第45回山口県陸上競技選手権大会<br/>男子 4×100mR 第1位、200m 第2位、100m 第8位
                      <br/>女子 三段跳 第3位、走高跳 走幅跳 第7位</p>
                    <p>第26回中国高等学校新人陸上競技対校選手権大会<br/>男子 200m 110mH 4×400mR出場、
                      <br/>4×100mR 第7位
                      <br/>女子 三段跳 出場</p>
                    <p>第71回中国五県陸上競技対抗選手権大会<br/>男子 100m 200m 110mH 4×100mR 4×400mR<br/>出場
                      <br/>女子 4×100mR 出場、三段跳 第13位、やり投 第10位</p>
                    <p>第70回中国高等学校陸上競技対校選手権大会<br/>男子 100m 400m 4×400mR 出場、<br/>4×100mR 準決勝
                    　<br/>女子 100m 4×100mR 準決勝、やり投 第12位、<br/>七種競技 第9位</p>
                  </div>

                   <div class="button-link">
                    <a href="/school/club/info_trackfield"><img src="{{ asset('img/pc/arrow.png') }}" class="arrow" alt="">詳しい活動実績はこちら</a>
                  </div>

                </div>
              </li>
              <li class="li">
                <div class="cat">

                  <div class="cat-sec">
                    <div class="cat-photo">
                      <img src="{{ asset('/img/pc/school/club/05.jpg') }}" alt="">
                    </div>
                    <h3 class="cat-title">自転車競技部</h3>
                  </div>

                  <div class="cat-detail">
                    <p>第73回国民体育大会<br/>ケイリン 個人ロードレース スクラッチ 1kmTT<br/>ポイントレース 4kmチームパシュート 出場</p>
                    <p>平成30年度全国高等学校総合体育大会<br/>スクラッチ 第18位、ロードレース スプリント 出場</p>
                    <p>平成30年度中国高等学校対抗自転車競技選手権大会<br/>スクラッチ 第7位、1kmTT チームスプリント 第8位</p>
                    <p>平成30年度中国高等学校対抗自転車競技道路競争大会 第14位</p>
                    <p>平成29年度全国高等学校総合体育大会<br/>ポイントレース 出場</p>
                    <p>平成29年度中国高等学校対抗自転車競技道路競争大会<br/>第20位</p>
                    <p>第49回中国地域高等学校対抗自転車競技選手権大会<br/>スクラッチ第7位、ポイントレース第7位、
                      <br/>ケイリン第11位</p>
                  </div>
                </div>
              </li>
              <li class="li">
                <div class="cat">

                  <div class="cat-sec">
                    <div class="cat-photo">
                      <img src="{{ asset('/img/pc/school/club/06.jpg') }}" alt="">
                    </div>
                    <h3 class="cat-title">剣道部</h3>
                  </div>

                  <div class="cat-detail">
                    <p>第27回山口県高等学校選抜剣道選手権大会<br/>男子 団体 2回戦</p>
                    <p>平成30年度山口県体育大会<br/>男子 個人 団体 1回戦、女子 個人 2回戦</p>
                    <p>平成30年度山口県高等学校総合体育大会<br/>男子 個人 3回戦、団体 1回戦、女子 個人 2回戦</p>
                    <p>平成30年度中国高等学校剣道選手権大会山口県予選会<br/>男子 個人 3回戦、団体 2回戦、女子 個人 2回戦</p>
                  　<p>第26回山口県高等学校選抜剣道選手権大会<br/>男子 団体 出場</p>
                  　<p>平成29年度山口県体育大会<br/>男子 個人 ベスト16、団体 出場、女子 個人 団体 出場</p>
                  　<p>平成29年度山口県高等学校総合体育大会<br/>男子 個人 団体 出場、女子 個人 団体 出場</p>
                  　<p>平成29年度中国高等学校剣道選手権大会山口県予選会<br/>男子 個人 団体 出場</p>
                  </div>
                </div>
              </li>
            </ul>

            <ul class="ul">

              <li class="li">
                <div class="cat">

                  <div class="cat-sec">
                    <div class="cat-photo">
                      <img src="{{ asset('/img/pc/school/club/07.jpg') }}" alt="">
                    </div>
                    <h3 class="cat-title">男子テニス部</h3>
                  </div>

                  <div class="cat-detail">
                    <p>第12回中国高等学校新人テニス大会 シングルス 2回戦</p>
                    <p>平成30年度山口県体育大会<br/>シングルス 第1位 第8位、ダブルス 第2位、団体 3回戦</p>
                    <p>第108回全国高等学校テニス選手権大会<br/>シングルス 2回戦、団体 1回戦</p>
                    <p>第59回中国高等学校テニス選手権大会<br/>シングルス 3回戦、ダブルス 2回戦、団体 2回戦</p>
                    <p>第69回山口県高等学校総合体育大会<br/>団体 第1位、シングルス 第1位 ベスト8、<br/>ダブルス 第3位</p>
                    <p>第58回中国高等学校テニス選手権大会山口県予選会<br/>シングルス 第1位 ベスト8 ベスト32、ダブルス 3回戦</p>
                    <p>第11回中国高等学校新人テニス大会 シングルス 第5位</p>
                    <p>平成29年度山口県体育大会<br/>団体Ａ 第3位、シングルス 第1位 ベスト16、<br/>ダブルス 出場</p>
                    <p>第107回全国高等学校テニス選手権大会<br/>シングルス 出場</p>
                    <p>第57回中国高等学校テニス選手権大会<br/>団体 出場、シングルス ベスト16</p>
                    <p>第68回山口県高等学校総合体育大会<br/>団体 第5位、シングルス 第2位、ダブルス 出場</p>
                    <p>第57回中国高等学校テニス選手権大会山口県予選会<br/>シングルス 第3位、ダブルス 出場</p>
                  </div>
                </div>
              </li>
              <li class="li">
                <div class="cat">

                  <div class="cat-sec">
                    <div class="cat-photo">
                      <img src="{{ asset('/img/pc/school/club/08.jpg') }}" alt="">
                    </div>
                    <h3 class="cat-title">女子テニス部</h3>
                  </div>

                  <div class="cat-detail">
                    <p>第69回山口県高等学校総合体育大会<br/>シングルス 3回戦、ダブルス 2回戦、団体 3回戦</p>
                    <p>第58回中国高等学校テニス選手権大会山口県予選会<br/>シングルス ベスト32、ダブルス ベスト16</p>
                    <p>第11回中国高等学校新人テニス大会<br/>ダブルス 出場、シングルス ベスト16</p>
                    <p>平成29年度山口県体育大会<br/>団体Ｂ 出場</p>
                    <p>第57回中国高等学校テニス選手権大会 団体 出場</p>
                    <p>第68回山口県高等学校総合体育大会<br/>団体 第3位、ダブルス 出場、シングルス 3回戦</p>
                    <p>第57回中国高等学校テニス選手権大会山口県予選会<br/>ダブルス 3回戦、シングルス ベスト32</p>
                  </div>
                </div>
              </li>
              <li class="li">
                <div class="cat">

                  <div class="cat-sec">
                    <div class="cat-photo">
                      <img src="{{ asset('/img/pc/school/club/09.jpg') }}" alt="">
                    </div>
                    <h3 class="cat-title">卓球部</h3>
                  </div>

                  <div class="cat-detail">
                    <p>第46回全国高等学校選抜卓球大会中国地区予選会<br/>男子 団体 出場</p>
                    <p>平成30年度山口県体育大会<br/>男子 団体 第5位、シングルス ﾍﾞｽﾄ32、ダブルス 4回戦
                      <br/>女子 団体 1回戦、シングルス 3回戦、ダブルス 2回戦</p>
                    <p>平成30年度全日本卓球選手権大会ジュニア県予選<br/>男子 シングルス ﾍﾞｽﾄ16、女子 シングルス 2回戦</p>
                    <p>第65回中国高等学校卓球選手権大会 男子 団体 出場</p>
                    <p>平成30年度山口県高等学校総合体育大会<br/>男子 団体 第7位、女子 団体 1回戦</p>
                    <p>平成30年度全国・中国高等学校卓球選手権大会県予選
                      <br/>男子 シングルス 4回戦、ダブルス ﾍﾞｽﾄ16、<br/>女子 シングルス 4回戦、ダブルス 2回戦</p>
                    <p>第45回全国高等学校選抜卓球大会中国地区予選会<br/>男子 団体 出場</p>
                    <p>平成29年度山口県体育大会<br/>男子 団体 第6位、シングルス ﾍﾞｽﾄ32、ダブルス 4回戦
                    <br/>女子 団体 シングルス ダブルス 出場</p>
                    <p>平成29年度全日本卓球選手権大会ジュニア県予選<br/>男子 シングルス 5回戦、女子 シングルス 出場</p>
                    <p>平成29年度会長杯卓球大会<br/>男子 シングルス 5回戦、女子 シングルス 出場</p>
                    <p>平成29年度山口県高等学校総合体育大会<br/>男子 団体 第7位、女子 団体 出場</p>
                    <p>平成29年度全国・中国高等学校卓球選手権大会県予選
                      <br/>男子 ダブルス 4回戦、シングルス ﾍﾞｽﾄ32、<br/>女子 シングルス ダブルス 出場</p>
                  </div>
                </div>
              </li>
            </ul>
            <ul class="ul">

              <li class="li">
                <div class="cat">

                  <div class="cat-sec">
                    <div class="cat-photo">
                      <img src="{{ asset('/img/pc/school/club/10.jpg') }}" alt="">
                    </div>
                    <h3 class="cat-title">野球部</h3>
                  </div>

                  <div class="cat-detail">
                    <p>平成30年度山口県体育大会地区予選 2回戦</p>
                    <p>平成30年度山口県防徳地区新人高校野球大会 ﾍﾞｽﾄ4
                    <p>第100回全国高等学校野球選手権大会県予選 1回戦</p>
                    <p>平成30年度春季山口県高校野球大会地区予選 1回戦</p>
                    <p>平成29年度山口県体育大会地区予選 出場</p>
                    <p>平成29年度山口県防徳地区新人高校野球大会 出場</p>
                    <p>第99回全国高等学校野球選手権大会県予選 出場</p>
                  </div>
                </div>
              </li>

              <li class="li">
                <div class="cat">

                  <div class="cat-sec">
                    <h3 class="cat-title full">ゴルフ部</h3>
                  </div>

                  <div class="cat-detail">
                    <p>平成30年度第41回山口県高等学校ゴルフ選手権<br/>女子 個人 第3位 第4位 第5位</p>
                    <p>平成30年度第41回山口県ジュニアゴルフ選手権競技<br/>女子 個人 第4位 第5位 第6位</p>
                    <p>平成29年度第20回山口県高等学校ゴルフ選手権<br/>女子 個人 第3位 第4位</p>
                    <p>平成29年度第39回山口県ジュニアゴルフ選手権競技<br/>女子 個人 第2位 第5位 第7位</p>
                    <p>平成29年度第34回中国高等学校ゴルフ選手権競技<br/>女子 団体 第4位</p>
                    <p>平成29年度第23回中国ジュニアゴルフ選手権競技<br/>女子 個人 出場</p>
                    <p>平成29年度第38回山口県ジュニアゴルフ選手権競技<br/>女子 個人 第2位 第4位 第6位</p>
                  </div>
                </div>
              </li>

              <li class="li">
                <div class="cat">

                  <div class="cat-sec">
                    <h3 class="cat-title full">弓道部</h3>
                  </div>

                  <div class="cat-detail">
                    <p>第69回山口県高等学校総合体育大会 男女出場</p>
                    <p>第61回中国高等学校弓道選手権大会県予選 男女出場</p>
                    <p>第36回全国高等学校弓道選抜大会山口県予選 男女出場</p>
                    <p>第68回山口県高等学校総合体育大会 男女出場</p>
                    <p>第60回中国高等学校弓道選手権大会県予選 男女出場</p>
                  </div>
                </div>
              </li>

            </ul>

          </div>
        </div>

        <div class="cnt-section cul">

          <h3 class="title">文化部</h3>
          <p class="middle-line small m15"></p>

          <div class="desc">
            <ul class="ul">
              <li class="li">
                <div class="cat">

                  <div class="cat-sec">
                    <h3 class="cat-title full">インターアクト部</h3>
                  </div>

                  <div class="cat-detail">
                    <p>ゆうあいまつり<br/>国際ロータリー2710地区第40回インターアクト<br/>次年度指導者研修会
                      <br/>薬物乱用撲滅ヤングキャンペーン<br/>山口県立防府総合支援学校サマースクール
                      <br/>第42回インターアクト地区大会<br/>万灯の夕べボランティア
                      <br/>尚歯堂 夏祭り　防府市障害者体育大会<br/>コスモスまつり　成人式ボランティア
                      <br/>青少年ボランティア養成講座</p>
                  </div>
                </div>
              </li>
              <li class="li">
                <div class="cat">

                  <div class="cat-sec">
                    <h3 class="cat-title full">演劇部</h3>
                  </div>

                  <div class="cat-detail">
                    <p>誠英祭 出演</p>
                  </div>
                </div>
              </li>
              <li class="li">
                <div class="cat">

                  <div class="cat-sec">
                    <h3 class="cat-title full">能楽部</h3>
                  </div>

                  <div class="cat-detail">
                    <p>長宗閑祥　秋の会<br/>オープンキャンパス発表<br/>長宗閑祥　新春の会
                    <br/>平成30年度 邦楽の会</p>
                  </div>
                </div>
              </li>
            </ul>

            <ul class="ul">

              <li class="li">
                <div class="cat">

                  <div class="cat-sec">
                    <h3 class="cat-title full">書道部</h3>
                  </div>

                  <div class="cat-detail">
                    <p>書道検定　受験</p>
                    <p>防府天満宮奉納清書展 出展</p>
                  </div>
                </div>
              </li>
              <li class="li">
                <div class="cat">

                  <div class="cat-sec">
                    <h3 class="cat-title full">華道部</h3>
                  </div>

                  <div class="cat-detail">
                    <p>各式典生花</p>
                    <p>誠英祭展示</p>
                  </div>
                </div>
              </li>
              <li class="li">
                <div class="cat">

                  <div class="cat-sec">
                    <h3 class="cat-title full">茶道部</h3>
                  </div>

                  <div class="cat-detail">
                    <p>誠英祭 呈茶<br/>第26回花供養献花式<br/>オープンキャンパス 呈茶<br/>成人式 呈茶</p>
                  </div>
                </div>
              </li>

            </ul>
            <ul class="ul">
              <li class="li">
                <div class="cat">
                  <div class="cat-sec">
                    <h3 class="cat-title full">ペン習字部</h3>
                  </div>

                  <div class="cat-detail">
                    <p>誠英祭作品展示</p>
                  </div>
                </div>
              </li>
              <li class="li">
                <div class="cat">

                  <div class="cat-sec">
                    <h3 class="cat-title full">文芸部</h3>
                  </div>

                  <div class="cat-detail">
                    <p>誠英祭文芸誌 発行</p>
                  </div>
                </div>
              </li>
              <li class="li">
                <div class="cat">

                  <div class="cat-sec">
                    <h3 class="cat-title full">新聞部</h3>
                  </div>

                  <div class="cat-detail">
                    <p>卒業新聞「ひとみ」発行</p>
                  </div>
                </div>
              </li>
            </ul>
            <ul class="ul">

              <li class="li">
                <div class="cat">

                  <div class="cat-sec">
                    <h3 class="cat-title full">商業クラブ</h3>
                  </div>

                  <div class="cat-detail">
                    <p>各種検定試験受験</p>
                  </div>
                </div>
              </li>

              <li class="li">
                <div class="cat">

                  <div class="cat-sec">
                    <h3 class="cat-title full">調理部</h3>
                  </div>

                  <div class="cat-detail">
                    <p>家庭料理の基礎</p>
                  </div>
                </div>
              </li>

              <li class="li">
                <div class="cat">

                  <div class="cat-sec">
                    <h3 class="cat-title full">美術部</h3>
                  </div>

                  <div class="cat-detail">
                    <p>各展覧会出品<br/>瀬戸内デザイングランプリ2017<br/>瀬戸内デザイングランプリ2018<br/>防府市美術展<br/>誠英祭 展示</p>
                  </div>
                </div>
              </li>

            </ul>

            <ul class="ul">

              <li class="li">
                <div class="cat">

                  <div class="cat-sec">
                    <h3 class="cat-title full">ハンドベル同好会</h3>
                  </div>

                  <div class="cat-detail">
                    <p>誠英祭演奏<br/>クリスマス礼拝 演奏</p>

                  </div>
                </div>
              </li>

              <li class="li">
                <div class="cat">

                  <div class="cat-sec">
                    <h3 class="cat-title full">ダンス同好会</h3>
                  </div>

                  <div class="cat-detail">
                    <p>誠英祭 出演<br/>あかつき苑まつり 出演<br/>じばさんフェア 出演</p>
                  </div>
                </div>
              </li>

              <li class="li">
                <div class="cat">

                  <div class="cat-sec">
                    <h3 class="cat-title full">音楽同好会</h3>
                  </div>

                  <div class="cat-detail">
                    <p>誠英祭 出演</p>
                  </div>
                </div>
              </li>

            </ul>

            <ul class="ul">

              <li class="li">
                <div class="cat">

                  <div class="cat-sec">
                    <h3 class="cat-title full">合唱同好会</h3>
                  </div>

                  <div class="cat-detail">
                    <p>教会クリスマス特別出演</p>

                  </div>
                </div>
              </li>

              <li class="li">
                <div class="cat">

                  <div class="cat-sec">
                    <h3 class="cat-title full">英会話同好会</h3>
                  </div>

                  <div class="cat-detail">
                    <p>モンロー交換留学生との交流<br/>夏休みイングリッシュキャンプin防府</p>
                  </div>
                </div>
              </li>

              <li class="li">
                <div class="cat">

                  <div class="cat-sec">
                    <h3 class="cat-title full">吹奏楽同好会</h3>
                  </div>

                  <div class="cat-detail">
                    <p>誠英祭出演<br/>野球応援<br/>オープンキャンパス演奏
                      <br/>クリスマスコンサート 演奏<br/>近県音楽大会 出場（島根）</p>
                  </div>
                </div>
              </li>

            </ul>
          </div>

        </div>


      </div>

    </div>

  </div>
@endsection
