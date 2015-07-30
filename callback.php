<?php

echo $_REQUEST['hub_challenge'];

$inputJSON = file_get_contents('php://input');
$input = json_decode($inputJSON, true);
error_log(print_r($input, true));

?>