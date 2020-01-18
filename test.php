<?php
    session_start();
    if($_SESSION['u_id']==true)
     {	
      include"amity.php";
      include"stu.php";
	  include"mysql.php";
	  $e_id=$_GET['eid'];
	  $sub=$_GET['sub'];
	  $_SESSION['eid']=$e_id;
	  $_SESSION['sub']=$sub;
	  $a=$_SESSION['u_id'];
	  $s="Select count(*) from qus_bank where e_id='$e_id'";
		$rs=mysqli_query($con,$s);
		while($r=mysqli_fetch_array($rs))
		{
			
			$total_ques=$r[0];
		}
		if($total_ques==0)
		{
			echo "<script>alert('Question Not Available')</script>";
			header("refresh:0;select.php");
		}	
	  $s1="select * from result where s_id='$a' and subject='$sub'";
	  $rs=mysqli_query($con,$s1);
	  $t=0;
	  while($r=mysqli_fetch_array($rs))
	  {
         	$t=1;
      }
		      if($t==1)
		      {    	 
		          echo "<script>alert('Student Has Already Give Exam For This Subject')</script>";
                  header("refresh: 0;select.php");
  
			  }
		     else
		      {	
                  $s="select * from student_reg where s_id='$a'";
					  $rs=mysqli_query($con,$s);
					  while($r=mysqli_fetch_array($rs))
					  {
					   	  $_SESSION['class']=$r[3];	  
					       $_SESSION['sem']=$r[2];
					  }     
			  }
       }           
	else
	{
		header("Location:home.php");
	}
?>	  
<html>
<head>
<title>Student Test</title>
<script src="jquery-3.4.1.js"></script>
<link rel="stylesheet" type="text/css" href="my.css">
<style>
*{
	text-decoration:none;
}
a{
	margin:0;
	padding:0;  
}
#btn1{
	   font-family:italic;
	   border:5px solid white;
	   border-radius:40px;
	   font-size:40px;
	   background:black;
	   line-height:30px;
	   text-align:center;
	   height:40px;
	   width:20%;
	   color:blue; 
	   border-bottom:5px solid white;
	   float:left;
	   margin:5%;
	   padding:20px;
	}
	#idv{
             background: peachpuff;
             color:navy;
             border:2px solid white;
             border-bottom: 2px solid green;
             border-radius: 20px;
             text-align: center;
             margin-top:200px;
             margin-left: 25%;
             width:40%;    
             font-weight: bold;
             font-family: sans-serif;
             font-size: 25px;
             padding-top: 25px;
    	}
    	#btn1{
			   font-family:sans-serif;
			   border:5px solid;
			   border-radius:10px;
			   font-size:25px;
			   background:lawngreen;
			   width:10%;
			   margin-top:10px;
			   font-weight: bold;
			   height:30px;
			   padding: 14px 16px;
			}  
</style>
</head>
<body>
     <script>
		$(document).ready(function(){
		 $('p').hide(); 
         $('#btn1').mouseenter(function(){
       	$('#idv').show().fadeOut(8000);
  });
});
</script>

	<a href="exam.php?qid=-1" title="Click Here For Start"><div id="btn1">Start Exam</a></div>
    <a href="result.php" title="Click Here To Get Result"><div id="btn1">See Result</a></div>
		  <p id="idv">hello Welcome For Queize contest<br>
		              Each question Number 10<br>
		              all Are Compulsay<br>
		              Minimum 50% marks for passout
		                <br><font size="15" color="red">Best Of Luck</font></p> 
</body>
</html>		 	