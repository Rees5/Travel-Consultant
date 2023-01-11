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
  curl_setopt($ch, CURLOPT_URL, $url.'auth/password/change');

  curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json',"Authorization: Bearer $token"));
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
function createCaseNote($token,$data){
  global $url,$ch;
  $bearerToken = "Authorization: Bearer $token";
  curl_setopt($ch, CURLOPT_URL, $url.'casenotes');

  curl_setopt( $ch, CURLOPT_POSTFIELDS, $data );
  curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json',"Authorization: Bearer $token"
));
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

function fetchCaseNotes($token){
  global $url,$ch;
  $bearerToken = "Authorization: Bearer $token";
  curl_setopt($ch, CURLOPT_URL, $url.'casenotes');
  curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json',"Authorization: Bearer $token"));
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

function fetchCaseNote($token,$caseID){
  global $url,$ch;
  $bearerToken = "Authorization: Bearer $token";
  curl_setopt($ch, CURLOPT_URL, $url.'casenotes/'.$caseID);
  curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json',"Authorization: Bearer $token"));
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



$token='eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6IjYwMmJiZjdlZjIxOGVhMTRiMzhmZjRiMyIsImZpcnN0TmFtZSI6IkNvbnN1bGFyIiwibGFzdE5hbWUiOiJHZW5lcmFsIiwiZW1haWwiOiJhbm9uYWJiZXlAZ21haWwuY29tIiwicm9sZSI6Im1hbmFnZXIiLCJpYXQiOjE2MTQyMzQ4OTEsImV4cCI6MTYxNTA5ODg5MX0.QTsZef4uI186tc4DgfF9WmHwEkdeNrx74MHA6MBmtEc';
echo fetchCaseNote($token,'603e297c07fb3a3afdf5b831');
//echo changePassword($token,'$oldPassword','$password','$confirmPassword')
?>
