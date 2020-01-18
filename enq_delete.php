<?php
      
      include"mysql.php";
      $id=$_GET['id'];
      echo$id;
      $s="delete from enquiry where id=$id";
      mysqli_query($con,$s);
      mysqli_close($con);
      header("Location:enq.php");
?>      
