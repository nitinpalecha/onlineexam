<?php
     session_start();
     if($_SESSION['u_id']==true)
     {	
    	 include"amity.php";
     	 include"faculty.php";
     	 include"mysql.php";
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
#i{
	 margin:1%;
	 padding-top:1%;
	 margin-top:100px; 
}
.i1{
	 margin:1%; 
	 margin-top:100px;
	 background-color: white;
	 font-family: sans-serif;
	 font-weight: bold; 
	 border-collapse:collapse;
	 margin-left: 200px; 
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
<script language="javascript">
function ab(data)
	{
		 var response=confirm("Are You Sure You Want To Delete This Record");

		 if(response==true)
		 {
			window.location.href='studelete.php?sid='+data;
		 }
		 	
	}
</script>
</head>
<body>
</body>
</html>	 

<?php
	 	 $s="select * from student_reg order by s_id desc";
	 	$rs=mysqli_query($con,$s);
	 	echo"<div class=cla>";
	 	echo"<br><br><table class=i1 cellpadding=15 border=1>";
	 	echo"<tr><td colspan=6 align=center><h1>Students</h1>";
	 	echo"<tr><td>Student Id<td>Student Name<td>Father Name<td>Class<td>Sem<td>Delete";
	 while($r=mysqli_fetch_array($rs))
	 {
		 echo"<tr><td>".$r[4];
		 echo"<td>".$r[0];
		 echo"<td>".$r[1];
		 echo"<td>".$r[2];
		 echo"<td>".$r[3];
		 echo "<td><a href='#'onclick=ab(".$r[4].")><div class=delete>Delete</div></a>";
	 }
    	mysqli_close($con);
    	echo"</div></table>";
    
    
?>
