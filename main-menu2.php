<?php
session_start();
?>
<!DOCTYPE html>
<html >
<head>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <meta charset="UTF-8">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  <nav role="navigation" class="nav">
    <ul class="nav-items">
        <li class="nav-item">
            <a href="home.php" class="nav-link"><span>Home</span></a>
        </li> 
        <li class="nav-item">
            <a href="posts.php" class="nav-link"><span>Status update</span></a>
        </li>
        <li class="nav-item">
        <a href="userprofile.php?user=<?php echo $user;?>" class="nav-link"><span>Profile: <?php echo $_SESSION["username"];?></span></a>
        </li>
        <li class="nav-item">
        <a href="loguserout.php" class="nav-link"><span>Logout <i class="fas fa-sign-out-alt"></i></span></a>
        </li>
        <li class="nav-item">
        <a href="account.php" class="nav-link"><span>Settings &#9881;</span></a>
        
        </li>
        <li class="nav-item">
            <a href="users.php" class="nav-link"><span>Registered Users</span></a>
        </li> 
             <?php 
             include("rolecheck.php");
             
             //$allow = array("Admin");
        //if(in_array($_SESSION['username'], $allow))
        if($role == 'admin')
        {
        echo '<li class="nav-item"><a href="admin.php" class="nav-link"><span>Admin panel</span></a></li>';
        }
        ?>
        <!--
        <li class="nav-item dropdown">
            <a href="#" class="nav-link"><span>More</span></a>
            <nav class="submenu">
                <ul class="submenu-items">
                    <li class="submenu-item"><a href="#" class="submenu-link">About</a></li>
                    <li class="submenu-item"><a href="#" class="submenu-link">Contact</a></li>
                    <li class="submenu-item"><hr class="submenu-seperator" /></li>
                    <li class="submenu-item"><a href="#" class="submenu-link">Support</a></li>
                    <li class="submenu-item"><a href="#" class="submenu-link">FAQs</a></li>
                    <li class="submenu-item"><a href="#" class="submenu-link">Careers</a></li>
                </ul>
            </nav>
        </li>  
        -->
    </ul>
</nav>
  
    <script src="js/index.js"></script>

</body>
</html>
