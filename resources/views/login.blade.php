<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
</head>
<body>
	<form>
		<p>
			<label>Email</label><br>
			<input type="email" name="email">
		</p>
		<p>
			<label>Password</label><br>
			<input type="password" name="password">
		</p>
		<input type="submit" name="submit" value="Submit">
		<a href="{{url('/register')}}">Register</a>
	</form>
</body>
</html>