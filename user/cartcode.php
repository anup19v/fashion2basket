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
echo $pid,$rid,$email;
$sql="select * from tbl_cart where pid='".$pid."' and rid='".$rid."'";
$res=mysqli_query($con,$sql);
if($row=mysqli_fetch_array($res))
{
	header('location:product.php?msg=2');
}
else
{
$insert="insert into tbl_cart(pid,rid,email)values('".$pid."','".$rid."','".$email."')";
mysqli_query($con,$insert);
header('location:product.php?msg=3');
}
?>