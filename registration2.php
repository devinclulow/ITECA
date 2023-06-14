<?php
$connection = mysqli_connect('sql308.infinityfree.com', 'if0_34383779', 'WMQXZP7xJol', 'if0_34383779_egxyzdb');

if (!$connection) {
  die("Failed ". mysqli_connect_error());
}

$uUsername = ($_POST['username']);
$uEmail = ($_POST['email']);
$uPassword = ($_POST['password']);
$uCPassword = ($_POST['confirm-password']);

if ($uPassword === $uCPassword) {
$sql = "INSERT INTO userLogin (Username, Email, Password) VALUES ('$uUsername', '$uEmail', '$uPassword')";
$result = $connection->query($sql);

header('Location: index.html');
} else {
  echo "<script> alert('Please ensure passwords are entered correctly')</script>";
}
?>