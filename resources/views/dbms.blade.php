<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="dbmscode" method="post" enctype="multipart/form-data">
        @csrf
        name:<input type="text" name="name"><br><br>
        email:<input type="email" name="email"><br><br>
        password:<input type="password" name="password"><br><br>
        city:<select name="city">
            <option>kanpur</option>
            <option>lucknow</option>
            <option>mumbai</option>
            <option>allahbad</option>
            <option>hariyana</option>
            <option>punjab</option>
        </select><br><br>

        gender:<input type="radio" name="gnd" value="male">male
        <input type="radio" name="gnd" value="female">femail<br><br>

        cource:<input type="checkbox" name="chk[]" value="c">c
                 <input type="checkbox" name="chk[]" value="c++">c++
                 <input type="checkbox" name="chk[]" value="java">java
                 <input type="checkbox"  name="chk[]" value="python">python<br><br>

        photo:<input type="file" name="photo"><br><br>
        <button>submit</button>

    </form>
</body>
</html>