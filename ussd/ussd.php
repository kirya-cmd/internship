<?php 
require("db.php");

header("content-type:text/plane");

$phone_number = $_POST['phoneNumber'];

$textFromUser =  $_POST['text'];

$sessionID = $_POST['sessionid'];

$serviceCode = $_POST['serviceCode'];

$inputArray = explode("*", $textFromUser);

// 1*kirya*22*076666666*kare*1

// $level = 0;

$level = count($inputArray);

echo "\nCON Welcome to MUK STUDENTS FORUM";
 

if ($textFromUser == ""){
//This is the first request> Note how we start the response with CON

echo "\n1. Register";
echo "\n2. My Account";

} elseif($textFromUser == "1"){
        echo "\nEnter Username";  //1

}elseif ($inputArray[0] == "1" && $level ==2) {
        echo "\nEnter Age";   // 1*kirya
} elseif ($inputArray[0] == "1" && $level ==3){
        echo "\nEnter Phone Number";//1*kirya*54

} elseif ($inputArray[0] == "1" && $level ==4){
        echo "\n Enter Hostel/Residence";//1*kirya*54*0787564323
        
}   elseif ($inputArray[0] == "1" && $level ==5){
        echo "\n What is your Gender\n";//1*kirya*54*0787564323*Dauglas Villa
        echo "1. Male\n";
        echo "2.  Female \n";
         
} elseif ($inputArray[0] == "1" && $level ==6){
        //1*kirya*54*0787564323*Dauglas Villa*1

        $user_name = $inputArray[1];
        $age = $inputArray[2];
        $phone_number = $inputArray[3];
        $residence = $inputArray[4];
        $gender = $inputArray[5];

        if($gender == 1)
                $gender = "M";
        if($gender == 2)
                $gender = "F";

        $sqlicon->query("INSERT INTO users(phone_number, user_name, residence, gender, age)VALUES('$phone_number','$user_name', '$residence', '$gender', '$age')");

        $message = "Hello".$user_name."Thank you for registering with Muk link up";
        $apikey = "28315ae877327754b8921a7831fe9b730217796ea57861a36be0c7eb4c2fd2a0";
        $gateway = new AfricasTalkingGateway("sandbox", $apikey, "sandbox");
        $gateway->sendMessage($phone_number, $message);
        echo "END Thank you for registering";      
                
} 


 

 



?>
















 