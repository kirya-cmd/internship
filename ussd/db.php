<?php

$sqlicon = new mysqli("localhost", "root", "");

$sqlicon->query("CREATE DATABASE IF NOT EXISTS muk_link_up");

mysqli_select_db($sqlicon, "muk_link_up");

$string = $sqlicon->query("CREATE TABLE IF NOT EXISTS users(id int(10) not null auto_increment, primary key(id), phone_number varchar(11) not null unique, user_name varchar(50) not null, residence varchar(30) not null, gender enum('M', 'F') NOT NULL, age int(20) not null)");
$string = $sqlicon->query("INSERT INTO users(id, phone_number,user_name, residence, gender, age)VALUES(1999,'07888866+88','kirya', 'kayunga', 'male', '45')");

if ($string){
	echo "connected";
} else{
	echo $sqlicon->error;
}









