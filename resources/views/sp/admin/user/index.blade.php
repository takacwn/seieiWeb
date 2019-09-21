@extends("admin.layout")
@section("content")
<!-- コンテンツヘッダ -->
<section class="content">


	<div class="box">
		<div class="box-body">
			<table class="table table-bordered">
				<tr>
					<th>id</th>
					<th>email</th>
					<th>site</th>
					<th>create date</th>
					<th>status</th>
				</tr>
				@foreach($rows as $row)
        <tr>
					<td>{{ $row->id }}</td>
          <td>{{ $row->email }}</td>
	        <td>{{ ($row->site == 1)? '一般' : '通信制' }}</td>
          <td>{{ $row->created_at->format('m-d H:i') }}</td>
	        <td>
		        <form action="{{ url('_manager') }}" method="post">
			        <input type="hidden" name="id" value="{{ $row->id }}">
			        <button>配信停止</button>
		        </form>
	        </td>
				</tr>
				@endforeach
			</table>
		</div>
		<div class="box-footer clearfix">
      {!! $rows->render() !!}
		</div>
	</div>
</section>
@stop
