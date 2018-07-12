<?php
$username=$_POST['username'];
$password= $_POST['password'];
$password1=$_POST['password1'];


if($password!=$password1)
{
    echo "<script>alert('enter the password same  '); window.location.href='form.php';</script>";
}
else
{
  $link=mysqli_connect("34.239.121.22","root","","admins");
    $q="insert into admininfo(username,password) values('$username','$password')";
    mysqli_query($link,$q);
    header("location:useradded.php");
}
?>