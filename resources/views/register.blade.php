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
			<label>Name</label><br>
			<input type="text" name="name">
		</p>
		<p>
			<label>Email</label><br>
			<input type="email" name="email">
		</p>
		<p>
			<label>Password</label><br>
			<input type="password" name="password">
		</p>
		<p>
			<label>Retype Password</label><br>
			<input type="password" name="retype-password">
		</p>
		<input type="submit" name="submit" value="Submit">
		<a href="{{url('/login')}}">Login</a>
	</form>
</body>
</html>