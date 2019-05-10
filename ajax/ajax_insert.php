<?php
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "library";


	$name = $_POST["sender_nm"];
	$email = $_POST["sender_email"];
	$mobileno = $_POST["sender_mob"];
	$message = $_POST["sender_msg"];
	


// Create Table message
// (
// 	Id int primary key AUTO_INCREMENT, 
// 	name varchar(50) not null,
//     email varchar(50) not null,
// 	mobile varchar(10),
// 	message varchar(150),
//     seen varchar(1),
//     sentdate TIMESTAMP DEFAULT CURRENT_TIMESTAMP
// )



	// $datemsg = date('Y-m-d');

	// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql = "INSERT INTO `message`(`name`, `email`, `mobile`, `message`, `seen`) 
VALUES('$name', '$email', '$mobileno', '$message', 'n')";




if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>

