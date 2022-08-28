<?php
session_start();
$email=$_POST['email'];
$password=$_POST['password'];
//echo $email,$password;


include('../conection.php');

$query="select * from tbl_admin where email='".$email."' and password='".$password."'";
$res=mysqli_query($con,$query);
If($row=mysqli_fetch_array($res))
{
	$_SESSION['user']=$email;
	header('location:dashboard.php');
}
else
{
	header('location:index.php');
}

?>