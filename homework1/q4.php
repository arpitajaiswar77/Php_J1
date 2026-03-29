<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
    Username:
    <input type="text" name="user"> <br>
    Password:
    <input type="text" name="pass"><br>
    Terms & Conditions:
    <input type="checkbox" name="terms" value="yes" id="">
    <br>
    <button type="submit">Submit</button>

    </form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"]==="POST") {
    $username=$_POST["user"];
    $pass=$_POST["pass"];
    $term=isset($_POST["terms"])?"Agree":"Not Agree";
     echo "Welcome $username.You have $term to the terms and to terms";

}
?>
