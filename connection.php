<?php
$c=0;
$link=mysqli_connect("localhost","root","","admins");
$username= $_POST['username'];
$password=$_POST['password'];

if(mysqli_connect_error())
die("Unable to coonect to database");
$q1="select * from admininfo ";

$table_info=mysqli_query($link,$q1);
$length=mysqli_num_rows($table_info);


for($i=1;$i<=$length;$i++)
{
    $result=mysqli_fetch_array($table_info);
    //print_r ($result);
    if($result[1]==$username&&$result[2]==$password)
    {
        $c=2;
        break;
    }
    
}
if($c==2)
header("location:adminpage.php");
else 
echo "<script>alert('Your username and password is incorrect Login only if you are admin '); window.location.href='index.php';</script>";

?>