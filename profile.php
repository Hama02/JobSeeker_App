<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Job Stock</title>
  <link rel="icon" type="image/x-icon" href="assets/img/favicon.png">
  <link href="assets/css/styles.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

</head>

<body>

  <div id="preloader">
    <div class="preloader"><span></span><span></span></div>
  </div>
  <div id="main-wrapper">
    <div class="header header-transparent dark">
      <div class="container">
        <nav id="navigation" class="navigation navigation-landscape">
          <div class="nav-header">
            <a class="nav-brand" href="./index.php">
              <img src="assets/img/logo.png" class="logo" alt="" />
            </a>
            <div class="nav-toggle"></div>
          </div>
          <div class="nav-menus-wrapper" style="transition-property: none">
            <ul class="nav-menu">
              <li class="active">
                <a href="./index.php">Home<span class="submenu-indicator"></span></a>
              </li>

              <li>
                <a href="jobs_list.php">Browse Jobs<span class="submenu-indicator"></span></a>
              </li>
              <li>
                <a href="candidates_list.php">Browse Candidates<span class="submenu-indicator"></span></a>
              </li>
            </ul>
            <?php
            require("session.php");
            require("db.php");
            $username = $_SESSION['username'];
            $req = "SELECT u.*
            FROM user_account u
            WHERE u.name = '$username'";
            $res = mysqli_query($connection, $req);
            $row = mysqli_fetch_assoc($res);
            ?>
          </div>
        </nav>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="dashboard-wrap bg-light">
      <a class="mobNavigation" data-bs-toggle="collapse" href="#MobNav" role="button" aria-expanded="false"
        aria-controls="MobNav">
        <i class="fas fa-bars mr-2"></i>Dashboard Navigation
      </a>
      <div class="collapse" id="MobNav">
        <div class="dashboard-nav">
          <div class="dash-user-blocks pt-5">
            <div class="jbs-grid-usrs-thumb">
              <div class="jbs-grid-yuo">
                <a href="#">
                  <figure><img src="assets/img/user-5.png" class="img-fluid circle" alt=""></figure>
                </a>
              </div>
            </div>
            <div class="jbs-grid-usrs-caption mb-3">
              <div class="jbs-kioyer">
                <div class="jbs-kioyer-groups">
                  <span class="fa-solid fa-star active"></span>
                  <span class="fa-solid fa-star active"></span>
                  <span class="fa-solid fa-star active"></span>
                  <span class="fa-solid fa-star active"></span>
                  <span class="fa-solid fa-star"></span>
                  <span class="aal-reveis">4.7</span>
                </div>
              </div>
              <div class="jbs-tiosk">
                <h4 class="jbs-tiosk-title"><a href="#">
                    <?php echo $row["name"] ?>
                  </a></h4>

              </div>
            </div>
          </div>
          <div class="dashboard-inner">
            <ul data-submenu-title="Main Navigation">
              <li class="active"><a href="#"><i class="fa-regular fa-user me-2"></i>My Profile </a>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="dashboard-content">
        <div class="dashboard-tlbar d-block mb-4">
          <div class="row">
            <div class="colxl-12 col-lg-12 col-md-12">
              <h1 class="mb-1 fs-3 font--medium">User Profile</h1>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item text-muted"><a href="#">User</a></li>
                  <li class="breadcrumb-item text-muted"><a href="#">Dashboard</a></li>
                  <li class="breadcrumb-item"><a href="#" class="theme-cl">User Profile</a></li>
                </ol>
              </nav>
            </div>
          </div>
        </div>

        <div class="dashboard-widg-bar d-block">

          <div class="dashboard-profle-wrapper mb-4">
            <div class="dash-prf-start">
              <div class="dash-prf-start-upper">
                <div class="dash-prf-start-thumb">
                  <figure><img src="assets/img/user-5.png" class="img-fluid circle" alt=""></figure>
                </div>
              </div>
              <div class="dash-prf-start-bottom">
                <div class="upload-btn-wrapper small">
                  <button class="btn">Change Profile</button>
                  <input type="file" name="myfile">
                </div>
              </div>
            </div>
            <div class="dash-prf-end">
              <div class="dash-prfs-caption">
                <div class="dash-prfs-title">
                  <h4>
                    <?php echo $row["name"] ?>
                  </h4>
                </div>

                <div class="jbs-grid-job-edrs-group mt-1">
                  <span>HTML</span>
                  <span>CSS3</span>
                  <span>Bootstrap</span>
                  <span>Redux</span>
                </div>
              </div>
              <div class="dash-prf-caption-end">
                <div class="dash-prf-infos">
                  <div class="single-dash-prf-infos">
                    <div class="single-dash-prf-infos-icons"><i class="fa-solid fa-envelope-open-text"></i></div>
                    <div class="single-dash-prf-infos-caption">
                      <p class="text-sm-muted mb-0">Email</p>
                      <h5>
                        <?php echo $row["email"] ?>
                      </h5>
                    </div>
                  </div>
                  <div class="single-dash-prf-infos">
                    <div class="single-dash-prf-infos-icons"><i class="fa-solid fa-phone-volume"></i></div>
                    <div class="single-dash-prf-infos-caption">
                      <p class="text-sm-muted mb-0">Call</p>
                      <h5>+216
                        <?php echo $row["phone_number"] ?>
                      </h5>
                    </div>
                  </div>

                </div>
                <div class="dash-prf-completion">
                  <p class="text-sm-muted">Profile Completed</p>
                  <div class="progress" role="progressbar" aria-label="Example Success with label" aria-valuenow="75"
                    aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar bg-success" style="width: 75%">75%</div>
                  </div>
                </div>
              </div>
            </div>

          </div>

          <div class="card">
            <div class="card-header">
              <h4>Basic Detail</h4>
            </div>
            <div class="card-body">
              <form>
                <div class="row">

                  <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="form-group">
                      <label>Your Name</label>
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="form-group">
                      <label>Job Title</label>
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="form-group">
                      <label>Age</label>
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="form-group">
                      <label>Education</label>
                      <div class="select-ops">
                        <select>
                          <option value="1">High School</option>
                          <option value="2">Intermidiate</option>
                          <option value="3">Bachelore Degree</option>
                          <option value="4">Master Degree</option>
                          <option value="5">Post Graduate</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="form-group">
                      <label>Experience</label>
                      <div class="select-ops">
                        <select>
                          <option value="1">Fresher</option>
                          <option value="2">1+ Year</option>
                          <option value="3">2+ Year</option>
                          <option value="4">4+ Year</option>
                          <option value="5">5+ Year</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="form-group">
                      <label>Language</label>
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="form-group">
                      <label>About Info</label>
                      <textarea class="form-control ht-80"></textarea>
                    </div>
                  </div>

                </div>
              </form>
            </div>
          </div>

          <div class="card">
            <div class="card-header">
              <h4>Contact Detail</h4>
            </div>
            <div class="card-body">
              <form>
                <div class="row">

                  <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="form-group">
                      <label>Your Email</label>
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="form-group">
                      <label>Phone no.</label>
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="form-group">
                      <label>Temporary Address</label>
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="form-group">
                      <label>Address</label>
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="form-group">
                      <label>Address 2</label>
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="form-group">
                      <label>Country</label>
                      <div class="select-ops">
                        <select>
                          <option value="1">India</option>
                          <option value="2">United State</option>
                          <option value="3">United kingdom</option>
                          <option value="4">Austrailia</option>
                          <option value="5">Russia</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="form-group">
                      <label>State/City</label>
                      <div class="select-ops">
                        <select>
                          <option value="1">California</option>
                          <option value="2">Denver</option>
                          <option value="3">New York</option>
                          <option value="4">Canada</option>
                          <option value="5">Poland</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="form-group">
                      <label>Zip Code</label>
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="form-group">
                      <label>Latitude</label>
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="form-group">
                      <label>longitude</label>
                      <input type="text" class="form-control">
                    </div>
                  </div>

                </div>
              </form>
            </div>
          </div>

          <div class="card">
            <div class="card-header">
              <h4>Social Login</h4>
            </div>
            <div class="card-body">
              <form>
                <div class="row">

                  <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="form-group">
                      <label>Facebook</label>
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="form-group">
                      <label>Twitter</label>
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="form-group">
                      <label>Instagram</label>
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="form-group">
                      <label>Linked In</label>
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="form-group">
                      <label>Twitter</label>
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="form-group">
                      <label>Google Plus</label>
                      <input type="text" class="form-control">
                    </div>
                  </div>

                </div>
              </form>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 col-md-12">
              <button type="submit" class="btn ft--medium btn-primary">Save Profile</button>
            </div>
          </div>
        </div>

      </div>

    </div>
    <a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>


  </div>
  <script>
    function toggle() {
      let ele = document.querySelector(".user-info");
      if (ele.style.display != "block") {
        ele.style.display = "block"
      } else {
        ele.style.display = "none"
      }
    }
  </script>
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/rangeslider.js"></script>
  <script src="assets/js/jquery.nice-select.min.js"></script>
  <script src="assets/js/slick.js"></script>
  <script src="assets/js/counterup.min.js"></script>
  <script src="assets/js/custom.js"></script>

</body>

</html>