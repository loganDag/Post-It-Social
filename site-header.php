<?php 
//include("faviconconfig.html");
include("faviconfig.html");
include("back-to-top.html");
include("delstatcheck.php");
    session_start(); 
    if (!isset($_SESSION['username'])) {
		//$_SESSION['msg'] = "You must log in first";
		header('Location: notloggedin.php');
	}
$ip2 = $_SERVER['REMOTE_ADDR'];
$ip = $_SERVER['REMOTE_ADDR'];
$user = $_SESSION["username"];



//end script
?>
    
<!DOCTYPE html>
<meta name="google-site-verification" content="5LuNLEy0ptjqp89bwQdwCfG27NhlkGXUJYjp8uQFlkU" />
<head>
<meta name="index" content="Welcome to Gamers inc site, not affiliated with any company, this is a place where i just make random things for people">
<meta name="viewport" conetnt="width=device-width, intial-scale=1"/>
<!--start webpage loader-->
<div class="loader">
    <style>
        /* Center the loader */
        
        #loader {
            position: absolute;
            left: 50%;
            top: 50%;
            z-index: 1;
            width: 150px;
            height: 150px;
            margin: -75px 0 0 -75px;
            border: 16px solid #f3f3f3;
            border-radius: 50%;
            border-top: 16px solid #3498db;
            width: 120px;
            height: 120px;
            -webkit-animation: spin 2s linear infinite;
            animation: spin 2s linear infinite;
        }
        
        @-webkit-keyframes spin {
            0% {
                -webkit-transform: rotate(0deg);
            }
            100% {
                -webkit-transform: rotate(360deg);
            }
        }
        
        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }
        /* Add animation to "page content" */
        
        .animate-bottom {
            position: relative;
            -webkit-animation-name: animatebottom;
            -webkit-animation-duration: 1s;
            animation-name: animatebottom;
            animation-duration: 1s
        }
        
        @-webkit-keyframes animatebottom {
            from {
                bottom: -100px;
                opacity: 0
            }
            to {
                bottom: 0px;
                opacity: 1
            }
        }
        
        @keyframes animatebottom {
            from {
                bottom: -100px;
                opacity: 0
            }
            to {
                bottom: 0;
                opacity: 1
            }
        }
        
        #myDiv {
            display: none;
            text-align: center;
        }
    </style>
    </head>

    <body onload="myFunction()" style="margin:0;">

        <div id="loader"></div>

        <div style="display:none;" id="myDiv" class="animate-bottom">

        </div>

        <script>
            var myVar;

            function myFunction() {
                myVar = setTimeout(showPage, 0005);
            }

            function showPage() {
                document.getElementById("loader").style.display = "none";
                document.getElementById("myDiv").style.display = "block";
            }
        </script>
</div>
</body>
<!--end webpage loader-->

<head>
<!--inactivity script-->
<script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jQuery/jquery-1.9.1.js"></script>
<script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jquery.ui/1.10.2/jquery-ui.min.js"></script>
<link rel="stylesheet" href="//ajax.aspnetcdn.com/ajax/jquery.ui/1.10.2/themes/ui-lightness/jquery-ui.css" type="text/css" />
<body onload="StartTimers();" onmousemove="ResetTimers();">
   <script>
    // Set timeout variables.
var timoutWarning = 180000; // Display warning in 3 Mins.
var timoutNow = 300000; // Timeout in 5 mins.
var logoutUrl = '/inactive.php'; // URL to inactive page.

var warningTimer;
var timeoutTimer;

// Start timers.
function StartTimers() {
    warningTimer = setTimeout("IdleWarning()", timoutWarning);
    timeoutTimer = setTimeout("IdleTimeout()", timoutNow);
}

// Reset timers.
function ResetTimers() {
    clearTimeout(warningTimer);
    clearTimeout(timeoutTimer);
    StartTimers();
    $("#timeout").dialog('close');
}

// Show idle timeout warning dialog.
function IdleWarning() {
    $("#timeout").dialog({
        modal: true
    });
}

// Logout the user.
function IdleTimeout() {
    window.location = logoutUrl;
}

</script>
    <!--end inactivity script-->
<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
            <!--<link rel="stylesheet" type="text/css" href="/css/homecss.css" />-->
            <center><h1 id="welcomebanner"><i><font color="#0dc4b8">Post it!</h1></center></i></font>
            <?php //include("main-menu.php");
            include("main-menu2.php");
            ?>
<div id="timeout">
    <h1>INACTIVITY ALERT!</h1>
    <p>You will be automatically logged out in 2 minutes.<br />
    To remain logged in move your mouse over this window.
</div>
<style>
#timeout {
    display: none;
}
.alert {
    padding: 20px;
    background-color: ;
    color: white;
    opacity: 1;
    transition: opacity 0.6s;
    margin-bottom: 15px;
}
.alert.info {
    background-color: #2196F3;
}
.closebtn {
    margin-left: 15px;
    color: white;
    font-weight: bold;
    float: right;
    font-size: 22px;
    line-height: 20px;
    cursor: pointer;
    transition: 0.3s;
}

.closebtn:hover {
    color: black;
}
</style>
</body>
</html>


