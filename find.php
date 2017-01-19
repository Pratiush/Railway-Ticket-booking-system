<?php
session_start();
if(isset($_SESSION['uname']))
{
	
}



?>
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
body{
	
	height:100%;	
}

html { 
  /*background: url("http://localhost/WebProject/a.jpg.jpg") no-repeat center center fixed; */
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
img{
    min-height:100%;
    min-width:100%;
    height:auto;
    width:auto;
    position:absolute;
    top:-100%; bottom:-100%;
    left:-100%; right:-100%;
    margin:auto;
}
.wrapper{
	min-height: 100%;
	
    height: auto !important;
    height: 100%;
    margin: 0 auto -155px; 
}
}
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
.tb-1{
	height:500px;
	width:500px;
}
.h-2{
	color:#000000;
	font-size:50px;
}
</style>
  
  
</head>
<body >
<div class="wrapper" style="background-repeat:no repeat;">


<nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="home.php">BookMyRail.com</a>
    </div>
    
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Hi! <?php echo"{$_SESSION['uname']}"?></a></li>
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
  </div>
</nav>
 
<div class="container-fluid text-center">

<h2 class="h-2">BookMyRail.Com</h2>

</div>

<?php
mysql_connect("localhost","root","");
mysql_select_db("bmr");

$query1="SELECT * FROM `train` WHERE tnumber='12345'";
$result1=mysql_query($query1);
$query2="SELECT * FROM `train` WHERE tnumber='13456'";
$result2=mysql_query($query2);
$query3="SELECT * FROM `train` WHERE tnumber='12346'";
$result3=mysql_query($query3);
$query4="SELECT * FROM `train` WHERE tnumber='12347'";
$result4=mysql_query($query4);
$row1 = mysql_fetch_array($result1, MYSQL_ASSOC);
$row2 = mysql_fetch_array($result2, MYSQL_ASSOC);
$row3 = mysql_fetch_array($result3, MYSQL_ASSOC);
$row4 = mysql_fetch_array($result4, MYSQL_ASSOC);






?>


<div class="container tb-1" >
<table class="table table-hover">
    <thead>
      <tr>
	    <th>Train Number</th>
        <th>Train Name</th>
        <th>Arrival Time</th>
        <th>Departure Time</th>
		<th>Available Seats</th>
		<th>Booking</th>
      </tr>
    </thead>
    <tbody>
      <tr>
	    <td>12345</td>
        <td>ald exp</td>
        <td>12.00</td>
		<td>12.05</td>
		<td><?php echo"{$row1['avail']}" ?></td>
     <td><button type="submit" class="btn-primary btn-xs" data-toggle="modal" data-target="#myModal" method="POST" action="book.php">Book</button></td></tr>
      <tr>
        <td name="tnumber">13456</td>
        <td name="tname">pnbe Exp</td>
        <td name="atime">12.30</td>
		<td name="dtime">12.35</td>
		<td name="avail"><?php echo"{$row2['avail']}" ?></td>
      <td><button type="submit" class="btn-primary btn-xs" data-toggle="modal" data-target="#myModal">Book</button></td></tr>
      <tr>
        <td>12346</td>
        <td>delhi Exp</td>
        <td>01.00</td>
		<td>01.05</td>
		<td><?php echo"{$row3['avail']}" ?></td>
      <td><button type="submit" class="btn-primary btn-xs "data-toggle="modal" data-target="#myModal">Book</button></td></tr>
	  <tr>
        <td>12347</td>
        <td>rajdhani exp</td>
        <td>01.00</td>
		<td>01.05</td>
		<td><?php echo"{$row4['avail']}" ?></td>
      <td><button type="submit" class="btn-primary btn-xs "data-toggle="modal" data-target="#myModal">Book</button></td></tr>
    </tbody>
  </table>

</div>

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Book Tickets</h4>
        </div>
        <div class="modal-body">
           <form method="POST" action="bookticket.php">
		   
		   Enter Train Number:<br>
		   <input type="text" name="tnumber" size="30"><br>
		   
		   Number of Tickets:<br>
		   <input type="text" size="30" name="nt" ><br>
		  
		  <br><br>
		  <button type="submit" class="btn btn-info btn-lg" >Book</button>
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
