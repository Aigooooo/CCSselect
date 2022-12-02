<?php
    include $_SERVER["DOCUMENT_ROOT"]."/CCSselect/CONNECTION/connection.php";
    session_start();
    $userid = $_GET['userid'];
    $status;

      if(isset($_POST["view-user"]))
      {   
        header("Location: /CCSSELECT/PROFILE/profile.php?userid=$userid");
      }
      else if(isset($_POST["deactivate-user"]))
      {
        $status;
        $que = mysqli_query($conn, "SELECT * FROM accounts WHERE id = '$userid'");
            while($r = mysqli_fetch_array($que))
            {
                $status = $r['verificationStatus'];
            }
            if($status == "Verified")
            {
                $query = "UPDATE accounts SET verificationStatus = 'Deactivated' WHERE id = '$userid'";
                $result = mysqli_query($conn,$query);
                if($result)
                {
                    echo "<script>alert('You deactivated User ID: $userid')</script>";
                    echo "<script>location.replace('manageUsers.php')</script>";
                }
            }
            else if($status == "Deactivated")
            {
                $query = "UPDATE accounts SET verificationStatus = 'Verified' WHERE id = '$userid'";
                $result = mysqli_query($conn,$query);
                if($result)
                {
                    echo "<script>alert('You undeactivated User ID: $userid')</script>";
                    echo "<script>location.replace('manageUsers.php')</script>";
                }
            }
      }
      else if(isset($_POST["edit-user"]))
      {
          echo "edit";
      }
      else if(isset($_POST["delete-user"]))
      {
          $query = "DELETE FROM accounts WHERE id = '$userid'";
          $result = mysqli_query($conn,$query);
          echo "<script>alert('You have deleted User Id: $userid')</script>";
          echo "<script>location.replace('manageUsers.php')</script>";
      }
?>