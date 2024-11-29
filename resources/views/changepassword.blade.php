<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="changepasscode" method="post">
        @csrf
        old password:<input type="password" name="oldpass"><br><br>
        new password:<input type="password" name="newpass"><br><br>
        conform password:<input type="password" name="conformpass"><br><br>
        <button>change</button>
    </form>
</body>
</html>