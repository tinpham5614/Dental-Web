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
$txtEmail = $_POST['Email'];
$txtPhone = $_POST['Phone'];
$txtMessage = $_POST['comments'];
$textCheck = $_POST['time'];
$check="";
foreach($textCheck as $check1)
    {
        $check .= $check1.",";
    }
$type = $_POST['patient'];

$sql = "INSERT INTO `tbl_contact` (`ID`, `fldName`, `fldEmail`, `fldPhone`, `fldMessage`,`fldTime`,`fldType`) VALUES 
('0', '$txtName', '$txtEmail', '$txtPhone', '$txtMessage','$check','$type')";

if ($conn->query($sql) === TRUE) {
  header('Location: thx1.html');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();



?>
