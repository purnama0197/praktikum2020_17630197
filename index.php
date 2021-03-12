<?php
error_reporting(0);

include 'header.php';

switch ($_GET['page']) {

  default:
    include "home.php";
    break;

  case "home";
    include 'home.php';
    break;

  case "profil";
    include 'profil.php';
    break;

  case "login";
    include "login.php";
    break;
}
include 'footer.php';
?>