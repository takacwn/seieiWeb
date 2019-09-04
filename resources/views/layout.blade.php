<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>誠英高等学校</title>
  <meta property="og:image" content="{{ asset('img/ogimage.jpg') }}">
  <link rel="stylesheet" href="/css/app.css">
  <meta name="format-detection" content="telephone=no">
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-81371417-1', 'auto');
    ga('send', 'pageview');

  </script>

  <script src="https://sdk.push7.jp/v2/p7sdk.js"></script>
  <script>
  p7.init("9d1fdf616afa40019a12f722299a3f53");
  </script>

</head>
<body>

<div id="content" class="{{ $top or '' }}" style="opacity:1;">

  @include('menu_sp')

  @yield('content')

  <div id="footer" class="wrapper">
    <p class="btnback"><img src="{{ asset('img/pc/btnback.png') }}" alt=""></p>
    <div class="content-block">

      <ul class="ul">
        <li class="li shokuin"><a href="/recruit">教職員採用</a></li>
        <li class="li shiryou"><a href="/download/">資料請求・各種証明書発行</a></li>
        <!--li class="li privacy"><a href="">個人情報保護方針</a></li-->
        <li class="li ijime"><a href="/ijime-prevent/">いじめ防止基本方針</a></li>
        <li class="li contact"><a href="/contact/" class="button">お問い合わせ</a></li>
        <li class="li access"><a href="/access/" class="button">アクセス</a></li>
        <li class="li"><div class="p7button" data-button-text="push通知 on / off"></li>
      </ul>

      <div class="info">
        <p class="seiei"><img src="{{ asset('img/pc/footer_seiei.png') }}" alt=""></p>
        @if(isset($tushin))
          <p class="text">お気軽にお問い合わせください。TEL 0835-38-6161（通信制）<br/>受付時間 8：20～17：00（火～金）／8：20～12：00（土・日）※スクーリング開校日のみ</p>
        @else
        <p class="text">お気軽にお問い合わせください。<br/>TEL 0835-38-5252　受付時間 8:00〜17:00（土・日・祝日除く）</p>
        @endif

        {{-- <p class="sns"> --}}
          {{-- <a href="" class="facebook"><img src="{{ asset('img/pc/facebook.png') }}" alt=""></a> --}}
          {{-- <a href="" class="twitter"><img src="{{ asset('img/pc/twitter.png' )}}" alt=""></a> --}}
        {{-- </p> --}}
      </div>

      <p class="copyright"><img src="{{ asset('img/pc/copyright.png') }}" alt=""></p>

    </div>
  </div>
</div>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAcF5ysmZzT1XsjAI63EpWTHig0HMeFnUY&callback=initMap">
</script>
<script src="/js/slick.min.js"></script>
<script src="/js/easing.js"></script>
<script src="/js/app.js"></script>

</body>
</html>
