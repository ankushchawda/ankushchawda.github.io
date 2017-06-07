<?php

$ruk=mysqli_connect("localhost","root","","myshop");


function cat()

{
      GLOBAL $ruk;


      $query="select * from categories";
          $res=mysqli_query($ruk,$query);
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
         
