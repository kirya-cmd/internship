<?php 
header("content-type:text/plane");

$phone_number = $_POST['phoneNumber'];

$textFromUser =  $_POST['text'];

$sessionID = $_POST['sessionid'];

$serviceCode = $_POST['serviceCode'];

$inputArray = explode("*", $textFromUser);

$level = 0;

$level = count($inputArray);

echo "\nCON welcome to MUK LINK UPS";
 

if ($textFromUser == ""){
//This is the first request> Note how we start the response with CON

echo "\n1. Register";
echo "\n2. My Account";

} elseif($textFromUser == "1"){
	echo "\n Enter Username";

}elseif ($inputArray[0] == "1" && $level ==2) {
	echo "\n Enter Age";
} elseif ($inputArray[0] == "1" && $level ==3){
	echo "\n Enter Phone Number";

} elseif ($inputArray[0] == "1" && $level ==4){
	echo "\n Enter Hostel/Residence";
	
}	elseif ($inputArray[0] == "1" && $level ==5){
	echo "\n Select Gender";
	echo "\n1. Male";
    echo "\n2. Female";
    

}if($textFromUser  == "1"){
	$user_name = $inputArray[2];
    $saveUser = $sqlicon->query("INSERT INTO users(phone_number, user_name, residence, gender, age)VALUES('$phone_number','$user_name', '$residence', 'gender', 'age')");

     if($saveUser){
     	$message = "Hello".$user_name."Thank you for registering with Muk link up";
     	$apikey = "";
     	$gateway = new AfricasTalkingGateway("sandbox", $apikey, "sandbox");
     	$gateway->sendMessage($phone_number, $message_);
     	echo "END Thank you for registering";
     }else{
     	echo "END Failed to register".$sqlicon->error;
     }
 }















































 