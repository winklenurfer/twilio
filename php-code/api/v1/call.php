<?php
require_once '../../twilio-php-master/Services/Twilio.php';
header('Access-Control-Allow-Origin: *');

// variables
$body = $_GET[body];

// set your AccountSid and AuthToken from www.twilio.com/user/account
$AccountSid = "AC24c73346a6248d4e5ccffb42333e0bbe";
$AuthToken = "ae4c677b679e85e6f59a2556ea8470bc";
 
$client = new Services_Twilio($AccountSid, $AuthToken);
 
$message = $client->account->messages->create(array(
    "From" => "415-969-9990",
    "To" => "415-595-2355",
    "Body" => "$body",
));
 
// Display a confirmation message on the screen
echo "Sent message {$message->sid}";

?>