<?php
require("db.php");
$error = '';
if (isset($_POST['signup'])) {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $query = "SELECT * FROM user_account WHERE email = '$email'";
  $result = mysqli_query($connection, $query);
  if (mysqli_num_rows($result) > 0) {
    $error = '<span id="error" style="color:red;margin-top:10px;display:block">User Already Exists</span>';
  } else {
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $query = "INSERT INTO user_account (name, email, password, phone_number) VALUES ('$username', '$email', '$password','$phone')";
    mysqli_query($connection, $query);
    mysqli_close($connection);
    header("Location: signup.php");
  }
} else if (isset($_POST['login'])) {
  $login_error = "";
  $email = mysqli_real_escape_string($connection, $_POST['email']);
  $password = mysqli_real_escape_string($connection, $_POST['password']);

  $query = "SELECT * FROM user_account WHERE email='$email'";
  $result = mysqli_query($connection, $query);

  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
    $hash = $row['password'];
    if (password_verify($password, $hash)) {
      session_start();
      $name = $row['name'];
      $_SESSION['username'] = $name;
      $sessionID = session_id();
      setcookie('sessionID', $sessionID, time() + (86400 * 30), '/');
      header("Location: index.php");
    } else {
      $error = '<span id="error" style="color:red;margin-top:10px;display:block">Wrong Password</span>';
    }
  } else {
    $error = '<span id="error" style="color:red;margin-top:10px;display:block">Invalid email or password</span>';
  }
} else if (isset($_POST["logout"])) {
  $_SESSION = array();
  session_destroy();
  if (isset($_COOKIE['sessionID'])) {
    setcookie('sessionID', '', time() - 3600, '/');
  }

  header("Location: signup.php");
}
?>