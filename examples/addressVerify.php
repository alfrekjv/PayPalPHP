<?php

// Include API credentials
require_once('credentials.php');

// Include and instantiate the API
require_once('../PayPal.class.php');
$paypal = new PayPal('SANDBOX', $username, $password, $signature);

// Verify an address against a user's email address
// @todo Add response code/message documentation
$verify = $paypal->addressVerify('EMAIL_ADDRESS', 'STREET_FIRST_LINE', 'ZIP_CODE');
var_dump($verify);

?>