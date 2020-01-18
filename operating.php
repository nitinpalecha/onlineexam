<?php
  session_start();
      if($_SESSION['u_id']==true)
      {	
      include"amity.php";
      include"faculty.php";
      include"mysql.php";
      $a="103";
	  $s="select * from qus_bank where e_id='$a'";
	  $rs=mysqli_query($con,$s);
	  echo "<div class=ab>";
	  echo"<table cellpadding=15 align=center>";
	  while($r=mysqli_fetch_array($rs))
	  {
		  echo"<b>".$r[2];
		  echo"<b>".$r[3];
		  echo"<br><b>A.".$r[4];
		  echo"<br><b>B.".$r[5];
		  echo"<br><b>C.".$r[6];
		  echo"<br><b>D.".$r[7];
		  echo"<br><b>correct=><b>".$r[8];echo"<div id=cla><a href=delete.php?id=$r[0]&q_nu=$r[2]>Remove</a></div>";
		  
	  }	  
	  mysqlI_close($con); 
	  }
	  else
	  {
	  	header("Location:login.php");
	  }
?>
<html>
<head>
<title>operating system question</title>
<link rel="stylesheet" type="text/css" href="my.css">
<style>
#cla{
	   color:blue;
	   font-size:15px;
	   border:1px solid white;
	   border-radius:16px;
	   line-height:30px;
	   width:100px;
	   text-align:center;
	   background:cyan;
	   margin:11px;
} 
.ab{
             margin-top:100px;
             margin-left:29px;
             line-height:35px;  
    }
</style>
</head>
<body>
	      <footer>Online Examination</footer>
</body>
</html>