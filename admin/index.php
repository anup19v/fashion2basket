<html>
     <head>
     <?php include('link.php');?>
	 <style>
	 .box
	 {
		 background:rgba(242,242,242,0.5);
		 min-height:500px;
		 margin-top:100px;
		 box-shadow:2px 2px 2px grey;
	 }
	 .box_header
	 {
		 background:green;
		 min-height:80px;
		text-align:center;
         font-size:40px;
         color:white;
        line-height:80px;		 
	 }
	 .box_contant
	 {
		 min-height:420px;
		 color:black;
	 }
	 </style>
     </head>
	 
     <body>
	 
	    <div class="col-sm-12">
		
		<div class="col-sm-4"></div>
		<div class="col-sm-4 box">
		<div class="row">
		<form action="admincode.php" method="post">
		
		<div class="col-sm-12 box_header">Admin Login <i class="fa fa-lock"></i></div>
		<div class="col-sm-12 box_contant">
		<br/>
		<br/>
		<div class="input-group input-group-lg">
		<span class="input-group-addon" id="sizing-addon1">
		<i class="fa fa-user"></i>
		</span>
		<input type=".text" class="form-control" name="email" placeholder="Username" aria-describedy="sizing-addon1">
		</div>
		<br/>
		<br/>
		<div class="input-group input-group-lg">
		<span class="input-group-addon" id="sizing-addon1">
		<i class="fa fa-lock"></i>
		</span>
		<input type="text" class="form-control" name="password" placeholder="Password" aria-describedy="sizing-addon1">
		</div>
		<br/>
		<div class="input-group input-group-lg">
		<button class="btn btn-success">
		<i class="fa fa-check"></i>Login</button>
		</div>
		<br/>
		    <p style="text-align:center;">
			
			<a href="../"><i class="fa fa-hand-o-left"></i> Back To Home Page</a>
			</p>
			
		
		</div>
		</form>
		</div>
		</div>
		<div class="col-sm-4"></div>
		</div>
		
     </body>
	 
</html>