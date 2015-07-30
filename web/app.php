<?php
echo("Hello World!");
error_reporting(E_ALL);
define('FACEBOOK_SDK_V4_SRC_DIR', '/FacebookSDK/src/Facebook/');
require __DIR__ . '/FacebookSDK/autoload.php';

use Facebook\FacebookSession;
use Facebook\FacebookRequest;

$session = new FacebookSession('1018969218133716|rEQnvLNN_cNFT5ZrtftiXh9XgY8');
$request = new FacebookRequest(
  $session,
  'POST',
  '/149135891772134/subscriptions',
  array(
    'object' => 'page',
    'callback_url' => 'http://requestb.in/1fqhrea1',
    'fields' => 'conversations',
    'verify_token' => 'test',
  )
);
$response = $request->execute();

?>