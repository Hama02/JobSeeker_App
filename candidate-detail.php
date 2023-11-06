<?php
require("auth.php");
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Job Stock</title>
  <link rel="icon" type="image/x-icon" href="assets/img/favicon.png" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <link href="assets/css/styles.css" rel="stylesheet" />
</head>

<body>
  <div id="preloader">
    <div class="preloader"><span></span><span></span></div>
  </div>
  <div id="main-wrapper">
    <div class="header header-light head-shadow">
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
            require("session.php")
              ?>
          </div>
        </nav>
      </div>
    </div>
    <div class="clearfix"></div>
    <?php
    $id = $_GET['id'];
    require("db.php");
    $req = "SELECT * FROM candidate where id='$id'";
    $result = mysqli_query($connection, $req);
    $row = mysqli_fetch_assoc($result);
    $name = $row["name"];
    ?>
    <section class="gray-simple">
      <div class="container">
        <div class="row">
          <div class="col-xl-12 col-lg-12 col-md-12">
            <div class="cndt-head-block">

              <div class="cndt-head-left">
                <div class="cndt-head-thumb">
                  <figure><img src="<?php echo $row["img_path"] ?>" class="img-fluid circle" alt=""></figure>
                </div>
                <div class="cndt-head-caption">
                  <div class="cndt-head-caption-top">
                    <div class="cndt-yior-1"><span
                        class="label text-sm-muted text-success bg-light-success">Featured</span></div>
                    <div class="cndt-yior-2">
                      <h4 class="cndt-title">
                        <?php echo $row["name"] ?>
                      </h4>
                    </div>
                    <div class="cndt-yior-3">
                      <span><i class="fa-solid fa-user-graduate me-1"></i>
                        <?php echo $row["job"] ?>
                      </span>
                      <span><i class="fa-solid fa-location-dot me-1"></i>
                        <?php echo $row["country"] ?>
                      </span>
                      <span><i class="fa-solid fa-sack-dollar me-1"></i>$
                        <?php echo (int) $row["salary"] ?>/Month
                      </span>
                      <span><i class="fa-solid fa-cake-candles me-1"></i>07 Apr 1992</span>
                    </div>
                  </div>
                  <div class="cndt-head-caption-bottom">
                    <div class="cndt-yior-skills">
                      <span>Design</span>
                      <span>Python</span>
                      <span>Java</span>
                      <span>PHP</span>
                      <span>WordPress</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="cndt-head-right">
                <button type="button" class="btn btn-primary">Download CV<i
                    class="fa-solid fa-download ms-2"></i></button>
                <button type="button" class="btn btn-outline-primary ms-2"><i class="fa-solid fa-bookmark"></i></button>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-xl-8 col-lg-8 col-md-12">
            <div class="cdtsr-groups-block">
              <div class="single-cdtsr-block">
                <div class="single-cdtsr-header">
                  <h5>About Candidate</h5>
                </div>
                <div class="single-cdtsr-body">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat.
                  <p>
                  <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                    anim id est laborum.</p>
                </div>
              </div>

              <div class="single-cdtsr-block">
                <div class="single-cdtsr-header">
                  <h5>All Information</h5>
                </div>
                <div class="single-cdtsr-body">
                  <div class="row align-items-center justify-content-between gy-4">
                    <div class="col-xl-6 col-lg-6 col-md-6">
                      <div class="cdtx-infr-box">
                        <div class="cdtx-infr-icon"><i class="fa-solid fa-envelope-open-text"></i></div>
                        <div class="cdtx-infr-captions">
                          <h5>
                            <?php echo $row["email"] ?>
                          </h5>
                          <p>Mail Address</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                      <div class="cdtx-infr-box">
                        <div class="cdtx-infr-icon"><i class="fa-solid fa-phone-volume"></i></div>
                        <div class="cdtx-infr-captions">
                          <h5>
                            <?php echo $row["phone_number"] ?>
                          </h5>
                          <p>Phone No.</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                      <div class="cdtx-infr-box">
                        <div class="cdtx-infr-icon"><i class="fa-regular fa-user"></i></div>
                        <div class="cdtx-infr-captions">
                          <h5>
                            <?php echo $row["gender"] ?>
                          </h5>
                          <p>Gender</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                      <div class="cdtx-infr-box">
                        <div class="cdtx-infr-icon"><i class="fa-solid fa-cake-candles"></i></div>
                        <div class="cdtx-infr-captions">
                          <h5>07 Apr 1992</h5>
                          <p>Age</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                      <div class="cdtx-infr-box">
                        <div class="cdtx-infr-icon"><i class="fa-solid fa-wallet"></i></div>
                        <div class="cdtx-infr-captions">
                          <h5>$
                            <?php echo $row["salary"] ?>/month
                          </h5>
                          <p>Offerd Sallary</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                      <div class="cdtx-infr-box">
                        <div class="cdtx-infr-icon"><i class="fa-solid fa-briefcase"></i></div>
                        <div class="cdtx-infr-captions">
                          <h5>
                            <?php echo $row["years_of_experience"] ?> Years
                          </h5>
                          <p>Experience</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                      <div class="cdtx-infr-box">
                        <div class="cdtx-infr-icon"><i class="fa-solid fa-user-graduate"></i></div>
                        <div class="cdtx-infr-captions">
                          <h5>Master Degree</h5>
                          <p>Qualification</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                      <div class="cdtx-infr-box">
                        <div class="cdtx-infr-icon"><i class="fa-solid fa-layer-group"></i></div>
                        <div class="cdtx-infr-captions">
                          <h5>Fulltime, Remote, Freelance</h5>
                          <p>Work Type</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="single-cdtsr-block">
                <div class="single-cdtsr-header">
                  <h5>Resumes</h5>
                </div>
                <div class="single-cdtsr-body">
                  <div class="resumes-groups-blox">

                    <div class="single-resumes-blocks">
                      <div class="single-resumes-left">
                        <div class="single-resumes-icons"><i class="fa-solid fa-file-word"></i></div>
                        <div class="single-resumes-captions">
                          <h5>
                            <?php echo $row["name"] ?>-Resume.doc-2022<span>1 Year ago</span>
                          </h5>
                        </div>
                      </div>
                      <div class="single-resumes-right">
                        <button type="button" class="btn btn-md btn-light-success">Download<i
                            class="fa-solid fa-circle-down ms-1"></i></button>
                      </div>
                    </div>

                    <div class="single-resumes-blocks">
                      <div class="single-resumes-left">
                        <div class="single-resumes-icons"><i class="fa-solid fa-file-word"></i></div>
                        <div class="single-resumes-captions">
                          <h5>
                            <?php echo $row["name"] ?>-Resume.doc-2023<span>10 Days ago</span>
                          </h5>
                        </div>
                      </div>
                      <div class="single-resumes-right">
                        <button type="button" class="btn btn-md btn-light-success">Download<i
                            class="fa-solid fa-circle-down ms-1"></i></button>
                      </div>
                    </div>

                  </div>
                </div>
              </div>

              <div class="single-cdtsr-block">
                <div class="single-cdtsr-header">
                  <h5>All Experience</h5>
                </div>
                <div class="single-cdtsr-body">
                  <div class="experinc-usr-groups">

                    <div class="single-experinc-block">
                      <div class="single-experinc-lft">
                        <div class="experinc-thumbs">
                          <figure><img src="assets/img/l-1.png" class="img-fluid" alt=""></figure>
                        </div>
                      </div>
                      <div class="single-experinc-rght">
                        <div class="experinc-emp-title">
                          <h5>Linked In</h5><span class="label text-success bg-light-success">Full Time</span>
                        </div>
                        <div class="experinc-post-title">
                          <h6>Sr. Web Designer</h6>
                          <div class="experinc-infos-list"><span class="exp-start">5 Years 1 Month</span><span
                              class="work-exp-date">May 2010 - Jun 2015</span></div>
                        </div>
                      </div>
                    </div>

                    <div class="single-experinc-block">
                      <div class="single-experinc-lft">
                        <div class="experinc-thumbs">
                          <figure><img src="assets/img/l-2.png" class="img-fluid" alt=""></figure>
                        </div>
                      </div>
                      <div class="single-experinc-rght">
                        <div class="experinc-emp-title">
                          <h5>Dribbble Ltd.</h5><span class="label text-warning bg-light-warning">Part Time</span>
                        </div>
                        <div class="experinc-post-title">
                          <h6>Sr. Product Designer</h6>
                          <div class="experinc-infos-list"><span class="exp-start">2 Years 3 Month</span><span
                              class="work-exp-date">Aug 2015 - Jan 2017</span></div>
                        </div>
                      </div>
                    </div>
                    <div class="single-experinc-block">
                      <div class="single-experinc-lft">
                        <div class="experinc-thumbs">
                          <figure><img src="assets/img/l-3.png" class="img-fluid" alt=""></figure>
                        </div>
                      </div>
                      <div class="single-experinc-rght">
                        <div class="experinc-emp-title">
                          <h5>Google Inc.</h5><span class="label text-success bg-light-success">Full Time</span>
                        </div>
                        <div class="experinc-post-title">
                          <h6>Sr. Team Leader</h6>
                          <div class="experinc-infos-list"><span class="exp-start">4 Years 7 Month</span>.<span
                              class="work-exp-date">Feb 2017 - Dec 2022</span></div>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>

              <div class="single-cdtsr-block">
                <div class="single-cdtsr-header">
                  <h5>Educations</h5>
                </div>
                <div class="single-cdtsr-body">
                  <div class="educations-usr-groups">

                    <div class="single-educations-block">
                      <div class="single-educations-lft">
                        <div class="educations-thumbs">
                          <figure><img src="assets/img/l-4.png" class="img-fluid" alt=""></figure>
                        </div>
                      </div>
                      <div class="single-educations-rght">
                        <div class="educations-emp-title">
                          <h5>Swami Vivekanand University</h5>
                        </div>
                        <div class="educations-post-title">
                          <h6>Bachlor Degree in Computer Science</h6>
                        </div>
                        <div class="educations-infos-list"><span class="exp-start">Jun 2008</span><span
                            class="work-exp-date">Meeruth, UP</span></div>
                      </div>
                    </div>

                    <div class="single-educations-block">
                      <div class="single-educations-lft">
                        <div class="educations-thumbs">
                          <figure><img src="assets/img/l-5.png" class="img-fluid" alt=""></figure>
                        </div>
                      </div>
                      <div class="single-educations-rght">
                        <div class="educations-emp-title">
                          <h5>Shatrapati Shiva Ji Maharaja University</h5>
                        </div>
                        <div class="educations-post-title">
                          <h6>Master Degree in Computer Science</h6>
                        </div>
                        <div class="educations-infos-list"><span class="exp-start">Jun 2013</span><span
                            class="work-exp-date">Faizabad, UP</span></div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>

              <div class="single-cdtsr-block">
                <div class="single-cdtsr-header">
                  <h5>Candidate Skills</h5>
                </div>
                <div class="single-cdtsr-body">
                  <div class="cndts-all-skills-list">
                    <span>Java</span>
                    <span>Python</span>
                    <span>Bootstrap</span>
                    <span>HTML5</span>
                    <span>UI/UX</span>
                    <span>Laravel</span>
                    <span>WordPress</span>
                  </div>
                </div>
              </div>

              <div class="single-cdtsr-block">
                <div class="single-cdtsr-header">
                  <h5>Portfolio</h5>
                </div>
                <div class="single-cdtsr-body">
                  <div class="row gx-3 gy-3">

                    <div class="col-xl-4 col-lg-4 col-md-6 col-6">
                      <div class="cndts-prt-block">
                        <div class="cndts-prt-thumb">
                          <img src="assets/img/blog-1.jpg" class="img-fluid rounded" alt="">
                        </div>
                        <div class="cndts-prt-link"><a href="JavaScript:Void(0);"><i
                              class="fa-solid fa-arrow-up-right-from-square"></i></a></div>
                      </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-6 col-6">
                      <div class="cndts-prt-block">
                        <div class="cndts-prt-thumb">
                          <img src="assets/img/blog-2.jpg" class="img-fluid rounded" alt="">
                        </div>
                        <div class="cndts-prt-link"><a href="JavaScript:Void(0);"><i
                              class="fa-solid fa-arrow-up-right-from-square"></i></a></div>
                      </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-6 col-6">
                      <div class="cndts-prt-block">
                        <div class="cndts-prt-thumb">
                          <img src="assets/img/blog-3.jpg" class="img-fluid rounded" alt="">
                        </div>
                        <div class="cndts-prt-link"><a href="JavaScript:Void(0);"><i
                              class="fa-solid fa-arrow-up-right-from-square"></i></a></div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>

              <div class="single-cdtsr-block">
                <div class="single-cdtsr-header">
                  <h5>Language</h5>
                </div>
                <div class="single-cdtsr-body">
                  <div class="row gy-4">

                    <div class="col-xl-4 col-lg-4 col-md-6 col-6">
                      <div class="cndts-lgs-blocks">
                        <div class="cndts-lgs-ico">
                          <h6>JP</h6>
                        </div>
                        <div class="cndts-lgs-captions">
                          <h5>Japanies</h5>
                          <p>Basic</p>
                        </div>
                      </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-6 col-6">
                      <div class="cndts-lgs-blocks">
                        <div class="cndts-lgs-ico">
                          <h6>EN</h6>
                        </div>
                        <div class="cndts-lgs-captions">
                          <h5>English</h5>
                          <p>Advance</p>
                        </div>
                      </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-6 col-6">
                      <div class="cndts-lgs-blocks">
                        <div class="cndts-lgs-ico">
                          <h6>FR</h6>
                        </div>
                        <div class="cndts-lgs-captions">
                          <h5>French</h5>
                          <p>Medium</p>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>

              <div class="single-cdtsr-block">
                <div class="single-cdtsr-header">
                  <h5>Related Candidate</h5>
                </div>
                <div class="single-cdtsr-body">
                  <div class="row justify-content-start gx-3 gy-4">
                    <?php
                    $req = "SELECT * FROM candidate limit 4";
                    $result = mysqli_query($connection, $req);
                    while ($row = mysqli_fetch_assoc($result)) {
                      echo '<div class="col-xl-12 col-lg-12 col-md-12 col-12">
                      <div class="jbs-list-box border">
                        <div class="jbs-list-head m-0">
                          <div class="jbs-list-head-thunner">
                            <div class="jbs-list-usrs-thumb jbs-verified"><a href="candidate-detail.php?id=' . $row["id"] . '">
                                <figure><img src="' . $row["img_path"] . '" class="img-fluid circle" alt=""></figure>
                              </a></div>
                            <div class="jbs-list-job-caption">
                              <div class="jbs-job-title-wrap">
                                <h4><a href="candidate-detail.php?id=' . $row["id"] . '" class="jbs-job-title">' . $row["name"] . '</a></h4>
                              </div>
                              <div class="jbs-job-mrch-lists">
                                <div class="single-mrch-lists">
                                  <span>' . $row["job"] . '</span>.<span><i
                                      class="fa-solid fa-location-dot me-1"></i>' . $row["country"] . '</span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="jbs-list-head-middle">
                            <div class="elsocrio-jbs sm">
                              <div class="ilop-tr"><i class="fa-solid fa-coins"></i></div>
                              <h5 class="jbs-list-pack">' . $row["years_of_experience"] . ' Years Exp.</h5>
                            </div>
                          </div>
                          <div class="jbs-list-head-last">
                            <a href="candidate-detail.php?id=' . $row["id"] . '" class="btn btn-md btn-primary px-3">View Detail</a>
                          </div>
                        </div>
                      </div>
                    </div>';
                    }
                    ?>
                  </div>
                </div>
              </div>

            </div>
          </div>

          <div class="col-xl-4 col-lg-4 col-md-12">
            <div class="sidefr-usr-block mb-4">
              <div class="sidefr-usr-header">
                <h4 class="sidefr-usr-title">Contact
                  <?php echo $name ?>
                </h4>
              </div>
              <div class="sidefr-usr-body">
                <form>
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Your Name">
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email Address">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Phone.">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Subject">
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" placeholder="Your Message"></textarea>
                  </div>
                  <div class="form-group m-0">
                    <button type="button" class="btn btn-primary font--medium full-width">Send Message</button>
                  </div>
                </form>
              </div>
            </div>

            <div class="sidefr-usr-block">
              <div class="cndts-share-block">
                <div class="cndts-share-title">
                  <h5>Share Profile</h5>
                </div>
                <div class="cndts-share-list">
                  <ul>
                    <li><a href="JavaScript:Void(0);"><i class="fa-brands fa-facebook-f"></i></a></li>
                    <li><a href="JavaScript:Void(0);"><i class="fa-brands fa-twitter"></i></a></li>
                    <li><a href="JavaScript:Void(0);"><i class="fa-brands fa-google-plus-g"></i></a></li>
                    <li><a href="JavaScript:Void(0);"><i class="fa-brands fa-instagram"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>

          </div>

        </div>
      </div>
    </section>

    <section class="bg-cover" style="background:#016551 url(assets/img/footer-bg-dark.png)no-repeat;">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-7 col-lg-10 col-md-12 col-sm-12">

            <div class="call-action-wrap">
              <div class="sec-heading center">
                <h2 class="mb-3 text-light">Find The Perfect Job<br>on Job Stock That is Superb For You</h2>
                <p class="text-light">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                  praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias</p>
              </div>
              <div class="call-action-buttons mt-3">
                <a href="JavaScript:Void(0);" class="btn btn-lg btn-dark font--medium px-xl-5 px-lg-4 me-2">Upload
                  resume</a>
                <a href="JavaScript:Void(0);" class="btn btn-lg btn-whites font--medium px-xl-5 px-lg-4">Join Our
                  Team</a>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
    <footer class="footer skin-light-footer">
      <div class="footer-top">
        <div class="container">
          <div class="row align-items-center justify-content-between">

            <div class="col-xl-5 col-lg-5 col-md-5">
              <div class="call-action-form rounded m-0">
                <form class="ms-0">
                  <div class="newsltr-form gray-style">
                    <input type="text" class="form-control" placeholder="Enter Your email">
                    <button type="button" class="btn btn-subscribe">Subscribe</button>
                  </div>
                </form>
              </div>
            </div>

            <div class="col-xl-7 col-lg-7 col-md-7">
              <div class="job-info-count-group lg-ctr">
                <div class="single-jb-info-count">
                  <div class="jbs-y7">
                    <h5 class="ctr">12</h5><span class="theme-dark-cl">K</span>
                  </div>
                  <div class="jbs-y5">
                    <p>Job Posted</p>
                  </div>
                </div>
                <div class="single-jb-info-count">
                  <div class="jbs-y7">
                    <h5 class="ctr">10</h5><span class="theme-dark-cl">M</span>
                  </div>
                  <div class="jbs-y5">
                    <p>Happy Customers</p>
                  </div>
                </div>
                <div class="single-jb-info-count">
                  <div class="jbs-y7">
                    <h5 class="ctr">76</h5><span class="theme-dark-cl">K</span>
                  </div>
                  <div class="jbs-y5">
                    <p>Freelancers</p>
                  </div>
                </div>
                <div class="single-jb-info-count">
                  <div class="jbs-y7">
                    <h5 class="ctr">200</h5><span class="theme-dark-cl">+</span>
                  </div>
                  <div class="jbs-y5">
                    <p>Companies</p>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
      <div>
        <div class="container">
          <div class="row">

            <div class="col-lg-3 col-md-4">
              <div class="footer-widget">
                <img src="assets/img/logo.png" class="img-footer" alt="">
                <div class="footer-add">
                  <p>Collins Street West, Victoria Near Bank Road<br>Australia QHR12456.</p>
                </div>
                <div class="foot-socials">
                  <ul>
                    <li><a href="JavaScript:Void(0);"><i class="fa-brands fa-facebook"></i></a></li>
                    <li><a href="JavaScript:Void(0);"><i class="fa-brands fa-linkedin"></i></a></li>
                    <li><a href="JavaScript:Void(0);"><i class="fa-brands fa-google-plus"></i></a></li>
                    <li><a href="JavaScript:Void(0);"><i class="fa-brands fa-twitter"></i></a></li>
                    <li><a href="JavaScript:Void(0);"><i class="fa-brands fa-dribbble"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-2 col-md-4">
              <div class="footer-widget">
                <h4 class="widget-title theme-cl">For Clients</h4>
                <ul class="footer-menu">
                  <li><a href="JavaScript:Void(0);">Talent Marketplace</a></li>
                  <li><a href="JavaScript:Void(0);">Payroll Services</a></li>
                  <li><a href="JavaScript:Void(0);">Direct Contracts</a></li>
                  <li><a href="JavaScript:Void(0);">Hire Worldwide</a></li>
                  <li><a href="JavaScript:Void(0);">Hire in the USA</a></li>
                  <li><a href="JavaScript:Void(0);">How to Hire</a></li>
                </ul>
              </div>
            </div>

            <div class="col-lg-2 col-md-4">
              <div class="footer-widget">
                <h4 class="widget-title theme-cl">Our Resources</h4>
                <ul class="footer-menu">
                  <li><a href="JavaScript:Void(0);">Free Business tools</a></li>
                  <li><a href="JavaScript:Void(0);">Affiliate Program</a></li>
                  <li><a href="JavaScript:Void(0);">Success Stories</a></li>
                  <li><a href="JavaScript:Void(0);">Upwork Reviews</a></li>
                  <li><a href="JavaScript:Void(0);">Resources</a></li>
                  <li><a href="JavaScript:Void(0);">Help & Support</a></li>
                </ul>
              </div>
            </div>

            <div class="col-lg-2 col-md-6">
              <div class="footer-widget">
                <h4 class="widget-title theme-cl">The Company</h4>
                <ul class="footer-menu">
                  <li><a href="JavaScript:Void(0);">About Us</a></li>
                  <li><a href="JavaScript:Void(0);">Leadership</a></li>
                  <li><a href="JavaScript:Void(0);">Contact Us</a></li>
                  <li><a href="JavaScript:Void(0);">Investor Relations</a></li>
                  <li><a href="JavaScript:Void(0);">Trust, Safety & Security</a></li>
                </ul>
              </div>
            </div>

            <div class="col-lg-3 col-md-6">
              <div class="footer-widget">
                <h4 class="widget-title theme-cl">Download Apps</h4>
                <div class="app-wrap">
                  <p><a href="JavaScript:Void(0);"><img src="assets/img/light-play.png" class="img-fluid" alt=""></a>
                  </p>
                  <p><a href="JavaScript:Void(0);"><img src="assets/img/light-ios.png" class="img-fluid" alt=""></a></p>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

    </footer>

    <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="loginmodal" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
        <div class="modal-content" id="loginmodal">
          <span class="mod-close" data-bs-dismiss="modal" aria-hidden="true"><i class="fas fa-close"></i></span>
          <div class="modal-header">
            <div class="mdl-thumb">
              <img src="assets/img/ico.png" class="img-fluid" width="70" alt="" />
            </div>
            <div class="mdl-title">
              <h4 class="modal-header-title">Hello, Again</h4>
            </div>
          </div>
          <div class="modal-body">
            <div class="modal-login-form">
              <form action="signup.php" method="post">
                <div class="form-floating mb-4">
                  <input type="email" name="email" class="form-control" placeholder="name@example.com" />
                  <label>Email</label>
                </div>

                <div class="form-floating mb-4">
                  <input type="password" name="password" class="form-control" placeholder="Password" />
                  <label>Password</label>
                </div>

                <div class="form-group">
                  <button type="submit" name="login" class="btn btn-primary full-width font--bold btn-lg">
                    Log In
                  </button>
                  <?php
                  require('auth.php');
                  echo $error; ?>
                </div>

                <div class="modal-flex-item mb-3">
                  <div class="modal-flex-first">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" id="savepassword" value="option1" />
                      <label class="form-check-label" for="savepassword">Save Password</label>
                    </div>
                  </div>
                  <div class="modal-flex-last">
                    <a href="JavaScript:Void(0);">Forget Password?</a>
                  </div>
                </div>
              </form>
            </div>
            <div class="social-login">
              <ul>
                <li>
                  <a href="JavaScript:Void(0);" class="btn connect-fb"><i class="fa-brands fa-facebook"></i>Facebook</a>
                </li>
                <li>
                  <a href="JavaScript:Void(0);" class="btn connect-google"><i
                      class="fa-brands fa-google"></i>Google+</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="modal-footer">
            <p>
              Don't have an account yet?<a href="signup.php" class="theme-cl font--bold ms-1">Sign Up</a>
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="filter" tabindex="-1" role="dialog" aria-labelledby="filtermodal" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered filter-popup" role="document">
        <div class="modal-content" id="filtermodal">
          <span class="mod-close" data-bs-dismiss="modal" aria-hidden="true"><i class="fas fa-close"></i></span>
          <div class="modal-header">
            <h4 class="modal-header-sub-title">Start Your Filter</h4>
          </div>
          <div class="modal-body p-0">
            <div class="filter-content">
              <div class="full-tabs-group">
                <div class="single-tabs-group">
                  <div class="single-tabs-group-header">
                    <h5>Job Match Score</h5>
                  </div>

                  <div class="single-tabs-group-content">
                    <div class="d-flex flex-wrap">
                      <div class="sing-btn-groups">
                        <input type="checkbox" class="btn-check" id="msix">
                        <label class="btn btn-md btn-outline-primary font--bold rounded-5" for="msix">6.0</label>
                      </div>
                      <div class="sing-btn-groups">
                        <input type="checkbox" class="btn-check" id="msixfive">
                        <label class="btn btn-md btn-outline-primary font--bold rounded-5" for="msixfive">6.5</label>
                      </div>
                      <div class="sing-btn-groups">
                        <input type="checkbox" class="btn-check" id="mseven">
                        <label class="btn btn-md btn-outline-primary font--bold rounded-5" for="mseven">7.0</label>
                      </div>
                      <div class="sing-btn-groups">
                        <input type="checkbox" class="btn-check" id="msevenfive">
                        <label class="btn btn-md btn-outline-primary font--bold rounded-5" for="msevenfive">7.5</label>
                      </div>
                      <div class="sing-btn-groups">
                        <input type="checkbox" class="btn-check" id="meight">
                        <label class="btn btn-md btn-outline-primary font--bold rounded-5" for="meight">8.0</label>
                      </div>
                      <div class="sing-btn-groups">
                        <input type="checkbox" class="btn-check" id="meightfive">
                        <label class="btn btn-md btn-outline-primary font--bold rounded-5" for="meightfive">8.5</label>
                      </div>
                      <div class="sing-btn-groups">
                        <input type="checkbox" class="btn-check" id="mnine">
                        <label class="btn btn-md btn-outline-primary font--bold rounded-5" for="mnine">9.0</label>
                      </div>
                      <div class="sing-btn-groups">
                        <input type="checkbox" class="btn-check" id="mninefive">
                        <label class="btn btn-md btn-outline-primary font--bold rounded-5" for="mninefive">9.5</label>
                      </div>
                      <div class="sing-btn-groups">
                        <input type="checkbox" class="btn-check" id="mten">
                        <label class="btn btn-md btn-outline-primary font--bold rounded-5" for="mten">10</label>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="single-tabs-group">
                  <div class="single-tabs-group-header">
                    <h5>Job Value Score</h5>
                  </div>

                  <div class="single-tabs-group-content">
                    <div class="d-flex flex-wrap">
                      <div class="sing-btn-groups">
                        <input type="checkbox" class="btn-check" id="vsix">
                        <label class="btn btn-md btn-outline-primary font--bold rounded-5" for="vsix">6.0</label>
                      </div>
                      <div class="sing-btn-groups">
                        <input type="checkbox" class="btn-check" id="vsixfive">
                        <label class="btn btn-md btn-outline-primary font--bold rounded-5" for="vsixfive">6.5</label>
                      </div>
                      <div class="sing-btn-groups">
                        <input type="checkbox" class="btn-check" id="vseven">
                        <label class="btn btn-md btn-outline-primary font--bold rounded-5" for="vseven">7.0</label>
                      </div>
                      <div class="sing-btn-groups">
                        <input type="checkbox" class="btn-check" id="vsevenfive">
                        <label class="btn btn-md btn-outline-primary font--bold rounded-5" for="vsevenfive">7.5</label>
                      </div>
                      <div class="sing-btn-groups">
                        <input type="checkbox" class="btn-check" id="veight">
                        <label class="btn btn-md btn-outline-primary font--bold rounded-5" for="veight">8.0</label>
                      </div>
                      <div class="sing-btn-groups">
                        <input type="checkbox" class="btn-check" id="veightfive">
                        <label class="btn btn-md btn-outline-primary font--bold rounded-5" for="veightfive">8.5</label>
                      </div>
                      <div class="sing-btn-groups">
                        <input type="checkbox" class="btn-check" id="vnine">
                        <label class="btn btn-md btn-outline-primary font--bold rounded-5" for="vnine">9.0</label>
                      </div>
                      <div class="sing-btn-groups">
                        <input type="checkbox" class="btn-check" id="vninefive">
                        <label class="btn btn-md btn-outline-primary font--bold rounded-5" for="vninefive">9.5</label>
                      </div>
                      <div class="sing-btn-groups">
                        <input type="checkbox" class="btn-check" id="vten">
                        <label class="btn btn-md btn-outline-primary font--bold rounded-5" for="vten">10</label>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="single-tabs-group">
                  <div class="single-tabs-group-header">
                    <h5>Place Of Work</h5>
                  </div>

                  <div class="single-tabs-group-content">
                    <div class="d-flex flex-wrap">
                      <div class="sing-btn-groups">
                        <input type="checkbox" class="btn-check" id="anywhere" checked>
                        <label class="btn btn-md btn-outline-primary font--bold rounded-5"
                          for="anywhere">Anywhere</label>
                      </div>
                      <div class="sing-btn-groups">
                        <input type="checkbox" class="btn-check" id="onsite">
                        <label class="btn btn-md btn-outline-primary font--bold rounded-5" for="onsite">On Site</label>
                      </div>
                      <div class="sing-btn-groups">
                        <input type="checkbox" class="btn-check" id="remote">
                        <label class="btn btn-md btn-outline-primary font--bold rounded-5" for="remote">Fully
                          Remote</label>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="single-tabs-group">
                  <div class="single-tabs-group-header">
                    <h5>Type Of Contract</h5>
                  </div>

                  <div class="single-tabs-group-content">
                    <div class="d-flex flex-wrap">
                      <div class="sing-btn-groups">
                        <input type="checkbox" class="btn-check" id="employee1">
                        <label class="btn btn-md btn-outline-primary font--bold rounded-5"
                          for="employee1">Employee</label>
                      </div>
                      <div class="sing-btn-groups">
                        <input type="checkbox" class="btn-check" id="frelancers1">
                        <label class="btn btn-md btn-outline-primary font--bold rounded-5"
                          for="frelancers1">Freelancer</label>
                      </div>
                      <div class="sing-btn-groups">
                        <input type="checkbox" class="btn-check" id="contractor1">
                        <label class="btn btn-md btn-outline-primary font--bold rounded-5"
                          for="contractor1">Contractor</label>
                      </div>
                      <div class="sing-btn-groups">
                        <input type="checkbox" class="btn-check" id="internship1">
                        <label class="btn btn-md btn-outline-primary font--bold rounded-5"
                          for="internship1">Internship</label>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="single-tabs-group">
                  <div class="single-tabs-group-header">
                    <h5>Type Of Employment</h5>
                  </div>

                  <div class="single-tabs-group-content">
                    <div class="d-flex flex-wrap">
                      <div class="sing-btn-groups">
                        <input type="checkbox" class="btn-check" id="fulltime">
                        <label class="btn btn-md btn-outline-primary font--bold rounded-5" for="fulltime">Full
                          Time</label>
                      </div>
                      <div class="sing-btn-groups">
                        <input type="checkbox" class="btn-check" id="parttime">
                        <label class="btn btn-md btn-outline-primary font--bold rounded-5" for="parttime">Part
                          Time</label>
                      </div>
                      <div class="sing-btn-groups">
                        <input type="checkbox" class="btn-check" id="freelance2" checked>
                        <label class="btn btn-md btn-outline-primary font--bold rounded-5"
                          for="freelance2">Freelance</label>
                      </div>
                      <div class="sing-btn-groups">
                        <input type="checkbox" class="btn-check" id="internship2">
                        <label class="btn btn-md btn-outline-primary font--bold rounded-5"
                          for="internship2">Internship</label>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="single-tabs-group">
                  <div class="single-tabs-group-header">
                    <h5>Radius In Miles</h5>
                  </div>

                  <div class="single-tabs-group-content">
                    <div class="rg-slider">
                      <input type="text" class="js-range-slider" name="my_range" value="">
                    </div>
                  </div>
                </div>

                <div class="single-tabs-group">
                  <div class="single-tabs-group-header">
                    <h5>Explore Top Categories</h5>
                  </div>

                  <div class="single-tabs-group-content">
                    <ul class="row p-0 m-0">
                      <li class="col-lg-6 col-md-6 p-0">
                        <div class="form-check form-check-inline">
                          <input id="s-1" class="form-check-input" name="s-1" type="checkbox">
                          <label for="s-1" class="form-check-label">IT Computers</label>
                        </div>
                      </li>
                      <li class="col-lg-6 col-md-6 p-0">
                        <div class="form-check form-check-inline">
                          <input id="s-2" class="form-check-input" name="s-2" type="checkbox">
                          <label for="s-2" class="form-check-label">Web Design</label>
                        </div>
                      </li>
                      <li class="col-lg-6 col-md-6 p-0">
                        <div class="form-check form-check-inline">
                          <input id="s-3" class="form-check-input" name="s-3" type="checkbox">
                          <label for="s-3" class="form-check-label">Web development</label>
                        </div>
                      </li>
                      <li class="col-lg-6 col-md-6 p-0">
                        <div class="form-check form-check-inline">
                          <input id="s-4" class="form-check-input" name="s-4" type="checkbox">
                          <label for="s-4" class="form-check-label">SEO Services</label>
                        </div>
                      </li>
                      <li class="col-lg-6 col-md-6 p-0">
                        <div class="form-check form-check-inline">
                          <input id="s-5" class="form-check-input" name="s-5" type="checkbox">
                          <label for="s-5" class="form-check-label">Financial Service</label>
                        </div>
                      </li>
                      <li class="col-lg-6 col-md-6 p-0">
                        <div class="form-check form-check-inline">
                          <input id="s-6" class="form-check-input" name="s-6" type="checkbox">
                          <label for="s-6" class="form-check-label">Art, Design, Media</label>
                        </div>
                      </li>
                      <li class="col-lg-6 col-md-6 p-0">
                        <div class="form-check form-check-inline">
                          <input id="s-7" class="form-check-input" name="s-7" type="checkbox">
                          <label for="s-7" class="form-check-label">Coach & Education</label>
                        </div>
                      </li>
                      <li class="col-lg-6 col-md-6 p-0">
                        <div class="form-check form-check-inline">
                          <input id="s-8" class="form-check-input" name="s-8" type="checkbox">
                          <label for="s-8" class="form-check-label">Apps Developements</label>
                        </div>
                      </li>
                      <li class="col-lg-6 col-md-6 p-0">
                        <div class="form-check form-check-inline">
                          <input id="s-9" class="form-check-input" name="s-9" type="checkbox">
                          <label for="s-9" class="form-check-label">IOS Development</label>
                        </div>
                      </li>
                      <li class="col-lg-6 col-md-6 p-0">
                        <div class="form-check form-check-inline">
                          <input id="s-10" class="form-check-input" name="s-10" type="checkbox">
                          <label for="s-10" class="form-check-label">Android Development</label>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>

                <div class="single-tabs-group">
                  <div class="single-tabs-group-header">
                    <h5>Keywords</h5>
                  </div>

                  <div class="single-tabs-group-content">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Design, Java, Python, WordPress etc...">
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
          <div class="modal-footer">
            <div class="filt-buttons-updates">
              <button type="button" class="btn btn-dark">Clear Filter</button>
              <button type="button" class="btn btn-primary">Search</button>
            </div>
          </div>
        </div>
      </div>
    </div>

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