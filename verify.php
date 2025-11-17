<?php
// Basic verify/receiver script - logs incoming JSON to logs/payment_{time}.log
$data = json_decode(file_get_contents('php://input'), true);
if(!file_exists('logs')) mkdir('logs', 0777, true);
$stamp = date('Ymd_His');
file_put_contents("logs/payment_{$stamp}.log", print_r($data, true));
echo "OK";
?>