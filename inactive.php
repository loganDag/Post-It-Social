<?php
session_start();
$user = $_SESSION['username'];
echo("<h2>Hello <b><u>$user</b></u> seems you have been inactive if you aren't please report this issue to <a href='mailto:'>The webmaster</a></h2>");
?>
<html>
<title>Gamers inc | Inactive</title>
<h3>
<div class="alert">
<b> Warning!</b> We have detected that you have been inactive for 5 minutes if you believe this is false please contact the web master if not please return to the home page
</div>
  Redirecting to logout page after <span id="countdown">300</span> seconds or 5 minutes. <a href="home.php">Click here to go back to the home page</a>
</h3>
<!-- JavaScript part -->
<script type="text/javascript">
    
    // Total seconds to wait
    var seconds = 60 * 5;
    
    function countdown() {
        seconds = seconds - 1 ;
        if (seconds < 0) {
            // Chnage your redirection link here
            window.location = "loguserout.php";
        } else {
            // Update remaining seconds
            document.getElementById("countdown").innerHTML = seconds;
            // Count down using javascript
            window.setTimeout("countdown()", 1000);
        }
    }
    
    // Run countdown function
    countdown();
    </script>
    <style>
    .alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
}
</style>
</html>