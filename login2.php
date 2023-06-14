<?php
$connection = mysqli_connect('sql308.infinityfree.com', 'if0_34383779', 'WMQXZP7xJol', 'if0_34383779_egxyzdb');

if (!$connection) {
  die("Failed ". mysqli_connect_error());
}

$uEmail = ($_POST['email']);
$uPassword = ($_POST['password']);

$sql = "SELECT Email, Password FROM userLogin WHERE Email = '$uEmail' AND Password = '$uPassword'";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
	 header('Location: home2.html');
} else {
  header('Location: index.html');
}

?>

