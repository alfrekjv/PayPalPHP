<?php

// Include API credentials
require_once('credentials.php');

// Include and instantiate the API
require_once('../PayPal.class.php');
$paypal = new PayPal('SANDBOX', $username, $password, $signature);

// Set default timezone to prevent date() warning
date_default_timezone_set('Europe/London');

// Set currency code, profile, payer and card details
$paypal->setCurrencyCode('GBP');
$paypal->setProfileDetails('DATE', 'DESCRIPTION', 'PERIOD', 'NO_OF_PAYMENTS', 'BILLING_AMOUNT');
$paypal->setPayerDetails('EMAIL_ADDRESS', 'STREET', 'CITY', 'STATE', 'CODE', 'ZIP');
$paypal->setCardDetails('CARD_TYPE', 'CARD_NUMBER', 'EXPIRY_MMYYYY', 'CVV2');

// Create a recurring payments profile using the details set above
$profile = $paypal->createRecurringPaymentsProfile();
var_dump($profile);

?>