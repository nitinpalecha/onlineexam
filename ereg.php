<?php
     session_start();
     if($_SESSION['u_id']==true)
     {	
             include"amity.php";
             include"faculty.php";
             include"mysql.php";
          $s="select e_id from esam order by e_id desc";
          $rs=mysqli_query($con,$s);
          $t=0;
           while($r=mysqli_fetch_array($rs))
           {
        	    
        		$ids=$r[0];
        		$t=1;
        		break;
           }	
          if($t==0)
          {
        	   $ids="101";
          }
          else
          {
             $ids=$ids+1;
          }	 
          if(isset($_GET["btn"]))
          {
           $a=$_GET["id"];
           $b=$_GET["sub"];
           $sub=strtoupper($b);
           $s1="insert into esam values ('$a','$sub')";
           mysqli_query($con,$s1);
           mysqli_close($con);
          }
          if(isset($_GET['btn1']))
          {
              $id=$_GET['del'];
              $s="delete from esam where e_id=$id";
              mysqli_query($con,$s);
              mysql_close($con);
              header("Location:ereg.php");   

          }}
  else
  {
  	header("Location:home.php");
  } 
	   
?>  
<html>
<head>
<title>exam ragistration</title>
<link rel="stylesheet" type="text/css" href="my.css">
<style>
#i{
	 margin:2%;
	 padding:5%;
	 margin-left:400px; 
}
#btn{
	   font-family:italic;
	   border:1px solid lime;
	   border-radius:10px;
	   font-size:20px;
	   background:black;
	   line-height:10px;
	   text-align:center;
	   height:30px;
	   width:40%;
	   color:white;
	   border-bottom:5px solid lime;
} 
#btn btn:hover{
	          background:lime;
}  
.a1{
      margin-top:100px; 
      margin-left:40px;
}
</style>
</head>
<body>

  <form method="get" >
 <div class="a1"> Delete Id&nbsp;<input type="text" name="del" autocomplete="off" required>
  <input type="submit" name="btn1"></div>
  </form>  
  <form method="get">
	<div id="i">
	<table cellpadding="12" align="center">
	<tr>
	<td>Exam Id</td>
	<td><input type="text" name="id" size="2" value='<?php echo $ids; ?>' readonly></td>
    <tr>
		<td>Subject</td>
		<td title="Enter Subject"><input type="text" name="sub" autocomplete="off" required>
	<tr>
	    <td colspan="2" align="center"><input id="btn" type="submit" name="btn" value="Submit"></td>
	</table>
	</div>
</form>
</body>
</html>	