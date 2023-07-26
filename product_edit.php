<link rel="stylesheet" href="decorate.css">
<?php

include "connect.php";

$sql = "SELECT * FROM tbl_product WHERE id='$_GET[id]'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result)

?>

<form action="product_update.php?id=<?php echo $row[id] ?>" method="post" enctype="multipart/form-data">
    <label for="name"> ชื่อสินค้า </label>
    <input type="text" name="name" placeholder="ชื่ออะไร" value="<?php echo $row[name]; ?>" /></br>
    <label for="price"> ราคา </label>
    <input type="int" name="price" placeholder="เท่าไหร่" value="<?php echo $row[price]; ?>" /></br>
    <label for="price"> จำนวนที่เหลือ </label>
    <input type="int" name="stock" placeholder="เช่น ลักษณะ,รูปร่าง" value="<?php echo $row[stock]; ?>" /></br>
    <label for="price"> รายละเอียดสินค้า </label>
    <textarea name="description"> <?php echo $row[description]; ?></textarea></br>
    <input type="submit" value="Update"/>
</form>
