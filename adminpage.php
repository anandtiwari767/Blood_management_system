<?php
session_start();
if(!isset($_SESSION['username']))
header("location: index.php");
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
      <li class="nav-item">
        <a class="nav-link" href="form.php">Add User</a>
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
</nav>
</div>
<div class="container" style="margin-top:200px">
<div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="Blood-Donation.jpg" alt="Card image cap">
   <a href="donarregistration.php"> <div class="card-block">
      <h4 class="card-title">Add a new Donar</h4>
      <p class="card-text">Click to add a new blood donar</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div></a>
  </div>
  <div class="card">
    <img class="card-img-top" src="bloodmanage.png" alt="Card image cap">
   <a href="alldonars.php"> <div class="card-block">
      <h4 class="card-title">Details of the donar</h4>
      <p class="card-text">Click to know about all the detais of the donar</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div></a>
  </div>
 
</div>
</div>

</div>
</body>
</html>