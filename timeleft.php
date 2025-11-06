<?php
session_start();
require('layout/header.php'); 
$user = $_SESSION["username"];
$mysqli7 = mysqli_connect("");
$date = date ("Y-m-d H:i:s");
/* check connection */
if ($mysqli7->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
     echo("Something went wrong :( please contact <a href='mailto:logandag11@gmail.com'>the webmaster</a> with the page your on and the error.");
    exit();
}
$del = "SELECT del_date, del_stat, del_time_left FROM members WHERE username=('$user')";
$result = $mysqli7->query($del);
while($de = mysqli_fetch_array($result)){
    $del_date = $de["del_date"];
    $del_stat = $de["del_stat"];
    $del_time = $de["del_time_left"];
  /*  $time = $del_date - $del_time;
   $time2 = date ( string $format, $time);
    echo $time2;
    */
    echo ("<center><h2>You have untill: $date</center></h2>");
    echo ('<br />');
$mysqli->close;
if($date >  $del_time)
{
    $mysqli8 = mysqli_connect("");
if ($mysqli8->connect_errno) {
    printf("Connect failed: %s\n", $mysqli8->connect_error);
     echo("Something went wrong :( please contact <a href='mailto:logandag11@gmail.com'>the webmaster</a> with the page your on and the error.");
    exit();
}

$del1 = "UPDATE members SET del_stat= '1' WHERE username=('$user')";
if($mysqli8->query($del1) === true){
    echo ("<center><h3>Sorry your account has been deactivated</center></h3>");
}
else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
$mysqli8->close();

    
    
    echo ('<h3><center>Sorry but you cant manually reactivate your account. You will redirected to another page soon.</h3></center>');
    header('refresh: 5 gone.php');
}else {
    echo ("<h1><center>Your have until $del_time to reactivate your account</h1></center>");
    echo ('<br />');
    echo (' <div class="form-group">
    <form action="reactive.php" method="post">
    				<input type="text" name="username" id="username" class="form-control input-lg" placeholder="User Name" value="username" tabindex="1">
				</div>
                    <div class="row">
                    <center>
					<div class="col-xs-6 col-md-6"><input type="submit" name="reactive" value="Reactivate" class="btn btn-primary btn-block btn-lg" tabindex="5"></div>
				</div>
                </center>
			</form>');
}
}
//if(isset[)
?>
<html>
<title>Post it | Reactivate</title>
      </html>          
                
                