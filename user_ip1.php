<?php

$rock=mysqli_connect("localhost","root","","myshop");


function getUserIP()
{
    global $rock;

    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    return $ip;
}


$user_ip = getUserIP();

echo $user_ip; // Output IP address [Ex: 177.87.193.134]
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<h1>welcome addcart</h1>
</body>
</html>
<?php

if(isset($_GET['add_cart']))
{

   $ip_add= getUserIP();

   $p_id= $_GET['add_cart'];

   $query="select * from cart where ip_add='$ip_add' and p_id='$p_id'";

   $res=mysqli_query($rock,$query);

   if(mysqli_num_rows($res)>0)
   {
    echo "data";
   }
    else{

        $q="insert into cart(p_id,ip_add) values('$p_id','1')";

        $run=mysqli_query($rock,$q);
           echo "<script>window.open('index.php','_self')</script>";
    }


}



?>


<?php

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






