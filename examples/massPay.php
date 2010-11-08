<?php 

// Include API credentials
require_once('credentials.php');

// Include and instantiate the API
require_once('../PayPal.class.php');
$paypal = new PayPal('SANDBOX', $username, $password, $signature);

// Add payment recipients
$paypal->addRecipient('EMAIL_ADDRESS', 10.00);
$paypal->addRecipient('EMAIL_ADDRESS', '10.00');
$paypal->addRecipient('EMAIL_ADDRESS', 20);
$paypal->setCurrencyCode('GBP');

// Initiate a Mass Payment
$massPay = $paypal->massPay();
var_dump($massPay);

?>