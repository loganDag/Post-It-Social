<html>
<title>Post it | <?php $profileuser = $_GET['user']; echo $profileuser;?>'s Profile</title>
<?php include("site-header.php");
include("back-to-top.html");
?>
<center>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<h1><?php echo $profileuser;?>'s Profile</h1>
<div class="vl"></div>
<center>
<style>
.postbox{

position: sticky;
border: 5px solid #73AD21;
max-width: 600px;
right: 250px;
margin: 5px;
}
.postbox2{
position: sticky;
right: 250px;
}
.vl {
  border-left: 3px solid grey;
  height: 400px;
  position: fixed;
  left: 25%;
  margin-left: -3px;
  top: 180px;
}

.bio{
position: fixed;
left: 1%;
margin-left: -2;
top: 200px;
max-width: 300px;
max-height: 350px;
/*border: 2px solid grey;*/
}
.os{
position: fixed;
/*border: 2px solid grey;*/
top: 500px;
width: 300px;
height: 100px;
left: 1%;
}
.os2{
position: fixed;
top: 550px;
left: 7.5%;
}


</style>

<?php

$mysqli7 = new mysqli("");

/* check connection */
if ($mysqli7->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
     echo("Something went wrong :( please contact <a href='mailto:logandag11@gmail.com'>the webmaster</a> with the page your on and the error.");
    exit();
}

$mem = "SELECT memberID FROM members WHERE username=('$profileuser')";
$result = $mysqli7->query($mem);
while($id = mysqli_fetch_array($result)){
    $memid = $id["memberID"];
$mysqli->close;
}




//include("db.php");
$profileuser = $_GET['user'];
$mysqli = new mysqli("");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
     echo("Something went wrong :( please contact <a href='mailto:logandag11@gmail.com'>the webmaster</a> with the page your on and the error.");
    exit();
}

$query = "SELECT user_bio FROM members WHERE memberID=('$memid')";
$result = $mysqli->query($query);
while($posts = mysqli_fetch_array($result)){
      
 $needed = $posts['user_bio'].'<br/><br/>';
   echo"<div class='bio'><h2>Their Bio:</h2><br/>";
    echo $needed;
    echo "</div>";
$mysqli->close;
}
?>



<?php
//include("db.php");
$profileuser = $_GET['user'];
$mysqli = mysqli_connect("sql102.unaux.com", "unaux_22397998", "qmyctk3ytcz", "unaux_22397998_gamers");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
     echo("Something went wrong :( please contact <a href='mailto:logandag11@gmail.com'>the webmaster</a> with the page your on and the error.");
    exit();
}

$query = "SELECT online_status FROM members WHERE memberID=('$memid')";
$result = $mysqli->query($query);
while($os = mysqli_fetch_array($result)){
 $needed = $os['online_status'].'<br/><br/>';
   echo"<div class='os'><h2>Their online status:</h2><br/></div>";
   echo"<div class='os2'>";
    echo $needed;
    echo "</div>";
$mysqli->close;
}
?>



<br/>
<div class="postbox2">
<h2>Their posts! :</h2>
</div>
<?php
include("db.php");
$profileuser = $_GET['user']; 
$mysqli = new mysqli("sql102.unaux.com", "unaux_22397998", "qmyctk3ytcz", "unaux_22397998_gamers");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
     echo("Something went wrong :( please contact <a href='mailto:logandag11@gmail.com'>the webmaster</a> with the page your on and the error.");
    exit();
}
$user_id = "SELECT user_id FROM posts";
    $query = "SELECT poster, body, posted_at FROM posts WHERE user_id=('$memid')  ORDER BY posted_at DESC";
    $result = $mysqli->query($query);
while($posts = mysqli_fetch_array($result)){
      
  $needed = $posts['poster'].'<br/><br/>';
   $needed2 = $posts['body'].'<br/><br/>';
    $needed3 = $posts['posted_at'].'<br></br/>';
   echo"<div class='postbox'>";
    echo $needed;
    echo $needed2;
    echo $needed3;
    echo "</div>";
    $mysqli->close;
}
?>

