<?php 

// Include API credentials
require_once('credentials.php');

// Include and instantiate the API
require_once('../PayPal.class.php');
$paypal = new PayPal('SANDBOX', $username, $password, $signature);

// Obtain the available balance for a PayPal account
$balance = $paypal->getBalance();
var_dump($balance);

?>