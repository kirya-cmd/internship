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
    
}
if($inputArray[1]  == 1){
	$user_name = $inputArray[2];
    $saveUser = $sqlicon->query("INSERT INTO users(phone_number, user_name, residence, gender, age)VALUES('$phone_number','$user_name', '$residence', '$gender', '$age')");



}else if($textFromUser == "2"){
//Business logic for the first level response
//This is a terminal request> Note how we start the response with END
echo "END Your phone number is ".$phoneNumber;


}else if ($textFromUser = "1*2"){
//This is a second level response where the user selected 1 in the first instance
$balance = "ugs 10,000";
//this is a terminal request. Note how we start with END
echo "END Your balance is".$balance;
}
