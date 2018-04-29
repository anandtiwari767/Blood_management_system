<?php
if($_GET['message']=="success")
header("location: doneradded.php");
else
header("location: doneraddederror.php");


?>