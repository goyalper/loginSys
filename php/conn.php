<?php
// Database connection

// if($_SERVER['HTTP_HOST'] == "localhost"){
//         $db_host = "localhost";
//         $db_user = "root";
//         $db_pass = "";
//         $db_name = "googlelogin";
     
//     }else{
      
        
        $db_host = "localhost";
        $db_user = "u269692706_Umesh";
        $db_pass = "325202Login";
        $db_name = "u269692706_googlelogin";
//   }


$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>