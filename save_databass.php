<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $name_car=$_POST["name_car"];
    $name_self=$_POST["name_self"];
    $connect=mysqli_connect("localhost","root","","cars");
    if(!$connect){
        echo("اتصال به دیتا بیس انجام نشد!");
    }
    $result=mysqli_query($connect,"INSERT INTO `info's`(`name_car`, `name_self`) VALUES ('$name_car','$name_self')");
    mysqli_close($connect);
    if($result==true){
        echo("اطلاعات در دیتا بیس زخیره شد!");
    }
    else{
        echo("خطا در ذخیره ی اطلاعات!");
    }
    ?>
    <br>
    <a href="show_databass.php">نمایش اطلاعات دیتا بیس</a>
</body>
</html>
    