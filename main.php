 <section id="main">
	 <div class="col-sm-9" style="margin-top:1%;">
	 
	 <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/13.jpg" style="height:350px;width:100%;" alt="...">
      <div class="carousel-caption">
        <i style="font-size:80px;color:red;">Get 50% Off</i>
      </div>
    </div>
    <div class="item">
      <img src="images/14.jpg" style="height:350px;width:100%;" alt="...">
      <div class="carousel-caption">
          <i style="font-size:80px;color:red;">Buy 1 Get 1 Free</i>
      </div>
    </div>
	<div class="item">
      <img src="images/15.jpg" style="height:350px;width:100%;" alt="...">
      <div class="carousel-caption">
          <i style="font-size:80px;color:red;">Shop Now</i>
      </div>
    </div>
    
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
	 
	 </div>
	 <div class="col-sm-3">
	 <div class="col-sm-12" style="min-height:80px;box-shadow:1px 1px 5px lightgrey;text-align:center;line-height:80px;margin-top:5%;font-size:20px;">HOT DEALS</div>
	 <div class="col-sm-12" style="min-height:80px;box-shadow:1px 1px 5px lightgrey;text-align:center;line-height:80px;margin-top:15%;font-size:20px;">SPECIAL DEALS</div>
	 <div class="col-sm-12" style="min-height:80px;box-shadow:1px 1px 5px lightgrey;text-align:center;line-height:80px;margin-top:15%;font-size:20px;">SPECIAL OFFER</div>
	 </div>
	 <div class="col-sm-12" style="min-height:40px;">
	 <div class="col-sm-3" style="font-size:30px;line-height:40px;background:#1a245c;text-align:center;color:white;">Notification</div>
	 <div class="col-sm-9" style="font-size:20px;line-height:40px;"><marquee><img src="images/new.png" style="height:50px;width:70px;"/>Every sunday special offer Shop Now &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Shop for every one and  win exiting Product</marquee></div>
	 </div>
	 <div class="col-sm-12">
	 <div class="col-sm-9">
	 <div class="col-sm-6" id="men">
	  <div class="col-sm-12">
	 <a href="#"><img src="images/men.jpg" style="width:100%;"/></a>
	 </div>
	 </div>
	 <div class="col-sm-6" id="women">
	  <div class="col-sm-12">
	 <a href="#"><img src="images/women.jpg" style="width:100%;"/></a>
	 </div>
	 </div>
	 </div>
	 <div class="col-sm-3">
	 <div class="col-sm-12" style="min-height:100px;box-shadow:1px 1px 5px lightgrey;text-align:center;line-height:80px;margin-top:15%;font-size:20px;margin-left:3%;">NEWS LETTERS</div>
	 </div>
	 </div>
	  <div class="col-sm-12" style="min-height:80px; font-size:30px; line-height:80px;">New Product</div>
	 <div class="col-sm-12">
	 
	<?php
	include('conection.php');
	$sql="select * from tbl_product";
	$res=mysqli_query($con,$sql);
	while($row=mysqli_fetch_array($res))
	{
		?>
		
		<div class="col-sm-3">
	   <a href="productdetails.php?pid=<?php echo $row['pid'];?>">
	   <div class="col-sm-12">
	   <img src="pimage/<?php echo $row['pimage'];?>" style="height:250px;" class="img-responsive"/></div>
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
	 <div class="col-sm-12" style="min-height:40px;"></div>
	 
	      </section>