<?php
$category=$_POST['category'];
echo $category;
$type=$_POST['type'];
echo $type;
include('conection.php');
$sql="insert into tbl_type(acid,addtype)values('".$category."','".$type."')";
mysqli_query($con,$sql);
header('location:add_type.php?msg=1');
?>