<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action="signupcode" method="post">
    @csrf

   name:<input type="text" name="name"><br><br>
   email:<input type="email" name="email"><br><br>
   password:<input type="password" name="password"><br><br>
   <button>save</button>
   </form> 
</body>
</html>