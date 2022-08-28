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
	 <style>
	 .box
	 {
		 background:rgba(242,242,242,0.5);
		 min-height:500px;
		 margin-top:100px;
		 box-shadow:2px 2px 2px grey;
	 }
	 .box_header
	 {
		 background:green;
		 min-height:80px;
		text-align:center;
         font-size:40px;
         color:white;
        line-height:80px;		 
	 }
	 .box_contant
	 {
		 min-height:420px;
		 color:black;
	 }
	 </style>
     </head>
	 
     <body>
	 <section>
	 <?php include('adminheader.php');?>
	 </section>
	 <section>
	    <div class="col-sm-12">
		
		<div class="col-sm-4"></div>
		<div class="col-sm-4 box">
		<div class="row">
		<form action="addcategorycode.php" method="post">
		
		<div class="col-sm-12 box_header">Add Category <i class="fa fa-plus"></i></div>
		<div class="col-sm-12 box_contant" style="padding-bottom:3%;">
		<br/>
		<br/>
		<div class="input-group input-group-lg">
		<span class="input-group-addon" id="sizing-addon1">
		<i class="fa fa-plus"></i>
		</span>
		<input type="text" class="form-control" name="acategory" placeholder="Add Category" aria-describedy="sizing-addon1">
		</div>
		<br/>
		<br/>
	
		<div class="input-group input-group-lg">
		<span style="margin-left:200%;">
		<button class="btn btn-success" type="submit">
		<i class="fa fa-check"></i>Save</button>
		<span>
		</div>
		
			
		
		</div>
		</form>
		</div>
		</div>
		<div class="col-sm-4"></div>
		</div>
		<div class="col-sm-12" style="min-height:100px;"></div>
		<div class="col-sm-12" style="background:lightgrey;min-height:200px;">
		
		
		
		
		<?php
		include('conection.php');
		$res="select * from tbl_addcategory";
		$result=mysqli_query($con,$res);
		
		
			?>
			<div class="table-responsive">
			<table class="table" border="1px">
		<tr style="color:white;background:black;width:100%;">
		<th>S.No</th>
		<td>Notification</td>
		<td>Date</td>
		<td>Edit/Delete</td>
		</tr>
			
			
		
		
		<?php	
		while($row=mysqli_fetch_array($result))
		{
		
		?>
		<tr class="success">
		<td><?php echo $row['acid']; ?></td>
		<td><?php echo $row['acategory'];?></td>
		<td><?php echo $row['acdate'];?></td>
		<td><a href="categorydell.php?id=<?php echo $row['acid'];?>"><span class="fa fa-trash" style="color:red;"></span></a></td>
		</tr>
		<?php
		}
		?>
		</div>
		</table>
		</div>
		</section>
		 <section>
	 <?php include('adminfooter.php');?>
	 </section>
     </body>	
	 
</html>