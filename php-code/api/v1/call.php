<?php
require_once '../../twilio-php-master/Services/Twilio.php';
header('Access-Control-Allow-Origin: *');

// variables
if ($_GET[body]) {
	$body = urlencode($_GET[body]);
}

// set your AccountSid and AuthToken from www.twilio.com/user/account
$AccountSid = "...";
$AuthToken = "...";
$fromNumber = "...";
$toNumber = "...";
 
$client = new Services_Twilio($AccountSid, $AuthToken);

try {
	$call = $client->account->calls->create($fromNumber, $toNumber, "http://twilio.alex-dickson.com/php-code/api/v1/twiml/callTwiml.php?say=$body", array());
} catch (Services_Twilio_RestException $e) {
	echo $e->getMessage();
}

// Display a confirmation message on the screen
echo "Sent call {$call->sid}";

?>
