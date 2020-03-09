<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="{{action('login@login')}}" method="post" accept-charset="utf-8">
		@csrf
		<input type="email" name="email" required>
		<input type="submit" name="Submit" value="Submit">
	</form>

	<h1>Hello How Are You?</h1>
	<h5>My name is Angkon</h5>
</body>
</html>