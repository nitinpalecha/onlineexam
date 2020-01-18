<?php
      
      include"mysql.php";
      $id=$_GET['id'];
      echo$id;
      $s="delete from result where result_id=$id";
      mysqli_query($con,$s);
      mysqli_close($con);
      header("Location:s_result.php");
?>      
