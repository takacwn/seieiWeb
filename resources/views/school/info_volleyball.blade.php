@extends('layout')

@section('content')

	<div id="school" class="control-wrapper club">
	@include('menu')
	@include('header')

  <!-- key visual  -->
    <div id="page-visual" class="wrapper">
      <div class="visual">
        <img src="{{ asset('img/pc/school/volleyball/main.jpg') }}" width="100%" alt="">
      </div>
    </div>
    <!-- end key visual -->

		<div class="wrapper category-index top">
			<div class="cnt-detail content-block">
                <div class="intro-no">
                    <div class="title">女子バレーボール部</div>
                    <p class="middle-line"></p>
                    <p class="read">
                        三田尻女子高等学校時代を含め、全国高等学校総合体育大会28年連続、41回出場※、春の高校バレー28年連続、38回出場※。2000年から2001年にかけては、岐阜総体優勝（2000年）、富山国体優勝（2000年）、春高優勝（2000年）、熊本総体優勝（2001年）の4冠を達成。<br />
                        近年においても、山口国体優勝（2011年）、岐阜国体準優勝（2012年）、春高準優勝（2013年）、大阪総体3位（2015年）、岩手国体3位（2016年）、宮城総体準優勝（2017年）、春高3位（2018年）など、優れた成績を収めています。<br /><br />
                        バレーだけではなく人として成長するために、田渕先生、大楽先生、中川先生のもと、指導を受けながら全員が全寮生活を送る日々。全国一に輝く日を目指して、毎日練習に励んでいます。</p>
                    <p class="note">※2018年1月時点</p>

                    <ul class="club-ul">
                        <li class="club-li">
                            <div class="wrap">
                                <img src="{{ asset('img/pc/school/club/volleyball/photo_01.jpg') }}" width="313" alt="">
                            </div>
                        </li>
                        <li class="club-li">
                            <div class="wrap">
                                <img src="{{ asset('img/pc/school/club/volleyball/photo_02.jpg') }}" width="313" alt="">
                            </div>
                        </li>
                        <li class="club-li">
                            <div class="wrap">
                                <img src="{{ asset('img/pc/school/club/volleyball/photo_03.jpg') }}" width="313" alt="">
                            </div>
                        </li>
                        <li class="club-li">
                            <div class="wrap">
                                <img src="{{ asset('img/pc/school/club/volleyball/photo_04.jpg') }}" width="313" alt="">
                            </div>
                        </li>
                        <li class="club-li">
                            <div class="wrap">
                                <img src="{{ asset('img/pc/school/club/volleyball/photo_05.jpg') }}" width="313" alt="">
                            </div>
                        </li>
                        <li class="club-li">
                            <div class="wrap">
                                <img src="{{ asset('img/pc/school/club/volleyball/photo_06.jpg') }}" width="313" alt="">
                            </div>
                        </li>
                    </ul>
                </div>





                <div class="cnt-detail">
                    <h4 class="title">活動実績</h4>
                    <p class="middle-line m40"></p>

                    <div class="desc">
                        <div class="wrap wrap-inner-960">
                            <a class="accordion">全国高等学校総合体育大会（インターハイ）</a>
                            <div id="accordion">
                                <div class="cnt-section">
                                    <div class="cnt-wrapper">
                                        <div class="wrap result">
                                            <div class="section">
                                                <div class="cnt-wrap">
                                                    <table>
															<tr class="ora">
																<th>年</th>
																<th>大会名</th>
																<th>開催地</th>
																<th>結果</th>
															</tr>
															<tr>
																<td>2017年（平成29年）</td>
																<td>平成29年度 全国高等学校総合体育大会</td>
																<td>宮木</td>
																<td>準優勝</td>
															</tr>
															<tr>
																<td>2016年（平成28年）</td>
																<td>平成28年度 全国高等学校総合体育大会</td>
																<td>山口</td>
																<td>1回戦</td>
															</tr>
															<tr>
																<td>2015年（平成27年）</td>
																<td>平成27年度 全国高等学校総合体育大会</td>
																<td>大阪</td>
																<td>3位</td>
															</tr>
															<tr>
																<td>2014年（平成26年）</td>
																<td>平成26年度 全国高等学校総合体育大会</td>
																<td>東京</td>
																<td>1回戦</td>
															</tr>
															<tr>
																<td>2013年（平成25年）</td>
																<td>平成25年度 全国高等学校総合体育大会</td>
																<td>福岡</td>
																<td>1回戦</td>
															</tr>
															<tr>
																<td>2012年（平成24年）</td>
																<td>平成24年度 全国高等学校総合体育大会</td>
																<td>富山</td>
																<td>ベスト16</td>
															</tr>
															<tr>
																<td>2011年（平成23年）</td>
																<td>平成23年度 全国高等学校総合体育大会</td>
																<td>青森</td>
																<td>ベスト8</td>
															</tr>
															<tr>
																<td>2010年（平成22年）</td>
																<td>平成22年度 全国高等学校総合体育大会</td>
																<td>沖縄</td>
																<td>ベスト16</td>
															</tr>
															<tr>
																<td>2009年（平成21年）</td>
																<td>平成21年度 全国高等学校総合体育大会</td>
																<td>奈良</td>
																<td>2回戦</td>
															</tr>
															<tr>
																<td>2008年（平成20年）</td>
																<td>平成20年度 全国高等学校総合体育大会</td>
																<td>埼玉</td>
																<td>2回戦</td>
															</tr>
															<tr>
																<td>2007年（平成19年）</td>
																<td>平成19年度 全国高等学校総合体育大会</td>
																<td>佐賀</td>
																<td>2回戦</td>
															</tr>
															<tr>
																<td>2006年（平成28年）</td>
																<td>平成28年度 全国高等学校総合体育大会</td>
																<td>大阪</td>
																<td>ベスト8</td>
															</tr>
															<tr>
																<td>2005年（平成27年）</td>
																<td>平成27年度 全国高等学校総合体育大会</td>
																<td>千葉</td>
																<td>2回戦</td>
															</tr>
															<tr>
																<td>2004年（平成26年）</td>
																<td>平成26年度 全国高等学校総合体育大会</td>
																<td>島根</td>
																<td>ベスト16</td>
															</tr>
															<tr>
																<td>2003年（平成25年）</td>
																<td>平成25年度 全国高等学校総合体育大会</td>
																<td>長崎</td>
																<td>ベスト8</td>
															</tr>
															<tr>
																<td>2002年（平成24年）</td>
																<td>平成24年度 全国高等学校総合体育大会</td>
																<td>茨城</td>
																<td>3位</td>
															</tr>
															<tr>
																<td>2001年（平成23年）</td>
																<td>平成23年度 全国高等学校総合体育大会</td>
																<td>熊本</td>
																<td>優勝</td>
															</tr>
															<tr>
																<td>2000年（平成22年）</td>
																<td>平成22年度 全国高等学校総合体育大会</td>
																<td>岐阜</td>
																<td>優勝</td>
															</tr>
															<tr>
																<td>1999年（平成21年）</td>
																<td>平成21年度 全国高等学校総合体育大会</td>
																<td>岩手</td>
																<td>ベスト8</td>
															</tr>
															<tr>
																<td>1998年（平成20年）</td>
																<td>平成20年度 全国高等学校総合体育大会</td>
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
                        </div>
                    </div>

                    <div class="desc">
                        <div class="wrap wrap-inner-960">
                            <a class="accordion">全日本バレーボール高等学校選手権大会（春の高校バレー）</a>
                            <div id="accordion">
                                <div class="cnt-section">
                                    <div class="cnt-wrapper">
                                        <div class="wrap result">
                                            <div class="section">
                                                <div class="cnt-wrap">
                                                    <table>
															<tr class="ora">
																<th>年</th>
																<th>大会名</th>
																<th>開催地</th>
																<th>結果</th>
															</tr>
															<tr>
																<td>2018年（平成30年）</td>
																<td>第70回 全日本バレーボール高等学校選手権大会</td>
																<td>東京</td>
																<td>3位</td>
															</tr>
															<tr>
																<td>2017年（平成29年）</td>
																<td>第69回 全日本バレーボール高等学校選手権大会</td>
																<td>東京</td>
																<td>ベスト8</td>
															</tr>
															<tr>
																<td>2016年（平成28年）</td>
																<td>第68回 全日本バレーボール高等学校選手権大会</td>
																<td>東京</td>
																<td>2回戦</td>
															</tr>
															<tr>
																<td>2015年（平成27年）</td>
																<td>第67回 全日本バレーボール高等学校選手権大会</td>
																<td>東京</td>
																<td>2回戦</td>
															</tr>
															<tr>
																<td>2014年（平成26年）</td>
																<td>第66回 全日本バレーボール高等学校選手権大会</td>
																<td>東京</td>
																<td>1回戦</td>
															</tr>
															<tr>
																<td>2013年（平成25年）</td>
																<td>第65回 全日本バレーボール高等学校選手権大会</td>
																<td>埼玉</td>
																<td>準優勝</td>
															</tr>
															<tr>
																<td>2012年（平成24年）</td>
																<td>第64回 全日本バレーボール高等学校選手権大会</td>
																<td>東京</td>
																<td>ベスト8</td>
															</tr>
															<tr>
																<td>2011年（平成23年）</td>
																<td>第63回 全日本バレーボール高等学校選手権大会</td>
																<td>東京</td>
																<td>2回戦</td>
															</tr>
															<tr>
																<td>2010年（平成22年）</td>
																<td>第41回 全国高等学校バレーボール選抜優勝大会</td>
																<td>東京</td>
																<td>ベスト16</td>
															</tr>
															<tr>
																<td>2009年（平成21年）</td>
																<td>第40回 全国高等学校バレーボール選抜優勝大会</td>
																<td>東京</td>
																<td>2回戦</td>
															</tr>
															<tr>
																<td>2008年（平成20年）</td>
																<td>第39回 全国高等学校バレーボール選抜優勝大会</td>
																<td>東京</td>
																<td>第3位</td>
															</tr>
															<tr>
																<td>2007年（平成19年）</td>
																<td>第38回 全国高等学校バレーボール選抜優勝大会</td>
																<td>埼玉</td>
																<td>ベスト16</td>
															</tr>
															<tr>
																<td>2006年（平成28年）</td>
																<td>第37回 全国高等学校バレーボール選抜優勝大会</td>
																<td>東京</td>
																<td>ベスト16</td>
															</tr>
															<tr>
																<td>2005年（平成27年）</td>
																<td>第36回 全国高等学校バレーボール選抜優勝大会</td>
																<td>東京</td>
																<td>第3位</td>
															</tr>
															<tr>
																<td>2004年（平成26年）</td>
																<td>第35回 全国高等学校バレーボール選抜優勝大会</td>
																<td>東京</td>
																<td>第3位</td>
															</tr>
															<tr>
																<td>2003年（平成25年）</td>
																<td>第34回 全国高等学校バレーボール選抜優勝大会</td>
																<td>東京</td>
																<td>ベスト16</td>
															</tr>
															<tr>
																<td>2002年（平成24年）</td>
																<td>第33回 全国高等学校バレーボール選抜優勝大会</td>
																<td>東京</td>
																<td>準優勝</td>
															</tr>
															<tr>
																<td>2001年（平成23年）</td>
																<td>第32回 全国高等学校バレーボール選抜優勝大会</td>
																<td>東京</td>
																<td>優勝</td>
															</tr>
															<tr>
																<td>2000年（平成22年）</td>
																<td>第31回 全国高等学校バレーボール選抜優勝大会</td>
																<td>東京</td>
																<td>ベスト8</td>
															</tr>
															<tr>
																<td>1999年（平成21年）</td>
																<td>第30回 全国高等学校バレーボール選抜優勝大会</td>
																<td>東京</td>
																<td>2回戦</td>
															</tr>
															<tr>
																<td>1998年（平成20年）</td>
																<td>第29回 全国高等学校バレーボール選抜優勝大会</td>
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
                        </div>
                    </div>


                    <div class="desc">
                        <div class="wrap wrap-inner-960">
                            <a class="accordion">国民体育大会</a>
                            <div id="accordion">
                                <div class="cnt-section">
                                    <div class="cnt-wrapper">
                                        <div class="wrap result">
                                            <div class="section">
                                                <div class="cnt-wrap">
                                                    <table>
															<tr class="ora">
																<th>年</th>
																<th>大会名</th>
																<th>開催地</th>
																<th>結果</th>
															</tr>
															<tr>
																<td>2017年（平成29年）</td>
																<td>第72回 国民体育大会バレーボール競技</td>
																<td>愛媛</td>
																<td>第7位</td>
															</tr>
															<tr>
																<td>2016年（平成28年）</td>
																<td>第71回 国民体育大会バレーボール競技</td>
																<td>岩手</td>
																<td>第3位</td>
															</tr>
															<tr>
																<td>2015年（平成27年）</td>
																<td>第70回 国民体育大会バレーボール競技</td>
																<td>和歌山</td>
																<td>第4位</td>
															</tr>
															<tr>
																<td>2014年（平成26年）</td>
																<td>第69回 国民体育大会バレーボール競技</td>
																<td>長崎</td>
																<td>1回戦</td>
															</tr>
															<tr>
																<td>2013年（平成25年）</td>
																<td>第68回 国民体育大会バレーボール競技</td>
																<td>東京</td>
																<td>1回戦</td>
															</tr>
															<tr>
																<td>2012年（平成24年）</td>
																<td>第67回 国民体育大会バレーボール競技</td>
																<td>岐阜</td>
																<td>準優勝</td>
															</tr>
															<tr>
																<td>2011年（平成23年）</td>
																<td>第66回 国民体育大会バレーボール競技</td>
																<td>山口</td>
																<td>優勝</td>
															</tr>
															<tr>
																<td>2010年（平成22年）</td>
																<td>第65回 国民体育大会バレーボール競技</td>
																<td>千葉</td>
																<td>2回戦</td>
															</tr>
															<tr>
																<td>2009年（平成21年）</td>
																<td>第64回 国民体育大会バレーボール競技</td>
																<td>新潟</td>
																<td>第7位</td>
															</tr>
															<tr>
																<td>2008年（平成20年）</td>
																<td>第63回 国民体育大会バレーボール競技</td>
																<td>大分</td>
																<td>優勝</td>
															</tr>
															<tr>
																<td>2007年（平成19年）</td>
																<td>第62回 国民体育大会バレーボール競技</td>
																<td>秋田</td>
																<td>第5位</td>
															</tr>
															<tr>
																<td>2006年（平成28年）</td>
																<td>第61回 国民体育大会バレーボール競技</td>
																<td>兵庫</td>
																<td>準優勝</td>
															</tr>
															<tr>
																<td>2005年（平成27年）</td>
																<td>第60回 国民体育大会バレーボール競技</td>
																<td>岡山</td>
																<td>第4位</td>
															</tr>
															<tr>
																<td>2004年（平成26年）</td>
																<td>第59回 国民体育大会バレーボール競技</td>
																<td>埼玉</td>
																<td>準優勝</td>
															</tr>
															<tr>
																<td>2003年（平成25年）</td>
																<td>第58回 国民体育大会バレーボール競技</td>
																<td>静岡</td>
																<td>ベスト16</td>
															</tr>
															<tr>
																<td>2002年（平成24年）</td>
																<td>第57回 国民体育大会バレーボール競技</td>
																<td>高知</td>
																<td>準優勝</td>
															</tr>
															<tr>
																<td>2001年（平成23年）</td>
																<td>第56回 国民体育大会バレーボール競技</td>
																<td>宮城</td>
																<td>第5位</td>
															</tr>
															<tr>
																<td>2000年（平成22年）</td>
																<td>第55回 国民体育大会バレーボール競技</td>
																<td>富山</td>
																<td>優勝</td>
															</tr>
															<tr>
																<td>1999年（平成21年）</td>
																<td>第54回 国民体育大会バレーボール競技</td>
																<td>熊本</td>
																<td>第5位</td>
															</tr>
															<tr>
																<td>1998年（平成20年）</td>
																<td>第53回 国民体育大会バレーボール競技</td>
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
                        </div>
                    </div>
                </div>


                <p class="banner"><a href="/school/club/volleyball"><img src="{{ asset('/img/pc/school/club/banner2.jpg') }}" alt=""></a></p>

                <div class="button">
                    <a href="/school/club">前のページに戻る</a>
                </div>

            </div>
		</div>
	</div>


@endsection
