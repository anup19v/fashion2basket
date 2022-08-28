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








<head>
<?php include('link.php');?>
<style>
#outer
{
	min-height:200px;
	background:white;
}

</style>
</head>
<section>
<?php include('adminheader.php');?>
</section>

<section>
<div class="col-sm-12" id="outer">

<div class="col-sm-12">
<div class="row">
<div class="col-sm-3" style="min-height:200px;background:yellow;border:15px solid white;">
<div class="row">
<a href="#">
<div class="col-sm-12" style="min-height:120px;background:#1a245c;font-size:70px;text-align:center;"><i class="fa fa-th (&#xf00a;)" style="line-height:120px;color:white;"></i></div>
<div class="col-sm-12" style="min-height:50px;background:#1a245c;text-align:center;color:white;line-height:50px;">Dashboard</div>
</a>
</div>
</div>
<div class="col-sm-3" style="min-height:200px;background:red;border:15px solid white;"> 

<div class="row">
<a href="add_category.php">
<div class="col-sm-12" style="min-height:120px;background:#1a245c;font-size:70px;text-align:center;"><i class="fa fa-plus (&#xf067;)" style="line-height:120px;color:white;"></i></div>
<div class="col-sm-12" style="min-height:50px;background:#1a245c;text-align:center;color:white;line-height:50px;"> Add Category </div>
</a>
</div>
 </div>
<div class="col-sm-3" style="min-height:200px;background:green;border:15px solid white;">
<div class="row">
<a href="add_type.php">
<div class="col-sm-12" style="min-height:120px;background:#1a245c;font-size:70px;text-align:center;"><i class="fa fa-plus (&#xf067;))" style="line-height:120px;color:white;"></i></div>
<div class="col-sm-12" style="min-height:50px;background:#1a245c;text-align:center;color:white;line-height:50px;">Add Type</div>
</a>
</div>
  </div>
<div class="col-sm-3" style="min-height:200px;background:grey;border:15px solid white;">

<div class="row">
<a href="add_product.php">
<div class="col-sm-12" style="min-height:120px;background:#1a245c;font-size:70px;text-align:center;"><i class="fa fa-plus (&#xf067;)" style="line-height:120px;color:white;"></i></div>
<div class="col-sm-12" style="min-height:50px;background:#1a245c;text-align:center;color:white;line-height:50px;">Add Product </div>
</a>
</div>
  </div>
</div>
</div>

<div class="col-sm-12">
<div class="row">
<div class="col-sm-3" style="min-height:200px;background:yellow;border:15px solid white;">

<div class="row">
<a href="#">
<div class="col-sm-12" style="min-height:120px;background:#1a245c;font-size:70px;text-align:center;"><i class="fa fa-shopping-cart (&#xf07a;) " style="line-height:120px;color:white;"></i></div>
<div class="col-sm-12" style="min-height:50px;background:#1a245c;text-align:center;color:white;line-height:50px;">View Purchase </div>
</a>
</div>
  </div>
<div class="col-sm-3" style="min-height:200px;background:red;border:15px solid white;"> 

<div class="row">
<a href="#">
<div class="col-sm-12" style="min-height:120px;background:#1a245c;font-size:70px;text-align:center;"><i class="fa fa-th-list (&#xf00b;) " style="line-height:120px;color:white;"></i></div>
<div class="col-sm-12" style="min-height:50px;background:#1a245c;text-align:center;color:white;line-height:50px;"> Product </div>
</a>
</div>
 </div>
<div class="col-sm-3" style="min-height:200px;background:green;border:15px solid white;"> 

<div class="row">
<a href="usermanagement.php">
<div class="col-sm-12" style="min-height:120px;background:#1a245c;font-size:70px;text-align:center;"><i class="fa fa-user" style="line-height:120px;color:white;"></i></div>
<div class="col-sm-12" style="min-height:50px;background:#1a245c;text-align:center;color:white;line-height:50px;">User</div>
</a>
</div>
 </div>
<div class="col-sm-3" style="min-height:200px;background:grey;border:15px solid white;"> 

<div class="row">
<a href="contactmanagement.php">
<div class="col-sm-12" style="min-height:120px;background:#1a245c;font-size:70px;text-align:center;"><i class="fa fa-mobile" style="line-height:120px;color:white;"></i></div>
<div class="col-sm-12" style="min-height:50px;background:#1a245c;text-align:center;color:white;line-height:50px;">Contact</div>
</a>
</div>
 </div>

</div>
</div>
<div class="col-sm-12">
<div class="row">
<div class="col-sm-3" style="min-height:200px;background:yellow;border:15px solid white;"> 

<div class="row">
<a href="#">
<div class="col-sm-12" style="min-height:120px;background:#1a245c;font-size:70px;text-align:center;"><i class="fa fa-unlock" style="line-height:120px;color:white;"></i></div>
<div class="col-sm-12" style="min-height:50px;background:#1a245c;text-align:center;color:white;line-height:50px;"> Change Password </div>
</a>
</div>
 </div>
<div class="col-sm-3" style="min-height:200px;background:red;border:15px solid white;"> 

<div class="row">
<a href="#">
<div class="col-sm-12" style="min-height:120px;background:#1a245c;font-size:70px;text-align:center;"><i class="fa fa-lock" style="line-height:120px;color:white;"></i></div>
<div class="col-sm-12" style="min-height:50px;background:#1a245c;text-align:center;color:white;line-height:50px;"> Logout </div>
</a>
</div>
 </div>
<div class="col-sm-3" style="min-height:200px;background:#white;border:15px solid white;">  

<div class="row">
<a href="add_slider.php">
<div class="col-sm-12" style="min-height:120px;background:#1a245c;font-size:70px;text-align:center;"><i class="fa fa-list" style="line-height:120px;color:white;"></i></div>
<div class="col-sm-12" style="min-height:50px;background:#1a245c;text-align:center;color:white;line-height:50px;"> Slider </div>
</a>
</div>
</div>
<div class="col-sm-3" style="min-height:200px;background:#white;border:15px solid white;">  </div>
</div>
</div>




</div>

</section>
<section>
<?php include('adminfooter.php');?>
</section>