<?php
include 'config.php';

$id = $_GET['id'];
$car = mysqli_fetch_assoc(
    mysqli_query($conn,"SELECT * FROM cars WHERE id=$id")
);
?>
<link rel="stylesheet" href="style.css">
<?php include 'menu.php'; ?>

<form method="post" enctype="multipart/form-data">
<h3>ویرایش خودرو</h3>

<input 
    name="name"
    value="<?php echo $car['name']; ?>"
    placeholder="نام خودرو">

<textarea 
    name="specs"
    placeholder="مشخصات خودرو"
><?php echo $car['specs']; ?></textarea>

<p style="color:#f1c40f">عکس فعلی:</p>
<img src="images/<?php echo $car['image']; ?>" width="200">

<input type="file" name="image">

<button name="update">ذخیره تغییرات</button>
</form>

<?php
if(isset($_POST['update'])){
    $name = $_POST['name'];
    $specs = $_POST['specs'];

    if(!empty($_FILES['image']['name'])){
        $img = $_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'],"images/$img");

        mysqli_query($conn,
            "UPDATE cars 
             SET name='$name', specs='$specs', image='$img'
             WHERE id=$id"
        );
    }else{
        mysqli_query($conn,
            "UPDATE cars 
             SET name='$name', specs='$specs'
             WHERE id=$id"
        );
    }

    header("Location: manage_cars.php");
}
?>
