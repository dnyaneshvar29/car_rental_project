<?php
$servername="localhost";
$username="root";
$password="";
$dbname="car";


//create conection
$conn=mysqli_connect($servername,$username,$password,$dbname);

mysqli_select_db($conn,'car');


 if (isset($_POST['search'])) 
 {
   $date=$_POST['date'];
 
    $sql = "SELECT carid, bookid, firstname, email, mobile, address, fromdest, todest, date FROM booking 
    WHERE date='$date' ";

$retval=mysqli_query($conn,$sql);

if(mysqli_num_rows($retval)>0)
{
  while($row=mysqli_fetch_assoc($retval))
  { 
  ?>
  <table border="2" height="50" width="1500">
    <div>
  <tr>
    <td><?php echo "<h4>carid:<br><br>{$row['carid']}</h4>";?></td>
    <td><?php echo "<h4>bookid:<br><br>{$row['bookid']}</h4>";?></td>
    <td><?php echo "<h4>firstname:<br><br>{$row['firstname']}</h4>";?></td>
    <td><?php echo "<h4>email:<br><br>{$row['email']}</h4>";?></td>
    <td><?php echo "<h4>mobile:<br><br>{$row['mobile']}</h4>";?></td>
    <td><?php echo "<h4>address:<br><br>{$row['address']}</h4>";?></td>
      <td><?php echo "<h4>fromdest:<br><br>{$row['fromdest']}</h4>";?></td>
      <td><?php echo "<h4>todest:<br><br>{$row['todest']}</h4>";?></td>
      <td><?php echo "<h4>date:<br><br>{$row['date']}</h4>";?></td>
  </tr>
  </div>
  </table>
  <?php
  }
}
else
{
  echo"<h1>NO DATA FOUND.......</h1>";
}
  

mysqli_close($conn);
}
?>

