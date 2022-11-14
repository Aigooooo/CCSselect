<?php
    session_start();
    include $_SERVER["DOCUMENT_ROOT"]."/CCSselect/CONNECTION/connection.php";

    $email = $_POST["email"];
    $password = $_POST["pass"];

    $select = "SELECT * FROM accounts where email = '$email'";
    $result = mysqli_query($conn, $select);
    $row = mysqli_fetch_array($result);
    if($result)
    {
        if(isset($row["email"]) == $email && isset($row["password"]) == $password)
        {
            if(isset($row["role"]) == "User")
            {
                $_SESSION['email'] = $row['email'];
                ?>
                    <script>
                        window.location.replace('/CCSselect/USER/home.php');
                    </script>
                <?php
            }
        }
    }
?>