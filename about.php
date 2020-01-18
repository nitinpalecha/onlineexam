<?php
   
 if(isset($_GET['btn1']))
 {
    include("mysql.php");
       $a=$_GET['email'];
       $b=$_GET['nam'];
        $c=$_GET['pwd'];
       $s="insert into enquiry (name,emai,m_num) values('$c','$a','$b')";
       mysqli_query($con,$s);
       mysqli_close($con);
       echo"<script>alert('Request sent')</script>";
       header("refresh:0");
  }     
   
     if(isset($_POST["btn2"]))
   {
       session_start();
       $a=$_POST["uname"];     
       $b=$_POST["psw"];     
     
     $_SESSION['s_id']=$a;
     $con=mysqli_connect("localhost","root","","online_exam");
       if(!$con)
         die("unable to connect");
        $s="select * from faculty where f_id='$a' and f_name='$b'";
    $rs=mysqli_query($con,$s);
    $t=0;
    while($r=mysqli_fetch_array($rs))
    {
      $t=1;
      
    }
        if($t==1)
    {
               $_SESSION['u_id']=$a;   
               header("location:student_reg.php");

    } 
          $s1="select * from login where u_id='$a' and u_pass='$b'";
      $rs=mysqli_query($con,$s1);
      $t=2;
      while($r=mysqli_fetch_array($rs))
      {
         $t=3;
      }
          if($t==3)
      {
              $_SESSION['u_id']=$a;
              header("location:new_f.php");
      } 
        $s2="select * from student_reg where s_id='$a' and s_name='$b'";
      $rs=mysqli_query($con,$s2);
      $t=4;
      while($r=mysqli_fetch_array($rs))
      {
        $t=5;
      }
         if($t==5)
     {
       $_SESSION['u_id']=$a;
       header("location:select.php");
     }   
         else
     {
        echo"<script>alert('invalid Id Password')</script>"; 
        header("refresh:0;home.php");
     }   
                
   }    
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
     <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<style>
	.carousel-inner img {
      width: 100%;
      height: 100%;
  }
  .c{
  	  padding-top:20px;
  	  padding-bottom:20px;  
  }
  .a{
  	  margin-bottom:20px; 
  	  font-family: sans-serif;
  	  line-height: 
     }
   .mar{
          margin-left:20px;
       }  
section{
    margin-bottom:40px; 
 } 
</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
.m input[type=text], input[type=password] {
  width: 30%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
s.model{
           margin-top:100px; 
         }
/* Set a style for all buttons */
.m button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 45%;
}

.m button:hover {
  opacity: 0.8;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 30%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.m.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.m{
  background-color:white;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 40%; /* Could be more or less, depending on screen size */
  margin-top: 10%;
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>
	<header>
<nav class="navbar navbar-default bg-light">
  <div class="container-fluid">
    <div class="navbar-header">
    <ul class="nav navbar-nav">
      <li class="navbar-brand"><a href="home.php">Home</a></li>
      <li class="navbar-brand"><a href="about.php">About Us</a></li>
      <li class="navbar-brand"><a href="contact.php">Contact Us</a></li>
      <li class="navbar-brand" style="margin-left: 800px; margin-bottom:30px;">
        <button class="btn-primary btn-lg" onclick="document.getElementById('id01').style.display='block'" style="width:auto; margin-left:300px margin-top:5%; ">Login</button>
<div class="m">        
<div id="id01" class="modal ">  
  <form class="m animate" action="home.php" method="post" enctype="multipart/form-data">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="photo/img_avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>
       <br>
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
       <br> 
      <button type="submit" name="btn2">Login</button>
      <label>
     </a>   
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</li>
    </ul>
   </div> 
  </div>
</div>
</nav>
</header>
</form>

<div class="container-fluid">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="photo/a2.jpg" alt="Los Angeles" style="width:100%; height:500px;">
        <div class="carousel-caption">
          <h3>HINT</h3>
          <p>Hardware Institute Of Network Tecnology</p>
        </div>
      </div>

      <div class="item">
        <img src="photo/hint.jpg" alt="Chicago" style="width:100%;height:500px;">
        <div class="carousel-caption">
          <h3>HINT</h3>
          <p>Hardware Institute Of Network Tecnology</p>
        </div>
      </div>
    
      <div class="item">
        <img src="photo/a1.jpg" alt="New York" style="width:100%;height:500px">
        <div class="carousel-caption">
          <h3>HINT</h3>
          <p>Hardware Institute Of Network Tecnology</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<section>
	<div class="container-fluid"><h1 class="text-center text-capitalize"><div class="c"><p style="color: blue; background-color: whitesmoke;width:200px;margin-left:500px "> About HINT</p></div></h1>

   <div class="row">
   	<div class="col-lg-6 col-md-6 col-12">
   		<div class="a"><img style="height: 300px;" src="photo/hint22.jpg" class="image-fluid" width=100%></div>
   	</div>
   	<div class="col-lg-6 col-md-6 col-12">
   		
        <h1 style="color: blue;background-color:whitesmoke; text-align:center;border-left: 10px solid lime;border-right: 10px solid lime;">Mission</h1>
"Effective participation in National reconstruction through technical up gradation & developing youth for self-employment through capacity building."
<h1 style="color: blue;background-color:whitesmoke; text-align:center;border-left: 10px solid lime;border-right: 10px solid lime;">Vision</h1>
The vision of HINT is Student development through innovative and interactive approaches.
<h1 style="color: blue;background-color:whitesmoke; text-align:center;border-left: 10px solid lime;border-right: 10px solid lime;">Why HINT?</h1>
20+ years of IT industry Experience.
Best Academic & advisory board of persons having lifetime experience in education.
Innovative teaching methodology.
Seminars by working IT-Professionals.
On job training to students with working professionals in different IT industries.
Placement through Campus.
Weekly theory & practical Test.
Component level trouble shooting of Laptop, Desktop, SMPS, Motherboard through BGA Rework Station.
Unlimited practical hours with working professionals.
Online Examination Center for CISCO, SUN, IBM, HP, CompTIA & other international Level exams.</p>
   	</div>
   </div>
</div>
</section>
<footer><p class="text-center bg-light text-dark">@copyright hintinstitute8523.com 2019</footer>
</body>
</html>