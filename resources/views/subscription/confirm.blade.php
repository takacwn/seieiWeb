@extends('layout')

@section('content')

  <div id="subscription" class="control-wrapper">
  @include('menu')
  @include('header')

  <!-- key visual  -->
    <div id="page-visual" class="wrapper">
      <div class="visual">
        <img src="{{ asset('img/pc/subscription/main.jpg') }}" width="100%" alt="">
      </div>
    </div>

<div class="wrapper">
    <div class="cnt-detail content-block">

      <div class="cnt-section">

        <div class="read">入試説明会は、以下よりお申し込みください。<br/>※ いただいた個人情報は、上記記載目的以外は使用いたしません。</div>

        <div id="form-wrapper" class="confirm">
          {{ csrf_field() }}
          <form action="" method="post">
            <input type="hidden" name="send" value="1">
            @foreach(Request::all() as $key => $value)
              <input type="hidden" name="{{ $key }}" value="{{ $value }}">
            @endforeach

            <div class="form-section">

              <div class="inputstyle">
                <div class="label">
                  <h3 class="h3">・生徒の方のお名前 <span class="require">必須</span></h3>
                </div>
                <div class="value-box">
                  <div class="value-wrapper">{{ Request::get('lastname') }} {{ Request::input('firstname') }} </div>
                </div>
              </div>

              <div class="inputstyle">
                <div class="label">
                  <h3 class="h3">・保護者の方のお名前 <span class="require">必須</span></h3>
                </div>
                <div class="value-box">
                  <div class="value-wrapper">{{ Request::get('parentlastname') }} {{ Request::input('parentfirstname') }} </div>
                </div>
              </div>

              <div class="inputstyle">
                <div class="label">
                  <h3 class="h3">・所属、学校 <span class="require">必須</span></h3>
                </div>
                <div class="value-box">
                  <div class="value-wrapper">{{ Request::get('school') }} </div>
                </div>
              </div>

              <div class="inputstyle">
                <div class="label">
                  <h3 class="h3">・メールアドレス <span class="require">必須</span></h3>
                </div>
                <div class="value-box">
                  <div class="value-wrapper">
                    <p class="box">{{  Request::get('email') }}</p>
                  </div>
                </div>
              </div>

              <div class="inputstyle">
                <div class="label">
                  <h3 class="h3">・参加者数 <span class="require">必須</span></h3>
                </div>
                <div class="value-box">
                  <div class="value-wrapper">
                    <p class="box">{{  Request::get('join_num') }}人</p>
                  </div>
                </div>
              </div>

              <div class="inputstyle">
                <div class="label">
                  <h3 class="h3">・参加エリア <span class="require">必須</span></h3>
                </div>
                <div class="value-box">
                  <div class="value-wrapper">
                    <p class="box">{{  Request::get('join_area') }}</p>
                  </div>
                </div>
              </div>


            </div>

            <div class="buttons">
              <p><button class="button ora">送信する</button></p>
              <p class="button last"><a href="#" onclick="history.back();">修正する</a></p>
            </div>

          </form>

        </div>


      </div>

    </div>
  </div>
</div>

@endsection
