<?php session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="/news/src/main/webapp/WEB-INF/AdminCss/adminLogin.css">
<title>Untitled Document</title>
<style>
body {
  margin: 0;
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
	font-size: 12px;
	font-family: sans-serif;
	background: #2c3e50;
}


span {
    color: #2BD6B4;
}

/* Full-width input fields */
input[type=text], input[type=password] ,input[type=file]{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
.text
{
	  width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box
}
button {
    background-color:#676767;
    color: white;
    padding: 14px 20px;
    margin: 5px 0;
    border: none;
    cursor: pointer;
    width: 30%;
}

button:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: 25%;
    padding: 10px 18px;
    background-color: #5293AA;
}
</style>
</head>

<body>
<form action="adminLogin.php" method="post">

<table width="1200" height="500">
  <tbody>
<!--------------nav bar--------------------------------------------------->	
    <tr>
      <td align="right" height="99">

<table border="0" width="100%" height="40%" >
		<tr>
			<nav>
	<a href="#">Home</a>
	<a href="#">Login</a>
	<a href="#">Emails</a>
	<a href="#">Profile</a>
	<a href="#">Settings</a>
	<div class="animation start-home"></div>
</nav>
			
			
		</tr>

</table>
	 </td>
    </tr>
<!--------------------end nav bar------------------------------------->
<img src="/news/src/main/webapp/WEB-INF/images/logo.png" alt="" height="100%" width="15%" align="left">
<!----------------------login form-------------------------------------->
    <tr>
      <td>
		
		
		  <table width="1002" height="508" border="0">
  <tbody>
    <tr>
      <td width="316">&nbsp;</td>
      <td width="380">&nbsp;</td>
      <td width="292">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td align="center"><h1>ADMIN LOGIN PAGE</h1></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td align="center">USERNAME</td>
      <td><input type="text" name="txtUname" id="txtUname" placeholder="Enter your email" required></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td align="center">PASSWORD</td>
      <td><input type="password" name="password" id="password" placeholder="Enter the password" required></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
	<div class="container">
      <td>&nbsp;</td>
      <td width="380">&nbsp;<button type="button" onclick="window.location.href='/news/src/main/webapp/WEB-INF/Admin/adminLogin.php'" class="cancelbtn">Cancel</button></td>
       <td width="292">&nbsp;<button type="submit" name="btnsubmit" >Login</button>	 </td>
	</div>
    </tr>
    <tr>
      <td > </td>
      </tr>
	  
	    <p>
			  
						   <?php 
				if( isset($_POST["btnsubmit"])){
				$email = $_POST["txtUname"];
				$password = $_POST["password"];
			
				$con = mysqli_connect("localhost","root","","newsdb");
					if(!$con)
					{
						die("Cannot connect to Db server");
					}
				$sql = "SELECT * FROM `admin` WHERE `username`='".$email."' AND `password` ='".$password."';";
					$results = mysqli_query($con,$sql) ;
					
				
				if(mysqli_num_rows($results)>0)
				{
					$_SESSION["email"] = $email;
			
					
										?>
				<script> 
				window.location.href='dashboard.php';
				</script>
				
				<?php
				}
			  else
			  {
				  echo "Please enter a correct username and a password";
			  }
			}
			  ?>
			  
			  
			  </p>
	  
  </tbody>
</table>

		
		
		
	</td>
    </tr>
  </tbody>
</table>
</form>

	
	
</body>
</html>

