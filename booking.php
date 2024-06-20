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
      background-color: #e6f9ff;
    }
  h1 
    {
      color:white; background-color: #17202A;
    }
  marquee
    {
      color: #17202A;
    }
  table
    {
      position: absolute;
      right: 20px;
      width: 450px;
      padding: 10px;
      font-size: 20px;
    }
  h2
    {
      color:white; background-color:black ;
    }

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
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>


<!heading here.......................................................>

  
<h2>booking here</h2>
<table align="right">
  <form action="dbbooking.php" method="post">
      <tr>
        <td>
          <br><label>Car id :</label>
          <select name="carid" id="carid">
                          <option value=""></option>
                          <option value="0001">&nbsp;&nbsp;&nbsp;0001&nbsp;&nbsp;&nbsp;</option>
                          <option value="0002">&nbsp;&nbsp;&nbsp;0002&nbsp;&nbsp;&nbsp;</option>
                          <option value="0003">&nbsp;&nbsp;&nbsp;0003&nbsp;&nbsp;&nbsp;</option>
                          <option value="0004">&nbsp;&nbsp;&nbsp;0004&nbsp;&nbsp;&nbsp;</option>
                          <option value="0005">&nbsp;&nbsp;&nbsp;0005&nbsp;&nbsp;&nbsp;</option>
                          <option value="0006">&nbsp;&nbsp;&nbsp;0006&nbsp;&nbsp;&nbsp;</option>
            </select><br>
        </td>
      </tr>
      <tr>
        <td>
          <br><label>Book id :&nbsp;&nbsp;<input type="text" name="bookid" required></label><br>
        </td>
      </tr>
      <tr>
        <td>
          <br><label>Full Name :&nbsp;&nbsp;<input type="text" name="firstname" required></label><br>
        </td>
      </tr>
      
      <tr>
        <td>
          <br><label>Email :&nbsp;&nbsp;<input type="email" name="email" required></label><br>
        </td>
      </tr>
      <tr>
        <td>
          <br><label>Mobile Num :&nbsp;&nbsp;<input type="text" name="mobile" required></label><br>
        </td>
      </tr>
      <tr>
        <td>
          <br><label>Address :&nbsp;&nbsp;<input type="text" name="address" required></label><br>
        </td>
      </tr>
      <tr>
        <td>
          <br><label>From Dest. :&nbsp;&nbsp;</label>
            <select name="fromdest" id="fromdest">
                          <option value="">--</option>
                          <option value="Nashik">Nashik</option>
                          <option value="Pune">Pune</option>
                          <option value="Dhule">Dhule</option>
                          <option value="Nandurbar">Nandurbar</option>
                          <option value="Mumbai">Mumbai</option>
            </select><br>
        </td>
      </tr>
      <tr>
        <td>
          <br><label>To Dest. :&nbsp;&nbsp;</label>
            <select name="todest" id="todest">
                          <option value="">--</option>
                          <option value="Nashik">Nashik</option>
                          <option value="Pune">Pune</option>
                          <option value="Mumbai">Mumbai</option>
                          <option value="Nandurbar">Nandurbar</option>
                          <option value="Dhule">Dhule</option>
            </select><br>
        </td>
      </tr>
      <tr>
        <td>
          <br><label>Date :&nbsp;&nbsp;<input type="date" name="date" ></label><br>
        </td>
      </tr>
      <tr>
        <td>
          <br><p align="center"><input type="submit" class="btn btn-success" value="submit" name="submit"></p><br><br>
        </td>
      </tr>
      

  </form>
</table>





</body>
</html>
