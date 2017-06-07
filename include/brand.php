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
		
		 echo "<li><a href='index.php?band=$band'>$title </a> </li>    ";
		
		}
          }
          ?>
