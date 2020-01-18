<?Php
      include"mysql.php";
 ?>
<html>
<head>
<title>header</title>
<style>
*{
	text-decoration:none;
	color: white;
	margin-top:1%; 
}	
#a{
	margin:0;
	padding:1px;
}	
#ul ul{
	list-style:none; 
}
#ul ul li{
	    background-color:deeppink;
		width:150px;
		height:50px;
		line-height:50px;
		text-align:center;
		float:left;
		font-size:18px;
		font-family:sans-serif;
		margin-top:30px;
	}
#ul ul li:hover{
	            background-color:lime;
               }
#ul ul ul li{
	          display:none;
            } 
#ul ul li:hover ul li {
	                    display:block;
	                    margin:0;
	                    padding:0; 
                      }  	
			
</style>
</head>
<body>
<div id="ul">
<ul>
    
	<li><a href="student_reg.php">Registration</a></li>
	<li><a href="stu_search.php">Search</a></li>
	<li><a href="stu_display.php">Dispaly All</a></li>
	<li><a href="ereg.php">Exam Ragister</a></li>
	<li><a href="allexam.php">All Exam </a></li>
	<li><a href="upload.php">Add Ques</a></li>
	<li>Question Bank</a>
	<ul id="a">
		<?php
		    $s="select subject from esam order by e_id";
		    $rs=mysqli_query($con,$s);
            while($r=mysqli_fetch_array($rs))
            { 
		      echo"<li><a href='c.php?sub=$r[0]'>".$r[0]."</a></li>";
		    } 
		 ?>  
	</li>
	</ul>	
	<li><a href="logout.php">Logout</a></li>
	</hr>
</ul>	
</div>
</html>
</body>