@extends('layout')

@section('content')

  <div id="home_schooling" class="control-wrapper way">
  @include('menu')
  @include('header')

  <!-- key visual  -->
    <div id="page-visual">
      <div class="visual">
        <img src="{{ asset('img/sp/home_schooling/way/main.jpg') }}" width="100%" alt="">
      </div>
    </div>
    <!-- end key visual -->

    <div id="page-name">
      <div class="inner">
        <p class="icon-title"><span>通信制</span><br/>学習方法</p>
      </div>
      <p class="middle-line"></p>
    </div>

    <div class="cnt-detail content-block">

      <div class="cnt-section">

        <div class="wrapper">
          <h3 class="title">学習方法</h3>
          <p class="middle-line small blue m15"></p>
          <div class="desc">
            <div class="read">
              ◇ 受講申し込み<br/>
              新入生は面接時にその年度の履修科目を決定します。在校生は年度末のホームルームで翌年度の履修科目を決定します。
            </div>
            <ul class="ways">
              <li class="way-li">
                <h5 class="h5">添削指導（レポート）</h5>
                <div class="way-cnt">
                  レポートは各教科の課題に解答して期日までに学校へ郵送または持参し、 教科担当の指導を受けます。解答が不合格であれば合格するまで繰り返し指導が続きます。提出する枚数は、
                  教科・科目ごとに学習指導要領で定められているので、規定枚数を提出し添削指導を受けます。
                </div>
              </li>
              <li class="way-li">
                <h5 class="h5">
                  面接指導（スクーリング）
                </h5>
                <div class="way-cnt">
                  スクーリングとは学校が開講する授業を受けることです。 <br>
                  スクーリングは毎月あらかじめ決められた土曜日・日曜日各2回行われます。 <br>
                  受講する回数は、教科・科目ごとに学習指導要領で定められています。
                </div>
              </li>
              <li class="way-li">
                <h5 class="h5">
                  単位認定試験（定期考査）
                </h5>
                <div class="way-cnt">
                  定期考査は前期・後期ともに受験しなければなりません。 <br>
                  定期考査の受験資格は、規定通りにレポートを提出し、規定通りのスクーリングに出席しなければいけません。
                </div>
              </li>
            </ul>
          </div>

        </div>

      </div>

      <div class="cnt-section">
        <h2 class="title blue">進路状況（過去5年間）</h2>
        <div class="desc wrapper">
          <div class="section">
            <div class="course-desc">
              <h4>■ 4年制大学</h4>
              <div class="section">
                <ul class="course-ul">
                  <li class="course-li">東海大学</li>
                  <li class="course-li">東京農業大学</li>
                  <li class="course-li">名古屋造形大学</li>
                  <li class="course-li">京都文教大学</li>
                  <li class="course-li">近畿大学</li>
                  <li class="course-li">大手前大学</li>
                  <li class="course-li">関西福祉大学</li>
                  <li class="course-li">奈良大学</li>
                  <li class="course-li">神戸松蔭学院大学</li>
                  <li class="course-li">吉備国際大学</li>
                  <li class="course-li">福山大学</li>
                  <li class="course-li">広島国際大学</li>
                  <li class="course-li">広島修道大学</li>
                  <li class="course-li">広島経済大学</li>
                  <li class="course-li">徳山大学</li>
                  <li class="course-li">宇部フロンティア大学</li>
                  <li class="course-li">山口東京理科大学</li>
                  <li class="course-li">東亜大学</li>
                  <li class="course-li">西南女学院大学</li>
                  <li class="course-li">福岡工業大学</li>
                  <li class="course-li">九州産業大学</li>
                  <li class="course-li">第一工業大学</li>
                </ul>
                <h4>■ 短期大学</h4>
                <div class="section">
                  <ul class="course-ul">
                    <li class="course-li">武庫川女子大学短期大学部</li>
                    <li class="course-li">山口短期大学</li>
                  </ul>
                  <h4>■ 専門学校</h4>
                  <div class="section">
                    <ul class="course-ul">
                      <li class="course-li">専門学校読売自動車大学校</li>
                      <li class="course-li">専門学校東京ビジュアルアーツ</li>
                      <li class="course-li">日本工学院専門学校</li>
                      <li class="course-li">大阪アミューズメントメディア専門学校</li>
                      <li class="course-li">総合学園ヒューマンアカデミー大阪校</li>
                      <li class="course-li">新大阪歯科技工士専門学校</li>
                      <li class="course-li">大阪モード学園</li>
                      <li class="course-li">辻調理師専門学校</li>
                      <li class="course-li">神戸電子専門学校</li>
                      <li class="course-li">六日市医療技術専門学校</li>
                      <li class="course-li">専門学校岡山情報ビジネス学院</li>
                      <li class="course-li">専門学校広島自動車大学校</li>
                      <li class="course-li">広島YMCA専門学校</li>
                      <li class="course-li">広島外語専門学校</li>
                      <li class="course-li">広島製菓専門学校</li>
                      <li class="course-li">広島工業大学専門学校</li>
                      <li class="course-li">広島医療秘書こども専門学校</li>
                      <li class="course-li">岩国YMCA国際医療福祉専門学校</li>
                      <li class="course-li">山口県立東部高等産業技術学校</li>
                      <li class="course-li">徳山看護専門学校</li>
                      <li class="course-li">YICキャリアデザイン専門学校</li>
                      <li class="course-li">専修学校徳山総合ビジネス専門学校</li>
                      <li class="course-li">防府看護専門学校</li>
                      <li class="course-li">YIC看護福祉専門学校</li>
                      <li class="course-li">山口コアカレッジ</li>
                      <li class="course-li">山口コ・メディカル学院</li>
                      <li class="course-li">山口県高等歯科衛生士学院</li>
                      <li class="course-li">山口中村学園</li>
                      <li class="course-li">YICビジネスアート専門学校</li>
                      <li class="course-li">YICビューティモード専門学校</li>
                      <li class="course-li">山口調理製菓専門学校</li>
                      <li class="course-li">山口県立萩看護学校</li>
                      <li class="course-li">厚狭准看護学院</li>
                      <li class="course-li">専門学校北九州自動車大学校</li>
                      <li class="course-li">大原昴自動車・スポーツ専門学校</li>
                      <li class="course-li">麻生情報ビジネス専門学校</li>
                      <li class="course-li">専門学校九州ビジュアルアーツ</li>
                      <li class="course-li">平岡栄養士専門学校</li>
                      <li class="course-li">平岡調理・製菓専門学校</li>
                      <li class="course-li">福岡南美容専門学校</li>
                      <li class="course-li">専門学校スクールオブビジネス</li>
                      <li class="course-li">博多メディカル専門学校</li>
                      <li class="course-li">香蘭ファッションデザイン専門学校</li>
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
