<?php

$from = $_GET['from'];
$to = $_GET['destination'];
$on = $_GET['check_in'];
$till = $_GET['check_out'];
$name = $_GET['Email'];

$message= (" wants to go ").$to.(" from ").$from.(" during time period from ").$on.(" to ").$till;
$url = 'https://maker.ifttt.com/trigger/qutation/with/key/kp6iZZyhvMghG2JFYOVUKbmPe8_xoJy8Fl61z4YeDMC';
$ch = curl_init($url);

$xml = "value1=$name&value2=$message";
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $xml);

$response = curl_exec($ch);
curl_close($ch);

header( 'Location: /notification.html' );
?>