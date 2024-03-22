<?php session_start();
if (!isset($_SESSION["email"]))
{
	header('Location:adminLogin.php');
}

?>
<!DOCTYPE html>
<html>
<head>
<style>
body {
  margin: 0;
  overflow: hidden;
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

<ul>

  <li><a class="active" href="/news/src/main/webapp/WEB-INF/Admin/dashboard.php">Home</a></li>
  <li><a href="/news/src/main/webapp/WEB-INF/Admin/adminUserManagement.php">Users</a></li>
  <li><a href="/news/src/main/webapp/WEB-INF/Admin/adminNewsManagement.php">News</a></li>
  <li><a href="/news/src/main/webapp/WEB-INF/Admin/infomanage.php">Information</a></li>
  <li><a href="/news/src/main/webapp/WEB-INF/Admin/art.php">Arts</a></li>
  <li><a href="/news/src/main/webapp/WEB-INF/Admin/feedbackManage.php">Feedback</a></li>
  
</ul>

<div style="margin-left:10%;padding:1px 16px;height:1000px;">
  <h2 align="center" style="font-size: 50px;">ADMIN DASHBOARD</h2>
  <img src="/news/src/main/webapp/WEB-INF/images/logo.png" alt="" height="50%" width="50%" align="left">
  <h3align="center" style="font-size: 25px;">The university of global knowledge</h3>
  <br>
            <p>As world's technology is rapidly growing we has fast
connection and network to instantly connect to other person.
Day to day use in mobile, tablets and laptop is increasing, most
of the people already have this facilities. In this fast and
information oriented world we need to stay updated with every
incidents and news too.</p>
            <p> This News app is Web
application where user have access to latest news from  all around the
world. The main focus of this
application is to connect news repoters from all around the
world and deliver it to user as fast as possible in best visualize
way.</p>

</div>

</body>
</html>