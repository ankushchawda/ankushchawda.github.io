<?php 
include "conn.php";

 ?>
<!DOCTYPE html>
<style type="text/css">

table{
	color:#000080;
	border: 1px solid blue;
}


</style>

<html>

<head>
	<title>insert here</title>
  
</head>
<body>
<form method="post" enctype="multipart/form-data">
	<table border="1" cellpadding="10" align="center" width="500" bgcolor="#00fa9a" color="white">
		<tr>
			<td colspan="2" align="center" bgcolor="#8fbc8f"><h1>!!!   regitration here  !!!</h1></td>
		</tr>

<tr>
	<td align="right" >product_title</td>
	<td><input type="text" name="product_title"></td>
</tr>

<tr>
<td align="right">product_cats</td>
	<td><select name="product_cat">
		<option>select categories</option>
      <?php 

      $query="select * from categories";
          $res=mysqli_query($con,$query);
          $n=mysqli_num_rows($res);
          if($n>0)
          {
            while($row=mysqli_fetch_array($res))
            {

          $cat= $row['cat_id'];
          $title= $row['cat_title'];
    
     echo "<option value='$cat'>$title</option>";
    
    }
          }



         ?>
	

	</select>
	</td>
</tr>

<tr>
<td align="right">product_brand</td>
	<td><select name="product_brand">
		<option>product_brand</option>
		<?php
          $query="select * from brand";
          $res=mysqli_query($con,$query);
          $n=mysqli_num_rows($res);
          if($n>0)
          {
          	while($row=mysqli_fetch_array($res))
          	{

          $band= $row['band_id'];
          $title= $row['brand_title'];
		
		 echo "<option value='$band'>$title </option> ";
		
		}
          }
          ?>
		
		
	</select>
	</td>
</tr>

<tr>
	<td align="right">product_img1</td>
	<td><input type="file" name="product_img1"></td>
</tr>

<tr>
	<td align="right">product_img2</td>
	<td><input type="file" name="product_img2"></td>
</tr>

<tr>
	<td align="right">product_img3</td>
	<td><input type="file" name="product_img3"></td>
</tr>

<tr>
	<td align="right">product_price</td>
	<td><input type="numbar" name="product_price"></td>
</tr>
<tr>
  <td align="right">product_date</td>
  <td><input type="text" name="date"></td>
</tr>

<tr>
  <td align="right">product_status</td>
  <td><input type="text" name="status"></td>
</tr>

<tr>
	<td align="right">product_desc</td>
	<td><textarea cols="70" rows="10" name="product_desc"></textarea></td>
</tr>

<tr>
	<td align="right">product_keywords</td>
	<td><input type="text" name="product_keywords"></td>
</tr>

<tr>

	<td colspan="2" align="center"><input type="submit" name="regiter" value="insert"></td>
</tr>
	</table>
</form>
</body>
</html>
<?php

 if(isset($_POST['regiter']))
{
            $cat=$_POST['product_cat'];
            $brand=$_POST['product_brand'];
            $date=$_POST['date'];
            $title=$_POST['product_title'];
              
             
             $price=$_POST['product_price'];
             $desc=$_POST['product_desc'];
            
             $s='on';
             $keywords=$_POST['product_keywords'];

              $img1= $_FILES['product_img1']['name'];
              $img2= $_FILES['product_img2']['name'];
              $img3= $_FILES['product_img3']['name'];

             $temp1= $_FILES['product_img1']['tmp_name'];
             $temp2= $_FILES['product_img2']['tmp_name'];
             $temp3= $_FILES['product_img3']['tmp_name'];

            if($title=='' or $cat=='' or $brand=='' or $img1=='' or $img2=='' or $img3=='' or $price=='' or $date=='' or $s=='' or $desc=='' or $keywords=='' )
             {
             	echo "<script> alert('please fill all the fields ')</script> ";
             
                exit();
             } 
              else{


           move_uploaded_file($temp1, "image/$img1");

	$query="insert into product(cat_id,brand_id,date,product_title,product_img1,product_img2,product_img3,product_price,product_desc,status,product_keywords) values('$cat','$brand','$date','$title','$img1','$img2','$img3','$price','$desc','$s','$keywords')";

    $res=mysqli_query($con,$query);

    $n=mysqli_affected_rows($con);

    if($n>0)
    {
    	echo "<script> alert('data has been inserted')</script>";
    }
    else
    {
    	echo "<script> alert('data has not been inserted')</script>";
    }

}
}

?>