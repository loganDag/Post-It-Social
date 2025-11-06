<?php
require('site-header.php');
?>
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<center>
<title>Post it | Registered users</title>
<h3>
Search for someone:
</h3>
<form action="searchusers.php" method="GET">
<input id="search" name="user" type="text" placeholder="search for user...">
<br />
<br>
<input id="submit" type="submit" value="Search">
</form>

<h3>Registered Users:</h3>
</center>
<?php
session_start();
//connect.php
$mysqli = new mysqli("");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$query = "SELECT username, email, online_status, memberID FROM members ORDER BY username ASC";
$result = $mysqli->query($query);
while($user = mysqli_fetch_array($result)){
      $user2 = $user['username'];
      $memid = $user['memberID'];
      echo("<center><div class='users'>");
    echo"<a href='userprofile.php?user=". $user2 ."'>". $user2 ."</a><br/>";
    echo $user['email'].'<br/>';
    echo $user['online_status'].'<br/></br>';
    echo("</center></div>");
}
?>
<style>
.users{
border: 2px dashed red;
border-radius: 10px;
width: 300px;
margin: 8px;
}
#search{
border: 3px solid red;
border-radius: 15px;
width: 180px;
height: 50px;
}
#submit{
color: red;
background: white;
}
#submit:hover{
box-shadow:0 0 10px 3px #900;
}
#search:focus {
  /* Your shadow css here */
 /* -moz-box-shadow:0 0 10px 5px #900;*/
  /*-webkit-box-shadow:0 0 10px 5px #900;*/
  box-shadow:0 0 10px 5px #900;
}
</style>