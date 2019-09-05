@extends('layout')

@section('content')

	<div id="school" class="control-wrapper club">
	@include('menu')
	@include('header')

  <!-- key visual  -->
    <div id="page-visual" class="wrapper">
      <div class="visual">
        <img src="{{ asset('img/pc/school/club/trackfield/main.jpg') }}" width="100%" alt="">
      </div>
    </div>
    <!-- end key visual -->

		<div class="wrapper category-index top">
			<div class="cnt-detail content-block">
                <div class="intro-no">
                    <div class="title">陸上競技部</div>
                    <p class="middle-line"></p>
                    <p class="read">
                        陸上部の活動は主に走ることですが、それ以外にも、ハードル補強や、もも上げ、そしてBCTと言われる体幹を鍛えるエクササイズ…といったメニューも組み込まれています。<br />
                        陸上は基本的に個人種目。ですが、走ることが好きで集まった仲間どうし、刺激を与え合いながら、日々部活に打ち込んでいます。思うように記録が伸びなくてつらい時期もありましたが、先輩たちに明るく励まされながら、練習を続けてきました。その結果、記録が伸びた時はこれまでにない達成感を得ることができました。<br /><br />
                        一度その達成感を味わうと、毎日の練習もますます楽しくなりました。明るく元気で楽しい陸上部で、いっしょに汗を流しましょう。</p>
                    
                    <ul class="club-ul">
                        <li class="club-li">
                            <div class="wrap">
                                <img src="{{ asset('img/pc/school/club/trackfield/photo_01.jpg') }}" width="313" alt="">
                            </div>
                        </li>
                        <li class="club-li">
                            <div class="wrap">
                                <img src="{{ asset('img/pc/school/club/trackfield/photo_02.jpg') }}" width="313" alt="">
                            </div>
                        </li>
                        <li class="club-li">
                            <div class="wrap">
                                <img src="{{ asset('img/pc/school/club/trackfield/photo_03.jpg') }}" width="313" alt="">
                            </div>
                        </li>
                    </ul>
                </div>
                
                
                
                
                
                <div class="cnt-detail">
                    <h4 class="title">活動実績</h4>
                    <p class="middle-line m40"></p>
                    
                    <div class="desc">
                        <div class="wrap wrap-inner-960">
                            <a class="accordion">全国高等学校総合体育大会（インターハイ）</a>
                            <div id="accordion">
                                <div class="cnt-section">
                                    <div class="cnt-wrapper">
                                        <div class="wrap result">
                                            <div class="section">
                                                <div class="cnt-wrap">
                                                    <table>
														<tr class="ora">
															<th>年</th>
															<th>大会名</th>
															<th>開催地</th>
															<th>種目</th>
															<th>結果</th>
														 </tr>
														<!-- 2016  -->
														<tr>
															<td rowspan="10">2016年<br />（平成28年）</td>
															<td rowspan="6">第67回山口県高等学校総合体育大会 陸上競技</td>
															<td rowspan="6">山口</td>
															<td>男子 100m</td>
															<td>第8位</td>
														 </tr>
														<tr>
															<td>男子 4x100mR</td>
															<td>第1位</td>
														 </tr>
														<tr>
															<td>男子 走高跳</td>
															<td>第3位</td>
														 </tr>
														<tr>
															<td>女子 100m</td>
															<td>第5位</td>
														 </tr>
														<tr>
															<td>女子 4x100mR</td>
															<td>第8位</td>
														 </tr>
														<tr>
															<td>女子 走高跳</td>
															<td>第2位、第5位、第8位</td>
														 </tr>
														<tr>
															<td rowspan="4">第69回中国高等学校陸上競技対校選手権大会</td>
															<td rowspan="4">岡山</td>
															<td>男子 4x100mR</td>
															<td>準決勝</td>
														 </tr>
														<tr>
															<td>男子 走高跳</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>女子 100m</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>女子 走高跳</td>
															<td>出場</td>
														 </tr>
                                                        
                                                        <!-- 2015  -->
														<tr>
															<td rowspan="15">2015年<br />（平成27年）</td>
															<td rowspan="8">第66回山口県高等学校総合体育大会 陸上競技</td>
															<td rowspan="8">山口</td>
															<td>男子 100m</td>
															<td>第5位</td>
														 </tr>
														<tr>
															<td>男子 200m</td>
															<td>第5位</td>
														 </tr>
														<tr>
															<td>男子 4x100mR</td>
															<td>第1位</td>
														 </tr>
														<tr>
															<td>男子 走高跳</td>
															<td>第2位</td>
														 </tr>
														<tr>
															<td>男子 棒高跳</td>
															<td>第3位</td>
														 </tr>
														<tr>
															<td>女子 100m</td>
															<td>第8位</td>
														 </tr>
														<tr>
															<td>女子 4x100mR</td>
															<td>第2位</td>
														 </tr>
														<tr>
															<td>女子 走高跳</td>
															<td>第5位、第6位</td>
														 </tr>
														<tr>
															<td rowspan="7">第68回中国高等学校陸上競技対校選手権大会</td>
															<td rowspan="7">出雲</td>
															<td>男子 100m</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>男子 200m</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>男子 4x100mR</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>男子 走高跳</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>男子 棒高跳</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>女子 4x100mR</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>女子 走高跳</td>
															<td>2名出場</td>
														 </tr>
                                                        
                                                        <!-- 2014  -->
														<tr>
															<td rowspan="20">2014年<br />（平成26年）</td>
															<td rowspan="10">第65回山口県高等学校総合体育大会 陸上競技</td>
															<td rowspan="10">山口</td>
															<td>男子 400m</td>
															<td>第1位、第5位</td>
														 </tr>
														<tr>
															<td>男子 4x100mR</td>
															<td>第5位</td>
														 </tr>
                                                        <tr>
															<td>男子 4x400mR</td>
															<td>第5位</td>
														 </tr>
														<tr>
															<td>男子 走高跳</td>
															<td>第2位、第4位、第6位</td>
														 </tr>
														<tr>
															<td>男子 棒高跳</td>
															<td>第5位</td>
														 </tr>
														<tr>
															<td>男子 ハンマー投</td>
															<td>第5位</td>
														 </tr>
														<tr>
															<td>女子 200m</td>
															<td>第4位</td>
														 </tr>
														<tr>
															<td>女子 400m</td>
															<td>第2位</td>
														 </tr>
														<tr>
															<td>女子 4x100mR</td>
															<td>第4位</td>
														 </tr>
														<tr>
															<td>女子 走高跳</td>
															<td>第6位</td>
														 </tr>
														<tr>
															<td rowspan="10">第67回中国高等学校陸上競技対校選手権大会</td>
															<td rowspan="10">鳥取</td>
															<td>男子 400m</td>
															<td>準決勝、他1名出場</td>
														 </tr>
														<tr>
															<td>男子 4x100mR</td>
															<td>出場</td>
														 </tr>
                                                        <tr>
															<td>男子 4x400mR</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>男子 走高跳</td>
															<td>第9位、他2名出場</td>
														 </tr>
														<tr>
															<td>男子 棒高跳</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>男子 ハンマー投</td>
															<td>第11位</td>
														 </tr>
														<tr>
															<td>女子 200m</td>
															<td>準決勝</td>
														 </tr>
														<tr>
															<td>女子 400m</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>女子 4x100mR</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>女子 走高跳</td>
															<td>出場</td>
														 </tr>
                                                        
                                                        <!-- 2013  -->
														<tr>
															<td rowspan="17">2013年<br />（平成25年）</td>
															<td rowspan="10">第64回山口県高等学校総合体育大会 陸上競技</td>
															<td rowspan="10">山口</td>
															<td>男子 400m</td>
															<td>第4位</td>
														 </tr>
														<tr>
															<td>男子 800m</td>
															<td>第3位</td>
														 </tr>
														<tr>
															<td>男子 4x400mR</td>
															<td>第5位</td>
														 </tr>
														<tr>
															<td>男子 走高跳</td>
															<td>第2位、第6位</td>
														 </tr>
														<tr>
															<td>男子 ハンマー投</td>
															<td>第7位</td>
														 </tr>
														<tr>
															<td>女子 100m</td>
															<td>第8位</td>
														 </tr>
														<tr>
															<td>女子 200m</td>
															<td>第6位</td>
														 </tr>
														<tr>
															<td>女子 4x100mR</td>
															<td>第5位</td>
														 </tr>
														<tr>
															<td>女子 走高跳</td>
															<td>第5位、第7位</td>
														 </tr>
														<tr>
															<td>女子 やり投</td>
															<td>第7位</td>
														 </tr>
														<tr>
															<td rowspan="7">第66回中国高等学校陸上競技対校選手権大会</td>
															<td rowspan="7">岡山</td>
															<td>男子 400m</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>男子 800m</td>
															<td>準決勝</td>
														 </tr>
														<tr>
															<td>男子 4x400mR</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>男子 走高跳</td>
															<td>2名出場</td>
														 </tr>
														<tr>
															<td>女子 200m</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>女子 4x100mR</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>女子 走高跳</td>
															<td>出場</td>
														 </tr>
                                                        
                                                        <!-- 2012  -->
														<tr>
															<td rowspan="6">2012年<br />（平成24年）</td>
															<td rowspan="3">第63回山口県高等学校総合体育大会 陸上競技</td>
															<td rowspan="3">山口</td>
															<td>男子 800m</td>
															<td>第3位</td>
														 </tr>
														<tr>
															<td>男子 走高跳</td>
															<td>第2位、第3位</td>
														 </tr>
														<tr>
															<td>男子 ハンマー投</td>
															<td>第5位</td>
														 </tr>
														<tr>
															<td rowspan="3">第65回中国高等学校陸上競技対校選手権大会</td>
															<td rowspan="3">広島</td>
															<td>男子 800m</td>
															<td>準決勝</td>
														 </tr>
														<tr>
															<td>男子 走高跳</td>
															<td>2名出場</td>
														 </tr>
														<tr>
															<td>男子 ハンマー投</td>
															<td>出場</td>
														 </tr>
                                                        
                                                        <!-- 2011  -->
														<tr>
															<td rowspan="11">2011年<br />（平成23年）</td>
															<td rowspan="6">第62回山口県高等学校総合体育大会 陸上競技</td>
															<td rowspan="6">山口</td>
															<td>男子 4x100mR</td>
															<td>第7位</td>
														 </tr>
														<tr>
															<td>男子 走高跳</td>
															<td>第4位</td>
														 </tr>
														<tr>
															<td>男子 棒高跳</td>
															<td>第1位</td>
														 </tr>
														<tr>
															<td>男子 走幅跳</td>
															<td>第4位</td>
														 </tr>
														<tr>
															<td>男子 ハンマー投</td>
															<td>第4位</td>
														 </tr>
														<tr>
															<td>女子 走高跳</td>
															<td>第3位</td>
														 </tr>
														<tr>
															<td rowspan="5">第64回中国高等学校陸上競技対校選手権大会</td>
															<td rowspan="5">山口</td>
															<td>男子 走高跳</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>男子 棒高跳</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>男子 走幅跳</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>男子 ハンマー投</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>女子 走高跳</td>
															<td>出場</td>
														 </tr>
                                                        
                                                        <!-- 2010  -->
														<tr>
															<td rowspan="16">2010年<br />（平成22年）</td>
															<td rowspan="9">第61回山口県高等学校総合体育大会 陸上競技</td>
															<td rowspan="9">下関</td>
															<td>男子 100m</td>
															<td>第5位</td>
														 </tr>
														<tr>
															<td>男子 200m</td>
															<td>第3位</td>
														 </tr>
														<tr>
															<td>男子 棒高跳</td>
															<td>第2位</td>
														 </tr>
														<tr>
															<td>男子 走幅跳</td>
															<td>第3位</td>
														 </tr>
														<tr>
															<td>男子 円盤投</td>
															<td>第4位</td>
														 </tr>
														<tr>
															<td>男子 ハンマー投</td>
															<td>第6位</td>
														 </tr>
														<tr>
															<td>男子 総合</td>
															<td>第6位</td>
														 </tr>
														<tr>
															<td>女子 4x100mR</td>
															<td>第8位</td>
														 </tr>
														<tr>
															<td>女子 走高跳</td>
															<td>第3位</td>
														 </tr>
														<tr>
															<td rowspan="7">第63回中国高等学校陸上競技対校選手権大会</td>
															<td rowspan="7">鳥取</td>
															<td>男子 100m</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>男子 200m</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>男子 棒高跳</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>男子 走幅跳</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>男子 円盤投</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>男子 ハンマー投</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>女子 走高跳</td>
															<td>第8位</td>
														 </tr>
                                                        
                                                        <!-- 2009  -->
														<tr>
															<td rowspan="13">2009年<br />（平成21年）</td>
															<td rowspan="8">第60回山口県高等学校総合体育大会 陸上競技</td>
															<td rowspan="8">下関</td>
															<td>男子 200m</td>
															<td>第5位、第7位</td>
														 </tr>
														<tr>
															<td>男子 4x100mR</td>
															<td>第6位</td>
														 </tr>
														<tr>
															<td>男子 棒高跳</td>
															<td>第1位</td>
														 </tr>
														<tr>
															<td>男子 三段跳</td>
															<td>第4位</td>
														 </tr>
														<tr>
															<td>女子 4x100mR</td>
															<td>第7位</td>
														 </tr>
														<tr>
															<td>女子 4x400mR</td>
															<td>第7位</td>
														 </tr>
														<tr>
															<td>女子 円盤投</td>
															<td>第6位</td>
														 </tr>
														<tr>
															<td>女子 やり投</td>
															<td>第8位</td>
														 </tr>
														<tr>
															<td rowspan="5">第62回中国高等学校陸上競技対校選手権大会</td>
															<td rowspan="5">出雲</td>
															<td>男子 200m</td>
															<td>準決勝</td>
														 </tr>
														<tr>
															<td>男子 4x100mR</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>男子 棒高跳</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>男子 三段跳</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>女子 円盤投</td>
															<td>出場</td>
														 </tr>
                                                        
                                                        <!-- 2008  -->
														<tr>
															<td rowspan="24">2008年<br />（平成20年）</td>
															<td rowspan="11">第59回山口県高等学校総合体育大会 陸上競技</td>
															<td rowspan="11">下関</td>
															<td>男子 110mH</td>
															<td>第4位</td>
														 </tr>
														<tr>
															<td>男子 走幅跳</td>
															<td>第4位</td>
														 </tr>
														<tr>
															<td>男子 三段跳</td>
															<td>第6位</td>
														 </tr>
														<tr>
															<td>女子 4x100mR</td>
															<td>第4位</td>
														 </tr>
                                                        <tr>
															<td>女子 4x400mR</td>
															<td>第8位</td>
														 </tr>
														<tr>
															<td>女子 走幅跳</td>
															<td>第1位</td>
														 </tr>
														<tr>
															<td>女子 砲丸投</td>
															<td>第2位</td>
														 </tr>
														<tr>
															<td>女子 円盤投</td>
															<td>第2位</td>
														 </tr>
														<tr>
															<td>女子 やり投</td>
															<td>第4位、第5位</td>
														 </tr>
														<tr>
															<td>女子 フィールドの部</td>
															<td>第1位</td>
														 </tr>
                                                        <tr>
															<td>女子 総合</td>
															<td>第4位</td>
														 </tr>
														<tr>
															<td rowspan="9">第61回中国高等学校陸上競技対校選手権大会</td>
															<td rowspan="9">岡山</td>
															<td>男子 110mH</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>男子 走幅跳</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>男子 三段跳</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>女子 4x100mR</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>女子 走幅跳</td>
															<td>第2位</td>
														 </tr>
														<tr>
															<td>女子 砲丸投</td>
															<td>第5位</td>
														 </tr>
														<tr>
															<td>女子 円盤投</td>
															<td>第4位</td>
														 </tr>
														<tr>
															<td>女子 やり投</td>
															<td>第6位、他1名出場</td>
														 </tr>
														<tr>
															<td>女子 フィールドの部</td>
															<td>第2位</td>
														 </tr>
														<tr>
															<td rowspan="4">平成20年度全国高等学校総合体育大会</td>
															<td rowspan="4">埼玉</td>
															<td>女子 走幅跳</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>女子 砲丸投</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>女子 円盤投</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>女子 やり投</td>
															<td>出場</td>
														 </tr>
                                                        
                                                        <!-- 2007  -->
														<tr>
															<td rowspan="12">2007年<br />（平成19年）</td>
															<td rowspan="5">第58回山口県高等学校総合体育大会 陸上競技</td>
															<td rowspan="5">山口</td>
															<td>女子 200m</td>
															<td>第6位</td>
														 </tr>
														<tr>
															<td>女子 走幅跳</td>
															<td>第1位、第3位、第4位</td>
														 </tr>
														<tr>
															<td>女子 砲丸投</td>
															<td>第2位</td>
														 </tr>
														<tr>
															<td>女子 円盤投</td>
															<td>第3位</td>
														 </tr>
														<tr>
															<td>女子 やり投</td>
															<td>第2位、第3位</td>
														 </tr>
														<tr>
															<td rowspan="6">第60回中国高等学校陸上競技対校選手権大会</td>
															<td rowspan="6">広島</td>
															<td>女子 200m</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>女子 走幅跳</td>
															<td>第7位、他2名出場</td>
														 </tr>
														<tr>
															<td>女子 砲丸投</td>
															<td>第7位</td>
														 </tr>
														<tr>
															<td>女子 円盤投</td>
															<td>第3位</td>
														 </tr>
														<tr>
															<td>女子 やり投</td>
															<td>2名出場</td>
														 </tr>
														<tr>
															<td>女子 フィールドの部</td>
															<td>第5位</td>
														 </tr>
														<tr>
															<td>平成19年度全国高等学校総合体育大会</td>
															<td>佐賀</td>
															<td>女子 円盤投</td>
															<td>出場</td>
														 </tr>
                                                        
                                                        <!-- 2006  -->
														<tr>
															<td rowspan="16">2006年<br />（平成18年）</td>
															<td rowspan="8">第57回山口県高等学校総合体育大会 陸上競技</td>
															<td rowspan="8">山口</td>
															<td>男子 100m</td>
															<td>第3位</td>
														 </tr>
														<tr>
															<td>男子 200m</td>
															<td>第4位</td>
														 </tr>
														<tr>
															<td>男子 走幅跳</td>
															<td>第1位</td>
														 </tr>
														<tr>
															<td>男子 ハンマー投</td>
															<td>第5位</td>
														 </tr>
														<tr>
															<td>女子 100mH</td>
															<td>第3位</td>
														 </tr>
														<tr>
															<td>女子 4x100mR</td>
															<td>第3位</td>
														 </tr>
														<tr>
															<td>女子 走幅跳</td>
															<td>第3位</td>
														 </tr>
														<tr>
															<td>女子 砲丸投</td>
															<td>第5位</td>
														 </tr>
														<tr>
															<td rowspan="8">第59回中国高等学校陸上競技対校選手権大会</td>
															<td rowspan="8">山口</td>
															<td>男子 100m</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>男子 200m</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>男子 走幅跳</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>男子 ハンマー投</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>女子 100mH</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>女子 4x100mR</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>女子 走幅跳</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>女子 砲丸投</td>
															<td>出場</td>
														 </tr>
                                                        
                                                        <!-- 2005  -->
														<tr>
															<td rowspan="11">2005年<br />（平成17年）</td>
															<td rowspan="6">第56回山口県高等学校総合体育大会 陸上競技</td>
															<td rowspan="6">山口</td>
															<td>男子 走幅跳</td>
															<td>第1位</td>
														 </tr>
														<tr>
															<td>女子 100mH</td>
															<td>第6位</td>
														 </tr>
														<tr>
															<td>女子 400mH</td>
															<td>第7位</td>
														 </tr>
														<tr>
															<td>女子 4x100mR</td>
															<td>第6位</td>
														 </tr>
														<tr>
															<td>女子 4x400mR</td>
															<td>第4位</td>
														 </tr>
														<tr>
															<td>女子 走幅跳</td>
															<td>第5位、第6位</td>
														 </tr>
														<tr>
															<td rowspan="4">第58回中国高等学校陸上競技対校選手権大会</td>
															<td rowspan="4">岡山</td>
															<td>男子 走幅跳</td>
															<td>第6位</td>
														 </tr>
														<tr>
															<td>女子 4x100mR</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>女子 4x400mR</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>女子 走幅跳</td>
															<td>2名出場</td>
														 </tr>
														<tr>
															<td>平成17年度全国高等学校総合体育大会</td>
															<td>千葉</td>
															<td>男子 走幅跳</td>
															<td>出場</td>
														 </tr>
                                                        
                                                        <!-- 2004  -->
														<tr>
															<td rowspan="7">2004年<br />（平成16年）</td>
															<td rowspan="4">第55回山口県高等学校総合体育大会 陸上競技</td>
															<td rowspan="4">山口</td>
															<td>男子 走幅跳</td>
															<td>第4位</td>
														 </tr>
														<tr>
															<td>女子 100mH</td>
															<td>第7位</td>
														 </tr>
														<tr>
															<td>女子 4x100mR</td>
															<td>第6位</td>
														 </tr>
														<tr>
															<td>女子 走幅跳</td>
															<td>第5位、第6位</td>
														 </tr>
														<tr>
															<td rowspan="3">第57回中国高等学校陸上競技対校選手権大会</td>
															<td rowspan="3">出雲</td>
															<td>男子 走幅跳</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>女子 4x100mR</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>女子 走幅跳</td>
															<td>2名出場</td>
														 </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="desc">
                        <div class="wrap wrap-inner-960">
                            <a class="accordion">国民体育大会</a>
                            <div id="accordion">
                                <div class="cnt-section">
                                    <div class="cnt-wrapper">
                                        <div class="wrap result">
                                            <div class="section">
                                                <div class="cnt-wrap">
                                                    <table>
														<tr class="ora">
															<th>年</th>
															<th>大会名</th>
															<th>開催地</th>
															<th>種目</th>
															<th>結果</th>
														 </tr>
														<tr>
															<td>2015年<br />（平成27年）</td>
															<td>第70回国民体育大会</td>
															<td>和歌山</td>
															<td>少年男子B 100ｍ</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>2008年<br />（平成20年）</td>
															<td>第63回国民体育大会</td>
															<td>大分</td>
															<td>少年女子A 円盤投</td>
															<td>第12位</td>
														 </tr>
														<tr>
															<td>2007年<br />（平成19年）</td>
															<td>第62回国民体育大会</td>
															<td>秋田</td>
															<td>少年女子A 円盤投</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>2006年<br />（平成18年）</td>
															<td>第61回国民体育大会</td>
															<td>兵庫</td>
															<td>少年女子B 走幅跳</td>
															<td>第11位</td>
														 </tr>
														<tr>
															<td>2004年<br />（平成16年）</td>
															<td>第59回国民体育大会</td>
															<td>埼玉</td>
															<td>少年男子B 走幅跳</td>
															<td>出場</td>
														 </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="desc">
                        <div class="wrap wrap-inner-960">
                            <a class="accordion">高等学校新人陸上競技大会</a>
                            <div id="accordion">
                                <div class="cnt-section">
                                    <div class="cnt-wrapper">
                                        <div class="wrap result">
                                            <div class="section">
                                                <div class="cnt-wrap">
                                                    <table>
														<tr class="ora">
															<th>年</th>
															<th>大会名</th>
															<th>開催地</th>
															<th>種目</th>
															<th>結果</th>
														 </tr>
                                                        
                                                        <!-- 2016  -->
														<tr>
															<td rowspan="13">2016年<br />（平成28年）</td>
															<td rowspan="10">第61回山口県高等学校新人陸上競技大会</td>
															<td rowspan="10">下関</td>
															<td>男子 100m</td>
															<td>第1位</td>
														 </tr>
														<tr>
															<td>男子 200m</td>
															<td>第3位</td>
														 </tr>
														<tr>
															<td>男子 4x100mR</td>
															<td>第3位</td>
														 </tr>
														<tr>
															<td>男子 トラックの部</td>
															<td>第7位</td>
														 </tr>
														<tr>
															<td>女子 100m</td>
															<td>第5位</td>
														 </tr>
														<tr>
															<td>女子 200m</td>
															<td>第8位</td>
														 </tr>
														<tr>
															<td>女子 走高跳</td>
															<td>第4位</td>
														 </tr>
														<tr>
															<td>女子 走幅跳</td>
															<td>第8位</td>
														 </tr>
														<tr>
															<td>女子 三段跳</td>
															<td>第4位、第7位</td>
														 </tr>
														<tr>
															<td>女子 フィールドの部</td>
															<td>第6位</td>
														 </tr>
														<tr>
															<td rowspan="3">第25回中国高等学校新人陸上競技対校選手権大会</td>
															<td rowspan="3">出雲</td>
															<td>男子 100m</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>男子 200m</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>男子 4x100mR</td>
															<td>第3位</td>
														 </tr>
                                                        
                                                        <!-- 2015  -->
														<tr>
															<td rowspan="21">2015年<br />（平成27年）</td>
															<td rowspan="14">第60回山口県高等学校新人陸上競技大会</td>
															<td rowspan="14">下関</td>
															<td>男子 100m</td>
															<td>第2位、第3位</td>
														 </tr>
														<tr>
															<td>男子 200m</td>
															<td>第2位</td>
														 </tr>
														<tr>
															<td>男子 4x100mR</td>
															<td>第1位</td>
														 </tr>
														<tr>
															<td>男子 走高跳</td>
															<td>第3位</td>
														 </tr>
														<tr>
															<td>男子 棒高跳</td>
															<td>第2位</td>
														 </tr>
														<tr>
															<td>男子 トラックの部</td>
															<td>第3位</td>
														 </tr>
														<tr>
															<td>男子 総合</td>
															<td>第4位</td>
														 </tr>
														<tr>
															<td>女子 100m</td>
															<td>第3位</td>
														 </tr>
														<tr>
															<td>女子 200m</td>
															<td>第5位</td>
														 </tr>
														<tr>
															<td>女子 4x100mR</td>
															<td>第4位</td>
														 </tr>
														<tr>
															<td>女子 走高跳</td>
															<td>第3位、第4位</td>
														 </tr>
														<tr>
															<td>女子 トラックの部</td>
															<td>第8位</td>
														 </tr>
														<tr>
															<td>女子 フィールドの部</td>
															<td>第5位</td>
														 </tr>
														<tr>
															<td>女子 総合</td>
															<td>第8位</td>
														 </tr>
														<tr>
															<td rowspan="7">第24回中国高等学校新人陸上競技対校選手権大会</td>
															<td rowspan="7">米子</td>
															<td>男子 100m</td>
															<td>2名出場</td>
														 </tr>
														<tr>
															<td>男子 200m</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>男子 4x100mR</td>
															<td>第7位</td>
														 </tr>
														<tr>
															<td>男子 走高跳</td>
															<td>第10位</td>
														 </tr>
														<tr>
															<td>男子 棒高跳</td>
															<td>第13位</td>
														 </tr>
														<tr>
															<td>女子 100m</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>女子 走高跳</td>
															<td>第10位</td>
														 </tr>
                                                        
                                                        <!-- 2014  -->
														<tr>
															<td rowspan="11">2014年<br />（平成26年）</td>
															<td rowspan="8">第59回山口県高等学校新人陸上競技大会</td>
															<td rowspan="8">下関</td>
															<td>男子 100m</td>
															<td>第5位</td>
														 </tr>
														<tr>
															<td>男子 4x100mR</td>
															<td>第3位</td>
														 </tr>
                                        
														<tr>
															<td>男子 走高跳</td>
															<td>第2位</td>
														 </tr>
														<tr>
															<td>男子 棒高跳</td>
															<td>第1位</td>
														 </tr>
														<tr>
															<td>男子 走幅跳</td>
															<td>第8位</td>
														 </tr>
														<tr>
															<td>女子 100m</td>
															<td>第6位</td>
														 </tr>
														<tr>
															<td>女子 4x100mR</td>
															<td>第7位</td>
														 </tr>
														<tr>
															<td>女子 走高跳</td>
															<td>第4位、第6位</td>
														 </tr>
														<tr>
															<td rowspan="3">第23回中国高等学校新人陸上競技対校選手権大会</td>
															<td rowspan="3">岡山</td>
															<td>男子 4x100mR</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>男子 走高跳</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>男子 棒高跳</td>
															<td>出場</td>
														 </tr>
                                                        
                                                        <!-- 2013  -->
														<tr>
															<td rowspan="20">2013年<br />（平成25年）</td>
															<td rowspan="14">第58回山口県高等学校新人陸上競技大会</td>
															<td rowspan="14">下関</td>
															<td>男子 400m</td>
															<td>第1位</td>
														 </tr>
														<tr>
															<td>男子 4x400mR</td>
															<td>第4位</td>
														 </tr>
														<tr>
															<td>男子 走高跳</td>
															<td>第2位</td>
														 </tr>
														<tr>
															<td>男子 ハンマー投</td>
															<td>第2位</td>
														 </tr>
														<tr>
															<td>男子 フィールドの部</td>
															<td>第8位</td>
														 </tr>
														<tr>
															<td>男子 総合</td>
															<td>第7位</td>
														 </tr>
														<tr>
															<td>女子 200m</td>
															<td>第4位</td>
														 </tr>
														<tr>
															<td>女子 4x100mR</td>
															<td>第3位</td>
														 </tr>
														<tr>
															<td>女子 4x400mR</td>
															<td>第3位</td>
														 </tr>
														<tr>
															<td>女子 走高跳</td>
															<td>第3位</td>
														 </tr>
														<tr>
															<td>女子 走幅跳</td>
															<td>第6位</td>
														 </tr>
														<tr>
															<td>女子 砲丸投</td>
															<td>第8位</td>
														 </tr>
														<tr>
															<td>女子 やり投</td>
															<td>第7位</td>
														 </tr>
														<tr>
															<td>女子 フィールドの部</td>
															<td>第5位</td>
														 </tr>
														<tr>
															<td rowspan="6">第22回中国高等学校新人陸上競技対校選手権大会</td>
															<td rowspan="6">広島</td>
															<td>男子 400m</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>男子 走高跳</td>
															<td>第6位</td>
														 </tr>
														<tr>
															<td>男子 ハンマー投</td>
															<td>第8位</td>
														 </tr>
														<tr>
															<td>女子 4x100mR</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>女子 4x400mR</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>女子 走高跳</td>
															<td>出場</td>
														 </tr>
                                                        
                                                        <!-- 2012  -->
														<tr>
															<td rowspan="23">2012年<br />（平成24年）</td>
															<td rowspan="18">第57回山口県高等学校新人陸上競技大会</td>
															<td rowspan="18">下関</td>
															<td>男子 400m</td>
															<td>第4位</td>
														 </tr>
														<tr>
															<td>男子 800m</td>
															<td>第3位</td>
														 </tr>
														<tr>
															<td>男子 4x400mR</td>
															<td>第5位</td>
														 </tr>
														<tr>
															<td>男子 走高跳</td>
															<td>第2位、第5位</td>
														 </tr>
														<tr>
															<td>男子 ハンマー投</td>
															<td>第6位</td>
														 </tr>
														<tr>
															<td>男子 やり投</td>
															<td>第3位</td>
														 </tr>
														<tr>
															<td>男子 トラックの部</td>
															<td>第8位</td>
														 </tr>
														<tr>
															<td>男子 フィールドの部</td>
															<td>第6位</td>
														 </tr>
														<tr>
															<td>男子 総合</td>
															<td>第5位</td>
														 </tr>
														<tr>
															<td>女子 200m</td>
															<td>第3位</td>
														 </tr>
                                                        <tr>
															<td>女子 4x100mR</td>
															<td>第5位</td>
														 </tr>
														<tr>
															<td>女子 4x400mR</td>
															<td>第7位</td>
														 </tr>
														<tr>
															<td>女子 走高跳</td>
															<td>第5位</td>
														 </tr>
														<tr>
															<td>女子 走幅跳</td>
															<td>第6位</td>
														 </tr>
														<tr>
															<td>女子 砲丸投</td>
															<td>第6位</td>
														 </tr>
														<tr>
															<td>女子 やり投</td>
															<td>第6位</td>
														 </tr>
														<tr>
															<td>女子 フィールドの部</td>
															<td>第6位</td>
														 </tr>
														<tr>
															<td>女子 総合</td>
															<td>第8位</td>
														 </tr>
														<tr>
															<td rowspan="5">第21回中国高等学校新人陸上競技対校選手権大会</td>
															<td rowspan="5">山口</td>
															<td>男子 400m</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>男子 800m</td>
															<td>第3位</td>
														 </tr>
														<tr>
															<td>男子 走高跳</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>男子 やり投</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>女子 200m</td>
															<td>出場</td>
														 </tr>
                                                        
                                                        <!-- 2011  -->
														<tr>
															<td rowspan="8">2011年<br />（平成23年）</td>
															<td rowspan="7">第56回山口県高等学校新人陸上競技大会</td>
															<td rowspan="7">下関</td>
															<td>男子 100m</td>
															<td>第5位</td>
														 </tr>
														<tr>
															<td>男子 4x100mR</td>
															<td>第5位</td>
														 </tr>
														<tr>
															<td>男子 走高跳</td>
															<td>第6位</td>
														 </tr>
														<tr>
															<td>男子 走幅跳</td>
															<td>第3位</td>
														 </tr>
														<tr>
															<td>男子 ハンマー投</td>
															<td>第8位</td>
														 </tr>
														<tr>
															<td>男子 走高跳</td>
															<td>第8位</td>
														 </tr>
														<tr>
															<td>女子 走幅跳</td>
															<td>第8位</td>
														 </tr>
														<tr>
															<td>第20回中国高等学校新人陸上競技対校選手権大会</td>
															<td>出雲</td>
															<td>男子 走幅跳</td>
															<td>出場</td>
														 </tr>
                                                        
                                                        <!-- 2010  -->
														<tr>
															<td rowspan="6">2010年<br />（平成22年）</td>
															<td rowspan="4">第55回山口県高等学校新人陸上競技大会</td>
															<td rowspan="4">下関</td>
															<td>男子 棒高跳</td>
															<td>第1位</td>
														 </tr>
														<tr>
															<td>男子 ハンマー投</td>
															<td>第3位</td>
														 </tr>
														<tr>
															<td>女子 100m</td>
															<td>第8位</td>
														 </tr>
														<tr>
															<td>女子 走高跳</td>
															<td>第5位</td>
														 </tr>
														<tr>
															<td rowspan="2">第19回中国高等学校新人陸上競技対校選手権大会</td>
															<td rowspan="2">鳥取</td>
															<td>男子 棒高跳</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>男子 ハンマー投</td>
															<td>出場</td>
														 </tr>
                                                        
                                                        <!-- 2009  -->
														<tr>
															<td rowspan="8">2009年<br />（平成21年）</td>
															<td rowspan="7">第54回山口県高等学校新人陸上競技大会</td>
															<td rowspan="7">下関</td>
															<td>男子 100m</td>
															<td>第4位</td>
														 </tr>
														<tr>
															<td>男子 200m</td>
															<td>第3位</td>
														 </tr>
														<tr>
															<td>男子 4x100mR</td>
															<td>第8位</td>
														 </tr>
														<tr>
															<td>男子 走幅跳</td>
															<td>第8位</td>
														 </tr>
														<tr>
															<td>男子 三段跳</td>
															<td>第4位</td>
														 </tr>
														<tr>
															<td>女子 4x400mR</td>
															<td>第4位</td>
														 </tr>
														<tr>
															<td>女子 走高跳</td>
															<td>第5位</td>
														 </tr>
														<tr>
															<td>第18回中国高等学校新人陸上競技対校選手権大会</td>
															<td>岡山</td>
															<td>男子 200m</td>
															<td>第8位</td>
														 </tr>
                                                        
                                                        <!-- 2008  -->
														<tr>
															<td rowspan="13">2008年<br />（平成20年）</td>
															<td rowspan="10">第53回山口県高等学校新人陸上競技大会</td>
															<td rowspan="10">下関</td>
															<td>男子 100m</td>
															<td>第8位</td>
														 </tr>
														<tr>
															<td>男子 200m</td>
															<td>第7位、第8位</td>
														 </tr>
														<tr>
															<td>男子 4x100mR</td>
															<td>第2位</td>
														 </tr>
														<tr>
															<td>男子 三段跳</td>
															<td>第2位</td>
														 </tr>
														<tr>
															<td>女子 100mH</td>
															<td>第6位</td>
														 </tr>
														<tr>
															<td>女子 400mH</td>
															<td>第7位</td>
														 </tr>
														<tr>
															<td>女子 4x100mR</td>
															<td>第7位</td>
														 </tr>
														<tr>
															<td>女子 4x400mR</td>
															<td>第5位</td>
														 </tr>
														<tr>
															<td>女子 走幅跳</td>
															<td>第7位</td>
														 </tr>
														<tr>
															<td>女子 やり投</td>
															<td>第3位</td>
														 </tr>
														<tr>
															<td rowspan="3">第17回中国高等学校新人陸上競技対校選手権大会</td>
															<td rowspan="3">広島</td>
															<td>男子 4x100mR</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>男子 三段跳</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>女子 やり投</td>
															<td>出場</td>
														 </tr>
                                                        
                                                        <!-- 2007  -->
														<tr>
															<td rowspan="17">2007年<br />（平成19年）</td>
															<td rowspan="12">平成19年度山口県体育大会陸上競技</td>
															<td rowspan="12">下関</td>
															<td>男子 110mH</td>
															<td>第2位</td>
														 </tr>
														<tr>
															<td>男子 4x100mR</td>
															<td>第6位</td>
														 </tr>
														<tr>
															<td>女子 100m</td>
															<td>第6位</td>
														 </tr>
														<tr>
															<td>女子 4x100mR</td>
															<td>第6位</td>
														 </tr>
														<tr>
															<td>女子 4x400mR</td>
															<td>第7位</td>
														 </tr>
														<tr>
															<td>女子 走幅跳</td>
															<td>第2位</td>
														 </tr>
														<tr>
															<td>女子 砲丸投</td>
															<td>第7位</td>
														 </tr>
														<tr>
															<td>女子 円盤投</td>
															<td>第2位、第8位</td>
														 </tr>
														<tr>
															<td>女子 やり投</td>
															<td>第3位、第4位</td>
														 </tr>
														<tr>
															<td>女子 フィールドの部</td>
															<td>第1位</td>
														 </tr>
														<tr>
															<td>女子 総合</td>
															<td>第4位</td>
														 </tr>
														<tr>
															<td>女子</td>
															<td>最優秀選手賞</td>
														 </tr>
														<tr>
															<td rowspan="5">第16回中国高等学校新人陸上競技対校選手権大会</td>
															<td rowspan="5">下関</td>
															<td>男子 110mH</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>女子 走幅跳</td>
															<td>第2位</td>
														 </tr>
														<tr>
															<td>女子 円盤投</td>
															<td>第2位</td>
														 </tr>
														<tr>
															<td>女子 やり投</td>
															<td>第2位</td>
														 </tr>
														<tr>
															<td>女子 フィールドの部</td>
															<td>第2位</td>
														 </tr>
                                                        
                                                        <!-- 2006  -->
														<tr>
															<td rowspan="15">2006年<br />（平成18年）</td>
															<td rowspan="10">平成18年度山口県体育大会陸上競技</td>
															<td rowspan="10">下関</td>
															<td>女子 200m</td>
															<td>第4位</td>
														 </tr>
														<tr>
															<td>女子 100mH</td>
															<td>第7位</td>
														 </tr>
														<tr>
															<td>女子 400mH</td>
															<td>第5位</td>
														 </tr>
														<tr>
															<td>女子 4x100mR</td>
															<td>第3位</td>
														 </tr>
														<tr>
															<td>女子 走幅跳</td>
															<td>第1位</td>
														 </tr>
														<tr>
															<td>女子 砲丸投</td>
															<td>第2位</td>
														 </tr>
														<tr>
															<td>女子 円盤投</td>
															<td>第3位</td>
														 </tr>
														<tr>
															<td>女子 フィールドの部</td>
															<td>第1位</td>
														 </tr>
														<tr>
															<td>女子 総合</td>
															<td>第3位</td>
														 </tr>
														<tr>
															<td>女子</td>
															<td>最優秀選手賞</td>
														 </tr>
														<tr>
															<td rowspan="5">第15回中国高等学校新人陸上競技対校選手権大会</td>
															<td rowspan="5">出雲</td>
															<td>女子 4x100mR</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>女子 走幅跳</td>
															<td>第4位</td>
														 </tr>
														<tr>
															<td>女子 砲丸投</td>
															<td>第4位</td>
														 </tr>
														<tr>
															<td>女子 円盤投</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>女子 フィールドの部</td>
															<td>第4位</td>
														 </tr>
                                                        
                                                        <!-- 2005  -->
														<tr>
															<td rowspan="8">2005年<br />（平成17年）</td>
															<td rowspan="5">平成17年度山口県体育大会陸上競技</td>
															<td rowspan="5">下関</td>
															<td>男子 走幅跳</td>
															<td>第1位</td>
														 </tr>
														<tr>
															<td>女子 100m</td>
															<td>第4位</td>
														 </tr>
														<tr>
															<td>女子 100mH</td>
															<td>第5位</td>
														 </tr>
														<tr>
															<td>女子 4x100mR</td>
															<td>第3位</td>
														 </tr>
														<tr>
															<td>女子 走幅跳</td>
															<td>第3位、第5位</td>
														 </tr>
														<tr>
															<td rowspan="3">第14回中国高等学校新人陸上競技対校選手権大会</td>
															<td rowspan="3">米子</td>
															<td>男子 走幅跳</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>女子 4x100mR</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>女子 走幅跳</td>
															<td>出場</td>
														 </tr>
                                                        
                                                        <!-- 2004  -->
														<tr>
															<td rowspan="7">2004年<br />（平成16年）</td>
															<td rowspan="5">平成16年度山口県体育大会陸上競技</td>
															<td rowspan="5">下関</td>
															<td>男子 走幅跳</td>
															<td>第1位</td>
														 </tr>
														<tr>
															<td>女子 100mH</td>
															<td>第5位</td>
														 </tr>
														<tr>
															<td>女子 4x100mR</td>
															<td>第5位</td>
														 </tr>
														<tr>
															<td>女子 4x400mR</td>
															<td>第6位</td>
														 </tr>
														<tr>
															<td>女子 走幅跳</td>
															<td>第5位、第6位</td>
														 </tr>
                                                        <tr>
															<td rowspan="2">第13回中国高等学校新人陸上競技対校選手権大会</td>
															<td rowspan="2">津山</td>
															<td>女子 100mH</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>女子 走幅跳</td>
															<td>出場</td>
														 </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                                        
                    <div class="desc">
                        <div class="wrap wrap-inner-960">
                            <a class="accordion">山口県陸上競技選手権大会・中国五県陸上競技対抗選手権大会</a>
                            <div id="accordion">
                                <div class="cnt-section">
                                    <div class="cnt-wrapper">
                                        <div class="wrap result">
                                            <div class="section">
                                                <div class="cnt-wrap">
                                                    <table>
														<tr class="ora">
															<th>年</th>
															<th>大会名</th>
															<th>開催地</th>
															<th>種目</th>
															<th>結果</th>
														 </tr>
                                                        
                                                        <!-- 2016  -->
														<tr>
															<td rowspan="11">2016年<br />（平成28年）</td>
															<td rowspan="6">第43回山口県陸上競技選手権大会</td>
															<td rowspan="6">山口</td>
															<td>男子 100m</td>
															<td>第4位</td>
														 </tr>
														<tr>
															<td>男子 4x100mR</td>
															<td>第1位</td>
														 </tr>
														<tr>
															<td>男子 走高跳</td>
															<td>第7位</td>
														 </tr>
														<tr>
															<td>男子 棒高跳</td>
															<td>第7位</td>
														 </tr>
														<tr>
															<td>女子 4x100mR</td>
															<td>第8位</td>
														 </tr>
														<tr>
															<td>女子 走高跳</td>
															<td>第3位、第8位</td>
														 </tr>
														<tr>
															<td rowspan="5">第70回中国五県陸上競技対抗選手権大会</td>
															<td rowspan="5">岡山</td>
															<td>男子 4x100mR</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>男子 走高跳</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>男子 棒高跳</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>女子 4x100mR</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>女子 走高跳</td>
															<td>出場</td>
														 </tr>
                                                        
                                                        <!-- 2015  -->
														<tr>
															<td rowspan="12">2015年<br />（平成27年）</td>
															<td rowspan="7">第42回山口県陸上競技選手権大会</td>
															<td rowspan="7">山口</td>
															<td>男子 200m</td>
															<td>第6位</td>
														 </tr>
														<tr>
															<td>男子 走高跳</td>
															<td>第8位</td>
														 </tr>
														<tr>
															<td>男子 棒高跳</td>
															<td>第7位</td>
														 </tr>
														<tr>
															<td>女子 4x100mR</td>
															<td>第3位</td>
														 </tr>
														<tr>
															<td>女子 走高跳</td>
															<td>第6位</td>
														 </tr>
														<tr>
															<td>女子 砲丸投</td>
															<td>第6位</td>
														 </tr>
														<tr>
															<td>女子 やり投</td>
															<td>第7位</td>
														 </tr>
														<tr>
															<td rowspan="5">第69回中国五県陸上競技対抗選手権大会</td>
															<td rowspan="5">広島</td>
															<td>男子 200m</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>男子 走高跳</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>男子 棒高跳</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>女子 4x100mR</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>女子 走高跳</td>
															<td>2名出場</td>
														 </tr>
                                                        
                                                        <!-- 2014  -->
														<tr>
															<td rowspan="13">2014年<br />（平成26年）</td>
															<td rowspan="7">第41回山口県陸上競技選手権大会</td>
															<td rowspan="7">山口</td>
															<td>男子 走高跳</td>
															<td>第4位</td>
														 </tr>
														<tr>
															<td>男子 ハンマー投</td>
															<td>第7位</td>
														 </tr>
														<tr>
															<td>女子 200m</td>
															<td>第5位</td>
														 </tr>
														<tr>
															<td>女子 4x100mR</td>
															<td>第4位</td>
														 </tr>
														<tr>
															<td>女子 4x400mR</td>
															<td>第4位</td>
														 </tr>
														<tr>
															<td>女子 砲丸投</td>
															<td>第7位</td>
														 </tr>
														<tr>
															<td>女子 やり投</td>
															<td>第6位、第7位</td>
														 </tr>
														<tr>
															<td rowspan="6">第68回中国五県陸上競技対抗選手権大会</td>
															<td rowspan="6">山口</td>
															<td>男子 走高跳</td>
															<td>第17位</td>
														 </tr>
														<tr>
															<td>女子 200m</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>女子 4x100mR</td>
															<td>第6位</td>
														 </tr>
														<tr>
															<td>女子 4x400mR</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>女子 砲丸投</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>女子 やり投</td>
															<td>2名出場</td>
														 </tr>
                                                        
                                                        <!-- 2013  -->
														<tr>
															<td rowspan="16">2013年<br />（平成25年）</td>
															<td rowspan="8">第40回山口県陸上競技選手権大会</td>
															<td rowspan="8">山口</td>
															<td>男子 400m</td>
															<td>第7位</td>
														 </tr>
														<tr>
															<td>男子 800m</td>
															<td>第4位</td>
														 </tr>
														<tr>
															<td>男子 4x400mR</td>
															<td>第4位</td>
														 </tr>
														<tr>
															<td>男子 走高跳</td>
															<td>第6位、第7位</td>
														 </tr>
														<tr>
															<td>女子 4x100mR</td>
															<td>第3位</td>
														 </tr>
														<tr>
															<td>女子 4x400mR</td>
															<td>第6位</td>
														 </tr>
														<tr>
															<td>女子 走高跳</td>
															<td>第2位、第6位</td>
														 </tr>
														<tr>
															<td>女子 やり投</td>
															<td>第5位</td>
														 </tr>
														<tr>
															<td rowspan="8">第67回中国五県陸上競技対抗選手権大会</td>
															<td rowspan="8">島根</td>
															<td>男子 400m</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>男子 800m</td>
															<td>第4位</td>
														 </tr>
														<tr>
															<td>男子 4x400mR</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>男子 走高跳</td>
															<td>2名出場</td>
														 </tr>
														<tr>
															<td>女子 4x100mR</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>女子 4x400mR</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>女子 走高跳</td>
															<td>2名出場</td>
														 </tr>
														<tr>
															<td>女子 やり投</td>
															<td>出場</td>
														 </tr>
                                                        
                                                        <!-- 2012  -->
														<tr>
															<td rowspan="8">2012年<br />（平成24年）</td>
															<td rowspan="4">第39回山口県陸上競技選手権大会</td>
															<td rowspan="4">山口</td>
															<td>男子 4x100mR</td>
															<td>第8位</td>
														 </tr>
														<tr>
															<td>男子 4x400mR</td>
															<td>第7位</td>
														 </tr>
														<tr>
															<td>男子 ハンマー投</td>
															<td>第5位</td>
														 </tr>
														<tr>
															<td>女子 4x100mR</td>
															<td>第8位</td>
														 </tr>
														<tr>
															<td rowspan="4">第66回中国五県陸上競技対抗選手権大会</td>
															<td rowspan="4">島根</td>
															<td>男子 4x100mR</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>男子 4x400mR</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>男子 ハンマー投</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>女子 4x100mR</td>
															<td>出場</td>
														 </tr>
                                                        
                                                        <!-- 2011  -->
														<tr>
															<td rowspan="8">2011年<br />（平成23年）</td>
															<td rowspan="4">第38回山口県陸上競技選手権大会</td>
															<td rowspan="4">山口</td>
															<td>男子 4x100mR</td>
															<td>第8位</td>
														 </tr>
														<tr>
															<td>男子 走高跳</td>
															<td>第5位</td>
														 </tr>
														<tr>
															<td>男子 棒高跳</td>
															<td>第3位</td>
														 </tr>
														<tr>
															<td>女子 走高跳</td>
															<td>第5位</td>
														 </tr>
														<tr>
															<td rowspan="4">第65回中国五県陸上競技対抗選手権大会</td>
															<td rowspan="4">岡山</td>
															<td>男子 4x100mR</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>男子 走高跳</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>男子 棒高跳</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>女子 走高跳</td>
															<td>出場</td>
														 </tr>
                                                        
                                                        <!-- 2010  -->
														<tr>
															<td rowspan="13">2010年<br />（平成22年）</td>
															<td rowspan="7">第37回山口県陸上競技選手権大会</td>
															<td rowspan="7">下関</td>
															<td>男子 200m</td>
															<td>第4位</td>
														 </tr>
														<tr>
															<td>男子 4x400mR</td>
															<td>第6位</td>
														 </tr>
														<tr>
															<td>男子 棒高跳</td>
															<td>第5位</td>
														 </tr>
														<tr>
															<td>女子 100mH</td>
															<td>第8位</td>
														 </tr>
														<tr>
															<td>女子 4x100mR</td>
															<td>第8位</td>
														 </tr>
														<tr>
															<td>女子 4x400mR</td>
															<td>第6位</td>
														 </tr>
														<tr>
															<td>女子 走高跳</td>
															<td>第4位</td>
														 </tr>
														<tr>
															<td rowspan="6">第64回中国五県陸上競技対抗選手権大会</td>
															<td rowspan="6">広島</td>
															<td>男子 4x400mR</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>男子 棒高跳</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>女子 100mH</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>女子 4x100mR</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>女子 4x400mR</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>女子 走高跳</td>
															<td>出場</td>
														 </tr>
                                                        
                                                        <!-- 2009  -->
														<tr>
															<td rowspan="14">2009年<br />（平成21年）</td>
															<td rowspan="7">第36回山口県陸上競技選手権大会</td>
															<td rowspan="7">下関</td>
															<td>男子 4x100mR</td>
															<td>第8位</td>
														 </tr>
														<tr>
															<td>男子 4x400mR</td>
															<td>第6位</td>
														 </tr>
														<tr>
															<td>男子 棒高跳</td>
															<td>第5位</td>
														 </tr>
														<tr>
															<td>男子 三段跳</td>
															<td>第6位</td>
														 </tr>
														<tr>
															<td>女子 4x400mR</td>
															<td>第7位</td>
														 </tr>
														<tr>
															<td>女子 走高跳</td>
															<td>第3位</td>
														 </tr>
														<tr>
															<td>女子 やり投</td>
															<td>第7位</td>
														 </tr>
														<tr>
															<td rowspan="7">第63回中国五県陸上競技選手権大会</td>
															<td rowspan="7">下関</td>
															<td>男子 4x100mR</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>男子 4x400mR</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>男子 棒高跳</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>男子 三段跳</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>女子 4x400mR</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>女子 走高跳</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>女子 やり投</td>
															<td>出場</td>
														 </tr>
                                                        
                                                        <!-- 2008  -->
														<tr>
															<td rowspan="16">2008年<br />（平成20年）</td>
															<td rowspan="8">第35回山口県陸上競技選手権大会</td>
															<td rowspan="8">下関</td>
															<td>男子 110mH</td>
															<td>第6位</td>
														 </tr>
														<tr>
															<td>男子 4x100mR</td>
															<td>第7位</td>
														 </tr>
														<tr>
															<td>女子 4x100mR</td>
															<td>第3位</td>
														 </tr>
														<tr>
															<td>女子 4x400mR</td>
															<td>第6位</td>
														 </tr>
														<tr>
															<td>女子 走幅跳</td>
															<td>第2位</td>
														 </tr>
														<tr>
															<td>女子 砲丸投</td>
															<td>第7位</td>
														 </tr>
														<tr>
															<td>女子 円盤投</td>
															<td>第2位</td>
														 </tr>
														<tr>
															<td>女子 やり投</td>
															<td>第4位、第5位</td>
														 </tr>
														<tr>
															<td rowspan="8">第62回中国五県陸上競技選手権大会</td>
															<td rowspan="8">広島</td>
															<td>男子 110mH</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>男子 4x100mR</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>女子 4x100mR</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>女子 4x400mR</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>女子 走幅跳</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>女子 砲丸投</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>女子 円盤投</td>
															<td>第7位</td>
														 </tr>
														<tr>
															<td>女子 やり投</td>
															<td>出場</td>
														 </tr>
                                                        
                                                        <!-- 2007  -->
														<tr>
															<td rowspan="7">2007年<br />（平成19年）</td>
															<td rowspan="5">第34回山口県陸上競技選手権大会</td>
															<td rowspan="5">山口</td>
															<td>女子 4x100mR</td>
															<td>第2位</td>
														 </tr>
														<tr>
															<td>女子 4x400mR</td>
															<td>第7位</td>
														 </tr>
														<tr>
															<td>女子 走幅跳</td>
															<td>第2位</td>
														 </tr>
														<tr>
															<td>女子 砲丸投</td>
															<td>第5位</td>
														 </tr>
														<tr>
															<td>女子 円盤投</td>
															<td>第4位</td>
														 </tr>
                                                        <tr>
															<td rowspan="2">第61回中国五県陸上競技対抗選手権大会</td>
															<td rowspan="2">島根</td>
															<td>女子 4x100mR</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>女子 走幅跳</td>
															<td>第7位</td>
														 </tr>
                                                        
                                                        <!-- 2006  -->
														<tr>
															<td rowspan="11">2006年<br />（平成18年）</td>
															<td rowspan="6">第33回山口県陸上競技選手権大会</td>
															<td rowspan="6">山口</td>
															<td>男子 走幅跳</td>
															<td>第4位</td>
														 </tr>
														<tr>
															<td>女子 100mH</td>
															<td>第6位</td>
														 </tr>
														<tr>
															<td>女子 4x100mR</td>
															<td>第5位</td>
														 </tr>
														<tr>
															<td>女子 4x400mR</td>
															<td>第7位</td>
														 </tr>
														<tr>
															<td>女子 走幅跳</td>
															<td>第5位、第6位</td>
														 </tr>
														<tr>
															<td>女子 砲丸投</td>
															<td>第5位</td>
														 </tr>
                                                        <tr>
															<td rowspan="5">第60回中国五県陸上競技対抗選手権大会</td>
															<td rowspan="5">岡山</td>
															<td>男子 走幅跳</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>女子 100mH</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>女子 4x100mR</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>女子 走幅跳</td>
															<td>2名出場</td>
														 </tr>
														<tr>
															<td>女子 砲丸投</td>
															<td>出場</td>
														 </tr>
                                                        
                                                        <!-- 2005  -->
														<tr>
															<td rowspan="6">2005年<br />（平成17年）</td>
															<td rowspan="3">第32回山口県陸上競技選手権大会</td>
															<td rowspan="3">山口</td>
															<td>男子 走幅跳</td>
															<td>第3位</td>
														 </tr>
														<tr>
															<td>女子 4x400mR</td>
															<td>第5位</td>
														 </tr>
														<tr>
															<td>女子 走幅跳</td>
															<td>第6位、第8位</td>
														 </tr>
                                                        <tr>
															<td rowspan="3">第59回中国五県陸上競技対抗選手権大会</td>
															<td rowspan="3">鳥取</td>
															<td>男子 走幅跳</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>女子 4x400mR</td>
															<td>出場</td>
														 </tr>
														<tr>
															<td>女子 走幅跳</td>
															<td>出場</td>
														 </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="desc">
                        <div class="wrap wrap-inner-960">
                            <a class="accordion">山口県体育大会陸上競技</a>
                            <div id="accordion">
                                <div class="cnt-section">
                                    <div class="cnt-wrapper">
                                        <div class="wrap result">
                                            <div class="section">
                                                <div class="cnt-wrap">
                                                    <table>
														<tr class="ora">
															<th>年</th>
															<th>大会名</th>
															<th>開催地</th>
															<th>種目</th>
															<th>結果</th>
														 </tr>
                                                        
                                                        <!-- 2015  -->
														<tr>
															<td rowspan="14">2015年<br />（平成27年）</td>
															<td rowspan="14">平成27年度山口県体育大会陸上競技</td>
															<td rowspan="14">山口</td>
															<td>男子 100m</td>
															<td>第7位</td>
														 </tr>
														<tr>
															<td>男子 200m</td>
															<td>第1位</td>
														 </tr>
														<tr>
															<td>男子 1500m</td>
															<td>第2位</td>
														 </tr>
														<tr>
															<td>男子 4x100mR</td>
															<td>第2位</td>
														 </tr>
														<tr>
															<td>男子 棒高跳</td>
															<td>第3位</td>
														 </tr>
														<tr>
															<td>男子 トラックの部</td>
															<td>第4位</td>
														 </tr>
														<tr>
															<td>男子 総合</td>
															<td>第8位</td>
														 </tr>
														<tr>
															<td>女子 100m</td>
															<td>第1位、第6位</td>
														 </tr>
														<tr>
															<td>女子 200m</td>
															<td>第6位</td>
														 </tr>
 														<tr>
															<td>女子 4x100mR</td>
															<td>第2位</td>
														 </tr>
														<tr>
															<td>女子 走高跳</td>
															<td>第2位、第4位</td>
														 </tr>
														<tr>
															<td>女子 トラックの部</td>
															<td>第6位</td>
														 </tr>
														<tr>
															<td>女子 フィールドの部</td>
															<td>第5位</td>
														 </tr>
														<tr>
															<td>女子 総合</td>
															<td>第5位</td>
														 </tr>
                                                        
                                                        <!-- 2014  -->
														<tr>
															<td rowspan="10">2014年<br />（平成26年）</td>
															<td rowspan="10">平成26年度山口県体育大会陸上競技</td>
															<td rowspan="10">山口</td>
															<td>男子 100m</td>
															<td>第4位</td>
														 </tr>
														<tr>
															<td>男子 200m</td>
															<td>第7位</td>
														 </tr>
														<tr>
															<td>男子 4x100mR</td>
															<td>第5位</td>
														 </tr>
														<tr>
															<td>男子 走高跳</td>
															<td>第2位、第6位</td>
														 </tr>
														<tr>
															<td>男子 棒高跳</td>
															<td>第3位</td>
														 </tr>
														<tr>
															<td>女子 100m</td>
															<td>第6位</td>
														 </tr>
														<tr>
															<td>女子 走高跳</td>
															<td>第6位、第7位</td>
														 </tr>
														<tr>
															<td>女子 砲丸投</td>
															<td>第8位</td>
														 </tr>
														<tr>
															<td>女子 やり投</td>
															<td>第4位、第7位</td>
														 </tr>
														<tr>
															<td>女子 フィールドの部</td>
															<td>第5位</td>
														 </tr>
                                                        
                                                        <!-- 2013  -->
														<tr>
															<td rowspan="15">2013年<br />（平成25年）</td>
															<td rowspan="15">平成25年度山口県体育大会陸上競技</td>
															<td rowspan="15">山口</td>
															<td>男子 400m</td>
															<td>第2位</td>
														 </tr>
														<tr>
															<td>男子 走高跳</td>
															<td>第2位</td>
														 </tr>
														<tr>
															<td>男子 ハンマー投</td>
															<td>第4位</td>
														 </tr>
														<tr>
															<td>女子 200m</td>
															<td>第4位</td>
														 </tr>
														<tr>
															<td>女子 400m</td>
															<td>第3位、第6位</td>
														 </tr>
														<tr>
															<td>女子 4x100mR</td>
															<td>第5位</td>
														 </tr>
														<tr>
															<td>女子 4x400mR</td>
															<td>第3位</td>
														 </tr>
														<tr>
															<td>女子 走高跳</td>
															<td>第3位</td>
														 </tr>
														<tr>
															<td>女子 走幅跳</td>
															<td>第6位</td>
														 </tr>
														<tr>
															<td>女子 砲丸投</td>
															<td>第7位</td>
														 </tr>
														<tr>
															<td>女子 円盤投</td>
															<td>第5位</td>
														 </tr>
														<tr>
															<td>女子 やり投</td>
															<td>第2位</td>
														 </tr>
														<tr>
															<td>女子 トラックの部</td>
															<td>第7位</td>
														 </tr>
														<tr>
															<td>女子 フィールドの部</td>
															<td>第3位</td>
														 </tr>
														<tr>
															<td>女子 総合</td>
															<td>第4位</td>
														 </tr>
                                                        
                                                        <!-- 2012  -->
														<tr>
															<td rowspan="20">2012年<br />（平成24年）</td>
															<td rowspan="20">平成24年度山口県体育大会陸上競技</td>
															<td rowspan="20">山口</td>
															<td>男子 800m</td>
															<td>第2位</td>
														 </tr>
														<tr>
															<td>男子 1500m</td>
															<td>第8位</td>
														 </tr>
														<tr>
															<td>男子 4x400mR</td>
															<td>第3位</td>
														 </tr>
														<tr>
															<td>男子 走高跳</td>
															<td>第3位、第4位</td>
														 </tr>
														<tr>
															<td>男子 ハンマー投</td>
															<td>第6位</td>
														 </tr>
														<tr>
															<td>男子 やり投</td>
															<td>第7位</td>
														 </tr>
														<tr>
															<td>男子 フィールドの部</td>
															<td>第7位</td>
														 </tr>
														<tr>
															<td>男子 総合</td>
															<td>第5位</td>
														 </tr>
														<tr>
															<td>女子 100m</td>
															<td>第6位</td>
														 </tr>
														<tr>
															<td>女子 200m</td>
															<td>第6位</td>
														 </tr>
														<tr>
															<td>女子 100mH</td>
															<td>第6位</td>
														 </tr>
														<tr>
															<td>女子 4x100mR</td>
															<td>第3位</td>
														 </tr>
														<tr>
															<td>女子 4x400mR</td>
															<td>第8位</td>
														 </tr>
														<tr>
															<td>女子 走高跳</td>
															<td>第6位</td>
														 </tr>
														<tr>
															<td>女子 走幅跳</td>
															<td>第4位</td>
														 </tr>
														<tr>
															<td>女子 砲丸投</td>
															<td>第7位</td>
														 </tr>
														<tr>
															<td>女子 円盤投</td>
															<td>第6位</td>
														 </tr>
														<tr>
															<td>女子 トラックの部</td>
															<td>第7位</td>
														 </tr>
														<tr>
															<td>女子 フィールドの部</td>
															<td>第7位</td>
														 </tr>
														<tr>
															<td>女子 総合</td>
															<td>第8位</td>
														 </tr>
                                                        
                                                        <!-- 2011  -->
														<tr>
															<td rowspan="7">2011年<br />（平成23年）</td>
															<td rowspan="7">平成23年度山口県体育大会陸上競技</td>
															<td rowspan="7">山口</td>
															<td>男子 100m</td>
															<td>第7位</td>
														 </tr>
														<tr>
															<td>男子 4x400mR</td>
															<td>第6位</td>
														 </tr>
														<tr>
															<td>男子 走高跳</td>
															<td>第4位</td>
														 </tr>
														<tr>
															<td>男子 棒高跳</td>
															<td>第1位</td>
														 </tr>
														<tr>
															<td>男子 走幅跳</td>
															<td>第8位</td>
														 </tr>
														<tr>
															<td>女子 ハンマー投</td>
															<td>第2位</td>
														 </tr>
														<tr>
															<td>女子 走幅跳</td>
															<td>第6位</td>
														 </tr>
                                                        
                                                        <!-- 2010  -->
														<tr>
															<td rowspan="11">2010年<br />（平成22年）</td>
															<td rowspan="11">平成22年度山口県体育大会陸上競技</td>
															<td rowspan="11">山口</td>
															<td>男子 100m</td>
															<td>第2位</td>
														 </tr>
														<tr>
															<td>男子 200m</td>
															<td>第3位</td>
														 </tr>
														<tr>
															<td>男子 4x100mR</td>
															<td>第6位</td>
														 </tr>
														<tr>
															<td>男子 4x400mR</td>
															<td>第6位</td>
														 </tr>
														<tr>
															<td>男子 走高跳</td>
															<td>第4位</td>
														 </tr>
														<tr>
															<td>男子 棒高跳</td>
															<td>第1位</td>
														 </tr>
														<tr>
															<td>男子 走幅跳</td>
															<td>第2位、第8位</td>
														 </tr>
														<tr>
															<td>男子 三段跳</td>
															<td>第5位</td>
														 </tr>
														<tr>
															<td>男子 総合</td>
															<td>第5位</td>
														 </tr>
														<tr>
															<td>女子 100m</td>
															<td>第8位</td>
														 </tr>
														<tr>
															<td>女子 走高跳</td>
															<td>第7位</td>
														 </tr>
                                                        
                                                        <!-- 2009  -->
														<tr>
															<td rowspan="14">2009年<br />（平成21年）</td>
															<td rowspan="14">平成21年度山口県体育大会陸上競技</td>
															<td rowspan="14">山口</td>
															<td>男子 100m</td>
															<td>第5位、第6位</td>
														 </tr>
														<tr>
															<td>男子 200m</td>
															<td>第4位</td>
														 </tr>
														<tr>
															<td>男子 400m</td>
															<td>第8位</td>
														 </tr>
														<tr>
															<td>男子 4x100mR</td>
															<td>第6位</td>
														 </tr>
														<tr>
															<td>男子 4x400mR</td>
															<td>第3位</td>
														 </tr>
														<tr>
															<td>男子 走幅跳</td>
															<td>第4位</td>
														 </tr>
														<tr>
															<td>男子 三段跳</td>
															<td>第2位、第6位</td>
														 </tr>
														<tr>
															<td>男子 総合</td>
															<td>第6位</td>
														 </tr>
														<tr>
															<td>女子 100mH</td>
															<td>第6位</td>
														 </tr>
														<tr>
															<td>女子 4x100mR</td>
															<td>第4位</td>
														 </tr>
														<tr>
															<td>女子 4x400mR</td>
															<td>第4位</td>
														 </tr>
														<tr>
															<td>女子 走高跳</td>
															<td>第2位</td>
														 </tr>
														<tr>
															<td>女子 やり投</td>
															<td>第6位</td>
														 </tr>
														<tr>
															<td>女子 総合</td>
															<td>第8位</td>
														 </tr>
                                                        
                                                        <!-- 2008  -->
														<tr>
															<td rowspan="12">2008年<br />（平成20年）</td>
															<td rowspan="12">平成20年度山口県体育大会陸上競技</td>
															<td rowspan="12">山口</td>
															<td>男子 100m</td>
															<td>第4位、第5位</td>
														 </tr>
														<tr>
															<td>男子 200m</td>
															<td>第7位</td>
														 </tr>
														<tr>
															<td>男子 110mH</td>
															<td>第1位</td>
														 </tr>
														<tr>
															<td>男子 4x100mR</td>
															<td>第2位</td>
														 </tr>
														<tr>
															<td>女子 100mH</td>
															<td>第7位</td>
														 </tr>
														<tr>
															<td>女子 4x100mR</td>
															<td>第2位</td>
														 </tr>
														<tr>
															<td>女子 4x400mR</td>
															<td>第4位</td>
														 </tr>
														<tr>
															<td>女子 走幅跳</td>
															<td>第1位、第8位</td>
														 </tr>
														<tr>
															<td>女子 砲丸投</td>
															<td>第1位</td>
														 </tr>
														<tr>
															<td>女子 円盤投</td>
															<td>第1位</td>
														 </tr>
														<tr>
															<td>女子 フィールドの部</td>
															<td>第1位</td>
														 </tr>
														<tr>
															<td>女子 総合</td>
															<td>第3位</td>
														 </tr>
                                                        
                                                        <!-- 2007  -->
														<tr>
															<td rowspan="15">2007年<br />（平成19年）</td>
															<td rowspan="15">平成19年度山口県高等学校選手権大会</td>
															<td rowspan="15">山口</td>
															<td>男子 110mH</td>
															<td>第4位</td>
														 </tr>
														<tr>
															<td>男子 4x100mR</td>
															<td>第8位</td>
														 </tr>
														<tr>
															<td>男子 4x400mR</td>
															<td>第5位</td>
														 </tr>
														<tr>
															<td>女子 100m</td>
															<td>第2位</td>
														 </tr>
														<tr>
															<td>女子 200m</td>
															<td>第5位、第6位</td>
														 </tr>
														<tr>
															<td>女子 100mH</td>
															<td>第7位</td>
														 </tr>
														<tr>
															<td>女子 4x100mR</td>
															<td>第1位</td>
														 </tr>
														<tr>
															<td>女子 4x400mR</td>
															<td>第5位</td>
														 </tr>
														<tr>
															<td>女子 走幅跳</td>
															<td>第3位</td>
														 </tr>
														<tr>
															<td>女子 砲丸投</td>
															<td>第2位</td>
														 </tr>
														<tr>
															<td>女子 円盤投</td>
															<td>第2位</td>
														 </tr>
														<tr>
															<td>女子 やり投</td>
															<td>第3位</td>
														 </tr>
														<tr>
															<td>女子 トラックの部</td>
															<td>第2位</td>
														 </tr>
														<tr>
															<td>女子 フィールドの部</td>
															<td>第2位</td>
														 </tr>
														<tr>
															<td>女子 総合</td>
															<td>第2位</td>
														 </tr>
                                                        
                                                        <!-- 2006  -->
														<tr>
															<td rowspan="15">2006年<br />（平成18年）</td>
															<td rowspan="15">平成18年度山口県高等学校選手権大会</td>
															<td rowspan="15">山口</td>
															<td>男子 100m</td>
															<td>第2位</td>
														 </tr>
														<tr>
															<td>男子 200m</td>
															<td>第5位</td>
														 </tr>
														<tr>
															<td>男子 4x400mR</td>
															<td>第4位</td>
														 </tr>
														<tr>
															<td>男子 走幅跳</td>
															<td>第2位</td>
														 </tr>
														<tr>
															<td>女子 100m</td>
															<td>第5位、第6位</td>
														 </tr>
														<tr>
															<td>女子 100mH</td>
															<td>第2位、第8位</td>
														 </tr>
														<tr>
															<td>女子 400mH</td>
															<td>第7位</td>
														 </tr>
														<tr>
															<td>女子 4x100mR</td>
															<td>第2位</td>
														 </tr>
														<tr>
															<td>女子 4x400mR</td>
															<td>第4位</td>
														 </tr>
														<tr>
															<td>女子 走幅跳</td>
															<td>第2位、第6位</td>
														 </tr>
														<tr>
															<td>女子 砲丸投</td>
															<td>第4位</td>
														 </tr>
														<tr>
															<td>女子 やり投</td>
															<td>第3位</td>
														 </tr>
														<tr>
															<td>女子 トラックの部</td>
															<td>第3位</td>
														 </tr>
														<tr>
															<td>女子 フィールドの部</td>
															<td>第2位</td>
														 </tr>
														<tr>
															<td>女子 総合</td>
															<td>優勝</td>
														 </tr>
                                                        
                                                        <!-- 2005  -->
														<tr>
															<td rowspan="8">2005年<br />（平成17年）</td>
															<td rowspan="8">平成17年度山口県高等学校選手権大会</td>
															<td rowspan="8">山口</td>
															<td>男子 走幅跳</td>
															<td>第1位</td>
														 </tr>
														<tr>
															<td>女子 100m</td>
															<td>第6位、第7位</td>
														 </tr>
														<tr>
															<td>女子 4x100mR</td>
															<td>第4位</td>
														 </tr>
														<tr>
															<td>女子 4x400mR</td>
															<td>第3位</td>
														 </tr>
														<tr>
															<td>女子 走幅跳</td>
															<td>第3位、第4位</td>
														 </tr>
                                                        <tr>
															<td>女子 トラックの部</td>
															<td>第8位</td>
														 </tr>
														<tr>
															<td>女子 フィールドの部</td>
															<td>第6位</td>
														 </tr>
														<tr>
															<td>女子 総合</td>
															<td>第8位</td>
														 </tr>
                                                        
                                                        <!-- 2004  -->
														<tr>
															<td rowspan="2">2004年<br />（平成16年）</td>
															<td rowspan="2">平成16年度山口県高等学校選手権大会</td>
															<td rowspan="2">山口</td>
															<td>男子 走幅跳</td>
															<td>第2位</td>
														 </tr>
														<tr>
															<td>女子 4x400mR</td>
															<td>第6位</td>
														 </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="desc">
                        <div class="wrap wrap-inner-960">
                            <a class="accordion">高等学校駅伝競走大会</a>
                            <div id="accordion">
                                <div class="cnt-section">
                                    <div class="cnt-wrapper">
                                        <div class="wrap result">
                                            <div class="section">
                                                <div class="cnt-wrap">
                                                    <table>
														<tr class="ora">
															<th>年</th>
															<th>大会名</th>
															<th>開催地</th>
															<th>種目</th>
															<th>結果</th>
														 </tr>
														<tr>
															<td>2015年<br />（平成27年）</td>
															<td>男子第67回山口県高等学校駅伝競走大会</td>
															<td>阿知須</td>
															<td>駅伝</td>
															<td>第13位</td>
														 </tr>
														<tr>
															<td>2008年<br />（平成20年）</td>
															<td>女子第23回山口県高等学校駅伝競走大会</td>
															<td>阿知須</td>
															<td>駅伝</td>
															<td>第16位</td>
														 </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                
                
                
                
                <div class="button">
                    <a href="/school/club">前のページに戻る</a>
                </div>
                
            </div>
		</div>
	</div>


@endsection
