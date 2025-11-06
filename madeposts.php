<?php
include("site-header.php");
?>
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<title>Post it | Made posts</title>
<h1>Current Status updates:</h1>
<?php

$mysqli = new mysqli("");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
     echo("Something went wrong :( please contact <a href='mailto:logandag11@gmail.com'>the webmaster</a> with the page your on and the error.");
    exit();
}

$query = "SELECT poster, body, posted_at FROM posts ORDER BY posted_at DESC ";
$result = $mysqli->query($query);
while($posts = mysqli_fetch_array($result)){
      
 $needed = $posts['poster'].'<br/><br/>';
   $needed2 = $posts['body'].'<br/><br/>';
    $needed3 = $posts['posted_at'].'<br></br/>';
   echo"<div class='postbox'";
   echo $needed;
    echo $needed;
    echo $needed2;
    echo $needed3;
    echo "</div>";
}
?>
<style>
.postbox{
border: 5px solid #73AD21;
padding: 10px;
margin: 5px;
}

</style>