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
    background-color: #ffe6e6;
  }
  
 h2{
  font-size: 50px;
}
h1 {
  color:white; background-color: #191817;
  }
  marquee{color:red;}
  </style>
</head>

<body>
  <div  >
  <h1>
      <img src="symbol/symbol.png" class="img-circle" alt="Cinque Terre" height="35" width="50">
         CAR RENTAL SYSTEM
      <img src="symbol/symbol.png" class="img-circle" alt="Cinque Terre" height="35" width="50">
  </h1>
  <marquee>WE BELIVE IN BEST QUALITY AND SERVICES......</marquee>
  </div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="adminlogin.php">ADMIN</a>
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
  

.<!information here.....................................................................................>

<div align="center" >
  <h2>contact us..</h2>
  
</div>


</body>
</html>
.<!information here.....................................................................................>

<table align="center">

  <tr>
      <td>
          <p><img src="symbol/mail.png" height="40" width="40"> :- carrental@gmail.com &nbsp;&nbsp;&nbsp;</p>
          <p><img src="symbol/insta.jpg" height="40" width="40"> :- carrental29&nbsp;&nbsp;&nbsp;</p>
      </td>
      <td>
        <p><img src="symbol/wp.jpg" height="40" width="40"> :- +918551929783&nbsp;&nbsp;&nbsp;</p>
        <p><img src="symbol/linkedin.png" height="40" width="40"> :- carrental@example&nbsp;&nbsp;&nbsp;</p>
      </td>
      <td>
        <p><img src="symbol/fb.png" height="40" width="40"> :- carrentalex &nbsp;&nbsp;&nbsp;</p>
        <p><img src="symbol/tel.png" height="40" width="40"> :- 02568-274569 &nbsp;&nbsp;&nbsp;</p>
      </div>
  </tr>
</table>

<!curoser    here.............................................................................>
<br><br><br><br><br>
<div align="center";>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="image/1.jpg" height="500" width="400">
      
    </div>

    <div class="item">
      <img src="image/2.jpg"  height="500" width="400">

    </div>

    <div class="item">
      <img src="image/3.jpg"  height="500" width="400">
      
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>