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

if(empty($email)) {
    header("Location: index.php?erro=User Name is required"); 
}
else if(empty($password)) {
    header("Location: index.php?erro=User Password is required");
}

$sql = "SELECT * FROM Login WHERE Email= 'email' AND Password='password'";

$results = mysqli_query($conn, $sql);

if(mysqli_num_rows($results) === 1 ) {
    $row = mysqli_fetch_assoc($results);
    if($row['Email'] === 'email' && $row['password'] === 'password'){
        echo "Logged In!!";
        $_SESSION['Login_id'] = $row['id'];
        $_SESSION['Email'] = $row['Email'];
        $_SESSION['Password'] = $row['password'];
        header("Location: homePage.php");
        exit();
    }
    else{
        header("Location: registration.php");
        exit();
    }

    

}
else{
    header("Location: registration.php");
    exit();
}
