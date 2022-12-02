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
    <title>Manage Users</title>
    <link rel="stylesheet" href="manageUsersss.css">
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
            src="../images/ccsselectlogo.png"
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
      <div class="manage-users">
          <h1>Manage Users</h1>
          <span>Make changes with your job listing</span>
      </div>
      <div class="table-filt">
          <div class="role-count">
            <ul>
              <li>All</li>
              <li>Admin</li>
              <li>Employer</li>
              <li>Applicant</li>
            </ul>
          </div>
          <!-- 
          <div class="search-bar">
            <form action="#">
              <input type="text">
            </form>
          </div> 
          -->
      </div>
      <div class="user-table">
          <table>
            <thead>
              <td><b>ID</b></td>
              <td><b>Name</b></td>
              <td><b>Role</b></td>
              <td><b>Email</b></td>
              <td><b>Account Created</b></td>
              <td><b>Actions</b></td>
              <td><b>Status</b></td>
            </thead>
            <tbody>
              <?php
                $query = "SELECT * FROM accounts";
                $result = mysqli_query($conn, $query);
                if(mysqli_num_rows($result) > 0)
                {
                  while($res = mysqli_fetch_assoc($result))
                  {
                    $id = $res['id'];
                    ?>
                        <tr>
                          <td><?=$res["id"]?></td>
                          <td><?=$res["firstName"]." ".$res["lastName"]?></td>   
                          <td><?=$res["role"]?></td> 
                          <td><?=$res["email"]?></td>
                          <td><?=$res["dateRegistered"]?></td>
                          <td>
                            <form action = "manage-users-buttons.php?userid=<?=$res["id"]?>" method="POST" >
                              <div class="actions">
                                <button type="submit" name = "view-user" class="action-btn"> <img src="../images/ic_baseline-remove-red-eye.svg"></button>
                                <button type="submit" name = "deactivate-user" class="action-btn"> <img src="../images/Vector.svg"></button>
                                <button type="submit" name = "edit-user" class="action-btn"> <img src="../images/fe_edit.svg"></button>
                                <button name = "delete-user" onclick="onDelete()" class="action-btn"> <img src="../images/material-symbols_delete-rounded.svg" ></button>
                              </div>
                            </form>
                          </td>
                          <td><?=$res["verificationStatus"]?></td>
                        </tr>
                    <?php 
                  }
                }
              ?>
            </tbody>
          </table>
      </div>
    </div>
  </body>
</html>