<?php 
error_reporting(0);
session_start();
$email= $_SESSION['user'];
//echo $email;
if($email=="")
{
	header('location:index.php');
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
		$sql="select * from tbl_addcategory";
		$res=mysqli_query($con,$sql);
		while($row=mysqli_fetch_array($res))
		{
	?>
	<option value="<?php echo $row['acid'];?>"><?php echo $row['acategory'];?></option>
	<?php
}
?>
</select>
<br/>
<select class="form-control" name="tid">
<?php
include('conection.php');
$sql="select * from tbl_type";
$res=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($res))
{
	?>
	<option value="<?php echo $row['atid'];?>"><?php echo $row['addtype'];?></option>
	<?php
}
?>
</select>
<br/>



<input type="text" class="form-control" name="ppname" required placeholder="product name.."><br/>
<input type="text" class="form-control" name="pmodel" required placeholder="product model.."><br/>
<input type="number" class="form-control" name="pprice" required placeholder="product price.."><br/>
<input type="text" class="form-control" name="pmrp" required placeholder="product mrp.."><br/>
<input type="text" class="form-control" name="pdiscount" required placeholder="product discount.."><br/>
<input type="text" class="form-control" name="psize" required placeholder="product size.."><br/>
<input type="text" class="form-control" name="pcolor" required placeholder="product color.."><br/>
<textarea class="form-control" name="pdesc" required ></textarea><br/>
<input type="text" class="form-control" name="pqty" required placeholder="Quntity..." /><br>
<input type="file" name="file" class="form-control" required ><br/>
<button type="submit" class="btn btn-success btn-lg">SAVE</button> <br><br>
</form>


</div>

</div>
<div class="col-sm-3"></div>
</div>

<div class="col-sm-12" style="margin-top:3%;margin-bottom:3%;">
<div class="table-responsive">
  <table class="table">
  
  		<tr class="warning">
  <td>S.no</td>
  <td>P name</td>
  <td>P model</td>
  <td>P price</td>
  <td>P mrp</td>
  <td>P size</td>
  <td>P color</td>
  <td>P descripition</td>
  <td>Product Image</td>
  <td>P quantity</td>
  <td>P discount</td>
  <td>P date</td>
  <td>Delete</td>
</tr>
  
  <?php
  $sql="select * from tbl_product";
$res=mysqli_query($con,$sql);
$i=1;
while($row=mysqli_fetch_array($res))
{
	?>

	
	<tr class="success">
	<td><?php echo $i;?></td>
	 <td><?php echo $row['pname'];?></td>
	  <td><?php echo $row['pmodel'];?></td>
	   <td><?php echo $row['pprice'];?></td>
	    <td><?php echo $row['pmrp'];?></td>
		 <td><?php echo $row['psize'];?></td>
		  <td><?php echo $row['pcolor'];?></td>
		   <td><?php echo $row['pdescripition'];?></td>
		    <td><?php echo $row['pimage'];?></td>
			 <td><?php echo $row['pquantity'];?></td>
			  <td><?php echo $row['pdiscount'];?></td>
			   <td><?php echo $row['pdate'];?></td>
  
  <td><a href="productdelete.php?id=<?php echo $row['pid'];?>"><span class="fa fa-trash" style="color:red;"></span></a></td>
</tr>
	<?php
	$i++;
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