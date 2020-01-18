<?php
    session_start();
    if($_SESSION['u_id']==true)
    {  
     include"amity.php";
     include"stu.php"; 
    }
    else
    {
      header("location:home.php");
    }  
?>
<html>
<head>
<title> Select Subject</title>
  <link rel="stylesheet" type="text/css" href="my.css">  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
    .s{
         background-color:grey; 
    }
  </style>
</head>
<body>
<header class="page-header">
<div class="container">
  <div class="jumbotron">
    <h2>Exam Instruction</h2><br><br> 
    <p>1.Go to candidate login side.<br>
       2.Click on Exam Login.<br>
       3.After Login  go to candidate Click on Process link As shown below<br>
     </p>    
  </div>  
</div>  
</header>
<div class="container">             
  <ul><li style="line-height:30px; ">If You Want To Give Exam First Select Subject.</li>
      <li style="line-height:30px;">One Student Can Give Only One Subject Exam.</li>
      <li style="line-height:30px;">Next Time Select Another Subject</li>
  </ul>                                  
  <div class="dropdown" style="margin-top:30px; margin-left: 400px; margin-bottom:100px; ">
    <button class="btn btn-primary btn-lg dropdown-toggle" type="button" data-toggle="dropdown">Select Subject
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <?php
            include"mysql.php";
            $s="select * from esam order by e_id";
            $rs=mysqli_query($con,$s);
            $a=$_SESSION['u_id'];
            while($r=mysqli_fetch_array($rs))
            {
              echo"<li><a href='test.php?eid=$r[0]&sub=$r[1]'>$r[1]</a></li>";
            }  
        ?>      
    </ul>
  </div>
</div>

     <div class="container">
      <div class="jumbotron" style="background-color: lavender;color: green;"> 
        <h2> If You Want To Know About Your Result</h2><br>
        <a href="result.php" class="btn btn-success btn-lg text-dark">Click Here</a></div>
      </div>
      </div>
    </div>
<div style="margin-bottom:40px;">
  <hr>
</div>
</body>
</html>
