<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <style>
    body{
      background-color:#C4C6D0;
    }
    h1 {
  color:white; background-color:black;
  }
  marquee{color: white;}
  </style>
</head>

<body>
  <div  >
      <h1>CAR RENTAL SYSTEM</h1>
      <marquee>WE BELIVE IN BEST QUALITY AND SERVICES......</marquee>
  </div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">ADMIN</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="home.php">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Car List<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="4seater.php">4 seater</a></li>
          <li><a href="7seater.php">7 seater</a></li>
          <li><a href="10seater.php">10 seater</a></li>
        </ul>
      </li>
      <li><a href="about.php">About us</a></li>
      <li><a href="contact.php">Contact us</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="homelogin.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>


<!======================================these are terms condition========================================>
<div>
  <h2>1>Please Remember Car Id While Booking Until Booking Will Not Complete. </h2>
  <h2>2>No Refund Will Be Given.</h2>
  <h2>3>If Car Had Any Damege While Completion OF Trip The  penalty will charged from you.</h2>
  <h2>4>When You Come To Get A Car From Our Office You Need To Pay 50% Amount.</h2>
  <h2>5>Original Documents Are Essential for Booking.</h2>
  <h2>6>If you Extends Time The Extra Charges Will Be Conducted.</h2>
  <h2>7>IF All Condition Are Accept Then Book Our Car.</h2>
  <h4><p align="center"><input type="checkbox" name="Accept" required> &nbsp;&nbsp;&nbsp;I Accept All Terms And Condition.</p></h4>

  <h3 align="center">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="4seater.php">
        <input type="button" name="book now" value="book now"></a>
  </h3>
  <br><br><br>
  <h1 align="center">.....THANK YOU......</h1>
</div>






</body>
</html>
