<?php 

define('FACEBOOK_SDK_V4_SRC_DIR', '/FacebookSDK/src/Facebook/');
require __DIR__ . '/FacebookSDK/autoload.php';

use Facebook\FacebookSession;
use Facebook\FacebookRequest;

$session = new FacebookSession('<APP_ACCESS_TOKEN>');
$request = new FacebookRequest(
  $session,
  'POST',
  '/<APP_ID>/subscriptions',
  array(
    'object' => 'page',
    'callback_url' => '<YOUR_CALLBACK_URL>',
    'fields' => 'conversations',
    'verify_token' => '<YOUR_VERIFY_TOKEN>',
  )
);
$response = $request->execute();

?>