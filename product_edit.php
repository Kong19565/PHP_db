<?php

include "connect.php";

$sql = "SELECT * FROM tbl_product WHERE id='$_GET[id]'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result)

?>

<form action="product_update.php?id=<?php echo $row[id] ?>" method="post" enctype="multipart/form-data">
    ชื่อสินค้า <input type="text" name="name" value="<?php echo $row[name]; ?>" /></br>
    ราคา <input type="int" name="price" value="<?php echo $row[price]; ?>" /></br>
    จำนวนที่เหลือ <input type="int" name="stock" value="<?php echo $row[stock]; ?>" /></br>
    รายละเอียดสินค้า <textarea name="description"> <?php echo $row[description]; ?></textarea></br>
    <input type="submit" value="Update"/>
</form>