<!DOCTYPE html>
<html lang="en">
<head>
  <title>Find Trains</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  .ft-1{
	height:50px;
	background-color:#2f2f2f;
	color: #ffffff;
	vertical-align:center;
	padding-top:10px;
	align:bottom;
	width:100%;
}
  </style>
  </head>

<body>
<div class="container">
  <h3 class="text-center">Contact</h3>
  <p class="text-center"><em>We love feedback from customer.</em></p>
  <div class="row test">
    <div class="col-md-4">
      <p></p>
      <p><span class="glyphicon glyphicon-map-marker"></span>MNNIT,UP</p>
      <p><span class="glyphicon glyphicon-phone"></span>Phone: +91 0123456789</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: mail@mail.com</p> 
    </div>
    <div class="col-md-8">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br><br>
      <div class="row">
        <div class="col-md-12 form-group">
          <a href="mailto:pratiush309@gmail.com?Subject= Thanks for best service " target="_top"><button class="btn pull-right" type="submit">Send</button></a>
        </div>
      </div> 
    </div>
  </div>
</div>

<footer class="navbar navbar-fixed-bottom ft-1 text-center">
  <p>Web Project under guidance of  <a href="http://www.netcamp.in/">netcamp.in</a></p> 
</footer>
</body>