<?php
error_reporting(0);
$msg=$_REQUEST['msg'];
//echo $msg;
if($msg==1)
{
	echo "<script>alert('Invalid username and Password');</script>";
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
	 .login
	 {
		 min-height:300px;
		
	 }
	 .loginbox
	 {
		 min-height:300px;
		 background:url('images/1.jpg');
		 margin-top:20px;
		 margin-bottom:10px;
		 
	
	 }
	 
	 </style>
     </head>
	 
     <body>
	     <?php include('header.php');?>
		 <section id="about">
		 <div class="col-sm-12 aboutimage">
		Log In
		 </div>
		 <div class="col-sm-12 login">
		 <div class="col-sm-12 loginbox">
		 <div class="row">
		 <div class="col-sm-3" style="background:rgba(255,255,255,1);min-height:350px;">
		 </div>
		 <div class="col-sm-6" style="background:rgba(250,250,250,0.9);min-height:350px;">
		 <form action="logincode.php" method="post">
		 <h1 align="center">Login Here <i class="fa fa-lock"></i></h1>
		 <div class="col-sm-12">
	     <br/>
		 <input type="text" name="email" class="form-control logininput" placeholder="Enter Username" maxlength="20" required/><br/></br>
		 <input type="password" name="password" class="form-control logininput" placeholder="Enter Password" maxlength="8" required/></br></br>
		 <button type="submit" class="btn btn-success">Login</button>
		 <a href="#" style="float:right">Forget Password?</a>
		 </div>
		 </form>
		 </div>
		 <div class="col-sm-3" style="background:rgba(255,255,255,1);min-height:350px"></div>
		 </div>
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
	 
