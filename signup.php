<?php
require("auth.php");
?>
<!DOCTYPE html>
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
    <div class="header header-light dark">
      <div class="container">
        <nav id="navigation" class="navigation navigation-landscape">
          <div class="nav-header">
            <a class="nav-brand" href="./index.php"">
                <img src=" assets/img/logo.png" class="logo" alt="" />
            </a>
            <div class="nav-toggle"></div>
            <div class="mobile_nav">
              <ul>
                <li class="list-buttons">
                  <a href="JavaScript:Void(0);" data-bs-toggle="modal" data-bs-target="#login"><i
                      class="fas fa-sign-in-alt me-2"></i>Log In</a>
                </li>
              </ul>
            </div>
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


            <ul class="nav-menu nav-menu-social align-to-right">
              <li>
                <a href="JavaScript:Void(0);" data-bs-toggle="modal" data-bs-target="#login"><i
                    class="fas fa-sign-in-alt me-2"></i>Sign In</a>
              </li>
              <li class="list-buttons ms-2">
                <a href="signup.php"><i class="fa-solid fa-cloud-arrow-up me-2"></i>Upload
                  Resume</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
    <div class="clearfix"></div>
    <section class="bg-cover" style="background: #016551 url(assets/img/footer-bg-dark.png) no-repeat">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <h2 class="ipt-title text-light">Create An Account</h2>
            <span class="text-light opacity-75">Create an account or signin</span>
          </div>
        </div>
      </div>
    </section>

    <section class="gray-simple">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-6 col-lg-8 col-md-12">
            <div class="vesh-detail-bloc">
              <div class="vesh-detail-bloc-body pt-3">
                <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                  <li class="nav-item">
                    <button class="nav-link active" id="signin-tab" data-bs-toggle="pill" data-bs-target="#signin"
                      type="button" role="tab" aria-controls="signin" aria-selected="true">
                      Login Account
                    </button>
                  </li>
                  <li class="nav-item">
                    <button class="nav-link" id="register-tab" data-bs-toggle="pill" data-bs-target="#register"
                      type="button" role="tab" aria-controls="register" aria-selected="false" tabindex="-1">
                      Create Account
                    </button>
                  </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                  <div class="tab-pane fade show active" id="signin" role="tabpanel" aria-labelledby="signin-tab"
                    tabindex="0">
                    <div class="row gx-3 gy-4">
                      <div class="modal-login-form">
                        <form action="signup.php" method="post">
                          <div class="form-floating mb-4">
                            <input type="email" class="form-control" name="email" placeholder="name@example.com" />
                            <label>Email</label>
                          </div>

                          <div class="form-floating mb-4">
                            <input type="password" class="form-control" name="password" placeholder="Password" />
                            <label>Password</label>
                          </div>

                          <div class="form-group">
                            <button type="submit" name="login" class="btn btn-primary full-width font--bold btn-lg">
                              Log In
                            </button>
                            <?php echo $error; ?>
                          </div>

                          <div class="modal-flex-item mb-3">
                            <div class="modal-flex-first">
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="savepassword1" value="option1" />
                                <label class="form-check-label" for="savepassword1">Save Password</label>
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
                            <a href="JavaScript:Void(0);" class="btn connect-fb"><i
                                class="fa-brands fa-facebook"></i>Facebook</a>
                          </li>
                          <li>
                            <a href="JavaScript:Void(0);" class="btn connect-google"><i
                                class="fa-brands fa-google"></i>Google+</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>

                  <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab" tabindex="0">
                    <div class="row gx-3 gy-4">
                      <div class="modal-login-form">
                        <form action="signup.php" method="post" id="signupForm">
                          <div class="form-floating mb-4">
                            <input type="text" class="form-control" name="username" placeholder="Your Name" />
                            <label>Full Name</label>
                          </div>
                          <div class="form-floating mb-4">
                            <input type="email" class="form-control" id="email" name="email"
                              placeholder="name@example.com" />
                            <label>Email</label>
                            <span id="emailError" class="error" style="color:red"></span>
                          </div>
                          <div class="form-floating mb-4">
                            <input type="number" class="form-control" name="phone" placeholder="Phone Number" />
                            <label>Phone Number</label>
                          </div>
                          <div class="form-floating mb-4">
                            <input type="password" class="form-control" id="password" name="password"
                              placeholder="Password" />
                            <label>Password</label>
                            <span id="passwordError" class="error" style="color:red"></span>
                          </div>
                          <div class="form-floating mb-4">
                            <input type="password" class="form-control" id="confirmPassword" name="confirmPassword"
                              placeholder="Password" />
                            <label>Confirm Password</label>
                            <span id="confirmPasswordError" class="error" style="color:red"></span>
                          </div>
                          <div class="form-group">
                            <button type="submit" id="submit" name="signup" disabled
                              class="btn btn-primary full-width font--bold btn-lg">
                              Create An Account
                            </button>
                            <?php echo $error; ?>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="bg-cover" style="background: #016551 url(assets/img/footer-bg-dark.png) no-repeat">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-7 col-lg-10 col-md-12 col-sm-12">
            <div class="call-action-wrap">
              <div class="sec-heading center">
                <h2 class="mb-3 text-light">
                  Find The Perfect Job<br />on Job Stock That is Superb For
                  You
                </h2>
                <p class="text-light">
                  At vero eos et accusamus et iusto odio dignissimos ducimus
                  qui blanditiis praesentium voluptatum deleniti atque
                  corrupti quos dolores et quas molestias
                </p>
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
                    <input type="text" class="form-control" placeholder="Enter Your email" />
                    <button type="button" class="btn btn-subscribe">
                      Subscribe
                    </button>
                  </div>
                </form>
              </div>
            </div>

            <div class="col-xl-7 col-lg-7 col-md-7">
              <div class="job-info-count-group lg-ctr">
                <div class="single-jb-info-count">
                  <div class="jbs-y7">
                    <h5 class="ctr">12</h5>
                    <span class="theme-dark-cl">K</span>
                  </div>
                  <div class="jbs-y5">
                    <p>Job Posted</p>
                  </div>
                </div>
                <div class="single-jb-info-count">
                  <div class="jbs-y7">
                    <h5 class="ctr">10</h5>
                    <span class="theme-dark-cl">M</span>
                  </div>
                  <div class="jbs-y5">
                    <p>Happy Customers</p>
                  </div>
                </div>
                <div class="single-jb-info-count">
                  <div class="jbs-y7">
                    <h5 class="ctr">76</h5>
                    <span class="theme-dark-cl">K</span>
                  </div>
                  <div class="jbs-y5">
                    <p>Freelancers</p>
                  </div>
                </div>
                <div class="single-jb-info-count">
                  <div class="jbs-y7">
                    <h5 class="ctr">200</h5>
                    <span class="theme-dark-cl">+</span>
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
                <img src="assets/img/logo.png" class="img-footer" alt="" />
                <div class="footer-add">
                  <p>
                    Collins Street West, Victoria Near Bank Road<br />Australia
                    QHR12456.
                  </p>
                </div>
                <div class="foot-socials">
                  <ul>
                    <li>
                      <a href="JavaScript:Void(0);"><i class="fa-brands fa-facebook"></i></a>
                    </li>
                    <li>
                      <a href="JavaScript:Void(0);"><i class="fa-brands fa-linkedin"></i></a>
                    </li>
                    <li>
                      <a href="JavaScript:Void(0);"><i class="fa-brands fa-google-plus"></i></a>
                    </li>
                    <li>
                      <a href="JavaScript:Void(0);"><i class="fa-brands fa-twitter"></i></a>
                    </li>
                    <li>
                      <a href="JavaScript:Void(0);"><i class="fa-brands fa-dribbble"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-2 col-md-4">
              <div class="footer-widget">
                <h4 class="widget-title theme-cl">For Clients</h4>
                <ul class="footer-menu">
                  <li>
                    <a href="JavaScript:Void(0);">Talent Marketplace</a>
                  </li>
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
                  <li>
                    <a href="JavaScript:Void(0);">Free Business tools</a>
                  </li>
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
                  <li>
                    <a href="JavaScript:Void(0);">Investor Relations</a>
                  </li>
                  <li>
                    <a href="JavaScript:Void(0);">Trust, Safety & Security</a>
                  </li>
                </ul>
              </div>
            </div>

            <div class="col-lg-3 col-md-6">
              <div class="footer-widget">
                <h4 class="widget-title theme-cl">Download Apps</h4>
                <div class="app-wrap">
                  <p>
                    <a href="JavaScript:Void(0);"><img src="assets/img/light-play.png" class="img-fluid" alt="" /></a>
                  </p>
                  <p>
                    <a href="JavaScript:Void(0);"><img src="assets/img/light-ios.png" class="img-fluid" alt="" /></a>
                  </p>
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
              <form>
                <div class="form-floating mb-4">
                  <input type="email" class="form-control" placeholder="name@example.com" />
                  <label>User Name</label>
                </div>

                <div class="form-floating mb-4">
                  <input type="password" class="form-control" placeholder="Password" />
                  <label>Password</label>
                </div>

                <div class="form-group">
                  <button type="submit" class="btn btn-primary full-width font--bold btn-lg">
                    Log In
                  </button>
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
                        <input type="checkbox" class="btn-check" id="msix" />
                        <label class="btn btn-md btn-outline-primary font--bold rounded-5" for="msix">6.0</label>
                      </div>
                      <div class="sing-btn-groups">
                        <input type="checkbox" class="btn-check" id="msixfive" />
                        <label class="btn btn-md btn-outline-primary font--bold rounded-5" for="msixfive">6.5</label>
                      </div>
                      <div class="sing-btn-groups">
                        <input type="checkbox" class="btn-check" id="mseven" />
                        <label class="btn btn-md btn-outline-primary font--bold rounded-5" for="mseven">7.0</label>
                      </div>
                      <div class="sing-btn-groups">
                        <input type="checkbox" class="btn-check" id="msevenfive" />
                        <label class="btn btn-md btn-outline-primary font--bold rounded-5" for="msevenfive">7.5</label>
                      </div>
                      <div class="sing-btn-groups">
                        <input type="checkbox" class="btn-check" id="meight" />
                        <label class="btn btn-md btn-outline-primary font--bold rounded-5" for="meight">8.0</label>
                      </div>
                      <div class="sing-btn-groups">
                        <input type="checkbox" class="btn-check" id="meightfive" />
                        <label class="btn btn-md btn-outline-primary font--bold rounded-5" for="meightfive">8.5</label>
                      </div>
                      <div class="sing-btn-groups">
                        <input type="checkbox" class="btn-check" id="mnine" />
                        <label class="btn btn-md btn-outline-primary font--bold rounded-5" for="mnine">9.0</label>
                      </div>
                      <div class="sing-btn-groups">
                        <input type="checkbox" class="btn-check" id="mninefive" />
                        <label class="btn btn-md btn-outline-primary font--bold rounded-5" for="mninefive">9.5</label>
                      </div>
                      <div class="sing-btn-groups">
                        <input type="checkbox" class="btn-check" id="mten" />
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
                        <input type="checkbox" class="btn-check" id="vsix" />
                        <label class="btn btn-md btn-outline-primary font--bold rounded-5" for="vsix">6.0</label>
                      </div>
                      <div class="sing-btn-groups">
                        <input type="checkbox" class="btn-check" id="vsixfive" />
                        <label class="btn btn-md btn-outline-primary font--bold rounded-5" for="vsixfive">6.5</label>
                      </div>
                      <div class="sing-btn-groups">
                        <input type="checkbox" class="btn-check" id="vseven" />
                        <label class="btn btn-md btn-outline-primary font--bold rounded-5" for="vseven">7.0</label>
                      </div>
                      <div class="sing-btn-groups">
                        <input type="checkbox" class="btn-check" id="vsevenfive" />
                        <label class="btn btn-md btn-outline-primary font--bold rounded-5" for="vsevenfive">7.5</label>
                      </div>
                      <div class="sing-btn-groups">
                        <input type="checkbox" class="btn-check" id="veight" />
                        <label class="btn btn-md btn-outline-primary font--bold rounded-5" for="veight">8.0</label>
                      </div>
                      <div class="sing-btn-groups">
                        <input type="checkbox" class="btn-check" id="veightfive" />
                        <label class="btn btn-md btn-outline-primary font--bold rounded-5" for="veightfive">8.5</label>
                      </div>
                      <div class="sing-btn-groups">
                        <input type="checkbox" class="btn-check" id="vnine" />
                        <label class="btn btn-md btn-outline-primary font--bold rounded-5" for="vnine">9.0</label>
                      </div>
                      <div class="sing-btn-groups">
                        <input type="checkbox" class="btn-check" id="vninefive" />
                        <label class="btn btn-md btn-outline-primary font--bold rounded-5" for="vninefive">9.5</label>
                      </div>
                      <div class="sing-btn-groups">
                        <input type="checkbox" class="btn-check" id="vten" />
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
                        <input type="checkbox" class="btn-check" id="anywhere" checked />
                        <label class="btn btn-md btn-outline-primary font--bold rounded-5"
                          for="anywhere">Anywhere</label>
                      </div>
                      <div class="sing-btn-groups">
                        <input type="checkbox" class="btn-check" id="onsite" />
                        <label class="btn btn-md btn-outline-primary font--bold rounded-5" for="onsite">On Site</label>
                      </div>
                      <div class="sing-btn-groups">
                        <input type="checkbox" class="btn-check" id="remote" />
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
                        <input type="checkbox" class="btn-check" id="employee1" />
                        <label class="btn btn-md btn-outline-primary font--bold rounded-5"
                          for="employee1">Employee</label>
                      </div>
                      <div class="sing-btn-groups">
                        <input type="checkbox" class="btn-check" id="frelancers1" />
                        <label class="btn btn-md btn-outline-primary font--bold rounded-5"
                          for="frelancers1">Freelancer</label>
                      </div>
                      <div class="sing-btn-groups">
                        <input type="checkbox" class="btn-check" id="contractor1" />
                        <label class="btn btn-md btn-outline-primary font--bold rounded-5"
                          for="contractor1">Contractor</label>
                      </div>
                      <div class="sing-btn-groups">
                        <input type="checkbox" class="btn-check" id="internship1" />
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
                        <input type="checkbox" class="btn-check" id="fulltime" />
                        <label class="btn btn-md btn-outline-primary font--bold rounded-5" for="fulltime">Full
                          Time</label>
                      </div>
                      <div class="sing-btn-groups">
                        <input type="checkbox" class="btn-check" id="parttime" />
                        <label class="btn btn-md btn-outline-primary font--bold rounded-5" for="parttime">Part
                          Time</label>
                      </div>
                      <div class="sing-btn-groups">
                        <input type="checkbox" class="btn-check" id="freelance2" checked />
                        <label class="btn btn-md btn-outline-primary font--bold rounded-5"
                          for="freelance2">Freelance</label>
                      </div>
                      <div class="sing-btn-groups">
                        <input type="checkbox" class="btn-check" id="internship2" />
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
                      <input type="text" class="js-range-slider" name="my_range" value="" />
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
                          <input id="s-1" class="form-check-input" name="s-1" type="checkbox" />
                          <label for="s-1" class="form-check-label">IT Computers</label>
                        </div>
                      </li>
                      <li class="col-lg-6 col-md-6 p-0">
                        <div class="form-check form-check-inline">
                          <input id="s-2" class="form-check-input" name="s-2" type="checkbox" />
                          <label for="s-2" class="form-check-label">Web Design</label>
                        </div>
                      </li>
                      <li class="col-lg-6 col-md-6 p-0">
                        <div class="form-check form-check-inline">
                          <input id="s-3" class="form-check-input" name="s-3" type="checkbox" />
                          <label for="s-3" class="form-check-label">Web development</label>
                        </div>
                      </li>
                      <li class="col-lg-6 col-md-6 p-0">
                        <div class="form-check form-check-inline">
                          <input id="s-4" class="form-check-input" name="s-4" type="checkbox" />
                          <label for="s-4" class="form-check-label">SEO Services</label>
                        </div>
                      </li>
                      <li class="col-lg-6 col-md-6 p-0">
                        <div class="form-check form-check-inline">
                          <input id="s-5" class="form-check-input" name="s-5" type="checkbox" />
                          <label for="s-5" class="form-check-label">Financial Service</label>
                        </div>
                      </li>
                      <li class="col-lg-6 col-md-6 p-0">
                        <div class="form-check form-check-inline">
                          <input id="s-6" class="form-check-input" name="s-6" type="checkbox" />
                          <label for="s-6" class="form-check-label">Art, Design, Media</label>
                        </div>
                      </li>
                      <li class="col-lg-6 col-md-6 p-0">
                        <div class="form-check form-check-inline">
                          <input id="s-7" class="form-check-input" name="s-7" type="checkbox" />
                          <label for="s-7" class="form-check-label">Coach & Education</label>
                        </div>
                      </li>
                      <li class="col-lg-6 col-md-6 p-0">
                        <div class="form-check form-check-inline">
                          <input id="s-8" class="form-check-input" name="s-8" type="checkbox" />
                          <label for="s-8" class="form-check-label">Apps Developements</label>
                        </div>
                      </li>
                      <li class="col-lg-6 col-md-6 p-0">
                        <div class="form-check form-check-inline">
                          <input id="s-9" class="form-check-input" name="s-9" type="checkbox" />
                          <label for="s-9" class="form-check-label">IOS Development</label>
                        </div>
                      </li>
                      <li class="col-lg-6 col-md-6 p-0">
                        <div class="form-check form-check-inline">
                          <input id="s-10" class="form-check-input" name="s-10" type="checkbox" />
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
                      <input type="text" class="form-control" placeholder="Design, Java, Python, WordPress etc..." />
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
    const form = document.getElementById('signupForm');
    const passwordInput = document.getElementById('password');
    const confirmPasswordInput = document.getElementById('confirmPassword');
    const emailInput = document.getElementById('email');
    const submitButton = document.getElementById('submit');

    passwordInput.addEventListener("input", validatePassword);
    confirmPasswordInput.addEventListener('input', validateConfirmPassword);
    emailInput.addEventListener('input', validateEmail);

    function validatePassword() {
      const password = passwordInput.value;
      const confirmPassword = confirmPasswordInput.value;
      const passwordError = document.getElementById('passwordError');

      if (password === '') {
        passwordError.textContent = 'Password is required.';
      } else if (password.length < 6) {
        passwordError.textContent = 'Password must be at least 6 characters long.';
      } else {
        passwordError.textContent = '';
      }

      validateConfirmPassword();
      updateSubmitButtonState();
    }

    function validateConfirmPassword() {
      const password = passwordInput.value;
      const confirmPassword = confirmPasswordInput.value;
      const confirmPasswordError = document.getElementById('confirmPasswordError');

      if (confirmPassword === '') {
        confirmPasswordError.textContent = 'Please confirm your password.';
      } else if (password !== confirmPassword) {
        confirmPasswordError.textContent = 'Passwords do not match.';
      } else {
        confirmPasswordError.textContent = '';
      }

      updateSubmitButtonState();
    }

    function validateEmail() {
      console.log("hey from email")
      const email = emailInput.value;
      const emailError = document.getElementById('emailError');

      const atIndex = email.indexOf('@');
      const dotIndex = email.lastIndexOf('.');

      if (email === '') {
        emailError.textContent = 'Email is required.';
      } else if (atIndex === -1 || dotIndex === -1 || dotIndex < atIndex || dotIndex === email.length - 1) {
        emailError.textContent = 'Invalid email address.';
      } else {
        emailError.textContent = '';
      }

      updateSubmitButtonState();
    }

    function updateSubmitButtonState() {
      const errorMessages = document.getElementsByClassName('error');
      let isValid = true;

      for (let i = 0; i < errorMessages.length; i++) {
        if (errorMessages[i].textContent !== '') {
          isValid = false;
          break;
        }
      }
      submitButton.disabled = !isValid;
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