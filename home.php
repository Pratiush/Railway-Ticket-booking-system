<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <style>
.container-fluid {
    padding-top: 100px;
    padding-bottom: 100px;
}
.nb-1{
	height:25px;
	
}
.ft-1{
	height:50px;
	background-color:#2f2f2f;
	color: #ffffff;
	vertical-align:center;
	padding-top:10px;
	align:bottom;
	width:100%;
}
html,body { 
  background: url("http://localhost/WebProject/a.jpg.jpg") no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
.bt-1{
	height:100px;
	width:400px;
	font-size:40px;
	-moz-outline:0 none;
	outline:0 none;
	
}

</style>
  
  
</head>
<body >
<nav class="navbar navbar-inverse nb-1">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">BookMyRail.com</a>
    </div>
    
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#">About Us</a></li>
      <li><a href="contact.php">Contact Us</a></li>
    </ul>
  </div>
</nav>

<div class="container-fluid text-center">

<button type="submit" focus="false" class="btn btn-primary btn-lg bt-1">BookMyRail.Com</button>
  
</div>
  
  <!-- Trigger the modal with a button -->
 

<div class="container-fluid text-center">

<button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">Login</button>
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal1">SignUp</button>
</div> 
  
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Login</h4>
        </div>
        <div class="modal-body">
          <form method="POST" action="login.php">
		  Username:<br>
		  <input type="Text" size="30" name="uname" required><br>
		  Password:<br>
		  <input type="Text" size="30" name="password" required><br><br>
		  <button type="submit" class="btn btn-info btn-lg" >Login</button>
		 
		  </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Register</h4>
        </div>
        <div class="modal-body">
          <form method="POST" action="connect.php">
		  Name:<br>
		  <input type="text" size="30" name="name" required ><br>
		  Phone:<br>
		  <input type="tel" size="30" name="phone" pattern='[\+]\d{2}[\(]\d{2}[\)]\d{4}[\-]\d{4}'title='Phone Number (Format: +99(99)9999-9999)' required><br>
		  Email:<br>
		  <input type="email" size="30" name="email" required><br>
		  Username:<br>
		  <input type="text" size="30" name="uname" required><br>
		  Password:<br>
		  <input type="text" size="30" name="password" required><br><br>
		  
		  <button type="submit" class="btn btn-info btn-lg" >SignUp</button>
		  
		  
		  </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  

<footer class="navbar navbar-fixed-bottom ft-1 text-center">
  <p>Web Project under guidance of  <a href="http://www.netcamp.in/">netcamp.in</a></p> 
</footer>
</body>
</html>
