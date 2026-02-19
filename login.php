
<?php
include 'config.php';
 include 'header.php'; 
 include 'menu.php'; ?>

<?php


if(isset($_POST['login'])){
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    $res = mysqli_query($conn,
        "SELECT * FROM users 
         WHERE username='$username' AND password='$password'"
    );

    if(mysqli_num_rows($res)==1){

        $user = mysqli_fetch_assoc($res);

        $_SESSION['user']  = $user['username'];
        $_SESSION['admin'] = $user['admin'];

        header("Location:index.php");
        exit();
    }else{
        $error = "نام کاربری یا گذرواژه اشتباه است";
    }
}
?>

<form method="post">
<h3>ورود</h3>
<input name="username">
<input type="password" name="password">
<button name="login">ورود</button>
</form>

<?php
if(isset($error)){
    echo $error;
}
?>
<?php include 'footer.php'; ?>

