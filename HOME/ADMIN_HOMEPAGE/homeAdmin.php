<?php 
    include $_SERVER["DOCUMENT_ROOT"]."/CCSselect/CONNECTION/connection.php";
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Admin Home</title>
        <link rel="stylesheet" href="../header.css">
    </head>
    <body>
        <h1>Employer Home</h1>
        <a href="../../PROFILE/ADMIN/AdminProfile.php">Profile</a><br>
        <a href="../../DASHBOARD/ADMINDASHBOARD/adminDashboard.php">Admin Dashboard</a>
        <?php echo $_SESSION["email"]?>  
    </body>  
    </body>
</html>

