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
    
  body
    {
     background-color: #F3EAED;
    }
  h1 
    {
      color:white; background-color: #17202A ;
    }
  marquee
    {
      color:red;
    }

  form 
    {
      position: absolute;
      right: 50px;
      width: 500px;
      padding: 10px;
      font-size: 20px;
    }
  p
    {
      color: black;
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

<!heading here.......................................................>

  
<h2>sign up here....</h2>
<div class="register">
  <form action="signupdb.php" method="post">
  <table align="right">
    <tr>
      <td>
        <label>User ID &nbsp;&nbsp;:&nbsp;&nbsp;</label><input type="text" name="userid" required><br><br>
      </td>
    </tr>
    <tr>
      <td>
        <label>First Name &nbsp;&nbsp;:&nbsp;&nbsp;</label><input type="text" name="firstname" required><br><br>
      </td>
    </tr>
    <tr>
      <td>
        <label>Last Name &nbsp;&nbsp;:&nbsp;&nbsp;</label><input type="text" name="lastname" required><br><br>
      </td>
    </tr>
    <tr>
      <td>
        <label>Address &nbsp;&nbsp;:&nbsp;&nbsp;</label><input type="text" name="address" required><br><br>
      </td>
    </tr>
    <tr>
      <td>
        <label>Mobile Num:&nbsp;&nbsp;:&nbsp;&nbsp;</label><input type="text" name="mobile"><br><br>
      </td>
    </tr>
    <tr>
      <td>
        <label>Gender &nbsp;&nbsp;:&nbsp;&nbsp;</label>&nbsp;&nbsp;
        <input type="radio" name="gender" value="Male">Male &nbsp;&nbsp;
        <input type="radio" name="gender" value="Female">Female <br><br>
      </td>
    </tr>
     </tr>
     <tr>
      <td>
        <label>Username &nbsp;&nbsp;:&nbsp;&nbsp;</label><input type="text" name="username" required><br><br>
      </td>
     </tr>
     <tr>
      <td>
        <label>Password &nbsp;&nbsp;:&nbsp;&nbsp;</label><input type="password" name="password" required><br><br>
      </td>
    </tr>
    <tr>
      <td>
        <label>Email &nbsp;&nbsp;:&nbsp;&nbsp;</label><input type="email" name="email" required><br><br>
      </td>
    </tr>
    <tr>
      <td>
        <p align="center"><input type="submit" class="btn btn-success" value="signup" name="signup"></p><br><br>
      </td>
    </tr>
     
       </table>
  </form>

</div>

  


</body>
</html>


