@extends('layout')

@section('content')

  <div id="about" class="control-wrapper message">
  @include('menu')
  @include('header')


    <!-- key visual  -->
    <div id="page-visual">
      <div class="visual">
        <img src="{{ asset('img/sp/about/message/main.jpg') }}" width="100%" alt="">
      </div>
    </div>
    <!-- end key visual -->

    <div id="page-name">
      <div class="inner">
        <p><img src="{{ asset('img/pc/guide/icon.png') }}" width="40" alt=""></p>
        <p class="icon-title"><span>学校案内 </span><br>理事長メッセージ</p>
      </div>
      <p class="middle-line"></p>
    </div>


    <div class="wrapper">

      <div class="cnt-detail content-block">

        <div class="cnt-section">

          <h3 class="title">
            100周年に向かって。<br/>
            誠英はますます大きく羽ばたきます。
          </h3>

          <div class="section">
            <div class="wrap">
              <p class="txt">
                誠英高等学校へようこそ。<br/>本校は、「至誠一貫」という建学の精神のもと創立された、90年以上の歴史と伝統を持つ私立高等学校です。<br/>
                <br/>
                「至誠一貫」とは、「高い志を持ち、誠意を持って努力し、志を貫き通すこと」です。<br/>
                もともとは中国の思想家、孟子の言葉であり、明治維新で活躍した長州藩の著名人たちが師として仰いだ、吉田松陰が愛した思想です。これは、建学の精神であると同時に、本校の校訓となっています。<br/>
                <br/>
                本校はこの「至誠一貫」の精神に基づき、生徒一人ひとりが大きな夢を見て、その夢の実現に向けて主体的に取り組む力の育成を目指しています。さらに、個々の生徒の潜在能力を最大限伸ばし、誠の心を備えた人間教育を行うことを重要視しています。<br/>
                <br/>
                2016年に、創立90周年を迎えた本校は、2026年の創立100周年に向けて、さらに大きく飛躍します。<br/>
                私たちは現在、グローバル化が進む、複雑で変化の激しい社会に生きています。<br/>
                日本の素晴らしい文化を理解し、尊重しながら、グローバルな視点で物事を考え、コミュニケーションができ、リーダーシップが取れる、グローバル人材が一層必要とされています。<br/>
                <br/>
                ここ山口は、かつて、新しい日本を創り出した人間を数多く輩出した地域です。<br/>
                吉田松陰とその弟子たちは、早いうちから世界的視野を持ち、この国を創ることに取り組みました。<br/>
                <br/>
                私たちも常に「至誠一貫」の建学の精神を原点に置き、グローバルな視野を持ち、日本を支える人材をこの地域から多数輩出する高等学校を目指して、創立100周年に向かって前進する所存です。<br/>
                <br/>
                生徒の皆さん、ぜひ本校で大きな夢を見つけて、その実現のため、一緒に学び、楽しみましょう。<br/>
                皆さん一人ひとりが主人公となり、夢を実現できるよう、我々教職員一同、全力を尽くします。
              </p>
            </div>
          </div>
        </div>


        <div class="desc">
          <div class="wrap wrap-inner">
            <div class="left">
              <p class="middle-line m20"></p>
              <img src="{{ asset('img/pc/about/message/01.jpg') }}" class="user" width="140" alt="">
            </div>
            <div class="right">
              <div class="msg-info">
                誠英高等学校 理事長<br/>
                <span class="name">降矢　順治（ふるや　じゅんじ）</span><br/>
                東北大学工学部通信（電子）工学科卒。工学博士。山口大学名誉教授。専門は「分布定数フィルター」、「ニューラルコンピューター（AI）」の研究。山口大学教育学部教授として勤務し、評議員、教育実践研究指導センター長、学生部長、学長補佐などを歴任。優れた人材育成を目指すとともに最新技術の研究に精励。在勤中は、活動の場を海外へも広げ、スタンフォード大学やミネソタ大学のVisitingScholar(客員研究員)として、最先端の研究に取り組む。退職後、城西国際大学にて、経営情報学部教授として勤務。2011年より、誠英高等学校理事長、2012年より理事長兼校長を務める。座右の銘は「至誠一貫」、「真実一路」。誠を貫き全力を尽くすこと、常に誠実でいること。
              </div>
            </div>
          </div>
        </div>

      </div>


    </div>
  </div>

@endsection
