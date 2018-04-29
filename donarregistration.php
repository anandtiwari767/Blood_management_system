<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<style>


</style>
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
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About us</a>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search for the blood">
      <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
</div> 







<div class="container" style="margin-top: 60px">
<form style="border: 2px solid black; padding: 30px" action="addingdonar.php" method="post">
<h3 style="text-align:center"> Personal Information</h3>
<div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label">First Name*</label>
  <div class="col-10">
    <input class="form-control" type="text" placeholder="First name" name="fn" id="example-text-input" required>
  </div>
</div>
<div class="form-group row">
  <label for="example-search-input" class="col-2 col-form-label">Last Name*</label>
  <div class="col-10">
    <input class="form-control" type="text" placeholder="Last Name" name="ln" id="example-search-input" required>
  </div>
</div>
<div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label">AGE*</label>
  <div class="col-10">
    <input class="form-control" type="text" placeholder="20" id="example-text-input" required name="age" min="18" max="50">
  </div></div>
  <div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label">Weight*</label>
  <div class="col-10">
    <input class="form-control" type="text" placeholder="65" id="example-text-input" min="60" required name="weight">
  </div></div>
<div class="form-group row">
  <label for="example-email-input" class="col-2 col-form-label">Email*</label>
  <div class="col-10">
    <input class="form-control" type="email" placeholder="admin@gmail.com" name="email" id="example-email-input" required>
  </div>
</div>

<div class="form-group row">
  <label for="example-tel-input" class="col-2 col-form-label">Contact No.*</label>
  <div class="col-10">
    <input class="form-control" type="number" placeholder="08213569789" name="phoneno" id="example-tel-input">
  </div>
</div>

<div class="form-group row">
  <label for="example-number-input" class="col-2 col-form-label">Number</label>
  <div class="col-10">
    <input class="form-control" type="number" name="refno" placeholder="42" id="example-number-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-date-input" class="col-2 col-form-label">Date of Donation</label>
  <div class="col-10">
    <input class="form-control" type="date" name="date" placeholder="2011-08-19" id="example-date-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-time-input" class="col-2 col-form-label">Time of Donation</label>
  <div class="col-10">
    <input class="form-control" type="time" name="time" placeholder="13:45:00" id="example-time-input">
  </div>
</div>
<hr class="my-5">
<h3 style="text-align:center"> Address</h3>
<div class="form-group">
    
    <textarea class="form-control" id="exampleTextarea" rows="3" name="address" placeholder="enter your address"></textarea>
  </div>
  
  <h3 style="text-align:center"> Blood info</h3>
  <div class="form-group row">
  <label for="example-tel-input" class="col-2 col-form-label" >Blood Type*</label>
  <div class="col-10">
    <select class="form-control" id="exampleSelect1" required placeholder="A" name="bloodtype">
      <option>A+</option>
      <option>A-</option>
      <option>B+</option>
      <option>B-</option>
      <option>AB+</option>
      <option>AB-</option>
      <option>O+</option>
      <option>O-</option>
    </select>
  </div> 
  </div>
  <div class="form-group row">
  <label for="example-tel-input" class="col-2 col-form-label" >Hemoglobin*</label>
  <div class="col-10">
    <input class="form-control" type="text" placeholder="16.5" name="hemoglobin" id="example-tel-input" required min="12" max="22">
  </div>
</div>
  <div class="form-group">
  <label for="example-time-input" class="col-2 col-form-label">Storage Area</label>
    <textarea class="form-control" id="exampleTextarea" rows="3" name="storagearea" placeholder="Storage Area"></textarea>
  </div>
  <label class="custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input" required>
  <span class="custom-control-indicator"></span>
  <span class="custom-control-description">All these information is correct this should be the resposibity of admin</span>
</label>
  <button class="btn btn-outline-primary mx-auto d-block" style="width: 200px">Submit</button>

</form>
</div>
</body>
</html>