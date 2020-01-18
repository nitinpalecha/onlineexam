<?php
     session_start();
     if($_SESSION['u_id']==true)
     {	
		      include"amity.php";
		      include"faculty.php";
		      include"mysql.php";
		      $a=$_GET["sub"];
			  $s="select * from qus_bank where subject='$a'";
			  $rs=mysqli_query($con,$s);
			  echo "<div class=ab>";
			  echo"<table cellpadding=15 align=center>";
			  while($r=mysqli_fetch_array($rs))
			  {
				  echo"<br>".$r[2].". ";
				  //echo"<b>".$r[2]; 
				  echo"<b>".$r[3];
				  echo"<br><b>A. ".$r[4];
				  echo"<br><b>B. ".$r[5];
				  echo"<br><b>C. ".$r[6];
				  echo"<br><b>D. ".$r[7];
				  echo"<br><b>Correct =><b>".$r[8];echo"<div id=cla><a href='delete.php?id=$r[0]&q_nu=$r[2]&sub=$a'>Remove</a></div></div>";
				  
			  }	  
			  mysqlI_close($con); 
	 }
	else{
	  	    header("Location:home.php");
     	}
?>
<html>
<head>
<title>c question</title>
<link rel="stylesheet" type="text/css" href="my.css">
<style>
*{
	margin-bottom:0; 
}
#cla{
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
</body>
</html>
