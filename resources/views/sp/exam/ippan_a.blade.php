@extends('layout')

@section('content')

  <div id="exam" class="control-wrapper guide points">
  @include('menu')
  @include('header')

  <!-- key visual  -->
    <div id="page-visual" class="wrapper">
      <div class="visual">
        <img src="{{ asset('img/sp/exam/points/main.jpg') }}" width="100%" alt="">
      </div>
    </div>
    <!-- end key visual -->

    <div id="page-name">
      <div class="inner">
        <p class="icon-title"><span>入試情報</span><br/>募集要項／一般入試（一次選抜）</p>
      </div>
      <p class="middle-line"></p>
    </div>

    <div class="wrapper">
      <div class="cnt-detail content-block p10 m0">
        <h4 class="title">平成31年度入学試験に関する日程</h4>
        <p class="middle-line m40"></p>
        <div class="cnt-wrapper">

          <div class="cnt-wrap">
            <h3 class="h3">① 出願資格</h3>
            <p class="txt">
              次のいずれかに該当する者
            </p>
            <ul>
              <li class="h4">●中学校またはこれに準ずる学校（以下「中学校」という）の卒業者</li>
              <li class="h4">●平成31年3月中学校卒業見込みの者</li>
              <li class="h4">●学校教育法施行規則第63条の各号のいずれかに該当する者</li>
            </ul>
<p class="txt">※ 学習活動、文化活動、スポーツ活動、それぞれの分野において顕著な実績を有する者には、選考により、本校の規定による特待生制度を適用します。（若干名）</p>
          </div>

          <div class="cnt-wrap">
            <h3 class="h3">② 出願受付期間<br/>平成31年1月4日（金）～平成31年1月15日（火）</h3>
          </div>

          <div class="cnt-wrap">
            <h3 class="h3">③ 出願手続</h3>
            <p class="txt m20">下記の①②③を提出し、受験票の交付を受けてください。</p>

            <div class="section">
              <div class="cnt-wrap">
                <table>
                  <tr>
                    <td>① 入学願書</td>
                    <td>② 調査書</td>
                    <td>③ 受験料12,000円</td>
                  </tr>
                </table>
              </div>
            </div>
            <p class="txt">※ 受験料12,000円を募集要項綴じ込みの本校指定の払込取扱票で、ゆうちょ銀行または郵便局窓口にて払い込み、振替払込受付証明書を入学願書に貼付してください。（納入された受験料は払い戻しをしません。）</p>
          </div>


          <div class="cnt-wrap">
            <h3 class="h3">
              ④ 試験と面接
                  </h3>
                  <h3 class="h3">● 普通科（特別進学コース）</h3>

				  <div class="section">
					  <div class="cnt-wrap">
						  <table>
							  <tr>
								  <td colspan="3"><h3 class="h3">平成31年1月17日（木）【受付】 8:30-8:50</h3></td>
							 </tr>
							 <tr>
								  <td class="ora" rowspan="3">学力試験</td>
								  <td>9:10〜10:00</td>
								  <td>国語</td>
							 </tr>
							 <tr>
								  <td>10:20〜11:10</td>
								  <td>数学</td>
							 </tr>
							 <tr>
								  <td>11:30〜12:20</td>
								  <td>英語</td>
							 </tr>
							 <tr>
								  <td class="ora">昼食</td>
								  <td>12:20〜12:55</td>
								  <td></td>
							 </tr>
							 <tr>
								  <td class="ora" rowspan="2">学力試験</td>
								  <td>13:00〜13:50</td>
								  <td>社会</td>
							 </tr>
							 <tr>
								  <td>14:10〜15:00</td>
								  <td>理科</td>
							 </tr>
						 </table>
					 </div>
				 </div>


				  <h3 class="h3">● 普通科（生活文化コース・情報文化コース）<br/>● 情報会計科<br/>● 福祉科</h3>
				  <div class="section">
					  <div class="cnt-wrap">
						  <table>
							  <tr>
								  <td colspan="3"><h3 class="h3">平成31年1月17日（木）【受付】 8:30-8:50</h3></td>
							 </tr>
							 <tr>
								  <td class="ora" rowspan="3">学力試験</td>
								  <td>9:10〜10:00</td>
								  <td>国語</td>
							 </tr>
							 <tr>
								  <td>10:20〜11:10</td>
								  <td>数学</td>
							 </tr>
							 <tr>
								  <td>11:30〜12:20</td>
								  <td>英語</td>
							 </tr>
							 <tr>
								  <td class="ora">昼食</td>
								  <td>12:20〜12:55</td>
								  <td></td>
							 </tr>
							 <tr>
								  <td class="ora">面接</td>
								  <td>13:00〜16:00</td>
								  <td>面接</td>
							 </tr>
						 </table>
					 </div>
				 </div>


			  					<p class="txt">
1. 受験票、筆記用具、消しゴム、定規（分度器は許可しません）、コンパスを持参してください。下敷きの使用は認めません。<br/>
2. 上履きを持参してください。<br/>
3. 携帯電話の持ち込みは禁止します。<br/>
4. 受験に際して病気などの事情により特別な配慮を必要とする者は申し出てください。<br/>
5. 当日、雪害その他交通機関遅延などのため試験開始時刻までに来校不可能な場合は配慮しますので、電話などで連絡してください。
			  					</p>
			  				</div>

          <div class="cnt-wrap">
            <h3 class="h3">
              ⑤ 合格発表<br/>平成31年2月1日（金）
            </h3>
            <p class="txt">在籍中学校長宛に郵送します。校内掲示はしません。電話による問い合わせには応じません。</p>
          </div>

          <div class="cnt-wrap">
            <h3 class="h3">
              ⑥ 入学時納入金払込
            </h3>
            <p class="txt">
            入学時納入金は3月18日（月）までに、本校指定の払込取扱票で、ゆうちょ銀行または郵便局窓口にて納入してください。
             （期日までに納入がない場合は入学を取り消します。また、納入後、入学を辞退する場合は納入金の払い戻しをしません。）</p>
          </div>

          <div class="cnt-wrap">
            <h3 class="h3">
              ⑦ 仮入学<br/>平成31年3月25日（月） 14:00より
            </h3>
            <ul>
              <li>① 合格内定者は、上記日時に保護者同伴で来校し、所定の手続き（誓約書・住民票の提出など）を行ってください。</li>
              <li>② オリエンテーションを実施します。</li>
              <li>③ 教科書、学用品、上履き等の販売をします。</li>
              <li>④ 特別進学コースのクラス編成テストを実施します。</li>
            </ul>
          </div>
          <p class="go-back"><a href="/exam/points/">前のページに戻る</a></p>
        </div>
      </div>
    </div>
  </div>

@endsection
