<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="cpasscode" method="post">
        @csrf
        new password<input type="text" name="npass"><br><br>
        conform pass<input type="text" name="cpass"><br><br>
        <button>change</button>
    </form>
</body>
</html>