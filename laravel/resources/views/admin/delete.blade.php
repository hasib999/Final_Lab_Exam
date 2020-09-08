<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delete Employer</title>
</head>
<body>
    <fieldset>
        <legend>Delete Employee</legend>
        <a href="{{route('admin.index')}}">Back</a>

        <form method="post">
            @csrf
            <table>
                <tr>
                    <td>Username: </td>
                    <td>{{$user[0]->username}}</td>
                </tr>
                <tr>
                    <td>Name: </td>
                    <td>{{$user[0]->name}}</td>
                </tr>
                <tr>
                    <td>Contact No: </td>
                    <td>{{$user[0]->mobile}}</td>
                </tr>
            </table>
            <h3>Are you sure?</h3>
            <input type="submit" name="submit" value="Confirm">
        </form>
    </fieldset>
</body>
</html>