<?php

function logIP()
{
     $ipLog="./logs/forbidden.html"; // Your logfiles name here (.txt or .html extensions ok)

     $register_globals = (bool) ini_get('register_gobals');
     if ($register_globals) $ip = getenv(REMOTE_ADDR);
     else $ip = $_SERVER['REMOTE_ADDR'];
	$browser =  $_SERVER['HTTP_USER_AGENT'];

     $date=date ("l dS of F Y h:i:s A");
     $log=fopen("$ipLog", "a+");

     if (preg_match("/\\bhtm\\b/i", $ipLog) || preg_match("/\\bhtml\\b/i", $ipLog))
     {
          fputs($log, "Logged IP address: $ip - Browser is: $browser - Date logged: $date<br>");
     }
     else fputs($log, "Logged IP address: $ip - Browser is: $browser - Date logged: $date\
");

     fclose($log);
}
// Place the below function call wherever you want the script to fire.
logIp();
?>
