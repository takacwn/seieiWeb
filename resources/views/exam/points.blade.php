@extends('layout')

@section('content')

	<div id="exam" class="control-wrapper guide points">
	@include('menu')
	@include('header')

	<!-- key visual  -->
		<div id="page-visual" class="wrapper">
			<div class="visual">
				<img src="{{ asset('img/pc/exam/points/main.jpg') }}" width="100%" alt="">
			</div>
		</div>
		<!-- end key visual -->




		<div class="wrapper">
			<div class="cnt-detail content-block">
			  	<div class="cnt-section">
			  		<h3 class="title">各入試要項</h3>
			  		<p class="middle-line m40"></p>
			  		<div class="wrap">
        		     <h3 class="h3">推薦入試、一般入試（一次選抜）、一般入試（二次選抜）各入試要項については下記のボタンよりご確認ください。</h3>
			  			<div class="tabs">
			  				<div class="tab anchor">
			  					<p><a href="#suisen">推薦入試</a></p>
			  				</div>
			  				<div class="tab anchor">
			  					<p><a href="#ippan_a">一般入試（一次選抜）</a></p>
			  				</div>
			  				<div class="tab anchor">
			  					<p><a href="#ippan_b">一般入試（二次選抜）</a></p>
			  				</div>
			  			</div>
			  		</div>

                    <br/><br/><h4 class="title">平成31年度入学試験に関する日程</h4>
                    <p class="middle-line m40"></p>
                    <div class="cnt-wrapper">
                        <div class="wrap suisen">
                            <div class="section">
                                <h3 class="h3">■ 推薦入試</h3>
                                <div class="cnt-wrap">
                                    <table>
                                        <tr class="ora">
                                            <th></th>
                                            <th>願書受付期間</th>
                                            <th>試験日</th>
                                            <th>合格発表</th>
                                            <th>入学時納入金払込締切</th>
                                        </tr>
                                        <tr>
                                            <th class="align-left">一般推薦選抜</th>
                                            <td rowspan="2">平成31年1月4日（金）<br/>から <br/>平成31年1月8日（火）</td>
                                            <td rowspan="2">平成31年1月10日（木）</td>
                                            <td rowspan="2">平成31年1月15日（火）</td>
                                            <td>平成31年2月8日（金）</td>
                                        </tr>
                                        <tr>
                                            <th class="align-left">特別推薦選抜</th>
                                            <td>平成31年2月8日（金）<br/>※3月18日（月）</td>
                                        </tr>
                                    </table>
                                </div>
                                <p class="txt">※他校併願の特別進学コース志願者については、入学時納入金払込締切日を3月18日（月）とします。</p>
                            </div>
                        </div>

                        <div class="wrap ippan">
                            <div class="section">
                                <h3 class="h3">■ 一般入試</h3>
                                <div class="cnt-wrap">
                                    <table>
                                        <tr class="ora">
                                            <th></th>
                                            <th>願書受付期間</th>
                                            <th>試験日</th>
                                            <th>合格発表</th>
                                            <th>入学時納入金払込締切</th>
                                        </tr>
                                        <tr>
                                            <th class="align-left">一次選抜</th>
                                            <td>平成31年1月4日（金）<br/>から <br/>平成31年1月15日（火）</td>
                                            <td>平成31年1月17日（木）</td>
                                            <td>平成31年2月1日（金）</td>
                                            <td>平成31年3月18日（月）</td>
                                        </tr>
                                        <tr>
                                            <th class="align-left">二次選抜</th>
                                            <td>平成31年3月11日（月）<br/>から <br/>平成31年3月15日（金）</td>
                                            <td>平成31年3月19日（火）</td>
                                            <td>平成31年3月22日（金）</td>
                                            <td>平成31年3月25日（月）</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="wrap">
                            <h4 class="title">推薦入試・一般入試に共通する事項</h4>
                            <p class="middle-line m40"></p>
                            <div class="section">
                                <div class="left common01">
                                    <div class="cnt-wrap">
                                        <h3 class="h3">① 募集学科・人員</h3>
                                        <table>
                                            <tr>
                                                <th class="ora h240" rowspan="3">普通科〈200名〉</th>
                                                <td class="align-left">特別進学コース(80名）男子・女子<br/>※仮入学当日のクラス編成テストでクラス分けします。<br/>（アドバンスト・ユニバーサル）</td>
                                            </tr>
                                            <tr>
                                                <td class="align-left">生活文化コース(80名）女子<br/>食文化専攻38名<br/>生活教養専攻42名</td>
                                            </tr>
                                            <tr>
                                                <td class="align-left">情報文化コース(40名） 女子</td>
                                            </tr>
                                            <tr>
                                                <th class="ora">情報会計科〈70名〉</th>
                                                <td class="align-left">(70名） 男子・女子</td>
                                            </tr>
                                            <tr>
                                                <th class="ora">福祉科〈70名〉</th>
                                                <td class="align-left">(70名） 男子・女子</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="right common02">
                                    <div class="cnt-wrap">
                                        <h3 class="h3">② 入学時納入金</h3>
                                        <table>
                                            <tr>
                                                <th class="ora">入学金</th>
                                                <td>110,000円</td>
                                            </tr>
                                            <tr>
                                                <th class="ora">校友会入会金</th>
                                                <td>2,000円</td>
                                            </tr>
                                            <tr>
                                                <th class="ora">育友会入会金</th>
                                                <td>1,000円</td>
                                            </tr>
                                            <tr>
                                                <th class="ora">教育後援会入会金</th>
                                                <td>1,000円</td>
                                            </tr>
                                            <tr>
                                                <th class="ora">合計</th>
                                                <td>114,000円</td>
                                            </tr>
                                        </table>
                                    </div>
                                    <p class="txt">※ 合格者に本校指定の払込取扱票を中学校を通じて渡します。入学時納入金払込締切日までにゆうちょ銀行または郵便局窓口にて納入してください。</p>
                                </div>
                            </div>
                        </div>

                        <div class="wrap common03">
                            <div class="cnt-wrap">
                                <div class="section">
                                    <h3 class="h3">③ 毎月の校納金（就学支援金 授業料等減免制度）</h3>
                                    <table>
                                        <tr class="ora">
                                            <th>授業料</th>
                                            <th>教育充実費</th>
                                            <th>校友会費</th>
                                            <th>育友会費</th>
                                            <th>育友会内容充実費</th>
                                            <th>教育後援会費</th>
                                            <th>合計</th>
                                        </tr>
                                        <tr>
                                            <td>25,000円</td>
                                            <td>6,000円</td>
                                            <td>900円</td>
                                            <td>400円</td>
                                            <td>400円</td>
                                            <td>400円</td>
                                            <td>33,100円</td>
                                        </tr>
                                    </table>
                                </div>
                                <p class="txt m20">※ 就学支援金、授業料等減免制度適用前の金額です。<br/><br/>【適用後の校納金額】</p>

                                <div class="section">
                                    <table>
                                        <tr class="ora">
                                            <th colspan="2">基準額等</th>
                                            <th rowspan="2">倍率等</th>
                                            <th rowspan="2">就学支援金</br>支給額（月額）</th>
                                            <th rowspan="2">授業料等</br>減免額（月額）</th>
                                            <th rowspan="2">合計</th>
                                        </tr>
																				<tr>
																					<td colspan="2">道府県民税・市町村民税所得割額の合算額</br>（両親合算）</td>
																				</tr>
                                        <tr>
                                            <td colspan="2">50万7,000円以上</td>
                                            <td>非該当</td>
                                            <td>支給なし</td>
                                            <td>-</td>
                                            <th>33,100円</th>
                                        </tr>
                                        <tr>
                                            <td colspan="2">50万7,000円未満</td>
                                            <td>標準額(1倍）</td>
                                            <td>9,900円</td>
                                            <td>-</td>
                                            <th>23,200円</th>
                                        </tr>
                                        <tr>
                                            <td colspan="2">25万7,500円未満</td>
                                            <td>1.5倍加算</td>
                                            <td>14,850円</td>
                                            <td>-</td>
                                            <th>18,250円</th>
                                        </tr>
                                        <tr>
                                            <td colspan="2">8万5,500円未満</td>
                                            <td>2倍加算</td>
                                            <td>19,800円</td>
                                            <td>-</td>
                                            <th>13,300円</th>
                                        </tr>
                                        <tr>
                                            <td rowspan="2" class="half">非課税(0円）</td>
                                            <td class="half">生活保護以外</td>
                                            <td rowspan="2">2.5倍加算</td>
                                            <td rowspan="2">24,750円</td>
                                            <td>2,475円</td>
                                            <th>5,875円</th>
                                        </tr>
                                        <tr>
                                            <td class="half">生活保護</td>
                                            <td>4,950円</td>
                                            <th>3,400円</th>
                                        </tr>
                                    </table>
                                </div>
                                <p class="txt">※ 就学支援金、授業料等減免制度については、入学時に詳しく説明します。<br/>
                                    ※ 平成30年度現在の制度内容であり、来年度以降は変更となる可能性があります。</p>
                            </div>
                        </div>

                        <div class="wrap common04">
                            <div class="cnt-wrap">
                                <div class="section">
                                    <h3 class="h3">④ 特待生制度</h3>
                                    <p class="txt">学習活動・文化活動・スポーツ活動、それぞれの分野において有能な素質のある心身ともに健康な生徒で、本校特待生制度希望者は、特別推薦選抜を受験してください。審議の上、下記のいずれかに決定します。<br/>
                                        （特別進学コースの受験者のうち3年間9教科の評定合計が、110以上の者は特待生AA、100以上の者は特待生A、90以上の者は特待生B）</p>
                                    <table>
                                        <tr>
                                            <th class="ora" style="width:15%!important;"></th>
                                            <th style="width:70%!important;">内    容</th>
                                            <th style="width:15%!important;">実納付額</th>
                                        </tr>
                                        <tr>
                                            <th class="ora align-left">特待生AA</th>
                                            <td class="align-left">毎月の授業料(就学支援金を除いた額)・教育充実費・校友会費・育友会費・育友会内容充実費を免除</td>
                                            <td>400円</td>
                                        </tr>
                                        <tr>
                                            <th class="ora align-left">特待生A</th>
                                            <td class="align-left">毎月の授業料(就学支援金を除いた額)・教育充実費を免除</td>
                                            <td>2,100円</td>
                                        </tr>
                                        <tr>
                                            <th class="ora align-left">特待生B</th>
                                            <td class="align-left">毎月の授業料(就学支援金を除いた額)を免除</td>
                                            <td>8,100円</td>
                                        </tr>
                                    </table>
                                    <p class="txt">※ いずれの特待生についても、入学金は免除します。</p>
                                </div>
                            </div>
                        </div>

                        <div class="wrap">
                            <div class="cnt-wrap common05">
                                <div class="section">
                                    <h3 class="h3">⑤ スカラシップ制度</h3>
                                    <p class="txt">本校に入学後、学習活動・文化活動・スポーツ活動に関してきわめて優秀な実績を上げた生徒は、2年次より審議の上、特待生Aまたは特待生Bのいずれかに決定します。</p>
                                </div>
                            </div>
                        </div>

                        <div class="wrap">
                            <div class="cnt-wrap common06">
                                <div class="section">
                                    <h3 class="h3">⑥ 遠距離通学補助制度</h3>
                                    <p class="txt">電車（新幹線・特急を除く）、バス、船による通学定期運賃のうち、一定額（月額1万円）を超える経費を補助する本校独自の制度があります。</p>
                                </div>
                            </div>
                        </div>

                        <div class="wrap">
                            <div class="cnt-wrap common07">
                                <div class="section">
                                    <h3 class="h3">⑦ 奨学制度</h3>
                                    <p class="txt">山口県ひとづくり財団等の奨学制度があります。これについては、入学時に詳しく説明します。</p>
                                </div>
                            </div>
                        </div>

                        <div class="wrap">
                            <div class="cnt-wrap common08">
                                <div class="section">
                                    <h3 class="h3">⑧ 寮について</h3>
                                    <p class="txt">遠隔地からの生徒に優先的に入寮を斡旋します。（女子のみ）</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


                <div class="wrap">
                    <h4 class="title" id="suisen">推薦入試</h4>
                    <p class="middle-line m40"></p>
                    <div class="section">
                        <div class="wrap">
                            <h3 class="h3">① 募集人員</h3>
                            <p class="txt">普通科、情報会計科、福祉科の募集人員総数の50%に相当する人数を限度とします。</p>
                        </div>

                        <div class="wrap">
                            <h3 class="h3">② 出願資格</h3>
                            <p class="txt">平成31年3月中学校卒業見込みの者で、在籍中学校長が推薦し、合格した場合に必ず入学する者。</p>
                        </div>

                        <div class="wrap">
                            <h3 class="h3">一般推薦選抜</h3>
                            <p class="txt">当該学科・コースに対する適性及び興味・関心を有し、志願の動機、理由が明白、適切であるとともに、当該学科・コースの教育課程を修了するに足る能力を有すること。</p>
                        </div>

                        <div class="wrap">
                            <h3 class="h3">特別推薦選抜</h3>
                            <p class="txt">学習活動・文化活動・スポーツ活動、それぞれの分野において有能な素質があり、心身ともに健康で、当該学科・コースの教育課程を修了するに足る能力を有すること。特別推薦選抜による志願者には、選考により、本校の規定による特待生制度が適用されます。［詳細については、別項参照してください。］<br/>
                                ※ 学習活動の分野における特待生志願者のうち、特別進学コースを希望する者については、他校との併願を認めます。</p>
                        </div>

                        <div class="wrap">
                            <h3 class="h3">③ 出願受付期間<br/>平成31年1月4日（金）～平成31年1月8日（火）</h3>
                        </div>

                        <div class="wrap">
                            <h3 class="h3">④ 出願手続</h3>
                            <p class="txt m20">下記の①②③④を提出し、受験票の交付を受けてください。</p>
                            <div class="section">
                                <div class="cnt-wrap">
                                    <table>
                                        <tr>
                                            <td>① 入学願書</td>
                                            <td>② 推薦書</td>
                                            <td>③ 調査書（本校所定の様式）</td>
                                            <td>④ 受験料12,000円</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <p class="txt">※ 受験料12,000円を募集要項綴じ込みの本校指定の払込取扱票で、ゆうちょ銀行または郵便局窓口にて払い込み、振替払込受付証明書を入学願書に貼付してください。<u>納入された受験料の払い戻しはいたしません。</u></p>
                        </div>

                        <div class="wrap">
                            <h3 class="h3">⑤ 試験と面接<br/>平成31年1月10日（木） 受付8:30〜8:50</h3>

                            <div class="section">
                                <div class="cnt-wrap">
                                    <table>
                                        <tr>
                                            <th class="ora">一般推薦選抜</th>
                                            <td>面接</td>
                                            <td>9:10〜12:00</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                            <div class="section">
                                <div class="cnt-wrap">
                                    <table>
                                        <tr>
                                            <th rowspan="2" class="ora">特別推薦選抜</th>
                                            <td>小論文（600字程度）</td>
                                            <td>9:10〜10:10</td>
                                        </tr>
                                        <tr>
                                            <td>面接</td>
                                            <td>10:30〜12:30</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <p class="txt">1. 受験票、筆記用具、上履きを持参してください。<br/>
                                2. 受験に際して病気などの事情により特別な配慮を必要とする者は申し出てください。<br/>
                                3. 当日、雪害その他交通機関遅延などのため試験開始時刻までに来校不可能な場合は配慮しますので、電話などで連絡してください。
                            </p>
                        </div>

                        <div class="wrap">
                            <h3 class="h3">⑥ 合格発表<br/>平成31年1月15日（火）</h3>
                            <p class="txt">在籍中学校長宛に郵送します。<u><b>校内掲示はしません。</b></u>電話による問い合わせには応じません。</p>
                        </div>

                        <div class="wrap">
                            <h3 class="h3">⑦ 入学時納入金払込</h3>
                            <p class="txt">入学時納入金は<u><b>2月8日（金）までに、</b></u>合格通知書に同封された本校指定の払込取扱票で、ゆうちょ銀行または郵便局窓口にて納入してください。<br/>
                                期日までに納入がない場合は入学資格を失いますのでご注意ください。また、納入後、<u>入学を辞退する場合は納入金の払い戻しはいたしません。</u><br/>
                                ※ 他校併願の特別進学コース志願者については、<u><b>3月18日（月）までに、</b></u>合格通知書に同封された本校指定の払込取扱票で、ゆうちょ銀行または郵便局窓口にて納入してください。
                            </p>
                        </div>


                        <div class="wrap">
                            <h3 class="h3">⑧ 仮入学<br/>平成31年3月25日（月） 14:00より</h3>
                            <ul>
                                <li>① 合格内定者は、上記日時に保護者同伴で来校し、所定の手続き（誓約書・住民票の提出など）を行ってください。</li>
                                <li>② オリエンテーションを実施します。</li>
                                <li>③ 教科書、学用品、上履き等の販売をします。</li>
                                <li>④ 特別進学コースのクラス編成テストを実施します。</li>
                            </ul>
                        </div>

                        <div class="wrap">
                            <div class="attention">
                                <h4 class="h4">注意事項</h4>
                                <p>推薦入試受験者のうち、選抜の結果が不合格になった者で、一般入試一次選抜を志願する者は、<u><b>1月15日（火）17:00までに、</b></u>在籍中学校長を経て電話などによる連絡、申し出をすれば一次選抜を受けることができます。この場合、改めて受験手続きをする必要はありません。したがって、該当の受験者は、その旨在籍中学校担任に願い出てください。ただし、二次選抜については再度出願が必要です。
                                </p>
                            </div>
                        </div>


                    </div>




                    <div class="wrap"><br/><br/>
                        <h4 class="title" id="ippan_a">一般入試（一次選抜）</h4>
                        <p class="middle-line m40"></p>
                        <div class="section">
                            <div class="wrap">
                                <h3 class="h3">① 出願資格</h3>
			  					<p class="txt">次のいずれかに該当する者</p>
                                <ul>
                                    <li class="h4">●中学校またはこれに準ずる学校（以下「中学校」という）の卒業者</li>
                                    <li class="h4">●平成31年3月中学校卒業見込みの者</li>
                                    <li class="h4">●学校教育法施行規則第95条の各号のいずれかに該当する者</li>
                                </ul>
			  					<p class="txt">※ 学習活動、文化活動、スポーツ活動、それぞれの分野において顕著な実績を有する者には、選考により、本校の規定による特待生制度を適用します。（若干名）</p>
                            </div>

			  				<div class="wrap">
                                <h3 class="h3">② 出願受付期間<br/>平成31年1月4日（金）～平成31年1月15日（火）</h3>
			  				</div>

			  				<div class="wrap">
			  					<h3 class="h3">③ 出願手続</h3>
			  					<p class="txt m20">下記の①②③を提出し、受験票の交付を受けてください。</p>

			  					<div class="section">
			  						<div class="cnt-wrap">
                                        <table>
                                            <tr>
                                                <td>① 入学願書</td>
                                                <td>② 調査書（本校所定の様式）</td>
                                                <td>③ 受験料12,000円</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <p class="txt">※ 受験料12,000円を募集要項綴じ込みの本校指定の払込取扱票で、ゆうちょ銀行または郵便局窓口にて払い込み、振替払込受付証明書を入学願書に貼付してください。<u>納入された受験料の払い戻しはいたしません。</u></p>
                            </div>

                            <div class="wrap">
                                <h3 class="h3">④ 試験と面接</h3>
																<div class="left nittei01">
                                <h3 class="h3">● 普通科（特別進学コース）</br>　</br>　</h3>
                                <div class="section">
                                    <div class="cnt-wrap">
                                        <table>
                                            <tr>
                                                <td colspan="3"><h3 class="h3">平成31年1月17日（木）【受付】 8:30～8:50</h3></td>
                                            </tr>
                                            <tr>
                                                <td class="ora" rowspan="3" style="width:25%!important;">学力試験</td>
																								<td class="ora" style="width:25%!important;">国語</td>
                                                <td style="width:50%!important;">9:10〜10:00</td>
                                            </tr>
                                            <tr>
																							  <td class="ora">数学</td>
                                                <td>10:20〜11:10</td>
                                            </tr>
                                            <tr>
																						  	<td class="ora">英語</td>
                                                <td>11:30〜12:20</td>
                                            </tr>
                                            <tr>
                                                <td class="ora" colspan="2">昼食・休憩</td>
                                                <td>12:20〜12:55</td>
                                            </tr>
                                            <tr>
                                                <td class="ora" rowspan="2">学力試験</td>
																								<td class="ora">社会</td>
                                                <td>13:00〜13:50</td>
                                            </tr>
                                            <tr>
																							  <td class="ora">理科</td>
                                                <td>14:10〜15:00</td>
                                            </tr>
                                        </table>
																			</div>
                                    </div>
																	</div>

																	<div class="right nittei02">
                                <h3 class="h3">● 普通科（生活文化コース・情報文化コース）<br/>● 情報会計科<br/>● 福祉科</h3>
                                <div class="section">
                                    <div class="cnt-wrap">
                                        <table>
                                            <tr>
                                                <td colspan="3"><h3 class="h3">平成31年1月17日（木）【受付】 8:30～8:50</h3></td>
                                            </tr>
                                            <tr>
                                                <td class="ora" rowspan="3" style="width:25%!important;">学力試験</td>
																								<td class="ora" style="width:25%!important;">国語</td>
                                                <td style="width:50%!important;">9:10〜10:00</td>
                                            </tr>
                                            <tr>
																							  <td class="ora">数学</td>
                                                <td>10:20〜11:10</td>
                                            </tr>
                                            <tr>
																							  <td class="ora">英語</td>
                                                <td>11:30〜12:20</td>
                                            </tr>
                                            <tr>
                                                <td class="ora" colspan="2">昼食・休憩</td>
                                                <td>12:20〜12:55</td>
                                            </tr>
                                            <tr>
                                                <td class="ora" colspan="2" style="height: 66px!important;">面接</td>
                                                <td>13:00〜16:00</td>
                                            </tr>
                                        </table>
																			</div>
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

                            <div class="wrap">
                              <h3 class="h3">⑤ 合格発表<br/>平成31年2月1日（金）</h3>
                              <p class="txt">在籍中学校長宛に郵送します。<u><b>校内掲示はしません。</b></u>電話による問い合わせには応じません。</p>
                            </div>

                            <div class="wrap">
                                <h3 class="h3">⑥ 入学時納入金払込</h3>
                                <p class="txt">入学時納入金は<u><b>3月18日（月）までに、</b></u>合格通知書に同封された本校指定の払込取扱票で、ゆうちょ銀行または郵便局窓口にて納入してください。期日までに納入がない場合は入学資格を失いますのでご注意ください。また、納入後、<u>入学を辞退する場合は納入金の払い戻しをしません。</u></p>
                            </div>

			  			  <div class="wrap">
                              <h3 class="h3">⑦ 仮入学<br/>平成31年3月25日（月） 14:00より</h3>
                              <ul>
                                  <li>① 合格内定者は、上記日時に保護者同伴で来校し、所定の手続き（誓約書・住民票の提出など）を行ってください。</li>
                                  <li>② オリエンテーションを実施します。</li>
                                  <li>③ 教科書、学用品、上履き等の販売をします。</li>
                                  <li>④ 特別進学コースのクラス編成テストを実施します。</li>
                              </ul>
                            </div>
                        </div>



                        <div class="wrap"><br/><br/>
                            <h4 class="title" id="ippan_b">一般入試（二次選抜）</h4>
                            <p class="middle-line m40"></p>
                            <div class="section">
                                <div class="wrap">
                                    <h3 class="h3">① 出願資格</h3>
                                    <p class="txt">次のいずれかに該当する者</p>
                                    <ul>
                                        <li class="h4">●中学校またはこれに準ずる学校（以下「中学校」という）の卒業者</li>
                                        <li class="h4">●平成31年3月中学校卒業見込みの者</li>
                                        <li class="h4">●学校教育法施行規則第95条の各号のいずれかに該当する者</li>
                                    </ul>
                                </div>

                                <div class="wrap">
                                    <h3 class="h3">② 出願受付期間<br/>平成31年3月11日（月）～平成31年3月15日（金）</h3>
                                </div>

                                <div class="wrap">
                                    <h3 class="h3">③ 出願手続</h3>
                                    <p class="txt m20">下記の①②③を提出し、受験票の交付を受けてください。</p>
                                    <div class="section">
                                        <div class="cnt-wrap">
                                            <table>
                                                <tr>
                                                    <td>① 入学願書</td>
                                                    <td>② 調査書（本校所定の様式）</td>
                                                    <td>③ 受験料12,000円</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <p class="txt">※ 受験料12,000円を募集要項綴じ込みの本校指定の払込取扱票で、ゆうちょ銀行または郵便局窓口にて払い込み、振替払込受付証明書を入学願書に貼付してください。<u>納入された受験料の払い戻しはいたしません。</u></p>
                                </div>

                                <div class="wrap">
                                    <div class="section">
                                        <div class="cnt-wrap">
                                            <table>
																						  	<tr>
																									  <td colspan="2"><h3 class="h3">平成31年3月19日（火）【受付】 8:30～8:50</h3></td>
																							  </tr>
                                                <tr>
                                                    <td class="ora">小論文（600字程度）</td>
                                                    <td>9:10〜10:10</td>
                                                </tr>
                                                <tr>
                                                    <td class="ora">面接</td>
                                                    <td>10:30〜12:30</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <p class="txt">1. 受験票、筆記用具、上履きを持参してください。<br/>
                                        2. 受験に際して病気などの事情により特別な配慮を必要とする者は申し出てください。<br/>
                                        3. 当日、雪害その他交通機関遅延などのため試験開始時刻までに来校不可能な場合は配慮しますので、電話などで連絡してください。
                                    </p>
                                </div>

                                <div class="wrap">
                                    <h3 class="h3">⑤ 合格発表<br/>平成31年3月22日（金）</h3>
                                    <p class="txt">在籍中学校長宛に郵送します。<u><b>校内掲示はしません。</b></u>電話による問い合わせには応じません。</p>
                                </div>

                                <div class="wrap">
                                    <h3 class="h3">⑥ 入学時納入金払込</h3>
                                    <p class="txt">入学時納入金は<u><b>3月25日（月）までに、</b></u>本校指定の払込取扱票で、ゆうちょ銀行または郵便局窓口にて納入してください。期日までに納入がない場合は入学資格を失いますのでご注意ください。また、納入後、<u>入学を辞退する場合は納入金の払い戻しはいたしません。</u></p>
                                </div>

                                <div class="wrap">
                                    <h3 class="h3">⑦ 仮入学<br/>平成31年3月25日（月） 14:00より</h3>
                                    <ul>
                                        <li>① 合格内定者は、上記日時に保護者同伴で来校し、所定の手続き（誓約書・住民票の提出など）を行ってください。</li>
                                        <li>② オリエンテーションを実施します。</li>
                                        <li>③ 教科書、学用品、上履き等の販売をします。</li>
                                        <li>④ 特別進学コースのクラス編成テストを実施します。</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

			<div class="cnt-section">
				<h3 class="title">資料請求</h3>
				<p class="middle-line no"></p>
				<!-- subject  -->
				<div class="subject">
					2019年度の誠英高等学校募集要項は【資料請求ページ】からもPDFファイルをダウンロード出来ます。<br/>
					また紙面での学校案内パンフレット、募集要項についても【資料請求ページ】よりお願いいたします。
				</div>
                <div class="buttons"><a href="/download"><p class="button ora">資料請求</a></p>
                        </div>

			</div>


                    </div>
                </div>
            </div>
		</div>
	</div>
</div>

@endsection
