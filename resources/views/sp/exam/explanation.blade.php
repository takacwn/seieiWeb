@extends('layout')

@section('content')

  <div id="exam" class="control-wrapper open">
  @include('menu')
  @include('header')

  <!-- key visual  -->
    <div id="page-visual">
      <div class="visual">
        <img src="{{ asset('img/pc/exam/explanation/main.jpg') }}" width="100%" alt="">
      </div>
    </div>

    <div class="wrapper">

      <div class="content-block">

        <div class="cnt-section">
          <p class="icon"><img src="/img/pc/exam/explanation/explan_copy.png" width="100%" alt=""></p>

          <div class="desc">
            <div class="section">
                        <div class="infomation">
                              <div class="infomation">
                                  <p class="txt">
                                    本校の教育方針をはじめ、科・コースの説明、進学や就職実績の紹介のほか、募集要項を詳しくご案内いたします。<br/>
                										また、個別に進路相談も行っております。ご遠慮なくご相談ください。<br/>
                										多くの方々のご参加をお待ちしております。<br/>
              										</p>


                          <div class="content-block" style="display: block;margin:20px 0px 0px 0px;padding:5px;">
                            <div class="sub-title" style="display: block;margin:margin:30px 50px 5px 5px;padding:6px;display:block; background-color:#ff9900;color:#ffffff;font-weight:bold;font-size: 12px;">
                                防府会場
                            </div>
              								<div class="info-dt" style="display: block;margin:margin:0px 0px 5px 20px;">
                                開催日時：2018年11月3日 (土)　<br />
                                　　　　　10:00～11:30　（受付9:30～）<br>
              									場　　所：デザインプラザＨＯＦＵ<br/>
              									　　　　　（防府市八王子２丁目８－９）
              								</div>
                              <div id="googlemap-wrapper">
                                <div id="googlemap-side-wrapper">
                                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3305.4290133757304!2d131.5654225148353!3d34.05851508060418!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x354492f33842b7ed%3A0xe68d8e1e0f617626!2z44OH44K244Kk44Oz44OX44Op44K277yo77yv77ym77y1!5e0!3m2!1sja!2sjp!4v1475059568107" width="360" height="240" frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div>
                              </div>
                          </div>

                          <div class="content-block" style="display: block;margin:0px 0px 0px 0px;padding:5px;">
                            <div class="sub-title" style="display: block;margin:margin:30px 50px 5px 5px;padding:6px;display:block; background-color:#ff9900;color:#ffffff;font-weight:bold;font-size: 12px;">
                                周南会場
                            </div>
                              <div class="info-dt" style="display: block;margin:margin:0px 0px 5px 20px;">
                                開催日時：2018年10月20日 (土)　<br />
                                　　　　　10:00～11:30　（受付9:30～）<br>
                                場　　所：新南陽ふれあいセンター
                              </div>
                              <div id="googlemap-wrapper">
                                <div id="googlemap-side-wrapper">
                                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3304.9306110048105!2d131.7356183144398!3d34.07129298060078!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3544e8f2642c23e5%3A0x7b85a327218e1fea!2z5paw5Y2X6Zm944G144KM44GC44GE44K744Oz44K_44O8!5e0!3m2!1sja!2sjp!4v1501746977531" width="360" height="240" frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div>
                              </div>
                          </div>


                          <div class="content-block" style="display: block;margin:0px 0px 30px 0px;padding:5px;">
                            <div class="sub-title" style="display: block;margin:margin:30px 50px 5px 5px;padding:6px;display:block; background-color:#ff9900;color:#ffffff;font-weight:bold;font-size: 12px;">
                                山口会場
                            </div>
                              <div class="info-dt" style="display: block;margin:margin:0px 0px 5px 20px;">
                                開催日時：2018年11月17日 (土)　<br />
                                　　　　　10:00～11:30　（受付9:30～）<br>
                                場　　所：山口県健康づくりセンター<br/>
                                　　　　　(山口県総合保健会館)
                              </div>
                              <div id="googlemap-wrapper">
                                <div id="googlemap-side-wrapper">
                                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3301.430244948781!2d131.44375331521778!3d34.160915980576576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x354490ab7f431203%3A0xf2a04991de391865!2z5bGx5Y-j55yM5YGl5bq344Gl44GP44KK44K744Oz44K_44O8!5e0!3m2!1sja!2sjp!4v1501746688423" width="360" height="240" frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div>
                              </div>
                          </div>

                              <div class="sub-title" style="display: block;margin:margin:30px 50px 5px 5px;padding:6px;display:block; background-color:#ff9900;color:#ffffff;font-weight:bold;font-size: 12px;">
                                  内容（各会場共通）
                              </div>


                              <h4 style="padding: 30px 0 10px 0;font-size: 14px;line-height: 20px;">中学生保護者の方々対象に以下の内容をご用意しています。</h4>
              								<ul class="ul" style="list-style-type: none;">
              									<li class="li" style="font-size: 13px;margin-left:10px;padding-left: 30px;padding-bottom: 5px;background: url(/img/sp/exam/explanation/check-blue.png) no-repeat 3px 1px;"><p>本校の教育方針</p></li>
              									<li class="li" style="font-size: 13px;margin-left:10px;padding-left: 30px;padding-bottom: 5px;background: url(/img/sp/exam/explanation/check-blue.png) no-repeat 3px 1px;"><p>科・コース紹介</p></li>
              									<li class="li" style="font-size: 13px;margin-left:10px;padding-left: 30px;padding-bottom: 5px;background: url(/img/sp/exam/explanation/check-blue.png) no-repeat 3px 1px;"><p>進学・就職実績紹介</p></li>
              									<li class="li" style="font-size: 13px;margin-left:10px;padding-left: 30px;padding-bottom: 5px;background: url(/img/sp/exam/explanation/check-blue.png) no-repeat 3px 1px;"><p>募集要項説明</p></li>
                                <li class="li" style="font-size: 13px;margin-left:10px;padding-left: 30px;padding-bottom: 5px;background: url(/img/sp/exam/explanation/check-blue.png) no-repeat 3px 1px;"><p>個別進路相談</p></li>

              								</ul>


{{--                    					<div style="margin-left: 30px;margin-right: 30px;padding: 5px 10px;font-size: 14px;font-weight: bold;border: 3px solid #ff9900;">来場特典　入試問題集過去２年分（平成２７・２８年度）</div>  --}}

                							<div style="padding: 30px 0 30px 0;font-size: 14px;line-height: 20px;">
                  							参加ご希望の方は、本校ホームページまたはお電話でお申し込みください。<br />
                  							ご在籍の中学校を通じてのお申し込みも可能です。
                  					  </div>


                              <p class="icon"><img src="/img/sp/exam/explanation/photo_01_04.jpg" width="100%" alt=""></p>

              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div id="exam" class="control-wrapper open">
    <div class="wrapper">
      <div class="content-block">
        <div class="cnt-section">
          <div class="desc">
            <div class="wrap">
              <div class="program">

                <div class="button ora" style="margin-bottom: 20px;margin-top: 30px;">
                  <a href="/subscription">入試説明会の参加お申し込み</a>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
