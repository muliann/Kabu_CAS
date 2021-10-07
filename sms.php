<?php  
include ('sset.php');
if(time()== period){
// Update the path below to your autoload.php, 
// see https://getcomposer.org/doc/01-basic-usage.md 
require_once '/path/to/vendor/autoload.php'; 

use Twilio\Rest\Client; 


  $sid    = "ACebd3cd4a9dfdfce75a84bfc49490ded7"; 
  $token  = "[AuthToken]"; 
  $twilio = new Client($sid, $token); 
  
  $message = $twilio->messages 
                    ->create("+254745893963", // to 
                            array(  
                                "messagingServiceSid" => "MG7d3320d19b9e7a6d19e3c3d63326c153",      
                                "body" => "Hello, you have a class in the next 20minutes.Thank you." 
                            ) 
                    ); 
  
  print($message->sid);
}
}

?>