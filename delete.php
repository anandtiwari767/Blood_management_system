<?php
{

$q2="delete from donarsinfo where id=$result[0]";
mysqli_query($con,$q2);
header("location:deletedlastregis.php");  
}
?>