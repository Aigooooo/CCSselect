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
        if(!empty($email) && !empty($password))
        {
            if(isset($row["email"]) == $email && isset($row["password"]) == $password)
            {
                $_SESSION['id'] = $row['id'];
                $_SESSION['role'] = $row['role'];
                if($_SESSION['role'] == "Employer")
                {
                    $_SESSION['firstName'] = $row['firstName'];
                    $_SESSION['lastName'] = $row['lastName'];
                    $_SESSION['company_name'] = $row['company_name'];
                    $_SESSION['email'] = $row['email'];
                    //$_SESSION['password'] = $row['password'];   
                    header("Location: /CCSSELECT/HOME/EMPLOYER_HOMEPAGE/homeEmployer.php");
                }
                else if($_SESSION['role'] == "Applicant")
                {
                    $_SESSION['firstName'] = $row['firstName'];
                    $_SESSION['lastName'] = $row['lastName'];
                    $_SESSION['age'] = $row['age'];
                    $_SESSION['email'] = $row['email'];
                    //$_SESSION['password'] = $row['password'];   
                    header("Location: /CCSSELECT/HOME/STUDENT_HOMEPAGE/homeStudent.php");
                }
                else if($_SESSION['role'] == "Admin")
                {
                    $_SESSION['firstName'] = $row['firstName'];
                    $_SESSION['lastName'] = $row['lastName'];
                    $_SESSION['age'] = $row['age'];
                    $_SESSION['email'] = $row['email'];
                    //$_SESSION['password'] = $row['password'];   
                    header("Location: /CCSSELECT/HOME/ADMIN_HOMEPAGE/homeAdmin.php");
                }
            }
            else
            {
                ?>
                    <script>
                        alert("Invalid Credentials!");
                        window.location.replace('/CCSselect/SIGNIN/signin.html');
                    </script>
                <?php
            }
        }
        else
        {
            ?>
                    <script>
                        alert("Invalid Credentials!");
                        window.location.replace('/CCSselect/SIGNIN/signin.html');
                    </script>
                <?php
        }
    }
?>