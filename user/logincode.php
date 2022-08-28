<?php
$email=$_POST['email'];
$pass=$_POST['password'];
echo $email,$pass;
include('conection.php');
$sql="select * from tbl_register where email='".$email."' and password='".$pass."'";
$res=mysqli_query($con,$sql);
if($row=mysqli_fetch_array($res))
{
	$_SESSION['user']=$email;
	header('location:user/userdashboard.php');
}
else
{
	header('location:login.php?msg=1');
}
?> 