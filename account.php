<?php
session_start();
require("site-header.php");
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery.min.js"></script>
<script src="js/counter.js"></script>
    <meta charset="UTF-8">
    <title>Post it | Your account and settings</title>
 <style type="text/css">
        body{ 
        font: 14px sans-serif; 
        text-align: center; 
        }
    </style>
</head>
<body>
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome</h1>
        <?php
        $un = $_SESSION["username"];
?>
    </div>
    <center>
    <div class="reset">
        <a href="reset.php" class="reset">Reset Your Password</a>
        </center>
        <br />
        <br />
        </div>
         <style>
    .changeun{
    cursor: not-allowed;
    }
    </style>
    <body>
    <form method="post"  action="changeusername.php">
  <input type="text" size="52" name="change_username" maxlength="50" rows="3" cols="40" placeholder="Enter Your new username Here max 50 characters" <?php if ($un = "TestAccount"){ echo "disabled";}?>>
    <br />
    <br />
    <input type="submit" value="Change username" id="changeus" class="changeun" <?php if ($un = "TestAccount"){ echo "disabled";}?>>
    </form>
    <br />
    <br />
    
    <form method="post"  action="change-email.php">
  <input type="email" name="change_email" maxlength="1000" rows="3" cols="40" size="52" placeholder="Enter Your new email max 1000 characters" <?php if ($un = "TestAccount"){ echo "disabled";}?>>
  <br />
  <br />
    <input type="submit" value="Change email" id="changeem" <?php if ($un = "TestAccount"){ echo "disabled";}?>>
    </form>
    <br />
    <br />
    
    <form method="post" action="changebio.php">
  <textarea size="52" name="change_bio" maxlength="250" rows="3" cols="40" placeholder="Enter Your new bio max 250 characters" <?php if ($un = "TestAccount"){ echo "disabled";}?>></textarea>
            <br />
         <br/>
         <input type="submit" name="Post" value="Change Bio!" <?php if ($un = "TestAccount"){ echo "disabled";}?>>
         </form>
         <br/>
         <br/>
         
             <form method="post"  action="deleteaccount.php">
  <input type="text" name="username" maxlength="1000" rows="3" cols="40" size="52" placeholder="Enter Your username to delete" <?php if ($un = "TestAccount"){ echo "disabled";}?>>
  <br />
  <br />
    <input type="submit" value="Delete account" id="username" <?php if ($un = "TestAccount"){ echo "disabled";}?>>
    </form>
<style>
.reset a{
text-decoration: none;
color: red;
border: 2px dashed red;
}

</style>
</body>
</html>