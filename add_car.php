<?php include 'header.php'; ?>
<?php include 'menu.php'; ?>

<?php include 'config.php'; ?>



<form method="post" enctype="multipart/form-data">
<input name="name" placeholder="نام خودرو">
<textarea name="specs" placeholder="مشخصات"></textarea>
<input type="file" name="image">
<button name="add">افزودن</button>
</form>

<?php
if(isset($_POST['add'])){
$img=$_FILES['image']['name'];
move_uploaded_file($_FILES['image']['tmp_name'],"images/$img");
mysqli_query($conn,
"INSERT INTO cars(name,image,specs) VALUES('$_POST[name]','$img','$_POST[specs]')");
}
?>
<?php include 'footer.php'; ?>


