<nav>
<a href="index.php">خانه</a>


<?php if(isset($_SESSION['admin']) && $_SESSION['admin'] == 1): ?>
    <a href="add_car.php">افزودن محتوا</a>
    <a href="manage_cars.php">مدیریت محتوا</a>
    <a href="users.php">مدیریت کاربران</a>
<?php endif; ?>

<?php if(isset($_SESSION['user'])): ?>
    <a href="logout.php">خروج</a>
<?php else: ?>
    <a href="login.php">ورود</a>
    <a href="register.php">ثبت نام</a>
<?php endif; ?>
</nav>

