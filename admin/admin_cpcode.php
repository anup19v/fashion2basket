<?php
session_start();
$email=$_SESSION['user'];
echo $email;
$op=$_POST['op'];
$np=$_POST['np'];
$cp=$_POST['cp'];
include('conection.php');
$sql="select * from tbl_admin where email='".$email."'";
$res=mysqli_query($con,$sql);
if($row=mysqli_fetch_array($res))
{
	//echo $row['password'];
	if($op!=$np)
	{
		if($np==$cp)
		{
			$update="update tbl_admin set password='".$np."' where email='".$email."'";
			mysqli_query($con,$update);
			header('location:index.php');
			
		}
		else
		{
			header('location:admin_cp.php?msg=3');
			
		}
		
	}
	else
	{
		
		header('location:admin_cp.php?msg=2');
	}
}



?>