<?php
session_start(); 

if(isset($_POST['btnSubmit']))
{
    
    $email = $_POST['txtEmail'];
    
    $con =
    mysqli_connect("localhost","root","","newsdb");
    if(!$con)
    {
        die("sorry,we are facing a technical issue");
    }
    
    $sql = "DELETE FROM `usertb` WHERE `usertb`.`email` = '$email' ";
    
    mysqli_query($con,$sql) ;
    mysqli_close($con);
    header('Location:/news/src/main/webapp/WEB-INF/pages/login.php');
}

?>