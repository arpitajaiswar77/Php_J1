<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="GET">
        Email:
        <input type="email" name="email" id=""><br>
        Password: 
        <input type="password" name="pass" id=""><br>
        Are you Subscribed? <input type="checkbox" name="sub" value="yes" id=""><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"]==="GET")
    {
        $email=$_GET["email"];
        $password=$_GET["pass"];
        $subscribe=isset($_GET["sub"])?"subscribe":"not subscribe";

        echo "Thank You for signing up $email .You have $subscribe to the newsletter";
    }

?>
