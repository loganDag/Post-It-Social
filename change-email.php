<?php
//require("includes/config.php");
//session_start();
session_start();
$mysqli = new mysqli(); 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
$change_email = $_POST['change_email'];
$current = $_SESSION['username'];
$sql = "UPDATE members SET email=('$change_email') WHERE username=('$current')";
if($mysqli->query($sql) === true){
    echo "<script type='text/javascript'>alert('Successful - Record Updated!'); window.location.href = 'account.php';</script>";
}
else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
$mysqli->close();
?>
<title>Gamers inc | Change Email</title>