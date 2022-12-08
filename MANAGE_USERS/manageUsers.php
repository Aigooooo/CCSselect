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
    <link rel="stylesheet" href="manageUsers.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-white">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="../images/ccsselectlogo.png" alt="Logo" width="200" height="40"
                    class="d-inline-block align-text-top" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <div class="table-container">
        <div class="table-header">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Manage Users</li>
                </ol>
            </nav>
            <h1>Manage Users</h1>
            <span>Manage the different types of users.</span>
        </div>
        <div class="table-filter-section">
            <div class="roles">
                <div class="role-item all-roles"><u>All</u></div>
                <div class="role-item">Admin</div>
                <div class="role-item">Employer</div>
                <div class="role-item applicant-role">Applicant</div>
            </div>
        </div>
        <div class="user-table">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Account Created</th>
                        <th scope="col">Date Created</th>
                        <th scope="col">Actions</th>
                        <th scope="col">Status</th>
                    </tr>
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
                        <td scope="row"><?=$res["id"]?></td>
                        <td><?=$res["firstName"]." ".$res["lastName"]?></td>
                        <td><?=$res["role"]?></td>
                        <td><?=$res["email"]?></td>
                        <td><?=$res["dateRegistered"]?></td>
                        <td>
                            <form action="manage-users-buttons.php?userid=<?=$res["id"]?>" method="POST">
                                <div class="actions">
                                    <button type="submit" name="view-user" class="action-btn">
                                        <iconify-icon icon="ic:baseline-remove-red-eye" style="color: #2295e3;"
                                            width="20" height="20"></iconify-icon>
                                    </button>
                                    <button type="submit" name="deactivate-user" class="action-btn">
                                        <iconify-icon icon="mdi:account-off" style="color: #717171;" width="20"
                                            height="20"></iconify-icon>
                                    </button>
                                    <button type="submit" name="edit-user" class="action-btn">
                                        <iconify-icon icon="bxs:edit-alt" style="color: #4eca5c;" width="20"
                                            height="20"></iconify-icon>
                                    </button>
                                    <button name="delete-user" onclick="onDelete()" class="action-btn">
                                        <iconify-icon icon="mdi:trash-can" style="color: #d93d3d;" width="20"
                                            height="20"></iconify-icon>
                                    </button>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>

</body>

</html>