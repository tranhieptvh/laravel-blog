<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Input</title>
</head>

<body>
    <form action="showInfo" method="POST">
        @csrf
        Name: <input type="text" name="name"><br>
        Age: <input type="text" name="age"><br>
        Location: <input type="text" name="location"><br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>