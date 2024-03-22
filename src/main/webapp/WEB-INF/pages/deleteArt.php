<?php session_start();
if (!isset($_SESSION["email"]))
{
    header('Location:login.php');
}
$con = mysqli_connect("localhost","root","","newsdb");
if(!$con)
{
    die("sorry,we are facing a technical issue");
}

$sql = "DELETE FROM `arttbl` WHERE `arttbl`.`artID` = ".$_GET["id"];

mysqli_query($con,$sql);
header('Location:/news/src/main/webapp/WEB-INF/pages/viewMyArt.php');

?>
