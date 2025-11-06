<?php
require('includes/config.php');
//logout
//$user->logout(); 
session_start();
$id = $_SESSION['memberID'];
//$status = "0";
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
$sql = "UPDATE members SET online_status= ('offline') WHERE memberID=('$id')";
if($mysqli->query($sql) === true){
    $user->logout(); 
    header('refresh:3 index.php');
}
else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
$mysqli->close();

//logged in return to index page
//header('refresh:3 index.php');
?>
<html>
<center>
<title> Post it | Logging out</title>
<h1>Logging you out. See you soon!</h1>
<img src="loading.gif">
</center>
</html>