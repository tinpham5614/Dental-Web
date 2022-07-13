<?php

$host = 'dbcontact.mysql.database.azure.com';
$username = 'qwe';
$password = '';
$db_name = 'dbcontact';

$conn = mysqli_init();


// Establish the connection
mysqli_real_connect($conn, 'dbcontact.mysql.database.azure.com', 'qwe', '', 'dbcontact', 3306, NULL, MYSQLI_CLIENT_SSL);

//If connection failed, show the error
if (mysqli_connect_errno())
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}

$txtName = $_POST['Name'];
$txtEmail = $_POST['mail'];
$txtPhone = $_POST['Phone'];
$txtMessage = $_POST['comments'];

$sql = "INSERT INTO `tbl_contact` (`ID`, `fldName`, `fldEmail`, `fldPhone`, `fldMessage`) VALUES ('0', '$txtName', '$txtEmail', '$txtPhone', '$txtMessage')";

if ($conn->query($sql) === TRUE) {
  header('Location: thx.html');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();



?>
