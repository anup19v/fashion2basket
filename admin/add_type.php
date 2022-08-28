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
echo "<script>alert('Type addedd successfully...')</script>";	
}
?>



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


<section>
<?php include('adminheader.php');?>
</section>

<section>


     
   
	
	 </style>
     </head>
	 
     <body>
	    <div class="col-sm-12">
		
		<div class="col-sm-4"></div>
		<div class="col-sm-4 box">
		<div class="row">
		<form action="addtypecode.php" method="post" enctype="multipart/form-data">
		
		<div class="col-sm-12 box_header">Add Type <i class="fa fa-plus"></i></div>
		<div class="col-sm-12 box_contant" style="padding-bottom:3%;">
		<br/>
		<br/>
	
		<select  class="form-control" name="category">
		<option>--Chose Category</option>
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
		<br/>
		<div class="input-group input-group-lg">
		<span class="input-group-addon" id="sizing-addon1">
		<i>Type</i>
		</span>
		<input type="text" class="form-control" name="type" placeholder="Add Type" aria-describedy="sizing-addon1">
		</div>
		<br/>
		<div class="input-group input-group-lg">
		<button class="btn btn-success" type="submit" style="margin-left:200%;">
		<i class="fa fa-check"></i>Submit</button>
		</div>
		
			
		
		</div>
		</form>
		</div>
		</div>
		<div class="col-sm-4"></div>
		</div>
   <div class="col-sm-12" style="min-height:200px;margin-top:4%;">
		
		
		
		
		<?php
		include('conection.php');
		$res="select * from tbl_type";
		$result=mysqli_query($con,$res);
		
		
			?>
			<div class="table-responsive">
			<table class="table" border="1px">
		<tr style="color:white;background:black;width:100%;">
		<th>S.No</th>
		<td>Type</td>
		<td>Date</td>
		<td>Edit/Delete</td>
		</tr>
			
			
		
		
		<?php	
		while($row=mysqli_fetch_array($result))
		{
		
		?>
		<tr class="success">
		<td><?php echo $row['atid']; ?></td>
		<td><?php echo $row['addtype'];?></td>
		<td><?php echo $row['date'];?></td>
		<td><a href="typedelete.php?id=<?php echo $row['atid'];?>"><span class="fa fa-trash" style="color:red;"></span></a></td>
		</tr>
		<?php
		}
		?>
		</div>
		</table>
		</div>


</section>
<div class="col-sm-12" style="min-height:50px;"></div>

<section>
<?php include('adminfooter.php');?>
</section>