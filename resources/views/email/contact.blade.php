お問い合わせ内容を下記で受け取りました。【{{ date('Y/m/d H:i:s') }}】

■ お問い合わせ
お名前：  {{ $data->lastname }} {{ $data->firstname }}
所属、学校： {{ $data->school }}
メールアドレス： {{ $data->email }}
メールマガジン：{{  $data->label }}
@if($data->mailmagazine == '1')
  @if($data->site == '1')
  全日制 {{ $data->tag1 }}
  @else
  通信制 {{ $data->tag2 }}
  @endif
@endif
件名： {!! $data->subject  !!}
お問い合わせ内容： {!! $data->body !!}