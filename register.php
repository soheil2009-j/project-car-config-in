
<?php include 'config.php'; ?>
<link rel="stylesheet" href="style.css">
<?php include 'menu.php'; ?>
<form method="post">
<h3>ثبت نام</h3>
<input name="username" placeholder="نام کاربری">
<input type="password" name="password" placeholder="گذرواژه">
<button name="submit">ثبت نام</button>
</form>

<?php
if(isset($_POST['submit'])){
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    mysqli_query($conn,
        "INSERT INTO users(username,password) VALUES('$username','$password')"
    );

    echo "ثبت نام انجام شد";
}


?>
