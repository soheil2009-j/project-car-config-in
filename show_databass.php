<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $connect=mysqli_connect("localhost","root","","cars");
    $result = mysqli_query($connect, "SELECT * FROM `info's` WHERE 1");

while ($row = mysqli_fetch_array($result)) {
    echo $row['name_car'];
    echo("______");
    echo $row['name_self'];
    echo " <a href='delete_databass.php?id=".$row['id']."'>حذف</a>";
    
    echo "<br>";
}
    ?>
    </body>
</html>
