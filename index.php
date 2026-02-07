
<?php include 'config.php'; ?>
<link rel="stylesheet" href="style.css">

<?php include 'menu.php'; ?>

<div class="container">
<?php
$cars = mysqli_query($conn,"SELECT * FROM cars");
while($car = mysqli_fetch_assoc($cars)){
?>
<div class="car-box">
<img src="images/<?php echo $car['image']; ?>">
<h3><?php echo $car['name']; ?></h3>
<a href="car.php?id=<?php echo $car['id']; ?>">مشخصات</a>
</div>
<?php } ?>
<div style="clear:both"></div>
</div>
