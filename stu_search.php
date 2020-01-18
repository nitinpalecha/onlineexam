<?php
      session_start();
     if($_SESSION['u_id']==true)
     {	
      include"amity.php";
	  include"faculty.php";
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
#i{
	 margin:1%;
	 padding:;
	 margin-left:400px; 
}
.i1{
	 margin-top:-5%;
	 margin-bottom:1%;  
	 padding:%; 
	 margin-left:450px;
	 background-color: white;
	 font-family: sans-serif;
	 font-weight: bold; 
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
	   <h3 style="color:red;margin-top:110px;text-align:center;text-shadow:blue ">Search Student Here</h3>
     <form method="get">
	 <div id="i">
      <table align="center">
	  <tr><td><input type="radio" name="r1" value="by_id" required>Search By Id<br><br>
	  <input type="radio" name="r1" value="by_name" required>Search By Name</td>
	  <tr><td>
	  <br>
	  <tr><td><b>Enter Id &emsp;<input type="text" name="t1" required>
	       <input id="btn" type="submit" value="Search" name="btn"></td>
		</table>
		</div>
</form>
<br><br><br><br><br>
</body>
</html>		
        		 
<?php

	  include"mysql.php";
	if(isset($_GET["btn"]))
	{
      $a=$_GET["t1"];
	  $b=$_GET["r1"];
	  if($b=="by_id")
	  {	  
		$s="select * from student_reg where s_id=$a";
		$rs=mysqli_query($con,$s);
		$t=0;
	   	echo"<div class=cla>";
		echo"<table class=i1 cellpadding=15 align=center border=1>";
		while($r=mysqli_fetch_array($rs))
		{
		 $t=1;
		 echo"<tr><td colspan=2 align=center>Student Details";
		 echo"<tr><td>Student Name<td>".$r[0];
		 echo"<tr><td>Father Name<td>".$r[1];
		 echo"<tr><td>Class<td>".$r[2];
		 echo"<tr><td>Semester<td>".$r[3];
		 echo"<tr><td>Student Id<td>".$r[4];
		 echo"</table>";
		 echo"</div>";
		}
           if($t==0)
	       {
             echo"<script>alert('Record Not Found')</script>";
             header("location:stu_search.php");
	       }		
		 mysqli_close($con);
	  }	
	   else
	   {
		 $s="select * from Student_reg where s_name='$a'";
		 $rs=mysqli_query($con,$s);
		 $t=0;
		 echo"<div class=cla>";
		 echo"<table class=i1 cellpadding=15 align=center border=1>";
		 while($r=mysqli_fetch_array($rs))
		 {
		  $t=1;
		  echo"<tr><td colspan=2 align=center>Student Details";
		  echo"<tr><td>Student Name<td>".$r[0];
		  echo"<tr><td>Father Name<td>".$r[1];
		  echo"<tr><td>Class<td>".$r[2];
		  echo"<tr><td>Semester<td>".$r[3];
		  echo"<tr><td>Student Id<td>".$r[4];
		  echo"</table>";
		 }
		  if($t==0)
	      {
            echo"<script>alert('Record Not Found')</script>";
	      }
		    mysqli_close($con);
	   } 

	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 <footer>Online Examination</footer>
</body>
</html>