<?php
$servername="localhost";
$username="root";
$password="";
$dbname="car";


//create conection
$conn=mysqli_connect($servername,$username,$password,$dbname);

mysqli_select_db($conn,'car');

if(isset($_POST['signup']))
{
	$userid=$_POST['userid'];
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$address=$_POST['address'];
	$mobile=$_POST['mobile'];
	$gender=$_POST['gender'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$email=$_POST['email'];

	$sql = "INSERT INTO registration (userid, firstname, lastname, address, mobile, gender, username, password, email) 
VALUES ('$userid', '$firstname', '$lastname', '$address', '$mobile', '$gender', '$username', '$password', '$email');";


 if(mysqli_query($conn,$sql))
{
	echo "<h1>SIGN UP.. SUCCESFULLY </h1>";
}
else
{
	echo "<h1> SORRY .? THERE IS AN ERROR TO SIGNUP </h1>";
}

}