@extends('layout')

@section('content')

  <div id="school" class="control-wrapper club-info">
  @include('menu')
  @include('header')


  <!-- key visual  -->
    <div id="page-visual">
      <div class="visual">
        <img src="{{ asset('img/sp/school/volleyball/main.jpg') }}" width="100%" alt="">
      </div>
    </div>
    <!-- end key visual -->


    <div id="page-name">
      <div class="inner">
        <p><img src="{{ asset('img/pc/school/icon.png') }}" width="40" alt=""></p>
        <p class="icon-title"><span>学校生活</span><br/>クラブ活動／女子バレーボール部</p>
      </div>
      <p class="middle-line"></p>
    </div>

    <div class="wrapper">
        <div class="cnt-detail content-block">

            <p class="txt">
                三田尻女子高等学校時代を含め、全国高等学校総合体育大会28年連続、41回出場※、春の高校バレー28年連続、38回出場※。2000年から2001年にかけては、岐阜総体優勝（2000年）、富山国体優勝（2000年）、春高優勝（2000年）、熊本総体優勝（2001年）の4冠を達成。<br/>
                近年においても、山口国体優勝（2011年）、岐阜国体準優勝（2012年）、春高準優勝（2013年）、大阪総体3位（2015年）、岩手国体3位（2016年）、宮城総体準優勝（2017年）、春高3位（2018年）など、優れた成績を収めています。<br/><br/>
                バレーだけではなく人として成長するために、田渕先生、大楽先生、中川先生のもと、指導を受けながら全員が全寮生活を送る日々。全国一に輝く日を目指して、毎日練習に励んでいます。<br/>
                ※2018年1月時点
            </p>

            <div class="slider-wrapper">
                <div class="al"><img src="{{ asset('img/sp/top/arrow-left.png') }}" width="20" alt=""></div>
                <div class="ar"><img src="{{ asset('img/sp/top/arrow-right.png') }}" width="20" alt=""></div>
                <div class="inner wrapper">
                    <div class="sul">
                        <div class="sli"><p class="vs"><img src="{{ asset('img/pc/school/club/volleyball/photo_01.jpg') }}" alt=""></p></div>
                        <div class="sli"><p class="vs"><img src="{{ asset('img/pc/school/club/volleyball/photo_02.jpg') }}" alt=""></p></div>
                        <div class="sli"><p class="vs"><img src="{{ asset('img/pc/school/club/volleyball/photo_03.jpg') }}" alt=""></p></div>
                        <div class="sli"><p class="vs"><img src="{{ asset('img/pc/school/club/volleyball/photo_04.jpg') }}" alt=""></p></div>
                        <div class="sli"><p class="vs"><img src="{{ asset('img/pc/school/club/volleyball/photo_05.jpg') }}" alt=""></p></div>
                        <div class="sli"><p class="vs"><img src="{{ asset('img/pc/school/club/volleyball/photo_06.jpg') }}" alt=""></p></div>
                    </div>
                </div>
            </div>

            <h3 class="title">活動実績</h3>
            <p class="middle-line small m15"></p>

            <div class="desc">
                <div class="wrap wrap-inner-box">
                    <a class="accordion">全国高等学校総合体育大会（インターハイ）</a>
                    <div id="accordion">
                        <div class="content-block">
                            <div class="cnt-wrapper">
                                <div class="cnt-wrap">
                                    <table>
										<tr class="ora">
											<td>年</td>
											<td>開催地</td>
											<td>結果</td>
                                        </tr>

                                        <tr>
          																<td>2017年（平成29年）</td>
          																<td>宮木</td>
          																<td>準優勝</td>
          															</tr>

                                        <tr>
                    											<td>2016（平成28年）</td>
                    											<td>山口</td>
                    											<td>1回戦</td>
                                        </tr>
                                        <tr>
											<td>2015（平成27年）</td>
											<td>大阪</td>
											<td>3位</td>
                                        </tr>
                                        <tr>
											<td>2014（平成26年）</td>
											<td>東京</td>
											<td>1回戦</td>
                                        </tr>
                                        <tr>
											<td>2013（平成25年）</td>
											<td>福岡</td>
											<td>1回戦</td>
                                        </tr>
                                        <tr>
											<td>2012（平成24年）</td>
											<td>富山</td>
											<td>ベスト16</td>
                                        </tr>
                                        <tr>
											<td>2011（平成23年）</td>
											<td>青森</td>
											<td>ベスト8</td>
                                        </tr>
                                        <tr>
                                            <td>2010（平成22年）</td>
                                            <td>沖縄</td>
                                            <td>ベスト16</td>
                                        </tr>
                                        <tr>
                                            <td>2009（平成21年）</td>
                                            <td>奈良</td>
                                            <td>2回戦</td>
                                        </tr>
                                        <tr>
                                            <td>2008（平成20年）</td>
                                            <td>埼玉</td>
                                            <td>2回戦</td>
                                        </tr>
                                        <tr>
                                            <td>2007（平成19年）</td>
                                            <td>佐賀</td>
                                            <td>2回戦</td>
                                        </tr>
                                        <tr>
                                            <td>2006（平成18年）</td>
                                            <td>大阪</td>
                                            <td>ベスト8</td>
                                        </tr>
                                        <tr>
                                            <td>2005（平成17年）</td>
                                            <td>千葉</td>
                                            <td>2回戦</td>
                                        </tr>
                                        <tr>
                                            <td>2004（平成16年）</td>
                                            <td>島根</td>
                                            <td>ベスト16</td>
                                        </tr>
                                        <tr>
                                            <td>2003（平成15年）</td>
                                            <td>長崎</td>
                                            <td>ベスト8</td>
                                        </tr>
                                        <tr>
                                            <td>2002（平成14年）</td>
                                            <td>茨城</td>
                                            <td>3位</td>
                                        </tr>
                                        <tr>
                                            <td>2001（平成13年）</td>
                                            <td>熊本</td>
                                            <td>優勝</td>
                                        </tr>
                                        <tr>
                                            <td>2000（平成12年）</td>
                                            <td>岐阜</td>
                                            <td>優勝</td>
                                        </tr>
                                        <tr>
                                            <td>1999（平成11年）</td>
                                            <td>岩手</td>
                                            <td>ベスト8</td>
                                        </tr>
                                        <tr>
                                            <td>1998（平成10年）</td>
                                            <td>高知</td>
                                            <td>3位</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="desc">
                <div class="wrap wrap-inner-box">
                    <a class="accordion">全日本バレーボール高等学校選手権大会(春高バレー)</a>
                    <div id="accordion">
                        <div class="content-block">
                            <div class="cnt-wrapper">
                                <div class="cnt-wrap">
                                    <table>
                                        <tr class="ora">
                                            <td>年</td>
                                            <td>開催地</td>
                                            <td>結果</td>
                                        </tr>
                                        <tr>
                                          <td>2018年（平成30年）</td>
                                          <td>東京</td>
                                          <td>3位</td>
                                        </tr>
                                        <tr>
                                            <td>2017（平成29年）</td>
                                            <td>東京</td>
                                            <td>ベスト8</td>
                                        </tr>
                                        <tr>
                                            <td>2016（平成28年）</td>
                                            <td>東京</td>
                                            <td>2回戦</td>
                                        </tr>
                                        <tr>
                                            <td>2015（平成27年）</td>
                                            <td>東京</td>
                                            <td>2回戦</td>
                                        </tr>
                                        <tr>
                                            <td>2014（平成26年）</td>
                                            <td>東京</td>
                                            <td>1回戦</td>
                                        </tr>
                                        <tr>
                                            <td>2013（平成25年）</td>
                                            <td>埼玉</td>
                                            <td>準優勝</td>
                                        </tr>
                                        <tr>
                                            <td>2012（平成24年）</td>
                                            <td>東京</td>
                                            <td>ベスト8</td>
                                        </tr>
                                        <tr>
                                            <td>2011（平成23年）</td>
                                            <td>東京</td>
                                            <td>2回戦</td>
                                        </tr>
                                        <tr>
                                            <td>2010（平成22年）</td>
                                            <td>東京</td>
                                            <td>ベスト16</td>
                                        </tr>
                                        <tr>
                                            <td>2009（平成21年）</td>
                                            <td>東京</td>
                                            <td>2回戦</td>
                                        </tr>
                                        <tr>
                                            <td>2008（平成20年）</td>
                                            <td>東京</td>
                                            <td>第3位</td>
                                        </tr>
                                        <tr>
                                            <td>2007（平成19年）</td>
                                            <td>埼玉</td>
                                            <td>ベスト16</td>
                                        </tr>
                                        <tr>
                                            <td>2006（平成18年）</td>
                                            <td>東京</td>
                                            <td>ベスト16</td>
                                        </tr>
                                        <tr>
                                            <td>2005（平成17年）</td>
                                            <td>東京</td>
                                            <td>第3位</td>
                                        </tr>
                                        <tr>
                                            <td>2004（平成16年）</td>
                                            <td>東京</td>
                                            <td>第3位</td>
                                        </tr>
                                        <tr>
                                            <td>2003（平成15年）</td>
                                            <td>東京</td>
                                            <td>ベスト16</td>
                                        </tr>
                                        <tr>
                                            <td>2002（平成14年）</td>
                                            <td>東京</td>
                                            <td>準優勝</td>
                                        </tr>
                                        <tr>
                                            <td>2001（平成13年）</td>
                                            <td>東京</td>
                                            <td>優勝</td>
                                        </tr>
                                        <tr>
                                            <td>2000（平成12年）</td>
                                            <td>東京</td>
                                            <td>ベスト8</td>
                                        </tr>
                                        <tr>
                                            <td>1999（平成11年）</td>
                                            <td>東京</td>
                                            <td>2回戦</td>
                                        </tr>
                                        <tr>
                                            <td>1998（平成10年）</td>
                                            <td>東京</td>
                                            <td>2回戦</td>
                                        </tr>
                                    </table>
                                    <p>※2010年までの大会名称は、「全国高等学校バレーボール選抜優勝大会」</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="desc">
                <div class="wrap wrap-inner-box">
                    <a class="accordion">国民体育大会バレーボール競技</a>
                    <div id="accordion">
                        <div class="content-block">
                            <div class="cnt-wrapper">
                                <div class="cnt-wrap">
                                    <table>
                                        <tr class="ora">
                                            <td>年</td>
                                            <td>開催地</td>
                                            <td>結果</td>
                                        </tr>
                                        <tr>
                                          <td>2017年（平成29年）</td>
                                          <td>愛媛</td>
                                          <td>第7位</td>
                                        </tr>
                                        <tr>
                                            <td>2016（平成28年）</td>
                                            <td>岩手</td>
                                            <td>第3位</td>
                                        </tr>
                                        <tr>
                                            <td>2015（平成27年）</td>
                                            <td>和歌山</td>
                                            <td>第4位</td>
                                        </tr>
                                        <tr>
                                            <td>2014（平成26年）</td>
                                            <td>長崎</td>
                                            <td>1回戦</td>
                                        </tr>
                                        <tr>
                                            <td>2013（平成25年）</td>
                                            <td>東京</td>
                                            <td>1回戦</td>
                                        </tr>
                                        <tr>
                                            <td>2012（平成24年）</td>
                                            <td>岐阜</td>
                                            <td>準優勝</td>
                                        </tr>
                                        <tr>
                                            <td>2011（平成23年）</td>
                                            <td>山口</td>
                                            <td>優勝</td>
                                        </tr>
                                        <tr>
                                            <td>2010（平成22年）</td>
                                            <td>千葉</td>
                                            <td>2回戦</td>
                                        </tr>
                                        <tr>
                                            <td>2009（平成21年）</td>
                                            <td>新潟</td>
                                            <td>第7位</td>
                                        </tr>
                                        <tr>
                                            <td>2008（平成20年）</td>
                                            <td>大分</td>
                                            <td>優勝</td>
                                        </tr>
                                        <tr>
                                            <td>2007（平成19年）</td>
                                            <td>秋田</td>
                                            <td>第5位</td>
                                        </tr>
                                        <tr>
                                            <td>2006（平成18年）</td>
                                            <td>兵庫</td>
                                            <td>準優勝</td>
                                        </tr>
                                        <tr>
                                            <td>2005（平成17年）</td>
                                            <td>岡山</td>
                                            <td>第4位</td>
                                        </tr>
                                        <tr>
                                            <td>2004（平成16年）</td>
                                            <td>埼玉</td>
                                            <td>準優勝</td>
                                        </tr>
                                        <tr>
                                            <td>2003（平成15年）</td>
                                            <td>静岡</td>
                                            <td>ベスト16</td>
                                        </tr>
                                        <tr>
                                            <td>2002（平成14年）</td>
                                            <td>高知</td>
                                            <td>準優勝</td>
                                        </tr>
                                        <tr>
                                            <td>2001（平成13年）</td>
                                            <td>宮城</td>
                                            <td>第5位</td>
                                        </tr>
                                        <tr>
                                            <td>2000（平成12年）</td>
                                            <td>富山</td>
                                            <td>優勝</td>
                                        </tr>
                                        <tr>
                                            <td>1999（平成11年）</td>
                                            <td>熊本</td>
                                            <td>第5位</td>
                                        </tr>
                                        <tr>
                                            <td>1998（平成10年）</td>
                                            <td>神奈川</td>
                                            <td>第5位</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <p class="banner"><a href="/school/club/volleyball"><img src="{{ asset('/img/pc/school/club/banner2.jpg') }}" width="100%" alt=""></a></p><br><br>

            <div class="button">
                <a href="/school/club">前のページに戻る</a>
            </div>

        </div>
      </div>



</div>

@endsection
