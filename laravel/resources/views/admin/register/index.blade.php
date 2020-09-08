<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
    <fieldset>
        <legend>
            Register New Employer 
        </legend>
        <form method="POST">
            @csrf
            <input type="text" placeholder="username" name="username"><br><br>
            <input type="password" placeholder="Password" name="password"><br><br>
            <input type="text" placeholder="Name" name="name"><br><br>
            <input type="text" placeholder="company name" name="cname"><br><br>
            <input type="text" placeholder="Contact no" name="mobile"><br><br>
            <input type="submit" value="Add">&nbsp;&nbsp;
        </form>
        
        <a href="/logout">Logout</a><br>
        @foreach($errors->all() as $err)
		{{$err}} <br>
    	@endforeach
    </fieldset>
</body>
</html>