<?php
    session_start();
    include $_SERVER["DOCUMENT_ROOT"]."/CCSselect/CONNECTION/connection.php";
    
    $resume = $_POST["resume"];
    $email = $_SESSION['email'];
    $resume = $_POST['resume'];
    $certificate = $_POST['certificate'];
    $itFields = $_POST['itFields'];
    $description = $_POST['description'];
    $date_val = date("Y-m-d H:i:s");


    if(isset($_POST['submit']) && isset($_FILES['resume']))
    {
        echo "Hello";
    }
    /*$query = "INSERT INTO user_portfolio ($email, desired_position, resume, description, certificate, date_created) VALUES ('$email','$itFields','$resume','$description','$certificate',$date_val)";
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
    }*/
?>