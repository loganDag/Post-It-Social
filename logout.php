<?php/*
require('layout/header.php');
*/?>

<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Post it | Logout</title>
<center>
<h1 id="bye">Click to logout</h1>
<link href="https://fonts.googleapis.com/css?family=Black+Han+Sans" rel="stylesheet">
<form action="loguserout.php">    
    <input type="submit" name="submit" value="Logout" id="logout"></div>
	</div>
</form>
</center>
<style type=text/css>
#bye{
color: red;
font-family: 'Black Han Sans', sans-serif;
}
#logout{
padding: 10px;
border-radius: 10px;
width: 150px;
height: 100px;
font-size: 20px;
font-family: 'Black Han Sans', sans-serif;
}
#logout:hover{
cursor: pointer;
color: green;
}
</html>