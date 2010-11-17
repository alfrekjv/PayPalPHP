<?php

// Include API credentials
require_once('credentials.php');

// Include and instantiate the API
require_once('../PayPal.class.php');
$paypal = new PayPal('SANDBOX', $username, $password, $signature);

$profile = $paypal->getRecurringPaymentsProfileDetails('PROFILE_ID');
var_dump($profile);

?>