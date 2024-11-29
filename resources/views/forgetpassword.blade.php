<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>forget password</h1>

    <form action="forgetpasswordcode" method="post">
        @csrf
        enter email:<input type="email" name="email"><br><br>
        <button>check</button>
    </form>
</body>
</html>