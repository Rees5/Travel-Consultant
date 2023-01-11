<?php
include 'functions.php';
  if(isset($_POST['login'])){
    $output = login($_POST['email'],$_POST['password']);
    echo $output;
  }

 ?>
