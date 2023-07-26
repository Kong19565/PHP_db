<?php

include "connect.php";

$filename = $_FILES["photo"]["name"];

$sql = "UPDATE tbl_member SET 
    firstname ='$_POST[firstname]',
    lastname ='$_POST[lastname]',
    email ='$_POST[email]',
    password ='$_POST[password]',
    phone ='$_POST[phone]',
    address ='$_POST[address]',
    photo = '$filename'
    WHERE id = '$_GET[id]'  ";

if (mysqli_query($conn, $sql)) {
    echo "เเก้ไขเรียบร้อย";
    header("location: member_show.php");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);

?>