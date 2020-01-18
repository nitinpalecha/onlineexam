<?php
     session_start();
     if($_SESSION['u_id']==true)
     {	
      include"amity.php";
      include"faculty.php";
      include"mysql.php";
	  $s="select * from esam order by e_id desc";
	  $rs=mysqli_query($con,$s);
	  echo"<br>";
	  echo"<br>";
	  echo"<div class=cla><br>";
	  echo"<div class=h2><table cellpadding=10 align=center border=1 bgcolor=white width=50%>";
	  echo"<tr><td colspan=2 align=center><font size=5><i>All Exam Id</i></font></td>";
	  echo"<tr><td>Exam Id<td>Subject";
	  while($r=mysqli_fetch_array($rs))
	  {
		 echo"<tr><td>".$r[0];
		 echo"<td>".$r[1];
	  }
    mysqli_close($con);
   }
   else 
   {
    	header("Location:home.php");
    } 
?>
<html>
<head>
<title>display</title>
<link rel="stylesheet" type="text/css" href="my.css">
<style>
.h2{
	 margin-top:50px; 
	 padding:%; 
	 margin-left:1px;
	 background-color: ;
	 font-family: sans-serif;
	 font-weight: bold; 
	 margin-left:250px; 
	 border-collapse:collapse;
 }
.cla table tr:nth-child(even){
 	background: silver;
 }  
.cla table tr:hover{
 	background: silver;
 }
</style>
</head>
<body>
</body>
</html>	