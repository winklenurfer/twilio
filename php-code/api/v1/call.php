<?php
require_once '../../twilio-php-master/Services/Twilio.php';
header('Access-Control-Allow-Origin: *');

// variables
$body = $_GET[body];

// set your AccountSid and AuthToken from www.twilio.com/user/account
$AccountSid = "AC24c73346a6248d4e5ccffb42333e0bbe";
$AuthToken = "ae4c677b679e85e6f59a2556ea8470bc";
 
$client = new Services_Twilio($AccountSid, $AuthToken);
 
$call = $client->account->calls->create("+14158675309", "+14155551212", "http://demo.twilio.com/docs/voice.xml", array());
 
// Display a confirmation message on the screen
echo "Sent call {$call->sid}";

?>