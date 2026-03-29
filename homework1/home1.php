<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
    Name:
    <input type="text" name="name"><br>
    Password:
    <input type="text" name="pass"><br>
    Email:
    <input type="text" name="email"><br>
    <button type="submit">Submit</button>
    </form>
</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"]   ==="POST"){
    $name=$_POST["name"];
    $password=$_POST["pass"];
    $email=$_POST["email"];

    echo $name;
    echo $password;
    echo $email;
}
?>