@extends('layout')

@section('content')

  <div id="errors" class="control-wrapper way">
  @include('menu')
  @include('header')

  <!-- key visual  -->
    <div id="page-visual">
      <div class="visual">
        <img src="{{ asset('img/sp/front/errors/main.jpg') }}" width="100%" alt="">
      </div>
    </div>

    <div class="category-index top">
      <div class="content-block">

        <div class="wrapper">
            <div class="title">お探しのページが存在しない、または読み込みエラーです。<br/>下記のページよりアクセスしてください。</div>

        </div>

        <div class="cnt-detail b0 content-block t0">


          <div class="cnt-section">
              <h2 class="title">学校案内</h2>
              <div class="wrapper">
                <a href="/about/">学校案内TOPページ</a><br/>
                <a href="/about/message">理事長・校長メッセージ</a><br/>
                <a href="/about/idea">校訓・教育方針</a><br/>
                <a href="/about/history">誠英高等学校の歴史<br/>
                <a href="/about/history-detail">沿革</a><br/>
                <a href="/about/school">校章・校歌</a><br/>
                <a href="/about/evaluation">学校評価</a>
              </div>
          </div>

          <div class="cnt-section">
              <h2 class="title">学校生活</h2>
              <div class="wrapper">
                <a href="/school/">学校生活TOPページ</a><br/>
                <a href="/school/event">年間行事</a><br/>
                <a href="/school/club">クラブ活動</a><br/>
                <a href="/school/uniform">制服紹介</a><br/>
                <a href="/school/dream">未来はキミの手の中に</a><br/>
                <a href="/school/club/volleyball">女子バレーボール部指導者インタビュー</a><br/>
                <a href="/school/club/baseball">硬式野球部監督インタビュー</a>
              </div>
          </div>

          <div class="cnt-section">
              <h2 class="title">入試情報</h2>
              <div class="wrapper">
                <a href="/exam/">入試情報TOPページ</a><br/>
                <a href="/blog/blog/category/nyushi/">お知らせ一覧</a><br/>
                  <a href="/exam/points">募集要項</a><br/>
                <a href="/exam/tour">学校見学</a><br/>
                <a href="/exam/open">オープンキャンパス</a><br/>
                <a href="/exam/explanation">入試説明会</a>
              </div>
          </div>

          <div class="cnt-section">
              <h2 class="title">通信制</h2>
              <div class="wrapper">
                <a href="/home_schooling/">通信制TOPページ</a><br/>
                <a href="/blog/tusin/">通信制 お知らせ一覧</a><br/>
                <a href="/home_schooling/about">通信制とは</a><br/>
                <a href="/home_schooling/way">学習方法</a><br/>
                <a href="/home_schooling/life">学校生活</a><br/>
                <a href="/home_schooling/guide">入学案内</a>
              </div>
          </div>

          <div class="cnt-section">
              <h2 class="title">その他</h2>
              <div class="wrapper">
                <a href="/mail/">メールマガジン登録<br/>
                <a href="/download">資料請求・各種証明書発行</a>
              </div>
          </div>


        </div>
      </div>
    </div>
  </div>

@endsection
