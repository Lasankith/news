<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style>
body {

	background-image: url("/news/src/main/webapp/WEB-INF/images/19.jpg");
	background-repeat: no-repeat;
	background-size: cover;
    background-attachment: fixed;
    font-family: Baskerville, "Palatino Linotype", Palatino, "Century Schoolbook L", "Times New Roman", "serif"
	}
table{
	background-color: rgba(0,0,0,0.7);
	width:85%;
	font-size:13px;
	border-radius: 10px;
	border:1px soid rgba(255,255,255,0.3);
	box-shadow: 2px 2px 15px
	rgba(0,0,0,0.3);
	color: #fff;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 10%;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

li a {
  display: block;
  color: #000;
  padding: 30px 27px;
  text-decoration: none;
}

li a.active {
  background-color: #04AA6D;
  color: white;
}

li a:hover:not(.active) {
  background-color: #555;
  color: white;
}
	nav {
	margin: 27px auto 0;

	position: relative;
	width: 590px;
	height: 50px;
	background-color: #34495e;
	border-radius: 8px;
	font-size: 0;
}
nav a {
	line-height: 50px;
	height: 100%;
	font-size: 15px;
	display: inline-block;
	position: relative;
	z-index: 1;
	text-decoration: none;
	text-transform: uppercase;
	text-align: center;
	color: white;
	cursor: pointer;
}
nav .animation {
	position: absolute;
	height: 100%;
	top: 0;
	z-index: 0;
	transition: all .5s ease 0s;
	border-radius: 8px;
}
a:nth-child(1) {
	width: 100px;
}
a:nth-child(2) {
	width: 110px;
}
a:nth-child(3) {
	width: 100px;
}
a:nth-child(4) {
	width: 160px;
}
a:nth-child(5) {
	width: 120px;
}
nav .start-home, a:nth-child(1):hover~.animation {
	width: 100px;
	left: 0;
	background-color: #1abc9c;
}
nav .start-about, a:nth-child(2):hover~.animation {
	width: 110px;
	left: 100px;
	background-color: #e74c3c;
}
nav .start-blog, a:nth-child(3):hover~.animation {
	width: 100px;
	left: 210px;
	background-color: #3498db;
}
nav .start-portefolio, a:nth-child(4):hover~.animation {
	width: 160px;
	left: 310px;
	background-color: #9b59b6;
}
nav .start-contact, a:nth-child(5):hover~.animation {
	width: 120px;
	left: 470px;
	background-color: #e67e22;
}

body {
	
	font-family: sans-serif;
	
}


span {
    color: #2BD6B4;
}
h1
	{
	font-size: 40px;
    text-align: center;
	margin: 1em 0 0.5em 0;
	color: #000000;
	font-weight: normal;
	font-family: 'Ultra', sans-serif;   
	
	}
	
</style>
</head>
<body>
	<nav>
	
	<a href="/news/src/main/webapp/WEB-INF/Admin/dashboard.php">Home</a>
	<a href="/news/src/main/webapp/WEB-INF/Admin/adminLogin.php">Login</a>
	<a href="#">Emails</a>
	<a href="#">Profile</a>
	<a href="#">Settings</a>
	<div class="animation start-home"></div>
</nav>


      		  
      		  
<h1><mark>NEWS MANAGEMENT<mark></h1>
<br>

<table width="1283" height="71" border="0" align="center" style="table-layout: fixed">
  <tbody>
    <tr>
    <td>&nbsp;</td>
      <td width="162">NEWSID</td>
      <td width="162">Email</td>
      <td width="162">TOPIC</td>
      <td width="162">DESCRIPTION</td>
      <td width="162">LOCATION</td>
      <td width="162">TIME</td>
      <td width="162">STATUS</td>
      <td width="162">Delete</td>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>
				  <?php
				$con = mysqli_connect("localhost","root","","newsdb");
				
				if(!$con)
				{
					die("Cannot connect to DB server");
				}
				$sql ="SELECT * FROM `newstbl` WHERE `status` = '1' order by newsID asc ";
				
				$result = mysqli_query($con,$sql);
				
				if(mysqli_num_rows($result)> 0)
					
				{
					while($row = mysqli_fetch_assoc($result))
					{
						
				$id = $row['newsID']	;
				
				?>
<table width="1283" height="30" border="0" align="center" style="table-layout: fixed;border-bottom: 2px solid #274472;">
  <tbody>
    <tr>
     <td>&nbsp;</td>
      <td width="162"><?php echo $row['newsID'];?></td>
      <td width="162"><?php echo $row['email'];?></td>
      <td width="162"><?php echo $row['topic'];?></td>
      <td width="162"><?php echo $row['description'];?></td>
      <td width="162"><?php echo $row['location'];?></td>
      <td width="162"><?php echo $row['time'];?></td>
      <td width="162"> <?php echo $row['status'];?></td>
      <td width="162"><a href="adminNewsDelete.php?id=<?php echo  $row['newsID']; ?>">delete</a></td>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>

    
     				   <?php
						
				}
			}
				mysqli_close($con);
				?>

	
</body>
</html>