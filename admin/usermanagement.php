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

<div class="col-sm-12" style="margin-top:3%;margin-bottom:3%;">
<div class="table-responsive">
  <table class="table">
  
  		<tr class="warning">
  <td>S.no</td>
  <td>Name</td>
  <td>Email</td>
  <td>Number</td>
  <td>Password</td>
  <td>Gender</td>
  <td>Address</td>
  <td>Picture</td>
  <td>Date</td>
  <td>Delete</td>
</tr>
  
  <?php
  include('conection.php');
  $sql="select * from tbl_register";
$res=mysqli_query($con,$sql);
$i=1;
while($row=mysqli_fetch_array($res))
{
	?>

	
	<tr class="success">
	<td><?php echo $i;?></td>
	 <td><?php echo $row['name'];?></td>
	  <td><?php echo $row['email'];?></td>
	   <td><?php echo $row['mobile'];?></td>
	    <td><?php echo $row['password'];?></td>
		 <td><?php echo $row['gender'];?></td>
		  <td><?php echo $row['address'];?></td>
		   <td><?php echo $row['pic'];?></td>
		    <td><?php echo $row['date'];?></td>
  
  <td><a href="userdelete.php?id=<?php echo $row['rid'];?>"><span class="fa fa-trash" style="color:red;"></span></a></td>
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