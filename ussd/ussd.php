   <?php 
require("db.php");
$sqlicon = mysqli_connect("localhost", "root", "4Aj[*n[o4QQ7Nvj4","muk_link_up"); 

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
                $gender = "F";  } 


                         
        if($textFromUser == "2"){

        echo "\nEnter Phoone Number"; 
 $phone_number = $_POST['$phone_number'];   

 $sqlicon = "SELECT * FROM  users WHERE phone_number='$phone_number' ";
 $res = mysqli_query($sqlicon, $sql);

 $count = mysqli_num_rows($res);

 if($count==1)
 {
    ?>
    <script type="text/javascript">
        alert("Login Successful!");
    </script>
    <?php
 }
 else
 {
        ?>
    <script type="text/javascript">
        alert("Login Failed!");
    </script>
   <?php
}
}
?>
















 