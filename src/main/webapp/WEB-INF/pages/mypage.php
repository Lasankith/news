<?php session_start();
if (!isset($_SESSION["email"]))
{
	header('Location:login.php');
}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="/news/src/main/webapp/WEB-INF/css/mypage.css">
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
<!----------------------login form-------------------------------------->
    <tr>
      <td> 
     
	    <h3 style="font-size: 50px" align="center"><mark>MY NEWS</mark></h3>
		    

					<?php
				$con = mysqli_connect("localhost","root","","newsdb");
				
				if(!$con)
				{
					die("Cannot connect to DB server");
				}
				$sql ="SELECT * FROM `newstbl` WHERE `email`='".$_SESSION['email']."'";
				
				$result = mysqli_query($con,$sql);
				
				if(mysqli_num_rows($result)> 0)
					
				{
					while($row = mysqli_fetch_assoc($result))
					{
						
					
				
				?>
		  
		  <table width="1015" border="0">
  <tbody>
    <tr>
      <td width="378"><h1>TOPIC : <?php echo $row['topic'];?></h1></td>
      <td width="175">&nbsp;</td>
    </tr>
    <tr>
      <td>
	
		  	<ul>
		<li><strong>USER : </strong><?php echo $row['email'];?></li>
		<li><strong>LOCATION :</strong><?php echo $row['location'];?></li>
		<li><strong>TIME : </strong><?php echo $row['time'];?></li>

	</ul>
		
	</td>
      <td>&nbsp;</td>
    
    </tr>
    <tr>
      <td><p class="information"><?php echo $row['description'];?></p></td>
      <td><a href="<?php echo $row['imagepath'];?>"><img src="<?php echo $row['imagepath'];?>" alt="" width="439" height="364"></a></td>
     		  
    </tr>
    <tr>
      <td height="52" style="font-size: 15px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="newsUpdate.php?id=<?php echo $row['newsID']; ?>"> edit</a> | <a href="newsDelete.php?id=<?php echo  $row['newsID']; ?>">delete</a></td>
      <td>&nbsp;</td>
      
    </tr>
  
  </tbody>
</table>
		  <hr>
		   <?php
						
				}
			}
				mysqli_close($con);
				?>
			  
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
</html>

