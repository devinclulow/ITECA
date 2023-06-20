<?php
// Establish a connection to the database
$connection = mysqli_connect('sql308.infinityfree.com', 'if0_34383779', 'WMQXZP7xJol', 'if0_34383779_egxyzdb');

// Check if the connection is successful
if (!$connection) {
  die("Failed ". mysqli_connect_error());
}

// Get user input values from a form
$uUsername = ($_POST['username']);
$uEmail = ($_POST['email']);
$uPassword = ($_POST['password']);
$uCPassword = ($_POST['confirm-password']);

// Check if the entered password matches the confirmed password
if ($uPassword === $uCPassword) {
  // Create an SQL query to insert the user data into the 'userLogin' table
  $sql = "INSERT INTO userLogin (Username, Email, Password) VALUES ('$uUsername', '$uEmail', '$uPassword')";
  
  // Execute the SQL query
  $result = $connection->query($sql);

  // Redirect the user to index.html
  header('Location: index.html');
} else {
  // Display an error message if the passwords don't match
  echo "<script> alert('Please ensure passwords are entered correctly, then press the back arrow to return to the registration page')</script>";
}
?>
