@extends('layout')

@section('content')

  <div id="school" class="control-wrapper club-info">
  @include('menu')
  @include('header')


  <!-- key visual  -->
    <div id="page-visual">
      <div class="visual">
        <img src="{{ asset('img/sp/school/club/trackfield/main.jpg') }}" width="100%" alt="">
      </div>
    </div>
    <!-- end key visual -->


    <div id="page-name">
      <div class="inner">
        <p><img src="{{ asset('img/pc/school/icon.png') }}" width="40" alt=""></p>
        <p class="icon-title"><span>学校生活</span><br/>クラブ活動／陸上競技部</p>
      </div>
      <p class="middle-line"></p>
    </div>

    <div class="wrapper">
        <div class="cnt-detail content-block">
            
            <p class="txt">
                陸上部の活動は主に走ることですが、それ以外にも、ハードル補強や、もも上げ、そしてBCTと言われる体幹を鍛えるエクササイズ…といったメニューも組み込まれています。<br />
                陸上は基本的に個人種目。ですが、走ることが好きで集まった仲間どうし、刺激を与え合いながら、日々部活に打ち込んでいます。<br />
                思うように記録が伸びなくてつらい時期もありましたが、先輩たちに明るく励まされながら、練習を続けてきました。その結果、記録が伸びた時はこれまでにない達成感を得ることができました。<br /><br />
                一度その達成感を味わうと、毎日の練習もますます楽しくなりました。明るく元気で楽しい陸上部で、いっしょに汗を流しましょう。
            </p>
            
            <div class="slider-wrapper">
                <div class="al"><img src="{{ asset('img/sp/top/arrow-left.png') }}" width="20" alt=""></div>
                <div class="ar"><img src="{{ asset('img/sp/top/arrow-right.png') }}" width="20" alt=""></div>
                <div class="inner wrapper">
                    <div class="sul">
                        <div class="sli"><p class="vs"><img src="{{ asset('img/pc/school/club/trackfield/photo_01.jpg') }}" alt=""></p></div>
                        <div class="sli"><p class="vs"><img src="{{ asset('img/pc/school/club/trackfield/photo_02.jpg') }}" alt=""></p></div>
                        <div class="sli"><p class="vs"><img src="{{ asset('img/pc/school/club/trackfield/photo_03.jpg') }}" alt=""></p></div>
                    </div>
                </div>
            </div>
            
            <h3 class="title">活動実績</h3>
            <p class="middle-line small m15"></p>
            
            <div class="desc">
                <div class="wrap wrap-inner-box">
                    <a class="accordion">全国高等学校総合体育大会（インターハイ）</a>
                    <div id="accordion">
                        <div class="content-block">
                            <div class="cnt-wrapper">
                                <div class="cnt-wrap">
                                    <table>
										<tr class="ora">
											<td colspan="2">2016年（平成28年）</td>
										</tr>
										<tr class="light-ora">
											<td colspan="2">第67回山口県高等学校総合体育大会 陸上競技（山口）</td>
										</tr>
										<tr>
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
										<tr class="light-ora">
											<td colspan="2">第69回中国高等学校陸上競技対校選手権大会（岡山）</td>
										</tr>
										<tr>
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
              
										<tr class="ora">
											<td colspan="2">2015年（平成27年）</td>
										</tr>
										<tr class="light-ora">
											<td colspan="2">第66回山口県高等学校総合体育大会 陸上競技（山口）</td>
										</tr>
										<tr>
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
										<tr class="light-ora">
											<td colspan="2">第68回中国高等学校陸上競技対校選手権大会（出雲）</td>
										</tr>
										<tr>
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
              
										<tr class="ora">
											<td colspan="2">2014年（平成26年）</td>
										</tr>
										<tr class="light-ora">
											<td colspan="2">第65回山口県高等学校総合体育大会 陸上競技（山口）</td>
										</tr>
										<tr>
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
										<tr class="light-ora">
											<td colspan="2">第67回中国高等学校陸上競技対校選手権大会（鳥取）</td>
										</tr>
										<tr>
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
              
										<tr class="ora">
											<td colspan="2">2013年（平成25年）</td>
										</tr>
										<tr class="light-ora">
											<td colspan="2">第64回山口県高等学校総合体育大会 陸上競技（山口）</td>
										</tr>
										<tr>
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
										<tr class="light-ora">
											<td colspan="2">第66回中国高等学校陸上競技対校選手権大会（岡山）</td>
										</tr>
										<tr>
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
              
										<tr class="ora">
											<td colspan="2">2012年（平成24年）</td>
										</tr>
										<tr class="light-ora">
											<td colspan="2">第63回山口県高等学校総合体育大会 陸上競技（山口）</td>
										</tr>
										<tr>
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
										<tr class="light-ora">
											<td colspan="2">第65回中国高等学校陸上競技対校選手権大会（広島）</td>
										</tr>
										<tr>
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
              
										<tr class="ora">
											<td colspan="2">2011年（平成23年）</td>
										</tr>
										<tr class="light-ora">
											<td colspan="2">第62回山口県高等学校総合体育大会 陸上競技（山口）</td>
										</tr>
										<tr>
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
										<tr class="light-ora">
											<td colspan="2">第64回中国高等学校陸上競技対校選手権大会（山口）</td>
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
              
										<tr class="ora">
											<td colspan="2">2010年（平成22年）</td>
										</tr>
										<tr class="light-ora">
											<td colspan="2">第61回山口県高等学校総合体育大会 陸上競技（下関）</td>
										</tr>
										<tr>
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
										<tr class="light-ora">
											<td colspan="2">第63回中国高等学校陸上競技対校選手権大会（鳥取）</td>
										</tr>
										<tr>
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
              
										<tr class="ora">
											<td colspan="2">2009年（平成21年）</td>
										</tr>
										<tr class="light-ora">
											<td colspan="2">第60回山口県高等学校総合体育大会 陸上競技（下関）</td>
										</tr>
										<tr>
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
										<tr class="light-ora">
											<td colspan="2">第62回中国高等学校陸上競技対校選手権大会（出雲）</td>
										</tr>
										<tr>
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
              
										<tr class="ora">
											<td colspan="2">2008年（平成20年）</td>
										</tr>
										<tr class="light-ora">
											<td colspan="2">第59回山口県高等学校総合体育大会 陸上競技（下関）</td>
										</tr>
										<tr>
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
										<tr class="light-ora">
											<td colspan="2">第61回中国高等学校陸上競技対校選手権大会（岡山）</td>
										</tr>
										<tr>
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
										<tr class="light-ora">
											<td colspan="2">平成20年度全国高等学校総合体育大会（埼玉）</td>
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
											<td>出場</td>
										</tr>
										<tr>
											<td>女子 やり投</td>
											<td>出場</td>
										</tr>
              
										<tr class="ora">
											<td colspan="2">2007年（平成19年）</td>
										</tr>
										<tr class="light-ora">
											<td colspan="2">第58回山口県高等学校総合体育大会 陸上競技（山口）</td>
										</tr>
										<tr>
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
										<tr class="light-ora">
											<td colspan="2">第60回中国高等学校陸上競技対校選手権大会（広島）</td>
										</tr>
										<tr>
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
										<tr class="light-ora">
											<td colspan="2">平成19年度全国高等学校総合体育大会（佐賀）</td>
										</tr>
										<tr>
											<td>女子 円盤投</td>
											<td>出場</td>
										</tr>
              
										<tr class="ora">
											<td colspan="2">2006年（平成18年）</td>
										</tr>
										<tr class="light-ora">
											<td colspan="2">第57回山口県高等学校総合体育大会 陸上競技（山口）</td>
										</tr>
										<tr>
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
              
										<tr class="light-ora">
											<td colspan="2">第59回中国高等学校陸上競技対校選手権大会（山口）</td>
										</tr>
										<tr>
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
              
										<tr class="ora">
											<td colspan="2">2005年（平成17年）</td>
										</tr>
										<tr class="light-ora">
											<td colspan="2">第56回山口県高等学校総合体育大会 陸上競技（山口）</td>
										</tr>
										<tr>
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
              
										<tr class="light-ora">
											<td colspan="2">第58回中国高等学校陸上競技対校選手権大会（岡山）</td>
										</tr>
										<tr>
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
              
										<tr class="light-ora">
											<td colspan="2">平成17年度全国高等学校総合体育大会（千葉）</td>
										</tr>
										<tr>
											<td>男子 走幅跳</td>
											<td>出場</td>
										</tr>
              
										<tr class="ora">
											<td colspan="2">2004年（平成16年）</td>
										</tr>
										<tr class="light-ora">
											<td colspan="2">第55回山口県高等学校総合体育大会 陸上競技（山口）</td>
										</tr>
										<tr>
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
              
										<tr class="light-ora">
											<td colspan="2">第57回中国高等学校陸上競技対校選手権大会（出雲）</td>
										</tr>
										<tr>
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
            
            <div class="desc">
                <div class="wrap wrap-inner-box">
                    <a class="accordion">国民体育大会</a>
                    <div id="accordion">
                        <div class="content-block">
                            <div class="cnt-wrapper">
                                <div class="cnt-wrap">
                                    <table>
              
										<tr class="ora">
											<td colspan="2">2015年（平成27年）</td>
										</tr>
										<tr class="light-ora">
											<td colspan="2">第70回国民体育大会（和歌山）</td>
										</tr>
										<tr>
											<td>少年男子B 100ｍ</td>
											<td>出場</td>
										</tr>
										<tr class="ora">
											<td colspan="2">2008年（平成20年）</td>
										</tr>
										<tr class="light-ora">
											<td colspan="2">第63回国民体育大会（大分）</td>
										</tr>
										<tr>
											<td>少年女子A 円盤投</td>
											<td>第12位</td>
										</tr>
										<tr class="ora">
											<td colspan="2">2007年（平成19年）</td>
										</tr>
										<tr class="light-ora">
											<td colspan="2">第62回国民体育大会（秋田）</td>
										</tr>
										<tr>
											<td>少年女子A 円盤投</td>
											<td>出場</td>
										</tr>
										<tr class="ora">
											<td colspan="2">2006年（平成18年）</td>
										</tr>
										<tr class="light-ora">
											<td colspan="2">第61回国民体育大会（兵庫）</td>
										</tr>
										<tr>
											<td>少年女子B 走幅跳</td>
											<td>第11位</td>
										</tr>
										<tr class="ora">
											<td colspan="2">2004年（平成16年）</td>
										</tr>
										<tr class="light-ora">
											<td colspan="2">第59回国民体育大会（埼玉）</td>
										</tr>
										<tr>
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

            <div class="desc">
                <div class="wrap wrap-inner-box">
                    <a class="accordion">高等学校新人陸上競技大会</a>
                    <div id="accordion">
                        <div class="content-block">
                            <div class="cnt-wrapper">
                                <div class="cnt-wrap">
                                    <table>
										<tr class="ora">
											<td colspan="2">2016年（平成28年）</td>
										</tr>
										<tr class="light-ora">
											<td colspan="2">第61回山口県高等学校新人陸上競技大会（下関）</td>
										</tr>
										<tr>
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
										<tr class="light-ora">
											<td colspan="2">第25回中国高等学校新人陸上競技対校選手権大会（出雲）</td>
										</tr>
										<tr>
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
              
										<tr class="ora">
											<td colspan="2">2015年（平成27年）</td>
										</tr>
										<tr class="light-ora">
											<td colspan="2">第60回山口県高等学校新人陸上競技大会（下関）</td>
										</tr>
										<tr>
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
										<tr class="light-ora">
											<td colspan="2">第24回中国高等学校新人陸上競技対校選手権大会（米子）</td>
										</tr>
										<tr>
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
              
										<tr class="ora">
											<td colspan="2">2014年（平成26年）</td>
										</tr>
										<tr class="light-ora">
											<td colspan="2">第59回山口県高等学校新人陸上競技大会（下関）</td>
										</tr>
										<tr>
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
										<tr class="light-ora">
											<td colspan="2">第23回中国高等学校新人陸上競技対校選手権大会（岡山）</td>
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
              
										<tr class="ora">
											<td colspan="2">2013年（平成25年）</td>
										</tr>
										<tr class="light-ora">
											<td colspan="2">第58回山口県高等学校新人陸上競技大会（下関）</td>
										</tr>
										<tr>
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
										<tr class="light-ora">
											<td colspan="2">第22回中国高等学校新人陸上競技対校選手権大会（広島）</td>
										</tr>
										<tr>
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
              
										<tr class="ora">
											<td colspan="2">2012年（平成24年）</td>
										</tr>
										<tr class="light-ora">
											<td colspan="2">第57回山口県高等学校新人陸上競技大会（下関）</td>
										</tr>
										<tr>
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
										<tr class="light-ora">
											<td colspan="2">第21回中国高等学校新人陸上競技対校選手権大会（山口）</td>
										</tr>
										<tr>
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
              
										<tr class="ora">
											<td colspan="2">2011年（平成23年）</td>
										</tr>
										<tr class="light-ora">
											<td colspan="2">第56回山口県高等学校新人陸上競技大会（下関）</td>
										</tr>
										<tr>
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
											<td>女子 走高跳</td>
											<td>第8位</td>
										</tr>
										<tr>
											<td>女子 走幅跳</td>
											<td>第8位</td>
										</tr>
										<tr class="light-ora">
											<td colspan="2">第20回中国高等学校新人陸上競技対校選手権大会（出雲）</td>
										</tr>
										<tr>
											<td>男子 走幅跳</td>
											<td>出場</td>
										</tr>
              
										<tr class="ora">
											<td colspan="2">2010年（平成22年）</td>
										</tr>
										<tr class="light-ora">
											<td colspan="2">第55回山口県高等学校新人陸上競技大会（下関）</td>
										</tr>
										<tr>
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
										<tr class="light-ora">
											<td colspan="2">第19回中国高等学校新人陸上競技対校選手権大会（鳥取）</td>
										</tr>
										<tr>
											<td>男子 棒高跳</td>
											<td>出場</td>
										</tr>
										<tr>
											<td>男子 ハンマー投</td>
											<td>出場</td>
										</tr>
              
										<tr class="ora">
											<td colspan="2">2009年（平成21年）</td>
										</tr>
										<tr class="light-ora">
											<td colspan="2">第54回山口県高等学校新人陸上競技大会（下関）</td>
										</tr>
										<tr>
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
										<tr class="light-ora">
											<td colspan="2">第18回中国高等学校新人陸上競技対校選手権大会（岡山）</td>
										</tr>
										<tr>
											<td>男子 200m</td>
											<td>第8位</td>
										</tr>
              
										<tr class="ora">
											<td colspan="2">2008年（平成20年）</td>
										</tr>
										<tr class="light-ora">
											<td colspan="2">第53回山口県高等学校新人陸上競技大会（下関）</td>
										</tr>
										<tr>
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
										<tr class="light-ora">
											<td colspan="2">第17回中国高等学校新人陸上競技対校選手権大会（広島）</td>
										</tr>
										<tr>
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
              
										<tr class="ora">
											<td colspan="2">2007年（平成19年）</td>
										</tr>
										<tr class="light-ora">
											<td colspan="2">平成19年度山口県体育大会陸上競技（下関）</td>
										</tr>
										<tr>
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
										<tr class="light-ora">
											<td colspan="2">第16回中国高等学校新人陸上競技対校選手権大会（下関）</td>
										</tr>
										<tr>
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
              
										<tr class="ora">
											<td colspan="2">2006年（平成18年）</td>
										</tr>
										<tr class="light-ora">
											<td colspan="2">平成18年度山口県体育大会陸上競技（下関）</td>
										</tr>
										<tr>
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
										<tr class="light-ora">
											<td colspan="2">第15回中国高等学校新人陸上競技対校選手権大会（出雲）</td>
										</tr>
										<tr>
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
              
										<tr class="ora">
											<td colspan="2">2005年（平成17年）</td>
										</tr>
										<tr class="light-ora">
											<td colspan="2">平成17年度山口県体育大会陸上競技（下関）</td>
										</tr>
										<tr>
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
										<tr class="light-ora">
											<td colspan="2">第14回中国高等学校新人陸上競技対校選手権大会（米子）</td>
										</tr>
										<tr>
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
              
										<tr class="ora">
											<td colspan="2">2004年（平成16年）</td>
										</tr>
										<tr class="light-ora">
											<td colspan="2">平成16年度山口県体育大会陸上競技（下関）</td>
										</tr>
										<tr>
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
										<tr class="light-ora">
											<td colspan="2">第13回中国高等学校新人陸上競技対校選手権大会（津山）</td>
										</tr>
										<tr>
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
            
            <div class="desc">
                <div class="wrap wrap-inner-box">
                    <a class="accordion">山口県陸上競技選手権大会・中国五県陸上競技対抗選手権大会</a>
                    <div id="accordion">
                        <div class="content-block">
                            <div class="cnt-wrapper">
                                <div class="cnt-wrap">
                                    <table>
										<tr class="ora">
											<td colspan="2">2016年（平成28年）</td>
										</tr>
										<tr class="light-ora">
											<td colspan="2">第43回山口県陸上競技選手権大会（山口）</td>
										</tr>
										<tr>
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
										<tr class="light-ora">
											<td colspan="2">第70回中国五県陸上競技対抗選手権大会（岡山）</td>
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
											<td>出場</td>
										</tr>
              
										<tr class="ora">
											<td colspan="2">2015年（平成27年）</td>
										</tr>
										<tr class="light-ora">
											<td colspan="2">第42回山口県陸上競技選手権大会（山口）</td>
										</tr>
										<tr>
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
										<tr class="light-ora">
											<td colspan="2">第69回中国五県陸上競技対抗選手権大会（広島）</td>
										</tr>
										<tr>
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
              
										<tr class="ora">
											<td colspan="2">2014年（平成26年）</td>
										</tr>
										<tr class="light-ora">
											<td colspan="2">第41回山口県陸上競技選手権大会（山口）</td>
										</tr>
										<tr>
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
										<tr class="light-ora">
											<td colspan="2">第68回中国五県陸上競技対抗選手権大会（山口）</td>
										</tr>
										<tr>
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
              
										<tr class="ora">
											<td colspan="2">2013年（平成25年）</td>
										</tr>
										<tr class="light-ora">
											<td colspan="2">第40回山口県陸上競技選手権大会（山口）</td>
										</tr>
										<tr>
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
										<tr class="light-ora">
											<td colspan="2">第67回中国五県陸上競技対抗選手権大会（島根）</td>
										</tr>
										<tr>
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
              
										<tr class="ora">
											<td colspan="2">2012年（平成24年）</td>
										</tr>
										<tr class="light-ora">
											<td colspan="2">第39回山口県陸上競技選手権大会（山口）</td>
										</tr>
										<tr>
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
										<tr class="light-ora">
											<td colspan="2">第66回中国五県陸上競技対抗選手権大会（島根）</td>
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
											<td>男子 ハンマー投</td>
											<td>出場</td>
										</tr>
										<tr>
											<td>女子 4x100mR</td>
											<td>出場</td>
										</tr>
              
										<tr class="ora">
											<td colspan="2">2011年（平成23年）</td>
										</tr>
										<tr class="light-ora">
											<td colspan="2">第38回山口県陸上競技選手権大会（山口）</td>
										</tr>
										<tr>
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
										<tr class="light-ora">
											<td colspan="2">第65回中国五県陸上競技対抗選手権大会（岡山）</td>
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
											<td>女子 走高跳</td>
											<td>出場</td>
										</tr>
              
										<tr class="ora">
											<td colspan="2">2010年（平成22年）</td>
										</tr>
										<tr class="light-ora">
											<td colspan="2">第37回山口県陸上競技選手権大会（下関）</td>
										</tr>
										<tr>
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
										<tr class="light-ora">
											<td colspan="2">第64回中国五県陸上競技対抗選手権大会（広島）</td>
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
              
										<tr class="ora">
											<td colspan="2">2009年（平成21年）</td>
										</tr>
										<tr class="light-ora">
											<td colspan="2">第36回山口県陸上競技選手権大会（下関）</td>
										</tr>
										<tr>
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
										<tr class="light-ora">
											<td colspan="2">第63回中国五県陸上競技対抗選手権大会（下関）</td>
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
              
										<tr class="ora">
											<td colspan="2">2008年（平成20年）</td>
										</tr>
										<tr class="light-ora">
											<td colspan="2">第35回山口県陸上競技選手権大会（下関）</td>
										</tr>
										<tr>
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
										<tr class="light-ora">
											<td colspan="2">第62回中国五県陸上競技対抗選手権大会（広島）</td>
										</tr>
										<tr>
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
              
										<tr class="ora">
											<td colspan="2">2007年（平成19年）</td>
										</tr>
										<tr class="light-ora">
											<td colspan="2">第34回山口県陸上競技選手権大会（山口）</td>
										</tr>
										<tr>
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
										<tr class="light-ora">
											<td colspan="2">第61回中国五県陸上競技対抗選手権大会（島根）</td>
										</tr>
										<tr>
											<td>女子 4x100mR</td>
											<td>出場</td>
										</tr>
										<tr>
											<td>女子 走幅跳</td>
											<td>第7位</td>
										</tr>
              
										<tr class="ora">
											<td colspan="2">2006年（平成18年）</td>
										</tr>
										<tr class="light-ora">
											<td colspan="2">第33回山口県陸上競技選手権大会（山口）</td>
										</tr>
										<tr>
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
										<tr class="light-ora">
											<td colspan="2">第60回中国五県陸上競技対抗選手権大会（岡山）</td>
										</tr>
										<tr>
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
              
										<tr class="ora">
											<td colspan="2">2005年（平成17年）</td>
										</tr>
										<tr class="light-ora">
											<td colspan="2">第32回山口県陸上競技選手権大会（山口）</td>
										</tr>
										<tr>
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
										<tr class="light-ora">
											<td colspan="2">第59回中国五県陸上競技対抗選手権大会（鳥取）</td>
										</tr>
										<tr>
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
            
            <div class="desc">
                <div class="wrap wrap-inner-box">
                    <a class="accordion">山口県体育大会陸上競技</a>
                    <div id="accordion">
                        <div class="content-block">
                            <div class="cnt-wrapper">
                                <div class="cnt-wrap">
                                    <table>
										<tr class="ora">
											<td colspan="2">2015年（平成27年）</td>
										</tr>
										<tr class="light-ora">
											<td colspan="2">平成27年度山口県体育大会陸上競技（山口）</td>
										</tr>
										<tr>
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
              
										<tr class="ora">
											<td colspan="2">2014年（平成26年）</td>
										</tr>
										<tr class="light-ora">
											<td colspan="2">平成26年度山口県体育大会陸上競技（山口）</td>
										</tr>
										<tr>
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
              
										<tr class="ora">
											<td colspan="2">2013年（平成25年）</td>
										</tr>
										<tr class="light-ora">
											<td colspan="2">平成25年度山口県体育大会陸上競技（山口）</td>
										</tr>
										<tr>
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
              
										<tr class="ora">
											<td colspan="2">2012年（平成24年）</td>
										</tr>
										<tr class="light-ora">
											<td colspan="2">平成24年度山口県体育大会陸上競技（山口）</td>
										</tr>
										<tr>
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
              
										<tr class="ora">
											<td colspan="2">2011年（平成23年）</td>
										</tr>
										<tr class="light-ora">
											<td colspan="2">平成23年度山口県体育大会陸上競技（山口）</td>
										</tr>
										<tr>
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
              
										<tr class="ora">
											<td colspan="2">2010年（平成22年）</td>
										</tr>
										<tr class="light-ora">
											<td colspan="2">平成22年度山口県体育大会陸上競技（山口）</td>
										</tr>
										<tr>
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
              
										<tr class="ora">
											<td colspan="2">2009年（平成21年）</td>
										</tr>
										<tr class="light-ora">
											<td colspan="2">平成21年度山口県体育大会陸上競技（山口）</td>
										</tr>
										<tr>
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
              
										<tr class="ora">
											<td colspan="2">2008年（平成20年）</td>
										</tr>
										<tr class="light-ora">
											<td colspan="2">平成20年度山口県体育大会陸上競技（山口）</td>
										</tr>
										<tr>
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
              
										<tr class="ora">
											<td colspan="2">2007年（平成19年）</td>
										</tr>
										<tr class="light-ora">
											<td colspan="2">平成19年度山口県体育大会陸上競技（山口）</td>
										</tr>
										<tr>
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
              
										<tr class="ora">
											<td colspan="2">2006年（平成18年）</td>
										</tr>
										<tr class="light-ora">
											<td colspan="2">平成18年度山口県体育大会陸上競技（山口）</td>
										</tr>
										<tr>
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
              
										<tr class="ora">
											<td colspan="2">2005年（平成17年）</td>
										</tr>
										<tr class="light-ora">
											<td colspan="2">平成17年度山口県体育大会陸上競技（山口）</td>
										</tr>
										<tr>
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
              
										<tr class="ora">
											<td colspan="2">2004年（平成16年）</td>
										</tr>
										<tr class="light-ora">
											<td colspan="2">平成16年度山口県体育大会陸上競技（山口）</td>
										</tr>
										<tr>
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

            <div class="desc">
                <div class="wrap wrap-inner-box">
                    <a class="accordion">高等学校駅伝競走大会</a>
                    <div id="accordion">
                        <div class="content-block">
                            <div class="cnt-wrapper">
                                <div class="cnt-wrap">
                                    <table>
										<tr class="ora">
											<td colspan="2">2015年（平成27年）</td>
										</tr>
										<tr class="light-ora">
											<td colspan="2">男子第67回山口県高等学校駅伝競走大会（阿知須）</td>
										</tr>
										<tr>
											<td>駅伝</td>
											<td>第13位</td>
										</tr>
										<tr class="ora">
											<td colspan="2">2008年（平成20年）</td>
										</tr>
										<tr class="light-ora">
											<td colspan="2">女子第23回山口県高等学校駅伝競走大会（阿知須）</td>
										</tr>
										<tr>
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
            
            <div class="button">
                <a href="/school/club">前のページに戻る</a>
            </div>
        
        </div>
      </div>
      
      

</div>

@endsection
