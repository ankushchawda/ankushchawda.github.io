         <?php


             if(!isset($_GET['cat']))
             {

             	if(!isset($_GET['band']))
             	{
         
              $query="select * from product";

              $res=mysqli_query($con,$query);  
              
              while($row=mysqli_fetch_array($res))
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
                    <img src='admin/image/$img1'width='350' height='427''>
                    <h4 style='text-align:center; font-size:35px;'>$title</h4><br>
                    <h5 style='text-align:center;font-size:20px;'>price: RS$price</h5>
                  
                   <a href='detail.php?pro_id=$id' style='font-size:35px;'>Details</a><br>
                  
                 <a href='user_ip1.php?add_cart=$id' style='float:right;margin-top:-38px;'>
                  
                    <button>ADD TO CART</button></a> 

                    </div>
                                        


                 ";
              }
            

     }
 }



?>
