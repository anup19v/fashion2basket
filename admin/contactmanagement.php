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
<div class="col-sm-12" style="text-align:center;"><h2>CONTACT MANAGEMENT</h2></div>

<div class="col-sm-12" style="margin-top:3%;margin-bottom:3%;">
<div class="table-responsive">
  <table class="table">
  
  		<tr class="warning">
  <td>S.no</td>
  <td>Name</td>
  <td>Email</td>
  <td>Number</td>
  <td>Message</td>
  <td>Date</td>
  <td>Delete</td>
</tr>
  
  <?php
  include('conection.php');
  $sql="select * from tbl_contact";
$res=mysqli_query($con,$sql);
$i=1;
while($row=mysqli_fetch_array($res))
{
	?>

	
	<tr class="success">
	<td><?php echo $i;?></td>
	 <td><?php echo $row['cname'];?></td>
	  <td><?php echo $row['cemail'];?></td>
	   <td><?php echo $row['cmobile'];?></td>
	    <td><?php echo $row['cmsg'];?></td>
		 <td><?php echo $row['cdate'];?></td>
  
  <td><a href="contactdelete.php?id=<?php echo $row['cid'];?>"><span class="fa fa-trash" style="color:red;"></span></a></td>
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