<?php
$name=$_POST['name'];
//echo $name;
$email=$_POST['email'];
//echo $email
$mobile=$_POST['mobile'];
//echo $mobile;
$gender=$_POST['gender'];
//echo $gender;
$password=$_POST['password'];
//echo $password;
$cpassword=$_POST['cpassword'];
//echo $cpassword;
$address=$_POST['address'];
$image=$_FILES['file']['name'];
$size=$_FILES['file']['size'];
$type=$_FILES['file']['type'];
$tmpname=$_FILES['file']['tmp_name'];
$location="upload/";
include('conection.php');
move_uploaded_file($tmpname,$location.$image);
$sql="insert into tbl_register(name,email,mobile,gender,password,cpassword,address) values('".$name."','".$email."','".$mobile."','".$gender."','".$password."','".$cpassword."','".$address."')";
mysqli_query($con,$sql);
header('location:register.php?msg=1');


?>