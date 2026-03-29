<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
    Name:
    <input type="text" name="name"><br>
    Email:
    <input type="text" name="email"><br>
    Password:
    <input type="text" name="pass"><br>
    Confirm Password:
    <input type="text" name="cpass"><br>
    <button type="submit">Submit</button>


    </form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"]==="POST") {
    $name=$_POST["name"];
    $email=$_POST["email"];
    $pass=$_POST["pass"];
    $cpass=$_POST["cpass"];

    if (empty($name)||empty($email)||empty($pass)||empty($cpass)) {
        echo "<script>alert('compolsury')</script>";

        if ($pass != $cpass) {
            echo "<script>alert('password not match')</script>";
        }

        if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
           echo "<script>alert('ENTER VALID EMAIL')</script>";
        }
    }
 
}



?>