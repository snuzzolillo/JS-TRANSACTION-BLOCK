<?php
	$secs = $_GET['secs'];
	sleep($secs);
	die('I slept for '.$secs.' Seconds');
?>
