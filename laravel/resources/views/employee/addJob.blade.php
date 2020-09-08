<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Job</title>
</head>
<body>
    <fieldset>
        <legend>Add Job</legend>
        <form method="POST">
            @csrf
            <p>Company Name</p>
            <input type="text" placeholder="Enter Company Name" name="cname">
            <p>Job Title </p>
            <input type="text" placeholder="Enter Job Title" name="title">
            <p>Location</p>
            <input type="text" placeholder="Enter Location" name="location">
            <p>Salary</p>
            <input type="number" name="salary"><br><br>
            <input type="Submit" value="Post"><br>
        </form>
        <a href="/logout">Logout</a><br>
        @foreach($errors->all() as $err)
		{{$err}} <br>
    	@endforeach
    </fieldset>
</body>
</html>