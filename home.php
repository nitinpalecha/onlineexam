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
       header("refresh:0;home.php");
  }     
   
     if(isset($_POST["btn2"]))
   {
       session_start();
       $a=$_POST["uname"];     
       $b=$_POST["psw"];     
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
      $t
      =4;
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
<nav class="navbar">
  <div class=navbar-inverse>
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
      <label for="uname"><b style="color:black;">Username</b></label>
      <input style="color:black;" type="text" color="black" placeholder="Enter Username" name="uname" autocomplete="off" required>
       <br>
      <label for="psw"><b style="color:black;">Password</b></label>
      <input style="color:black;" type="password" placeholder="Enter Password" name="psw" required>
       <br> 
      <button type="submit" name="btn2">Login</button>
      <label>
     </a>   
</div>
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
        <img src="photo/hint11.jpg" alt="Los Angeles" style="width:100%; height:500px;">
        <div class="carousel-caption">
          <h3>HINT</h3>
          <p>Hardware Institute Of Network Tecnology</p>
        </div>
      </div>

      <div class="item">
        <img src="photo/hint44.jpg" alt="Chicago" style="width:100%;height:500px;">
        <div class="carousel-caption">
          <h3>HINT</h3>
          <p>Hardware Institute Of Network Tecnology</p>
        </div>
      </div>
    
      <div class="item">
        <img src="photo/hint33.jpg" alt="New York" style="width:100%;height:500px">
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
	<div class="container-fluid"><h1 class="text-center text-capitalize"><div class="c"><p style="color: blue; background-color: whitesmoke;width:200px;margin-left:500px "> Information</p></div></h1>

   <div class="row">
   	<div class="col-lg-6 col-md-6 col-12">
   		<div class="a"><img style="height: 300px;" src="photo/hint.jpg" class="image-fluid" width=100%></div>
   	</div>
   	<div class="col-lg-6 col-md-6 col-12">
   		<h1 style="color: blue;background-color:whitesmoke; text-align:center;border-left: 10px solid lime;border-right: 10px solid lime;">HINT
WELCOME’S YOU</h1>
   		<p style="line-height:30px;font-weight:bold; font-family:sans-serif; height: 200px;padding-top: 0px;">In recent years Hardware and Networking of computers has become the integral part working system. Computer has occupied a very important role in Homes, Banks, Colleges, Cyber cafes, Government, Semi govt. sectors, Call Centers & even at homes. Every computer user feels that the service provider must solve his problems in the minimum period of time.</p>
   	</div>
   </div>
</div>
</section>
   <section>
      <div class="container-fluid"><h1 class="text-center text-capitalize"><p style="padding-top:20px;margin-bottom:40px"><b>Courses</div></h1>
     <div class="mar">   
     <div class="row text-center">
    <div class="col-sm-4">
    <a href="#"><img src="photo/php.png" alt="Card image"></a>
     <p style="margin-bottom:20px;margin-top:5px;"><a href="#">PHP Full Course<br>Advanced And Core</a></p>
     
  </div>
    <div class="col-sm-4">
        <a href="#"><img src="photo/java.png" alt="Card image"></a>
        <p style="margin-bottom:20px;margin-top:5px;"><a href="#">JAVA Full Course<br>Advanced And Core</a></p>
    </div>
    <div class="col-sm-4">
        <a href="#"><img src="photo/a6.png" alt="Card image"></a>
        <p style="margin-bottom:20px;margin-top:5px;"><a href="#">PYTHON Full Course<br>Advanced And Core</a></p>
    </div>
  </div>
</div>
</section>
     <section class="bg-primary text-center">
       <article style="padding-top:30px;padding-bottom:30px">
         <div>
           <h3 style="font-size:45px">+91-9799987229</h3>
           <p>If You Want To Join Call Us Now</p>
            <button type="button" class="btn btn-success">Call Now</button>
       </article>
     </section>
   </div>
 </article>
</section>
    <section>
       <div class="container-fluid"><h1 class="text-center text-capitalize"><p style="margin-bottom:50px; ">Gallery</h1>
        <div class="row">
          <div class="col-lg-3 col-md-2 col-12">
         <img src="photo/gallery1.jpg" class="img-responsive" style="margin-bottom:45px"></div>
         <div class="col-lg-3 col-md-2 col-12">
        <img src="photo/gallery2.jpg" class="img-responsive" style="margin-bottom:45px"></div>
       <div class="col-lg-3 col-md-2 col-12">
        <img src="photo/gallery3.jpg" class="img-responsive" style="margin-bottom:45px"></div>
       <div class="col-lg-3 col-md-2 col-12"> 
        <img src="photo/gallery4.jpg" class="img-responsive" style="margin-bottom:45px"></div>
  </div>
    </section>
      <section class="bg-primary text-center">
        <article style="padding-top:30px;padding-bottom:30px">
         <div>
           <h3 style="font-size:45px">Enquiry</h3>
           <p>Fill Form First</p>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">click Here</button>
</div>
</article>
</section>
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="color: black">Fill Form</h4>
        </div>
        <div class="modal-body">
        </div>
        <form action="home.php">
     <div class="mar" style="margin-right:20px;">     
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" autocomplete="off" required>
    </div>
    <div class="form-group">
      <label for="usr">Name:</label>
     <input type="text" class="form-control" id="pwd" placeholder="Enter Name" name="pwd" required>
    </div>
     <div class="form-group">
      <label for="usr">Mobile Number:</label>
      <input type="text" class="form-control" id="nam" placeholder="Enter Number"  maxlength="10" name="nam" required>
    </div>
    <button type="submit" name="btn1" class="btn btn-primary">Submit</button>
  </form>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      </div>
    </div>
  </div>
</div>
</article>
</section>
<footer><p class="text-center bg-light text-dark">@copyright hintInstitute32.com 2019</footer>
</body>
</html>