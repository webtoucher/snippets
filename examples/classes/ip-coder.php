<?php
header('Content-Type: text/html; charset=utf-8');
require __DIR__ . '/../../classes/ip-coder.php';


const SOME_IP = '255.123.2.0';

echo '<pre>';

$ipEncoded = IpCoder::encode(SOME_IP);
echo '<b>КОДИРОВАНИЕ IP</b>' . PHP_EOL . PHP_EOL;
echo SOME_IP . ' -> ' . $ipEncoded . PHP_EOL . PHP_EOL;
echo '<b>ДЕКОДИРОВАНИЕ IP</b>' . PHP_EOL . PHP_EOL;
echo $ipEncoded . ' -> ' . IpCoder::decode($ipEncoded);

echo '</pre>';
