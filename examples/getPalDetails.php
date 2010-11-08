<?php 

// Include API credentials
require_once('credentials.php');

// Include and instantiate the API
require_once('../PayPal.class.php');
$paypal = new PayPal('SANDBOX', $username, $password, $signature);

// Obtain information about a PayPal account
$details = $paypal->getPalDetails();
var_dump($details);

?>