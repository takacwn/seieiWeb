@extends('layout')

@section('content')

	<div id="exam" class="control-wrapper guide points suisen">
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
        <p class="icon-title"><span>入試情報</span><br/>募集要項／推薦入試</p>
      </div>
      <p class="middle-line"></p>
    </div>

		<div class="wrapper">
			<div class="cnt-detail content-block">
				<h4 class="title">平成31年度入学試験に関する日程</h4>
				<p class="middle-line m40"></p>
        <div class="cnt-wrapper">

			  	<div class="cnt-wrap">
			  		<h3 class="h3">① 募集人員</h3>
			  		<p class="txt">
              普通科、情報会計科、福祉科の募集人員総数の50%に相当する人数を限度とします。
            </p>
			  	</div>

			  	<div class="cnt-wrap">
			  		<h3 class="h3">② 出願資格</h3>
			  		<p class="txt">
              平成31年3月中学校卒業見込みの者で、在籍中学校長が推薦し、合格した場合に必ず入学する者。
			  		</p>
			  	</div>


			  	<div class="cnt-wrap">
			  		<h3 class="h3">一般推薦選抜</h3>
			  		<p class="txt">
当該学科・に対する適性及び興味・関心を有し、志願の動機、理由が明白、適切であるとともに、当該学科・コースの教育課程を修了するに足る能力を有すること。
            </p>

			  	</div>

			  	<div class="cnt-wrap">
			  		<h3 class="h3">特別推薦選抜</h3>
			  		<p class="txt">
学習活動・文化活動・スポーツ活動、それぞれの分野において有能な素質があり、心身ともに健康で、当該学科・コースの教育課程を修了するに足る能力を有すること。特別推薦選抜による志願者には、選考により、本校の規定による特待生制度が適用されます。［詳細については、別項参照してください。］<br/>
※ 学習活  における特待生志願者のうち、特別進学コースを希望する者については、他校との併願を認めます。
            </p>
			  	</div>

			  	<div class="cnt-wrap">
            <h3 class="h3">
              ③ 出願受付期間<br/>平成31年1月4日（金）～平成31年1月8日（火）
            </h3>
			  	</div>

			  	<div class="cnt-wrap">
			  		<h3 class="h3 m5">④ 出願手続</h3>
			  		<p class="txt">下記の①②③④を提出し、受験票の交付を受けてください。</p>

			  		<div class="section p0">
        	    <table>
        	    	<tr>
        	    		<td>① 入学願書</td>
        	    		<td>② 推薦書</td>
        	    	</tr>
                <tr>
        	    		<td>③ 調査書</td>
        	    		<td>④ 受験料12,000円</td>
                </tr>
			  			</table>
			  		  <p class="txt">※ 受験料12,000円を募集要項綴じ込みの本校指定の払込取扱票で、ゆうちょ銀行または郵便局窓口にて払い込み、振替払込受付証明書を入学願書に貼付してください。（納入された受験料は払い戻しをしません。）</p>
			  		</div>
          </div>


			  	<div class="cnt-wrap">
            <h3 class="h3">
              ⑤ 試験と面接<br/>平成31年1月10日（木） 受付8:30〜8:50
            </h3>
            <h3 class="h3">■一般推薦選抜</h3>

        	  <table>
        	  	<tr>
        	  		<th class="ora">面接</th>
      	    		<td>9:10〜12:00</td>
        	  	</tr>
			  		</table>

            <h3 class="h3">■特別推薦選抜</h3>
      	    <table>
      	    	<tr>
      	    		<th class="ora">小論文（600字程度）</th>
      	    		<td>9:10〜10:10</td>
      	    	</tr>
      	    	<tr>
      	    		<th class="ora">面接</th>
      	    		<td>10:30〜12:30</td>
      	    	</tr>
		  			</table>

			  		<p class="note">
              1. 受験票、筆記用具、上履きを持参してください。<br/>
              2. 受験に際して病気などの事情により特別な配慮を必要とする者は申し出てください。<br/>
              3. 当日、雪害その他交通機関遅延などのため試験開始時刻までに来校不可能な場合は配慮しますので、電話などで連絡してください。
			  		</p>
			  	</div>

			  	<div class="cnt-wrap">
            <h3 class="h3">
              ⑥ 合格発表
            </h3>
            <p class="txt">平成31年1月15日（火）<br/>在籍中学校長宛に郵送します。校内掲示はしません。電話による問い合わせには応じません。</p>
			  	</div>

			  	<div class="cnt-wrap">
                    <h3 class="h3">⑦ 入学時納入金払込</h3>
                    <p class="txt">入学時納入金は2月8日（金）までに、本校指定の払込取扱票で、ゆうちょ銀行または郵便局窓口にて納入してください。
                        （期日までがない場合は入学を取り消します。また、納入後、入学を辞退する場合は納入金の払い戻しをしません。）
                        ※ 他校併願の特別進学コース志願者については、3月18日（月）までに本校指定の払込取扱票で、ゆうちょ銀行または郵便局窓口にて納入してください。
                    </p>
                </div>

          <div class="cnt-wrap">
            <h3 class="h3">
              ⑧ 仮入学<br/>平成31年3月25日（月） 14:00より
            </h3>
            <ul>
              <li>① 合格内定者は、上記日時に保護者同伴で来校し、所定の手続き（誓約書・住民票の提出など）を行ってください。</li>
              <li>② オリエンテーションを実施します。</li>
              <li>③ 教科書、学用品、上履き等の販売をします。</li>
              <li>④ 特別進学コースのクラス編成テストを実施します。</li>
            </ul>
          </div>

          <div class="cnt-wrap">
            <div class="attention">
              <h4 class="h4">注意事項</h4>
                <p>推薦入試受験者のうち、選抜の結果が不合格になった者で、一般入試一次選抜を志願する者は、1月15日（火）17:00までに、在籍中学校長を経て電話などによる連絡、申し出をすれば一次選抜を受けることができます。この場合、改めて受験手続きをする必要はありません。したがって、該当の受験者は、その旨在籍中学校担任に願い出てください。ただし、二次選抜については再度出願が必要です。</p>
            </div>


			  	</div>
          <p class="go-back"><a href="/exam/points/">前のページに戻る</a></p>
			  </div>
			</div>
		</div>
	</div>

@endsection
