<?php
    include $_SERVER["DOCUMENT_ROOT"]."/CCSselect/CONNECTION/connection.php";
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Student Profile</title>
    <link rel="stylesheet" href="employerProfile.css">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-white">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img
            src="../../images/ccsselectlogo.png"
            alt="Logo"
            width="200"
            height="40"
            class="d-inline-block align-text-top"
          />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>

    <div class="container">
      <div class="profile-header">
        <h1><b>Profile</b></h1>
        <div class="header-functions">
          <p class="view-resume">View Resume</p>
          <span> <b>User Type:</b> </span>
          <?php
            $email = $_SESSION["email"];
            $query = "SELECT * FROM accounts WHERE email = '$email'";
            $result = mysqli_query($conn, $query);
            if(mysqli_num_rows($result) > 0)
            {
                while($res = mysqli_fetch_assoc($result))
                {?>
                        <?=$res["role"]?>  
                    <?php 
                }
            }
            ?>
        </div>
      </div>
      <hr />
      <?php
            $email = $_SESSION["email"];
            $query = "SELECT * FROM accounts WHERE email = '$email'";
            $result = mysqli_query($conn, $query);
            if(mysqli_num_rows($result) > 0)
            {
                while($res = mysqli_fetch_assoc($result))
                {?>
                        <div class="profile-content-container">
                            <div class="left-content">
                                <img src="../../RESOURCES/Profile_Pictures/<?=$res["profilePic"]?>" class="profile-photo">
                                <p class="profile-name">
                                    <?=$res["firstName"]." ".$res["lastName"]?>
                                </p><br>
                    <?php 
                }
            }
            ?>
        </div>
        <?php
            $email = $_SESSION["email"];
            $query = "SELECT * FROM user_portfolio WHERE email = '$email'";
            $result = mysqli_query($conn, $query);
                if(mysqli_num_rows($result) > 0)
                {
                    while($res = mysqli_fetch_assoc($result))
                    {?>
                        <div class="right-content">
                            <p class="desired-position-title">
                                <b>Desired Position:</b>
                            </p>
                            <p class="desired-positions">
                                <?=$res["desired_position"]?>
                            </p>
                        </div>
                        <?php 
                        }
                    }
                ?>
      </div>

      <div class="personal-information-section">
        <div class="personal-information-header">
          <h2><b>Personal Information</b></h2>
          <hr />
        </div>
        <?php
            $email = $_SESSION["email"];
            $query = "SELECT * FROM accounts WHERE email = '$email'";
            $result = mysqli_query($conn, $query);
            if(mysqli_num_rows($result) > 0)
            {
                while($res = mysqli_fetch_assoc($result))
                {?>
                    <div class="personal-information-content">
                    <div>
                        <p class="information-title">Name</p>
                        <p><?=$res["firstName"]." ".$res["lastName"]?></p>
                    </div>
                    <div>
                        <p class="information-title">Company</p>
                        <p><?=$res["company_name"]?></p>
                    </div>
                    <div>
                        <p class="information-title">Email</p>
                        <p><?=$res["email"]?></p>
                    </div>
                    <div>
                        <p class="information-title">Phone No.</p>
                        <p><?=$res["phoneNumber"]?></p>
                    </div>
                    </div>
                </div>
        <?php 
                }
            }
        ?>
        <?php
            $email = $_SESSION["email"];
            $query = "SELECT * FROM user_portfolio WHERE email = '$email'";
            $result = mysqli_query($conn, $query);
            if(mysqli_num_rows($result) > 0)
            {
                while($res = mysqli_fetch_assoc($result))
                {?> 
                    <div class="skills">
                        <div class="skills-header">
                            <h2><b>Skills</b></h2>
                            <hr />
                        </div>
                        <div class="skills-content">
                            <div class="skill-item"><?=$res["first_skill"]?></div>
                            <div class="skill-item"><?=$res["second_skill"]?></div>
                            <div class="skill-item"><?=$res["third_skill"]?></div>
                        </div>
                    </div>

                    <div class="certificates">
                        <h2><b>Certificates</b></h2>
                        <hr />
                        <div class="certificate-content">
                            <img src="../../RESOURCES/Certificates/<?=$res["certificate"]?>" class="cert">
                        </div>
                    </div>
                <?php 
                }
            }
        ?>
        <?php
            $email = $_SESSION["email"];
            $query = "SELECT * FROM user_portfolio WHERE email = '$email'";
            $result = mysqli_query($conn, $query);
            if(mysqli_num_rows($result) > 0)
            {
                while($res = mysqli_fetch_assoc($result))
                {?>
                    <div class="description">
                        <h2><b>Additional Description</b></h2>
                        <hr />
                        <div class="description-content">
                            <p>
                                <?=$res["description"]?>
                            </p>
                        </div>
                    </div>
                <?php 
                }
            }
        ?>               
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>
  </body>
</html>