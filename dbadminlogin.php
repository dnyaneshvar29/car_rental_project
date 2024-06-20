<?php
$servername="localhost";
$username="root";
$password="";
$dbname="car";


//create conection
$conn=mysqli_connect($servername,$username,$password,$dbname);



if(isset($_POST['login']))
{
	
	$username=$_POST['username'];
	$password=$_POST['password'];
	

	$sql =" SELECT  username, password FROM admin WHERE username='$username' and password= '$password' ";

 $retval=mysqli_query($conn,$sql);

if(mysqli_num_rows($retval)>0)
        { 
            //..............here is booking .php//
            
						require("adminhome.php");
        }
        else
        {
            echo '<h1>The username or password are incorrect!</h2>';
        }


	}
mysqli_close($conn);


?>


