@extends('layout')

@section('content')

  <div id="course" class="control-wrapper course">
  @include('menu')
  @include('header')

  <!-- key visual  -->
    <div id="page-visual">
      <img src="{{ asset('img/sp/course/welfare/main.jpg') }}" width="100%" alt="">
    </div>

    <div id="page-name">
      <div class="inner">
        <p><img src="{{ asset('img/pc/course/icon.png') }}" width="40" alt=""></p>
        <p class="icon-title"><span>学科・コース案内</span><br/>福祉科</p>
      </div>
      <p class="middle-line"></p>
    </div>

    <div class="category-index top">
      <div class="content-block">

        <div class="wrapper">

          <div class="intro">
            <div class="title">人を助け、支えるための知識と思いやりを育もう！</div>
            <p class="read">
              ● 介護、医療、保育等の専門科目を学びます。<br/>
              ● 経験豊富な講師陣が授業を担当します（介護福祉士、社会福祉士、看護師、保育士等）。<br/>
              ● 地域の福祉施設での実習で実践力を養います。<br/>
              ● YIC看護福祉専門学校と連携し、知識と技術の向上と進学をサポートします。
            </p>
          </div>

        </div>

        <div class="cnt-detail content-block t0">

          <div class="cnt-section">
            <h2 class="title">先輩からの言葉</h2>
            <div class="wrapper">
              <div class="desc">
                <div class="section">
                  <p class="title2">福祉科<br/>1年　小松 麻生</p>
                  <p class="txt">
                    私が福祉科に入学したのは、中学生の頃から保育士になりたかったからです。<br/>
                    福祉科の専門科目としては、社会福祉基礎、介護福祉基礎、介護実習などです。覚えることも多いですが、とてもやりがいがあり、どれもとても楽しいです。クラスは明るく賑やかで、みんなそれぞれの目標に向かって頑張っています。<br/>
                    「介護職員初任者研修修了過程」や「保育検定」などの資格も取れるので、将来に役立てたいと思っています。</p>
                </div>
              </div>
            </div>
          </div>

          <div class="cnt-section">
            <h2 class="title">卒業生からの言葉</h2>
            <div class="wrapper">
              <div class="desc">
                <div class="wrap">
                    <div class="pic"><img src="{{ asset('img/pc/course/welfare/ob01.jpg') }}" alt=""></div>
                  <p class="title2">和田覚さん<br/>H28.3 卒／H28.4 （有）喜楽苑入社</p>
                  <p class="txt">
                    私はこの春福祉科を卒業しました。大勢の友人や信頼できる先生方に囲まれ、とても充実した三年間でした。今振り返ると、学校生活の中で人として大切なことをいろいろと学ぶことができました。在学時、力を入れたのはバスケットボールの部活動です。その縁で顧問の先生にクラブチームのある職場を勧められ、現在の介護職に就きました。利用者さまといい雰囲気でコミュニケーションがとれ、仕事への強いやりがいを感じています。
                  </p>
                </div>
              </div>
              <div class="desc">
                <div class="section">
                    <div class="pic"><img src="{{ asset('img/pc/course/welfare/ob02.jpg') }}" alt=""></div>
                  <p class="title2">河本麻衣さん<br/>H24.3 卒／H24.4 山口芸術短期大学入学／H26.4 東牟礼保育園保育士</p>
                  <p class="txt">
                    私は福祉科で三年間学びました。在学時はインターアクトクラブに所属し、様々なボランティア活動に勤しみました。取得した資格はホームヘルパー2級と、介護事務です。授業の一環で保育園での研修に参加したことがきっかけで保育士を目指し、山口芸術短期大学保育科へ進学しました。現在は大勢の子供たちに囲まれ、忙しく楽しい日々を送っています。これから先も誠英高校卒業生として自信と誇りをもって頑張っていきたいと思います。
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
                  <p class="board"><img src="{{ asset('img/sp/course/welfare/curriculum.png') }}" width="82%" alt=""></p>
                </div>
              </div>
            </div>
          </div>


          <div class="cnt-section">
            <h2 class="title">取得できる主な資格</h2>
            <div class="wrapper">
              <div class="desc">
                <p class="ssub normal">介護職員初任者研修（旧ホームヘルパー2級) ／ 家庭科技術検定（食物調理・被服製作・保育) ／ ワープロ検定 ／ 情報処理検定 など</p>
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
                        <li class="course-li">鹿屋体育大学</li>
                        <li class="course-li">山口県立大学</li>
                        <li class="course-li">日本福祉大学</li>
                        <li class="course-li">徳山大学</li>
                        <li class="course-li">福岡医療福祉大学</li>
                        <li class="course-li">宇部フロンティア大学</li>
                        <li class="course-li">帝京大学</li>
                        <li class="course-li">山口芸術短期大学</li>
                        <li class="course-li">徳山看護専門学校</li>
                        <li class="course-li">山口コ・メディカル学院</li>
                        <li class="course-li">山口県高等歯科衛生士学院</li>
                        <li class="course-li">YIC看護福祉専門学校</li>
                        <li class="course-li">専門学校YICリハビリテーション大学校</li>
                        <li class="course-li">防府看護専門学校 ほか</li>
                      </ul>
                      <h4>■ 主な就職先</h4>
                      <div class="section">
                        <ul class="course-ul">
                          <li class="course-li">(株)オールケアー</li>
                          <li class="course-li">(福)勝縁福祉会</li>
                          <li class="course-li">(福)栗屋福祉会くりや苑</li>
                          <li class="course-li">(医)好日苑</li>
                          <li class="course-li">(福)佐波福祉会とくぢ苑</li>
                          <li class="course-li">(福)周陽福祉会岸津苑</li>
                          <li class="course-li">(医)桑陽病院</li>
                          <li class="course-li">(福)ひとつの会</li>
                          <li class="course-li">(福)防府あかり園</li>
                          <li class="course-li">(医)防府幸楽苑</li>
                          <li class="course-li">(医)防府リハビリテーション病院</li>
                          <li class="course-li">(医)三田尻病院</li>
                          <li class="course-li">(医)緑町三祐病院</li>
                          <li class="course-li">(福)やはず苑 ほか</li>
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
                    <img src="{{ asset('img/pc/course/welfare/teacher.jpg') }}" alt="">
                  </div>
                </div>
                <div class="right640">
                  <p class="name">久保田 明子先生（福祉科担任）</p>
                  <p class="txt">
                    福祉とは、誰もが幸せな生活を送るために必要不可欠なものです。<br/>
                    福祉を学ぶことによって、自分自身や身近な人たちが支援を必要とするとき、制度やサービスを上手に活用することができます。また、相手の立場に立つことや、困っている人に接するときの態度を確かなものにすることができます。<br/>
                    先輩たちは皆「誠英で福祉を学べて良かった」と言ってくれます。<br/>
                    誰かの役に立てることの素晴らしさをあなたも学びに来ませんか？
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
