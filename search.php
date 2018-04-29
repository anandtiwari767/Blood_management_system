
<?php
session_start();
if(!isset($_SESSION['username']))
header("location: index.php");
?>
<?php

$search=$_GET['search'];

$con=mysqli_connect("localhost","root","","admins");
$q1="select * from donarsinfo where bloodtype='$search'";
$data=mysqli_query($con,$q1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="container">
<nav class="navbar navbar-toggleable-md navbar-light bg-success">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">Navbar</a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="adminpage.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About us</a>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0" method="get" action="search.php" >
      <input class="form-control mr-sm-2" type="text" placeholder="Search for the blood" name="search">
      <button class="btn btn-outline-primary my-2 my-sm-0" type="submit" >Search</button>
    </form>
  </div>
</nav>
</div>    





<div class="container" style="margin-top:100px;">

<table class="table table-inverse">
<thead>
 <tr>
   <th>#</th>
   <th>First Name</th>
   <th>Last Name</th>
   <th>AGE</th>
   <th>WEIGHT</th>
   <th>Email</th>
   <th>Contact No. </th>
   <th>address </th>
   <th>Blood Type</th>
   <th>Storage Area</th>
   
 </tr>
</thead>
<tbody>
<?php 
$length=mysqli_num_rows($data);
if($length>0){
for($i=1;$i<=$length;$i++){
$result=mysqli_fetch_array($data); 
 echo '<tr>
   <th scope="row">'.$i.'</th>
   <td>'.$result[1].'</td>
   <td>'.$result[2].'</td>
   <td>'.$result[12].'</td>
   <td>'.$result[13].'</td>
   <td>'.$result[3].'</td>
   <td>'.$result[4].'</td>
   <td>'.$result[8].'</td>
   <td>'.$result[9].'</td>
   <td>'.$result[11].'</td>
 </tr>';}}
 else
 echo '<div class="alert alert-danger" role="alert">
 <strong>OOPS!</strong> Their is no detail for this blood Group.
</div>';  
?>
</tbody>
</table> 
</body>
</html>