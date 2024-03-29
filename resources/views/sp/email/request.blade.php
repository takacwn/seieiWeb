資料請求申し込みを下記で受け取りました。【{{ date('Y/m/d H:i:s') }}】
@if(Request::has('open1') || Request::has('open2'))

■ オープンキャンパスのお申し込み
@if(Request::has('open1'))
オープンキャンパス 1回目（2019年7月31日 9:00〜12:00）参加
@endif
@if(Request::has('open2'))
オープンキャンパス 2回目（2019年8月28日 9:00〜12:00）参加
@endif
@endif
@if(Request::has('disp1') || Request::has('disp2'))

■ 学校見学のお申し込み
@if(Request::has('disp1'))
学校見学： {{ Request::get('disp1_val') }}（見学希望日時：{{ Request::get('disp1_date') }}）
@endif
@if(Request::has('disp2'))
学校見学： {{ Request::get('disp2_val') }}（見学希望日時：{{ Request::get('disp2_date') }}）
@endif
@endif
@if(Request::has('s_guide') || Request::has('s_youkou'))

■ 資料請求
@if(Request::has('s_guide'))
  資料請求（学校案内パンフレット）{{ Request::get('guide_num') }}部
@endif
@if(Request::has('s_youkou'))
  資料請求（募集要項）{{ Request::get('youkou_num') }}部
@endif
@endif


■ お申込者
お名前：  {{ $data->lastname }} {{ $data->firstname }}
所属、学校： {{ $data->school }}
区分： {{ $data->category }}
メールアドレス： {{ $data->email }}
メールマガジン：{{  $data->label }}
@if($data->mailmagazine == '1')
  @if($data->site == '1')
  全日制 {{ $data->tag1 }}
  @else
  通信制 {{ $data->tag2 }}
  @endif
@endif
住所： {{ $data->zipcode }} {{ $data->address }}
電話番号： {{ $data->tel }}
その他連絡事項： {{ $data->body }}
