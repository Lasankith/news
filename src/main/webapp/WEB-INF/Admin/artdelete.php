<?php

$con = mysqli_connect("localhost","root","","newsdb");
if(!$con)
{
    die("sorry,we are facing a technical issue");
}

$sql = "DELETE FROM `arttbl` WHERE `arttbl`.`artID` = ".$_GET["id"];

mysqli_query($con,$sql);

?>
				<script> 
				window.location.href='art.php';
				</script>
				
				<?php

?>
