<?php

    session_start();
     if($_SESSION['u_id']==true)
     {  
      include("amity.php");
      include"stu.php";
     }
     else{
              header("Location:home.php");
         } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Website Layout</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
table .cla1{
  border-collapse: collapse;
  width: 50%;
  margin-left:300px  
}

th, td .cla1{
  text-align: center;
  padding: 8px;
}

tr:nth-child(even):hover{background-color: #f2f2f2}

th {
  background-color: whitesmoke;
  color: white;
  color: black;
  font-weight: bold;
}
</style>
<style>
* {
    box-sizing: border-box;
}

body {
  margin:;
}
.ab{
      margin-top:30px; 
   }

</style>


</head>
<body>
</body>
</html>
<?php
    include"mysql.php";
    $id=$_SESSION['u_id'];
    //data retrive from database
         $i=1;
         $s1="select s_name,f_name from student_reg where s_id=$id";
         $rs=mysqli_query($con,$s1);
          while($r=mysqli_fetch_array($rs))
          {      
                 echo"<div class=cla1>";
                 echo"<table class=ab border=1 width=50% align=center cellpadding=20>";
                 echo"<tr><th colspan=2><font size=6><i>RESULT";
                 echo"<tr><th>".strtoupper('Student Name')."</th><th>".strtoupper($r[0]);
                 echo"<tr><th>".strtoupper('Father name')."<th>".strtoupper($r[1]);
           } 
           $i=1;
          $s="select * from result where s_id='$id'";
          $rs=mysqli_query($con,$s); 
          while($r=mysqli_fetch_array($rs)) 
          { 
                if($i==1)
                { 
                echo"<tr><th>".strtoupper('Enrollment Number')."<th>$r[1]<tr>";
                echo"<th>".strtoupper('Class & sem')."<th>".strtoupper($r[3])." $r[4]<tr>";
                echo"<th colspan=2>".strtoupper('Marks And Percentage')."<tr>";
                $i++;
                }
                echo"<th>".strtoupper($r[6])."<th>$r[5] &ensp;&ensp;$r[7]%<tr>";
                //echo"<th>".strtoupper('Percentage %')."<th>";
                
          }
?>