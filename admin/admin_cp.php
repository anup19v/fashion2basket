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
if($msg==2)
{
echo "<script>alert('old password match to the new password...')</script>";		
}
if($msg==3)
{
echo "<script>alert('new password not match to confirm password...')</script>";		
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
<div class="col-sm-12">
<div class="col-sm-3"></div>
<div class="col-sm-6" style="background:pink;min-height:300px;margin-top:3%;margin-bottom:3%;">
<div class="col-sm-12" style="min-height:100px;font-size:35px;text-align:center;line-height:100px;">
<b>CHANGE PASSWORD</b>
</div>
<div class="col-sm-12" style="min-height:200px;">

<form action="admin_cpcode.php" method="post">
<input type="password" class="form-control" name="op" placeholder="old password.."><br/>
<input type="password" class="form-control" name="np" placeholder="new password.."><br/>
<input type="password" class="form-control" name="cp" placeholder="confirm password.."><br/>
<button type="submit" class="btn btn-success btn-lg">Change Password</button> <br><br>
</form>


</div>

</div>
<div class="col-sm-3"></div>
</div>



</section>

<section>
<?php include('adminfooter.php');?>
</section>
</body>