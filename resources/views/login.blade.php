<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="logincode" method="post">
        @csrf
        email: <input type="email" name="email"><br><br>
        password: <input type="password" name="password"><br><br>
        <button>Login</button>
                  <!-- url -->
        <a href="{{'forgetpassword'}}">forget password</a>
    </form>
</body>
</html>