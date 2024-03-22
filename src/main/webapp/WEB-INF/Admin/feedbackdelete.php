<?php

$con = mysqli_connect("localhost","root","","newsdb");
if(!$con)
{
    die("sorry,we are facing a technical issue");
}

$sql = "DELETE FROM `tbl_comments` WHERE `tbl_comments`.`id` = ".$_GET["id"];

mysqli_query($con,$sql);

?>
				<script> 
				window.location.href='feedbackManage.php';
				</script>
				
				<?php

?>
