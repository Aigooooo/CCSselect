<?php
    include $_SERVER["DOCUMENT_ROOT"]."/CCSselect/CONNECTION/connection.php";
    session_start();

    //$resume = $_POST["resume"];
    //$certificate = $_POST['certificate'];
    $skills = $_POST['skills'];
    $email = $_SESSION['mail'];
    $itFields = $_POST['itFields'];
    $description = $_POST['description'];
    $date_val = date("Y-m-d H:i:s");

    if(isset($_POST['submit']) && isset($_FILES['resume']) && isset($_FILES['certificate']))
    {
        //resume
        $img_name = $_FILES['resume']['name'];
        $img_size = $_FILES['resume']['size'];
        $tmp_name = $_FILES['resume']['tmp_name'];
        $error = $_FILES['resume']['error'];
        
        //certificate
        $certificate_img_name = $_FILES['certificate']['name'];
        $certificate_img_size = $_FILES['certificate']['size'];
        $certificate_tmp_name = $_FILES['certificate']['tmp_name'];
        $certificate_error = $_FILES['certificate']['error'];

        if($error === 0)
        {
            if($img_size > 1000000)
            {
                $em = "Resume file is too large!";
                header("Location: skills.php?error=$em");
            }
            else if($certificate_img_size > 1000000)
            {
                $em = "Certificate file is too large!";
                header("Location: skills.php?error=$em");
            }
            else if($certificate_img_size > 1000000 && $img_size > 1000000)
            {
                $em = "Your file is too large!";
                header("Location: skills.php?error=$em");
            }
            else
            {
                //resume
                $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
                $img_ex_lowercase = strtolower($img_ex);
                $allowed_extensions = array("jpg", "jpeg", "pdf", "png", "svg", "docx");

                //certificate
                $certificate_img_ex = pathinfo($certificate_img_name, PATHINFO_EXTENSION);
                $certificate_ex_lowercase = strtolower($certificate_img_ex);
                $certificate_allowed_extensions = array("jpg", "jpeg", "pdf", "png", "svg", "docx");

                if(in_array($img_ex_lowercase, $allowed_extensions) && in_array($certificate_ex_lowercase, $certificate_allowed_extensions))
                {
                    //resume upload
                    $new_img_name = uniqid("CCSselect-", true).'.'.$img_ex_lowercase;
                    $resume_upload_path = "../RESOURCES/Resumes/".$new_img_name;
                    move_uploaded_file($tmp_name, $resume_upload_path);
                    
                    //certificate upload
                    $certificate_new_img_name = uniqid("CCSselect-", true).'.'.$certificate_ex_lowercase;
                    $certificate_upload_path = "../RESOURCES/Certificates/".$certificate_new_img_name;
                    move_uploaded_file($certificate_tmp_name, $certificate_upload_path);
                    
                    //insert to database!
                    $query = "INSERT INTO user_portfolio (email, desired_position, resume, first_skill, second_skill, third_skill, description, certificate, date_created) VALUES ('$email','$itFields','$new_img_name','$skills[0]', '$skills[1]', '$skills[2]', '$description','$certificate_new_img_name','$date_val')";
                    $result = mysqli_query($conn, $query);
                    if($result)
                    {
                        ?>
                        <script>    
                            alert("You have updated your skills")
                            window.location.replace('/CCSselect/VERIFY/verify.html');
                        </script>
                        <?php
                    }
                    else
                    {
                        echo mysqli_error($conn);
                    }
                }
                else
                {
                    $em = "You can't upload files of this type!";
                    header("Location: skills.php?error=$em");
                }
            }
        }
        else
        {
            $em = "Error occured!";
            header("Location: skills.php?error=$em");
        }
    }
    else
    {
        echo "<script>alert('You encountered an error!')</script>";
    }
?>