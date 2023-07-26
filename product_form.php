<link rel="stylesheet" href="decorate.css">
<p class="index2">
   <b><br/> PRODUCT </b>
</p>
<div class="container"></div>
<form action="product_insert.php" method="post" enctype="multipart/form-data">
    ชื่อสินค้า <input type="text" name="name" class="input" />
    ราคา <input type="text" name="price" class="input" />
    จำนวนที่เหลือ <input type="text" name="stock" class="input" />
    รายละเอียดสินค้า <textarea name="description" class="input" /> </textarea>
    <input type="submit" value="บันทึกข้อมูล" class="button" />
</form>
</div>