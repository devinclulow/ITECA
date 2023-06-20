<?php
// Establish a connection to the database
$connection = mysqli_connect('sql308.infinityfree.com', 'if0_34383779', 'WMQXZP7xJol', 'if0_34383779_egxyzdb');

// Check if the connection is successful
if (!$connection) {
  die("Failed " . mysqli_connect_error());
}

// Get user input values from a form
$uEmail = ($_POST['email']);
$uPassword = ($_POST['password']);

// Create an SQL query to select the email and password from the 'userLogin' table
$sql = "SELECT Email, Password FROM userLogin WHERE Email = '$uEmail' AND Password = '$uPassword'";

// Execute the SQL query
$result = $connection->query($sql);

// Check if the query returned any rows
if ($result->num_rows > 0) {
	// Redirect the user to home2.html if a matching email and password were found
	header('Location: home2.html');
} else {
	// Redirect the user to index.html if no matching email and password were found
	header('Location: index.html');
}
?>
