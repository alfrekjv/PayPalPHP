<?php

// Include API credentials
require_once('credentials.php');

// Include and instantiate the API
require_once('../PayPal.class.php');
$paypal = new PayPal('SANDBOX', $username, $password, $signature);

// Reverse a transaction
$reverse = $paypal->reverseTransaction('TRANSACTION_ID');
var_dump($reverse);

?>