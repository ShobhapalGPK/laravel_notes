<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="otpcode" method="post">
        @csrf
        enter otp :<input type="text" name="otp"><br>
        <button>check</button>
    </form>
</body>
</html>