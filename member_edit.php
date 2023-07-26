<link rel="stylesheet" href="decorate.css">
<div class="container">

    <?php

    include "connect.php";

    $sql = "SELECT * FROM tbl_member WHERE id='$_GET[id]'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    ?>

    <p class="index1">
        <b><br /> EDITING </b>
    </p>

    <form action="member_update.php?id=<?php echo $row[id] ?>" method="post" enctype="multipart/form-data">
        <label for="firstname">First name :</label><br>
        <input type="text" name="firstname" class="input" value="<?php echo $row[firstname]; ?>" />
        <label for="lastname">last name :</label><br>
        <input type="text" name="lastname" class="input" value="<?php echo $row[lastname]; ?>" /> </br>
        <label for="email">Email :</label><br>
        <input type="email" name="email" class="input" value="<?php echo $row[email]; ?>" /> </br>
        <label for="phone">Phone :</label><br>
        <input type="text" name="phone" class="input" value="<?php echo $row[phone]; ?>" /> </br>
        <label for="address">Address :</label><br/>
        <textarea name="address" class="input"> <?php echo $row[address]; ?> </textarea> </br>
        <label for="photo"></label>
        <input type="file" name="photo"/> </br>
        <img src="./img/<?php echo $row[photo] ?>"/>
        <input type="submit" value="เปลี่ยนแปลง" class="button" />
    </form>
</div>