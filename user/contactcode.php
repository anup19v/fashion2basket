<?php
$cname=$_POST['cname'];
$cemail=$_POST['cemail'];
$cmobile=$_POST['cmobile'];
$cmsg=$_POST['cmsg'];

include('conection.php');
$sql="insert into tbl_contact(cname,cemail,cmobile,cmsg) values('".$cname."','".$cemail."','".$cmobile."','".$cmsg."')";

mysqli_query($con,$sql);
header('location:contact.php?msg=1')

?>