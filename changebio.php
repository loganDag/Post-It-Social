<?php
//require("includes/config.php");
//session_start();
session_start();
$mysqli = new mysqli("");
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
$changebio = $_POST['change_bio'];
$current = $_SESSION['username'];
$sql = "UPDATE members SET user_bio=('$changebio') WHERE username=('$current')";
if($mysqli->query($sql) === true){
    echo "<script type='text/javascript'>alert('Successful - Your Bio is now changed!'); window.location.href = 'account.php';</script>";
}
else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
$mysqli->close();
?>
<title>Post it | Change Bio</title>