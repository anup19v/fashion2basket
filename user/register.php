<?php
error_reporting(0);
$msg=$_REQUEST['msg'];
if($msg==1)
{
	echo "<script>alert('Your Data has been Saved Successfully.');window.location.href='index.php';</script>";
}

?>
<html>
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
		 min-height:700px;
		 background:url('images/a.jpeg');
		 margin-top:20px;
	
		 
	
	 }
	 .btn3
	 {
		  height:45px;
		 width:100px;
	 }
	 
	 </style>
	 <script>
	     $(document).ready(function(){
          $("#cap2").keyup(function(){
          var c1=$("#cap1").val();			  
          var c2=$("#cap2").val();
			if(c1==c2)
			{
				$("button[type=submit]").attr("disabled",false);
				
			}
			else
			{
				$("button[type=submit]").attr("disabled",true);
				
			}
		  })
		 })
		  
	 </script>
     </head>
	 
     <body>
	     <?php include('header.php');?>
		 <section id="about">
		 <div class="col-sm-12 aboutimage">
		Sign Up
		 </div>
		 <div class="col-sm-12 login">
		 <div class="col-sm-12 loginbox">
		 <div class="row">
		 <div class="col-sm-3" style="background:rgba(255,255,255,0.5);min-height:700px;"></div>
		 
		 <div class="col-sm-6" style="background:rgba(135,206,235,0.7);min-height:700px;">
		 
		 <h1 align="center">Register Here <i class="fa fa-user"></i></h1>
		 <div class="col-sm-12">
	     <br/>
		 <form action="registercode.php" method="post" enctype="multipart/form-data">
		 <b>Username</b>
		 <input type="text" class="form-control logininput" placeholder="Username" name="name" maxlength="20" required /><br/></br>
		 <b>Email</b>
		 <input type="email" class="form-control logininput" placeholder="Email" name="email"/ maxlength="15" required ></br></br>
		 <b>Mobile</b>
		 <input type="number" class="form-control logininput" placeholder="M.Number"name="mobile" maxlength="10" required /><br/></br>
		 <b>Password</b>
		 <input type="password" class="form-control logininput" placeholder="Password" name="password" maxlength="8" required /></br></br>
		 <b>Confirm Password</b>
		 <input type="password" class="form-control logininput" placeholder="Confirm Password" name="cpassword" maxlength="8" required /></br></br>
		 <b>Gender</b>
		 <input type="radio" name="gender" /> <b>Male</b>
		 <input type="radio" name="gender"/> <b>Female</b></br></br>
		 <b>Address</b>
		 <input type="textarea" class="form-control logininput" placeholder="Address..." name="address" maxlength="30" required /></br></br>
		 <div class="col-sm-12">
		 <div class="col-sm-6">
		<b> File Upload</b><b><input type="file" name="file" /></b><br/>
		 </div>
		 <div class="col-sm-6" style="margin-top:3%;">
		 <b>
		 <?php
		 $char1=rand(65,90);
		 //echo chr($char1);
		 $a=rand(10,99);
		  // echo $a;
		 $char3=rand(97,122);
		 //echo chr($char3);
		 $char=rand(65,90);
		 //echo chr($char);
		 $char4=rand(97,122);
		 //echo chr($char4);
		 
		 $captcha=chr($char1).$a.chr($char3).chr($char).chr($char4);
		   echo $captcha;
		    ?>
		
			</b>
			
		 <input type="hidden" value="<?php echo $captcha;?>" id="cap1"/>
		
		 <input type="text" value="" id="cap2"/>
		 	 <b>Enter Captcha</b>
		 </div>
		 </div>
		<br/>
<div class="col-sm-12">
<div class="col-sm-9">
		 <button class="btn btn-success" type="submit" disabled="disabled">Submit</button>
		 </div>
		 <div class="col-sm-3">
		 <button class="btn btn-success" type="reset">Reset</button>
		 </div>
		 </div>
</form>
		 </div>
		 </div>
		 <div class="col-sm-3" style="background:rgba(255,255,255,0.5);min-height:700px"></div>
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
	 </html>
