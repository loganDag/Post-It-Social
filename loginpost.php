<?php
include 'connect_i.php';

if(isset($_POST['submit'])){
	
	$username = $_POST['username'];
	
	$password = $_POST['password'];

if (empty($username) || empty ($password)){
	
	echo "<center><h3>Username and Password is required</h3></center>";
	
}

$sql = mysql_query( "SELECT * FROM members WHERE username = '$username'AND password='$password'");


$login_check = mysql_num_rows($sql);

if($login_check > 0){ 
    while($row = mysql_fetch_array($sql)){ 
        // Get member ID into a session variable
        $id = $row["id"];   
        
        $_SESSION['id'] = $id;
        // Get member username into a session variable
	    $username = $row["username"];   
       
        $_SESSION['username'] = $username;

	header("location:pm_check.php?id='$id'"); //important
		exit();

		
		
		
	
	}
}

}

?>

            	<form action="loginpost.php" method="post">
                	<input type="text" name="username" />
<br />
<input type="password" name="password" />
<br />
<input type="submit" name="submit" />
</form>


</form>
        STAY  CONNECTED<BR>        	                    	
    <iframe src="//www.facebook.com/plugins/follow?href=https%3A%2F%2Fwww.facebook.com%2Franjit.karki.140&amp;layout=standard&amp;show_faces=true&amp;colorscheme=light&amp;width=450&amp;height=80" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:80px;" allowTransparency="true"></iframe>         