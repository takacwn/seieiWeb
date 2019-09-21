@extends('layout')

@section('content')

  <div id="course" class="control-wrapper course">
  @include('menu')
  @include('header')

  <!-- key visual  -->
    <div id="page-visual">
      <img src="{{ asset('img/sp/course/infomation-finance/main.jpg') }}" width="100%" alt="">
    </div>

    <div id="page-name">
      <div class="inner">
        <p><img src="{{ asset('img/pc/course/icon.png') }}" width="40" alt=""></p>
        <p class="icon-title"><span>学科・コース案内</span><br/>情報会計科<br/></p>
      </div>
      <p class="middle-line"></p>
    </div>

    <div class="category-index top">
      <div class="content-block">

        <div class="wrapper">
          <div class="intro">
            <div class="title">多くの資格を手にして社会へ羽ばたこう！</div>

            <p class="read">
              ● 2年次より情報会計専攻・情報工業専攻に分かれます。<br/>
              ● 情報会計専攻は会計を学び、情報・ビジネスのエキスパートを目指します。<br/>
              ● 情報工業専攻は電気の基礎を学び、工業関係への進路を目指します。<br/>
              ● 各種の資格・検定にチャレンジし、就職や進学に活かします。
            </p>
          </div>

        </div>

        <div class="cnt-detail content-block t0">


          <div class="cnt-section">
            <h2 class="title">先輩からの言葉</h2>
            <div class="wrapper">

              <div class="desc">
                <div class="wrap">
                  <p class="title2">情報会計科<br/>1年　小川 莉央南</p>
                  <p class="txt">
                    情報会計科は、簿記や情報処理など、商業に関する専門的な知識が身に付きます。<br/>
                    二年生からは会計専攻と工業専攻のどちらかを選択し、自分の学びたい分野をより詳しく学習できます。これらは全員が初めて学ぶ教科なので、皆で協力しあいながら、じっくりと理解を深められます。工業専攻ではボイラー技士、危険物取扱者などの資格が取得でき、就職にも有利です。私は商業専攻を希望しており、三種目の検定で一級を目指し、課題や練習に取り組んでいます。将来に直結した新しい学びがたくさん吸収できるので、この科を選んでよかったと思っています。
                  </p>
                </div>
              </div>

              <div class="desc">
                <div class="section">
                  <p class="title2">情報会計科・工業専攻<br/>2年　山根 佑太</p>
                  <p class="txt">
                    二年次より選択できる工業専攻では、共通科目の他に物理、化学、電気基礎、工業技術基礎の専門科目を学びます。<br/>
                    工業技術基礎では主に電気工事士の資格取得を目指します。授業では、実際に使用される工具やケーブルなど、様々な器具を使って配線作業をします。難しいところは先生方が丁寧に説明してくださるのでとても勉強になり、やりがいがあります。<br/>
                    授業でしっかりと知識、技術を身に着け、将来の進路に活かしたいと思います。
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="cnt-section">
            <h2 class="title">卒業生からの言葉</h2>
            <div class="wrapper">
              <div class="desc">
                <div class="wrap">
                    <div class="pic"><img src="{{ asset('img/pc/course/infomation-finance/ob01.jpg') }}" alt=""></div>
                  <p class="title2">木原和哉さん<br/>H27.3 情報工学専攻卒／H27.4 （株）マツダ入社</p>
                  <p class="txt">
                    私は情報会計科、情報工学を専攻しまいた。正直なところ私は勉強が得意ではありませんでしたが、工業系の分野については幼い頃から興味があり、これだけは絶対に負けたくないと努力しました。その結果、科で一番の成績を取ることができ、自分に自信がつきました。私は現在マツダ株式会社に勤務しています。先生方の丁寧な面接指導と助言があったおかげです。将来は技術を指導する立場に立ち、企業の即戦力となる人材育成に携わりたいと考えています。
                  </p>
                </div>
              </div>
              <div class="desc">
                <div class="wrap">
                    <div class="pic"><img src="{{ asset('img/pc/course/infomation-finance/ob02.jpg') }}" alt=""></div>
                  <p class="title2">徳本有紀子さん<br/>H26.3 情報会計専攻卒／H26.4 山口大学経済学部入学</p>
                  <p class="txt">
                    私は情報会計科で、この科でしか取得することのできない簿記検定を中心に、各種の資格取得を目標に掲げ、達成しました。進路は、将来起業したいとの考えから、大学で経営に関する知識を学ぶため進学を決意しました。現在は山口大学経済学部で会社形態の種類や経営の組織・管理論などを学んでいます。授業ではプレゼンテーションを行う機会が多いので就職活動や社会に出て役立つよう、日々、自らを磨き、スキルアップに励んています。
                  </p>
                </div>
              </div>
            </div>
          </div>
            
            
          <div class="cnt-section">

            <h2 class="title">カリキュラム</h2>

            <div class="wrapper">
              <div class="desc">
                <p class="ssub normal">※選択科目があるため、履修しない科目もあります。(平成28年度入学生)</p>
                <div class="section">
                  <p class="board"><img src="{{ asset('img/sp/course/infomation-finance/curriculum.png') }}" width="82%" alt=""></p>
                </div>
              </div>
            </div>
          </div>


          <div class="cnt-section">
            <h2 class="title">取得できる主な資格</h2>
            <div class="wrapper">

              <div class="desc">
                <p class="ssub normal">簿記検定 ／ 電卓検定 ／ 情報処理検定 ／ 商業経済検定 ／ 情報技術検定 ／ 文書デザイン検定 ／ ワープロ検定 ／ 二級ボイラー技士 ／ 危険物取扱者 ／
                  第二種電気工事士 ／ 小型ボイラー取扱業務特別教育</p>
              </div>

            </div>
          </div>

          <div class="cnt-section">
            <h2 class="title">卒業後の進路</h2>
            <div class="wrapper">

              <div class="desc">
                <div class="section">
                  <div class="course-desc">
                    <h4>■ 主な進学先</h4>
                    <div class="section">
                      <ul class="course-ul">
                        <li class="course-li">山口大学</li>
                        <li class="course-li">明治大学</li>
                        <li class="course-li">近畿大学</li>
                        <li class="course-li">大阪学院大学</li>
                        <li class="course-li">広島工業大学</li>
                        <li class="course-li">広島経済大学</li>
                        <li class="course-li">徳山大学</li>
                        <li class="course-li">九州産業大学</li>
                        <li class="course-li">山口芸術短期大学</li>
                        <li class="course-li">山口短期大学</li>
                        <li class="course-li">トヨタ神戸自動車大学校</li>
                        <li class="course-li">広島工業大学専門学校</li>
                        <li class="course-li">山口コアカレッジ ほか</li>
                      </ul>
                      <h4>■ 主な就職先</h4>
                      <div class="section">
                        <ul class="course-ul">
                          <li class="course-li">(株)石崎本店</li>
                          <li class="course-li">(株)エモト</li>
                          <li class="course-li">王子ゴム化成(株)</li>
                          <li class="course-li">(株)オートバックス</li>
                          <li class="course-li">協和工業(株)</li>
                          <li class="course-li">協和発酵バイオ(株)</li>
                          <li class="course-li">(株)西京銀行</li>
                          <li class="course-li">佐川急便(株)</li>
                          <li class="course-li">(株)サンメック</li>
                          <li class="course-li">自衛隊</li>
                          <li class="course-li">日本郵便(株)中国支社</li>
                          <li class="course-li">デルタ工業(株)防府工場</li>
                          <li class="course-li">テルモ山口(株)</li>
                          <li class="course-li">西日本旅客鉄道(株)（JR）</li>
                          <li class="course-li">福山通運(株)</li>
                          <li class="course-li">(株)ブリヂストン防府工場</li>
                          <li class="course-li">防府とくぢ農業協同組合</li>
                          <li class="course-li">(株)マツダ</li>
                          <li class="course-li">(株)モルテン</li>
                          <li class="course-li">(株)山口フィナンシャルグループ(山口銀行)</li>
                          <li class="course-li">山口合同ガス(株)</li>
                          <li class="course-li">(株)ヤマダ電機 ほか</li>
                          <li class="course-li">（順不同）</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


            </div>
          </div>
          <div class="cnt-section">

            <div class="desc">
              <div class="wrap wrap-inner">
                <h2 class="title blue">先生からの言葉</h2>
                <div class="left240">
                  <div class="teacher">
                    <img src="{{ asset('img/pc/course/infomation-finance/teacher.jpg') }}" alt="">
                  </div>
                </div>
                <div class="right640">
                  <p class="name">西尾 元先生（情報会計科担任）</p>
                  <p class="txt">
                    情報会計科では、ビジネスに関する基礎的、基本的な知識と技術を習得すること、職業人としての倫理観を身につけることを目標とし、社会に必要とされる人材の育成をめざした教育課程が編成されています。簿記ではお金の流れを記録する基本的な知識を、情報処理ではコンピューターの扱い方を基礎から学びます。これらのスキルを身につけることは現代社会においてとても有意義なことであるといえます。<br/>
                    みなさんも、将来のスペシャリストを目指して、情報会計科で切磋琢磨してみませんか。
                  </p>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>

    </div>

  </div>

@endsection
