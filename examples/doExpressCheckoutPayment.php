<?php

// Include API credentials
require_once('credentials.php');

// Include and instantiate the API
require_once('../PayPal.class.php');
$paypal = new PayPal('SANDBOX', $username, $password, $signature);

// Complete an Express Checkout transaction
$payment = $paypal->doExpressCheckoutPayment();
var_dump($payment);

?>