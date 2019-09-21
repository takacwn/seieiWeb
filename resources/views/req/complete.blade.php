@extends('layout')

@section('content')

  <div id="contact" class="control-wrapper">
  @include('menu')
  @include('header')

  <!-- key visual  -->
    <div id="page-visual" class="wrapper">
      <div class="visual">
        <img src="{{ asset('img/pc/contact/main.jpg') }}" width="100%" alt="">
      </div>
    </div>

<div class="wrapper">
    <div class="cnt-detail content-block">

      <div class="cnt-section">

        <h2 class="ssub alarge">お問合わせありがとうございました。</h2>

        <div id="form-wrapper" class="complete">

          <div class="buttons">
            <p class="button ora"><a href="{{ url('') }}">TOPページに戻る</a></p>
          </div>

        </div>


      </div>

    </div>
  </div>

</div>
@endsection
