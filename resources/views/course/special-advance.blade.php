@extends('layout')

@section('content')

	<div id="course" class="control-wrapper course">
	@include('menu')
	@include('header')

	<!-- key visual  -->
		<div id="page-visual" class="wrapper">
			<div class="left">
				<div class="pop">
					<div class="box subdir">
						<div class="inner">
							<p><img src="{{ asset('img/pc/course/icon.png') }}" alt=""></p>
							<p class="icon-title"><span>学科・コース案内</span><br/>普通科　特別進学コース</p>
						</div>
					</div>
					<p><img src="{{ asset('img/pc/guide/bg.png') }}" width="100%" alt="">
					</p>
				</div>
				<p>
					<img src="{{ asset('img/pc/course/special-advance/main01.jpg') }}" width="100%" alt="">
				</p>
			</div>
			<div class="right">
				<img src="{{ asset('img/pc/course/special-advance/main02.jpg') }}" width="100%" alt="">
			</div>
		</div>

		<div class="wrapper category-index top">
			<div class="content-block">

				<div class="intro">
					<div class="title">勉強もスポーツも、全力投球しよう！</div>
					<p class="middle-line"></p>
                    
                    <div class="right480">
                        <div class="small-wrap">
                            <p><img src="{{ asset('img/pc/course/special-advance/point.png') }}" alt=""></p>
                        </div>
                    </div>
                    
					<p class="read">
						● 入学時にアドバンストとユニバーサルに分かれます。<br/>
						● 2年生から文系・理系に分かれます。<br/>
						● 少人数制により教科指導が充実<br/>
						● 習熟度授業による徹底理解<br/>
						● 受験科目を踏まえた授業選定<br/>
						● 多彩な入試形態に対応<br/>
					</p>
				</div>

				<div class="cnt-detail b0 content-block t0">


					<div class="cnt-section">

						<h3 class="title">先輩からの言葉</h3>
						<p class="middle-line m20"></p>

						<div class="desc">
							<div class="wrap">
								<p class="title2">普通科 特別進学コース・アドバンスト 1年　岩崎 渓悟</p>
								<p class="txt">
									このコースは難関大合格を目標に、お互いに競い合いながら日々勉強に取り組んでいます。少人数制のクラスなので先生方との距離が近く、授業でわからないところがあれば、放課後や休み時間を使ってとことん質問に応じてくださいます。<br/>
									私はテニス部に所属しており、週末は試合で課外授業に参加できないこともあるのですが、授業内容はスマホでいつでも再学習することができるので、部活動と学業を両立するには最高の環境です。
								</p>
							</div>
						</div>

						<div class="desc">
							<div class="section">
								<p class="title2">普通科 特別進学コース・ユニバーサル 1年　貝森 瑞希</p>
								<p class="txt">
									私は幼い頃から続けているバレーボールで、全国制覇を果たしたいと思い、誠英高校を選びました。また、将来は日本語教師になって海外の人たちに日本の良さを伝えたいという夢もあり、大学進学を目指すことができるユニバーサルを選びました。最初はついていけるか心配だった授業も先生方の丁寧なご指導により、毎時間きちんと理解できます。<br/>
									部活動との両立は大変ですが、進学に向けて日々頑張る仲間と共に送る学校生活はとても充実しています。
								</p>
							</div>
						</div>
					</div>
                    
					<div class="cnt-section">

						<h3 class="title">卒業生からの言葉</h3>
						<p class="middle-line m20"></p>

						<div class="desc">
							<div class="wrap">
                                <p class="left-image"><img src="{{ asset('img/pc/course/special-advance/ob01.jpg') }}" alt=""></p>
								<p class="title2">吉永昌平さん<br />H21.3 卒／H28.3 東京大学文学部卒業／H28.4 ユナイテッド株式会社入社</p>
								<p class="txt">
									こんにちは。吉永昌平です。誠英では特別進学コースアドバンストに在籍し、三年間部活と勉強の両立を目指して充実した高校生活を楽しみました。早稲田大学政治経済学部に進学後、大学で学びたいものが明確になったため東京大学文学部を再受験、入学しました。現在はユナイテッド株式会社でネット広告の仕事をしています。自分の未来は自分の選択が大切ですが、今は目の前のことに尽力し、何でも学び吸収することがより良い未来に繋がっていると信じています。
								</p>
							</div>
						</div>

						<div class="desc">
							<div class="wrap">
                                <p class="left-image"><img src="{{ asset('img/pc/course/special-advance/ob02.jpg') }}" alt=""></p>
								<p class="title2">藤田梨歩さん<br />H22.3 卒／H23.4 東京学芸大学入学／小学校教諭</p>
								<p class="txt">
									特別進学コースアドバンスト、バスケット部所属です。在学中は放課後遅くまで練習後、少ない時間で勉強をこなすハードな毎日でした。それまで漠然としていた「教師になる」夢をはっきり意識したのは一年生の時。大学進学へ向けて指標ができたおかげで三年間文武両道を貫くことができました。現在県内小学校に勤務し二年生を担当しています。試行錯誤の連続で様々な失敗や課題に直面しますが、子供たちと共に成長できる喜びを胸に、日々一生懸命頑張っています。
								</p>
							</div>
						</div>
                        
						<div class="desc">
							<div class="wrap">
                                <p class="left-image"><img src="{{ asset('img/pc/course/special-advance/ob03.jpg') }}" alt=""></p>
								<p class="title2">吉田智絵さん<br />H24.3 卒／H24.4 山口県立大学国際文化学部入学</p>
								<p class="txt">
									私のクラスは特別進学コースアドバンストでした。勉強だけでなく、バスケットボール部での活動にも一生懸命取り組みました。在学時は友達同士、考査のたびに点数を競ったり、毎日の英単語や数学のテストに合格するため頑張りました。大学進学を決めたのは、言語や異文化について知識を深めたいという考えがあったからです。現在英語教育を学んでおり、今後は得意の英語に更に磨きをかけ、スキルを活かした職業に就きたいと考えています。
								</p>
							</div>
						</div>

						<div class="desc">
							<div class="wrap">
                                <p class="left-image"><img src="{{ asset('img/pc/course/special-advance/ob04.jpg') }}" alt=""></p>
								<p class="title2">種子龍太郎さん<br />H26.3 卒／H26.4 広島修道大学入学</p>
								<p class="txt">
									私は特別進学コースユニバーサルに在籍していました。在学時は陸上部員として日々練習に励み、文武両道を目標に頑張りました。中学生の頃から教師という職業に興味があり、教員免許が取得できる大学へ進学する意思を固めました。現在、県外の大学に進学し法律学を学びながら教師になる夢を叶えるため、勉学に励んでいます。卒業後は山口県で教員として働けるように、これからも自身を磨き、スキルアップに努め、勉強を頑張りたいと思います。
								</p>
							</div>
						</div>
                        
						<div class="desc">
							<div class="section">
                                <p class="left-image"><img src="{{ asset('img/pc/course/special-advance/ob05.jpg') }}" alt=""></p>
								<p class="title2">柴崎俊祐さん<br />H23.3 卒／H23.4 鹿屋体育大学入学／体育教諭</p>
								<p class="txt">
									私は自転車競技での全国大会上位入賞を目指して誠英高校に入学しました。特別進学コースに在籍して、文武両道を目標に、学業と部活動の双方にひたむきに取り組みました。充実した日々の活動が実を結び、三年のインターハイでは1kmタイムトライアルで入賞を果たしました。卒業後は進学した鹿屋体育大学で自転車競技部の主将も任され、母校での教育実習を経験して、現在は愛媛県の体育教諭として教壇で指導する立場となりました。皆さんも自分の目標を定めて、一度しかない高校生活を懸命に頑張ってください。
								</p>
							</div>
						</div>
					</div>


					<div class="cnt-section">

						<h3 class="title">カリキュラム</h3>
						<p class="middle-line m20"></p>

						<div class="desc">
							<p class="ssub normal">※選択科目があるため、履修しない科目もあります。(平成28年度入学生)</p>
							<div class="wrap">
								<p>
									<img src="{{ asset('img/pc/course/special-advance/curriculum.png') }}" alt="">
								</p>
							</div>
						</div>
					</div>


					<div class="cnt-section">
						<h3 class="title">取得できる主な資格</h3>
						<p class="middle-line m20"></p>
						<div class="desc">
							<p class="ssub normal">実用英語技能検定 ／ 実用数学技能検定 ／ 日本漢字能力検定 ／ 語彙・読解力検定 ／ TOEIC</p>
						</div>
					</div>

					<div class="cnt-section">
						<h3 class="title">卒業後の進路</h3>
						<p class="middle-line m40"></p>
						<div class="desc">
							<div class="section">
								<div class="course-desc">
									<h4><b>普通科特別進学コース　アドバンスト</b><br/>■ 国公立大学</h4>
									<div class="wrap">
										<ul class="course-ul">
											<li class="course-li-r">東京大学</li>
											<li class="course-li-r">東京学芸大学</li>
											<li class="course-li-r">岡山大学</li>
											<li class="course-li-r">山口大学</li>
											<li class="course-li-r">横浜市立大学</li>
											<li class="course-li-r">山口県立大学</li>
											<li class="course-li-r">北九州市立大学 ほか<br/><br/></li>
										</ul>
										<h4>■ 私立大学</h4>
										<div class="section">
											<ul class="course-ul">
												<li class="course-li-r">早稲田大学</li>
												<li class="course-li-r">青山学院大学</li>
												<li class="course-li-r">成蹊大学</li>
												<li class="course-li-r">日本大学</li>
												<li class="course-li-r">明治学院大学</li>
												<li class="course-li-r">武蔵野大学</li>
												<li class="course-li-r">東海大学</li>
												<li class="course-li-r">拓殖大学</li>
												<li class="course-li-r">神奈川大学</li>
												<li class="course-li-r">城西大学</li>
												<li class="course-li-r">立命館大学</li>
												<li class="course-li-r">関西学院大学</li>
												<li class="course-li-r">関西外国語大学</li>
												<li class="course-li-r">京都女子大学</li>
												<li class="course-li-r">安田女子大学　ほか</li>
											</ul>
										</div>
									</div>
								</div>

								<div class="course-desc">
									<h4><b>普通科特別進学コース　ユニバーサル</b><br/>■ 国公立大学</h4>
									<div class="wrap">
										<ul class="course-ul">
											<li class="course-li-r">広島大学</li>
											<li class="course-li-r">福岡教育大学</li>
											<li class="course-li-r">佐賀大学</li>
											<li class="course-li-r">鹿屋体育大学　ほか<br/><br/></li>
										</ul>
										<h4>■ 私立大学</h4>
										<div class="section">
											<ul class="course-ul">
												<li class="course-li-r">法政大学</li>
												<li class="course-li-r">専修大学</li>
												<li class="course-li-r">東海大学</li>
												<li class="course-li-r">近畿大学</li>
												<li class="course-li-r">広島国際大学</li>
												<li class="course-li-r">広島工業大学</li>
												<li class="course-li-r">広島修道大学</li>
												<li class="course-li-r">福岡大学</li>
												<li class="course-li-r">西南学院大学　ほか</li>
											</ul>
										</div>
									</div>

								</div>
							</div>
						</div>
						<div class="cnt-section">

							<div class="desc">
								<div class="wrap wrap-inner">
									<p class="teacher-label">先生からの言葉</p>
									<div class="left240">
										<div class="teacher">
											<img src="{{ asset('img/pc/course/special-advance/teacher_a.jpg') }}" alt="">
										</div>
									</div>
									<div class="right640">
										<p class="name">渡辺 崇先生（普通科　特別進学コース アドバンスト担任）</p>
										<p class="txt">
											特別進学アドバンストコースでは、難関大学合格に向け、入試を意識した学習に日々取り組んでいます。高い学習意欲を持つ生徒で編成されたクラスですので、お互いが良い刺激となり、切磋琢磨し合える学びの場となっています。<br/>
											また，部活動やボランティア活動、科学の甲子園などの校外活動に積極的に取り組むことで、思考力・表現力・判断力などが身に付きます。<br/>
											みなさんの高校生活が実りある3年間になるよう、本校教員が全力でサポートします。
										</p>
									</div>
								</div>
							</div>
						</div>

						<div class="cnt-section">
							<div class="desc">
								<div class="wrap wrap-inner">
									<p class="teacher-label">先生からの言葉</p>
									<div class="left240">
										<div class="teacher">
											<img src="{{ asset('img/pc/course/special-advance/teacher_u.jpg') }}" alt="">
										</div>
									</div>
									<div class="right640">
										<p class="name">嶋本 雅宏先生（普通科　特別進学コース ユニバーサル担任）</p>
										<p class="txt">
											特別進学コースユニバーサルでは、進学を目標とした学習はもちろんですが、クラスのほとんどの生徒が部活動に所属し、文武両道を目指して日々励んでいます。<br/>
											学習面では通常の授業の他、朝学や課外授業を通して学力の向上を図るとともに、大学見学や進路ガイダンスなど、生徒一人ひとりの進路をしっかりサポートしていきます。<br/>
											部活動に所属しながらも進学という同じ目標を持つ仲間と互いに高めあいながら高校生活を送る生徒の姿はとても生き生きとしています。<br/>
											あなたもユニバーサルで充実した高校生活を送ってみませんか。
										</p>
									</div>
								</div>
							</div>

						</div>

					</div>
				</div>

			</div>
		</div>
	</div>

@endsection
