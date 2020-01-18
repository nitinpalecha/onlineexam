<?php
   session_start();
     if($_SESSION['u_id']==true)
   {	
    include"amity.php";
    include"faculty.php";
	include"mysql.php";
	$s="select s_id from student_reg order by s_id desc";
	$rs=mysqli_query($con,$s);
    $t=0;
	while($r=mysqli_fetch_array($rs))
	{
		$t=1;
		$id=$r[0];
		break;
    }
    if($t==0)
	{
       $id="1001";
    }
    else
    {
       $id=$id+1;
	}
  if(isset($_GET["btn"]))
  {
     $a=$_GET["student_name"];
     $b=$_GET["father_name"];
     $c=$_GET["class"];
     $d=$_GET["sem"];
     $e=$_GET["id"];
	 
	 $in="insert into student_reg values ('$a','$b','$c','$d',$e)";
	 mysqli_query($con,$in);
	 mysqli_close($con);
  }	 
  }
  else
  {
  	header("Location:home.php");
  }	 
?>	
<html>
<head>
<title>Student Ragister </title>
<link rel="stylesheet" type="text/css" href="my.css">
<style>
#i{
	 margin:1%;
	 padding:5%;   
}
</style>	 
</head>
<body>
     <form method="get">
     	<br>
	 <div id="i">
	 <table cellpadding="14" align="center">
	 <tr>
		<td><b>Student Name</td>
		<td><input type="text" name="student_name" placeholder="Student Name" required></td>
	 <tr>
		<td><b>Student Father Name</td>
		<td><input type="text" name="father_name" placeholder="Father Name" required></td>
     <tr>		
	    <td><b>Student Class</td>
   	    <td>
			<select name="class">
			<option>B.C.A</option>
			<option>M.C.A</option>
			<option>B.COM</option>
			<option>M.COM</option>
			<option>B.A</option>
			<option>M.A</option></select></td>
	 <tr>

	     <td><b>Semester</td>
		 <td>
		    <select name="sem">
			<option>1st</option>
			<option>2nd</option>
			<option>3rd</option>
			<option>4th</option>
			<option>5th</option>
			<option>6th</option></select></td>
	 <tr>
		 <td><b>Student Id</td>
		 <td><input type="text" name="id" size="4" value='<?php echo$id;?>' readonly></td>
	 <tr>
		 <td colspan="2" align="center"><input type="submit" name="btn" value="Ragister"></td>
	</table>
	</div>
</form>
         	<footer>Online Examination</footer>
</body>
</html>	