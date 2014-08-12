<?php
require_once '../../../twilio-php-master/Services/Twilio.php';
header('Access-Control-Allow-Origin: *');

if ($_GET[say]) {
	$say = $_GET[say];
} else {
	$say = 'Sorry, there\'s nothing to say.';
}

$response = new Services_Twilio_Twiml();
$response->say($say);
print $response;

?>