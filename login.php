<?php  session_start();
     if(isset($_GET["button"]))
	 {
       $a=$_GET["u_id"];		 
       $b=$_GET["u_pass"];		 
	   
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
	    	header("refresh:0;login.php");
		 }	 
           			
	 }		
	 mysqli_close($con);
?>
<html>
<head>
	<title>login</title>
	<style>
	body{
		  background-color:black;
		  margin:0px;
		  padding:0px;
		  font-family:sans-serif;
		  background-image:url("ab.jpg");
		  background-size:cover;
	    } 
	.login-box{
                width:280px;
				position:absolute;
				top:50px;
				left:50px;
				color:white;
				margin:30%;
				margin-top:20%;
				
	          }
   .login-box h1{
                  float:left;
				  font-size:40px;
				  border-bottom:6px solid green;
				  margin-bottom:50px;
				  padding:10px 0;
				  margin:0px auto;
              }
  .textbox{
	        width:100%;
			overflow:hidden;
			font-size:20px;
			padding:8px 0;
			margin:8px 0;
			border-bottom:1px solid green;
  }
.textbox input{
                border:none;
				outline:none;
				background:none;
				color:white;
				font-size:18px;
				width:100%;
				margin:10px;
}
.btn{
       width:100%;
       background:none;
       border:2px solid green;
	   color:white;
	   padding:5px;
	   curser:pointer;
	   
}   
   
	</style>	
</head>
<body>
     <center>
	 <form method="get" action="login.php">
	 <div class="login-box">
	 <h1>Login</h1><br><br><br><br><br>
	 <div class="textbox">
	 <input type="text" name="u_id" placeholder="Enter Id" required>	
	 </div>
	 <div class="textbox">
	 <input type="password" name="u_pass" placeholder="password" required> 
      </div>
     <input class="btn" type="submit" value="Sign In" name="button">
</center>
</form>
</body>
</html>
	