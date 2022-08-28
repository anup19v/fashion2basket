<?php
session_start();
$email=$_SESSION['user'];
include('../conection.php');
$q="select * from tbl_register where email='".$email."'";
$result=mysqli_query($con,$q);
if($row1=mysqli_fetch_array($result))
{
	$rid=$row1['rid'];;
}


?>
<html>
     <head>
     <?php include('link.php');?>
     </head>
	 
     <body>
	     <?php include('header.php');?>
		 
		 
		 
		 <div class="col-sm-12" style="margin-top:3%;margin-bottom:3%;">
		 <div class="table-responsive">
		 <table class="table">
		 <tr class="info">
		 <td>S.no</td>
		 <td>Product Name</td>
		 <td>Product Image</td>
		 <td>Price</td>
		 <td>MRP</td>
		 <td>Color</td>
		 <td>Date</td>
		 </tr>
		 <?php
		 $sql1="select * from tbl_cart where rid='".$rid."'";
		 $res1=mysqli_query($con,$sql1);
		  $i=1;
		 while($row2=mysqli_fetch_array($res1))
		 {
			 $pid=$row2['pid'];
			 $sql2="select * from tbl_product where pid='".$pid."'";
			 $res2=mysqli_query($con,$sql2);
			
			 while($row3=mysqli_fetch_array($res2))
			 {
				?>
				<tr>
				<td><?php echo $i?></td>
				<td><?php echo $row3['pname']?></td>
				<td><img src="../pimage/<?php echo $row3['pimage']?>" style="height:200px;width:200px;"></td>
				<td><?php echo $row3['pprice']?></td>
				<td><?php echo $row3['pmrp']?></td>
				<td><?php echo $row3['pcolor']?></td>
				<td><?php echo $row3['pdate']?></td>
				</tr>
				<?php
				$i++;
			 }
			 
		 }
		 
		 ?>
		 </table>
		 </div>
		 </div>
		 
		 
		 <?php include('footer.php');?>
		 
     </body>
	 
</html>