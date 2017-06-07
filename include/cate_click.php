<?php
include "conn.php";
             if(isset($_GET['cat']))
             {

              $cat=$_GET['cat'];
         
              $ram="select * from product where cat_id='$cat'";

              $res_hola=mysqli_query($con,$ram);  
              
              while($row_hola=mysqli_fetch_array($res_hola))
              {

              $id=$row_hola['product_id'];
              $title=$row_hola['product_title'];
              $cat=$row_hola['cat_id'];
              $brand=$row_hola['brand_id'];
              $desc=$row_hola['product_desc'];
              $price=$row_hola['product_price'];
              $img1=$row_hola['product_img1'];

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








