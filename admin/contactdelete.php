<?php
$id=$_REQUEST['id'];
include('conection.php');
echo $sql="delete from tbl_contact where cid='".$id."'";
mysqli_query($con,$sql);
header('location:contactmanagement.php');
?>