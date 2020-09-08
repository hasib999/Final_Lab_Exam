<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delete Job</title>
</head>
<body>
    <fieldset>
        <legend>Delete Job Post</legend>
        <a href="{{route('employee.index')}}">Back</a>

        <form method="post">
            @csrf
            <table>
                <tr>
                    <td>Company name: </td>
                    <td>{{$info[0]->cname}}</td>
                </tr>
                <tr>
                    <td>Name: </td>
                    <td>{{$info[0]->title}}</td>
                </tr>
                <tr>
                    <td>Location: </td>
                    <td>{{$info[0]->location}}</td>
                </tr>
            </table>
            <h3>Are you sure?</h3>
            <input type="submit" name="submit" value="Confirm">
        </form>
    </fieldset>
</body>
</html>