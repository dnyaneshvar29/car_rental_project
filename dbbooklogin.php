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
            //..............here is booking .php//
            
						require("booking.php");
        }
        else
        {
            echo '<h1>The username or password are incorrect!</h2>';
        }


	}
mysqli_close($conn);


?>


