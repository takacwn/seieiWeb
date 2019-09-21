@extends('layout')

@section('content')

  <div id="about" class="control-wrapper history">
  @include('menu')
  @include('header')

    <!-- key visual  -->
    <div id="page-visual">
      <div class="visual">
        <img src="{{ asset('img/sp/about/history/main.jpg') }}" width="100%" alt="">
      </div>
    </div>
    <!-- end history  -->

    <div id="page-name">
      <div class="inner">
        <p><img src="{{ asset('img/pc/guide/icon.png') }}" width="40" alt=""></p>
        <p class="icon-title"><span>学校案内 </span><br>誠英高等学校の歴史</p>
      </div>
      <p class="middle-line"></p>
    </div>

    <div class="wrapper">
      <div class="cnt-detail content-block">

        <div class="read">
          1926年、まだ多くの女性が教育の機会を与えられなかった時代に、「三田尻高等女学校」として本校は生まれました。<br/>
          「至誠一貫」を建学の精神として掲げ、より多くの女子に教育の機会を与えたい、誠の心を持って高い志を貫き通す大切さを教えたい、と創立者は溢れる夢と情熱を持ってこの学校を誕生させたのです。その後、世界大恐慌や戦争など、激動の時代を経験することがありましたが、男女共学となりグローバル社会の中に生きる今の時代も、本校のDNAである「至誠一貫」の精神に基づく教育は変わらず、時を超えて生き続けています。
        </div>

        <!-- one  -->
        <div class="cnt-section">

          <h3 class="title">創立までの経緯</h3>
          <p class="middle-line small m10"></p>

          <div class="section">
            {{-- <div class="prevent-page-box"> --}}
            {{-- <a href="/about/history-detail">三田尻学園 誠英高等学校 沿革（年表）についてはこちら</a> --}}
            {{-- </div> --}}

            <div class="history01">
              <p class="txt">本校は、1926年、元号が大正から昭和に変わった年に、米澤菊五郎を代表とする9人の創立チームによって、「三田尻高等女学校」として設立されました。<br/>
                本校創立者代表・初代校長である、米澤菊五郎は、1869年、明治維新直後に生まれ、生涯を教育に捧げた人物でした。当時、女子の教育は「有害無益」と言われ、十分な教育の機会を与えられませんでした。米澤菊五郎は、多くの向学心旺盛で優秀な女子たちが、学びたい意志を強く持っているにも関わらず、諦めざるを得ない状況を目の当たりにし、心を痛めていました。そして、これを救済するためには、私立高等学校を興すしかないと、意志を固めました。<br/>
                当時、佐波郡高等女学校（現在の防府高等学校）の初代校長を勤めていた米澤菊五郎は、定年と同時に、私立高等学校創立のため本格的に動き出しました。まず2名の人物に声をかけました。一人は、佐波郡立高等女学校時代に教頭であった、中田官次、もう一人は、医師であった、神徳一人でした。そして、この3人で創立業務を具体的に進めていきました。<br/><br/>
              </p>
              <div class="left">
                <img src="/img/pc/about/history/photo_k_yonezawa.jpg" width="120" alt="">
                <p class="name">創立者代表・初代校長<br/>米澤菊五郎</p>
              </div>
              <p class="txt">
                人は、学校設立を確実なものとするために、創立委員として加わってくれる人材を探しました。そこで加わったのが、医師であった柳義雄と内田小弥太、そして人徳を備え、顔も広かった写真家、白石権四郎でした。
                6名となった創立チームは、今後、官庁との折衝や世間からの協力を得るためには、もっと知名度の高い人物が必要だと考えました。そこで、内田小弥太が、旧右田藩主、毛利祥久と、西日本で有名な画伯であった、田中伯陰（田中啓三郎）と交渉にあたり、快諾を得ました。<br/><br/>
                最後に創立委員となったのは、初代理事長となった、元陸軍中将・佐波郡教育会長、山田四郎でした。彼は、白石権四郎が、学校設立のために献身的努力をしている姿に深く感動し、自分も貢献したいと、即、創立委員として立候補したと言われています。<br/><br/>こうして、「もっと多くの女子に教育の機会を」という一人の人間の願いが、他の人の心を動かし、9人の創立チーム、MITAJIRI
                NINEができました。そして、チームとしてより強固な意志を持って、学校設立を実現しました。
              </p>
            </div>
          </div>

          <div class="section">
            <div class="history01">
              <ul class="ul2">
                <li>
                  <p><img src="/img/pc/about/history/team_01.jpg" alt=""></p>
                </li>
                <li>
                  <p><img src="/img/pc/about/history/team_02.jpg" alt=""></p>
                </li>
                <li>
                  <p><img src="/img/pc/about/history/team_03.jpg" alt=""></p>
                </li>
                <li>
                  <p><img src="/img/pc/about/history/team_04.jpg" alt=""></p>
                </li>
                <li>
                  <p><img src="/img/pc/about/history/team_05.jpg" alt=""></p>
                </li>
                <li>
                  <p><img src="/img/pc/about/history/team_06.jpg" alt=""></p>
                </li>
                <li>
                  <p><img src="/img/pc/about/history/team_07.jpg" alt=""></p>
                </li>
                <li>
                  <p><img src="/img/pc/about/history/team_08.jpg" alt=""></p>
                </li>
              </ul>
              <div class="names">
                （左上から）山田四郎, 中田官次, 神徳一人, 柳義雄, 内田小弥太, 白石権四郎, 毛利祥久, 田中伯陰（田中啓三郎）
              </div>
              <ul class="ul">
                <li>
                  <p><img src="/img/pc/about/history/scene_01.jpg" alt=""></p>
                </li>
                <li>
                  <p><img src="/img/pc/about/history/scene_02.jpg" alt=""></p>
                </li>
              </ul>
              <div class="names">
                （左）正門入ってすぐ左に位置する初代理事長山田四郎の石碑<br/>
                （右）創立当初、授業と始まりと終わりを知らせるために使われた鐘
              </div>
              <ul class="ul">
                <li>
                  <p><img src="/img/pc/about/history/scene_03.jpg" alt=""></p>
                </li>
                <li>
                  <p><img src="/img/pc/about/history/mark_old.png" alt=""></p>
                </li>
              </ul>
              <div class="names center">
                （左）創立当初の校旗 （右）創立当時の校章
              </div>
            </div>
          </div>
        </div>
        <!-- end one  -->


        <!-- 4  -->
        <div class="cnt-section">
          <h3 class="title">建学の精神</h3>
          <p class="middle-line small m15"></p>
          <div class="section">
            <div class="history05">
              <p class="txt">
                本校創立者代表・初代校長の米澤菊五郎は、誠を信じることに命をかけた、吉田松陰の「至誠一貫」の精神と生き方に深く感銘し、建学の精神を「至誠一貫」とし、校訓にも定めました。「至誠一貫」とは、「誠の心を持って、高い志を貫き通すこと」で、もともと中国の思想家、孟子の言葉でした。<br/>
                米澤菊五郎は、「男女かかわらず、人間教育の中心となすものは、至誠である。誠の心を持って高い志を貫き通す精神を培うことこそ、時代を超える真の教育である。」と考えたのです。<br/>
                創立委員の山田四郎と白石権四郎は、このすばらしい校訓を著名人に一筆書いていただこうと、東郷平八郎にお願いに行きました。東郷平八郎は、日露戦争を勝利に導いた、日本国内だけでなく世界的にも有名な元帥海軍大将です。彼は、何かのために一筆といった類のことを、一切しない人として有名でしたが、ダメで元々と、二人が訪ねて行ったところ、意外にも即座に快諾されたそうです。この裏には、本校創立の協力者であり、東郷平八郎と日露戦争を通じて親交の深かった、海軍中将吉川安平の存在が大きかったと言われています。
              </p>
              <ul class="ul">
                <li>
                  <p><img src="/img/pc/about/history/photo_yoshida.jpg" alt=""></p>
                </li>
                <li>
                  <p><img src="/img/pc/about/history/photo_togo.jpg" alt=""></p>
                </li>
              </ul>
              <div class="names center">
                （左）「至誠一貫」の精神で誠を生き抜いた吉田松陰<br/>
                （右）元帥海軍大将東郷平八郎
              </div>

              <div class="simple">
                <p><img src="/img/pc/about/history/frame.jpg" width="100%" alt=""></p>
                <p class="name">東郷平八郎直筆の「至誠一貫」の書</p>
              </div>

            </div>
          </div>
        </div>
        <!-- end o4  -->

        <div class="buttons">
          <p class="button ora"><a href="/about/history/2">次に進む</a></p>
        </div>

      </div>
    </div>
  </div>
@endsection
