<?php

require_once('../vendor/autoload.php');

use App\Developer;
use App\Salary;
use App\Visitor;
use App\Worker;


$developer = new Developer("Maksim", 20);
$developer->setPosition("Junior Developer");
$developer->setHours([8, 3, 6, 3, 10]);
$developerSalary = Salary::count($developer->getHours());
echo $developerSalary;

$hashedPassword = password_hash("Sdasdsababy187", PASSWORD_DEFAULT);
if (password_verify("Sdasdsaba1by187", $hashedPassword)) {
    echo 'Password is valid!';
} else {
    echo 'Invalid password.';
}

