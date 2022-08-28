<?php
$id=$_REQUEST['id'];
include('conection.php');
echo $sql="delete from tbl_register where rid='".$id."'";
mysqli_query($con,$sql);
header('location:usermanagement.php');
?>