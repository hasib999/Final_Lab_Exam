<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
</head>
<body>
    <fieldset>
        <legend>Admin HomePage</legend>
        <a href="/admin/register">Register</a><br>
        <table border="1px">
            <th>
                <td>username</td>
                <td>password</td>
                <td>type</td>
                <td>name</td>
                <td>cname</td>
                <td>mobile</td>
                <td>Action</td>
            </th>
            @for($i=0; $i != count($users); $i++)
                <tr>
                    <td>{{$users[$i]->userId}}</td>
                    <td>{{$users[$i]->username}}</td>
                    <td>{{$users[$i]->password}}</td>
                    <td>{{$users[$i]->type}}</td>
                    <td>{{$users[$i]->name}}</td>
                    <td>{{$users[$i]->cname}}</td>
                    <td>{{$users[$i]->mobile}}</td>
                    <td>
                        <a href="{{route('admin.edit',[$users[$i]->userId])}}">Edit</a> |
                        <a href="{{route('admin.delete',[$users[$i]->userId])}}">Delete</a>
                    </td>
                </tr>
            @endfor
            
        </table>
        <a href="/logout">Logout</a>
    </fieldset>
</body>
</html>