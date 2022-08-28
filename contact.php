<?php
error_reporting(0);



session_start();
$email= $_SESSION['user'];
//echo $email;
if($email=="")
{
	header('location:login.php');
}



$msg=$_REQUEST['msg'];
if($msg==1)
{
	echo "<script>alert('Your Data has been Saved Successfully.');window.location.href='contact.php';</script>";
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
	 .aboutcontent
	 {
		 min-height:400px;
		 background:lightyellow;
	 }
	 .aboutobjective
	 {
		 min-height:350px;
		 background: rgba(250,250,250,0.5);
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
	 .contactform
	 {
		 padding-top:20px;
		 padding-bottom:20px;
		 box-shadow:2px 3px 3px grey;
	 }
	 .contactbox
	 {
		 min-height:300px;
	 }
	 .contactbox p
	 {
		 margin-top:10px;
		 font-size:18px;
	 }
	 .contactbox p i
	 {
		 background:#00695c;
		 height:40px;
		 width:40px;
		 padding-left:3%;
		 line-height:40px;
		 color:white;
	 }
	 
	 </style>
     </head>
	 
     <body>
	     <?php include('header.php');?>
		 <section id="contact">
		 <div class="col-sm-12 aboutimage">
		 Contact Us
		 </div>
		 <div class="col-sm-12 aboutcontent">
		 <div class="col-sm-8">
		 <br/>
		 <div class="col-sm-12 contactform">
		 <form action="contactcode.php" method="post">
		 <h4>Please fillout all the fields...</h4>
		 <div class="col-sm-4">
		 <label>Name</label>
		 <input type="text" class="form-control" name="cname"  maxlength="30" required />
		 </div>
		 <div class="col-sm-4">
		 <label>Email</label>
		 <input type="text" class="form-control" name="cemail" maxlength="20" required />
		 </div>
		 <div class="col-sm-4">
		 <label>Mobile</label>
		 <input type="text" class="form-control" name="cmobile" maxlength="10" required />
		 </div>
		 <div class="col-sm-12">
		 <br/>
		 <label>Message</label>
		 <textarea class="form-control" name="cmsg" maxlength="50" required ></textarea>
		 </div>
		 </div class="col-sm-12">
		 <button class="btn btn-success">Save</button>
		 
		 </form>
		 </div>
		 
		 
		 <div class="col-sm-4 contactbox">
		 <h3>Command Office...</h3>
		 <p>
		 <i class="fa fa-map-marker"></i>
		 Plot 43, sector-5,Vikas Nagar, <br/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lucknow-225288
		 </p>
		 <p>
		 <i class="fa fa-mobile"></i>
		 +91 8303624848
		 </p>
		 <p>
		 <i class="fa fa-envelope"></i> vikashraj@gmail.com
		 </p>
		 </div>
		 </div>
	
		 <div class="col-sm-12 aboutobjective">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d230660.40315778094!2d81.66149669800669!3d25.402507544305!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x398534c9b20bd49f%3A0xa2237856ad4041a!2sPrayagraj%2C+Uttar+Pradesh!5e0!3m2!1sen!2sin!4v1564902282797!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		 </div>
		 <div class="col-sm-12 boxarea">
		   <div class="col-sm-1"></div>
		   <div class="col-sm-2 subscribe text-right">Subscribe</div>
		   <div class="col-sm-6 subscribetextbox"><input type="email" class="form-control form-control1 "/></div>
		   <div class="col-sm-3"><input class="btn btn-warning btn1" type="button" value="Send" />
		 </div>
		 </div>
		 </section>
		 <?php include('footer.php');?>
     </body>
	 </html>
