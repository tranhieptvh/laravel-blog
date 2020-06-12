<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form action="login" method="POST">
        @csrf
        Username: <input type="text" name="username"><br>
        Password: <input type="password" name="pwd"><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>