<?php

error_reporting(0);
$msg=$_REQUEST['msg'];
if($msg==1)
{
	echo "<script>alert('product buy..');</script>";
}
if($msg==2)
{
	echo "<script>alert('this product already exist into cart..');</script>";
}
if($msg==3)
{
	echo "<script>alert('product added into cart..');</script>";
}

?>
     <head>
     <?php include('link.php');?>
	 <style>
	 .aboutimage
	 {
		 min-height:200px;
		 background:url(images/men.jpg);
		 font-size:40px;
		 line-height:200px;
		 color:black;
	 }
	
	
	 .boxarea
	 {
		 min-height:120px;
		 background:#808080;
	 }
	 .boxarea
	 {
		 min-height:120px;
		 background:#00695c;
	 }
	 .subscribe
	 {
		 color:white;
		 font-size:32px;
		 line-height:120px;
	 }
	 .form-control1
	 {
		 height:45px;
		 margin-top:40px;
	 }
	 .btn1
	 {
		 height:45px;
		 width:100px;
		 margin-top:40px;
	 }
	 .gallery
	 {
		 min-height:600px;
		 margin-top:20px;
	 }
	 .gallerybox
	 {
		 width:250px;
		 height:250px;
	 }
	 .gallery img
	 {
		 width:250px;
		 height:250px;
		 margin-top:20px;
	 }
	 
	 </style>
     </head>
	 
     <body>
	     <?php include('header.php');?>
		 <section id="about">
		 <div class="col-sm-12 aboutimage">
		Pruduct
		 </div>
		<div class="col-sm-12 gallery">
		
	
	
	<?php
	include('conection.php');
	$sql="select * from tbl_product";
	$res=mysqli_query($con,$sql);
	while($row=mysqli_fetch_array($res))
	{
		?>
		
		<div class="col-sm-4">
	   <a href="productdetails.php?pid=<?php echo $row['pid'];?>">
	   <div class="col-sm-12">
	   <img src="../pimage/<?php echo $row['pimage'];?>" style="height:250px;" class="img-responsive"/></div>
	   <div class="col-sm-12" style="text-align:center;">
	   <i style="color:black;"><?php echo $row['pname'];?><br/>
<s style="color:red;"> <?php echo $row['pprice'];?>Rs :</s><br/>
	 <?php
	 $discount=$row['pdiscount'];
	 $pprice=$row['pprice'];
	 //echo $discount,$pprice;
	 $aprice=($pprice*$discount)/100;
	 //echo $aprice;
	 echo $pprice-$aprice;
	 ?> Rs :<br/>
	 </i>
	  
	  </div></a>
	 </div>
		
	
		
		<?php
	}
	?>
	
	
		</div>
		</div>
		
		 <div class="col-sm-12 boxarea">
		   <div class="col-sm-1"></div>
		   <div class="col-sm-2 subscribe text-right">Subscribe</div>
		   <div class="col-sm-6 subscribetextbox"><input type="email" class="form-control form-control1"/></div>
		   <div class="col-sm-3"><input class="btn btn-warning btn1" type="button" value="Send" />
		 </div>
		 </div>
		 </section>
		 <?php include('footer.php');?>
     </body>
	 
