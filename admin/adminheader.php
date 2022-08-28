 
 
 <head>
 <?php include('link.php');?>
 <style>
 #box
 {
	 min-height:120px;
	 background:pink;
 }
#h:hover
{
	box-shadow:2px 2px 2px black;
	background:grey;
	border-radius:15px 0px 15px 0px;
}
 </style>
 </head>

 <section>
	<div class="col-sm-12" id="box">
	<div class="row">
	<div class="col-sm-12" style="background:white;min-height:50px;font-size:35px;">
	<div class="col-sm-3">
	 <span style="color:red;">In</span><span style="color:blue;">dia</span><i style="color:red; font-family:times new roman; font-size:38px;">2</i><span style="color:blue;">Fash</span><span style="color:red;">ion</span>
	</div>
	<div class="col-sm-9" align="right">
	
	<a href="#"><span class="fa fa-user" style="margin-right:5%;margin-top:1%;"></span></a>
	
	</div>
	</div>
	<div class="col-sm-12" style="background:#1a245c;min-height:70px;">
	<div class="col-sm-9" style="margin-top:0.5%;">
	
	<nav class="navbar navbar-default" style="background:none;box-shadow:none;border:none;margin-left:-5%;">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
       
        <li><a id="h" href="dashboard.php" style="color:white;font-size:15px;">Dashboard</a></li>
        <li><a id="h" href="add_category.php" style="color:white;font-size:15px;">Add Category </a></li>
        <li><a id="h" href="add_type.php" style="color:white;font-size:15px;">Add Type</a></li>
        <li><a id="h" href="add_product.php" style="color:white;font-size:15px;">Add Product</a></li>
        <li><a id="h" href="admin_cp.php" style="color:white;font-size:15px;">Change Password</a></li>
        <li><a id="h" href="logout.php" style="color:white;font-size:15px;">Logout</a></li>
        <li class="dropdown">
          <a href="#" id="h" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"  style="color:white;font-size:15px;">.Management  <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#" style="color:white;font-size:15px;background:#1a245c;">View Purchase </a></li>
            <li><a href="usermanagement.php" style="color:white;font-size:15px;background:#1a245c;">User</a></li>
            <li><a href="contactmanagement.php" style="color:white;font-size:15px;background:#1a245c;">Contact</a></li>

            
          </ul>
        </li>
      </ul>
     
    
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
	
	</div>
	<div class="col-sm-3" ></div>
	</div>
	 </div>
	 </div>
	
 </section>
