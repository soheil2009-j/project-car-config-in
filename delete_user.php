
<?php include 'config.php';
mysqli_query($conn,"DELETE FROM users WHERE id=$_GET[id]");
header("Location:users.php");
?>
