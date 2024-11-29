<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="fsecondcode" method="post">
        @csrf
        <h1>second form</h1>
        mobile:<input type="number" name="number"><br><br>
        city:<select name="city">
            <option>kanpur</option>
            <option>lucknow</option>
            <option>allahbad</option>
        </select><br><br>
        <button>submit</button>
    </form>
</body>
</html>