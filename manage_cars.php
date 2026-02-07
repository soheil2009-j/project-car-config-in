<?php include 'config.php'; ?>
<link rel="stylesheet" href="style.css">
<?php include 'menu.php'; ?>

<div class="container">
<h2 style="color:#f1c40f">مدیریت محتوا (خودروها)</h2>

<table class="spec-table">
<tr>
    <th>نام خودرو</th>
    <th>عملیات</th>
</tr>

<?php
$cars = mysqli_query($conn,"SELECT * FROM cars");
while($c = mysqli_fetch_assoc($cars)){
?>
<tr>
    <td><?php echo $c['name']; ?></td>
    <td>
        <a href="edit_car.php?id=<?php echo $c['id']; ?>">ویرایش</a> |
        <a href="delete_car.php?id=<?php echo $c['id']; ?>">حذف</a>
    </td>
</tr>
<?php } ?>
</table>
</div>
