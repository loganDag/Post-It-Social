<?php
$connection = mysql_connect("");
mysql_select_db("")or die(mysql_error());
$username = mysql_real_escape_string($_GET['user']);
echo"Your Search Query containing users with ($username) in it:";
$result = mysql_query("SELECT * FROM members WHERE username LIKE '%".$username."%'");
while ($row = mysql_fetch_assoc($result)) {
//echo $row['username'];
$user2 = $row['username'];
//echo"Your Search Query containing users with ($username) in it:";
echo"<br />";
 echo"<a href='userprofile.php?user=". $user2 ."'>". $user2 ."</a><br/>";
}
?>
<title>Post it | Search</title>
<br />

<a href="users.php">Go back to users</a>
