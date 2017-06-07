<?php
   include "conn.php";

             if(isset($_GET['band']))
             {

              $band=$_GET['band'];
         
              $query="select * from product where brand_id='$band'";

              $result=mysqli_query($con,$query);  
            
              while($cap_hola=mysqli_fetch_array($result))

               {
              

              $id=$cap_hola['product_id'];
              $title=$cap_hola['product_title'];
              $cat=$cap_hola['cat_id'];
              $brand=$cap_hola['brand_id'];
              $desc=$cap_hola['product_desc'];
              $price=$cap_hola['product_price'];
              $img1=$cap_hola['product_img1'];
              
                 echo "
                  <div class='db_photo'>
                    <img src='admin/image/$img1'width='350' height='300''>
                    <h4 style='text-align:center; font-size:35px;'>$title</h4><br>
                    <h5 style='text-align:center;font-size:20px;'>price: RS$price</h5>
                  
                   <a href='details.php?pro_id=$id' style='font-size:35px;'>Details</a><br>
                  
                 <a href='user_ip1.php?add_cart=$id' style='float:right;margin-top:-38px;'>
                  
                    <button>ADD TO CART</button></a> 

                    </div>
                                        


                 ";
              }
            
            
 }

?>
