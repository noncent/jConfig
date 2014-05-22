<?php

// set flag to prevent un authorized access
define('INSITE', true);

// Allow only for Ajax Request Method
if (empty($_SERVER ['HTTP_X_REQUESTED_WITH']) || strtolower($_SERVER ['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
    die('Woooh!! You are very smart. Anha!! :)');
}
// include class config file
require_once 'class/config.php';

// make an instance of class object
$config = new Config();

// get all public config item as an array
$configData = $config->getConfigData();

// extract the POST array
extract($_POST);

// global php array var
$response = array();

// build condition for all and requested config item
if ($jConfigKey == 'false') {
    // set response data
    $response['data'] = $configData;
    // set status message
    $response['status'] = 'Response 200 OK';
    // show output
    echo json_encode($response);
} else {
    // set response data
    $response['data'] = 'Sorry, I am confused :(';
    // set status message
    $response['status'] = 'No Response 204 FAIL';
    // show output
    echo json_encode($response);
}
