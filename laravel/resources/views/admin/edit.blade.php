<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
</head>
<body>
    <fieldset>
        <legend>
            Edit Employer 
        </legend>
        <form method="POST">
        @csrf
            <input type="text" placeholder="username" name="username" id="username" value="{{$user[0]->username}}"><br><br>
            <input type="password" placeholder="Password" name="password" value="{{$user[0]->password}}"><br><br>
            <input type="text" placeholder="Name" name="name" value="{{$user[0]->name}}"><br><br>
            <input type="text" placeholder="company name" name="cname" value="{{$user[0]->cname}}"><br><br>
            <input type="text" placeholder="Contact no" name="mobile" value="{{$user[0]->mobile}}"><br><br>
            <input type="submit" value="Save">&nbsp;&nbsp;
        </form>
        
        <a href="/logout">Logout</a><br>
        @foreach($errors->all() as $err)
		{{$err}} <br>
    	@endforeach
    </fieldset>
</body>
</html>