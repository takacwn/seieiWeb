@extends('layout')

@section('content')

  <div id="about" class="control-wrapper school">
  @include('menu')
  @include('header')


  <!-- key visual  -->
    <div id="page-visual">
      <div class="visual">
        <img src="{{ asset('img/sp/about/school/main.jpg') }}" width="100%" alt="">
      </div>
    </div>
    <!-- end key visual -->

    <div id="page-name">
      <div class="inner">
        <p><img src="{{ asset('img/pc/guide/icon.png') }}" width="40" alt=""></p>
        <p class="icon-title"><span>学校案内 </span><br>校歌・校章・応援歌</p>
      </div>
      <p class="middle-line"></p>
    </div>

    <div class="wrapper">
      <div class="cnt-detail content-block">

        <div class="cnt-section">

          <h3 class="title">誠英高等学校 校章</h3>

          <p class="middle-line small m15"></p>

          <div class="desc school-logo">
            <div class="wrap">
              <p class="s-logo"><img src="{{ asset('img/pc/about/school/02.png') }}" width="120" alt=""></p>
              <p class="ssub">新制高等学校〜現在の校章</p>
              <p class="info">
                現在の校章は、昭和23年4月1日学制改革により、新制高等学校として発足したときに定められました。<br/>正三角形に「三田尻」の「三」と、校訓の3ヶ条がデザインされています。
              </p>
            </div>
          </div>

        </div>

        <!-- section -->
        <div class="cnt-section">

          <h3 class="title">誠英高等学校 校歌</h3>

          <p class="middle-line small m15"></p>
          <p class="ssub">豊田虎之助　作曲／福井　直秋　作詞</p>

          <div class="desc">
            <div class="section">
              <div class="left-half">
                <div class="kouka">
                  <p class="num">1.</p>
                  <p class="kashi">
                    桑の山松幾千代も<br/>
                    緑の色のかはらぬを<br/>
                    誠（まこと）の道の範（のり）として<br/>
                    いざや倣（なら）はむ諸共に
                  </p>
                </div>
                <div class="kouka">
                  <p class="num">2.</p>
                  <p class="kashi">
                    華（はな）の浦波つかの間も<br/>
                    よせ来る音のとだえぬを<br/>
                    学びの窓の友として<br/>
                    いざや倣はむ諸共に
                  </p>
                </div>
                <div class="kouka">
                  <p class="num">3.</p>
                  <p class="kashi">
                    協同一致努むれば<br/>
                    成し遂げられぬ事あらじ<br/>
                    規律を固く守らひて<br/>
                    いざや倣はむ弥遠（いやとほ）に
                  </p>
                </div>
                <div class="kouka">
                  <p class="num">4.</p>
                  <p class="kashi">
                    至誠一貫息（や）まざれば<br/>
                    動かぬ程のものあらじ<br/>
                    高き理想（のぞみ）をかかげてぞ<br/>
                    いざや倣はむ弥遠に
                  </p>
                </div>
              </div>
            </div>
            <audio id="sound" src="/sound/seiei_song.mp3"></audio>
            <div class="sound">
              <p class="button ora" data-stop="音声を再生する" data-play="音声を停止する">音声を再生する</p>
            </div>
          </div>

        </div>
        <!-- end section  -->



        <!-- section -->
        <div class="cnt-section">

          <h3 class="title">誠英高等学校 応援歌</h3>

          <p class="middle-line small m15"></p>
          <p class="ssub">鈴木　淳　作曲／悠木　圭子　作詞</p>

          <div class="desc">
            <div class="section">
              <div class="left-half">
                <div class="kouka">
                  <p class="num">1.</p>
                  <p class="kashi">
                    緑豊かな山に囲まれ<br/>
                    至誠一貫　心は一つ<br/>
                    命を懸けて努力をすれば<br/>
                    勝利の女神は味方する<br/>
                    夢に向かって頑張ろう<br/>
                    誠英！　誠英！　誠英！<br/>
                    三田尻　誠英
                  </p>
                </div>
                <div class="kouka">
                  <p class="num">2.</p>
                  <p class="kashi">
                    瀬戸の潮風白い砂浜<br/>
                    燃える太陽　みなぎる力<br/>
                    流れる汗と涙の中で<br/>
                    誠を尽くして結ばれた<br/>
                    絆　信じて頑張ろう<br/>
                    誠英！　誠英！　誠英！<br/>
                    三田尻　誠英<br/>
                  </p>
                </div>


              </div>
            </div>
            <audio id="sound2" src="/sound/ouen_song.mp3"></audio>
            <div class="sound2">
              <p class="button ora" data-stop="音声を再生する" data-play="音声を停止する">音声を再生する</p>
            </div>
          </div>

        </div>
        <!-- end section  -->


      </div>
    </div>

  </div>

@endsection
