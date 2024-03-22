<?php

$con = mysqli_connect("localhost","root","","newsdb");
if(!$con)
{
    die("sorry,we are facing a technical issue");
}

$sql = "DELETE FROM `infotbl` WHERE `infotbl`.`infoID` = ".$_GET["id"];

mysqli_query($con,$sql);

?>
				<script> 
				window.location.href='infomanage.php';
				</script>
				
				<?php

?>
