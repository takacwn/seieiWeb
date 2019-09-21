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
        <p class="icon-title"><span>入試情報</span><br/>募集要項</p>
      </div>
      <p class="middle-line"></p>
    </div>

		<div class="wrapper">
			<div class="cnt-detail content-block p10 m0">
				<h4 class="title">平成31年度入学試験に関する日程</h4>
				<p class="middle-line m40"></p>
        <div class="cnt-wrapper">
        	<div class="wrap">
        		<h3 class="h3">■ 推薦入試</h3>
        		<div class="cnt-wrap">
        			<table>
        				<tr>
        					<th class="ora">願書受付期間</th>
                  <td>平成31年1月4日（金）から<br/>平成31年1月8日（火）</td>
        				</tr>
        				<tr>
        					<th class="ora">試験日</th>
        					<td>平成31年1月10日（木）</td>
        				</tr>
        				<tr>
        					<th class="ora">合格発表</th>
        					<td>平成31年1月15日（火）</td>
        				</tr>
        				<tr>
        					<th class="ora" rowspan="2">入学時納入金払込締切</th>
        					<td>●一般推薦選抜<br/>平成31年2月8日（金）</td>
        				</tr>
        				<tr>
                  <td>●特別推薦選抜<br/>平成31年2月8日（金）<br/>※3月18日（月）</td>
        				</tr>
        			</table>
        		<p class="note">
              ※他校併願の特別進学コース志願者については、入学時納入金払込締切を3月18日（月）とします。
            </p>
        	</div>

        	<h3 class="h3">■ 一般入試（一次選抜）</h3>
        	<div class="cnt-wrap">
        		<table>
        			<tr>
        				<th class="ora">願書受付期間</th>
                <td>平成31年1月4日（金）から<br/>平成31年1月15日（火）</td>
        			</tr>
        			<tr>
        				<th class="ora">試験日</th>
        				<td>平成31年1月17日（木）</td>
        			</tr>
        			<tr>
        				<th class="ora">合格発表</th>
        				<td>平成31年2月1日（金）</td>
        			</tr>
        			<tr>
        				<th class="ora">入学時納入金払込締切</th>
                <td>平成31年3月18日（月）</td>
        			</tr>
        		</table>
        	</div>

        	<h3 class="h3">■ 一般入試（二次選抜）</h3>
        	<div class="cnt-wrap m30">
        		<table class="m0">
        			<tr>
        				<th class="ora">願書受付期間</th>
                <td>平成31年3月11日（月）から <br/>平成31年3月15日（金）</td>
        			</tr>
        			<tr>
        				<th class="ora">試験日</th>
        				<td>平成31年3月19日（火）</td>
        			</tr>
        			<tr>
        				<th class="ora">合格発表</th>
        				<td>平成31年3月22日（金）</td>
        			</tr>
        			<tr>
        				<th class="ora">入学時納入金払込締切</th>
                <td>平成31年3月25日（月）</td>
        			</tr>
        		</table>
        	</div>
        </div>

        <div class="wrap">
          <h4 class="title">推薦入試・一般入試に共通する事項</h4>
          <p class="middle-line m40"></p>
          <div class="cnt-wrap">
            <div class="section">
        	    <div class="common01">
        	    	<h3 class="h3">① 募集学科・人員</h3>
        	    	  <table>
        	    	  	<tr>
        	    	  		<th class="ora">普通科〈200名〉</th>
        	    	  	</tr>
        	    	  	<tr>
                      <td>特別進学コース(80名）男子・女子<br/><span class="small">※仮入学当日のクラス編成テストでクラス分けします。<br/>（アドバンスト・ユニバーサル）</span></td>
        	    	  	</tr>
        	    	  	<tr>
                      <td>生活文化コース(80名）女子<br/>食文化専攻38名／生活教養専攻42名</td>
        	    	  	</tr>
                    <tr>
                      <td>情報文化コース(40名） 女子</td>
                    </tr>
                  </table>
                  <table>
        	    	  	<tr>
        	    	  		<th class="ora">情報会計科〈70名〉</th>
        	    	  	</tr>
        	    	  	<tr>
        	    	  		<td>(70名） 男子・女子</td>
                    </tr>
                  </table>
                  <table class="m0">
                    <tr>
        	    	  		<th class="ora">福祉科〈70名〉</th>
                    </tr>
                    <tr>
        	    	  		<td>(70名） 男子・女子</td>
        	    	  	</tr>
        	    	  </table>
        	      </div>
        	    </div>

              <div class="section p0">
        	      <div class="common02">
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
        	    	  		<th class="ora">教育後援会<br/>入会金</th>
        	    	  		<td>1,000円</td>
        	    	  	</tr>
        	    	  	<tr>
        	    	  		<th class="ora">合計</th>
        	    	  		<td>114,000円</td>
        	    	  	</tr>
        	    	  </table>
                  <p class="note">※ 合格者に本校指定の払込取扱票を中学校を通じて渡します。入学時納入金払込締切日 まで にゆうちょ銀行または郵便局窓口にて納入してください。</p>
        	      </div>
        	    </div>
        	  </div>

           	<div class="cnt-wrap">
              <div class="section p0">
           		  <h3 class="h3">③ 毎月の校納金（就学支援金 授業料等減免制度）</h3>
           		    <table>
           		    	<tr>
           		    		<th class="ora">授業料</th>
                      <td>25,000円</td>
           		    	</tr>
           		    	<tr>
           		    		<th class="ora">教育充実費</th>
           		    		<td>6,000円</td>
           		    	</tr>
           		    	<tr>
           		    		<th class="ora">校友会費</th>
                      <td>900円</td>
           		    	</tr>
           		    	<tr>
           		    		<th class="ora">育友会費</th>
                      <td>400円</td>
           		    	</tr>
           		    	<tr>
           		    		<th class="ora">育友会内容<br/>充実費</th>
                      <td>400円</td>
           		    	</tr>
           		    	<tr>
           		    		<th class="ora">教育後援会費</th>
                      <td>400円</td>
           		    	</tr>
           		    	<tr>
           		    		<th class="ora">合計</th>
                      <td>33,100円</td>
           		    	</tr>
           		    </table>
                  <p class="note m10">※ 就学支援金、授業料等減免制度適用前の金額です。<br/><br/>【適用後の校納金額】</p>

          	      <table>
          	      	<tr>
                      <th colspan="2" class="ora">基準額等（道府県税・市町村民税所得割額の合算額（両親合算））</th>
                    </tr>
                    <tr>
                      <td colspan="2">50万7,000円以上</td>
                    </tr>
                    <tr>
          	      		<th class="ora">倍率等</th>
          	      		<td>非該当</td>
                    </tr>
                    <tr>
          	      		<th class="ora">就学支援金<br/>支給額（月額）</th>
          	      		<td>支給なし</td>
                    </tr>
                    <tr>
          	      		<th class="ora">授業料等減<br/>免額（月額）</th>
          	      		<td>-</td>
                    </tr>
                    <tr>
          	      		<th class="ora">合計</th>
                      <td>33,100円</td>
                    </tr>
                  </table>

                  <table>
          	      	<tr>
                      <th colspan="2" class="ora">基準額等（道府県税・市町村民税所得割額の合算額（両親合算））</th>
                    </tr>
          	      	<tr>
                      <td colspan="2">50万7,000円未満</td>
                    </tr>
          	      	<tr>
                      <th class="ora">倍率等</th>
          	      		<td>標準額(1倍）</td>
                    </tr>
          	      	<tr>
                      <th class="ora">就学支援金<br/>支給額（月額）</th>
          	      		<td>9,900円</td>
                    </tr>
          	      	<tr>
                      <th class="ora">授業料等減<br/>免額（月額）</th>
                      <td>-</td>
                    </tr>
                      <th class="ora">合計</th>
                      <td>23,200円</td>
          	      	</tr>
                  </table>

                  <table>
          	      	<tr>
                      <th colspan="2" class="ora">基準額等（道府県税・市町村民税所得割額の合算額（両親合算））</th>
                    </tr>
          	      	<tr>
                      <td colspan="2">25万7,500円未満</td>
                    </tr>
          	      	<tr>
                      <th class="ora">倍率等</th>
          	      		<td>標準額(1.5倍）</td>
                    </tr>
          	      	<tr>
                      <th class="ora">就学支援金<br/>支給額（月額）</th>
          	      		<td>14,850円</td>
                    </tr>
          	      	<tr>
                      <th class="ora">授業料等減<br/>免額（月額）</th>
                      <td>-</td>
                    </tr>
                      <th class="ora">合計</th>
                      <td>18,250円</td>
          	      	</tr>
                  </table>

                  <table>
          	      	<tr>
                      <th colspan="2" class="ora">基準額等（道府県税・市町村民税所得割額の合算額（両親合算））</th>
                    </tr>
          	      	<tr>
                      <td colspan="2">8万5,500円未満</td>
                    </tr>
          	      	<tr>
                      <th class="ora">倍率等</th>
                      <td>2倍加算</td>
                    </tr>
          	      	<tr>
                      <th class="ora">就学支援金<br/>支給額（月額）</th>
          	      		<td>19,800円</td>
                    </tr>
          	      	<tr>
                      <th class="ora">授業料等減<br/>免額（月額）</th>
                      <td>-</td>
                    </tr>
                      <th class="ora">合計</th>
                      <td>13,300円</td>
          	      	</tr>
                  </table>

                  <table>
          	      	<tr>
                      <th colspan="2" class="ora">基準額等（道府県税・市町村民税所得割額の合算額（両親合算））</th>
                    </tr>
          	      	<tr>
                      <td colspan="2">非課税(0円）/生活保護以外</td>
                    </tr>
          	      	<tr>
                      <th class="ora">倍率等</th>
                      <td>2.5倍加算</td>
                    </tr>
          	      	<tr>
                      <th class="ora">就学支援金<br/>支給額（月額）</th>
                      <td>24,750円</td>
                    </tr>
          	      	<tr>
                      <th class="ora">授業料等減<br/>免額（月額）</th>
                      <td>2,475円</td>
                    </tr>
                      <th class="ora">合計</th>
                      <td>5,875円</td>
          	      	</tr>
                  </table>

                  <table>
          	      	<tr>
                      <th colspan="2" class="ora">基準額等（道府県税・市町村民税所得割額の合算額（両親合算））</th>
                    </tr>
          	      	<tr>
                      <td colspan="2">非課税（0円）/生活保護</td>
                    </tr>
          	      	<tr>
                      <th class="ora">倍率等</th>
                      <td>2.5倍加算</td>
                    </tr>
          	      	<tr>
                      <th class="ora">就学支援金<br/>支給額（月額）</th>
                      <td>24,750円</td>
                    </tr>
          	      	<tr>
                      <th class="ora">授業料等減<br/>免額（月額）</th>
                      <td>4,950円</td>
                    </tr>
                      <th class="ora">合計</th>
                      <td>3,400円</td>
          	      	</tr>
          	      </table>
                  <p class="note">※ 就学支援金、授業料等減免制度については、入学時に詳しく説明します。<br/>
            ※   平成30年度現在の制度内容であり、来年度以降は変更となる可能性があります。</p>
                </div>
              </div>

          	  <div class="cnt-wrap">
                <div class="section p0">
                  <h3 class="h3">④ 特待生制度</h3>
				  <p class="txt">学習活動・文化活動・スポーツ活動、それぞれの分野において有能な素質のある心身ともに健康な生徒で、本校特待生制度希望者は、特別推薦選抜を受験してください。審議の上、下記のいずれかに決定します。<br/>（特別進学コースの受験者のうち3年間の評定合計が、110以上の者は特待生AA、100以上の者は特待生A、90以上の者は特待生B）<br/><br/></p>
				  <h3 class="h3">■特待生AA</h3>
                  <p class="txt">毎月の授業料(就学支援金を除いた額)・教育充実費・校友会費・育友会費・育友会内容充実費を免除</p>
          	  	  <table>
          	  	  	<tr>
          	  	  		<th class="ora">実納付額</th>
                      <td>400円</td>
          	  	  	</tr>
                  </table>
          	  	  <h3 class="h3">■特待生A</h3>
                  <p class="txt">毎月の授業料(就学支援金を除いた額)・教育充実費を免除</p>
                  <table>
          	  	    <tr>
          	  	      <th class="ora">実納付額</th>
          	  	    	<td>2,100円</td>
          	  	    </tr>
                  </table>
          	  	  <h3 class="h3">■特待生B</h3>
                  <p class="txt">毎月の授業料(就学支援金を除いた額)を免除</p>
                  <table>
          	  	    <tr>
          	  	      <th class="ora">実納付額</th>
          	  	    	<td>8,100円</td>
          	  	    </tr>
                  </table>
          	      <p class="note">
                    ※ いずれの特待生についても、入学金は免除致します。
          	      </p>
                </div>
          	  </div>

          	  <div class="cnt-wrap common05">
                <div class="section p10">
          	  	  <h3 class="h3">⑤ スカラシップ制度</h3>
                  <p class="txt">
                    本校に入学後、学習活動・文化活動・スポーツ活動に関してきわめて優秀な実績を上げた生徒は、2年次より審議の上、特待生Aまたは特待生Bのいずれかに決定します。
                  </p>
          	    </div>
          	  </div>

          	  <div class="cnt-wrap common06">
                <div class="section p10">
          	  	  <h3 class="h3">⑥ 遠距離通学補助制度</h3>
                  <p class="txt">
                    電車（新幹線・特急を除く）、バス、船による通学定期運賃のうち、一定額（月額1万円）を超える経費を補助する本校独自の制度があります
                  </p>
          	    </div>
          	  </div>

            	<div class="cnt-wrap common07">
                <div class="section p10">
            		  <h3 class="h3">⑦ 奨学制度</h3>
                  <p class="txt">
                    山口県ひとづくり財団等の奨学制度があります。これについては、入学時に詳しく説明します。
                  </p>
            	  </div>
            	</div>

            	<div class="cnt-wrap common08 m0">
                <div class="section p0">
            		  <h3 class="h3">⑧ 寮について</h3>
                  <p class="txt">
                    遠隔地からの生徒に優先的に入寮を斡旋します。（女子のみ）
                  </p>
            	  </div>
            	</div>
            </div>
			    </div>
			  </div>

			  <div class="cnt-detail content-block">

			  	<div class="cnt-section">

			  		<h3 class="title">各入試要項</h3>
			  		<p class="middle-line m40"></p>

			  		<div class="desc">

			  			<div class="youkous">
			  				<div class="youkou">
								  <p><a href="/exam/suisen">推薦入試</a></p>
			  				</div>
			  				<div class="youkou">
								  <p><a href="/exam/ippan_a">一般入試（一次選抜）</a></p>
			  				</div>
			  				<div class="youkou">
								  <p><a href="/exam/ippan_b">一般入試（二次選抜）</a></p>
			  				</div>
			  			</div>
			  		</div>

			  	</div>

			  </div>

        <div class="cnt-section">
          <h3 class="title">資料請求</h3>
          <p class="middle-line small no"></p>
          <!-- subject  -->
          <div class="subject">
            2019年度の誠英高等学校募集要項は【資料請求ページ】からもPDFファイルをダウンロード出来ます。<br/>
              また紙面での学校案内パンフレット、募集要項についても【資料請求ページ】よりお願いいたします。
          </div>
          <div class="buttons"><a href="/download"><p class="button ora">資料請求</a></p><br/></div>
        </div>

			</div>
		</div>
	</div>
</div>

@endsection
