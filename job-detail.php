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
    $jobId = $_GET['id'];
    require("db.php");
    $req = "SELECT * FROM job where job_id='$jobId'";
    $result = mysqli_query($connection, $req);
    $row = mysqli_fetch_assoc($result);
    ?>
    <section class="bg-cover" style="background:#016551 url(assets/img/bg2.png)no-repeat;">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">

            <div class="jbs-head-bodys-top">
              <div class="jbs-roots-y1">
                <div class="jbs-roots-y1-first">
                  <div class="jbs-roots-thumb">
                    <figure><img src="<?php echo $row["img_path"] ?>" class="img-fluid" alt=""></figure>
                  </div>
                </div>
                <div class="jbs-roots-y1-last ps-3">
                  <div class="jbs-urt mb-1"><span class="label text-light theme-2-bg">
                      <?php echo $row["job_type"] ?>
                    </span></div>
                  <div class="jbs-title-iop">
                    <h2 class="m-0 text-light">
                      <?php echo $row["job_title"] ?>
                    </h2>
                  </div>
                  <div class="jbs-locat-oiu text-sm-muted text-light d-flex align-items-center">
                    <span><i class="fa-solid fa-location-dot opacity-75 me-1"></i>
                      <?php echo $row["location"] ?>
                    </span>
                    <div class="jbs-kioyer-groups ms-3">
                      <span class="fa-solid fa-star active"></span>
                      <span class="fa-solid fa-star active"></span>
                      <span class="fa-solid fa-star active"></span>
                      <span class="fa-solid fa-star active"></span>
                      <span class="fa-solid fa-star"></span>
                      <span class="aal-reveis text-light opacity-75">4.6</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="jbs-roots-y2">
                <div class="jbs-roots-action-groups">
                  <div class="jbs-roots-action-btns">
                    <button type="button" class="btn btn-md btn-whites">Quick Apply</button>
                    <button type="button" class="btn btn-md btn-dark ms-2">Save Job</button>
                  </div>
                  <div class="jbs-roots-action-info">
                    <span class="text-light opacity-75 me-2">74 applicants</span>.<span
                      class="text-sm font--medium theme-2-cl ms-2">Posted 54 min ago</span>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
    <section class="gray-simple">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-12">

            <div class="jbs-blocs style_03 b-0 mb-md-4 mb-sm-4">
              <div class="jbs-blocs-body px-4 py-4">
                <div class="jbs-content mb-4">
                  <h5>Job Description</h5>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati error accusamus in vero nulla
                    nam ipsa nisi! Facilis amet illum delectus possimus quidem dignissimos autem. Velit fugiat alias
                    saepe pariatur?.</p>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti aliquam in iure quaerat, libero
                    mollitia odit ipsam eos tempore, quis, eligendi dolore? Velit dolorem ut fugiat aliquid, sed
                    deleniti cumque voluptas, similique atque consectetur, aliquam doloribus in minima autem nisi
                    sapiente cupiditate voluptatem itaque tempore animi accusantium. Nihil, aliquam officiis?.</p>
                  <p class="m-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laboriosam similique repellat
                    perspiciatis atque eaque dolores magnam ipsum! Quia, necessitatibus esse sed eius quos at, corrupti
                    soluta rem itaque quam perspiciatis?.</p>
                </div>
                <div class="jbs-content-body mb-4">
                  <h5>Job Requirements</h5>
                  <div class="jbs-content mb-3">
                    <h6>Requirements:</h6>
                    <ul class="simple-list">
                      <li>Candidate must have a Bachelors or Masters degree in Computer. (B.tech, Bsc or BCA/MCA)</li>
                      <li>Candidate must have a good working knowledge of Javascript and Jquery.</li>
                      <li>Good knowledge of HTML and CSS is required.</li>
                      <li>Experience in Word press is an advantage</li>
                      <li>Jamshedpur, Jharkhand: Reliably commute or planning to relocate before starting work
                        (Required)</li>
                    </ul>
                  </div>

                  <div class="jbs-content mb-4">
                    <h6>Responsibilities:</h6>
                    <ul class="simple-list">
                      <li>Write clean, maintainable and efficient code.</li>
                      <li>Design robust, scalable and secure features.</li>
                      <li>Collaborate with team members to develop and ship web applications within tight timeframes.
                      </li>
                      <li>Work on bug fixing, identifying performance issues and improving application performance</li>
                      <li>Write unit and functional testcases.</li>
                      <li>Continuously discover, evaluate, and implement new technologies to maximise development
                        efficiency. Handling complex technical iss</li>
                    </ul>
                  </div>

                  <div class="jbs-content">
                    <h6>Qualifications and Skills</h6>
                    <ul class="colored-list">
                      <li>Bachelor's degree</li>
                      <li>BCA/MCA</li>
                      <li>BSC IT/Msc IT</li>
                      <li>Or any other equivalent degree</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="jbs-blox-footer">
                <div class="blox-first-footer">
                  <div class="ftr-share-block">
                    <ul>
                      <li><strong>Share This Job:</strong></li>
                      <li><a href="JavaScript:Void(0);"><i class="fa-brands fa-facebook"></i></a></li>
                      <li><a href="JavaScript:Void(0);"><i class="fa-brands fa-linkedin"></i></a></li>
                      <li><a href="JavaScript:Void(0);"><i class="fa-brands fa-google-plus"></i></a></li>
                      <li><a href="JavaScript:Void(0);"><i class="fa-brands fa-twitter"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="blox-last-footer">
                  <div class="jbs-roots-action-btns">
                    <button type="button" class="btn btn-md btn-primary">Quick Apply</button>
                    <button type="button" class="btn btn-md btn-outline-secondary ms-2">Save Job</button>
                  </div>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-4 col-md-12">
            <div class="detail-side-block bg-white mb-4">
              <div class="detail-side-head">
                <div class="side-flex-thumb">
                  <img src="<?php echo $row["img_path"] ?>" class="img-fluid" alt="">
                </div>
                <div class="side-flex-caption">
                  <div class="jbs-title-iop">
                    <h4 class="m-0">
                      <?php echo $row["job_title"] ?>
                    </h4>
                  </div>
                  <div class="jbs-locat-oiu text-sm-muted">
                    <span><i class="fa-solid fa-location-dot me-1"></i>
                      <?php echo $row["location"] ?>
                    </span>
                  </div>
                </div>
              </div>
              <div class="detail-side-middle">
                <div class="form-group">
                  <label>Name:</label>
                  <input type="text" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                  <label>Email:</label>
                  <input type="text" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                  <div class="upload-btn-wrapper full-width">
                    <button class="btn full-width">Upload Resume</button>
                    <input type="file" name="myfile">
                  </div>
                </div>
                <div class="form-group">
                  <div class="elsoci"><label>Are you authorised to work in
                      <?php echo $row["location"] ?>
                    </label></div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="workindia" id="wyes" value="option1">
                    <label class="form-check-label" for="wyes">Yes</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="workindia" id="wno" value="option1">
                    <label class="form-check-label" for="wno">No</label>
                  </div>
                </div>
                <div class="form-group">
                  <div class="elsoci"><label>Do you have master degree?</label></div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="degree" id="dyed" value="option1">
                    <label class="form-check-label" for="dyed">Yes</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="degree" id="dno" value="option1">
                    <label class="form-check-label" for="dno">No</label>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="jobalert" value="option1">
                    <label class="form-check-label" for="jobalert">Create Job Alert</label>
                  </div>
                </div>
                <div class="form-group">
                  <button type="button" class="btn btn-primary full-width font-sm">Apply Now</button>
                </div>
              </div>
            </div>


            <div class="side-rtl-jbs-block">
              <div class="side-rtl-jbs-head">
                <h5 class="side-jbs-titles">Related Jobs</h5>
              </div>
              <div class="side-rtl-jbs-body">
                <div class="side-rtl-jbs-groups">
                  <?php
                  $req = "SELECT * FROM job limit 4";
                  $result = mysqli_query($connection, $req);
                  while ($row = mysqli_fetch_assoc($result)) {
                    echo '<div class="single-side-rtl-jbs">
                      <div class="single-fliox">
                        <div class="single-rtl-jbs-thumb">
                          <a href="job-detail.php?id=' . $row["job_id"] . '">
                            <figure><img src=' . $row["img_path"] . ' class="img-fluid" alt=""></figure>
                          </a>
                        </div>
                        <div class="single-rtl-jbs-caption">
                          <div class="hjs-rtls-titles">
                            <div class="jbs-types mb-1"><span class="label text-success bg-light-success">' . $row["job_type"] . '</span>
                            </div>
                            <h5 class="rtls-title"><a href="job-detail.php?id=' . $row["job_id"] . '">' . $row["job_title"] . '</a></h5>
                            <div class="jbs-locat-oiu text-sm-muted">
                              <span><i class="fa-solid fa-location-dot me-1"></i>' . $row["location"] . '</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="single-rtl-jbs-hot">
                        <div class="single-tag-rtls"><span class="label text-warning bg-light-warning"><i
                              class="fa-brands fa-hotjar me-1"></i>New</span></div>
                        <div class="single-tag-rtls"><span class="label text-success bg-light-success"><i
                              class="fa-solid fa-star me-1"></i>Featured</span></div>
                      </div>
                    </div>';
                  }
                  ?>
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