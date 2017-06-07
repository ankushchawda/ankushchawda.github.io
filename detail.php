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

<button type="button" class="btn btn-primary btn-lg btm" style="font-size: 40px"><span class="glyphicon glyphicon-shopping-cart"></span>addcart</button>
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
     	<input type="button" value="shoping_addcart" id="addcart"></div>


     	<div id="wel"><h3>welcome Guest!!</h3></div>
     	</div>
     <div id="database_product">
<?php


if(isset($_GET['pro_id']))
{
     $pro=$_GET['pro_id'];

 $ser="select * from product where product_id ='$pro'";

              $dom=mysqli_query($con,$ser); 

              $y=mysqli_num_rows($dom);

              while($row=mysqli_fetch_array($dom))
              {

              $id=$row['product_id'];
              $title=$row['product_title'];
              $cat=$row['cat_id'];
              $brand=$row['brand_id'];
              $desc=$row['product_desc'];
              $price=$row['product_price'];
              $img1=$row['product_img1'];
              $img2=$row['product_img2'];
              $img3=$row['product_img3'];

                 echo "
                  <div class='main'>
               
                    <img src='admin/image/$img1' id='img1'>
                    <h4 style='text-align:center; font-size:55px;'>$title</h4><br>
                    <h5 style='text-align:center;font-size:60px;'>price: RS$price</h5>

                     <h3 style='margin-left:300px;font-size:50px;'>$desc</h3>
                  
                   <a href='index.php?pro_id=$id' style='font-size:75px;'>GO BACK</a><br>
                  
                 <a href='detail.php?add_cart=$id' style='float:right;margin-top:-38px;font-size:45px;'>
                  
                   <a href='#' style='font-size:43px; float:right;' ><button >ADD TO CART</button></a> 

                    </div>
                                        
                      <div id='main2'>
                    <div id='img3'>
                  <img src='admin/image/$img3'width='450' height='600'>
                  </div>
                  <div id='img2'>
                  <img src='admin/image/$img2'width='450' height='600''>
                     </div>
                     </div>
                  
                 ";
              }
            
}
     
 
?>


     </div>
       



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