<?php

// Include API credentials
require_once('credentials.php');

// Include and instantiate the API
require_once('../PayPal.class.php');
$paypal = new PayPal('SANDBOX', $username, $password, $signature);

// Set the return/cancel URL
$url = 'http://'.$_SERVER['HTTP_HOST'].'/examples/doExpressCheckoutPayment.php';

// Add some items to the transaction
$paypal->addItem('Item 1 Name', 'Item 1 Desc', 20.00, 1);
$paypal->addItem('Item 2 Name', 'Item 2 Desc', 9.99, 2);
$paypal->setCurrencyCode('GBP');

// Initiate an Express Checkout transaction
$paypal->setExpressCheckout($url, $url);

?>