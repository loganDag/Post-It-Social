<?php
session_start();
$user = $_SESSION["username"];
$mysqli7 = mysqli_connect("");

/* check connection */
if ($mysqli7->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
     echo("Something went wrong :( please contact <a href='mailto:lemail@email.com'>the webmaster</a> with the page your on and the error.");
    exit();
}

$del = "SELECT del_stat FROM members WHERE username=('$user')";
$result = $mysqli7->query($del);
while($de = mysqli_fetch_array($result)){
    $del_stat = $de["del_stat"];
    if ($del_stat == '1')
{    
 header('Location: gone.php');   
} else if( $del_stat == '2'){
    header('Location: timeleft.php');
}  else if($del_stat == '3')
{
    header('Location: banned.php');
}
else if($del_stat == '0'){}
$mysqli->close;
}
?>