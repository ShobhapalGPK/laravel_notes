<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../dbmsupdate" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{$data->id}}">
        name:<input type="text" name="name" value="{{$data->name}}"><br><br>
        email:<input type="email" name="email" value="{{$data->email}}"><br><br>
        password:<input type="password" name="password" value="{{$data->password}}"><br><br>
        city:<select name="city">
            <option {{$data->city=='kanpur'?'selected':''}}>kanpur</option>
            <option {{$data->city=='lucknow'?'selected':''}}>lucknow</option>
            <option {{$data->city=='mumbai'?'selected':''}}>mumbai</option>
            <option {{$data->city=='allahbad'?'selected':''}}>allahbad</option>
            <option {{$data->city=='hariyana'?'selected':''}}>hariyana</option>
            <option {{$data->city=='punjab'?'selected':''}}>punjab</option>
        </select><br><br>

        gender:<input type="radio" name="gnd" value="male"{{$data->gender=='male'?"checked":""}}>male
        <input type="radio" name="gnd" value="female"{{$data->gender=='female'?"checked":""}}>female<br><br>

        @php

        $x = explode(',',$data->cource);

        @endphp
        cource:<input type="checkbox" name="chk[]" value="c"{{ in_array('c',$x)?"checked":"" }}>c
                 <input type="checkbox" name="chk[]" value="c++"{{ in_array('c++',$x)?"checked":"" }}>c++
                 <input type="checkbox" name="chk[]" value="java"{{ in_array('java',$x)?"checked":"" }}>java
                 <input type="checkbox"  name="chk[]" value="python"{{ in_array('python',$x)?"checked":"" }}>python<br><br>


        <img src="{{asset('image/'.$data->picture)}}" height="100px" width="100px">         
        photo:<input type="file" name="photo"><br><br>
        <button>update</button>

    </form>
</body>
</html>