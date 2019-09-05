
@extends('layout')

@section('content')

  <div id="school" class="control-wrapper uniform">
    @include('menu')
    @include('header')

    <!-- key visual  -->
    <div id="page-visual" class="wrapper">
      <div class="visual">
        <img src="{{ asset('img/pc/school/uniform/main.jpg') }}" width="100%" alt="">
      </div>
    </div>
    <!-- end key visual -->

<div class="wrapper">
    <div class="cnt-detail content-block">


      <div class="cnt-section">

        <h3 class="title">制服紹介 〜SEIEI COLLECTION〜</h3>
        <p class="middle-line m40"></p>

        <div class="tabs">
          <div class="tab active">
            <p>冬用制服</p>
          </div>
          <div class="tab">
            <p>夏用制服</p>
          </div>
        </div>

        <div class="cnt-wrapper">
        
          <div class="uni winter cnt">
            <div class="desc">
              <h3 class="h3">誠英高等学校 冬用制服</h3>
              <p>黒のブレザー×グレーのズボン・スカートはありそうでなかなかない、人気のコーディネート。<br/>
                ネクタイのデザインやカラーは男女でそれぞれ異なりますが、並べば自然と統一性がとれています。<br/>
                ジャケットの胸もとと女子のアーバングレーのハイソックスには、SEIEIのSマークの刺繍が。<br/>
                シャツは防シワ性に優れたノーアイロンで手軽に着られます。<br/>
              </p>
            </div>
          </div>
          
          <div class="uni summer cnt" style="display:none;">
            <div class="desc">
              <h3 class="h3">誠英高等学校 夏用制服</h3>
              <p>夏服は暑い夏でも快適に過ごせる、涼やかなシャツとスラックス・スカート。<br/>
                シャツの胸もとには、Seieiの刺繍。<br/>
                防シワ性に優れたノーアイロンシャツなので手軽に着られます。<br/>
                ピンクのラインが入ったチェック柄スカートはさわやかな印象で高い人気を誇ります。
              </p>
            </div>
          </div>

        </div>

      </div>

    </div>
  </div>

</div>
@endsection
