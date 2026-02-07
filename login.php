<?php include 'config.php'; ?>
<link rel="stylesheet" href="style.css">
<?php include 'menu.php'; ?>

<form method="post">
<h3>ورود</h3>
<input name="username">
<input type="password" name="password">
<button name="login">ورود</button>
</form>

<?php
if(isset($_POST['login'])){
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    $res = mysqli_query($conn,
        "SELECT * FROM users 
         WHERE username='$username' AND password='$password'"
    );

    if(mysqli_num_rows($res)==1){
        $_SESSION['user']=$username;
        header("Location:index.php");
    }else{
        echo "نام کاربری یا گذرواژه اشتباه است";
    }
}


?>
