<?php
session_start();
$user = $_SESSION["username"];
$mysqli7 = mysqli_connect("");

/* check connection */
if ($mysqli7->connect_errno) {
    printf("Connect failed: %s\n", $mysqli7->connect_error);
     echo("Something went wrong :( please contact <a href='mailto:email@email.com>the webmaster</a> with the page your on and the error.");
    exit();
}

$rol = "SELECT user_role FROM members WHERE username=('$user')";
$result = $mysqli7->query($rol);
while($ro = mysqli_fetch_array($result)){
    $role = $ro["user_role"];
$mysqli7->close;
}
?>