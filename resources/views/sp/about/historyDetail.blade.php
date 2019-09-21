@extends('layout')

@section('content')

  <div id="about" class="control-wrapper history-detail">
  @include('menu')
  @include('header')

  <!-- key visual  -->
    <div id="page-visual">
      <div class="visual">
        <img src="{{ asset('img/sp/about/history_detail/main.jpg') }}" width="100%" alt="">
      </div>
    </div>

    <div id="page-name">
      <div class="inner">
        <p><img src="{{ asset('img/pc/guide/icon.png') }}" width="40" alt=""></p>
        <p class="icon-title"><span>学校案内 </span><br>沿革概要</p>
      </div>
      <p class="middle-line"></p>
    </div>

    <div class="cnt-detail content-block">

      <div class="cnt-section">

        {{-- <div class="prevent-page-box"> --}}
        {{-- <a href="/about/history">三田尻 誠英の歴史 TOPページに戻る</a> --}}
        {{-- </div> --}}

        <div class="desc">

          <div class="outline-wrap">
            <div class="head">
              <div class="title">初代校長 米澤菊五郎と草創の時代</div>
              <p class="middle-line small m15"></p>
            </div>
            <div class="outline-wrap-block">
              <div class="block">
                <div class="label">大正15年10月8日</div>
                <div class="value">山口県三田尻高等女学校設立認可。山田四郎理事長となる。</div>
              </div>
              <div class="block">
                <div class="label">昭和2年4月11日</div>
                <div class="value">本科および実科を設置、開校。米澤菊五郎校長となる。</div>
              </div>
              <div class="block ">
                <div class="label">昭和6年4月29日</div>
                <div class="value">理事長山田四郎退任により、米澤菊五郎理事長となる。</div>
              </div>
            </div>
          </div>

          <div class="outline-wrap">
            <div class="head">
              <div class="title">第2代校長 中野貞介と戦時体制下の時代</div>
              <p class="middle-line small m15"></p>
            </div>
            <div class="outline-wrap-block">
              <div class="block">
                <div class="label">昭和12年12月9日</div>
                <div class="value">校長米澤菊五郎退任により、中野貞介校長となる。</div>
              </div>
              <div class="block">
                <div class="label">昭和13年10月27日</div>
                <div class="value">理事長米澤菊五郎退任により、毛利重雄理事長となる。</div>
              </div>
              <div class="block ">
                <div class="label">昭和18年4月1日</div>
                <div class="value">実科を第二本科と改称。</div>
              </div>
            </div>
          </div>


          <div class="outline-wrap">
            <div class="head">
              <div class="title">第2代校長 中野貞介と学園復興の時代</div>
              <p class="middle-line small m15"></p>
            </div>
            <div class="outline-wrap-block">
              <div class="block">
                <div class="label">昭和21年1月7日</div>
                <div class="value">財団法人認可。</div>
              </div>
              <div class="block">
                <div class="label">昭和22年9月26日</div>
                <div class="value">理事長毛利重雄退任により、白石権四郎理事長となる。</div>
              </div>
              <div class="block ">
                <div class="label">昭和23年4月1日</div>
                <div class="value">学制改革により三田尻女子高等学校と改称し、普通科、家庭科、別科を設け、中学校を併設。</div>
              </div>
              <div class="block">
                <div class="label">昭和23年5月3日</div>
                <div class="value">育友会発会。</div>
              </div>
              <div class="block ">
                <div class="label">昭和26年3月14日</div>
                <div class="value">学校法人に組織変更認可。</div>
              </div>
            </div>
          </div>

          <div class="outline-wrap">
            <div class="head">
              <div class="title">第2代校長 中野貞介と充実の時代</div>
              <p class="middle-line small m15"></p>
            </div>
            <div class="outline-wrap-block">
              <div class="block">
                <div class="label">昭和34年4月1日</div>
                <div class="value">併設中学校生徒募集停止。</div>
              </div>
              <div class="block">
                <div class="label">昭和34年11月2日</div>
                <div class="value">理事長白石権四郎死去により、白石恭治理事長となる。</div>
              </div>
              <div class="block ">
                <div class="label">昭和37年4月1日</div>
                <div class="value">商業科設置。</div>
              </div>
              <div class="block">
                <div class="label">昭和38年4月1日</div>
                <div class="value">家政科、被服科設置。家庭科、別科生徒募集停止。</div>
              </div>
              <div class="block">
                <div class="label">昭和40年4月1日</div>
                <div class="value">家庭科、別科廃止。</div>
              </div>
              <div class="block">
                <div class="label">昭和42年5月22日</div>
                <div class="value">殉国諸嬢顕彰碑建立。</div>
              </div>
              <div class="block">
                <div class="label">昭和43年4月1日</div>
                <div class="value">校長中野貞介退任により、米澤理校長となる。</div>
              </div>
            </div>
          </div>

          <div class="outline-wrap">
            <div class="head">
              <div class="title">第3代校長 米澤理と躍動の時代</div>
              <p class="middle-line small m15"></p>
            </div>
            <div class="outline-wrap-block">
              <div class="block">
                <div class="label">昭和46年4月1日</div>
                <div class="value">被服科廃止。</div>
              </div>
              <div class="block">
                <div class="label">昭和47年4月1日</div>
                <div class="value">経理科設置。</div>
              </div>
              <div class="block ">
                <div class="label">昭和48年5月23日</div>
                <div class="value">静思寮竣工。</div>
              </div>
              <div class="block">
                <div class="label">昭和48年7月20日</div>
                <div class="value">体育後援会発会。</div>
              </div>
              <div class="block">
                <div class="label">昭和49年4月1日</div>
                <div class="value">山口県民生部から福祉教育研究校の指定を受ける。</div>
              </div>
              <div class="block">
                <div class="label">昭和49年9月24日</div>
                <div class="value">理事長白石恭治死去により、柳節陽理事長となる。</div>
              </div>
              <div class="block">
                <div class="label">昭和50年10月8日</div>
                <div class="value">創立50周年記念式挙行。</div>
              </div>
              <div class="block">
                <div class="label">昭和52年10月27日</div>
                <div class="value">NHK教育テレビ「福祉の時代～高校福祉教育の現場から」で取り組みの一端を紹介。</div>
              </div>
              <div class="block">
                <div class="label">昭和53年4月1日</div>
                <div class="value">ボランティア活動普及協力校となる。</div>
              </div>
              <div class="block">
                <div class="label">昭和54年6月1日</div>
                <div class="value">校長米澤理退任により、小澤友太郎校長となる。</div>
              </div>
            </div>
          </div>

          <div class="outline-wrap">
            <div class="head">
              <div class="title">第4代校長 小澤友太郎と安定の時代</div>
              <p class="middle-line small m15"></p>
            </div>
            <div class="outline-wrap-block">
              <div class="block">
                <div class="label">昭和57年4月1日</div>
                <div class="value">併設中学校廃止。</div>
              </div>
              <div class="block">
                <div class="label">昭和58年4月1日</div>
                <div class="value">理事長柳節陽退任により、米澤理理事長となる。</div>
              </div>
              <div class="block ">
                <div class="label">昭和58年10月28日</div>
                <div class="value">「多年にわたり社会福祉事業に奉仕」したことにより、厚生大臣表彰。</div>
              </div>
              <div class="block">
                <div class="label">昭和60年10月8日</div>
                <div class="value">創立60周年記念式挙行。</div>
              </div>
              <div class="block">
                <div class="label">平成元年4月1日</div>
                <div class="value">元年・2年度、文部省「奉仕等体験学習研究推進校」となる。</div>
              </div>
              <div class="block">
                <div class="label">平成2年3月28日</div>
                <div class="value">防衛施設庁の補助を受け、普通教室、特別教室鉄筋4階建2,379.5㎡竣工。</div>
              </div>
              <div class="block">
                <div class="label">平成3年3月9日</div>
                <div class="value">防衛施設庁の補助を受け、普通教室、特別教室改造。</div>
              </div>
              <div class="block">
                <div class="label">平成3年12月1日</div>
                <div class="value">理事長米澤理死去により、内田道生理事長となる。</div>
              </div>
            </div>
          </div>

          <div class="outline-wrap">
            <div class="head">
              <div class="title">INTO THE FUTURE 新しき模索の時代</div>
              <p class="middle-line small m15"></p>
            </div>
            <div class="outline-wrap-block">
              <div class="block">
                <div class="label">平成4年3月20日</div>
                <div class="value">防衛施設庁の補助を受け、本館事務棟、普通教室改造。</div>
              </div>
              <div class="block">
                <div class="label">平成4年4月1日</div>
                <div class="value">校長小澤友太郎退任により、権代敏満校長となる。</div>
              </div>
              <div class="block ">
                <div class="label">平成5年9月16日</div>
                <div class="value">普通科を文理進学コース・生活文化コース•国際文化コース・情報OAコース・ビジネスコースに分ける。会計科設置。家政科、商業科、経理科生徒募集停止。</div>
              </div>
              <div class="block">
                <div class="label">平成7年10月6日</div>
                <div class="value">創立70周年記念式挙行。</div>
              </div>
              <div class="block">
                <div class="label">平成8年4月1日</div>
                <div class="value">校長権代敏満退任により、内田道生校長となる。</div>
              </div>
              <div class="block">
                <div class="label">平成8年9月1日</div>
                <div class="value">校長内田追生退任により、ドゥワイトR.ジョンソン校長となる。</div>
              </div>
              <div class="block">
                <div class="label">平成10年4月1日</div>
                <div class="value">普通科に健康福祉コースを設ける。生徒収容定員変更。</div>
              </div>
              <div class="block">
                <div class="label">平成11年4月1日</div>
                <div class="value">理事長内田道生退任により、米澤昭人理事長となる。</div>
              </div>
              <div class="block">
                <div class="label">平成11年9月1日</div>
                <div class="value">校長ドゥワイトR.ジョンソン退任により、吉村洋輔校長となる。</div>
              </div>
              <div class="block">
                <div class="label">平成11年11月26日</div>
                <div class="value">理事長米澤昭人退任により、小川武男理事長となる。</div>
              </div>
              <div class="block ">
                <div class="label">平成12年4月11日</div>
                <div class="value">理事長小川武男退任により、吉村洋輔理事長となる。</div>
              </div>
              <div class="block">
                <div class="label">平成12年9月19日</div>
                <div class="value">理事長吉村洋輔退任により、澤野悦雄理事長となる。</div>
              </div>
              <div class="block">
                <div class="label">平成12年10月6日</div>
                <div class="value">創立75周年記念式挙行。</div>
              </div>
              <div class="block">
                <div class="label">平成13年4月1日</div>
                <div class="value">校長吉村洋輔退任により、田中義人校長となる。</div>
              </div>
              <div class="block">
                <div class="label">平成15年4月1日</div>
                <div class="value">校長田中義人退任により、川口政宏校長となる。<br />
                  法人名を三田尻女子高等学校から三田尻学園に、学校名を三田尻女子高等学校から誠英高等学校に改称し、男女共学を実施、普通科を特別進学コース、情報文化コース、 生活文化コースに分ける。又、会計科を情報会計科と改称し、新たに福祉科を設置。 通信制課程単位制普通科を設置。体育後援会を教育後援会と改称。</div>
              </div>
              <div class="block">
                <div class="label">平成17年2月28日</div>
                <div class="value">防衛施設庁の補助を受け、新講堂(1,045.9㎡)竣工。</div>
              </div>
              <div class="block">
                <div class="label">平成17年4月1日</div>
                <div class="value">校長川口政宏退任により、吉野紀生校長となる。</div>
              </div>
              <div class="block ">
                <div class="label">平成17年8月4日</div>
                <div class="value">テニスコート新設。</div>
              </div>
              <div class="block ">
                <div class="label">平成17年8月29日</div>
                <div class="value">静思寮改修。</div>
              </div>
              <div class="block">
                <div class="label">平成18年9月29日</div>
                <div class="value">創立80周年記念講演会。</div>
              </div>
              <div class="block">
                <div class="label">平成19年4月2日</div>
                <div class="value">理事長澤野悦雄退任により、山田悟理事長となる。 </div>
              </div>
              <div class="block">
                <div class="label">平成21年3月23日</div>
                <div class="value">第二静思寮改修。</div>
              </div>
              <div class="block">
                <div class="label">平成22年6月18日</div>
                <div class="value">国・県の補助を受け、 第1校舎耐震改修。</div>
              </div>
              <div class="block">
                <div class="label">平成23年4月1日</div>
                <div class="value">理事長山田悟退任により、 降矢順治理事長となる。<br/>校長吉野紀生退任により、小松徹校長となる。</div>
              </div>
              <div class="block">
                <div class="label">平成23年7月1日</div>
                <div class="value">国・県の補助を受け、 第3校舎耐震改修。</div>
              </div>
              <div class="block">
                <div class="label">平成24年4月1日</div>
                <div class="value">校長小松徹退任により、降矢順治理事長校長職を兼務。</div>
              </div>
              <div class="block">
                <div class="label">平成24年9月5日</div>
                <div class="value">国・県の補助を受け、 体育館耐震改修。</div>
              </div>
              <div class="block">
                <div class="label">平成25年8月20日</div>
                <div class="value">体育館1階部分改修。</div>
              </div>
              <div class="block">
                <div class="label">平成27年10月6日</div>
                <div class="value">創立90周年記念式挙行。</div>
              </div>
            </div>
          </div>


        </div>
      </div>
    </div>
  </div>
@endsection
