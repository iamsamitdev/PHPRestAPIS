<?php
require_once __DIR__."/app/autoload.php";

use Genius\User;

$user = new User(); // สร้าง object ขึ้นมา
$user->first_name = "Samit";
$user->last_name = "Koyom";
$user->email = "samit@gmail.com";

$user->loginprocess();

