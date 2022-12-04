<?php 
    include $_SERVER["DOCUMENT_ROOT"]."/CCSselect/CONNECTION/connection.php";
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Student Home</title>
    <link rel="stylesheet" href="homeStudent.css" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.8.1/css/solid.css"
    />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"
          ><img src="../../images/ccsselectlogo.png" alt="" class="logo"
        /></a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarText"
          aria-controls="navbarText"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Job Listing</a>
            </li>
          </ul>
          <div class="right-content">
            <i class="fa fa-bell notification-bell"></i>
            <a href="../../PROFILE/STUDENT/studentProfile.php">
                <button class="profile-btn">
                <i class="fa fa-user-circle"></i> Profile
                </button>
            </a>
            <div class="dropdown-container">
              <div class="dropdown dropstart">
                <i
                  class="fa fa-sort-down dropdown-icon"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                ></i>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Logout</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>

    <div class="home-content-container">
      <div class="home-content">
        <div class="left-home-content">
          <h1 class="home-content-title">Find the right job for you.</h1>
          <p class="home-content-description">
            Looking for the right job position and company has never been this
            easy.
          </p>
          <button type="button" class="btn btn-outline-light">
            Get Started
          </button>
        </div>
        <div class="right-home-content">
          <img
            src="../../images/homepageIllustration.png"
            alt=""
            class="homepage-illustration"
          />
        </div>
      </div>
    </div>

    <div class="job-listing-header">
      <div class="top-section">
        <div class="top-section-details">
          <h1 class="top-section-title">Job Listings</h1>
          <p class="top-section-description">
            Lorem Ipsum is simply dummy text of the printing and typesetting
            industry.
          </p>
        </div>
        <form class="top-right-section">
          <div class="search-container">
            <input
              type="text"
              class="search"
              placeholder=" &#xF002;  Search for keywords, job positions, or companies"
              style="font-family: Arial, 'Font Awesome 5 Free'"
            />
            <input
              type="text"
              class="location"
              placeholder="&#xf3c5;  Location"
              style="font-family: Arial, 'Font Awesome 5 Free'"
            />
            <button type="submit" class="search-btn">
              <div class="search-icon"><i class="fa fa-search"></i></div>
              Search Jobs
            </button>
          </div>
        </form>
      </div>
      <div class="bottom-section">
        <div class="dropdown-container">
          <div class="dropdown">
            <button
              class="btn dropdown-toggle btn-outline-dark"
              type="button"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
              <p class="dropdown-title">Company Size</p>
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </div>
          <div class="dropdown">
            <button
              class="btn dropdown-toggle btn-outline-dark"
              type="button"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
              <p class="dropdown-title">Salary Range</p>
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </div>
          <div class="dropdown">
            <button
              class="btn dropdown-toggle btn-outline-dark"
              type="button"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
              <p class="dropdown-title">Job Types</p>
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <hr />

    <div class="job-listing-content">
      <div class="left-content">
        <h1 class="left-content-title">Explore Jobs</h1>
        <p class="left-content-description">
          Jobs displayed are based on your Profile information.
        </p>
        <hr />

        <div class="job-list-container">
          <div class="company-logo-container">
            <img
              src="https://cdn-icons-png.flaticon.com/512/2991/2991148.png"
              alt=""
              class="compony-logo"
            />
          </div>
          <div class="job-information">
            <div class="job-information-item company-name">Google Careers</div>
            <div class="job-information-item job-position">
              Full-Stack Web Developer
            </div>
            <div class="job-information-item job-location">
              <i class="map-icon fa fa-map-marker"></i> IT Park, Cebu,
              Philippines
            </div>
            <div class="job-details">
              <p class="job-details-item">Full-Time</p>
              <p class="job-details-item">8 hour Shift</p>
            </div>
          </div>
        </div>
        <hr />
        <div class="job-list-container">
          <div class="company-logo-container">
            <img
              src="https://i.ibb.co/yYQgYGr/lanex-logo-1-2.png"
              alt=""
              class="compony-logo"
            />
          </div>
          <div class="job-information">
            <div class="job-information-item company-name">Google Careers</div>
            <div class="job-information-item job-position">
              Full-Stack Web Developer
            </div>
            <div class="job-information-item job-location">
              <i class="map-icon fa fa-map-marker"></i> IT Park, Cebu,
              Philippines
            </div>
            <div class="job-details">
              <p class="job-details-item">Full-Time</p>
              <p class="job-details-item">8 hour Shift</p>
            </div>
          </div>
        </div>
        <hr />
        <div class="job-list-container">
          <div class="company-logo-container">
            <img
              src="https://i.ibb.co/Pt3VvyX/image-34.png"
              alt=""
              class="compony-logo"
            />
          </div>
          <div class="job-information">
            <div class="job-information-item company-name">Google Careers</div>
            <div class="job-information-item job-position">
              Full-Stack Web Developer
            </div>
            <div class="job-information-item job-location">
              <i class="map-icon fa fa-map-marker"></i> IT Park, Cebu,
              Philippines
            </div>
            <div class="job-details">
              <p class="job-details-item">Full-Time</p>
              <p class="job-details-item">8 hour Shift</p>
            </div>
          </div>
        </div>
        <hr />
        <div class="job-list-container">
          <div class="company-logo-container">
            <img
              src="https://i.ibb.co/zHPT0jn/image-33.png"
              alt=""
              class="compony-logo"
            />
          </div>
          <div class="job-information">
            <div class="job-information-item company-name">Google Careers</div>
            <div class="job-information-item job-position">
              Full-Stack Web Developer
            </div>
            <div class="job-information-item job-location">
              <i class="map-icon fa fa-map-marker"></i> IT Park, Cebu,
              Philippines
            </div>
            <div class="job-details">
              <p class="job-details-item">Full-Time</p>
              <p class="job-details-item">8 hour Shift</p>
            </div>
          </div>
        </div>
      </div>
      <div class="right-content">
        <div class="job-list-information-container">
          <div class="top-information">
            <div class="company-logo-container">
              <img
                src="https://cdn-icons-png.flaticon.com/512/2991/2991148.png"
                alt=""
                class="compony-logo"
              />
            </div>
            <div class="company-details">
              <h2 class="company-name">Google Careers</h2>
              <p class="company-description">
                Lorem ipsum is simply a dummy text.
              </p>
            </div>

            <div class="btn-container">
              <button type="button" class="bookmark-btn btn">Bookmark</button>
              <button type="button" class="apply-now-btn btn">Apply Now</button>
            </div>
          </div>

          <div class="middle-information">
            <h2>Full-Stack Web Developer</h2>
            <div class="job-information-item job-location">
              <i class="map-icon fa fa-map-marker"></i>
              <div class="job-location-text">IT Park, Cebu, Philippines</div>
            </div>
            <div class="job-details">
              <div class="job-details-item">
                <i class="job-details-icon fa fa-hourglass-half"></i>
                <div class="job-details-text">Full-Time</div>
              </div>
              <div class="job-details-item">
                <i class="job-details-icon fa fa-clock-o"></i>
                <div class="job-details-text">8 hours shift</div>
              </div>
              <div class="job-details-item">
                <i class="job-details-icon fa fa-money"></i>
                <div class="job-details-text">₱30,000 - ₱50,000 monthly</div>
              </div>
            </div>
          </div>

          <div class="bottom-information">
            <h2>Job Description</h2>
            <p>
              Lorem Ipsum is simply dummy text of the printing and typesetting
              industry. Lorem Ipsum has been the industry's standard dummy text
              ever since the 1500s, when an unknown printer took a galley of
              type and scrambled it to make a type specimen book. It has
              survived not only five centuries, but also the leap into
              electronic typesetting, remaining essentially unchanged. It was
              popularised in the 1960s with the release of Letraset sheets
              containing Lorem Ipsum passages, and more recently with desktop
              publishing software like Aldus PageMaker including versions of
              Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and
              typesetting industry. Lorem Ipsum has been the industry's standard
              dummy text ever since the 1500s, when an unknown printer took a
              galley of type and scrambled it to make a type specimen book. It
              has survived not only five centuries, but also the leap into
              electronic typesetting, remaining essentially unchanged. It was
              popularised in the 1960s with the release of Letraset sheets
              containing Lorem Ipsum passages, and more recently with desktop
              publishing software like Aldus PageMaker including versions of
              Lorem Ipsum.
              <br />
              <br />
              Lorem Ipsum is simply dummy text of the printing and typesetting
              industry. Lorem Ipsum has been the industry's standard dummy text
              ever since the 1500s, when an unknown printer took a galley of
              type and scrambled it to make a type specimen book. It has
              survived not only five centuries, but also the leap into
              electronic typesetting, remaining essentially unchanged. It was
              popularised in the 1960s with the release of Letraset sheets
              containing Lorem Ipsum passages, and more recently with desktop
              publishing software like Aldus PageMaker including versions of
              Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and
              typesetting industry. Lorem Ipsum has been the industry's standard
              dummy text ever since the 1500s, when an unknown printer took a
              galley of type and scrambled it to make a type specimen book. It
              has survived not only five centuries, but also the leap into
              electronic typesetting, remaining essentially unchanged. It was
              popularised in the 1960s with the release of Letraset sheets
              containing Lorem Ipsum passages, and more recently with desktop
              publishing software like Aldus PageMaker including versions of
              Lorem Ipsum.
            </p>
          </div>
        </div>
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
