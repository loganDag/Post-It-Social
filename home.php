<?php 
require('site-header.php');
include("back-to-top.html");
?>
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
</head>
<body>
<center>
<title>Post it | Home</title>
<br />
<br />
<br />
<br />
<br />
<script>
var close = document.getElementsByClassName("closebtn");
var i;

for (i = 0; i < close.length; i++) {
    close[i].onclick = function(){
        var div = this.parentElement;
        div.style.opacity = "0";
        setTimeout(function(){ div.style.display = "none"; }, 600);
    }
}
</script>
    <style type=text/css>
    #new-pages a:hover{
    color: #34AD63;
    text-decoration: overline dotted red;
    }
    #new-pages a{
    color: #4F9DB8;
    text-decoration: underline wavy blue;
    }
    </style>
    </h1>
	<footer>
    </div>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "ca-pub-4042652783030273",
            enable_page_level_ads: true
        });
    </script>
</head>


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
width: 900px;
margin: 5px;
}

</style>


</body>
</footer>
</html>


