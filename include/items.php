<?php
$rock=mysqli_connect("localhost","root","","myshop");


if(isset($_GET['add_cart']))
{
  
  $query="select * from cart where ip_add='1'";

  $res=mysqli_query($rock,$query);

  $add=mysqli_num_rows($res);

}
else{

     $query="select * from cart where ip_add='1'";

  $res=mysqli_query($rock,$query);

  $add=mysqli_num_rows($res);

}

 echo $add;



?>
