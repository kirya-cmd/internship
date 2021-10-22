<?php 


header("content-type:text/plane");

$phone_number = $_POST['phoneNumber'];

$textFromUser =  $_POST['text'];

$sessionID = $_POST['sessionid'];

$serviceCode = $_POST['serviceCode'];

$inputArray = explode("*", $textFromUser);

$level = 0;

$level = count($inputArray);

if ($textFromUser == ""){
echo "CON Welcome to MUK LINK UPS\n";
 

//This is the first request> Note how we start the response with CON

echo "\n1. Register";
echo "\n2. My Account";

} elseif($textFromUser == "1"){
        echo "\nEnter Username";

}elseif ($inputArray[1] == "1" && $level ==2) {
        echo "\nEnter Age";
} elseif ($inputArray[1] == "1" && $level ==3){
        echo "\nEnter Phone Number";

} elseif ($inputArray[1] == "1" && $level ==4){
        echo "\n Enter Hostel/Residence";
        
}       elseif ($inputArray[1] == "1" && $level ==5){
        echo "\n What is your Gender";
         

}else{
         //connect to DB and register a user. 
        echo "END You have been registered";
        $sms = new Sms();
        $message = "You have been registered";
        $sms->sendSms($message,$phoneNumber);
        
                }


if($textFromUser  == "1"){
        $user_name = $inputArray[2];
    $saveUser = $sqlicon->query("INSERT INTO users(phone_number, user_name, residence, gender, age)VALUES('$phone_number','$user_name', '$residence', 'gender', 'age')");

     if($saveUser){
        $message = "Hello".$user_name."Thank you for registering with Muk link up";
        $apikey = "28315ae877327754b8921a7831fe9b730217796ea57861a36be0c7eb4c2fd2a0";
        $gateway = new AfricasTalkingGateway("sandbox", $apikey, "sandbox");
        $gateway->sendMessage($phone_number, $message);
        echo "END Thank you for registering";
     }else{
        echo "END Failed to register".$sqlicon->error;
     }
 }



?>




















 