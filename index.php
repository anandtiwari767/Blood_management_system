<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<style>

.jumbotron{
 height:600px;
  background-image: url("jumbo.png");
  background-repeat: no-repeat;
  background-size: cover;
padding-left:100px;
padding-top: 450px;}

</style>

</head>
<body>
<div class="container">
<nav class="navbar navbar-toggleable-md navbar-light bg-success">
  <button class="navbar-toggler navbar-toggler-righ100ype="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">Navbar</a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About Us</a>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0" method="post" action="connection.php">
      <input class="form-control mr-sm-2" type="text" placeholder="Username" required name="username">
      <input class="form-control mr-sm-2" type="password" placeholder="Password" required name="password">
      <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">login</button>
    </form>
  </div>
</nav>
</div>
<div class="container" style="margin-top: 10px">
<div class="jumbotron">
  <h1 class="display-3"></h1>
  <p class="lead"></p>
 
  <p style="text-align: center"><strong>Search for the blood group for availability</strong></p>
  <p class="lead">
  <form class="form-inline my-2 my-lg-0 justify-content-center">
      <input class="form-control mr-md-4" type="text" placeholder="Search for blood Group" style="width: 500px" >
      <button type="button" class="btn btn-success">Success</button>
    </form>
  </p>
</div>
</div>
</body>