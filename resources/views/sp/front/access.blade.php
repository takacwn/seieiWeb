@extends('layout')

@section('content')

  <div id="front" class="control-wrapper access">
  @include('menu')
  @include('header')

  <!-- key visual  -->
    <div id="page-visual">
      <img src="{{ asset('img/sp/front/access/main.jpg') }}" width="100%" alt="">
    </div>

    <div id="page-name">
      <div class="inner">
        <p class="icon-title">アクセス</p>
      </div>
      <p class="middle-line"></p>
    </div>


    <div class="wrapper">

      <div id="map">

        <div class="cnt-detail content-block">


          <div class="cnt-section">

            <h3 class="title">アクセス</h3>

            <p class="middle-line small no"></p>

            <!-- subject  -->
            <div class="subject">
              <p>
                〒747-0813<br/>
                山口県防府市東三田尻一丁目2番14号<br/>
                全日制／TEL 0835-38-5252<br/>
                通信制／TEL 0835-38-6161<br/>
                <br/>
                誠英高校は防府駅に近く（徒歩約10分）通学にも大変便利です。<br/>
                もちろん自転車通学もOK!
              </p>
              <div class="apply">
                <img src="{{ asset('img/pc/front/access/01.png') }}" width="100%" alt=""/>
              </div>
            </div>
            <!-- end subject  -->

          </div>

        </div>

      </div>

    </div>

    <div id="googlemap-wrapper">
      <div id="googlemap-side-wrapper">
        <div id="googlemap"></div>
      </div>
    </div>


  </div>
@endsection
