@extends('layout')

@section('content')

  <div id="about" class="control-wrapper org">
  @include('menu')
  @include('header')

  <!-- key visual  -->
    <div id="page-visual" class="wrapper">
      <div class="visual">
        <img src="{{ asset('img/pc/about/org/main.jpg') }}" width="100%" alt="">
      </div>
    </div>
<div class="wrapper">

    <div class="cnt-detail content-block">
      <div class="cnt-section">
        <h3 class="title">組織</h3>
        <p class="middle-line no"></p>
        <div class="desc">
          <img src="{{ asset('img/pc/about/org/01.png') }}" alt="">
        </div>
      </div>
    </div>
  </div>


@endsection
