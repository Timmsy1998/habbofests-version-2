<?php

require_once("../panel/_inc/glob.php");

$timestamp=time();

// 1 Hour of timeout
$timeout=$timestamp-36000;

// Grab The Guests IP
$ip = $_SERVER['REMOTE_ADDR'];

// REPLACE instead of INSERT
$db->query("REPLACE INTO onlinenow (time,ip) VALUES ('$timestamp','$ip') ");

// purge all old users
$db->query(" DELETE FROM onlinenow WHERE time < $timeout ");

$guestsresult=$db->query(" SELECT ip FROM onlinenow ");
$guests=$db->num($guestsresult);

?>