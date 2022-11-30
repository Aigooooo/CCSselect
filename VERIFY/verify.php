<?php
    session_start();
    include $_SERVER["DOCUMENT_ROOT"]."/CCSselect/CONNECTION/connection.php";

        $otp = $_SESSION['otp'];
        $email = $_SESSION['mail'];
        $code = $_POST['code'];
        $verificationStatus = "Verified";
        if($otp != $code)
        {
            ?>
            <script>
                alert("Invalid verification code");
            </script>
        <?php
        }
        else
        {
            $verify = "UPDATE accounts SET verificationStatus = '$verificationStatus' WHERE email = '$email'";
            $result = mysqli_query($conn, $verify);
            ?>
                <script>
                    alert("Verify account done, you may sign in now!");
                    window.location.replace('/CCSselect/VERIFY/verifyComplete.html');
                </script>
            <?php
        }
?>