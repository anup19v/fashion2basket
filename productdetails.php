<?php
$pid=$_REQUEST['pid'];
include('conection.php');
$query="select * from tbl_product where pid='".$pid."'";
$res=mysqli_query($con,$query);
If($row=mysqli_fetch_array($res))
{
	
}

?>
<html>
     <head>
     <?php include('link.php');?>
     </head>
	 
     <body>
	     <?php include('header.php');?>
		 
		 
		 
		 <div class="col-sm-12" style="margin-top:3%;margin-bottom:3%;">
		 <div class="col-sm-1"></div>
		 <div class="col-sm-5">
		 <img src="pimage/<?php echo $row['pimage'];?>" style="min-height:500px;" class="form-control">
		 </div><div class="col-sm-1"></div>
		 <div class="col-sm-4">
		 <span style="color:red;font-size:25px;font-weight:bold;font-family:calibri;">
		 <?php echo $row['pname'];?></span><br/>
		 <span style="color:gray;font-size:16px;font-weight:bold;font-family:calibri;">Model :
		 <?php echo $row['pmodel'];?></span><br/>
		 <span style="color:gray;font-size:16px;font-weight:bold;font-family:calibri;">PRICE :
		 <?php echo $row['pprice'];?>Rs</span><br/>
		  <span style="color:gray;font-size:16px;font-weight:bold;font-family:calibri;">MRP :
		 <?php echo $row['pmrp'];?>Rs</span><br/>
		  <span style="color:gray;font-size:16px;font-weight:bold;font-family:calibri;">SIZE :
		 <?php echo $row['psize'];?></span><br/>
		  <span style="color:gray;font-size:16px;font-weight:bold;font-family:calibri;">COLOR :
		 <?php echo $row['pcolor'];?></span><br/>
		 <span style="color:gray;font-size:16px;font-weight:bold;font-family:calibri;">QUANTITY :
		 <?php echo $row['pquantity'];?></span><br/><br/>
		 <span style="color:gray;font-size:16px;font-weight:bold;font-family:calibri;">ADD TO WISHLIST :
		 <span class="fa fa-heart" style="color:red;"></span></span><br/>
		 <br/>
		  <span style="color:gray;font-size:16px;font-weight:bold;font-family:calibri;">DESCRIPTION :
		 <?php echo $row['pdescripition'];?></span><br/><br/>
		 <button type="submit" class="btn btn-danger">Buy Now</button>
		 <button type="submit" class="btn btn-success">Add to cart</button>
		 </div>
		 <div class="col-sm-1"></div>
		 </div>
		 
		 
		 <?php include('footer.php');?>
		 
     </body>
	 
</html>