<?php
    session_start();
    if($_SESSION['u_id']==true)
    {
     include"mysql.php";
	 include"amity.php";
	 $e_id=$_SESSION['eid'];
	 $sub=$_SESSION['sub'];	
      echo"<br><b>1.Question Type Is: Multiple Choice<br>2.Each Question Marks:10<br>3.Time:30 Minute<BR><BR>";
      echo"<h3>Paper Name&ensp;:&ensp;$sub</h3>";
	 $i=1;
	 if(isset($_GET['qid']))
	 {
	 if($_GET['qid']==-1)
	 {
	 $i=1;
	 	$s="Select count(*) from qus_bank where e_id='$e_id'";
		$rs=mysqli_query($con,$s);
		while($r=mysqli_fetch_array($rs))
		{
			
			$total_ques=$r[0];
			$_SESSION['ques']=$total_ques;
		}
		$i=10;
		$to=$i*$total_ques;
		$_SESSION['total']=$to;
	$_SESSION['total']=$total_ques;
	$_SESSION['qn']=1;
	$_SESSION['marks']=0;
	 }
	 }
	
   else
   {
   	//header("Location:login.php");
   }	
?>
	<html>
		   <form method="get" action="exam.php">
<?php		   
    	if(isset($_GET['btn']))
	   	{
			if($_GET['btn']=="Next")
			{
			$ans=$_GET['ans'];
			$correct=$_GET['correct'];
			if($ans==$correct)
				$_SESSION['marks']=$_SESSION['marks']+10;
			$_SESSION['qn']=$_SESSION['qn']+1;
			$i=$_SESSION['qn'];
			}
			if($_GET['btn']=="Back")
			{
			$_SESSION['qn']=$_SESSION['qn']-1;
			$i=$_SESSION['qn'];
			}		
		           	
		 if($_GET['btn']=="Completed")
		 {
  			$ans=$_GET['ans'];
			$correct=$_GET['correct'];
			if($ans==$correct)
				$_SESSION['marks']=$_SESSION['marks']+10;
               
            //insert into database
             $marks=$_SESSION['marks'];
             $attend=$_SESSION['marks']/10;
             $id=$_SESSION['u_id'];
             $a=$_SESSION['class'];
	         $b=$_SESSION['sem'];
	         $total=$_SESSION['total']*10;
	         $marks=$attend*10;
	         $per=$marks/$total;
	         $per=$per*100;
            $s="insert into result(s_id,cor,class,sem,marks,subject,per) values ('$id','$attend','$b','$a',$marks,'$sub','$per')";
             $query=mysqli_query($con,$s);
   
			header("location:result.php");
		 }
}
         
 	if(isset($_GET['btn']) || $_GET['qid']==-1)
	{

		$i=$_SESSION['qn'];
		$s="select * from qus_bank where e_id='$e_id' and q_no='$i'";	
        $l=1;
		$rs=mysqli_query($con,$s);
		 //while($r=mysqli_fetch_array($rs))
		 $r=mysqli_fetch_array($rs);
		  $l++;
			 echo"<br>";
			 $e_id=$r[0];
			 $opt1=$r[4];
			 $opt2=$r[5];
			 $opt3=$r[6];
			 $opt4=$r[7];
			 $cor=$r[8];
			 echo"<div id=id1>";
			 echo"$r[2] ";
			 echo"$r[3]<br><br>";
			 echo"<input type='radio' name='ans' value='$opt1' required> $opt1<br><br>";
			 echo"<input type='radio' name='ans' value='$opt2' required> $opt2<br><br>";
			 echo"<input type='radio' name='ans' value='$opt3' required> $opt3<br><br>";
			 echo"<input type='radio' name='ans' value='$opt4' required> $opt4<br><br>";		 
			 echo"<input type='hidden' name='correct' value='$cor'>";		 
          if($i==1)
	      {
           echo"<input type=submit value='Next' name='btn'>";
	      }
	     else  if($i==$_SESSION['total'])
	      {
			 echo"<input type='submit' value='Back' name='btn'>&ensp;&ensp;&ensp;&ensp;";
 			 echo"<input type='submit' name='btn' value='Completed'>";	  	  
	  	  }
	  	  else
	  	  {
	  		  	echo"<input type=submit value='Back' name='btn'>&ensp;&ensp;&ensp;&ensp;";
	      		echo"<input type=submit value='Next' name='btn'>";

	      } 
	}
      	echo"</div>";
}

?>
</form>
<html>
<head>
<title>Paper</title>
<style type="text/css">
	#id1{
		  background: lavender;
		  height: 50%;
		  width:70%;
		  margin:0px;
		  padding-top:100px; 
		  padding-left:322px; 
		  border-radius: 19px;
		  border-bottom:10px solid lime; 
		  border-top:10px solid lime;
		  border-left:10px solid lime;
		  border-right:10px solid lime;   

		 }  
</style>	 
<link rel="stylesheet" type="text/css" href="my.css">
<style>
#a{
	margin:;
	padding:;
}
#btn{
	   font-family:italic;
	   border:5px solid lime;
	   border-radius:10px;
	   font-size:25px;
	   background:black;
	   line-height:40px;
	   text-align:center;
	   height:40px;
	   width:15%;
	   color:white;
	   border-bottom:5px solid lime;
	   float:double left;
	   margin:75%;
	   margin-top:110px;
	   margin-right:%;
}  
*{
	text-decoration:none;
}	 
</style>	
</head>
<body> 
       	<footer>Online Examination</footer>
</body>
</html>