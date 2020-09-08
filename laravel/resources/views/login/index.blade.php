<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
<body>
	<fieldset>
		<legend>Login</legend>
		<form method="post">
	
			<!-- @csrf -->
			<!-- {{csrf_field()}} -->
			<input type="hidden" name="_token" value="{{csrf_token()}}">
	
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Submit"></td>
				</tr>
			</table>
		</form>
	
		{{session('msg')}}
	</fieldset>
</body>
</html>