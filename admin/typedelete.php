<?php
$id=$_REQUEST['id'];
include('conection.php');
echo $sql="delete from tbl_type where atid='".$id."'";
mysqli_query($con,$sql);
header('location:add_type.php');
?>