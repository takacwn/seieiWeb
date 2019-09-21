@extends('layout')

@section('content')

  <div id="mail" class="control-wrapper">
  @include('menu')
  @include('header')

  <!-- key visual  -->
    <div id="page-visual" class="wrapper">
      <div class="visual">
        <img src="{{ asset('img/pc/mail/main.jpg') }}" width="100%" alt="">
      </div>
    </div>


    <div class="wrapper">
      <div class="cnt-detail content-block">

        <div class="cnt-section">

          <h3 class="title">メールマガジン登録解除</h3>

          <p class="middle-line m40"></p>

          <div class="read">
            メール配信の停止を希望する場合は、メールアドレスを入力して　【登録解除する】　をクリックしてください。
          </div>

          @if($error)
            <div class="error">
              @foreach($error as $e)
                {{ $e }}<br/>
              @endforeach
            </div>
          @endif


          <div id="form-wrapper">

            <form action="" method="post">

              <div class="form-section">


                <div class="inputstyle">
                  <div class="label">
                    <h3 class="h3">・メールアドレス <span class="require">必須</span></h3>
                  </div>
                  <div class="value-box">
                    <div class="value-wrapper">
                      <p class="box"><input type="text" name="email" class="input" value="{{ Request::get('email') }}">
                      </p>
                      <p class="box"><input type="text" name="email_confirmation" class="input"
                                            placeholder="確認のためもう一度入力ください。"
                                            value="{{  Request::get('email_confirmation') }}"></p>
                    </div>
                  </div>
                </div>

              </div>

              <div class="buttons">
                <p>
                  <button class="button ora">登録解除する</button>
                </p>
                <p class="button last"><a href="{{ url('') }}">TOPページに戻る</a></p>
              </div>
            </form>

          </div>
        </div>
      </div>

    </div>
  </div>
@endsection
