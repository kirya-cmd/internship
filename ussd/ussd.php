<?php 


header("content-type:text/plane");

$phone_number = $_POST['phoneNumber'];

$textFromUser =  $_POST['text'];

$sessionID = $_POST['sessionid'];

$serviceCode = $_POST['serviceCode'];

$inputArray = explode("*", $textFromUser);

$level = 0;

$level = count($inputArray);

echo "\nCON Welcome to MUK LINK UPS";
 

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
	echo "\n What is your Gender";
	 

}


?>




























 