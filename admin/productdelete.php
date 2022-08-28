<?php
$id=$_REQUEST['id'];
include('conection.php');
echo $sql="delete from tbl_product where pid='".$id."'";
mysqli_query($con,$sql);
header('location:add_product.php');
?>