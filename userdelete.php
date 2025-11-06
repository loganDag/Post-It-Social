<?php
session_start();
$deldate = date('Y-m-d H:i:s');
$mysqli = mysqli_connect("");
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
$adminusername = $_SESSION["username"];
$username = $_POST['username_delete'];
$sql2 = "UPDATE members SET del_stat=('3'), del_date=('$deldate'), del_admin=('$adminusername') WHERE username=('$username')";
if($mysqli->query($sql2) === true){
    echo "<center><h1>Deleted</h1>";
    echo "<h1>Thank you $adminusername!";
    echo "</center>";
    header('refresh: 0.8 admin.php');
}
else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
$mysqli->close();
?>
