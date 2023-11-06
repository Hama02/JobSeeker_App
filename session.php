<?php
session_start();
if (!isset($_SESSION['username']) || !isset($_COOKIE['sessionID'])) {
  echo '<ul class="nav-menu nav-menu-social align-to-right">
              <li>
                <a href="JavaScript:Void(0);" data-bs-toggle="modal" data-bs-target="#login"><i
                    class="fas fa-sign-in-alt me-2"></i>Sign In</a>
              </li>
              <li class="list-buttons ms-2">
                <a href="signup.php"><i class="fa-solid fa-cloud-arrow-up me-2"></i>Create an Account</a>
              </li>
            </ul>';
} else {
  $user = '<ul class="nav-menu nav-menu-social align-to-right dhsbrd">
              <li>
                <div class="btn-group account-drop">
                  <button type="button" class="btn btn-order-by-filt" data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <img src="assets/img/user-5.png" class="img-fluid circle" alt="" onclick="toggle()">
                  </button>
                  <div class="dropdown-menu pull-right animated flipInX user-info">
                    <div class="drp_menu_headr">
                      <h4>Hi, ' . $_SESSION['username'] . '</h4>
                      <div class="drp_menu_headr-right"><form action="index.php" method="post"><button type="submit" name="logout" class="btn btn-whites">Logout</button></form>
                      </div>
                    </div>
                    <ul>
                      <li><a href="profile.php"><i class="fa fa-user-tie"></i>My Profile</a></li>
                    </ul>
                  </div>
                </div>
              </li>
            </ul>';
  echo $user;
}
?>