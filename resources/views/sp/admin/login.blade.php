<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>LOGIN</title>
</head>
<body>
<div class="box">
	@if($e)
	<div class="error" style="color: red;">
    {{ $e }}
	</div>
	@endif


	<form action="" method="post">
		<div class="inputstyle">
			<input type="text" name="name" placeholder="ID">
		</div>
		<div class="inputstyle">
			<input type="password" name="password" placeholder="PASS">
		</div>
		<button>Submit</button>
	</form>
</div>

</body>
</html>
