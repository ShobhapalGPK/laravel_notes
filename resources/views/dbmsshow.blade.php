<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="2">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>password</th>
            <th>city</th>
            <th>gender</th>
            <th>cource</th>
            <th>picture</th>
            <th>delete</th>
            <th>update</th>

        </tr>
        <tbody>
            @foreach($data as $x)
            <tr>
                <td>{{$x->id}}</td>
                <td>{{$x->name}}</td>
                <td>{{$x->email}}</td>
                <td>{{$x->password}}</td>
                <td>{{$x->city}}</td>
                <td>{{$x->gender}}</td>
                <td>{{$x->cource}}</td>
                                            <!-- coloum name -->
                <td><img src="{{asset('image/'.$x->picture)}}" height="100px" width="100px"></td>
                               
                             <!-- url -->
                <td><a href="{{'dbmsdelete/'.$x->id}}">delete</a></td>
                <td><a href="{{'dbmsedit/'.$x->id}}">edit</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>