<?php
include("site-header.php");
include("back-to-top.html");
//include("rolecheck.php");
session_start();
$role1 = "admin";
$user = $_SESSION["username"];
$mysqli7 = mysqli_connect("");

/* check connection */
if ($mysqli7->connect_errno) {
    printf("Connect failed: %s\n", $mysqli7->connect_error);
     echo("Something went wrong :( please contact <a href='mailto:logandag11@gmail.com'>the webmaster</a> with the page your on and the error.");
    exit();
}

$sql = "SELECT user_role FROM members WHERE username=('$user')";
$result = $mysqli7->query($sql);
while($user_role = mysqli_fetch_array($result)){
    $role = $user_role["user_role"];
$mysqli7->close;
}


 if($role != 'admin')
        {
            echo ("your role: $role");
            echo "<br/>";
            echo ("Required role: $role1");
           echo("  <meta http-equiv='refresh' content='0; URL=http://gamers-inc.unaux.com/post-it/403.php' /> ");
        }
?>
<html>
<title>Post it | Admin page</title>
<center>
<head>
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Delete a User</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Confirm Username</h4>
        </div>
        <div class="modal-body">
<form name="my_form" method="post" action="userdelete.php">
    Username: <br /><br /><input type="text" name="username_delete" placeholder="username">
    <br /><br />
    <input type="submit" name="btn_delete" valve="Delete User"><br /><br />
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close &times;</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
<hr>
<p><b>IP Logs:</p></b><hr>
<iframe src="./logs/logfile.html" width="1200px" height="400px" scrolling="true"></iframe><br />
<p><b>Forbidden IP Logs:</p></b><hr>
<iframe src="./logs/forbidden.html" width="1200px" height="400px" scrolling="true"></iframe><br />
<p><b>Server Monitoring:</p></b><hr>
<iframe src="phpmon" width="1200px" height="400px" scrolling="true"></iframe><br />
<!--<iframe src="http://wttr.in/@gamers-inc.unaux.com" width="1200px" height="400px" scrolling="true"></iframe><br />-->
<!--<iframe src="server-info.php" width="1200px" height="200px" scrolling="true"></iframe><br />-->
<h1><a href="admin2.php" target="new_tab">MySQL database manager</a></h1><br />
</center>
<center>
<h3>Registered users:</h3>
</center>
</html>
<?php 

session_start();
$mysqli = new mysqli("");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
    echo("<center>");
    echo("<table class='userdata'> <tr> <td>Username</td><td>Email</td><td>Online Status</td><td>Last Login IP</td><td>Member ID</td><td>Delete Status</td><td>Delete Date</td><td>Register Date</td><td>User Role:</td><td>Delete Admin:</td></tr>");

$query = "SELECT username, email, online_status, loginip, memberID, del_stat, del_date, reg_date, user_role, del_admin FROM members ORDER BY memberID ASC";
$result = $mysqli->query($query);
while($user = mysqli_fetch_array($result)){
    $user2 = $user['username'];
    echo ('<tr>');
  echo " <td> <a href='userprofile.php?user=". $user2 ."'>". $user2 ."</a></td>";
    echo "<td>" .$user['email'].'</td>';
    echo "<td>".$user['online_status'].'</td>';
    echo "<td>".$user['loginip'].'</td>';
    echo  "<td>".$user['memberID'].'</td>';
    echo "<td>".$user['del_stat'].'</td>';
    echo "<td>".$user['del_date'].'</td>';
    echo "<td>".$user['reg_date'].'</td>';
     echo "<td>".$user['user_role'].'</td>';
     echo "<td>".$user['del_admin'].'</td>';
}
    echo("</center>");
echo("</div>");
?>
<style>
.users{
position: sticky;
border: 5px solid red;
border-radius: 5px;
max-width: 400px;
/*left: 790px;*/
left: 40%;
right: 50%;
}

td{
padding: 5px;
border: 3px solid black;
box-shadow: 1px 5px 0px 0px green;
}
tr:hover > td{
background: yellow;
}
</style>