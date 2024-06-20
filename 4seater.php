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
    body{background-color:#E5B3B3;}

     h1 {
  color:white; background-color:#000000 ;
  }
  marquee{color: white;}

  

h2{
  color:white; background-color:black ;
  }

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

<!cars code here...../.........................................................................................>

<h2>Please Remember car Id while Booking....</h2>

<table>
 <!THARBLACK...../.........................................................................................>
  <tr>
    <td><br><img src="carimage/thar1.jpg" height="300" width="400"></td>
    <td></td>
    <td><h3>&nbsp;&nbsp;Mahindra Thar Black :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3></td>
    <td>
      <h4>CAR ID:-0001</h4>
      <h4>MODEL:-2021</h4>
      <h4>COLOR:-black</h4>
      <h4>RATE:-5000/day</h4>
      <br><a href="terms.php"><h4>TERMS AND CONDITION</h4></a>
    </td>
    <td>
      <h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="booklogin.php">
        <input type="button" class="btn btn-primary" name="book now" value="book now"></a>
      </h3>
    </td>
   
  </tr>
  <!SWIFT...../.........................................................................................>
  <tr>
    <td><br><img src="carimage/swift1.jpg" height="300" width="400"></td>
    <td></td>
    <td><h3>&nbsp;&nbsp;Maruti Suzuki Swift :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3></td>
    <td>
      <h4>CAR ID:-0002</h4>
      <h4>MODEL:-2012</h4>
      <h4>COLOUR:-white</h4>
      <h4>RATE:-1000/day</h4>
      <br><a href="terms.php"><h4>TERMS AND CONDITION</h4></a>
    </td>
    <td>
      <h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="booklogin.php">
        <input type="button" class="btn btn-primary" name="book now" value="book now"></a>
      </h3>
    </td>
  </tr>
  
  <!MAHINDRA TUV...../.........................................................................................>
  <tr>
    <td><br><img src="carimage/tuv1.jpg" height="300" width="400"></td>
    <td></td>
    <td><h3>&nbsp;&nbsp;Mahindra TUV 300 :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3></td>
    <td>
      <h4>CAR ID:-0003</h4>
      <h4>MODEL:-2015</h4>
      <h4>COLOUR:-red</h4>
      <h4>RATE:-2000/day</h4>
      <br><a href="terms.php"><h4>TERMS AND CONDITION</h4></a>
    </td>
    <td>
      <h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="booklogin.php">
        <input type="button" class="btn btn-primary" name="book now" value="book now"></a>
      </h3>
    </td>
  </tr>
  

  

</table>




	




</body>
</html>