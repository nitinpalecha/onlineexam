<?php 
   include "amity.php";
   include"admin.php";
   include"mysql.php";
  if(isset($_GET["but"]))
  {
	  $b=$_GET["new_pass"];
	  $c=$_GET["con_pass"];
	  $d=$_GET["u_id"];
	  $t=0;
	  if($b==$c)
	  {  
	    $s="update login set u_pass='$c' where u_id=$d";
	    mysqli_query($con,$s);
	    $t=1;
		  if($t==1)
   		  {
	  		echo"<script>alert('password Changed')</script>";
	 	 }
	  }
	  else
	  {
		  echo"<script>alert('Password Is Not Match')</script>";
	  }	  
	  mysqli_close($con);
}
?>  
	  
<html>
<head>
	<title>update</title>
<link rel="stylesheet" type="text/css" href="my.css">
<style>
.ab{
    margin-top:100px;
    margin-left:250px;
    font-family: sans-serif;  
}
</style>
</head>
<body>
	<div class="ab">
	<form method="get" action="passchange.php">
	<table cellpadding="20" align="center">
	<tr>
 	  <td><b>User Id</td>
	  <td><input type="text" name="u_id" placeholder="Enter User Id" required></td>
	<tr>
		<td><b>New Password</td>
	  <td><input type="text" name="new_pass" placeholder="New Password" required></td>
	 <tr>
	    <td><b>Confirm New Password</td>
	  <td><input type="text" name="con_pass" placeholder="Confirm Password" required></td>
	 <tr>
		<td colspan="2" align="center"><input type="submit" name="but" value="Set password"></a></td>
     </table>
 </div>
</form>
</body>
</html>	 