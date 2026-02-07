<?php 
include 'config.php';
$car = mysqli_fetch_assoc(
    mysqli_query($conn,"SELECT * FROM cars WHERE id=$_GET[id]")
);
?>
<link rel="stylesheet" href="style.css">
<?php include 'menu.php'; ?>

<div class="container">
    <div class="car-detail">
        <h2><?php echo $car['name']; ?></h2>
        <img src="images/<?php echo $car['image']; ?>">

        <table class="spec-table">
            <tr>
                <th>ویژگی</th>
                <th>مشخصات</th>
            </tr>

            <?php
            $specs = explode("\n", $car['specs']);
            foreach($specs as $spec){
                $item = explode(":", $spec);
                if(count($item)==2){
                    echo "<tr>
                            <td>{$item[0]}</td>
                            <td>{$item[1]}</td>
                          </tr>";
                }
            }
            ?>
        </table>
    </div>
</div>
