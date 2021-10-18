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

echo "\n1. Regiister";
echo "\n2. My Account";

} elseif($textFromUser == "1"){
	echo "Username";

}elseif ($inputArray[0] == "1" && $level ==2) {
	echo "Age";
} 


else if($textFromUser == "2"){
//Business logic for the first level response
//This is a terminal request> Note how we start the response with END
echo "END Your phone number is ".$phoneNumber;

}else if ($textFromUser == "1*1"){
//this is a second level response where the user selected 1 in the first instance
$accountNumber = "ACC1001";

//This is a terminal request. note how we start with END
$response = "END Your account Number is".$accountNumber;

}else if ($textFromUser = "1*2"){
//This is a second level response where the user selected 1 in the first instance
$balance = "ugs 10,000";
//this is a terminal request. Note how we start with END
echo "END Your balance is".$balance;
}
