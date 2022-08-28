<?php 
error_reporting(0);
session_start();
$email= $_SESSION['user'];
//echo $email;
if($email=="")
{
	header('location:add_slider.php');
}
$msg=$_REQUEST['msg'];
if($msg==1)
{
echo "<script>alert('product addedd successfully...')</script>";	
}
?>
<html>
<head>
<?php include('link.php');?>
</head>

<body>
<section>
<?php include('adminheader.php');?>
</section>
<section>
<div class="col-sm-12">
<div class="col-sm-3"></div>
<div class="col-sm-6" style="background:pink;min-height:300px;">
<div class="col-sm-12" style="min-height:100px;font-size:35px;text-align:center;line-height:100px;">
<b>Add Product</b>
</div>
<div class="col-sm-12" style="min-height:200px;">

<form action="addproductcode.php" method="post" enctype="multipart/form-data" >
<select class="form-control" name="cid">
<?php
include('conection.php');
		
?>

<br/>



<input type="text" class="form-control" name="text" placeholder="product name.."><br/>

<input type="file" name="image" class="form-control"><br/>
<button type="submit" class="btn btn-success btn-lg">SAVE</button> <br><br>
</form>


</div>

</div>
<div class="col-sm-3"></div>
</div>

<div class="col-sm-12" style="margin-top:3%;margin-bottom:3%;">
<div class="table-responsive">
  <table class="table">
  <?php
  $sql="select * from tbl_slider";
$res=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($res))
{
	?>
		<tr class="success">
 
  <td>P name</td>
 
 
  <td>Product Image</td>
 
  <td>Delete</td>
</tr>
	
	<tr class="success">
  <td><?php echo $row['slid'];?></td>
   <td><?php echo $row['text'];?></td>
    <td><?php echo $row['image'];?></td>
	 <td><?php echo $row['date'];?></td>
	 <td></td>
</tr>
	<?php
}
?>
 
  </table>
</div>
</div>

</section>

<section>
<?php include('adminfooter.php');?>
</section>
</body>