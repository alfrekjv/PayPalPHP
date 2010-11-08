## PayPalPHP

PayPalPHP is a PHP5 implementation of the [PayPal NVP API][]

### Requirements

* PHP >= 5.2.14 (Not tested under earlier releases)
* [PHP cURL]

### Change Log

#### 0.2
* Prevent URL encoding of ampersands in query string (causes 'Unspecified Method' error).
* Added reverseTransaction, massPay, getPalDetails and addressVerify methods.
* Added examples for methods mentioned above.
* Added CA root certificate bundle. Prevents PHP cURL error 60.

### Release Notes

- At present, this API is incomplete and subject to change.
- You will need to set your live/sandbox API user credentials in /examples/credentials.php in order for the examples provided to function.

### Basic Usage

#### Instantiate the API:

	$paypal = new PayPal('SANDBOX', $username, $password, $signature);

#### Obtain the available balance for a PayPal account:

	$balance = $paypal->getBalance();
	var_dump($balance);

#### setExpressCheckout Implementation:

	// Add some items to the transaction
	$paypal->addItem('Item 1 Name', 'Item 1 Desc', 20, 1);
	$paypal->addItem('Item 2 Name', 'Item 2 Desc', 9.99, 2);

	// Initiate an Express Checkout transaction
	$paypal->setExpressCheckout('USD', 'YOUR_RETURN_URL', 'YOUR_CANCEL_URL');
	
	// Complete an Express Checkout transaction
	$payment = $paypal->doExpressCheckoutPayment();
	var_dump($payment);

[PHP cURL]: http://php.net/manual/en/book.curl.php
[PayPal NVP API]: https://cms.paypal.com/uk/cgi-bin/?&cmd=_render-content&content_ID=developer/e_howto_api_nvp_NVPAPIOverview