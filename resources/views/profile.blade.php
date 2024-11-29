<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="profilecode" method="post" enctype="multipart/form-data">
        @csrf
    <h1>profile page</h1>
    name:<input type="text" name="name"  value="{{$data->name}}"/><br/>
    email:<input type="email" name="email" readonly value="{{$data->email}}"><br>
    password:<input type="password" name="pass" readonly  value="{{$data->password}}"><br>
    city:<input type="text" name="city" value="{{$data->city}}"><br><br>
    mobile<input type="number" name="num" value="{{$data->mobile}}"><br>
    <img src="{{asset('image/'.$data->picture)}}" height="100px" width="100px">
    picture:<input type="file" name="photo"><br><br>
    <button>submit</button>
    </form>

</body>
</html>