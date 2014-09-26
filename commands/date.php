<?php
$commands['date'] = function(&$conn, $event, $params) {
	global $timezone;
	date_default_timezone_set($timezone);
	if(!empty($params)) {
		$conn->message($event['from'], date(implode(" ", $params)), $event['type']);
	} else {
		$conn->message($event['from'], "Usage: #date <format>", $event['type']);
	}
}
?>
