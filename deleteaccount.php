<?php
session_start();
require('classes/phpmailer/phpmailer.php');
 $un2 = $_POST["username"];
 $un3 = $_SESSION["username"];
 date_default_timezone_set('America/New_York');
$deldate = date('Y-m-d H:i:s');
$mysqli = mysqli_connect();

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
     echo("Something went wrong :( please contact <a href='mailto:'>the webmaster</a> with the page your on and the error.");
    exit();
}
//This is to see if the session username is concurrent with the username in the form
$query = "SELECT username, email FROM members WHERE username=('$un2')";
$result = $mysqli->query($query);
while($username = mysqli_fetch_array($result)){
      $un = $username['username'];
     $email_to = $username['email']; 
   $mysqli->close();
}
//This also
//start account update statement
   if($un == $un3){
       echo ("Sad to see you go :(<br/>");
       $mysqli2 = mysqli_connect("");
       if ($mysqli2->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
     echo("Something went wrong :( please contact <a href='mailto:>the webmaster</a> with the page your on and the error.");
    exit();
}
//Sets delete status
         $sql = "UPDATE members SET del_stat=('2') WHERE username=('$un')";
        if($mysqli2->query($sql) === true){
   echo ("Marked your account for deletion <br>");
}
else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
$mysqli->close();
//Sets delete date
       $mysqli3 = mysqli_connect("");
       if ($mysqli3->connect_errno) {
    printf("Connect failed: %s\n", $mysqli3->connect_error);
     echo("Something went wrong :( please contact <a href='mailto:>the webmaster</a> with the page your on and the error.");
    exit();
}
         $sql = "UPDATE members SET del_date=('$deldate') WHERE username=('$un')";
        if($mysqli3->query($sql) === true){
   echo ("Just inserted today's date and time Bye Bye :(");
   echo("<br>");
   echo ("An email has been sent to: $email_to");
   //email
   $subject = "ADN";
$message = "<center><h1>Account(A) Deactivation(D) Notification(N)<h1><p>Hello, $un. <br> Your account has been recently marked for deactivation.
If you didn't authorize this please contact <a href='mailto:email@email.com?subject=Account Deactivation not authorized'>Customer support</a></center>" ;
// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
mail($email_to,$subject,$message,$headers);
}
else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
$mysqli->close();
}else if($un3 !== $un){
    echo ("<center><h3>Hello <b><u><i> $un3 </b></u></i>this isn't your account</h3></center>");
}
//end the account update statement
?>
<title>Post it | Account Deletion</title>
<br>
<a href='account.php'> Go back to Settings</a>