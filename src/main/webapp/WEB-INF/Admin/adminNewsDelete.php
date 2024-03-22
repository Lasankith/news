<?php

$con = mysqli_connect("localhost","root","","newsdb");
if(!$con)
{
    die("sorry,we are facing a technical issue");
}

$sql = "DELETE FROM `newstbl` WHERE `newstbl`.`newsID` = ".$_GET["id"];

mysqli_query($con,$sql);

?>
				<script> 
				window.location.href='adminNewsManagement.php';
				</script>
				
				<?php

?>
