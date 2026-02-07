<?php include 'config.php'; ?>
<link rel="stylesheet" href="style.css">
<?php include 'menu.php'; ?>

<div class="container">
<h2 style="color:#f1c40f">مدیریت کاربران</h2>

<table class="spec-table">
<tr>
    <th>نام کاربری</th>
    <th>عملیات</th>
</tr>

<?php
$users = mysqli_query($conn,"SELECT * FROM users");
while($u = mysqli_fetch_assoc($users)){
?>
<tr>
    <td><?php echo $u['username']; ?></td>
    <td>
        <a href="edit_user.php?id=<?php echo $u['id']; ?>">ویرایش</a> |
        <a href="delete_user.php?id=<?php echo $u['id']; ?>">حذف</a>
    </td>
</tr>
<?php } ?>
</table>
</div>
