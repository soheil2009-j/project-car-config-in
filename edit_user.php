
<?php include 'header.php'; ?>
<?php include 'menu.php'; ?><?php
include 'config.php';

$id = $_GET['id'];
$user = mysqli_fetch_assoc(
    mysqli_query($conn,"SELECT * FROM users WHERE id=$id")
);
?>

<form method="post">
<h3>ویرایش کاربر</h3>

<input 
    name="username" 
    value="<?php echo $user['username']; ?>" 
    placeholder="نام کاربری">

<input 
    type="password" 
    name="password" 
    placeholder="گذرواژه جدید (اختیاری)">

<button name="update">ذخیره تغییرات</button>
</form>

<?php
if(isset($_POST['update'])){
$username = $_POST['username'];
$password = $_POST['password'];

if(!empty($password)){
    $pass = password_hash($password, PASSWORD_DEFAULT);
    mysqli_query($conn,
        "UPDATE users SET username='$username', password='$pass' WHERE id=$id"
    );
}else{
    mysqli_query($conn,
        "UPDATE users SET username='$username' WHERE id=$id"
    );
}

header("Location: users.php");
}
?>
<?php include 'footer.php'; ?>

