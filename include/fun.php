<?php

$db=mysqli_connect("localhost","root","","myshop");


function fat()

{
	      global $db;
   
		  $query="select * from categories";
          $res=mysqli_query($db,$query);
          $n=mysqli_num_rows($res);
          if($n>0)
          {
          	while($row=mysqli_fetch_array($res))
          	{

          $cat= $row['cat_id'];
          $title= $row['cat_title'];
		
		 echo "<li><a href='index.php?cat=$cat'>$title </a> </li>";
		
		}
          }


    


}
?>