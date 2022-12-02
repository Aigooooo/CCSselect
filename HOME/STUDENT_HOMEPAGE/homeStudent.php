<?php 
    include $_SERVER["DOCUMENT_ROOT"]."/CCSselect/CONNECTION/connection.php";
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Student Home</title>
        <link rel="stylesheet" href="../header.css">
    </head>
    <body>
        <h1>Student Home</h1>
        <a href="../../PROFILE/STUDENT/studentProfile.php">Profile</a>
        <?php echo $_SESSION["email"]?>  
    </body>
</html>