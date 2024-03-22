  <!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="/news/src/main/webapp/WEB-INF/AdminCss/adminUserManagement.css">
<title>Untitled Document</title>
<style>	
body {

	background-image: url("/news/src/main/webapp/WEB-INF/images/19.jpg");
	background-repeat: no-repeat;
	background-size: cover;
    background-attachment: fixed;
    font-family: Baskerville, "Palatino Linotype", Palatino, "Century Schoolbook L", "Times New Roman", "serif";
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


  <form action="" method="post">
			<table width="1025" height="480" border="0">
  <tbody>	
    <tr>
      <td width="346">&nbsp;</td>
      <td width="346">&nbsp;</td>
      <td width="299">&nbsp;</td>
    </tr>
    <tr>
      <td height="58" colspan="3"><h1 align="center">UPDATE USER DETAILS</h1></td>
      </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>FULL NAME</td>
      <td><input type="text" name="txtFullName" id="txtFullName"></td>
      <td>&nbsp;</td>
    </tr>
	<tr>
      <td>E-MAIL</td>
      <td><input type="text" name="txtEmail" id="txtEmail" placeholder="Enter current email here"></td>
      <td>&nbsp;</td>
    </tr>
	 <tr>
      <td>AGE</td>
      <td><input type="text" name="txtAge" id="txtAge"></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>ADDRESS</td>
      <td><input type="text" name="txtAddress" id="txtAddress"></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>GENDER</td>
      <td><input type="text" name="txtGender" id="txtGender"></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>JOB</td>
      <td><input type="text" name="txtJob" id="txtjob"></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>PASSWORD</td>
      <td><input type="password" name="password" id="password"></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>CONFIRM PASSWORD</td>
      <td><input type="password" name="txtConfirmPassword" id="txtConfirmPassword"/></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>  <input name="btnReset" type="reset" class="button" id="btnReset" value="Cancel" onclick="window.location.href='/news/src/main/webapp/WEB-INF/Admin/adminUserManagement.php'"/></td>
      <td>  <input name="btnSubmit" type="submit" class="button" id="btnSubmit" value="Update"   />
 
      </td>
    </tr>
  </tbody>
</table>
    </form>
    	
</body>
	
</html>
<?php 
    
     
      if(isset($_POST['btnSubmit']))
      {
 
          $email = $_POST["txtEmail"];
          
          $con =
          mysqli_connect("localhost","root","","newsdb");
          if(!$con)
          {
              die("sorry,we are facing a technical issue");
          }
         
          $sql = "UPDATE `usertb` SET `password` = '".$_POST["password"]."', `fullName` = '".$_POST["txtFullName"]."', `address` = '".$_POST["txtAddress"]."', `gender` = '".$_POST["txtGender"]."', `job` = '".$_POST["txtJob"]."' WHERE `usertb`.`email` = '".$_POST["txtEmail"]."' ;";
  
          
          mysqli_query($con,$sql) ;
          mysqli_close($con);
          ?>
				<script> 
				window.location.href='adminUserManagement.php';
				</script>
				
				<?php
   }
?>
          
        
   
          
