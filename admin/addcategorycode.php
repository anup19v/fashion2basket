<?php
$email=$_POST['acategory'];
//echo $email;
include('conection.php');
$sql="insert into tbl_addcategory(acategory)values('".$email."')";
$p=mysqli_query($con,$sql);
echo $p;
header('location:add_category.php?msg=1');
?>