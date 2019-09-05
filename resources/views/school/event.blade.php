@extends('layout')

@section('content')

	<div id="school" class="control-wrapper event">
	@include('menu')
	@include('header')

	<!-- key visual  -->
		<div id="page-visual" class="wrapper">
      <div class="overlay">
        <div class="overlay-inner">
          <div class="event-wrapper">
            <p class="event-name"></p>
            <div class="img-wrapper">
              <img class="overlay-img" src="">
              <div class="arrows">
                <p class="arrow-left event-arrow"><img src="{{ asset('img/sp/top/arrow-left.png') }}"></p>
                <p class="arrow-right event-arrow"><img src="{{ asset('img/sp/top/arrow-right.png') }}"></p>
              </div>
            </div>
            <p class="event-desc"></p>
            <p class="close-btn">閉じる</p>
          </div>
        </div>
      </div>
			<div class="visual">
				<img src="{{ asset('img/pc/school/event/main.jpg') }}" width="100%" alt="">
			</div>
		</div>
		<!-- end key visual -->


		<div class="wrapper">
			<div class="cnt-detail content-block">


				<div class="cnt-section">

					<h3 class="title">誠英高等学校 年間行事</h3>
					<p class="middle-line m40"></p>

					<ul class="event-ul">
						<li class="event-li">
							<p class="photo-txt">入学式（4月）</p>
							<p class="photo"><img src="{{ asset('img/pc/school/event/01/01.jpg') }}" width="300" alt=""></p>
							<p class="note">4月は入学式が行われます。桜が満開を迎える季節、体育館には真新しい制服に身を包んだフレッシュな顔ぶれが勢ぞろいします。</p>
                            <div class="button-link" data-folder="01" data-max="3" data-text="4月は入学式が行われます。桜が満開を迎える季節、体育館には真新しい制服に身を包んだフレッシュな顔ぶれが勢ぞろいします。校長先生から式辞として、新一年生へ向けて歓迎の言葉が贈られたあと、特別進学コースアドバンストから選抜される1名が、代表して宣誓の言葉を述べます。新入生はいよいよ高校生活がスタート！<br />高校生としての自覚をもち、部活に勉強に力いっぱい頑張ってください！"><img src="{{ asset('img/pc/arrow.png') }}" class="arrow" alt="">写真をもっと見る</div>
						</li>
						<li class="event-li">
							<p class="photo-txt">誠英祭（6月）</p>
							<p class="photo"><img src="{{ asset('img/pc/school/event/02/01.jpg') }}" width="300" alt=""></p>
							<p class="note">誠英祭は、毎年6月行われます。平成28年度の誠英祭1日目のスタートはハンドベルの生演奏からスタートしました。</p>
                            <div class="button-link" data-folder="02" data-max="5" data-text="誠英祭は、毎年6月行われます。<br />平成28年度の誠英祭1日目のスタートはハンドベルの生演奏からスタートしました。毎年恒例の仮装大会では、趣向を凝らした衣装や演出が披露され、今年はミニオンズの仮装が人気でした。2日目のオープニングを飾ったのは先生方によるバンド演奏。生徒たちも拍手喝さい、大歓声を送りました。特別ゲストとしてご当地アイドルグループ、山口活性学園によるスペシャルライブも行われたほか、美声杯やクラスパフォーマンス、模擬店や文化部の展示など、見どころ満載の2日間となりました。"><img src="{{ asset('img/pc/arrow.png') }}" class="arrow" alt="">写真をもっと見る</div>
						</li>
						<li class="event-li">
							<p class="photo-txt">生徒総会（6月）</p>
							<p class="photo"><img src="{{ asset('img/pc/school/event/03/01.jpg') }}" width="300" alt=""></p>
							<p class="note">行生徒総会は全校生徒が出席する会議で、毎年6月初旬に開かれます。ここでは一人ひとりの生徒が主体となって校内環境に目を向け…</p>
                            <div class="button-link" data-folder="03" data-max="3" data-text="生徒総会は全校生徒が出席する会議で、毎年6月初旬に開かれます。<br />ここでは一人ひとりの生徒が主体となって校内環境に目を向け、潤いのある学校生活をめざし意見を出し合います。開催前に誠英祭やクラスマッチ、運動会などの行事内容や、学校生活の中で改善してほしいことなどをあらかじめ各クラスごとに話し合い、その結果をもとに生徒会役員やクラス評議員が議案を選定しています。毎年さまざまな議題が取り上げられますが、昨年度は校内にペットボトルの自動販売機を設置して欲しいという要望が認証されました。"><img src="{{ asset('img/pc/arrow.png') }}" class="arrow" alt="">写真をもっと見る</div>
						</li>
						<li class="event-li">
							<p class="photo-txt">大学見学（7月）</p>
							<p class="photo"><img src="{{ asset('img/pc/school/event/04/01.jpg') }}" width="300" alt=""></p>
							<p class="note">１学期の期末考査後の時間を利用して、1、2年生特別進学コースを対象に、大学見学が行われています。</p>
                            <div class="button-link" data-folder="04" data-max="3" data-text="１学期の期末考査後の時間を利用して、1、2年生特別進学コースを対象に、大学見学が行われています。<br />大学キャンパス内に足を踏み入れ、大学のリアルな雰囲気を味わい、進学意識をより高めることを目的としています。昨年度は広島工業大学、広島修道大学に来校しました。<br />構内を歩く大学生に1、2年後の自分を重ねつつ、施設を見学したり模擬授業を受けたりと有意義な時間を過ごしました。"><img src="{{ asset('img/pc/arrow.png') }}" class="arrow" alt="">写真をもっと見る</div>
						</li>
						<li class="event-li">
							<p class="photo-txt">留学生との交流会（7月）</p>
							<p class="photo"><img src="{{ asset('img/pc/school/event/05/01.jpg') }}" width="300" alt=""></p>
							<p class="note">アメリカのミシガン州モンロー市と防府市が姉妹都市提携を結んでいることから、毎年夏季に両都市間で派遣、受け入れをする交換留学…</p>
                            <div class="button-link" data-folder="05" data-max="3" data-text="アメリカのミシガン州モンロー市と防府市が姉妹都市提携を結んでいることから、毎年夏季に両都市間で派遣、受け入れをする交換留学制度が実施されています。本校の生徒もモンロー市へ留学し、モンロー市からも高校生が防府市を訪れ、相互に国際交流が行われています。昨年度は男子2名、女子3名の５名が本校に遊びに来てくれました。当日は剣道部による演舞が披露され、留学生たちは実際に胴着を着用して剣道に挑戦したり、折り紙やうちわづくり、調理実習に参加するなど、盛りだくさんの内容で日本文化を実体験しました。生徒たちにとって同年代の外国の友達との交流は初めての経験。最初は遠慮がちでしたが、だんだん打ち解けて会話が弾むように。自分の英語力を試す絶好のチャンスとなりました。"><img src="{{ asset('img/pc/arrow.png') }}" class="arrow" alt="">写真をもっと見る</div>
						</li>
						<li class="event-li">
							<p class="photo-txt">オープンキャンパス（8月）</p>
							<p class="photo"><img src="{{ asset('img/pc/school/event/11/01.jpg') }}" width="300" alt=""></p>
							<p class="note">オープンキャンパスは毎年夏季2回開催されます。中学生および保護者の方々が、本校コース内容や学園生活について深く理解していただ…</p>
                            <div class="button-link" data-folder="11" data-max="5" data-text="オープンキャンパスは毎年夏季2回開催されます。中学生および保護者の方々が、本校コース内容や学園生活について深く理解していただけるよう、先生と生徒が協力して、多彩なプログラムを用意しお待ちしています。<br />各科・コースの授業を体験したり、部活動の練習風景を見学したり、制服が試着できたりと内容は盛りだくさん。昨年度はスペシャルゲストとして野球評論家の谷沢健一さんをお迎えし、講演会が開かれました。"><img src="{{ asset('img/pc/arrow.png') }}" class="arrow" alt="">写真をもっと見る</div>
						</li>
						<li class="event-li">
							<p class="photo-txt">運動会（9月）</p>
							<p class="photo"><img src="{{ asset('img/pc/school/event/06/01.jpg') }}" width="300" alt=""></p>
							<p class="note">9月には運動会が開催されます。平成28年度の運動会は、雲一つない晴天に恵まれ、防府市陸上競技場で開催されました。</p>
                            <div class="button-link" data-folder="06" data-max="5" data-text="9月には運動会が開催されます。平成28年度の運動会は、雲一つない晴天に恵まれ、防府市陸上競技場で開催されました。100m競争やクラス対抗リレーに加え、皆が力を合わせて臨む5人6脚や長縄跳びなど、バラエティに富んだ競技が盛りだくさん。観戦している生徒もクラス、学年を 超え、楽しんで応援していました。クラス対抗リレー優勝チームは男子3情会、女子2情文でした。総合優勝は三年生で、2連覇を成し遂げました。"><img src="{{ asset('img/pc/arrow.png') }}" class="arrow" alt="">写真をもっと見る</div>
						</li>
						<li class="event-li">
							<p class="photo-txt">入試説明会（11月）</p>
							<p class="photo"><img src="{{ asset('img/pc/school/event/07/01.jpg') }}" width="300" alt=""></p>
							<p class="note">入試説明会は11月初旬に催されます。主に中学生の保護者の方々を対象に、本校の教育方針、活動についてご理解いただくことを目的と…</p>
                            <div class="button-link" data-folder="07" data-max="3" data-text="入試説明会は11月初旬に催されます。主に中学生の保護者の方々を対象に、本校の教育方針、活動についてご理解いただくことを目的としています。各科・コースの特色・内容、進学・就職実績、入試要項など、プロジェクターを用い、わかりやすさを心がけて説明しています。<br />昨年度から始まったこの試みですが、デザインプラザ防府を会場に、当日は予想を上回る人数のご参加を賜り、多くの方々のご満足を得ています。"><img src="{{ asset('img/pc/arrow.png') }}" class="arrow" alt="">写真をもっと見る</div>
						</li>
						<li class="event-li">
							<p class="photo-txt">大学出前授業（11月）</p>
							<p class="photo"><img src="{{ asset('img/pc/school/event/08/01.jpg') }}" width="300" alt=""></p>
							<p class="note">山口大学との高大連携授業の一環として、大学出前授業が行われています。昨年度は大学から工学部電気電子工学科准教授原田直幸先生に…</p>
                            <div class="button-link" data-folder="08" data-max="3" data-text="山口大学との高大連携授業の一環として、大学出前授業が行われています。<br />昨年度は大学から工学部電気電子工学科准教授原田直幸先生に出向いていただき授業が実施されました。受講者は１年特別進学コースの生徒、学習テーマは「リニアモーターカーなどの超電導の応用技術について学ぶ」です。マイナス196℃の液体窒素を用いてバラの花を凍らせたあと、超伝導体を液体窒素で冷却して超電導現象を起こす簡単な演示実験を行いました。<br />大学の授業内容の一端を経験し、ますます学びの意識が高まりました。"><img src="{{ asset('img/pc/arrow.png') }}" class="arrow" alt="">写真をもっと見る</div>
						</li>
						<li class="event-li">
							<p class="photo-txt">修学旅行（2月）</p>
							<p class="photo"><img src="{{ asset('img/pc/school/event/09/01.jpg') }}" width="300" alt=""></p>
							<p class="note">修学旅行は毎年2月、2年次に行われています。昨年度の行き先は東京と北海道で、生徒はいずれか行きたい方を選びました。</p>
                            <div class="button-link" data-folder="09" data-max="4" data-text="修学旅行は毎年2月、2年次に行われています。昨年度の行き先は東京と北海道で、生徒はいずれか行きたい方を選びました。東京は浅草寺、築地市場をめぐり、渋谷・原宿・秋葉原などを自由散策、スカイツリーやディズニーランド、ルミネtheよしもとでの観劇など、旅行を満喫しました。<br />北海道はスキーやスノーボードをたっぷりと楽しむコースと、買い物や観光、ものづくり体験などができるコースに分かれ、それぞれかけがえのない時間をかけがえのない友人たちと楽しみました。"><img src="{{ asset('img/pc/arrow.png') }}" class="arrow" alt="">写真をもっと見る</div>
						</li>
						<li class="event-li">
							<p class="photo-txt">卒業式（3月）</p>
							<p class="photo"><img src="{{ asset('img/pc/school/event/10/01.jpg') }}" width="300" alt=""></p>
							<p class="note">卒業証書授与式は3月3日に行われます。女子教育を始まりとする本校の歴史から伝統が継承され、共学となった現在も桃の節句を式日とし…</p>
                            <div class="button-link" data-folder="10" data-max="3" data-text="卒業証書授与式は3月3日に行われます。女子教育を始まりとする本校の歴史から伝統が継承され、共学となった現在も桃の節句を式日としています。この日は3年間本校で学んだことに感謝し、次のステージへと旅立つときです。<br />卒業証書授与、校長挨拶、来賓挨拶、育友会長挨拶、在校生送辞、卒業生答辞、保護者挨拶と続き、終始とても厳かに行われます。卒業ソングは、「蛍の光」と「仰げば尊し」です。卒業生の皆様には、これからも建学の精神「至誠一貫」を忘れず、自分の信じる道を突き進んでほしいと願います。"><img src="{{ asset('img/pc/arrow.png') }}" class="arrow" alt="">写真をもっと見る</div>
						</li>

					</ul>
				</div>
			</div>
		</div>
	</div>

@endsection
