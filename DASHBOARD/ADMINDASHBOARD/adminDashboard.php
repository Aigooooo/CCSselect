<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Student Profile</title>
    <link rel="stylesheet" href="adminDashboard.css">
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

    <div class="admin-dashboard">
        <h1>Admin Dashboard</h1>
    </div>

    <div class="dashboard-content">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <img src = "../../images/mdi_users-group.svg" alt = "">
                <h4 class="card-title">Manage Users</h4>
                <p class="card-text">Manage the users of CCSselect</p>
                <a href="../../MANAGE_USERS/manageUsers.php" class="btn btn-primary">Go</a>
            </div>
        </div>
    </div>
  </body>
</html>