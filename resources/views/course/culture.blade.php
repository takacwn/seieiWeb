@extends('layout')

@section('content')

  <div id="course" class="control-wrapper course">
    @include('menu')
    @include('header')

    <!-- key visual  -->
    <div id="page-visual" class="wrapper">
      <div class="left">
        <div class="pop">
          <div class="box subdir">
            <div class="inner">
              <p><img src="{{ asset('img/pc/course/icon.png') }}" alt=""></p>
              <p class="icon-title"><span>学科・コース案内</span><br/>普通科 生活文化コース・生活教養コース</p>
            </div>
          </div>
          <p><img src="{{ asset('img/pc/guide/bg.png') }}" width="100%" alt=""></p>
        </div>
        <p><img src="{{ asset('img/pc/course/culture/main01.jpg') }}" width="100%" alt=""></p>
      </div>
      <div class="right">
        <img src="{{ asset('img/pc/course/culture/main02.jpg') }}" width="100%" alt="">
      </div>
    </div>

    <div class="wrapper category-index top">
      <div class="content-block">

        <div class="intro">
          <div class="title">豊かな生活に必要な知識と技術を身につけよう！</div>
          <p class="middle-line"></p>

          <p class="read">
			● 社会や家庭で役立つ知識を学びます。<br/>
            ● 家庭(調理・被服制作)、日本文化(茶道・書道)、商業・情報(ワープロ・表計算・電卓)など、多彩な学習内容です。<br/>
            ● 介護に関する基本的な知識・技術を身につけ、希望者は介護職員初任者研修課程を修了することができます。
          </p>
        </div>

        <div class="cnt-detail content-block t0">


          <div class="cnt-section">

            <h3 class="title">先輩からの言葉</h3>
            <p class="middle-line m20"></p>

            <div class="desc">
              <div class="section">
                <p class="title2">普通科 生活文化コース・生活教養コース 1年　河村 歩実</p>
                <p class="txt">
				  このコースは、裁縫や調理の授業が多くあります。<br/
>先生方の講義はわかりやすく、基礎から丁寧に教えてくださるので、経験のない人でも安心して技術を習得でき、早く上達します。また、茶道など礼儀作法の勉強や、介護の授業といった社会や家庭で役に立つ知識も身に着けられるので、実生活ですぐに応用できます。さまざまな実習での取り組みを通してお互いの距離が縮まり、クラスはとても楽しい雰囲気です。このコースで良い仲間たちと出会えたことにとても感謝しています。
                </p>

              </div>
            </div>
          </div>
            
          <div class="cnt-section">

            <h3 class="title">卒業生からの言葉</h3>
            <p class="middle-line m20"></p>

            <div class="desc">
              <div class="wrap">
                <p class="left-image"><img src="{{ asset('img/pc/course/culture/ob01.jpg') }}" alt=""></p>
                <p class="title2">永田珠希さん<br />H28.3 卒／H28.4 防府看護専門学校入学</p>
                <p class="txt">
				  私は生活文化コース・生活教養を専攻しました。三年間で被服、調理、介護など五種類の検定を取得し、幅広い知識を身に付けました。入学時は将来の夢が持てずにいた私ですが、在学中さまざまな経験や学びを通して目標ができ、現在は看護師を目指して病院で働きながら専門学校へ通っています。当時は担任の先生をはじめ、多くの先生方が親身になって進路にかかわってくださいました。今の私があるのは誠英高校のおかげだと思っています。
                </p>
              </div>
            </div>
              
            <div class="desc">
              <div class="section">
                <p class="left-image"><img src="{{ asset('img/pc/course/culture/ob02.jpg') }}" alt=""></p>
                <p class="title2">佐藤萌さん<br />H27.3 卒／H27.4 ゆうの風入社</p>
                <p class="txt">
				  私は生活文化コース生活教養で学び、人として大きく成長できたと実感しています。将来は介護士になりたいと考えていたので、見聞を広めるためボランティア活動に参加したり、積極的に職場見学をすることで業務内容を自分の目で見定めるよう努めました。おかげで先生方をはじめ、地域の方々との交流も深まり、視野がどんどん広がりました。今、私は目標であった介護職に就き、多くの利用者様に元気や希望を持っていただけるような介護職員を目指して頑張っています。
                </p>
              </div>
            </div>
          </div>


          <div class="cnt-section">

            <h3 class="title">カリキュラム</h3>
            <p class="middle-line m20"></p>

            <div class="desc">
              <p class="ssub normal">※選択科目があるため、履修しない科目もあります。(平成28年度入学生)</p>
              <div class="section">
                <p><img src="{{ asset('img/pc/course/culture/curriculum.png') }}" alt=""></p>
              </div>
            </div>
          </div>


          <div class="cnt-section">
            <h3 class="title">取得できる主な資格</h3>
            <p class="middle-line m20"></p>
            <div class="desc">
              <p class="ssub normal">家庭科技術検定（食物調理・被服製作・保育） ／ ワープロ検定 ／ 情報処理検定 ／ 電卓検定 ／ ペン習字検定 ／ 介護職員初任者研修（旧ホームヘルパー2級）</p>
            </div>
          </div>

          <div class="cnt-section">
            <h3 class="title">卒業後の進路</h3>
            <p class="middle-line m40"></p>
            <div class="desc">
              <div class="section">
                <div class="course-desc">
                    <h4>■ 主な進学先</h4>
                  <div class="section">
                    <ul class="course-ul">
                      <li class="course-li">徳山大学</li>
                      <li class="course-li">宇部フロンティア大学</li>
                      <li class="course-li">山口芸術短期大学</li>
                      <li class="course-li">山口短期大学</li>
                      <li class="course-li">福岡こども短期大学</li>
                      <li class="course-li">広島ビューティーアート専門学校</li>
                      <li class="course-li">山口コ・メディカル学院</li>
                      <li class="course-li">山口高等歯科衛生士学院</li>
                      <li class="course-li">YIC看護福祉専門学校</li>
                      <li class="course-li">山口調理製菓専門学校 ほか</li>
                      <li class="course-li">福岡美容専門学校<br/><br/></li>
                    </ul>
                  <h4>■ 主な就職先</h4>
                  <div class="section">
                    <ul class="course-ul">
                      <li class="course-li">王子ゴム化成(株)</li>
                      <li class="course-li">昭和パックス(株)</li>
                      <li class="course-li">(医)桑陽病院</li>
                      <li class="course-li">中村被服(株)</li>
                      <li class="course-li">(株)ピーエーゆうの風三田尻</li>
                      <li class="course-li">(福)ひとつの会 </li>
                      <li class="course-li">(医)防府リハビリテーション病院</li>
					  <li class="course-li">(医)三田尻病院</li>
                      <li class="course-li">(医)緑町三祐病院 ほか</li>
                      <li class="course-li">（順不同）</li>
                    </ul>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="cnt-section">

            <div class="desc">
              <div class="wrap wrap-inner">
                <p class="teacher-label">先生からの言葉</p>
                <div class="left240">
                  <div class="teacher">
                    <img src="{{ asset('img/pc/course/culture/teacher.jpg') }}" alt="">
                  </div>
                </div>
                <div class="right640">
                  <p class="name">三戸 由美子先生（普通科 生活文化コース・生活教養コース担任）</p>
                  <p class="txt">
					私たちの学級、生活文化コース生活教養専攻は全員女子生徒で構成されています。<br/>
いつも賑やかで、笑顔の絶えない明るいクラスです。特徴ある授業としては、裁縫や調理、茶道など、実習科目が多いこと。そのため、関係するいろいろな検定に挑戦でき、将来の進路だけでなく、社会生活全般に役立つことを、幅広く学ぶことができます。<br/>
みなさんもぜひ、このコースでさまざまな授業を通し、一緒に「生きる力」を身に付けましょう！
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
