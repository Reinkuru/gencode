<?php 
$options = [
    'cost' => 10,
];
$passwordku = "admin";
$password_hash = password_hash($passwordku,PASSWORD_DEFAULT,$options);
echo $password_hash;
?>
