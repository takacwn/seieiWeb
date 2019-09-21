@extends("admin.layout")
@section("content")
<!-- コンテンツヘッダ -->
<section class="content">


	<div class="box">
		<div class="box-body">
			<table class="table table-bordered">
				<tr>
					<th>id</th>
					<th>post url</th>
					<th>publish date</th>
					<th>total</th>
				</tr>
				@foreach($rows as $row)
        <tr>
					<td>{{ $row->id }}</td>
          <td><a href="{{ env('BLOG_DOMAIN_URL') }}?p={{ $row->post_id }}">{{ $row->post_id }}</a></td>
          <td>{{ $row->created_at->format('m-d H:i') }}</td>
	        <td>{{ $row->total }}</td>
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
