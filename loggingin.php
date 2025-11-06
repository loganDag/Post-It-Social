<?php
session_start();
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
$sql = "UPDATE members SET loginip=('$ip') WHERE username=('$username')";
if($mysqli->query($sql) === true){
    header("refresh: 4.0 login2.php");
}
else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
$mysqli->close();
?>
<html>
<title>Post it | Logging in</title>
<center>
<h2 id="welcome3">Hello and welcome <?php echo $_SESSION['username'];?></h2>
</center>
<center><h1 id="welcome4">Logging you in</h1>
<img src="loading.gif">
<h2 id="welcome">Inserting your information into the database and signing you in<h2>
<h2 id="welcome2">Hello, <?php echo $_SESSION['username'];?></h2>
</center>
</div>
<style>
@keyframes fade{
   0%{
     color: white;
   }
   100%{
     color: black;
   }
}

#welcome{
  color: white;
  animation: fade;
  animation-duration: 1.5s;
      		/*	animation-fill-mode: forwards;*/

}
#welcome2{
  color:white;
  animation: fade;
  animation-duration: 1s;
  animation-delay: 1.5s;
			animation-fill-mode: forwards;

}
#welcome3{
animation: fade;
border: 5px solid green;
width: 270px;
position: sticky;
left: 40%;
right: 50%;
/*animation: fade;*/
animation-duration: 4s;
}

</style>