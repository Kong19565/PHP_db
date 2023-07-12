<link rel="stylesheet" href="decorate.css" />
<center>
<?php

include "connect.php";

$sql = "SELECT * FROM tbl_product";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

?>

  <table class="table">
    <th> id </th>
    <th> name </th>
    <th> price </th>
    <th> stock </th>
    <th> description </th>
    <th> Edit </th>
    <th> Delete </th>

    <?php
    while ($row = mysqli_fetch_assoc($result)) {
    ?>
      <tr>
        <td><?php echo "$row[id]"; ?> </td>
        <td><?php echo "$row[name]"; ?> </td>
        <td><?php echo "$row[price]"; ?> </td>
        <td><?php echo "$row[stock]"; ?> </td>
        <td><?php echo "$row[description]"; ?> </td>
        <td><?php echo "<a href='product_edit.php?id=$row[id]'> Edit </a> "; ?> </td>
        <td><?php echo "<a href='product_delete.php?id=$row[id]'> Delete </a> "; ?> </td>
      </tr>

    <?php
    }
    ?>

  </table>

<?php

} else {
  echo "0 results";
}

mysqli_close($conn);

?>
</center>