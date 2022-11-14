<?php
    session_start();
    include $_SERVER["DOCUMENT_ROOT"]."/CCSselect/CONNECTION/connection.php";
    
    $itField = $_POST["itFields"];
    $email = $_SESSION['email'];

    $query = "INSERT INTO user_preferences (email, desiredField) VALUES ('$email','$itField')";
    $result = mysqli_query($conn, $query);
    if($result)
    {
        ?>
        <script>alert("You have updated your skills")</script>
        <?php
    }
    else
    {
        echo mysqli_error($conn);
    }
?>