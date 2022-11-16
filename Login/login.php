<?php 
session_start();
//connect this page with database page
include "db_connection.php";

#validate form by if statement
if(isset($_POST['email']) && isset($_POST['password'])) {
    
    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}

$email = validate($_POST['email']);
$password = validate($_POST['password']);







?>