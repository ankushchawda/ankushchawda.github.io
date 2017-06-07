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

	
<div id="logo">
<a href="index.php"><img src="images/ro.png"></a>
</div>



<div id="search">
<form method="get" enctype="multipart/from-data">


<input type="text" name="query" id="text" placeholder="!! search here !!">
<input type="submit" name="hit"  class="btn btn-primary btn-lg" style="font-size: 40px" value="search">

<button type="button" class="btn btn-primary btn-lg btm" style="font-size: 40px"><span class="glyphicon glyphicon-shopping-cart"></span>addcart</button>
</form>
</div>




<div id="meun"><ul class="nav nav-pills nav-right " >
		<li class="active"><a href="index.php"><span class="fa fa-home fa-fw"></span>home</a></li>
		<li><a href=""><span class="fa fa-feed fa-fw"></span>items</a></li>
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
include "include/conn.php";

if(isset($_GET['hit']))
{
     $key=$_GET['query'];

 $ser="select * from product where product_keywords like '%$key%'";

              $dom=mysqli_query($con,$ser); 

              $y=mysqli_num_rows($dom);

              if($y==0)
              {
                echo "<h1>no product in this site</h1>";
              
              }
              while($row=mysqli_fetch_array($dom))
              {

              $id=$row['product_id'];
              $title=$row['product_title'];
              $cat=$row['cat_id'];
              $brand=$row['brand_id'];
              $desc=$row['product_desc'];
              $price=$row['product_price'];
              $img1=$row['product_img1'];

                 echo "
                  <div class='db_photo'>
                    <img src='admin/image/$img1'width='350' height='300''>
                    <h4 style='text-align:center; font-size:35px;'>$title</h4><br>
                    <h5 style='text-align:center;font-size:20px;'>price: RS$price</h5>
                  
                   <a href='detail.php?pro_id=$id' style='font-size:35px;'>Details</a><br>
                  
                 <a href='user_ip1.php?add_cart=$id' style='float:right;margin-top:-38px;'>
                  
                    <button>ADD TO CART</button></a> 

                    </div>
                                        


                 ";
              }
            
}
     
 
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