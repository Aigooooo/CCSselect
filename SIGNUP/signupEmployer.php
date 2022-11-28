<?php
    header("Access-Control-Allow-Origin: *");
    session_start();
    include $_SERVER["DOCUMENT_ROOT"]."/CCSselect/CONNECTION/connection.php";
    
    //declare the necessary variables from the fields of the account table in database. 
    //Note: Lacks profile picture and valid id field.
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $company = $_POST['company_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phoneNumber = $_POST['phoneNumber'];
    $date_val = date("Y-m-d H:i:s");
    $verificationStatus = "Not Verified";
    $role = "Employer";
    $stmtDb;

    if(!empty($firstName) || !empty($lastName) || !empty($company) || !empty($email) || !empty($password) ||!empty($phoneNumber))
    {
        $select = "SELECT email FROM accounts WHERE email = ? LIMIT 1";
        $insert = "INSERT INTO accounts (firstName, lastName, company_name, email, password, dateRegistered, role, verificationStatus, phoneNumber) 
                    VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = $conn->prepare($select);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->store_result();
        $rowNum = $stmt->num_rows;
        if($rowNum==0)
        {
            $stmt->close();
            $stmtDb = $conn->prepare($insert);
            $otp = rand(100000,999999);
            $stmtDb->bind_param("ssssssssi",$firstName, $lastName, $company, $email, $password, $date_val, $role, $verificationStatus, $phoneNumber);
            $stmtDb->execute();
            
            if($stmt)
            {
                $stmtDb->close();
                $_SESSION['otp'] = $otp;
                $_SESSION['mail'] = $email;
                require $_SERVER["DOCUMENT_ROOT"]."/CCSselect/Mail/phpmailer/PHPMailerAutoload.php";
                $mail = new PHPMailer;

                $mail->isSMTP();
                $mail->Host='smtp.gmail.com';
                $mail->Port=587;
                $mail->SMTPAuth=true;
                $mail->SMTPSecure='tls';

                $mail->Username='cccsselect@gmail.com';
                $mail->Password='aalanpqeufgioqqu';

                $mail->setFrom('cccsselect@gmail.com', 'OTP Verification');
                $mail->addAddress($_POST["email"]);
                
                $mail->isHTML(true);
                $mail->Subject="CCSselect verification code";
                $mail->Body="<p>Dear $firstName from $company, </p> <h3>Your verification code is $otp. <br>Thank you for signing up ٩(＾◡＾)۶</h3>
                <br><br>
                <p>Your's truly,</p>
                <b>CCSselect</b>";

                        if(!$mail->send()){
                            ?>
                                <script>
                                    alert("Failed to send the otp to your email");
                                </script>
                            <?php
                        }else{
                            ?>
                            <script>
                                alert("<?php echo "Register Successfully, OTP sent to " . $email ?>");
                                window.location.replace('/CCSselect/VERIFY/verify.html');
                            </script>
                            <?php
                        }
            }
        }
        else
        {
            echo '<script>alert("Someone already has this email, try another one")</script>';  ?>
            <script>
                //window.location.replace('/CCSselect/SIGNUP/signup.php');
            </script>
        <?php
        }
        $stmt->close();
        $conn->close();
    }
    else
    {
        echo '<script>alert("All fields are required")</script>';
        die();
    }
?>