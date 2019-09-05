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
			  <p class="icon-title"><span>学科・コース案内</span><br/>普通科 生活文化コース・食文化専攻</p>
            </div>
          </div>
          <p><img src="{{ asset('img/pc/guide/bg.png') }}" width="100%" alt=""></p>
        </div>
        <p><img src="{{ asset('img/pc/course/life-culture/main01.jpg') }}" width="100%" alt=""></p>
      </div>
      <div class="right">
        <img src="{{ asset('img/pc/course/life-culture/main02.jpg') }}" width="100%" alt="">
      </div>
    </div>

    <div class="wrapper category-index top">
      <div class="content-block">

        <div class="intro">
          <div class="title">プロの道を目指して調理師免許を取得しよう！</div>
          <p class="middle-line"></p>

          <p class="read">
			● 普通科の幅広い教養を身につけながら、調理師の国家資格を全員取得します。<br/>
			● 一流講師陣による調理実習（日本料理・西洋料理・中華料理）を毎週実施。<br/>
			● 総合調理実習、販売実習で実践力を養成。<br/>
			● 将来、栄養士や管理栄養士の国家資格を目指すための基礎を学びます。
          </p>
        </div>

        <div class="cnt-detail content-block t0">


          <div class="cnt-section">

            <h3 class="title">先輩からの言葉</h3>
            <p class="middle-line m20"></p>

            <div class="desc">
              <div class="section">
                <p class="title2">普通科 生活文化コース・食文化専攻 1年　小倉 多恵子</p>
                <p class="txt">
				  私たちのクラスは、普通科で学習する科目で教養を高めながら、調理や栄養学、食品衛生など「食」に関する分野を学びます。<br/>
私は料理が大好きなので、専門の先生方からプロの技を直に教えていただく毎週の調理実習をとても楽しみにしています。各学年ごとの販売実習で自分の作った食品を売ることもでき、とてもやりがいを感じます。女子のみのクラスで和気あいあいとした雰囲気のなか、「食」について深く学べることができ、毎日が充実しています。
                </p>

              </div>
            </div>
          </div>
            
          <div class="cnt-section">

            <h3 class="title">卒業生からの言葉</h3>
            <p class="middle-line m20"></p>

            <div class="desc">
              <div class="section">
                <p class="left-image"><img src="{{ asset('img/pc/course/life-culture/ob01.jpg') }}" alt=""></p>
                <p class="title2">光安真梨さん<br />H28.3 卒／H28.4 宇部フロンティア大学短期大学部食物栄養学科入学</p>
                <p class="txt">
				  私は食文化専攻で調理について学ぶうち、家族や友人の健康のために栄養バランスの整った献立を作りたいと思うようになり、栄養士になる目標を定めました。在学中は資格取得のための勉強に力を入れ、食物検定一級を取得しました。三年間の努力で磨いた調理技術を誇りに、現在は宇部フロンティア大学で栄養士の国家資格取得を目指しています。このような充実した今があるのは、高校時代指導してくださった先生方が道標となって支えてくださったおかげだと実感しています。
                </p>

              </div>
            </div>
          </div>


          <div class="cnt-section">

            <h3 class="title">カリキュラム</h3>
            <p class="middle-line m20"></p>

            <div class="desc">
              <p class="ssub normal">※選択科目があるため、履修しない科目もあります。(平成28年度入学生)</p>
              <div class="wrap">
                <p><img src="{{ asset('img/pc/course/life-culture/curriculum.png') }}" alt=""></p>
              </div>
            </div>
          </div>


          <div class="cnt-section">
            <h3 class="title">取得できる主な資格</h3>
            <p class="middle-line m20"></p>
            <div class="desc">
              <p class="ssub normal">調理師免許 ／ 家庭科技術検定（食物料理・被服製作・保育）</p>
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
                      <li class="course-li">二松學舎大学</li>
                      <li class="course-li">くらしき作陽大学</li>
                      <li class="course-li">西南女学院大学</li>
                      <li class="course-li">山口芸術短期大学</li>
                      <li class="course-li">宇部フロンティア短期大学</li>
                      <li class="course-li">山口短期大学</li>
                      <li class="course-li">エコール辻・大阪</li>
                      <li class="course-li">平岡栄養士専門学校</li>
                      <li class="course-li">京都製菓技術専門学校</li>
                      <li class="course-li">広島製菓専門学校</li>
                      <li class="course-li">山口調理製菓専門学校 ほか<br/><br/></li>
                    </ul>
                  <h4>■ 主な就職先</h4>
                  <div class="section">
                    <ul class="course-ul">
                      <li class="course-li">あさひ製菓(株)</li>
                      <li class="course-li">イズミ・フード・サービス(株)</li>
                      <li class="course-li">(株)岡虎</li>
                      <li class="course-li">片山食品(株)</li>
                      <li class="course-li">(医)吉南病院</li>
                      <li class="course-li">(株)菜の花</li>
					  <li class="course-li">日清医療食品(株)</li>
                      <li class="course-li">(株)丸久</li>
                      <li class="course-li">(株)リョーユーパン山口工場</li>
                      <li class="course-li">(福)やはず苑</li>
                      <li class="course-li">(株)ユアーズ・バリュー</li>
                      <li class="course-li">(医)湯野温泉病院 ほか</li>
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
                    <img src="{{ asset('img/pc/course/life-culture/teacher.jpg') }}" alt="">
                  </div>
                </div>
                <div class="right640">
                  <p class="name">河村 朋子先生（普通科 生活文化コース・食文化専攻担任）</p>
                  <p class="txt">
					食文化専攻は将来栄養士や管理栄養士の国家資格取得を目指す高い意識をもつ人はもちろん、料理をしたり食べることが好きと言う人まで、「食」文化に触れたいという生徒が多く集まります。<br/>
包丁の握り方、箸の持ち方などの基礎基本から、調理師になるための専門的な知識、技術にいたるまで、日本・西洋・中華のプロフェッショナルが懇切丁寧に指導します。毎週行われる実習で知識を身に付け技術を磨き、卒業時には全員が調理師免許を取得できます。<br/>みなさんも私たちと一緒に調理師になる夢をかなえてみませんか？
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
