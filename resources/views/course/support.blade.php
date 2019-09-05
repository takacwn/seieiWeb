@extends('layout')

@section('content')

  <div id="exam" class="control-wrapper course">
    @include('menu')
    @include('header')

    <!-- key visual  -->
    <div id="page-visual" class="wrapper">
      <div class="visual">
        <img src="{{ asset('img/pc/course/support/main.jpg') }}" width="100%" alt="">
      </div>
    </div>


    <div class="wrapper category-index top">
      <div class="content-block">
        <div class="cnt-detail">
          <div class="cnt-section">
            <h3 class="title">進学サポート特別メニュー</h3>
            <p class="middle-line m40"></p>
            <div class="desc">
              <p class="title">一人ひとりをしっかり見つめ進路選びをサポートし、生徒のやる気に応えます。</p>
              <div class="wrap">
                <p class="txt">大学進学にむけてもっと勉強がしたい、部活動や校外研修に積極的に参加したい、各種検定資格の取得やボランティア活動に意欲的に取り組みたいなど目標を持って取り組むことで進学の道は開かれます。各コースでの積極的な取り組みや資格取得が優遇される推薦入試制度があり、大学・短大・専門学校と様々な分野に進学ができます。特別進学コースでは、大学進学に備えた特別カリキュラムを編成し、3年後の各入試方法（センター試験・一般入試・推薦入試・AO入試）に備えた指導を行います。</p>
              </div>
            </div>

            <div class="goal">
              <div class="left">
                <div class="cnt-wrap">
                  <p class="head">意識向上プログラム</p>
                  <p class="cnt">
                    大学見学会 <br/>
                    校内進路ガイダンス<br/>
                    進学説明会<br/>
                    校外研修<br/>
                    個人懇談<br/>
                    個別指導の徹底
                  </p>
                </div>
              </div>

              <div class="right">
                <div class="cnt-wrap">
                  <p class="head">進路目標</p>
                  <div class="cnt">
                    <div class="age-wrap">
                      <div class="age">1年</div>
                      <div class="age-val">学習習慣を確立し基礎学力を養成する。自分の将来について考える。</div>
                    </div>
                    <div class="age-wrap">
                      <div class="age">2年</div>
                      <div class="age-val">基礎学力の完成を目指す。将来の職業を見据えて、<br/>興味ある専門分野（大学の学部や学科など）を決定する。</div>
                    </div>
                    <div class="age-wrap">
                      <div class="age">3年</div>
                      <div class="age-val">進路を実現するための真の学力や教養を身につけ進学先を決定する。</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>



            <div class="ex">
              <p class="icon"><img src="/img/pc/exam/course/icon_advice.png" alt=""></p>
              <div class="advice">
                <p class="name">進学指導部長　五嶋　正文</p>
                <p class="txt">
                  高校での3年間は、自身の力を最も高めることができる時期です。毎日の授業や部活動、家庭生活や校外活動に積極的に取り組んで、自分の夢や目標をみつけてその実現に向かって進んでいきましょう。本校には、ひたむきな努力を重ね夢をつかみ取った卒業生や、今一生懸命に頑張っている生徒がたくさんいます。みなさんも高校生活の中で秘められた力を磨き、共に成長していきましょう。
                </p>
              </div>
            </div>
          </div>


          <div class="cnt-section">
            <h3 class="title">近年の主な合格先</h3>
            <p class="middle-line m20"></p>
            <div class="desc">
              <div class="wrap">
                <div class="course-desc">
                  <h4>■ 国公立大学</h4>
                  <div class="wrap">
                    <ul class="course-ul">
                      <li class="course-li-r">東京大学</li>
                      <li class="course-li-r">東京学芸大学</li>
                      <li class="course-li-r">岡山大学</li>
                      <li class="course-li-r">広島大学</li>
                      <li class="course-li-r">山口大学</li>
                      <li class="course-li-r">福岡教育大学</li>
                      <li class="course-li-r">佐賀大学</li>
                      <li class="course-li-r">鹿屋体育大学</li>
                      <li class="course-li-r">室蘭工業大学</li>
                      <li class="course-li-r">首都大学東京</li>
                      <li class="course-li-r">横浜市立大学</li>
                      <li class="course-li-r">尾道大学</li>
                      <li class="course-li-r">山口県立大学</li>
                      <li class="course-li-r">下関市立大学</li>
                      <li class="course-li-r">北九州市立大学</li>
                      <li class="course-li-r">ほか</li>
                    </ul>
                  </div>
                </div>

                <div class="course-desc">
                  <h4>■ 私立大学</h4>
                  <div class="wrap">
                    <ul class="course-ul">
                      <li class="course-li-r">早稲田大学</li>
                      <li class="course-li-r">立教大学</li>
                      <li class="course-li-r">青山学院大学</li>
                      <li class="course-li-r">明治大学</li>
                      <li class="course-li-r">法政大学</li>
                      <li class="course-li-r">専修大学</li>
                      <li class="course-li-r">成蹊大学</li>
                      <li class="course-li-r">日本大学</li>
                      <li class="course-li-r">日本体育大学</li>
                      <li class="course-li-r">明治学院大学</li>
                      <li class="course-li-r">武蔵野大学</li>
                      <li class="course-li-r">国士館大学</li>
                      <li class="course-li-r">東海大学</li>
                      <li class="course-li-r">拓殖大学</li>
                      <li class="course-li-r">神奈川大学</li>
                      <li class="course-li-r">城西大学</li>
                      <li class="course-li-r">城西国際大学</li>
                      <li class="course-li-r">中京大学</li>
                      <li class="course-li-r">立命館大学</li>
                      <li class="course-li-r">同志社大学</li>
                      <li class="course-li-r">関西大学</li>
                      <li class="course-li-r">関西学院大学</li>
                      <li class="course-li-r">近畿大学</li>
                      <li class="course-li-r">関西外国語大学</li>
                      <li class="course-li-r">京都産業大学</li>
                      <li class="course-li-r">京都女子大学</li>
                      <li class="course-li-r">神戸女学院大学</li>
                      <li class="course-li-r">武庫川女子大学</li>
                      <li class="course-li-r">広島国際大学</li>
                      <li class="course-li-r">広島工業大学</li>
                      <li class="course-li-r">広島修道大学</li>
                      <li class="course-li-r">安田女子大学</li>
                      <li class="course-li-r">福岡大学</li>
                      <li class="course-li-r">西南学院大学</li>
                      <li class="course-li-r">中村学園大学</li>
                      <li class="course-li-r">ほか</li>
                      <li class="course-li-r">【順不同】</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="scene"><img src="{{ asset('img/pc/exam/course/01.jpg') }}" alt=""></div>
          </div>


          <div class="cnt-section">
            <h3 class="title">就職サポート特別メニュー</h3>
            <p class="middle-line m40"></p>
            <div class="desc">
              高校生活は社会に出る前の大切なステップです。じっくりと納得のいくまで、一緒に考え、しっかりと準備をしましょう。社会へと大きく羽ばたけるよう、サポートします。
            </div>
            <div class="years">
              <div class="year">
                <p class="next-nav"><img src="/img/pc/exam/course/arrow.png" alt=""></p>
                <p class="head">1年生</p>
                <p class="cnt">
                  <span class="bold">● 適性検査</span><br/>
                  自己をしっかり理解し自分の将来を思い描き、納得のいく進路を早い段階で選びます。
                </p>
              </div>
              <div class="year">
                <p class="next-nav"><img src="/img/pc/exam/course/arrow.png" alt=""></p>
                <p class="head">2年生</p>
                <p class="cnt">
                  <span class="bold">● 就職ガイダンス</span><br/>
                  外部講師による『就職力をつける』ためのレッスンを実施します。(1日コース)<br/><br/>
                  <span class="bold">● ジュニア・インターンシップ</span><br/>
                  自分の希望する職種への職場体験に参加し目標をより確かなものにします。
                </p>
              </div>
              <div class="year">
                <p class="head">3年生</p>
                <p class="cnt">
                  <span class="bold">● 個別面談</span><br/>
                  教員や就職指導専門員による個別面談を繰り返し行います。<br/><br/>
                  <span class="bold">● 模擬面接指導</span><br/>
                  受験先企業に応じた模擬面接を個別に実施します。<br/><br/>
                  <span class="bold">● 応募前見学</span><br/>
                  3年生の夏休みに応募を考えている企業へ見学に行きます。<br/>
                </p>
              </div>

            </div>

            <div class="ex">
              <p class="icon"><img src="/img/pc/exam/course/icon_advice.png" alt=""></p>
              <div class="advice">
                <p class="name">就職指導部長　友好　孝志</p>
                <p class="txt">
                  自分の将来を思い描き進路選択をするのはみなさん自身です。<br/>様々なことにチャレンジして、有意義な高校生活を送ることで、経験を力に変えて、自己実現を目指しましょう。私たちは、一生懸命がんばるあなたを全力でサポートします。
                </p>
              </div>
            </div>
          </div>


          <div class="cnt-section">
            <h3 class="title">近年の主な就職先</h3>
            <p class="middle-line m20"></p>
            <div class="desc">
              <div class="wrap">
                <div class="course-desc">
                  <div class="wrap">
                    <ul class="course-ul">
                      <li class="course-li">明石被服興業(株)</li>
                      <li class="course-li">あさひ製菓(株)</li>
                      <li class="course-li">(株)イエローハット山口</li>
                      <li class="course-li">(株)石﨑本店</li>
                      <li class="course-li">イズミ・フード・サービス(株)</li>
                      <li class="course-li">(株)エモト</li>
                      <li class="course-li">王子ゴム化成(株)</li>
                      <li class="course-li">(株)オートバックス</li>
                      <li class="course-li">(株)大野石油</li>
                      <li class="course-li">(株)岡虎</li>
                      <li class="course-li">片山食品(株)</li>
                      <li class="course-li">(医)吉南病院</li>
                      <li class="course-li">(福)岸津苑</li>
                      <li class="course-li">協和工業(株)</li>
                      <li class="course-li">協和発酵バイオ(株)</li>
                      <li class="course-li">(医)恵生会</li>
                      <li class="course-li">(株)西京銀行</li>
                      <li class="course-li">斉藤段ボール(株)</li>
                      <li class="course-li">(株)サカイ引越センター</li>
                      <li class="course-li">佐川急便(株)</li>
                      <li class="course-li">(株)サンメック</li>
                      <li class="course-li">(株)三友</li>
                      <li class="course-li">(株)ジーユー</li>
                      <li class="course-li">自衛隊（一般曹候補生 航空 陸上）</li>
                      <li class="course-li">シモハナ物流(株)</li>
                      <li class="course-li">(福)周陽福祉会岸津苑</li>
                      <li class="course-li">昭和パックス(株)防府工場</li>
                      <li class="course-li">(医)桑陽病院</li>
                      <li class="course-li">ダイキョーニシカワ(株)</li>
                      <li class="course-li">デルタ工業(株)防府工場</li>
                      <li class="course-li">テルモ山口(株)</li>
                      <li class="course-li">トヨタ自動車(株)</li>
                      <li class="course-li">(株)菜の花</li>
                      <li class="course-li">中村被服(株)</li>
                      <li class="course-li">南条装備工業(株)</li>
                      <li class="course-li">西日本旅客鉄道(株) (JR)</li>
                      <li class="course-li">日清医療食品(株)</li>
                      <li class="course-li">日本果実工業(株)</li>
                      <li class="course-li">日本電電サービス(株)</li>
                      <li class="course-li">日本郵便(株)中国支社</li>
                      <li class="course-li">(株)ヒロタニ</li>
                      <li class="course-li">福山通運(株)</li>
                      <li class="course-li">(株)フジシール ウエスト</li>
                      <li class="course-li">双葉工業(株)</li>
                      <li class="course-li">(株)ブリヂストン防府工場</li>
                      <li class="course-li">防府とくぢ農業協同組合</li>
                      <li class="course-li">防府荷役(株)</li>
                      <li class="course-li">(医)防府リハビリテーション病院</li>
                      <li class="course-li">(株)マツダ</li>
                      <li class="course-li">マツダ工業技術短期大学校</li>
                      <li class="course-li">マツダロジスティックス(株)</li>
                      <li class="course-li">(株)丸久</li>
                      <li class="course-li">(医)三田尻病院</li>
                      <li class="course-li">(医)緑町三祐病院</li>
                      <li class="course-li">(株)モルテン</li>
                      <li class="course-li">(株)山口フィナンシャルグループ(山口銀行)</li>
                      <li class="course-li">山口合同ガス(株)</li>
                      <li class="course-li">山口コーウン(株)</li>
                      <li class="course-li">(株)ヤマダ電機</li>
                      <li class="course-li">(株)ユアーズ・バリュー</li>
                      <li class="course-li">(株)リョーユーパン山口工場</li>
                      <li class="course-li">(株)ワイテック</li>
                      <li class="course-li">【順不同】</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>


        </div>
      </div>
    </div>
  </div>

@endsection
