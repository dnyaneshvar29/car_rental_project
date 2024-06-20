<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <style type="text/css">
    tr{
      background-color: #B3D579;
    }
  </style>
</head>
<body>


<?php
$servername="localhost";
$username="root";
$password="";
$dbname="car";


//create conection
$conn=mysqli_connect($servername,$username,$password,$dbname);

mysqli_select_db($conn,'car');

if(isset($_POST['login']))
{
	
	$username=$_POST['username'];
	$password=$_POST['password'];
	

	$sql =" SELECT userid, firstname, lastname, address, mobile, gender, username, password, email
FROM registration WHERE username='$username' and password= '$password' ";

 $retval=mysqli_query($conn,$sql);

if(mysqli_num_rows($retval)>0)
{
  while($row=mysqli_fetch_assoc($retval))
  { 
  ?>
  <table border="2" height="50" width="1500">
    <div>
  <tr>
    <td><?php echo "<h4>userid:<br><br>{$row['userid']}</h4>";?></td>
    <td><?php echo "<h4>firstname:<br><br>{$row['firstname']}</h4>";?></td>
    <td><?php echo "<h4>lastname:<br><br>{$row['lastname']}</h4>";?></td>
    <td><?php echo "<h4>address:<br><br>{$row['address']}</h4>";?></td>
    <td><?php echo "<h4>mobile:<br><br>{$row['mobile']}</h4>";?></td>
    <td><?php echo "<h4>gender:<br><br>{$row['gender']}</h4>";?></td>
    <td><?php echo "<h4>username:<br><br>{$row['username']}</h4>";?></td>
      <td><?php echo "<h4>password:<br><br>{$row['password']}</h4>";?></td>
      <td><?php echo "<h4>email:<br><br>{$row['email']}</h4>";?></td>
  </tr>
  </div>
  </table>
  <?php
  }
}
else
{
  echo"<h2>THERE IS AN ERROR TO LOGIN</h2>";
}
  

mysqli_close($conn);
}
?>

</body>
</html>