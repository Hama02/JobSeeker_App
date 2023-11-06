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
            require("session.php")
              ?>
          </div>
        </nav>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="image-cover hero-header pb-0" style="background: #ecf3f1 url(assets/img/slider-6.jpg) no-repeat">
      <div class="bnnr-slack-elior-thumb d-sm-none d-lg-block d-none">
        <img src="assets/img/adam.png" class="img-fluid" alt="" />
      </div>
      <div class="position-absolute top-0 end-0 z-0">
        <img src="assets/img/shape-3-soft-light-gray.svg" alt="SVG" width="450" />
      </div>
      <div class="position-absolute top-0 start-0 me-10 z-0">
        <img src="assets/img/shape-1-soft-light-gray.svg" alt="SVG" width="350" />
      </div>
      <div class="container">
        <div class="row">
          <div class="col-xl-7 col-lg-8 col-md-12">
            <div class="simple-search-wrap mb-5">
              <div class="hero-search-2">
                <h2 class="text-xl theme-cl">Find</h2>
                <h1 class="mb-4">Great Job Opportunity<br />You Deserve</h1>
                <div class="full-search-2 mt-5">
                  <div class="hero-search-content">
                    <div class="row classic-search-box m-0 gx-2">
                      <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12">
                        <div class="form-group briod">
                          <div class="input-with-icon">
                            <input type="text" class="form-control" placeholder="Skills, Designations, Keyword" />
                            <i class="fa-solid fa-magnifying-glass"></i>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                        <div class="form-group">
                          <div class="input-with-icon">
                            <select class="form-control">
                              <option value="1">Job Category</option>
                              <option value="2">Accounting & Finance</option>
                              <option value="3">Automotive Jobs</option>
                              <option value="4">Business Services</option>
                              <option value="5">Education Training</option>
                              <option value="6">Software Application</option>
                              <option value="7">Restaurant & Food</option>
                              <option value="8">Healthcare</option>
                              <option value="9">Transportation</option>
                              <option value="10">Telecommunications</option>
                            </select>
                            <i class="fa-solid fa-briefcase"></i>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12">
                        <div class="fliox-search-wiop">
                          <div class="form-group">
                            <button type="submit" onclick="location.href='jobs_list.php'"
                              class="btn btn-primary full-width">
                              Find Job
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="estrio-plocks-wraps">
              <div class="estrio-plocks-single">
                <div class="estrio-single-icon">
                  <img src="assets/img/trustpilot.png" class="img-fluid" alt="" />
                </div>
                <div class="estrio-single-caption">
                  <div class="estrio-caption-title">
                    <p>Trustpilot<span>4.9</span></p>
                  </div>
                  <div class="estrio-caption-stars">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                  </div>
                </div>
              </div>
              <div class="estrio-plocks-single">
                <div class="estrio-single-icon">
                  <img src="assets/img/google-plus.png" class="img-fluid" alt="" />
                </div>
                <div class="estrio-single-caption">
                  <div class="estrio-caption-title">
                    <p>Google Plus<span>4.8</span></p>
                  </div>
                  <div class="estrio-caption-stars">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-5 col-lg-4 col-md-12">
            <div class="bnnr-slack-thumb d-lg-none d-sm-block mt-sm-5">
              <img src="assets/img/adam.png" class="img-fluid" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="theme-bg-dark min">
      <div class="container">
        <div class="row justify-content-center mb-2">
          <div class="col-lg-7 col-md-10 text-center">
            <div class="sec-heading center mb-4">
              <h5 class="text-light opacity-75 font--medium">
                The fastedt-growing companies use Job Stock
              </h5>
            </div>
          </div>
        </div>

        <div class="row align-items-center justify-content-center gx-3 gy-3">
          <div class="col">
            <figure class="single-brand thumb-figure">
              <img src="assets/img/layar-white.svg" class="img-fluid" alt="" />
            </figure>
          </div>

          <div class="col">
            <figure class="single-brand thumb-figure">
              <img src="assets/img/mailchimp-white.svg" class="img-fluid" alt="" />
            </figure>
          </div>

          <div class="col">
            <figure class="single-brand thumb-figure">
              <img src="assets/img/forbes-white.svg" class="img-fluid" alt="" />
            </figure>
          </div>

          <div class="col">
            <figure class="single-brand thumb-figure">
              <img src="assets/img/fitbit-white.svg" class="img-fluid" alt="" />
            </figure>
          </div>

          <div class="col">
            <figure class="single-brand thumb-figure">
              <img src="assets/img/vidados-white.svg" class="img-fluid" alt="" />
            </figure>
          </div>
        </div>
      </div>
    </section>
    <div class="clearfix"></div>
    <section>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-6 col-lg-7 col-md-10 text-center">
            <div class="sec-heading center">
              <h2>Hire Talents & Experts</h2>
              <p>
                At vero eos et accusamus et iusto odio dignissimos ducimus qui
                blanditiis praesentium voluptatum deleniti atque corrupti quos
                dolores
              </p>
            </div>
          </div>
        </div>

        <div class="row justify-content-center gx-4 gy-4">
          <?php
          $req = "SELECT * FROM candidate limit 4";
          $result = mysqli_query($connection, $req);
          while ($row = mysqli_fetch_assoc($result)) {
            echo '<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="jbs-grid-usrs-block border">
                <div class="jbs-grid-usrs-thumb">
                  <div class="jbs-grid-yuo">
                    <a href="candidate-detail.php?id=' . $row["id"] . '">
                      <figure>
                        <img src="' . $row["img_path"] . '" class="img-fluid circle" alt="" />
                      </figure>
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
                    <h4 class="jbs-tiosk-title">
                      <a href="candidate-detail.php?id=' . $row["id"] . '">' . $row["name"] . '</a>
                    </h4>
                    <div class="jbs-tiosk-subtitle">
                      <span>' . $row["job"] . '</span>
                    </div>
                  </div>
                </div>
                <div class="jbs-grid-usrs-info">
                  <div class="jbs-info-ico-style bold">
                    <div class="jbs-single-y1 style-2">
                      <span><i class="fa-solid fa-sack-dollar"></i></span>$' . $row["salary"] / 100 . '/H
                    </div>
                    <div class="jbs-single-y1 style-3">
                      <span><i class="fa-solid fa-coins"></i></span>' . $row["years_of_experience"] . ' Years exp.
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
      </div>
    </section>
    <section class="gray-simple">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-6 col-lg-7 col-md-10 text-center">
            <div class="sec-heading center">
              <h2>Explore Job</h2>
              <p>
                At vero eos et accusamus et iusto odio dignissimos ducimus qui
                blanditiis praesentium voluptatum deleniti atque corrupti quos
                dolores
              </p>
            </div>
          </div>
        </div>

        <div class="row g-xl-3 g-lg-3 g-4">
          <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="jbs-location-infortment">
              <div class="jbs-location-infortment-thumb p-3">
                <a href="jobs_list.php" class="jobstock-location-figure">
                  <img src="assets/img/c-1.png" class="img-fluid rounded" alt="" />
                </a>
              </div>
              <div class="jbs-location-infortment-content">
                <h4>California, USA</h4>
                <span class="resy-98 font--medium">307+ Jobs</span>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="jbs-location-infortment">
              <div class="jbs-location-infortment-thumb p-3">
                <a href="jobs_list.php" class="jobstock-location-figure">
                  <img src="assets/img/c-2.png" class="img-fluid rounded" alt="" />
                </a>
              </div>
              <div class="jbs-location-infortment-content">
                <h4>Denver City, USA</h4>
                <span class="resy-98 font--medium">102+ Jobs</span>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="jbs-location-infortment">
              <div class="jbs-location-infortment-thumb p-3">
                <a href="jobs_list.php" class="jobstock-location-figure">
                  <img src="assets/img/c-3.png" class="img-fluid rounded" alt="" />
                </a>
              </div>
              <div class="jbs-location-infortment-content">
                <h4>Washington, USA</h4>
                <span class="resy-98 font--medium">200+ Jobs</span>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="jbs-location-infortment">
              <div class="jbs-location-infortment-thumb p-3">
                <a href="jobs_list.php" class="jobstock-location-figure">
                  <img src="assets/img/c-4.png" class="img-fluid rounded" alt="" />
                </a>
              </div>
              <div class="jbs-location-infortment-content">
                <h4>Liverpool, UK</h4>
                <span class="resy-98 font--medium">150+ Jobs</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-6 col-lg-7 col-md-10 text-center">
            <div class="sec-heading center">
              <h2>Featured Jobs</h2>
              <p>
                At vero eos et accusamus et iusto odio dignissimos ducimus qui
                blanditiis praesentium voluptatum deleniti atque corrupti quos
                dolores
              </p>
            </div>
          </div>
        </div>

        <div class="row justify-content-center gx-xl-3 gx-3 gy-4">
          <?php
          require("db.php");
          $req = "SELECT * FROM job LIMIT 4";
          $result = mysqli_query($connection, $req);
          while ($row = mysqli_fetch_assoc($result)) {
            $lower = strtolower($row["job_type"]);
            $class = str_replace(' ', '-', $lower);
            echo '<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
              <div class="job-instructor-layout border">
                <div class="left-tags-capt">
                  <span class="featured-text">Featured</span>
                </div>
                <div class="brows-job-type">
                  <span class=' . $class . '>' . $row["job_type"] . '</span>
                </div>
                <div class="job-instructor-thumb">
                  <a href="job-detail.php?id=' . $row["job_id"] . '"><img src=' . $row["img_path"] . ' class="img-fluid" alt="" /></a>
                </div>
                <div class="job-instructor-content">
                  <div class="jbs-job-employer-wrap">
                    <span>' . $row["company"] . '<span></span></span>
                  </div>
                  <h4 class="instructor-title">
                    <a href="job-detail.php?id=' . $row["job_id"] . '">' . $row["job_title"] . '</a>
                  </h4>
                  <div class="text-center text-sm-muted">
                    <span><i class="fa-solid fa-location-dot me-2"></i>' . $row["location"] . '</span>
                  </div>
                </div>
                <div class="jbs-grid-job-apply-btns px-3 py-3">
                  <div class="jbs-btn-groups">
                    <div class="jbs-sng-blux">
                      <div class="jbs-grid-package-title smalls">
                        <h5>$' . (int) $row["salary"] . 'K - ' . $row["salary"] + 20 . 'K<span>\Year</span></h5>
                      </div>
                    </div>
                    <div class="jbs-sng-blux">
                      <a href="JavaScript:Void(0);" class="btn btn-md btn-light-primary px-4">Quick Apply</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>';
          }
          ?>
        </div>
      </div>
    </section>

    <section class="p-0">
      <div class="container-fluid px-0">
        <div class="row gx-0">
          <div class="col-xl-6 col-lg-6 col-md-12 bg-dark">
            <div class="hired-box-slack">
              <div class="hired-box-caption">
                <h2 class="text-light">
                  Hire talents & experts for your web development
                </h2>
                <p class="text-light opacity-75">
                  Sed ut perspiciatis unde omnis iste natus error sit
                  voluptatem accusantium doloremque laudantium, totam rem
                  aperiam, eaque ipsa quae ab illo
                </p>
              </div>
              <div class="hired-box-btns">
                <a href="#" class="btn btn-lg btn-whites font--bold px-5">Hire Us</a>
              </div>
            </div>
          </div>

          <div class="col-xl-6 col-lg-6 col-md-12 theme-bg-dark">
            <div class="hired-box-slack">
              <div class="hired-box-caption">
                <h2 class="text-light">
                  We Are Expert In Web design and development
                </h2>
                <p class="text-light opacity-75">
                  Sed ut perspiciatis unde omnis iste natus error sit
                  voluptatem accusantium doloremque laudantium, totam rem
                  aperiam, eaque ipsa quae ab illo
                </p>
              </div>
              <div class="hired-box-btns">
                <a href="#" class="btn btn-lg btn-whites font--bold px-5">Join Us</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-6 col-lg-7 col-md-10 text-center">
            <div class="sec-heading center">
              <h2>Trending News By Job Stock</h2>
              <p>
                At vero eos et accusamus et iusto odio dignissimos ducimus qui
                blanditiis praesentium voluptatum deleniti atque corrupti quos
                dolores
              </p>
            </div>
          </div>
        </div>

        <div class="row g-xl-3 g-lg-3 g-md-3 g-3">
          <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
            <div class="jobstock-grid-blog">
              <div class="jobstock-grid-blog-thumb">
                <img src="assets/img/blog-1.jpg" class="img-fluid" alt="" />
              </div>
              <div class="jobstock-grid-blog-body">
                <div class="jobstock-grid-body-header">
                  <div class="jobstock-grid-posted">
                    <span>10 Jul 2022</span>
                  </div>
                  <div class="jobstock-grid-title">
                    <h4>
                      <a href="#">How To Work with jobstock Agency</a>
                    </h4>
                  </div>
                </div>
                <div class="jobstock-grid-body-middle">
                  <p>
                    Duis aute irure dolor in reprehenderit in voluptate velit
                    esse cillum dolore eu fugiat nulla pariatur. Excepteur
                    sint occaecat cupidatat
                  </p>
                </div>
                <div class="jobstock-grid-body-footer">
                  <a href="#" class="btn btn-blog-link">Continue Reading</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
            <div class="jobstock-grid-blog">
              <div class="jobstock-grid-blog-thumb">
                <img src="assets/img/blog-2.jpg" class="img-fluid" alt="" />
              </div>
              <div class="jobstock-grid-blog-body">
                <div class="jobstock-grid-body-header">
                  <div class="jobstock-grid-posted">
                    <span>17 Jan 2023</span>
                  </div>
                  <div class="jobstock-grid-title">
                    <h4>
                      <a href="#">How To Work with jobstock Agency</a>
                    </h4>
                  </div>
                </div>
                <div class="jobstock-grid-body-middle">
                  <p>
                    Duis aute irure dolor in reprehenderit in voluptate velit
                    esse cillum dolore eu fugiat nulla pariatur. Excepteur
                    sint occaecat cupidatat
                  </p>
                </div>
                <div class="jobstock-grid-body-footer">
                  <a href="#" class="btn btn-blog-link">Continue Reading</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
            <div class="jobstock-grid-blog">
              <div class="jobstock-grid-blog-thumb">
                <img src="assets/img/blog-3.jpg" class="img-fluid" alt="" />
              </div>
              <div class="jobstock-grid-blog-body">
                <div class="jobstock-grid-body-header">
                  <div class="jobstock-grid-posted">
                    <span>26 Feb 2023</span>
                  </div>
                  <div class="jobstock-grid-title">
                    <h4>
                      <a href="#">How To Work with jobstock Agency</a>
                    </h4>
                  </div>
                </div>
                <div class="jobstock-grid-body-middle">
                  <p>
                    Duis aute irure dolor in reprehenderit in voluptate velit
                    esse cillum dolore eu fugiat nulla pariatur. Excepteur
                    sint occaecat cupidatat
                  </p>
                </div>
                <div class="jobstock-grid-body-footer">
                  <a href="#" class="btn btn-blog-link">Continue Reading</a>
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
                <a href="JavaScript:Void(0);" class="btn btn-lg btn-dark font--medium px-xl-5 px-lg-4 me-2">Upload a
                  Resume</a>
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