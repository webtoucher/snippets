<?php
header('Content-Type: text/html; charset=utf-8');
require __DIR__ . '../../helpers/ip.php';

const SOME_IP = '255.123.2.0';

$ipEncoded = ipToLong(SOME_IP);
echo SOME_IP . ' -> ' . $ipEncoded . ' -> ' . longToIp($ipEncoded);
