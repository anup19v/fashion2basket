 <?php
 error_reporting(0);
session_start();
$email=$_SESSION['user'];
if($email=="")
{
	header('location:../login.php');
}
include('conection.php');
$sql="select * from tbl_register where email='".$email."'";
$res=mysqli_query($con,$sql);
if($row=mysqli_fetch_array($res))
{
	
}
 ?>
 <section id="header">
	
	 <div class="col-sm-12 header_bottom">
	 <div class="col-sm-3" style="font-size:30px;">
     <span style="color:red;">In</span><span style="color:blue;">dia</span><i style="color:red; font-family:times new roman; font-size:38px;">2</i><span style="color:blue;">Fash</span><span style="color:red;">ion</span>
	 </div>
	 <div class="col-sm-8 header_bottom_search">
     
	<div class="col-lg-10">
    <div class="input-group">
      <input type="text" class="form-control" placeholder="Search for...">
      <span class="input-group-btn">
         <button class="btn btn-default" type="button"> Search</button>
      </span>
    </div><!-- /input-group -->
  </div><!-- /.col-lg-6 -->
	 
	 </div>
	
	 <div class="col-sm-1 header_bottom_icon"><a href="allcart.php" style="color:white;"> <i class="fa fa-shopping-cart (&#xf07a;)"></i></a></div>
      

	
	 </div>
	 <div class="col-sm-12 header_down">
	 <div class="col-sm-12 header_down_menu">
	 
	    <nav class="navbar navbar-default" style="border:none;background:transparent;box-shadow:none;">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
  
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <ul class="nav navbar-nav navbar-left">
        <li><a id="h" href="index.php" style="color:white;"><span class="fa fa-home"></span> HOME</a></li>
        <li><a id="h" href="about.php" style="color:white;">ABOUTUS</a></li>
        <li><a id="h" href="product.php" style="color:white;">PRODUCT</a></li>
      </ul>
	  <ul class="nav navbar-nav  navbar-right">
		  <li class="dropdown" >
          <a href="#" style="text-decoration:none;color:white;" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">MY ACCOUNT <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="allorders.php">My Order</a></li>
            <li><a href="#">My wishlist</a></li>
            <li><a href="user_cp.php">Change password</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </li>
		<li style="color:red;font-weight:bold"><a href="#" style="text-decoration:none;color:red;background:white;padding:5px 10px;margin-top:12%;">Hi <?php //echo $row['name'];?>, user</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

	 
	 </div>
	 <div class="col-sm-5"></div>
	 <div class="col-sm-1"></div>
	 </div>
 </section>