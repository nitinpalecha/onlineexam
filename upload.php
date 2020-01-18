<?php
    session_start();
    if($_SESSION['u_id']==true)
     {	
      include"amity.php";
	  include"faculty.php";
	  include"mysql.php";
	  if(isset($_POST["btn"]))
	  {
		  $code=$_POST["code"];
		  $sub=$_POST["sub"];
		  $q_no=$_POST["q_num"];
		  $q_add=$_POST["q_add"];
		  $op_1=$_POST["op1"];
		  $op_2=$_POST["op2"];
		  $op_3=$_POST["op3"];
		  $op_4=$_POST["op4"];
          $cor=$_POST["correct"];
          $su=strtoupper($sub);
          $q_no=trim($q_no,".");
          $s="select * from esam where e_id=$code";
          $rs=mysqli_query($con,$s);
          while($r=mysqli_fetch_array($rs))
          {
          	$eid=$r[0];
          	$Subject=$r[1];
          }
          if($eid==$code)
          { 
          	  if($Subject==$su)
          		{	
		  			$s="insert into qus_bank values('$code','$su','$q_no','$q_add','$op_1','$op_2','$op_3','$op_4','$cor')";
		  			mysqli_query($con,$s);
		  			mysqli_close($con);
		  		}
		  		else
		  		{
		  			echo"<script>alert('Please Enter Valid Subject')</script>";			
		  		}	
		  }
		else
		{
			echo"<script>alert('Please Enter Valid Exam Id')</script>";
		}	
	  }
	  }
	  else{
	  	  	header("Location:home.php");
	  	  }	  
?>
<html>
<head>
<title>Upload Question</title>
<link rel="stylesheet" type="text/css" href="my.css">
<style>
	.ab{
		 margin:7.5px; 
		 margin-top:100px;
		 line-height: 38px;
		 margin-left:20px;}
	.abc{
		 line-height: 38px;
		margin-left:20px}
	 
</style>
</head>
<body>
<form method="post" enctype="multipart/form-data">
	<table class="ab">
	<tr>
		<td><b>Subject Code</td>
		<td><input type="text" name="code" placeholder="Exam Id" required></td>
	<tr>
		<td><b>Subject</td>
		<td><input type="text" name="sub" required></td>
	</table>	
	<table class="abc">
    <tr>
	    <td><b>Question No.</td>
		<td><input type="text" name="q_num" size="2" required></td>
	<tr>	
	    <td><b>Add Question </td>
		<td><input type="text" name="q_add" size="60" required></td>
    <tr>
	    <td><b>Option 1</td>
		<td><input type="text" name="op1" required></td>	
     <tr>
	    <td><b>Option 2</td>
		<td><input type="text" name="op2" required></td>	
     <tr>
	    <td><b>Option 3</td>
		<td><input type="text" name="op3" required></td>
      <tr>
	    <td><b>Option 4</td>
		<td><input type="text" name="op4" required></td>	
	 <tr>
	    <td><b>Correct</td>
		<td><input type="text" name="correct" required></td>
      <tr>
		<td colspan="2" align="center"><input type="submit" name="btn" value="Add"></td>		
</table>
</form>
<footer>Online Examination</footer>
</body>	
</html>	
