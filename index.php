<?php
include "include/conn.php";

?>
<!DOCTYPE html>
<html>
<head>
<title>!!filipkart!!</title>
<link rel="stylesheet" type="text/css" href="style/style.css">
<link rel="stylesheet" type="text/css" href="font/css/font-awesome.min.css">
<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
<script src="bootstrap/js/bootstrap.js"></script>
<script src="bootstrap/jquery.js"></script>


</head>
<body>



<div class="navbar  navbar-inverse navbar" id="top">

	
<a href="index.php"><div id="logo"></a>
<a href="index.php"><img src="images/ro.png"></a>
</div>



<div id="search">
<form method="get" action="res.php" enctype="multipart/form-data">

<input type="text" name="query" id="text" placeholder="!! search here !!">
<input type="submit" name="hit"  class="btn btn-primary btn-lg" style="font-size: 40px" value="search">

<button type="button" class="btn btn-primary btn-lg btm" style="font-size: 40px"><span class="glyphicon glyphicon-shopping-cart"><?php include "include/items.php";?>addcart</button></span>
</div>
</form>



<div id="meun"><ul class="nav nav-pills nav-right " >
		<li class="active"><a href="index.php"><span class="fa fa-home fa-fw"></span>home</a></li>
		<li><a href="res.php"><span class="fa fa-feed fa-fw"></span>items</a></li>
		<li><a href=""><span class="fa fa-phone fa-fw"></span>contact</a></li>
		<li><a href=""><span class="fa fa-sign-in fa-fw"></span>login</a></li>
		<li><a href=""><span class="fa fa-gear fa-fw fa-spin"></span>regitertion</a></li>
		<li><a href=""><span class="fa fa-random fa-fw"></span>categories</a></li>
		<li><a href=""><span class="fa fa-book fa-fw "></span>about us</a></li>

	</ul>
	</div>
	
</div><!....all top bar closed...>

<div id="block">
     <div class="headline">
     	<div id="cart">
     	<div id="google">
     	<span class="fa fa-google" style="font-size:40px;color:white;"></span>
     	<span class="fa fa-facebook" style="font-size:40px;color:white;"></span>
     	<span class="fa fa-linkedin" style="font-size:40px;color:white;"></span>
     	<span class="fa fa-google-plus" style="font-size:40px;color:white;"></span>
     	</div>
        <div id="top_cart">
        <b style="margin-left: 1800px;font-size:30px;color: white;">add to cart</b>
     	<span style="font-size:40px;color:red;margin-left: 10px;">items:-NO.<?php include "include/items.php";?> </span></div>


     	<div id="wel"><h3>welcome Guest!!</h3></div>
     	</div> 
     <div id="database_product">
     	
<?php
       include "include/all_product.php";
        include "include/cate_click.php";
          include "include/brand_click.php";
       
        
        
       
?>


     </div>
   <?php    
include "include/user_ip.php";

?>
     </div>
	<div class="dbimg"></div>
	</div>

	<div id="sidebar">
	<h1>CATEGORIES</h1>	
<ol>
<?php
include "include/cate.php";

?>
</ol>
<hr>

	<h1>BRAND</h1>	
<ol>
<?php
include "include/brand.php";
?>	
</ol>
</div>


</body>
</html>