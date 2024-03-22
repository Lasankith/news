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
<link rel="stylesheet" type="text/css" href="/news/src/main/webapp/WEB-INF/css/addArt.css">
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
	 </td>
    </tr>
<!--------------------end nav bar------------------------------------->
<img src="/news/src/main/webapp/WEB-INF/images/logo.png" alt="" height="100%" width="15%" align="left">
<!---------------------- form-------------------------------------->
    <tr>
    
     <?php
		
		$con = mysqli_connect("localhost","root","","newsdb");
				
				if(!$con)
				{
					die("Cannot connect to DB server");
				}
				$sql ="SELECT * FROM `arttbl` WHERE `artID`='".$_GET['id']."'";
				$image="";
				$result = mysqli_query($con,$sql);
				
				if(mysqli_num_rows($result)> 0)
					
				{
					$row = mysqli_fetch_assoc($result);
					$image = $row['imagepath'] ;
		
		  ?>
		
      <td> <form action="updateArt.php?id=<?php echo $_GET['id'];?>" method="post" enctype="multipart/form-data">
		
		
		<table width="1096" height="588" border="0">
  <tbody>
    <tr>
      <td height="84" colspan="3"><h1 align="center">ADD ART</h1></td>
      </tr>
    <tr>
      <td width="248" height="20">&nbsp;</td>
      <td width="257">&nbsp;</td>
      <td width="577">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><strong>TOPIC</strong></td>
      <td><input type="text" name="txtTopic" id="txtTopic" value="<?php echo $row['topic'];?>"></td>
    </tr>
    <tr>
      <td height="124">&nbsp;</td>
      <td><strong>FULL NAME</strong></td>
      <td><textarea id="txtFullname" name="txtFullname"><?php echo $row['fullName'];?></textarea></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><strong>IMAGE</strong></td>
      <td><input type="file" name="fileImage" id="fileImage" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><strong>DATE</strong></td>
      <td><input type="text" name="txtDate" id="txtDate" value="<?php echo $row['date'];?>"></td>
    </tr>
    <tr>
      <td height="84">&nbsp;</td>
      <td><input type="checkbox" name="chkPublish" id="chkPublish"  <?php if($row['status']== 1)
					{
						echo "checked";
					} 
					?> />
          Publish this
			<br>
				  			  <?php
			  if(isset($_POST["btnSubmit"]))
			  {
				  $fullName = $_POST["txtFullname"];
				  $date = $_POST["txtDate"];
				  $topic = $_POST["txtTopic"];
				  if(isset($_POST["chkPublish"]))
				  {$status = 1; }
				  else
				  { $status = 0; }
				  
				   
				  if(is_uploaded_file($_FILES['fileImage']['tmp_name']))
				{
   				$image = "Arts/".basename($_FILES["fileImage"]["name"]);
				move_uploaded_file($_FILES["fileImage"]["tmp_name"],$image);
				}  
				  
				  		$con = 
			mysqli_connect("localhost","root","","newsdb");
		   if(!$con)
		    {
			die("sorry,we are facing a technical issue");
		     }
				  
		     $sql = "UPDATE `arttbl` SET `email` = '".$_SESSION["email"]."', `fullName` = '".$fullName."', `date` = '".$date."', `topic` = '".$topic."', `status` = '".$status."', `imagepath` = '".$image."' WHERE `arttbl`.`artID` = ".$_GET['id'].";";
				 
				 if( mysqli_query($con,$sql))
				 {
					 echo "Creation uploader successfully";
				 }
				  else
					  echo "Opps something is wrong, please select the file again";
				  
				  //rest of the DB code
				  	
	                
			  }
			  ?>
	
	
            <br />
		
		
		</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="68">&nbsp;</td>
      <td><input name="btnReset" type="reset" class="button" id="btnReset" value="Cancel"  onclick="window.location.href='/news/src/main/webapp/WEB-INF/pages/kidsHomepage.php'" /></td>
      <td><input name="btnSubmit" type="submit" class="button" id="btnSubmit" value="Add Now"   /></td>
    </tr>
  </tbody>
			 			  <?php }
		?>
</table>
</form>
	 </td>
    </tr>
  </tbody>
</table>
	<br>
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
