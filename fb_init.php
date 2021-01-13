<?php

session_start();

require 'vendor/autoload.php';

$fb = new Facebook\Facebook([
  'app_id' => '952286418508628',
  'app_secret' => '98e00abf7e9a762b86c898f07c78303c',
   'default_graph_version' => 'v2.10'
]);

$helper = $fb->getRedirectLoginHelper();
$login_url = $helper->getLoginUrl("http://localhost/QuizApp/userlogin.php");

try{
  $accessToken = $helper->getAccessToken();
  if(isset($accessToken))
  {
    $_SESSION['access_token'] = (string)$accessToken;
    header("Location:home.php");
  }
} catch (Exception $exc)
{
  echo $exc->getTraceAsString();
}

?>