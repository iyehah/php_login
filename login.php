<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php
session_start();
include('./config.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $admin = 'admin';
       
        $statement =$con->prepare("SELECT user_Name, user_Password , user_Type FROM users WHERE user_Name = ? AND user_Password = ? AND user_Type = ?");
        $statement->execute(array($username,$password,$admin));
        $counter = $statement->rowCount();
        if($counter > 0){
            $_SESSION['admin'] = $username;
            header('Location:./Admin/dashboard.php');
        }else{
            echo '<div class="error">Error : Invalid username or password</div>';
            // header('Location:./index.html');
        }
}
?>
</body>
</html>