<?php 
	include_once 'controllers/Comment.php';
	$com = new Comment();
 ?>
<!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="utf-8">
	 <link rel="stylesheet" type="text/css" href="../../css/comment.css">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 	<title>Comment System</title>
 	<style>
 		.box{border: 6px solid #999;margin: 30px auto 0;padding: 20px;width: 1000px;height: 250px;overflow: scroll;}
 		.box ul{margin: 0;padding: 0;list-style: none;}
 		.box li{display: block;border-bottom: 1px dashed #ddd;margin-bottom: 5px;padding-bottom: 5px;}
 		.box li:last-child{border-bottom: 0 dashed #ddd;}
 		.box span{color: #888;}
		body
{
	
    background-image: url("/news/src/main/webapp/WEB-INF/images/5.jpg");
	background-repeat: no-repeat;
	background-size: cover;
    background-attachment: fixed;
    font-family: Baskerville, "Palatino Linotype", Palatino, "Century Schoolbook L", "Times New Roman", "serif";
    
  

}
		h1
{
	font-size:30px;
	color:yellow;
}

 	</style>
 </head>
 <body>
<img src="/news/src/main/webapp/WEB-INF/images/logo.png" alt="" height="100%" width="15%" align="left"> 
<table border="0" width="100%" height="40%">
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
 	<center><h1>Comment System</h1></center>
	 
 	<div class="box">
 		<ul>
 			<?php 
 				$result = $com->index();
 				while ($data = $result->fetch_assoc()) {
 			 ?>
 			<li><b style="color:white"><?php echo $data['name']; ?><b>  -  <?php echo $com->dateFormat($data['comment_time']); ?> <br>	 <h3><?php echo $data['comment'] ?></h3></li>
 			<?php } ?>
 		</ul>
 	</div><br><br>
 	<center>
 		<?php 
 			if (isset($_GET['msg'])) {
 				$msg = $_GET['msg'];
 				echo "<span style='color:green;font-size:20px'>".$msg."</span>";
 			}
 		 ?>
 	
	<div style="border-style: groove;width: 25%;height: 240px">
		<form action="post_comment.php" method="post"><br><br><br>
 		<table>
 			<tr>
 				<td>Your Name:</td>
 				<td><input style="width: 221px;height: 30px;" type="" name="name" placeholder="Please enter your name"></td>
 			</tr>
 			<tr>
 				<td>Comment:</td>
 				<td>
 					<textarea name="comment" rows="5" cols="30" placeholder="Please enter your comment"></textarea>
 				</td>
 			</tr>
 			<tr>
 				<td></td>
 				<td><input style="width: 230px;height: 40px;" type="submit" name="submit" value="Post"></td>
 			</tr>
 		</table>
 	</form>
	</div>
 	<center>
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