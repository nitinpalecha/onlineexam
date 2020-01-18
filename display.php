<?php
     session_start();
     if($_SESSION['u_id']==true)
     {	
      include"amity.php";
      include"admin.php";
      include"mysql.php";
	  $s="select * from faculty order by f_id desc";
	  $rs=mysqli_query($con,$s);
	  echo"<br>";
	  echo"<br>";
	  echo"<div class=cla><br>";
	  echo"<div class=h2><table cellpadding=15 align=center border=1 bgcolor=white>";
	  echo"<tr><td colspan=5 align=center><font size=5><i>All Faculty</i></font></td>";
	  echo"<tr><td>Faculty Name<td>Faculty Subject<td>Mobile Number<td>Id<td>Delete";
	  while($r=mysqli_fetch_array($rs))
	  {
		 echo"<tr><td>".$r[0];
		 echo"<td>".$r[1];
		 echo"<td>".$r[2];
		 echo"<td>".$r[3];
		 echo"<td><a href='#' onclick=ab('".$r[3]."')><div class=delete>Delete</div></a>";
	  }
    mysqli_close($con);

    echo"</table>";
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
<script language="javascript">
	function ab(data)
	{
		 var response=confirm("Are You Sure You Want To Delete This Record");

		 if(response==true)
		 {
			window.location.href='f_delete.php?f_id='+data;
		 }
		 	
	}
</script>
<style>
.h2{
	 margin-top:50px; 
	 padding:%; 
	 margin-left:1px;
	 background-color: ;
	 font-family: sans-serif;
	 font-weight: bold; 
	 margin-left:250px; 
 }
.cla table tr:nth-child(even){
 	background: silver;
 }  
.cla table tr:hover{
 	background: silver;
 }
 .delete{
            color:blue; 
        }

</style>
</head>
<body>
</body>
</html>	