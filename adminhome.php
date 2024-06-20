<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style type="text/css">
h1 
{
  color:white; background-color: #17202A;
}
marquee
{
  color: white;
}
body{
  background-color: #f0b9b6;
}
.home{background-color: #fcfcfc;} /* Green */
.home:hover {background-color: #f8ff6e;}

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
      
    </div>
    <ul class="nav navbar-nav">
      <li><a href="home.php"><button class="btn btn-danger navbar-btn">HOME</button></a></li>
      <li><a href="admindata/reguser.php"><button class="btn btn-danger navbar-btn">REGISTERED DETAILS</button></a></li>
      <li><a href="admindata/bookuser.php"><button class="btn btn-danger navbar-btn">BOOKED DETAILS</button></a></li>
      <li><a href="admindata/adminuser.php"><button class="btn btn-danger navbar-btn">ADMIN  DETAILS</button></a></li>
    </ul>
    </div>
</nav>



<!.................................../details/...............................>

<form action="admindata/searchuserdb.php" method="post">
 <table>
  <tr>
    <td>
      <h3>
        <label>SEARCH CUSTOMER BY ID :&nbsp;&nbsp;&nbsp;<input type="text" placeholder="Search.." name="userid"></label>
        <input type="submit" class="btn btn-primary" value="search" name="search">
      </h3>
    </td>
  </tr>
  </table> 
</form>
<form action="admindata/bookingbydatedb.php" method="post">
 <table>
    <tr>
      <td>
        <h3>
          <label>SEARCH BOOKING BY DATE :&nbsp;&nbsp;&nbsp;<input type="date" placeholder="Search.." name="date"></label>
          <input type="submit" class="btn btn-primary" value="search" name="search">
        </h3>
      </td>
    </tr>
  </table> 
</form>




</body>
</html>
