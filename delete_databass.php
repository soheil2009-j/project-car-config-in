<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$id = $_GET['id'];
$connect=mysqli_connect("localhost","root","","cars");
$result=mysqli_query($connect, "DELETE FROM `info's` WHERE id=$id");
mysqli_close($connect);
if($result){
    ?>
<script>
    location.replace("show_databass.php");
</script>
    <?php
}
else
    echo("حذف انجام نشد");
?>
</body>
</html>