@extends('layout')

@section('content')

  <div id="about" class="control-wrapper idea">
    @include('menu')
    @include('header')

    <!-- key visual  -->
    <div id="page-visual" class="wrapper">
      <div class="visual">

        <img src="{{ asset('img/pc/about/idea/main.jpg') }}" width="100%" alt="">
      </div>
    </div>

<div class="wrapper">
    <div class="cnt-detail content-block">

      <div class="cnt-section">

        <h3 class="title">建学の精神</h3>

        <div class="desc">
          <div class="wrap wrap-inner">
            <div class="perpose">
              <p class="label">至誠一貫</p>
              <!-- <p class="txt">高い志を持ち、誠意を持って努力し、志を貫き通すこと</p> -->
            </div>
          </div>
        </div>
      </div>


      <div class="cnt-section">

        <h3 class="title">校訓</h3>
        <p class="middle-line no"></p>

        <p class="base-wrap">
          誠英高等学校の校訓は以下の三つです。
        </p>

        <div class="desc">
          <div class="wrap wrap-inner">
            <div class="perpose">
              <p class="label">至誠一貫</p>
              <p class="txt">高い志を持ち、誠意を持って努力し、志を貫き通すこと</p>
            </div>
            <div class="perpose">
              <p class="label">規律厳守</p>
              <p class="txt">本校の伝統を守り、よりよい校風を築くために努力すること</p>
            </div>
            <div class="perpose">
              <p class="label">協同一致</p>
              <p class="txt">相手の立場を理解し、お互いの触れ合いを深め、協力し合うこと</p>
            </div>
          </div>
        </div>
      </div>



      <div class="cnt-section edu">

        <h3 class="title">教育方針</h3>

        <p class="middle-line no"></p>

        <div class="base-wrap">
          本校の教育方針は、「至誠一貫」に基づき、生徒一人ひとりが“主人公”となって活躍できる力、すなわち社会で生き抜く力を養成することです。そのために、一人ひとりの個性に合った、きめ細やかな教育を行っています。<br/>
          さらに、学力だけでなく人間力の育成も重要視しており、誠の心を備えた社会貢献できる人材育成を目指しています。
        </div>


        <div class="section-box">
          <div class="sbox ured"><p>社会で生き抜く力の養成</p></div>
          <div class="sbox ublue"><p>生徒一人ひとりの<br/>個性に合った教育</p></div>
          <div class="sbox ugreen"><p>誠の心を備えた<br/>人間力の育成</p></div>
        </div>


        <div class="section">
          <h3 class="title txt-ured">社会で生き抜く力の養成</h3>
          <p class="txt">
            本校では、建学の精神・校訓である「至誠一貫」に基づき、生徒が大きな夢を持ち、それに向かって主体的に取り組み、努力することを重要視し、生徒の夢や目標を達成する力を養成します。さらに、現代の変化の激しい社会や環境においても、柔軟に対応できる適応力を身に付け、国際的な視野を持ち、グローバル人材やグローカル人材として活躍する人材育成を目指しています。
          </p>
        </div>

        <div class="section">
          <h3 class="title txt-ublue">生徒一人ひとりの個性に合った教育</h3>
          <p class="txt">
            本校では、個々の生徒の潜在能力を引き出し、開発することを重視し、生徒一人ひとりの個性に合った教育を行っています。生徒の面倒をきめ細やかに見る体制を取り、教員一同が生徒と向き合い、個々の長所を伸ばし、成長を促すよう、日々全力を尽くしています。
          </p>
        </div>

        <div class="section">
          <h3 class="title txt-ugreen">誠の心を備えた人間力の育成</h3>
          <p class="txt">
            本校が目指す人物像は、「学力を身に付けることだけではなく、誠の心を備えた人間力の育成」にあります。「規律厳守」に基づき、挨拶や礼儀といった基本的なことを日々の生活の中で身に付けながら、「協同一致」が意味する、素直で人を思いやる心を養うことで、社会貢献できる人物を育成します。
          </p>
        </div>

      </div>



      <div class="cnt-section">

        <h3 class="title">近年のフォーカス・ポイント</h3>

        <p class="middle-line no"></p>


          <ul class="ul focus">
            <li class="li">
              <div class="cat">

                <div class="cat-sec">
                  <h3 class="cat-title">アクティブ・ラーニング</h3>
                  <div class="cat-photo">
                    <img src="{{ asset('img/pc/about/idea/focus_01.jpg') }}" alt="">
                  </div>
                </div>

                <div class="cat-detail">
                  生徒達が主体的に考え、行動することを目的としています。これは、「社会で生き抜く力の養成」という本校の教育方針につながります。
                </div>
              </div>
            </li>

            <li class="li">
              <div class="cat">

                <div class="cat-sec">
                  <h3 class="cat-title">ICTを用いた教育</h3>
                  <div class="cat-photo">
                    <img src="{{ asset('img/pc/about/idea/focus_02.jpg') }}" alt="">
                  </div>
                </div>

                <div class="cat-detail">
タブレット導入により、様々な教科で、効率的効果的な授業方法を考案し、展開しています。また、ICTを用いた教育の継続的向上のため、山口大学教育学部と共同研究を行っています。
                </div>
              </div>
            </li>

            <li class="li">
              <div class="cat">

                <div class="cat-sec">
                  <h3 class="cat-title">グローバル人材育成</h3>
                  <div class="cat-photo">
                    <img src="{{ asset('img/pc/about/idea/focus_03.jpg') }}" alt="">
                  </div>
                </div>

                <div class="cat-detail">
                  本校に入学した生徒が、卒業する頃には英語をカタコトでも話せることを目指すだけでなく、異国の文化を理解し、尊重し合う国際理解教育にも力を入れています。グローバル人材だけでなく、広い視野を持ちながら地域貢献できるグローカル人材の育成も目指しています。
                </div>
              </div>
            </li>
          </ul>


      </div>

    </div>




  </div>
</div>
@endsection
