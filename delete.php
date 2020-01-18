<?php
 include"mysql.php";
      if(isset($_GET["id"]))
	  {
		  
		  $e_id=$_GET["id"];
		  $q_num=$_GET["q_nu"];
		  $sub=$_GET["sub"];
		  $s="delete from qus_bank where e_id='$e_id' and q_no='$q_num'";
          mysqli_query($con,$s);
		  mysqli_close($con);
		  header("location:c.php?sub=".$sub);
	  } 		  
?>