@extends('layout')

@section('content')

  <div id="course" class="control-wrapper course">
  @include('menu')
  @include('header')

  <!-- key visual  -->
    <div id="page-visual">
      <img src="{{ asset('img/sp/course/infomation-culture/main.jpg') }}" width="100%" alt="">
    </div>

    <div id="page-name">
      <div class="inner">
        <p><img src="{{ asset('img/pc/course/icon.png') }}" width="40" alt=""></p>
        <p class="icon-title"><span>学科・コース案内</span><br/> 普通科 情報文化コース</p>
      </div>
      <p class="middle-line"></p>
    </div>

    <div class="category-index top">
      <div class="content-block">

        <div class="wrapper">
          <div class="intro">
            <div class="title">即戦力として活躍できるスキルを習得しよう！</div>

            <p class="read">
              ● 充実した情報科目(Word、Excel、web作成、画像処理)で基礎を身につけます。<br/>
              ● 山口大学教育学部とも連携し、「伝える」をテーマに、CM・ポスター作りを通して、応用力を鍛えます。<br/>
              ● 5教科はもちろん、電卓やビジネスマナーといった商業の基礎も学んで検定に挑戦します。
            </p>
          </div>
        </div>

        <div class="cnt-detail content-block t0">


          <div class="cnt-section">
            <h2 class="title">先輩からの言葉</h2>
            <div class="wrapper">
              <div class="desc">
                <div class="section">
                  <p class="title2">普通科・情報文化コース<br/>1年　長岡 美海</p>
                  <p class="txt">
                    このコースの情報処理授業では、大学と連携したカリキュラムにより、専門性の高い技術が学べるところが魅力です。ビジネスマナーや電卓を使った授業もあり、商業系の検定も取得できるので、進路選択の幅が広がります。女子クラスなので雰囲気が和やかで、入学してすぐにみんなと友達になりました。部活動に入る生徒が多く、皆放課後遅くまで一生懸命活動しています。<br/>授業だけでなく部活にも全力投球でき、仲間と共感し合えるこの環境にとても満足しています。
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
                    <div class="pic"><img src="{{ asset('img/pc/course/infomation-culture/ob01.jpg') }}" alt=""></div>
                  <p class="title2">立石沙樹さん<br/>H26.3 卒／H26.4 日本体育大学入学</p>
                  <p class="txt">
                    情報文化コースで学んだ三年間、私は学業と部活動の両立に力を注ぎました。バレーボール部に入部し始まった寮生活。親元を離れた生活で自立心を養いました。また、チームメイトと苦楽を共にし、絆を深め合えた経験は私の人生の宝物です。多くのことを学べた濃密な三年間でした。今、私は日本体育大学で学びながら、競技を続けています。将来は体育教員となって、多くの子供たちに運動の楽しさを伝えたいと考えています。
                  </p>
                </div>
              </div>
              <div class="desc">
                <div class="section">
                  <p class="title2">寄野奈美さん<br/>H28.3 卒／H28.4 福山通運防府営業所入社</p>
                  <p class="txt">
                    私は誠英高校で「挑戦すること」「努力を続けること」の大切さを学びました。授業では電卓や医療事務など、さまざまな検定にチャレンジし、クラス全員で達成感や喜びを分かち合いました。また陸上競技部の活動では、辛い練習を乗り越え三年間連続で中国大会出場を決めたことが大切な思い出です。現在は福山通運で経理を担当しています。未熟な私ですが先輩方のようにお客様に質の高いサービスが提供できるよう日々努力を重ねています。
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
                  <p class="board"><img src="{{ asset('img/sp/course/infomation-culture/curriculum.png') }}" width="82%" alt=""></p>
                </div>
              </div>
            </div>
          </div>


          <div class="cnt-section">
            <h2 class="title">取得できる主な資格</h2>
            <div class="wrapper">
              <div class="desc">
                <p class="ssub normal">電卓検定 ／ 全商珠算電卓検定 ／ ワープロ検定 ／ 情報処理検定 など</p>
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
                        <li class="course-li">広島大学</li>
                        <li class="course-li">福岡教育大学</li>
                        <li class="course-li">鹿屋体育大学</li>
                        <li class="course-li">山口県立大学</li>
                        <li class="course-li">青山学院大学</li>
                        <li class="course-li">専修大学</li>
                        <li class="course-li">日本体育大学</li>
                        <li class="course-li">中京大学</li>
                        <li class="course-li">皇學館大学</li>
                        <li class="course-li">宇部フロンティア大学</li>
                        <li class="course-li">山口芸術短期大学 ほか</li>
                      </ul>
                      <h4>■ 主な就職先</h4>
                      <div class="section">
                        <ul class="course-ul">
                          <li class="course-li">明石被服興業(株)</li>
                          <li class="course-li">(株)イエローハット山口</li>
                          <li class="course-li">(株)大野石油</li>
                          <li class="course-li">(株)西京銀行</li>
                          <li class="course-li">(株)三友</li>
                          <li class="course-li">(株)ジーユー</li>
                          <li class="course-li">トヨタ自動車(株)</li>
                          <li class="course-li">福山通運(株)</li>
                          <li class="course-li">(医)三田尻病院</li>
                          <li class="course-li">山口合同ガス(株) ほか</li>
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
                    <img src="{{ asset('img/pc/course/infomation-culture/teacher.jpg') }}" alt="">
                  </div>
                </div>
                <div class="right640">
                  <p class="name">開地 弥生先生（普通科・情報文化コース担任）</p>
                  <p class="txt">
                    情報文化コースは女子のみで編成されます。<br/>
                    充実した情報科目（Word、Excel、Web作成、画像処理）でしっかりと基礎力を養い、山口大学と連携してCMやポスター作りに挑戦することで応用力を鍛えます。<br/>
                    商業科目も加わり、進路に役立つ教育課程を展開しています。またクラスのほとんどが部活動に所属し、文武両道を目指して熱心に取り組んでいます。<br/>
                    将来へのステップを確実に獲得しつつ、充実した学校生活を送ることができるこのコースで、あなたも一緒に学んでみませんか？
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
