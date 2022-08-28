<?php
$nid=$_REQUEST['id'];
echo $nid;
include('conection.php');
$sql="delete from tbl_addcategory where acid='".$nid."'";
mysqli_query($con,$sql);

header('location:add_category.php');

?>