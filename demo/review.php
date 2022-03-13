<?php


$book_name =  $_GET['bookname'];

// creating connection to DB
$connec = mysqli_connect("localhost", "root", "","bookinfo") or die ("Could not connect: " . mysql_error()); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	extract($_POST);

			
		$sql = "INSERT INTO `bookreview` (`Email`, `Name`, `bookname`, `review`, `star`) VALUES ('$email', '$name', '$book_name', '$review', '$rating' )"; 

		mysqli_query($connec, $sql) or die("registration failed, try again later". 									mysqli_error($connec));

	// header("Refresh:0");

	echo "done";
}


// closing db connection
mysqli_close($connec);



?>
