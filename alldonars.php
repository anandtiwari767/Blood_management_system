<?php
session_start();
if(!isset($_SESSION['username']))
header("location: index.php");
?>
<?php
$con=mysqli_connect("localhost","root","","admins");
$q1="select * from donarsinfo";
$data=mysqli_query($con,$q1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
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
    <form class="form-inline my-2 my-lg-0" action="search.php" method="get">
      <input class="form-control mr-sm-2" type="text" placeholder="Search for the blood" name="search">
      <button class="btn btn-outline-primary my-2 my-sm-0" type="submit" >Search</button>
    </form>
    <div style="padding:5px">
    <h5><?php echo $_SESSION['username'];?></h5></div>
    &nbsp&nbsp
    <a href="logout.php"><button type="button" class="btn btn-primary">Log out</button></a>
  </div>
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
for($i=0;$i<=$length-1;$i++){
$result=mysqli_fetch_array($data);
 echo '<tr>
   <th scope="row"> '.$i.'</th>
   <td>'.$result[1].'</td>
   <td>'.$result[2].'</td>
   <td>'.$result[12].'</td>
   <td>'.$result[13].'</td>
   <td>'.$result[3].'</td>
   <td>'.$result[4].'</td>
   <td>'.$result[4].'</td>
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