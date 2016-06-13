<?php
include 'views/header.php';

$action = isset($_GET['action']);

switch ($action) {
  case 'value':

    break;

  default:
    include 'views/index.php';
    break;
}

include 'views/footer.php';

 ?>
