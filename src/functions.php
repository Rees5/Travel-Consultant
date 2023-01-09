<?php
$url = "https://api-stg.jonathankingcrm.com/api/";
$ch = curl_init();


//Authentication
function login($email,$password){
  global $url,$ch;
  curl_setopt($ch, CURLOPT_URL, $url.'auth/login/');
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS,"email=$email&password=$password");
  curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));

  // receive server response ...
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $response = curl_exec($ch);

  $err = curl_error($ch);
  curl_close($ch);
  if ($err) {
    return "cURL Error #:" . $err;
  } else {
    return $response;
  }
}


function recoverPassword($email){
  global $url,$ch;
  curl_setopt($ch, CURLOPT_URL, $url.'auth/password/recover?email='.$email);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));

  // receive server response ...
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $response = curl_exec($ch);

  $err = curl_error($ch);
  curl_close($ch);
  if ($err) {
    return "cURL Error #:" . $err;
  } else {
    return $response;
  }
}

function resetPassword($token,$password,$confirmPassword){
  global $url,$ch;
  curl_setopt($ch, CURLOPT_URL, $url.'auth/password/reset/'.$token);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS,"password=$password&confirmPassword=$confirmPassword");
  // receive server response ...
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $response = curl_exec($ch);

  $err = curl_error($ch);
  curl_close($ch);
  if ($err) {
    return "cURL Error #:" . $err;
  } else {
    return $response;
  }
}

function changePassword($token,$oldPassword,$password,$confirmPassword){
  global $url,$ch;
  $bearerToken = "Authorization: Bearer $token";
  curl_setopt($ch, CURLOPT_URL, $url.'auth/password/change');

  curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BEARER);
  curl_setopt($ch,CURLOPT_XOAUTH2_BEARER,$bearerToken);

  curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS,"oldPassword=$oldPassword&password=$password&confirmPassword=$confirmPassword");
  // receive server response ...
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $response = curl_exec($ch);

  $err = curl_error($ch);
  curl_close($ch);
  if ($err) {
    return "cURL Error #:" . $err;
  } else {
    return $response;
  }
}

function verifyEmail($token,$email){
  global $url,$ch;
  curl_setopt($ch, CURLOPT_URL, $url.'auth/verify-email/'.$token);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));
  // receive server response ...
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $response = curl_exec($ch);

  $err = curl_error($ch);
  curl_close($ch);
  if ($err) {
    return "cURL Error #:" . $err;
  } else {
    return $response;
  }
}

function resendToken($email){
  global $url,$ch;
  curl_setopt($ch, CURLOPT_URL, $url.'auth/verify-token/resend?email='.$email);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));
  // receive server response ...
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $response = curl_exec($ch);

  $err = curl_error($ch);
  curl_close($ch);
  if ($err) {
    return "cURL Error #:" . $err;
  } else {
    return $response;
  }
}

//Case Notes

$token='eccadcc30d9eaebafb2139d4871b088747413b87';
echo resendToken('reesalumasa@gmail.com');
?>
