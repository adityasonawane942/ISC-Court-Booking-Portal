<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<?php
/* @var $this SidebarrightController */

 $this->pageTitle="Login - ". Yii::app()->name;
?>

<style>
h4,p {
  margin-bottom: 30px;
}
#signin {
  background-color: black; 
  padding: 10px 20px; 
  border-radius: 10px; 
  text-decoration: none;
  color: white; 
  border: 2px solid black;
  transition: ease 0.3s;
  font-size: 15px;
}
#fh5co-blog-section {
    padding: 7em 0 0 0; 
}
.col-sm-12 {
  padding : 20vh 0;
}

@media screen and (max-width: 576px) {
.col-sm-12 {
  padding : 23vh 0;
}
}
</style>
<html>
<body>

<?php
session_start();
require_once 'sso_handler.php';

$sso_handler = new SSOHandler('AsjonWrbY3s8WMEkLlqkPcNTzDrEDkugjHiebdex', 'z7MYVykMd4uJUjd3ouCylpVkvtRKix2IjGLWCOcKHLxAm9oL1bIHOe5dHFyYvozDXu3Bq6j76V5YnsIlFvnTlu37Z1hyBuC3HbH2QeMwkBzq3CiYY7gdZZ1BrOW6efpM');

$permissions = 'basic profile ldap insti_address sex';
$state = 'user_login';
$response_type = 'code';
$required_scopes=array('basic', 'profile', 'ldap', 'insti_address', 'sex');
$required_fields = array('username', 'email', 'first_name', 'last_name', 'insti_address', 'sex');
$REDIRECT_URI = 'https://gymkhana.iitb.ac.in/~sports/index.php?r=site/userlogin';

if(isset($_SESSION["logdata"])) {
  echo "<script type='text/javascript'>window.top.location='https://gymkhana.iitb.ac.in/~sports/index.php?r=site/dashboard';</script>";
}

?>

<div class="fh5co-overlay" style=" height: 80px;"></div>
<div id="fh5co-blog-section" class="fh5co-section-gray">
  <div class="container" style="margin-top:60px;">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box" style="margin-bottom: 0;">
        <h3>LOGIN</h3>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid" style="background-color: rgba(0, 0, 0, 0.04);">
    <div class="col-sm-12" style="text-align: center;">

<?php 
$url = $sso_handler->gen_auth_url($response_type, $state, $permissions);
echo '<a id="signin" href="'.$url.'">LDAP Login</a>';

if ($sso_handler->validate_code($_GET) && $sso_handler->validate_state($_GET, true, array('user_login', 'admin_login'))) {
  $response = $sso_handler->default_execution($_GET, $REDIRECT_URI, $required_scopes, $required_fields);
  if (!isset($response['error']) && isset($response['access_information']) && isset($response['user_information'])) {
    if ($_GET['state'] === 'user_login') {
      $_SESSION["logdata"] = $response;
      echo "<script type='text/javascript'>window.top.location='https://gymkhana.iitb.ac.in/~sports/index.php?r=site/dashboard';</script>";
    }
    else {
      echo "<script type='text/javascript'>window.top.location='https://gymkhana.iitb.ac.in/~sports/index.php?r=site/userlogin';</script>";
    }
} 
else {
  echo "<script type='text/javascript'>window.top.location='https://gymkhana.iitb.ac.in/~sports/index.php?r=site/userlogin';</script>";
}
}

?>
  </div>
</div>

</body>
</html>