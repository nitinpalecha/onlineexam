<?php
      
      include"mysql.php";
      $id=$_GET['f_id'];
      $s="delete from faculty where f_id='$id'";
      mysqli_query($con,$s);
      mysqli_close($con);
      header("Location:display.php");
?>      
