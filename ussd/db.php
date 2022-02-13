<?php

$sqlicon = new mysqli("localhost", "root", "4Aj[*n[o4QQ7Nvj4","muk_link_up"); 

$sqlicon->query("CREATE TABLE IF NOT EXISTS users(id int(10) not null auto_increment, primary key(id), phone_number varchar(11) not null unique, user_name varchar(50) not null, residence varchar(30) not null, gender enum('M', 'F') NOT NULL, age int(20) not null)");

 $sqlicon = mysqli_connect("localhost", "root", "4Aj[*n[o4QQ7Nvj4","muk_link_up"); 
// $results = $sqlicon->query("SELECT ID, NAME FROM districts ORDER BY ID ASC");

// $data = "";

// foreach ($results as $key => $value) {

// 	$id = $value["ID"];
// 	$name = $value["NAME"];

// 	$data .= "ID: ".$id;
// 	$data .= "\nName: ".$name;

// }

// echo $data;