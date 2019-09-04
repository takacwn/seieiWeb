@extends('layout')

@section('content')

  <div id="about" class="control-wrapper history">
  @include('menu')
  @include('header')

  <!-- key visual  -->
    <div id="page-visual" class="wrapper">
      <div class="visual">
        <img src="{{ asset('img/pc/about/history/main.jpg') }}" width="100%" alt="">
      </div>
    </div>
    <!-- end history  -->

<div class="wrapper">
    <div class="cnt-detail content-block">

      <div class="read">
        1926年、まだ多くの女性が教育の機会を与えられなかった時代に、「三田尻高等女学校」として本校は生まれました。<br/>
        「至誠一貫」を建学の精神として掲げ、より多くの女子に教育の機会を与えたい、誠の心を持って高い志を貫き通す大切さを教えたい、と創立者は溢れる夢と情熱を持ってこの学校を誕生させたのです。その後、世界大恐慌や戦争など、激動の時代を経験することがありましたが、男女共学となりグローバル社会の中に生きる今の時代も、本校のDNAである「至誠一貫」の精神に基づく教育は変わらず、時を超えて生き続けています。
      </div>

      <!-- one  -->
      <div class="cnt-section">

        <h3 class="title">創立までの経緯</h3>
        <p class="middle-line m40"></p>

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
              <img src="/img/pc/about/history/photo_k_yonezawa.jpg" alt="">
              <p class="name">創立者代表・初代校長<br/>米澤菊五郎</p>
            </div>
            <p class="txt">
              人は、学校設立を確実なものとするために、創立委員として加わってくれる人材を探しました。そこで加わったのが、医師であった柳義雄と内田小弥太、そして人徳を備え、顔も広かった写真家、白石権四郎でした。
              6名となった創立チームは、今後、官庁との折衝や世間からの協力を得るためには、もっと知名度の高い人物が必要だと考えました。そこで、内田小弥太が、旧右田藩主、毛利祥久と、西日本で有名な画伯であった、田中伯陰（田中啓三郎）と交渉にあたり、快諾を得ました。<br/><br/>
                最後に創立委員となったのは、初代理事長となった、元陸軍中将・佐波郡教育会長、山田四郎でした。彼は、白石権四郎が、学校設立のために献身的努力をしている姿に深く感動し、自分も貢献したいと、即、創立委員として立候補したと言われています。<br/><br/>こうして、「もっと多くの女子に教育の機会を」という一人の人間の願いが、他の人の心を動かし、9人の創立チーム、MITAJIRI NINEができました。そして、チームとしてより強固な意志を持って、学校設立を実現しました。
            </p>
          </div>
        </div>

        <div class="section">
          <div class="history01">
            <ul class="ul2">
              <li>
                <p><img src="/img/pc/about/history/team_01.jpg" alt=""></p>
                <p class="name">山田四郎</p>
              </li>
              <li>
                <p><img src="/img/pc/about/history/team_02.jpg" alt=""></p>
                <p class="name">中田官次</p>
              </li>
              <li>
                <p><img src="/img/pc/about/history/team_03.jpg" alt=""></p>
                <p class="name">神徳一人</p>
              </li>
              <li>
                <p><img src="/img/pc/about/history/team_04.jpg" alt=""></p>
                <p class="name">柳義雄</p>
              </li>
              <li>
                <p><img src="/img/pc/about/history/team_05.jpg" alt=""></p>
                <p class="name">内田小弥太</p>
              </li>
              <li>
                <p><img src="/img/pc/about/history/team_06.jpg" alt=""></p>
                <p class="name">白石権四郎</p>
              </li>
              <li>
                <p><img src="/img/pc/about/history/team_07.jpg" alt=""></p>
                <p class="name">毛利祥久</p>
              </li>
              <li>
                <p><img src="/img/pc/about/history/team_08.jpg" alt=""></p>
				<p class="name">田中伯陰<br/>（田中啓三郎）</p>
              </li>
            </ul>
            <ul class="ul">
              <li>
                <p><img src="/img/pc/about/history/scene_01.jpg" alt=""></p>
                <p class="name">正門入ってすぐ左に位置する<br/>初代理事長山田四郎の石碑</p>
              </li>
              <li>
                <p><img src="/img/pc/about/history/scene_02.jpg" alt=""></p>
                <p class="name">創立当初、授業と始まりと終わりを<br/>知らせるために使われた鐘</p>
              </li>
              <li>
                <p><img src="/img/pc/about/history/scene_03.jpg" alt=""></p>
                <p class="name">創立当初の校旗</p>
              </li>
              <li>
                <p><img src="/img/pc/about/history/mark_old.png" alt=""></p>
                <p class="name">創立当時の校章</p>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- end one  -->


      <!-- 4  -->
      <div class="cnt-section">
        <h3 class="title">建学の精神</h3>
        <p class="middle-line m40"></p>
        <div class="section">
          <div class="history05">
            <p class="txt">本校創立者代表・初代校長の米澤菊五郎は、誠を信じることに命をかけた、吉田松陰の「至誠一貫」の精神と生き方に深く感銘し、建学の精神を「至誠一貫」とし、校訓にも定めました。「至誠一貫」とは、「誠の心を持って、高い志を貫き通すこと」で、もともと中国の思想家、孟子の言葉でした。<br/>
                米澤菊五郎は、「男女かかわらず、人間教育の中心となすものは、至誠である。誠の心を持って高い志を貫き通す精神を培うことこそ、時代を超える真の教育である。」と考えたのです。<br/>
				創立委員の山田四郎と白石権四郎は、このすばらしい校訓を著名人に一筆書いていただこうと、東郷平八郎にお願いに行きました。東郷平八郎は、日露戦争を勝利に導いた、日本国内だけでなく世界的にも有名な元帥海軍大将です。彼は、何かのために一筆といった類のことを、一切しない人として有名でしたが、ダメで元々と、二人が訪ねて行ったところ、意外にも即座に快諾されたそうです。この裏には、本校創立の協力者であり、東郷平八郎と日露戦争を通じて親交の深かった、海軍中将吉川安平の存在が大きかったと言われています。
              </p>
            <ul class="ul">
              <li>
                <p><img src="/img/pc/about/history/photo_yoshida.jpg" alt=""></p>
                <p class="name">「至誠一貫」の精神で誠を生き抜いた<br/>吉田松陰</p>
              </li>
			  <li>
                <p><img src="/img/pc/about/history/photo_togo.jpg" alt=""></p>
                <p class="name">元帥海軍大将<br/>東郷平八郎</p>
              </li>
              <li>
                <p><img src="/img/pc/about/history/frame.jpg" alt=""></p>
                <p class="name">東郷平八郎直筆の「至誠一貫」の書</p>
              </li>
			</ul>
            </div>
          </div>
        </div>
      <!-- end o4  -->


      <!-- 4  -->
      <div class="cnt-section">
        <h3 class="title">学校設立の協力者たち</h3>
        <p class="middle-line m40"></p>
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
                <p class="name">内閣総理大臣<br/>田中義一</p>
              </li>
              <li>
                <p><img src="/img/pc/about/history/partner_02.jpg" alt=""></p>
                <p class="name">文部大臣<br/>三土忠造</p>
              </li>
              <li>
                <p><img src="/img/pc/about/history/partner_03.jpg" alt=""></p>
                <p class="name">海軍中将<br/>吉川安平</p>
              </li>
              <li>
                <p><img src="/img/pc/about/history/partner_04.jpg" alt=""></p>
                <p class="name">満州鉄道総裁<br/>松岡洋右</p>
              </li>
              <li>
                <p><img src="/img/pc/about/history/partner_05.jpg" alt=""></p>
                <p class="name">台湾総裁<br>上山満之進</p>
              </li>
              <li>
                <p><img src="/img/pc/about/history/partner_06.jpg" alt=""></p>
                <p class="name">連合艦隊参謀長<br>寺島健</p>
              </li>
              <li>
                <p><img src="/img/pc/about/history/partner_07.jpg" alt=""></p>
				<p class="name">代議士 児玉篁南<br/>（児玉右二）</p>
              </li>
              <li>
                <p><img src="/img/pc/about/history/partner_08.jpg" alt=""></p>
                <p class="name">山口県知事<br>大森吉五郎</p>
              </li>
            </ul>
          </div>
        </div>
      </div>


          <div class="history03 purple">
            <div class="section">
              <div class="left460">
                <div class="m30">
                  <h3 class="h3">創立当時から本校を見守り続ける藤の木</h3>
                </div>
                <p>
                  現在の校長室南側の中庭にレンガ造りの藤棚があり、年輪を重ねてひときわ存在感のある藤の老木が存在しています。根元が大きくうねっているのが特徴的なこの藤の木は、創立以来、数々の生徒たちを見守りながら、毎年紫の花を咲かせています。
                  <br>
                  創立当時、正門を入って右方向に玄関があり、玄関に向かって右手に白い藤棚、左手に紫の藤棚がありました。白い藤棚は校長室に面し、紫の藤棚は職員室に面して、夏の強い西日を和らげていました。<br>
                  その後、幾多の年月を経て、紫の藤だけが生き残ったそうです。学校が安定期に入っていた1985年頃のとある日、この藤に突如受難が訪れました。
                </p>
              </div>
              <div class="right460">
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

        <!-- end o4  -->

        <!-- 4  -->
        <div class="cnt-section">
          <h3 class="title">激動の時代</h3>
          <p class="middle-line m40"></p>
          <div class="section">
            <div class="history01">
              <div class="left">
                <img src="/img/pc/about/history/photo_nakano.jpg" alt="">
                <p class="name">二代目校長<br/>中野貞介</p>
                <img src="/img/pc/about/history/scene_04.jpg" alt="">
                <p class="name">校内の北西にある殉国諸嬢顕彰之碑</p>
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
            </div>
          </div>
        </div>

        <!-- end o4  -->

        <!-- 4  -->
        <div class="cnt-section">

          <h3 class="title">本校のスピリット「暗香不動」と躍動の時代</h3>
          <p class="middle-line m40"></p>

          <div class="section">

            <div class="history01">
              <div class="left">
                <img src="/img/pc/about/history/photo_o_yonezawa.jpg" alt="">
                <p class="name">三代目校長 米澤理 </p>
                <img src="/img/pc/about/history/scene_05.jpg" alt="">
                <p class="name">校内の西に位置する暗香不動の石碑<br/>石碑の横には梅の木が寄り添っています</p>
                <img src="/img/pc/about/history/scene_08.jpg" alt="">
                <p class="name">現在も続く本校の伝統、静思抄</p>
              </div>
              <div class="txt">
                <p>
                  1968年（昭和43年）、米澤菊五郎の子息にあたる米澤理が第3代校長に就任しました。米澤理校長は、1934年に本校に着任して以来、創立期、戦時体制期、学園復興期、充実期に至る34年間に渡る困難な時代に、本校と苦楽を共にしました。特に、日中戦争、第二次世界大戦における三度の応召の経験は、命の尊厳を実感させ、奉仕と自己犠牲を基盤とした教育観によって、新たな教育改革への挑戦を行いました。
                  <br>
                  <br>

                  まず、人間性の育成において、建学の精神「至誠一貫」を現代に活かすために「暗香浮動」をスクール・スピリットとして掲げました。
                  <br>
                  「暗香浮動」とは、「黄昏のほの暗い中でも、良い香りがただようものとして、その存在を示す梅の香りの如くあれ」という意味から、正直・誠実・勤勉・責任感・信頼・礼儀・親切などの徳目を人間育成の要とし、心清らかで気品ある人になれ、ということです。<br>
                  <br>
                  そして、将来のグローバル化時代を展望した教育方針として、国際理解教育を推進しました。1973年より、ロータリークラブによる交換留学生制度を導入し、その後25年間でアメリカ、カナダから11人の留学生を受け入れ、本校からも10人の生徒がアメリカの高等学校に留学し、日米間の相互理解を深めました。ユネスコ、ガールスカウト、インターアクト各クラブの活動実績は国際的な評価を受け、特にインターアクトクラブは1975年「世界理解運動」の優秀校として国際ロータリー賞を受賞しました。<br>
                  <br>
                  さらに、個性を活かす学芸指導として、「静思抄」が設けられました。「静思抄」は、徳育の一環として、物事を行ったときに、深く自分を省みることを習慣付けるために記す手帳で、先生と生徒との間のコミュニケーションとしても使われ、この伝統は今でも続いています。
                </p>
              </div>
            </div>

          </div>

        </div>
        <!-- end o4  -->

        <!-- 3  -->
        <div class="cnt-section">

          <h3 class="title">本校のさらなる発展へ向けて</h3>
          <p class="middle-line m40"></p>

          <div class="history03">
            <div class="section">
              <div class="left460">
                <p class="m30">
                  <img src="/img/pc/about/history/scene_06.jpg" alt=""></p>
                <p>
                  「スポーツの三田尻」としては、ワンダーフォーゲル部がインターハイと国体で7回の全国優勝を決めました。伝統あるバレーボール部は、毎年全国大会出場を果たし、特に2000年から2001年にかけてのインターハイ、国体、春高バレーでは、4冠を果たしました。バスケットボール部も活躍し、Winter
                  Cup 1993では全国準優勝の快挙を成し遂げました。<br><br>
                  2003年には、男女共学となり、それに伴い学校名が「三田尻女子高等学校」から「誠英高等学校」に変わり、科・コースの改編が行われました。「誠英」には、「誠の心を持って、世界にひいでる」という意味が込められています。また、通信制普通科が開設されました。
                </p>
              </div>
              <div class="right460">
                <p class="m30">
                  1980代に入ると、本校は「文化の女子校・スポーツの三田尻」をスローガンに掲げ、部活動を通して、文化面、スポーツ面をさらに発展させて行きました。
                  <br>
                  「文化の女子校」に相応しい活躍としては、インターアクト部の活躍、弁論作文の全国大会優勝、珠算部の県優勝、理科部の「金属化合物の性状に関する研究」で日本学生科学賞受賞などがありました。また、自然研究部も活躍し、「ニホンザル研究」で日本学生科学賞、「アカネズミ研究」で金賞・江崎玲於奈賞、日本サイエンスジャンボリーで最優秀賞を受賞しました。
                </p>
                <div class="photo2">
                  <img src="/img/pc/about/history/scene_07.jpg" alt="">
                </div>
              </div>
            </div>
          </div>

        </div>
        <!-- 3  -->


      </div>

</div>
</div>
</div>
@endsection
