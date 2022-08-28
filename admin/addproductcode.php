<?php
$cid=$_POST['cid'];
$tid=$_POST['tid'];
$pname=$_POST['ppname'];
$pmodel=$_POST['pmodel'];
$pprice=$_POST['pprice'];
$pmrp=$_POST['pmrp'];
$pdiscount=$_POST['pdiscount'];
$pcolor=$_POST['pcolor'];
$psize=$_POST['psize'];
$pimage=$_FILES['file']['name'];
$ptype=$_FILES['file']['type'];
$psize=$_FILES['file']['size'];
$ptmpname=$_FILES['file']['tmp_name'];
$pdesc=$_POST['pdesc'];
$pqty=$_POST['pqty'];
echo $pimage;
$location="../pimage/";
move_uploaded_file($ptmpname,$location.$pimage);
include('conection.php');
echo $sql="insert into tbl_product
(acid,atid,pname,pmodel,pprice,pmrp,pdiscount,pcolor,psize,pdescripition,pquantity,pimage,pdate)
values('".$cid."','".$tid."','".$pname."','".$pmodel."','".$pprice."','".$pmrp."',
'".$pdiscount."','".$pcolor."','".$psize."','".$pdesc."','".$pqty."','".$pimage."',curdate())";
mysqli_query($con,$sql);
header('location:add_product.php?msg=1');
?>