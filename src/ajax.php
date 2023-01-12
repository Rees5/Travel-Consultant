<?php
include 'functions.php';
if(!isset($_SESSION)) {session_start();}
  if(isset($_POST['login'])){
    $output = login($_POST['email'],$_POST['password']);
    echo $output;
  }

 ?>
