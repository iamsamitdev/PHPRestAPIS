<?php
require_once __DIR__."./vendor/autoload.php";

use Genius\Connectdb;

$dbconnect = new Connectdb();
$connection = $dbconnect->getConnect();

// INSERT TO users
$username = "samit";
$password = "123456";
$fullname = "Samit Koyom";
$email = "samit@gmail.com"; 
$tel = "08956566464";
$status = "1";

$sql = "INSERT INTO users(username,password,fullname,email,tel,status) 
            VALUES (:username,:password,:fullname,:email,:tel,:status)";
$stmt = $connection->prepare($sql);
$stmt->bindParam(':username',$username);
$stmt->bindParam(':password',$password);
$stmt->bindParam(':fullname',$fullname);
$stmt->bindParam(':email',$email);
$stmt->bindParam(':tel',$tel);
$stmt->bindParam(':status',$status);

// print_r($stmt);

if($stmt->execute()){
    echo "Add new member success";
}else{
    echo "Add data fail!!";
}