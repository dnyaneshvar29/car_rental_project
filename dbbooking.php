


<?php
$servername="localhost";
$username="root";
$password="";
$dbname="car";


//create conection
$conn=mysqli_connect($servername,$username,$password,$dbname);

mysqli_select_db($conn,'car');

if(isset($_POST['submit']))
{
	$carid=$_POST['carid'];
	$bookid=$_POST['bookid'];
	$firstname=$_POST['firstname'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$address=$_POST['address'];
	$fromdest=$_POST['fromdest'];
	$todest=$_POST['todest'];
	$date=$_POST['date'];
	
	
$sql = "INSERT INTO booking (carid, bookid, firstname, email, mobile, address, fromdest, todest, date) 
VALUES ('$carid', '$bookid', '$firstname', '$email', '$mobile', '$address', '$fromdest', '$todest', '$date');";

	


 if(mysqli_query($conn,$sql))
{
	//..............here is booking .php//
            
						require("logout&feedback.php");
}
else
{
	echo "<h1> ERROR IN BOOKING,,,, TRY AGAIN LATER</H1>";
}
}
