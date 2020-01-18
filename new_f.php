<?php
  session_start();
 if($_SESSION['u_id']==true)
{
     include"amity.php";
     include"admin.php";
	 include"mysql.php";
	 $s="select f_id from faculty order by f_id desc";
	 $rs=mysqli_query($con,$s);
	 $t=0;
	 while($r=mysqli_fetch_array($rs))
	 {
		 $t=1;
		 $f_id=$r[0];
		 break;
	 }
    if($t==0)
	{		
       $f_id="100";
	}
    else
	{
       $f_id=$f_id+1;
	}  
	
if(isset($_GET["button"]))
{
	$a=$_GET["f_name"];
	$b=$_GET["t_subject"];
	$c=$_GET["m_number"];
	$d=$_GET["id"];
	$i="insert into faculty values('$a','$b','$c','$d')";
	mysqli_query($con,$i);
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
<title>New Faculty</title>
<link rel="stylesheet" type="text/css" href="my.css">
<style>
#i{
	  margin:6%;
	  padding:30px;
}
.ab{
	 margin-top:8px;
	 margin-left:90%;
	 width:300px;
	 background-color:lightskyblue;   
}
.abc{
       margin-top: 80px;
       margin-left: 8px;
       margin-bottom: 40px;
    }    
</style> 
</head>
<body>
	  <div class="abc">
	  <div class="container-fluid">
     <div class="row">
    <div class="col-lg-8 col-12">
    <div class="btn">	
    <a href="passchange.php">Change Password</a>
   </div>
   </div>
   </div> 
</div>
</div>
	  <div class="container-fluid">
     <div class="row">
    <div class="col-lg-8 col-12">
     <form method="get" action="new_f.php">
	  <div id="i">
	  <table cellpadding="15" align="center">
	  <tr>
	   <td><b>Faculty Name</td>
	   <td><input type="text" name="f_name" placeholder="Faculty Name" required></td>
	  <tr>
		<td><b>Teaching Subject</td>
		<td><input type="text" name="t_subject" placeholder="Subject" required></td>
	  <tr>
        <td><b>Mobile Number</td>
        <td><input type="text" name="m_number" maxlength="10" placeholder="Mobile Number" required></td>
	  <tr>
         <td><b>Fauclty Id</td>
		 <td><input type="text" name="id" size="4" value='<?php echo$f_id;?>' required></td>
	  <tr>
		 <td colspan="2" align="center"><input type="submit" name="button" value="Ragister"></td>
	</table></div>
</form>
</div>
      </body>
		  <footer>Online Examination</footer>
</html>