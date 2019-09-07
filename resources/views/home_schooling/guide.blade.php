@extends('layout')

@section('content')

	<div id="home_schooling" class="control-wrapper guide">
	@include('menu')
	@include('header')

	<!-- key visual  -->
		<div id="page-visual" class="wrapper">
			<div class="visual">
				<img src="{{ asset('img/pc/home_schooling/guide/main.jpg') }}" width="100%" alt="">
			</div>
		</div>
		<!-- end key visual -->

		<div class="wrapper">
			<div class="cnt-detail content-block">

				<div class="cnt-section">

					<h3 class="title">入学案内</h3>
					<p class="middle-line blue m40"></p>


					<p class="read">
						平成30年度、2019年度(平成31年度)の募集要項については、下記のPDF資料よりご覧ください。
					</p>

					<div class="desc">
						<div class="wrap wrap-inner">
							<p><a href="{{ asset('pdf/seiei_tusin_bosyu_youkou2018.pdf') }}" target="_blank">平成30年度 募集要項</a><br/>
							<a href="{{ asset('pdf/seiei_tusin_bosyu_youkou2019.pdf') }}" target="_blank">2019年度(平成31年度) 募集要項</a></p>
						</div>
					</div>
				</div>

					<div class="desc">

						<div class="tabs">
							<div class="tab active">
								<p>新入生</p>
							</div>
							<div class="tab">
								<p>編入生</p>
							</div>
							<div class="tab">
								<p>転入生</p>
							</div>
						</div>
					</div>

					<div class="cnt-wrapper">

						<div class="cnt" style="display: block">

							<div class="wrap">
								<h3 class="h3">■ 出願資格</h3>
								<p class="txt">
									・中学校卒業または卒業見込みの人<br/>
									・高校1年の途中で退学した人<br/>
									※ いずれも場合も山口県・島根県在住に限る</p>
							</div>

							<div class="wrap">
								<h3 class="h3">■ 受付期間</h3>
								<p class="txt">
									4月（前期）入学生：2月中旬以降〜3月中旬以降の指定日<br/>
									10月（後期）入学生：8月中旬以降〜9月中旬以降の指定日<br/>
									◎ 窓口受付時間：午前8時20分〜午後4時50分（土・日・月・祝日を除く）<br/>
									※ ただし、休日が変更になる場合や土日に受付可能な日もあるので事前に電話で確認のこと<br/>
									◎ 郵送の場合：前期・後期ともに指定日必着
								</p>
							</div>


							<div class="wrap">
								<h3 class="h3">■ 出願書類</h3>
								<p class="txt">
									① 入学願書（本校指定用紙）<br/>
									② 入学志願者調査書（本校指定用紙に出身中学で作成）<br/>
									③ 教育課程表（出身高校で取得）<br/>
									④ 住民票（1か月以内に取得のもの・本人の氏名・性別・住所・生年月日のみで良い）<br/>
									※ ①は保護者欄以外、本人自筆・押印・ふりがなを確実に。所定の位置に写真(3ヶ月以内に撮影・無帽・正面上半身の縦4cmx横3cm)の貼り付け<br/>
									※ ②は卒業後5年を経過し作成できない場合、代わりに卒業証明書<br/>
									※ ③は高校1年の修了（履修満了）時に退学した人のみ提出
								</p>

							</div>

							<div class="wrap">
								<h3 class="h3">■ 出願</h3>
								<p class="txt">
									上記の出願書類に入学検定料12,000円を添えて出願<br/>
									※ ただし同年度に本校の全日制へ出願した場合は免除となる。（どこの高校へも入学していない場合に限る）<br/>
									郵送の場合は、入学検定料を郵便普通為替に換えて出願書類と一緒に簡易書留で郵送
								</p>

							</div>

							<div class="wrap">
								<h3 class="h3">■ 選抜方法</h3>
								<p class="txt">
									選抜試験（書類審査・面接試験）は、願書を提出した順に日時を決めて実施<br/>
									◎ 合否の発表は後日、出身中学校長及び本人宛に書面にて通知<br/>
									※ 未成年者の場合、面接試験は保護者同伴
								</p>
							</div>

							<div class="wrap">
								<h3 class="h3">■ 入学手続き・納入金</h3>
								<p class="txt">
									◎ 合格通知を受領後、受領日を含め7日以内に入学時納入金（年額分）を一括納入<br/>
									◎ 合格通知を受領後、指定の期日（約1ヶ月以内）までに授業料（年額分）を一括納入<br/>
									◎ 必要書類を指定期日までに提出
								</p>

								<div class="section">
									<div class="left">
										<div class="cnt-wrap">
											<h4 class="h4">入学時納入金（年額分）</h4>
											<table>
												<tr>
													<th>入学金</th>
													<td>30,000円</td>
												</tr>
												<tr>
													<th>教育充実費</th>
													<td>24,000円</td>
												</tr>
												<tr>
													<th>生徒会費</th>
													<td>3,600円</td>
												</tr>
												<tr>
													<th>諸費</th>
													<td>2.400円</td>
												</tr>
												<tr>
													<th class="sum">合計</th>
													<td class="sum">60,000円</td>
												</tr>
											</table>
										</div>
									</div>
									<div class="right">
										<div class="cnt-wrap">
											<h4 class="h4">授業料（年額分）</h4>
											<table>
												<tr>
													<th>授業料</th>
													<td>1単位　8,000円 x 登録単位数</td>
												</tr>
												<tr>
													<th>就学支援金</th>
													<td>別途計算</td>
												</tr>
												<tr>
													<th class="sum">実納付額</th>
													<td class="sum">授業料 − 就学支援金</td>
												</tr>
											</table>
										</div>
									</div>
								</div>

								<p class="note">
									※ その他、教科書・学習書代、指定用品代（上履きスリッパ、専用封筒）を初回来校日に納入 <br>
									★ 期日までに入学時納入金のお支払いがない場合は、入学辞退とみなします。<br>
									★ いかなる場合でも、一旦納入いただいた納入金は原則として返金いたしません。
								</p>
							</div>

						</div>



						<div class="cnt">

							<div class="wrap">
								<h3 class="h3">■ 出願資格</h3>
								<p class="txt">
									高校1年修了時、2年または3年の途中で退学した人（修得済の単位が1単位でもあるもの） <br/>
									※ 山口県・島根県在住に限る</p>

							</div>

							<div class="wrap">
								<h3 class="h3">■ 受付期間</h3>
								<p class="txt">
									4月（前期）入学生：2月中旬以降〜3月中旬以降の指定日<br/>
									10月（後期）入学生：8月中旬以降〜9月中旬以降の指定日<br/>
									◎ 窓口受付時間：午前8時20分〜午後4時50分（土・日・月・祝日を除く）<br/>
									※ ただし、休日が変更になる場合や土日に受付可能な日もあるので事前に電話で確認のこと<br/>
									◎ 郵送の場合：指定日までに必着のこと
								</p>
							</div>


							<div class="wrap">
								<h3 class="h3">■ 出願書類</h3>
								<p class="txt">
									① 入学願書（本校所定用紙）<br/>
									② 単位修得・成績証明書（出身高校で作成）<br/>
									③ 教育課程表（出身高校で取得）<br/>
									④ 住民票（1か月以内に取得のもの・本人の氏名・性別・住所・生年月日のみで良い）<br/>
									※ ①は保護者欄以外、本人自筆・押印・ふりがなを確実に。所定の位置に写真(3ヶ月以内に撮影・無帽・正面上半身の縦4cmx横3cm)の貼り付け<br/>
									※ ②は不認定の単位があればその記載があるもの（就学支援金の申請に必要）<br/>
									※ ②の成績証明書は退学後5年を経過し作成できない場合、単位修得証明書のみ
								</p>

							</div>

							<div class="wrap">
								<h3 class="h3">■ 出願</h3>
								<p class="txt">
									上記の出願書類に入学検定料12,000円を添えて出願<br/>
									郵送の場合は、入学検定料を郵便普通為替に換えて出願書類と一緒に簡易書留で郵送
								</p>

							</div>

							<div class="wrap">
								<h3 class="h3">■ 選抜方法・合否通知</h3>
								<p class="txt">
									選抜試験（書類審査・面接試験）は、願書を提出した順に日時を決めて実施<br/>
									合否の発表は後日、出身高等学校長及び本人宛に書面にて通知<br/>
									※ 未成年者の場合、面接試験は保護者同伴
								</p>
							</div>

							<div class="wrap">
								<h3 class="h3">■ 入学手続き・納入金</h3>
								<p class="txt">
									◎ 合格通知を受領後、受領日を含め7日以内に入学時納入金（年額分）を一括納入<br/>
									◎ 合格通知を受領後、指定の期日（約1ヶ月以内）までに授業料（年額分）を一括納入<br/>
									◎ 必要書類を指定期日までに提出
								</p>

								<div class="section">
									<div class="left">
										<div class="cnt-wrap">
											<h4 class="h4">入学時納入金（年額分）</h4>
											<table>
												<tr>
													<th>入学金</th>
													<td>30,000円</td>
												</tr>
												<tr>
													<th>教育充実費</th>
													<td>24,000円</td>
												</tr>
												<tr>
													<th>生徒会費</th>
													<td>3,600円</td>
												</tr>
												<tr>
													<th>諸費</th>
													<td>2.400円</td>
												</tr>
												<tr>
													<th class="sum">合計</th>
													<td class="sum">60,000円</td>
												</tr>
											</table>
										</div>
									</div>
									<div class="right">
										<div class="cnt-wrap">
											<h4 class="h4">授業料（年額分）</h4>
											<table>
												<tr>
													<th>授業料</th>
													<td>1単位　8,000円 x 登録単位数</td>
												</tr>
												<tr>
													<th>就学支援金</th>
													<td>別途計算</td>
												</tr>
												<tr>
													<th class="sum">実納付額</th>
													<td class="sum">授業料 − 就学支援金</td>
												</tr>
											</table>
										</div>
									</div>
								</div>

								<p class="note">
									※ その他、教科書・学習書代、指定用品代（上履きスリッパ、専用封筒）を初回来校日に納入 <br>
									★ 期日までに入学時納入金のお支払いがない場合は、入学辞退とみなします。<br>
									★ いかなる場合でも、一旦納入いただいた納入金は原則として返金いたしません。
								</p>
							</div>

						</div>



						<div class="cnt">

							<div class="wrap">
								<h3 class="h3">■ 出願資格</h3>
								<p class="txt">
									高校在学中で本校への転入学を希望する人（単位未修得者、普通科以外からの転入学も可）<br/>
								※山口県・島根県在住に限る</p>
							</div>

							<div class="wrap">
								<h3 class="h3">■ 受付期間</h3>
								<p class="txt">
									年間を通して随時受付中<br/>
									※ ただし、状況によってはすぐの転入学が困難な場合もあり<br/>
									※ すぐに転入学の場合でも、卒業時期（見込み）は在籍高校での履修状況により変わる<br/>
									※ 卒業年度の転入学については原則として12月初旬頃まで（要相談）<br/>
									※ 4月から転入学希望の場合のみ右記の受付期間（4月（前期）入学生　2月中旬以降〜3月中旬以降の指定日）<br/>
									◎ 窓口受付時間：午前8時20分〜午後4時50分（土・日・月・祝日を除く）<br/>
									※ ただし、休日が変更になる場合や土日に受付可能な日もあるので事前に電話で確認のこと<br/>
									◎ 郵送の場合：指定日までに必着のこと
								</p>
							</div>


							<div class="wrap">
								<h3 class="h3">■ 出願書類</h3>
								<p class="txt">
									① 入学願書（本校所定用紙）<br/>
									② 転入学照会（在籍高校で作成）<br/>
									③ 在学証明書（在籍高校で作成）<br/>
									④ 単位修得・成績証明書（在籍高校で作成）<br/>
									⑤ 教育課程表（在籍校で作成）<br/>
									⑥ 住民票（1か月以内に取得のもの・本人の氏名・性別・住所・生年月日のみで良い）<br/>
									※ ①は保護者欄以外、本人自筆・押印・ふりがなを確実に。所定の位置に写真（3ヶ月以内に撮影・無帽・正面上半身の縦4cm x横3cm）の貼り付け<br/>
									※ ④について<br/>
									・履修中単位（未修得含む）も記載されているもの（就学支援金の申請に必要）<br/>
									・履修中の科目は「成績（仮の評定や素点など）」の記載が望ましい（本校で履修する科目選択参考のため）
								</p>

							</div>

							<div class="wrap">
								<h3 class="h3">■ 出願</h3>
								<p class="txt">
									上記の出願書類に入学検定料12,000円を添えて本校通信制課程へ出願<br/>
									※ 出願書類は、面接日の前日までに出願が必要（出願と面接試験は同一日にできない）<br/>
									ただし、出願書類①と入学検定料12,000円のみ面接日の提出でもよい<br/>
									※ 出願書類①～⑤をすべて郵送の場合は、入学検定料を郵便普通為替に換えて出願書類と一緒に簡易書留で郵送
								</p>

							</div>

							<div class="wrap">
								<h3 class="h3">■ 選抜方法・合否通知</h3>
								<p class="txt">
									上記の出願書類受付後、個別に日程を決めて選抜試験（書類審査·面接試験）を行い、7日以内に在学する高等学校長及び本人宛に書面にて通知<br/>
									※ 4月から転入を希望する場合のみ日時を決めて実施（3月下旬頃）<br/>
									※ 未成年者の場合、面接試験は保護者同伴
								</p>
							</div>

							<div class="wrap">
								<h3 class="h3">■ 入学手続き・納入金</h3>
								<p class="txt">
									◎ 合格通知を受領後、受領日を含め7日以内に入学時納入金（年額分）を一括納入<br/>
									◎ 合格通知を受領後、指定の期日（約1ヶ月以内）までに授業料（年額分）を一括納入<br/>
									◎ 必要書類を指定期日までに提出<br/><br/>

									初年度の納入金は転入時期により納入金額が違う<br/>
									● 1学期転入とは（4月1日〜8月31日付の期間に本校へ転入）<br/>
									● 2学期転入とは（9月1日〜12月31日付の期間に本校へ転入）<br/>
									● 3学期転入とは（1月1日〜3月31日付の期間に本校へ転入）
								</p>

								<div class="section">

									<div class="cnt-wrap one">
										<h4 class="h4">入学時納入金（年額分）</h4>
										<table>
											<tr>
												<th></th>
												<th class="big">1学期転入</thc>
												<th class="big">2学期転入</th>
												<th class="big">3学期転入</th>
											</tr>
											<tr>
												<td>入学金</td>
												<td>30,000円</td>
												<td>30,000円</td>
												<td>30,000円</td>
											</tr>
											<tr>
												<td>教育充実費</td>
												<td>24,000円</td>
												<td>16,000円</td>
												<td>8,000円</td>

											</tr>
											<tr>
												<td>生徒会費</td>
												<td>3,600円</td>
												<td>2,400円</td>
												<td>1,200円</td>

											</tr>
											<tr>
												<td>諸費</td>
												<td>2,400円</td>
												<td>1,600円</td>
												<td>800円</td>

											</tr>
											<tr>
												<td class="sum">合計</td>
												<td class="sum">60,000円</td>
												<td class="sum">50,000円</td>
												<td class="sum">40,000円</td>

											</tr>
										</table>
									</div>


									<div class="cnt-wrap one">
										<h4 class="h4">授業料（年額分）</h4>
										<table>
											<tr>
												<th></th>
												<th class="big">1学期転入</th>
												<th class="big">2学期転入</th>
												<th class="big">3学期転入</th>
											</tr>
											<tr>
												<td>授業料</td>
												<td>1単位 8,000円x登録単位数</td>
												<td>1単位 6,000円x登録単位数</td>
												<td>1単位 4,000円x登録単位数</td>
											</tr>
											<tr>
												<td>就学支援金</td>
												<td>別途計算</td>
												<td>別途計算</td>
												<td>別途計算</td>

											</tr>
											<tr>
												<td class="sum">実納付額</td>
												<td class="sum">授業料−就学支援金</td>
												<td class="sum">授業料−就学支援金</td>
												<td class="sum">授業料−就学支援金</td>

											</tr>
										</table>
									</div>

								</div>


								<p class="note">
									※ その他、教科書・学習書代、指定用品代（上履きスリッパ、専用封筒）を初回来校日に納入 <br>
									★ 期日までに入学時納入金のお支払いがない場合は、入学辞退とみなします。<br>
									★ いかなる場合でも、一旦納入いただいた納入金は原則として返金いたしません。
								</p>
							</div>

						</div>




					</div>


				</div>

			</div>

		</div>
	</div>

@endsection
