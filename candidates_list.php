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
    <div class="page-title" style="background:#016551 url(assets/img/bg2.png) no-repeat;">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">

            <h2 class="ipt-title">Candidate List</h2>
            <div class="breadcrumbs light">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="JavaScript:Void(0);">Home</a></li>
                  <li class="breadcrumb-item"><a href="JavaScript:Void(0);">Candidate</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Candidate List</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <section>
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-12 col-sm-12">
            <div class="side-widget-blocks">

              <div class="sidebar_header d-flex align-items-center justify-content-between px-4 py-3 br-bottom">
                <h4 class="ft-medium fs-lg mb-0">Search Filter</h4>
                <div class="ssh-header">
                  <a href="javascript:void(0);" class="clear_all ft-medium text-muted">Clear All</a>
                  <a href="#search_open" data-bs-toggle="collapse" aria-expanded="false" role="button"
                    class="collapsed _filter-ico ml-2"><i class="fa-solid fa-filter"></i></a>
                </div>
              </div>

              <div class="sidebar-widgets collapse miz_show" id="search_open" data-bs-parent="#search_open">
                <div class="search-inner">
                  <div class="side-widget-inner">

                    <div class="form-group">
                      <label>Search By Keyword</label>
                      <div class="form-group-inner">
                        <input type="text" class="form-control" placeholder="Search by keywords...">
                      </div>
                    </div>

                    <div class="form-group">
                      <label>Job Category</label>
                      <div class="form-group-inner">
                        <select>
                          <option value="0">Choose category</option>
                          <option value="1">Health & Medical</option>
                          <option value="2">Bank & Advisory</option>
                          <option value="3">Design & UI</option>
                          <option value="4">Development</option>
                          <option value="5">Automotive Jobs</option>
                          <option value="6">Software & Consultancy</option>
                          <option value="7">Other Services</option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group">
                      <label>Radius in Miles</label>
                      <div class="form-group-inner">
                        <div class="rg-slider">
                          <input type="text" class="js-range-slider" name="my_range" value="">
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label>Experience Level</label>
                      <div class="form-group-inner">
                        <div class="inner_widget_link">
                          <ul class="no-ul-list filter-list">
                            <li>
                              <input id="d1" class="form-check-input" name="ADA" type="checkbox" checked="">
                              <label for="d1" class="form-check-label">Beginner (54)</label>
                            </li>
                            <li>
                              <input id="d2" class="form-check-input" name="Parking" type="checkbox">
                              <label for="d2" class="form-check-label">1+ Year (32)</label>
                            </li>
                            <li>
                              <input id="d3" class="form-check-input" name="Coffee" type="checkbox">
                              <label for="d3" class="form-check-label">2 Year (09)</label>
                            </li>
                            <li>
                              <input id="d4" class="form-check-input" name="Mother" type="checkbox">
                              <label for="d4" class="form-check-label">3+ Year (16)</label>
                            </li>
                            <li>
                              <input id="d5" class="form-check-input" name="Outdoor" type="checkbox">
                              <label for="d5" class="form-check-label">4+ Year (17)</label>
                            </li>
                            <li>
                              <input id="d6" class="form-check-input" name="Pet" type="checkbox">
                              <label for="d6" class="form-check-label">5+ Year (22)</label>
                            </li>
                            <li>
                              <input id="d7" class="form-check-input" name="Beauty" type="checkbox">
                              <label for="d7" class="form-check-label">10+ Year (32)</label>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label>Job Type</label>
                      <div class="form-group-inner">
                        <div class="inner_widget_link">
                          <ul class="no-ul-list filter-list">
                            <li>
                              <input id="e2" class="form-check-input" name="jtype" type="radio">
                              <label for="e2" class="form-check-label">Full time</label>
                            </li>
                            <li>
                              <input id="e3" class="form-check-input" name="jtype" type="radio">
                              <label for="e3" class="form-check-label">Part Time</label>
                            </li>
                            <li>
                              <input id="e4" class="form-check-input" name="jtype" type="radio" checked="">
                              <label for="e4" class="form-check-label">Contract Base</label>
                            </li>
                            <li>
                              <input id="e5" class="form-check-input" name="jtype" type="radio">
                              <label for="e5" class="form-check-label">Internship</label>
                            </li>
                            <li>
                              <input id="e6" class="form-check-input" name="jtype" type="radio">
                              <label for="e6" class="form-check-label">Regular</label>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label>Job Lavel</label>
                      <div class="form-group-inner">
                        <div class="inner_widget_link">
                          <ul class="no-ul-list filter-list">
                            <li>
                              <input id="f1" class="form-check-input" name="ADA" type="checkbox" checked="">
                              <label for="f1" class="form-check-label">Team Leader</label>
                            </li>
                            <li>
                              <input id="f2" class="form-check-input" name="Parking" type="checkbox">
                              <label for="f2" class="form-check-label">Manager</label>
                            </li>
                            <li>
                              <input id="f3" class="form-check-input" name="Coffee" type="checkbox">
                              <label for="f3" class="form-check-label">Junior</label>
                            </li>
                            <li>
                              <input id="f4" class="form-check-input" name="Coffee" type="checkbox">
                              <label for="f4" class="form-check-label">Senior</label>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label>Posted Date</label>
                      <div class="form-group-inner">
                        <div class="inner_widget_link">
                          <ul class="no-ul-list filter-list">
                            <li>
                              <input id="l1" class="form-check-input" name="hour" type="checkbox" checked="">
                              <label for="l1" class="form-check-label">Last Hour</label>
                            </li>
                            <li>
                              <input id="l2" class="form-check-input" name="days" type="checkbox">
                              <label for="l2" class="form-check-label">Last 24 hour</label>
                            </li>
                            <li>
                              <input id="l3" class="form-check-input" name="week" type="checkbox">
                              <label for="l3" class="form-check-label">Last Week</label>
                            </li>
                            <li>
                              <input id="l4" class="form-check-input" name="month" type="checkbox">
                              <label for="l4" class="form-check-label">Last 30 Days</label>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>

                    <div class="form-group mb-1">
                      <button type="button" class="btn btn-lg btn-primary fs-6 font--medium full-width">Search
                        job</button>
                    </div>

                  </div>

                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-8 col-md-12 col-sm-12">
            <div class="row justify-content-center mb-4">
              <div class="col-lg-12 col-md-12">
                <div class="item-shorting-box">
                  <div class="item-shorting clearfix">
                    <div class="left-column">
                      <h4 class="m-0">Showing 1 - 10 of 20 Results</h4>
                    </div>
                  </div>
                  <div class="item-shorting-box-right">
                    <div class="shorting-by me-2 small">
                      <select>
                        <option value="0">Short by (Default)</option>
                        <option value="1">Short by (Featured)</option>
                        <option value="2">Short by (Urgent)</option>
                        <option value="3">Short by (Post Date)</option>
                      </select>
                    </div>
                    <div class="shorting-by small">
                      <select>
                        <option value="0">10 Per Page</option>
                        <option value="1">20 Per Page</option>
                        <option value="2">50 Per Page</option>
                        <option value="3">10 Per Page</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row justify-content-center gx-3 gy-4">
              <?php
              require("db.php");
              $req = "SELECT * FROM candidate";
              $result = mysqli_query($connection, $req);
              while ($row = mysqli_fetch_assoc($result)) {
                echo '<div class="col-xl-4 col-lg-6 col-md-6 col-12">
                <div class="jbs-grid-usrs-block border">
                  <div class="jbs-grid-usrs-thumb">
                    <div class="jbs-grid-yuo jbs-verified">
                      <a href="candidate-detail.php?id=' . $row["id"] . '">
                        <figure><img src="' . $row["img_path"] . '" class="img-fluid circle" alt=""></figure>
                      </a>
                    </div>
                  </div>
                  <div class="jbs-grid-usrs-caption">
                    <div class="jbs-kioyer">
                      <div class="jbs-kioyer-groups">
                        <span class="fa-solid fa-star active"></span>
                        <span class="fa-solid fa-star active"></span>
                        <span class="fa-solid fa-star active"></span>
                        <span class="fa-solid fa-star active"></span>
                        <span class="fa-solid fa-star"></span>
                        <span class="aal-reveis">4.6</span>
                      </div>
                    </div>
                    <div class="jbs-tiosk">
                      <h4 class="jbs-tiosk-title"><a href="candidate-detail.php?id=' . $row["id"] . '">' . $row["name"] . '</a></h4>
                      <div class="jbs-tiosk-subtitle"><span>' . $row["job"] . '</span></div>
                    </div>
                  </div>
                  <div class="jbs-grid-usrs-info">
                    <div class="jbs-info-ico-style bold">
                      <div class="jbs-single-y1 style-2"><span><i class="fa-solid fa-sack-dollar"></i></span>$' . $row["salary"] / 100 . '/H</div>
                      <div class="jbs-single-y1 style-3"><span><i class="fa-solid fa-coins"></i></span>' . $row["years_of_experience"] . ' Years exp.
                      </div>
                    </div>
                  </div>
                  <div class="jbs-grid-usrs-contact">
                    <div class="jbs-btn-groups">
                      <a href="#" class="btn btn-md btn-outline-secondary px-4">Message</a>
                      <a href="candidate-detail.php?id=' . $row["id"] . '" class="btn btn-md btn-primary px-4">View Detail</a>
                    </div>
                  </div>
                </div>
              </div>';
              }
              ?>
            </div>
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12">
                <nav aria-label="Page navigation example">
                  <ul class="pagination">
                    <li class="page-item">
                      <a class="page-link" href="JavaScript:Void(0);" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                      </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="JavaScript:Void(0);">1</a></li>
                    <li class="page-item"><a class="page-link" href="JavaScript:Void(0);">2</a></li>
                    <li class="page-item"><a class="page-link" href="JavaScript:Void(0);">3</a></li>
                    <li class="page-item"><a class="page-link" href="JavaScript:Void(0);">4</a></li>
                    <li class="page-item"><a class="page-link" href="JavaScript:Void(0);">5</a></li>
                    <li class="page-item"><a class="page-link" href="JavaScript:Void(0);">6</a></li>
                    <li class="page-item">
                      <a class="page-link" href="JavaScript:Void(0);" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                      </a>
                    </li>
                  </ul>
                </nav>
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