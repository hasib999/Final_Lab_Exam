<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Employee HomePage</legend>
        <a href="{{route('employee.addJob')}}">Add Job</a> ||

        <a href="/logout">Logout</a><br><br>
        <table border="1px">
            <caption>Job Ad</caption>
            <th>
                <td>Company Name</td>
                <td>Job Title</td>
                <td>Location</td>
                <td>Salary</td>
                <td>Action</td>
            </th>
            @for($i=0; $i != count($info); $i++)
                <tr>
                    <td>{{$info[$i]->id}}</td>
                    <td>{{$info[$i]->cname}}</td>
                    <td>{{$info[$i]->title}}</td>
                    <td>{{$info[$i]->location}}</td>
                    <td>{{$info[$i]->salary}}</td>
                    <td>
                        <a href="{{route('employee.editJob',[$info[$i]->id])}}">Edit</a> |
                        <a href="{{route('employee.deleteJob',[$info[$i]->id])}}">Delete</a>
                    </td>
                </tr>
            @endfor
        </table>

    </fieldset>
</body>
</html>