<?php
$slid=$_POST['slid'];

$text=$_POST['text'];

$pimage=$_FILES['file']['name'];
$ptype=$_FILES['file']['type'];
$psize=$_FILES['file']['size'];
$ptmpname=$_FILES['file']['tmp_name'];

echo $pimage;
$location="../slimage/";
move_uploaded_file($ptmpname,$location.$slimage);
include('conection.php');
echo $sql="insert into tbl_slider
(slid,text,pimage,pdate)
values('".$slid."','".$text."','".$pimage."',curdate())";
mysqli_query($con,$sql);
header('location:add_slider.php?msg=1');
?>