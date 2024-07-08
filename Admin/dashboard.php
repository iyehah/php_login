<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Page</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php 
    include('../config.php');
    session_start();
if(isset($_SESSION['admin'])){
    $admin_name = $_SESSION['admin']; 
?>
    <div class="dashboard-container">
        <header>
            <h1>Logo</h1>
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Profile</a></li>
                    <li><a href="#">Settings</a></li>
                    <li><a href="./logout.php">Logout</a></li>
                </ul>
            </nav>
            <div class="profile">
            <a href="#" id="profile-link"><?php $firstLetter = strtolower(substr($admin_name, 0, 1)); echo $firstLetter; ?></a>

                <div class="profile-card" id="profile-card">
                    <h2>Your Profile Information</h2>
                </div>
            </div>
        </header>
        <main>
            <p><strong><?php echo $admin_name ?> </strong>Welcome to the Dashboard</p>
        </main>
    </div>
<?php 
} else {
    echo 'error';
    header('Location: ../index.html');
    exit();
}
?>
<script src="./script.js"></script>
</body>
</html>
