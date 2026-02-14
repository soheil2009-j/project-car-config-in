
<?php include 'header.php'; ?>
<?php include 'menu.php'; ?><?php include 'config.php'; ?>


<div class="container">
    <?php
    $cars = mysqli_query($conn, "SELECT * FROM cars");
    while ($car = mysqli_fetch_assoc($cars)) {
    ?>
        <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
            <div class="car-box">
                <img src="images/<?php echo $car['image']; ?>">
                <h3><?php echo $car['name']; ?></h3>
                <a href="car.php?id=<?php echo $car['id']; ?>">مشخصات</a>
            </div>
        </div>
    <?php } ?>
    <div style="clear:both"></div>
</div>
<?php include 'footer.php'; ?>
