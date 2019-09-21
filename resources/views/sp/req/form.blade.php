@extends('layout')

@section('content')

  <div id="contact" class="control-wrapper">
  @include('menu')
  @include('header')

  <!-- key visual  -->
    <div id="page-visual">
      <div class="visual">
        <img src="{{ asset('img/sp/req/main.jpg') }}" width="100%" alt="">
      </div>
    </div>

    <div id="page-name">
      <div class="inner">
        <p class="icon-title">資料請求</p>
      </div>
      <p class="middle-line"></p>
    </div>

    <div class="wrapper">
      <div class="cnt-detail content-block">

        <div class="cnt-section">

          <div class="read">
            誠英高等学校のことを、さらに理解していただくために、オープン・スクールや学校見学を実施しています。本校のパンフレットや入試要項などの資料請求も承っております。以下よりお申し込みください。また、本校にご興味をお持ちの方は、下記のフォーム内でメールアドレスをご登録ください。ご登録いただいた方には、本校の行事や活動についての報告や案内をメールにてお送りいたします。<br/>
            ※ パンフレットは毎年7月末、入試要項は10月中旬より、翌年度向けの情報に更新されます。<br/>
            ※ 携帯電話で迷惑メール対策の設定をしていると、本校からのメールが届かない場合がありますので、seiei.ac.jp ドメインからのメールを受け取れるようにしてください。<br/>※
            いただいた個人情報は、上記記載目的以外は使用いたしません。
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

              <div class="form-section first">
                <div class="inputstyle">
                  <h3 class="h3">・お申し込み内容 <span class="require">必須</span>
                    <span class="small">ご希望の項目にチェックを入れてください。（複数選択可）</span></h3>

                  <h2 class="h2">■ オープンキャンパスのお申し込み</h2>
                  <div class="values">
                    <div class="checkblock table">
                      <p class="cell">
                        <input type="checkbox" name="open1" class="checkbox" @if(Request::has('open1')) checked="checked" @endif>
                      </p>
                      <p class="cell text">
                        オープンキャンパス 1回目<br/>（2019年7月31日 9:00〜12:00）参加
                      </p>
                    </div>
                  </div>
                  <div class="values">
                    <div class="checkblock table">
                      <p class="cell">
                        <input type="checkbox" name="open2" class="checkbox" @if(Request::has('open2')) checked="checked" @endif>
                      </p>
                      <p class="cell text">
                        オープンキャンパス 2回目<br/>（2019年8月28日 9:90〜12:00）参加
                      </p>
                    </div>
                  </div>


                </div>

                <div class="inputstyle">
                  <h2 class="h2">■ 学校見学のお申し込み</h2>
                  <p class="notice">本校のスケジュールによっては、ご希望に添えない場合がありますが、こちらから再調整のご連絡をさせていただきます。</p>
                  <div class="values">

                    <div class="checkblock">
                      <div class="value-block table">
                        <p class="cell">
                          <input type="checkbox" name="disp1" value="1" class="checkbox" @if(Request::has('disp1')) checked="checked" @endif>
                        </p>
                        <p class="cell text">
                          学校見学（部活）
                        </p>
                      </div>
                      <div class="">
                        <p class="row">
                          <input type="text" name="disp1_val" class="input" placeholder="見学希望の部活名" value="{{ Request::get('disp1_val') }}">
                        </p>
                        <p class="row">
                          <input type="text" name="disp1_date" class="input" placeholder="例）08/25 13:30〜" value="{{ Request::get('disp1_date') }}">
                        </p>
                      </div>
                    </div>

                    <div class="checkblock">
                      <div class="value-block table">
                        <p class="cell">
                          <input type="checkbox" name="disp2" class="checkbox" @if(Request::has('disp2')) checked="checked" @endif>
                        </p>
                        <p class="cell text">
                          学校見学（授業）
                        </p>
                      </div>
                      <div class="">
                        <p class="row">
                          <input type="text" name="disp2_val" class="input" placeholder="見学希望の授業名" value="{{ Request::get('disp2_val') }}">
                        </p>
                        <p class="row">
                          <input type="text" name="disp2_date" class="input" placeholder="例）08/25 13:30〜" value="{{ Request::get('disp2_date') }}">
                        </p>
                      </div>
                    </div>

                  </div>
                </div>

                <div class="inputstyle">
                  <h2 class="h2">■ 資料請求</h2>
                  <div class="values">
                    <div class="checkblock">
                      <input type="checkbox" name="s_guide" id="" class="checkbox" @if(Request::has('s_guide')) checked="checked" @endif>
                      資料請求（学校案内パンフレット）
                      <p class="select-num">
                        <select name="guide_num" id="">
                          @foreach(range(1, 5) as $i)
                            <option value="{{ $i }}" @if($i == Request::get('guide_num')) selected="selected" @endif>{{ $i }}
                              部
                            </option>
                          @endforeach
                        </select>
                      </p>
                    </div>

                    <div class="checkblock">
                      <input type="checkbox" name="s_youkou" id="" class="checkbox" @if(Request::has('s_youkou')) checked="checked" @endif>
                      資料請求（募集要項）
                      <p class="select-num">
                        <select name="youkou_num" id="">
                          @foreach(range(1, 5) as $i)
                            <option value="{{ $i }}" @if($i == Request::get('youkou_num')) selected="selected" @endif>{{ $i }}
                              部
                            </option>
                          @endforeach
                        </select>
                      </p>
                    </div>
                  </div>
                </div>

              </div>


              <div class="form-section">

                <div class="inputstyle">
                  <div class="label">
                    <h3 class="h3">・お名前 <span class="require">必須</span></h3>
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
                    <h3 class="h3">・区分</h3>
                  </div>
                  <div class="value-box">
                    <div class="select-block">
                      <select name="category" id="">
                        <option value="">選択してください</option>
                        <option value="在校生・保護者" @if(Request::get('category') == '在校生・保護者') @endif>在校生・保護者</option>
                        <option value="中学生・保護者" @if(Request::get('category') == '中学生・保護者') @endif>中学生・保護者</option>
                        <option value="卒業生" @if(Request::get('category') == '卒業生') @endif>卒業生</option>
                        <option value="一般" @if(Request::get('category') == '一般') @endif>一般</option>
                      </select>
                    </div>
                  </div>
                </div>


                <div class="inputstyle">
                  <div class="label">
                    <h3 class="h3">・メールアドレス <span class="require">必須</span></h3>
                  </div>
                  <div class="value-box">
                    <div class="value-wrapper">
                      <p class="box"><input type="text" name="email" class="input" value="{{ Request::get('email') }}">
                      </p>
                      <p class="box">
                        <input type="text" name="email_confirmation" class="input" placeholder="確認のためもう一度入力ください。" value="{{  Request::get('email_confirmation') }}">
                      </p>
                      <p class="notice">
                        このメールアドレスを登録して、今後本校の行事や活動についての報告や案内を受け取ることを希望しますか？いただいた情報は、本目的以外には使用しません。
                      </p>
                      <div class="radio-block">
                        <p class="radio">
                          <input type="radio" name="mailmagazine" value="1" @if(Request::get('mailmagazine') == '1') checked="checked" @endif>
                          <b>希望する</b></p>
                        <p class="radio">
                          <input type="radio" name="mailmagazine" value="0" @if(Request::get('mailmagazine') == '0') checked="checked" @endif>
                          <b>希望しない</b></p>
                        <p class="radio">
                          <input type="radio" name="mailmagazine" value="9" @if(Request::get('mailmagazine') == '9') checked="checked" @endif>
                          <b>既に登録している</b></p>
                      </div>

                      <p class="notice">「希望する」を選んだ方は、メールマガジンの配信対象を選択してください。</p>


                      <div class="radio-block">
                        <input type="radio" name="site" value="1" @if(Request::get('site') == '1') @endif> <b>全日制</b>
                        <div class="select-block oneline">
                          <select name="tag1" id="">
                            <option value="">配信対象を選択してください</option>
                            <option value="在校生・保護者" @if(Request::get('tag1') == '在校生・保護者') selected="selected" @endif>
                              在校生・保護者
                            </option>
                            <option value="中学生・保護者" @if(Request::get('tag1') == '中学生・保護者') selected="selected" @endif>
                              中学生・保護者
                            </option>
                            <option value="卒業生" @if(Request::get('tag1') == '"卒業生') selected="selected" @endif>卒業生
                            </option>
                            <option value="一般" @if(Request::get('tag1') == '一般') selected="selected" @endif>一般</option>
                          </select>
                        </div>
                      </div>

                      <div class="radio-block">
                        <input type="radio" name="site" value="2" @if(Request::get('site') == '2') @endif> <b>通信制</b>
                        <div class="select-block oneline">
                          <select name="tag2" id="">
                            <option value="">配信対象を選択してください</option>
                            <option value="在校生・保護者" @if(Request::get('tag2') == '在校生・保護者') selected="selected" @endif>
                              在校生・保護者
                            </option>
                            <option value="中学生・保護者" @if(Request::get('tag2') == '中学生・保護者') selected="selected" @endif>
                              中学生・保護者
                            </option>
                            <option value="卒業生" @if(Request::get('tag2') == '"卒業生') selected="selected" @endif>卒業生
                            </option>
                            <option value="一般" @if(Request::get('tag2') == '一般') selected="selected" @endif>一般</option>
                          </select>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>

                <div class="inputstyle">
                  <div class="label">
                    <h3 class="h3">・住所</h3>
                    <p class="note">資料請求の場合はご入力ください</p>
                  </div>
                  <div class="value-box">
                    <div class="value-wrapper">
                      <p class="box">
                        <input type="text" name="zipcode" class="input small" placeholder="郵便番号" value="{{ Request::get('zipcode') }}">
                      </p>
                      <p class="box">
                        <input type="text" name="address" class="input full" value="{{ Request::get('address') }}"></p>
                    </div>
                  </div>
                </div>

                <div class="inputstyle">
                  <div class="label">
                    <h3 class="h3">・電話番号</h3>
                  </div>
                  <div class="value-box">
                    <div class="value-wrapper">
                      <input type="text" name="tel" class="input" placeholder="例）0835-38-5252" value="{{ Request::get('tel') }}">
                    </div>
                  </div>
                </div>

                <div class="inputstyle">
                  <div class="label">
                    <h3 class="h3">・その他連絡事項</h3>
                  </div>
                  <div class="value-box">
                    <div class="value-wrapper">
                      <textarea class="textarea" name="body">{{ Request::get('body') }}</textarea>
                    </div>
                  </div>
                </div>
              </div>

              <div class="buttons">
                <p>
                  <button class="button ora">送信内容を確認</button>
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