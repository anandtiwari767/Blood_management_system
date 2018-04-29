<?php
session_start();
if(!isset($_SESSION['username']))
header("location: index.php");
?>
<?php
$con=mysqli_connect("localhost","root","","admins");
$fname=$_POST['fn'];
$lname=$_POST['ln'];
$email=$_POST['email'];
$phoneno=$_POST['phoneno'];
$refno=$_POST['refno'];
$dod=$_POST['date'];
$dot=$_POST['time'];
$address=$_POST['address'];
$bloodtype=$_POST['bloodtype'];
$hemoglobin=$_POST['hemoglobin'];
$storagearea=$_POST['storagearea'];
$age=$_POST['age'];
$weight=$_POST['weight'];
//echo $dod." ".$dot." ".$age." ".$fname." ".$lname." ".$email." ".$phoneno." ".$refno." ".$address." ".$bloodtype;
if(mysqli_connect_error())
{
echo '<script>alert("their is a problem with ")</script>';
header("location : donarregistration.php");
}
else
{
 $q1="insert into donarsinfo(firstname,lastname,email,phoneno,refno,dod,dot,address,bloodtype,hemoglobin,storagearea,age,weight)
  values('$fname','$lname','$email',$phoneno,'$refno','$dod','$dot','$address','$bloodtype',$hemoglobin,'$storagearea',$age,$weight)";
mysqli_query($con,$q1);
  header("location: check.php?message=success");
echo "registration successfull";
}

?>