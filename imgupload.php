<?php
session_start();
if(isset($_POST["submit"])){
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false){
        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));

        /*
         * Insert image data into database
         */
        
        //DB details
        $dbHost     = '';
        $dbUsername = '';
        $dbPassword = '';
        $dbName     = '';
        
        //Create connection and select DB
        $db = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);
        
        // Check connection
        if($db->connect_error){
            die("Connection failed: " . $db->connect_error);
        }
        
        $dataTime = date("Y-m-d H:i:s");
        $user = $_SESSION['username'];
        //Insert image content into database
        $insert = $db->query("INSERT into images (image, created, username) VALUES ('$imgContent', '$dataTime', '$user')");
        if($insert){
            echo "File uploaded successfully.";
            header('refresh: 1 account.php');
        }else{
            echo "File upload failed, please try again.";
        } 
    }else{
        echo "Please select an image file to upload.";
    }
}
?>
<title>Post it | Profile pic upload</title>