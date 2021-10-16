<?php
require('AfricasTalkingGateway.php');
 
$username   = "sandbox";            
$apikey     = "8ca31226367ab4abde28fc34a62a2ef852d0e730b66c02348c98ed7499ca087c";

$recipients = "+256787665522";

$gateway    = new AfricasTalkingGateway($username, $apikey,"sandbox");

$gateway->sendMessage($recipients, "It has worked now");  