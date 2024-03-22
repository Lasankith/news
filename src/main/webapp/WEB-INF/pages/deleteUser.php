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
<link rel="stylesheet" type="text/css" href="/news/src/main/webapp/WEB-INF/css/delete.css">
<title>Untitled Document</title>
</head>
<body>
<br>

<form action="deleteUserQuery.php" method="POST" >
<label ><mark>Enter Your Current Email Address :</mark></label><br>
<input type="text" id="txtEmail" name="txtEmail" value="<?php echo $_SESSION["email"];?>"><br><br>
 <input name="btnSubmit" type="submit" class="button" id="btnSubmit" value="Delete My Account"   />
 <input name="btnReset" type="reset" class="button" id="btnReset" value="Cancel"  onclick="window.location.href='/news/src/main/webapp/WEB-INF/pages/home.php'" />
 </form>
 
 
</body>
</html>

