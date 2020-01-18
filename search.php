<?php
     session_start();
     if($_SESSION['u_id']==true)
     {	
      include"amity.php";
      include"admin.php";
      }
      else
      {
      	header("Location:home.php");
      }
?>	  
<html>
<head>
<title>Search</title>
<link rel="stylesheet" type="text/css" href="my.css">
<style>
#i1{
	  margin:5%;
	  padding:30px;
	  margin-left:300px; 
}
.h2{
	 margin:1%; 
	 padding:%; 
	 margin-left:350px;
	 background-color: ;
	 font-family: sans-serif;
	 font-weight: bold; 
	 border-collapse:; 
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
     <form method="get" action="search.php">
	 <div id="i1">
      <table align="center">
	  <tr><td><b>Enter Id &emsp;<input type="text" name="t1" placeholder="Search Faculty" required>
	       <input type="submit" value="Search" name="btnn"></td>
		</table></div>
		<div id="id"></div>
</form>
</body>
</html>		
        		 
<?php

	  include"mysql.php";
	if(isset($_GET["btnn"]))
	{
      $a=$_GET["t1"];
	 $s="select * from faculty where f_id='$a'";
     $rs=mysqli_query($con,$s);
	 $t=0;
	 echo"<div class=cla>";
	 echo"<div class=h2><table cellpadding=15 align=center border=1 bgcolor=white>";
     while($r=mysqli_fetch_array($rs))
	 {
		 $t=1;
		 echo"<tr><td colspan=2 align=center>Faculty Details";
		 echo"<tr><td>Faculty Name<td>".$r[0];
		 echo"<tr><td>Faculty Subject<td>".$r[1];
		 echo"<tr><td>Mobile Number<td>".$r[2];
		 echo"<tr><td>Faculty Id<td>".$r[3];
		 echo"</table>";
	     echo"</div></div>";	 
	 }	
    if($t==0)
	{
      echo"<script>alert('Record Not Found')</script>";
	}
   mysqli_close($con);
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="my.css">
</head>
<body>
  <footer>Online Examination</footer>
</body>
</html>