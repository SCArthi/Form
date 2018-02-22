<?php 
 $username =filter_input(INPUT_POST, 'username');
 $password =filter_input(INPUT_POST, 'pwd');  

 if (!empty($username)) {
 	if (!empty($password)) {
 		$host = "localhost";
 		$dbusername = "root";
 		$dbpassword ="";
 		$dbname = "form";

 		//create connection
 		$conn = new mysqli_connect($host,$dbusername,$dbpassword,$dbname);

 		if (mysqli_connect_error()) {
 			die('Connect Error ('.mysqli_connect_error() .'. mysqli_connect_error())');
 		}
 		else{
 			$sql = "INSERT INTO users (username,pwd) values ('$username','$password')";
 		}
 	}
 	else{
 		echo "Password should not be empty";
 		die();
 	}
 }
 else{
 	echo "Username should not be empty";
 	die();
 }
?>