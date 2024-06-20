<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style type="text/css">
    table{
      padding: 50px;
      border-spacing: 20px;
      background-color: ;
    }
  </style></head>
<body>

<h1>REGISTERED USERS ARE</h1>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="car";


//create conection
$conn=mysqli_connect($servername,$username,$password,$dbname);



	$sql =" SELECT userid, firstname, lastname, address, mobile, gender, username, password, email
FROM registration  ";

 $retval=mysqli_query($conn,$sql);

if(mysqli_num_rows($retval)>0)
{
  while($row=mysqli_fetch_assoc($retval))
  { 
  ?>
  <table border="2" align="center" bgcolor="#F7A7CD">
    <div>
  <tr>
    <td><?php echo "<h4>userid:&nbsp;{$row['userid']}</h4>";?></td>
    <td><?php echo "<h4>firstname:&nbsp;{$row['firstname']}</h4>";?></td>
    <td><?php echo "<h4>lastname:&nbsp;{$row['lastname']}</h4>";?></td>
    <td><?php echo "<h4>address:&nbsp;{$row['address']}</h4>";?></td>
    <td><?php echo "<h4>mobile:&nbsp;{$row['mobile']}</h4>";?></td>
    <td><?php echo "<h4>gender:&nbsp;{$row['gender']}</h4>";?></td>
    <td><?php echo "<h4>username:&nbsp;{$row['username']}</h4>";?></td>
    <td><?php echo "<h4>password:&nbsp;{$row['password']}</h4>";?></td>
    <td><?php echo "<h4>email:&nbsp;{$row['email']}</h4>";?></td>
  </tr>

  </div>
  </table>
  <?php
  }
}
else
{
  echo"<h3>incorrect deta</h3>";
}
  

mysqli_close($conn);

?>
</body>
</html>
