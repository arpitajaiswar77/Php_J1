<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        Id:
        <input type="text" name="id"><br>
        Name:
        <input type="text" name="name" id=""><br>
        Department:
        <input type="text" name="dept" id=""><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
<?php 
if ($_SERVER["REQUEST_METHOD"]==="POST") {
    $Id=$_POST["id"];

}

?>