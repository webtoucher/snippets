<?php
header('Content-Type: text/html; charset=utf-8');
require_once '../../helpers/ip.php';

$ipEncoded = ipToLong('255.123.2.0');

echo $ipEncoded . ' -> ' . longToIp($ipEncoded);
