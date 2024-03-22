<!doctype html>
<html>
<head>
<meta charset="utf-8">

<link rel="stylesheet" type="text/css" href="/news/src/main/webapp/WEB-INF/css/register.css">
<title>Untitled Document</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Untitled Document</title>
<style>
</style>
</head>

<body>
<table width="1200" height="500">
  <tbody>
<!--------------nav bar--------------------------------------------------->	
    <tr>
      <td align="right" height="99">

<table border="0" width="100%" height="40%" >
		<tr>
<div class="navbar">
  <a href="/news/src/main/webapp/WEB-INF/pages/home.php">Home</a>
  <div class="dropdown">
    <button class="dropbtn">My Profile
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="/news/src/main/webapp/WEB-INF/pages/register.php">Register</a>
      <a href="/news/src/main/webapp/WEB-INF/pages/login.php">Login</a>
      <a href="/news/src/main/webapp/WEB-INF/pages/updateUser.php">Update My details</a>
      <a href="/news/src/main/webapp/WEB-INF/pages/deleteUser.php">Delete My details</a>
    </div>
  </div> 
  
    <div class="dropdown">
    <button class="dropbtn">News
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="/news/src/main/webapp/WEB-INF/pages/addNews.php">Add News</a>
      <a href="/news/src/main/webapp/WEB-INF/pages/viewAll.php">View All News</a>
      <a href="/news/src/main/webapp/WEB-INF/pages/mypage.php">View My News</a>

    </div>
  </div> 
  
      <div class="dropdown">
    <button class="dropbtn">Information
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="/news/src/main/webapp/WEB-INF/pages/addInfo.php">Add Information</a>
      <a href="/news/src/main/webapp/WEB-INF/pages/viewAllInfo.php">View All Information</a>
      <a href="/news/src/main/webapp/WEB-INF/pages/viewmyInfo.php">View My Information</a>

    </div>
  </div>
  
        <div class="dropdown">
    <button class="dropbtn">Art
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="/news/src/main/webapp/WEB-INF/pages/addArt.php">Add Art</a>
      <a href="/news/src/main/webapp/WEB-INF/pages/kidsHomepage.php">View All Art</a>
      <a href="/news/src/main/webapp/WEB-INF/pages/viewMyArt.php">View My Art</a>

    </div>
  </div>
  
          <div class="dropdown">
    <button class="dropbtn">Feedback
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
  <a href="/news/src/main/webapp/WEB-INF/pages/comment/index.php">Add Feedback</a>

    </div>
  </div>
</div>
	
		</tr>

</table>
	 </td>
    </tr>
<!--------------------end nav bar------------------------------------->
<img src="/news/src/main/webapp/WEB-INF/images/logo.png" alt="" height="100%" width="15%" align="left">
<!----------------------reg form-------------------------------------->
    <tr>
      <td>
	<form action="register.php" method="post" name = "form" >	
		  
			<table width="1025" height="480" border="0">
  <tbody>
    <tr> 
      <td width="346">&nbsp;</td>
      <td width="346">&nbsp;</td>
      <td width="299">&nbsp;</td>
    </tr>
    <tr>
      <td height="58" colspan="3"><h1 align="center">REGISTRATION PAGE</h1></td>
      </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>FULL NAME</td>
      <td><input type="text" name="txtFullName" id="txtFullName" pattern="[a-zA-Z]+" title="Full Name must have alphabet characters only !" required></td>
      <td>&nbsp;</td>
    </tr>
	<tr>
      <td>E-MAIL</td>
      <td><input type="text" name="txtEmail" id="txtEmail" placeholder="abc@example.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="email must be XXX@XXXXX.XXX pattern" required></td>
      <td>&nbsp;</td>
    </tr>
	 <tr>
      <td>AGE</td>
      <td><input type="text" name="txtAge" id="txtAge" pattern="[0-9.]+" title="Age must have numeric characters only!" required></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>ADDRESS</td>
      <td><input type="text" name="txtAddress" id="txtAddress" required></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>GENDER</td>
      <td><input type="text" name="txtGender" id="txtGender" required></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>JOB</td>
      <td><input type="text" name="txtJob" id="txtjob" required></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>PASSWORD</td>
      <td><input type="password" name="password" id="password" pattern=".{5,10}" title="Enter 5 to 10 characters" required></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>CONFIRM PASSWORD</td>
      <td><input type="password" name="txtConfirmPassword" id="txtConfirmPassword" required/></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>  <input name="btnReset" type="reset" class="button" id="btnReset" value="Cancel" onclick="window.location.href='/news/src/main/webapp/WEB-INF/pages/login.php'"/></td>
      <td>  <input name="btnSubmit" type="submit" class="button" id="btnSubmit" value="Join Now"   /></td>
    </tr>  
  </tbody>
</table>
  
		  
		</form>		
	</td>
    </tr>
  </tbody>
</table>

<footer class="footer-distributed">

			<div class="footer-left">

				<h3><img src="/news/src/main/webapp/WEB-INF/images/logo.png" alt="" height="100%" width="50%" align="left"></h3>
<br><br><br><br><br><br>
				<p class="footer-links">
					<a href="#" class="link-1">Home</a>	
					<a href="#">Blog</a>
					<a href="#">About</a>				
					<a href="#">Faq</a>			
					<a href="#">Contact</a>
				</p>

				<p class="footer-company-name">KnowledgeTV @ 2021</p>
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>GREEN LAND 1 LANE</span> <span>HAITH, DELTOTA </span>SRI LANKA </p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>+94 75 056 7173 | +94 76 732 9647</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="https://mail.google.com/">lasankithirushan@gmail.com</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>About the company</span>
					We are Knowledge tv srilanka.This News app is Web
application where user have access to latest news from  all around the
world.
				</p>

				<div class="footer-icons">

					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-github"></i></a>

				</div>
				<br>

			</div>
         <div class="credit" align="center">created by <span>Team Incognito</span> | all rights reserved</div>
		</footer>



</body>
		<?php
	if(isset($_POST["btnSubmit"]))
	{
		$fullName = $_POST["txtFullName"];
		$email = $_POST["txtEmail"];
		$age = $_POST["txtAge"];
		$address = $_POST["txtAddress"];
		$gender = $_POST["txtGender"];
		$job = $_POST["txtJob"];
		$password = $_POST["password"];
	
	
		
		$con = 
		mysqli_connect("localhost","root","","newsdb");
		if(!$con)
		{
			die("sorry,we are facing a technical issue");
		}
		$sql = "INSERT INTO `usertb` (`password`, `email`, `fullName`, `age`, `address`, `gender`, `job`) VALUES ('".$password."', '".$email."', '".$fullName."', '".$age."', '".$address."', '".$gender."', '".$job."');";
		
	
		
		mysqli_query($con,$sql) ;
		mysqli_close($con);
		header('Location:login.php');
		
	}
	
	?>	
	
</html>