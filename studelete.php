<?php
      
      include"mysql.php";
      $id=$_GET['sid'];
      $s="delete from student_reg where s_id=$id";
      mysqli_query($con,$s);
      mysqli_close($con);
      header("Location:stu_display.php");
?>      
