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

        <!-- 4  -->
        <div class="cnt-section">
          <h3 class="title">学校設立の協力者たち</h3>
          <p class="middle-line small m15"></p>
          <div class="section">
            <div class="history02">
              <p class="txt">
                本校創立のために、創立委員が奔走する中、他にもいろんな著名人の方々の協力がありました。 <br>
                当時の内閣総理大臣・田中義一、文部大臣・三土忠造、海軍中将・吉川安平、満州鉄道総裁・松岡洋右、台湾総裁・上山満之進、連合艦隊参謀長・寺島健、代議士・児玉篁南（児玉右二）、山口県知事・大森吉五郎など、まさにそうそうたる顔ぶれでした。<br>
                ここまでの人物が集まるのは、稀かつ名誉なことであり、それが可能となったのは、創立メンバーの高い志と誠の心に、これらの協力者たちが心を動かされたからに他なりません。こうして、本校が誕生したのです。
              </p>
              <ul class="ul">
                <li>
                  <p><img src="/img/pc/about/history/partner_01.jpg" alt=""></p>
                </li>
                <li>
                  <p><img src="/img/pc/about/history/partner_02.jpg" alt=""></p>
                </li>
                <li>
                  <p><img src="/img/pc/about/history/partner_03.jpg" alt=""></p>
                </li>
                <li>
                  <p><img src="/img/pc/about/history/partner_04.jpg" alt=""></p>
                </li>
                <li>
                  <p><img src="/img/pc/about/history/partner_05.jpg" alt=""></p>
                </li>
                <li>
                  <p><img src="/img/pc/about/history/partner_06.jpg" alt=""></p>
                </li>
                <li>
                  <p><img src="/img/pc/about/history/partner_07.jpg" alt=""></p>
                </li>
                <li>
                  <p><img src="/img/pc/about/history/partner_08.jpg" alt=""></p>
                </li>
              </ul>
              <div class="names">
                （左上から）内閣総理大臣 田中義一, 文部大臣 三土忠造, 海軍中将 吉川安平, 満州鉄道総裁 松岡洋右, 台湾総裁 上山満之進, 連合艦隊参謀長 寺島健, 代議士 児玉篁南（児玉右二）, 山口県知事 大森吉五郎
              </div>
            </div>
          </div>
        </div>

        <div class="cnt-section">
          <div class="history03 purple">
            <div class="section">
              <div class="">
                <div class="m30">
                  <h3 class="title">創立当時から本校を見守り続ける藤の木</h3>
                  <p class="middle-line small m15"></p>
                </div>
                <p>
                  現在の校長室南側の中庭にレンガ造りの藤棚があり、年輪を重ねてひときわ存在感のある藤の老木が存在しています。根元が大きくうねっているのが特徴的なこの藤の木は、創立以来、数々の生徒たちを見守りながら、毎年紫の花を咲かせています。
                  <br>
                  創立当時、正門を入って右方向に玄関があり、玄関に向かって右手に白い藤棚、左手に紫の藤棚がありました。白い藤棚は校長室に面し、紫の藤棚は職員室に面して、夏の強い西日を和らげていました。<br>
                  その後、幾多の年月を経て、紫の藤だけが生き残ったそうです。学校が安定期に入っていた1985年頃のとある日、この藤に突如受難が訪れました。
                </p>
              </div>
              <div class="">
                <div class="photo2">
                  <img src="/img/pc/about/history/fuji_01.jpg" alt="">
                  <img src="/img/pc/about/history/fuji_02.jpg" alt="">
                </div>
                <p class="m30">
                  藤の木の枝が切りとられ、丸裸にされ、まさに焼却炉に投げ込まれようとしていました。そこへ通りかかったのは、学校と深く関わり、学校の歴史と共に年を重ねた原田房雄さんでした。「こりゃー、学校創立のときの藤の木じゃ！」と、すぐさま駆けつけ瀕死の藤を助け、右田にある第二校地に移植しました。
                  数年に渡る手厚い世話のおかげで、瀕死の藤は息を吹き返し、1994年には、生まれ故郷に戻ってきました。そして、1999年には、甦った藤棚の下で、お茶会が開かれました。今となっては、学校創立当時のことを知る人はいませんが、この藤だけは本校創立当初からずっと私たちのことを見守り、今でも毎年たくさんの紫色の花を咲かせてくれています。

                </p>
              </div>
            </div>
          </div>
        </div>

        <!-- end o4  -->

        <!-- 4  -->
        <div class="cnt-section">
          <h3 class="title">激動の時代</h3>
          <p class="middle-line small m15"></p>
          <div class="section">
            <div class="history01">
              <div class="left">
                <img src="/img/pc/about/history/photo_nakano.jpg" width="120" alt="">
                <p class="name">二代目校長<br/>中野貞介</p>
              </div>
              <div class="txt">
                <p>
                  本校創立後、日本を取り巻く状況は次第に激動への道を辿ることになります。1929年には、世界恐慌が起こり、生徒が激減し始め、学校経営に多大な影響を与えました。1931年には満州事変、翌年には上海事変が勃発し、1937年には日中戦争へと発展し、中国大陸での戦争は本格化して行きました。そして、1941年には世界中を巻き込むこととなる太平洋戦争が始まりました。
                  <br>
                  <br>

                  1937年に、初代校長米澤菊五郎から二代目校長中野貞介氏に代わりましたが、その後の10年間は、学校をあげて戦争の嵐に巻き込まれました。本校の若い先生方も出征し、戦場へ行くようになりました。
                  <br>
                  1944年には、光市にある光海軍工廠という軍需工場において、本校女子生徒140名が動員され、過酷な労働を強いられました。1945年8月14日には、光海軍工廠が爆撃を受けて、本校の女子生徒8名の尊い命が失われ、多数の負傷者が出ました。
                  <br>
                  <br>
                  祖国のために尊い命を捧げた8名の生徒のご冥福を祈るため、1967年には、本校と同窓会有志の協力により「殉国諸嬢顕彰之碑」が建てられ、除幕式が挙行されました。顕彰碑の表には、元内閣総理大臣
                  佐藤栄作氏の筆による「殉国諸嬢顕彰之碑」の文字、裏には中野貞介校長の短歌三首の文字が刻まれています。今でも、校内の北西に位置し、毎年8月には、殉国諸嬢慰霊祭が行われています。
                </p>
              </div>

              <div class="left">
                <img src="/img/pc/about/history/scene_04.jpg" width="120" alt="">
                <p class="name">校内の北西にある殉国諸嬢顕彰之碑</p>
              </div>
            </div>
          </div>
        </div>

        <!-- end o4  -->

        <div class="buttons">
          <p class="button ora"><a href="/about/history/3">次に進む</a></p>
          <p class="button last"><a href="/about/history/">前に戻る</a></p>
        </div>



      </div>

    </div>
  </div>
@endsection
