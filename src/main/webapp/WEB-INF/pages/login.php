<?php session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="/news/src/main/webapp/WEB-INF/css/login.css">
<title>Untitled Document</title>
</head>

<body>
<form action="login.php" method="post">

<table width="1200" height="500">
  <tbody>
<!--------------nav bar--------------------------------------------------->	
    <tr>
      <td align="right" height="99">

<table border="0" width="100%" height="40%" bgcolor="#C7C7C7">
		<tr>
			<td width="20%" align="center"><a href="home.php">Home</a></td>
			<td width="20%" align="center"><a href="mypage.php">My News Page</a></td>
			<td width="20%" align="center"><a href="viewAll.php">News</a></td>
			<td width="20%" align="center"><a href="viewAllInfo.php">Information</a></td>
			<td width="20%" align="center"><a href="/news/src/main/webapp/WEB-INF/pages/comment/index.php">Feedback</a></td>  
			
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
      <td align="center"><h1>LOGIN PAGE</h1></td>
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
      <td width="380">&nbsp;<button type="button" onclick="window.location.href='/news/src/main/webapp/WEB-INF/pages/register.php'" class="cancelbtn">Cancel</button></td>
       <td width="292">&nbsp;<button type="submit" name="btnsubmit" >Login</button>	 </td>
	</div>
    </tr>
    <tr>
      <td colspan="3"><mark>DON'T HAVE AN ACCOUNT PLEASE REGISTER HERE<a href="/news/src/main/webapp/WEB-INF/pages/register.php">&nbsp;&nbsp;&nbsp;&nbsp;Register here </a>  </mark> </td>
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
				$sql = "SELECT * FROM `usertb` WHERE `email`='".$email."' AND `password` ='".$password."';";
					$results = mysqli_query($con,$sql) ;
					
				
				if(mysqli_num_rows($results)>0)
				{
					$_SESSION["email"] = $email;
			
					
										?>
				<script> 
				window.location.href='home.php';
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

