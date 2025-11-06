<?php
session_start();
include('delstatcheck.php');
$id = $_SESSION['memberID'];
$ip = $_SERVER['REMOTE_ADDR'];
//$status = "1";
$server  = "";
$un = "";
$pw = "";
$db = "";
$mysqli = new mysqli($server, $un, $pw, $db);
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
$username = $_SESSION['username'];
$sql = "UPDATE members SET online_status = ('online') WHERE memberID=('$id')";
if($mysqli->query($sql) === true){
    echo  "Hello, Just doing some last second things.";
      header("refresh: 2.0 home.php");
}
else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
$mysqli->close();
?>
<title>Post it | Login 2</title>