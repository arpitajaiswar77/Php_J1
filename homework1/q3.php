<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
    Full Name:
    <input type="text" name="name"><br>
    Phone No:
    <input type="text" name="number"><br>
    Car Brand:
    <select name="car" id="">
        <option value="toyota">Toyota</option>
        <option value="Ford">Ford</option>
        <option value="Tesla">Tesla</option>
    </select>
    <br>
    <button type="submit">Submit</button>

    </form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"]==="POST") {
    $name=$_POST["name"];
    $phone=$_POST["number"];
    $car=$_POST["car"];

    echo $name;
    echo $phone;
    echo $car;
}

?>
