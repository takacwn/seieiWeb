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

        @if($error)
          <div class="error">
            @foreach($error as $e)
              {{ $e }}<br/>
            @endforeach
          </div>
        @endif

        <div id="form-wrapper">

          <form action="" method="post">
            {{ csrf_field() }}
            <div class="form-section">

              <div class="inputstyle">
                <div class="label">
                  <h3 class="h3">・生徒の方のお名前 <span class="require">必須</span></h3>
                </div>
                <div class="value-box">
                  <div class="value-wrapper">
                    <input type="text" name="lastname" class="input middle m10" placeholder="姓" value="{{ Request::get('lastname') }}">
                    <input type="text" name="firstname" class="input middle" placeholder="名" value="{{ Request::get('firstname') }}">
                  </div>
                </div>
              </div>

              <div class="inputstyle">
                <div class="label">
                  <h3 class="h3">・保護者の方のお名前 <span class="require">必須</span></h3>
                </div>
                <div class="value-box">
                  <div class="value-wrapper">
                    <input type="text" name="parentlastname" class="input middle m10" placeholder="姓" value="{{ Request::get('parentlastname') }}">
                    <input type="text" name="parentfirstname" class="input middle" placeholder="名" value="{{ Request::get('parentfirstname') }}">
                  </div>
                </div>
              </div>

              <div class="inputstyle">
                <div class="label">
                  <h3 class="h3">・所属、学校 <span class="require">必須</span></h3>
                </div>
                <div class="value-box">
                  <div class="value-wrapper">
                    <input type="text" name="school" class="input" placeholder="例）中学校名" value="{{ Request::get('school') }}">
                  </div>
                </div>
              </div>

              <div class="inputstyle">
                <div class="label">
                  <h3 class="h3">・メールアドレス <span class="require">必須</span></h3>
                </div>
                <div class="value-box">
                  <div class="value-wrapper">
                    <p class="box"><input type="text" name="email" class="input" value="{{ Request::get('email') }}"></p>
                    <p class="box"><input type="text" name="email_confirmation" class="input" placeholder="確認のためもう一度入力ください。" value="{{  Request::get('email_confirmation') }}"></p>
                  </div>
                </div>
              </div>



              <div class="inputstyle">
                <div class="label">
                  <h3 class="h3">・参加人数 <span class="require">必須</span></h3>
                </div>
                    <p class="select-num">
                      <select name="join_num" id="">
                        @foreach(range(1, 5) as $i)
                          <option value="{{ $i }}" @if($i == Request::get('join_num')) selected="selected" @endif>{{ $i }}人</option>
                        @endforeach
                      </select>
                    </p>
              </div>


              <div class="inputstyle">
                <div class="label">
                  <h3 class="h3">・参加エリア <span class="require">必須</span></h3>
                </div>
                <div class="value-box">
                    <div class="select-block">
                      <select name="join_area" id="">
                        <option value="">選択してください</option>
                          <option value="防府エリア(2018年11月3日)" @if(Request::get('join_area') == '防府エリア(2018年11月3日)') @endif>防府エリア(2018年11月3日)</option>
                          <option value="周南エリア(2018年10月20日)" @if(Request::get('join_area') == '周南エリア(2018年10月20日)') @endif>周南エリア(2018年10月20日)</option>
                          <option value="山口エリア(2018年11月17日)" @if(Request::get('join_area') == '山口エリア(2018年11月17日)') @endif>山口エリア(2018年11月17日)</option>
                      </select>
                    </div>
                  </div>
              </div>



            </div>

            <div class="buttons">
              <p><button class="button ora">送信内容を確認</button></p>
              <p class="button last"><a href="{{ url('/') }}">TOPページに戻る</a></p>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>

</div>
@endsection
