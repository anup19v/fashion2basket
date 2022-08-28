<?php
session_start();
$email=$_SESSION['user'];
include('../conection.php');
$q="select * from tbl_register where email='".$email."'";
$result=mysqli_query($con,$q);
if($row1=mysqli_fetch_array($result))
{
	$rid= $row1['rid'];
}
$pid=$_REQUEST['pid'];
$sql="insert into tbl_buy(pid,rid,email)values('".$pid."','".$rid."','".$email."')";
mysqli_query($con,$sql);
header('location:product.php?msg=1');
?>