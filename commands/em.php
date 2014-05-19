<?php

$commands['em'] = function(&$conn, $pl, $params) {
	$colors = array(
		'ff00ff',
		'ff00cc',
		'ff0099',
		'ff0066',
		'ff0033',
		'ff0000',
		'ff3300',
		'ff6600',
		'ff9900',
		'ffcc00',
		'ffff00',
		'ccff00',
		'99ff00',
		'66ff00',
		'33ff00',
		'00ff00',
		'00ff33',
		'00ff66',
		'00ff99',
		'00ffcc',
		'00ffff',
		'00ccff',
		'0099ff',
		'0066ff',
		'0033ff',
		'0000ff',
		'3300ff',
		'6600ff',
		'9900ff',
		'cc00ff'
	);

	if (!empty($params[0])) {
		$text = implode(" ",$params);
		$textlength = strlen($text);
		$i = 0;
		while($i <= $textlength) {
			foreach($colors as $value) {
				if ($text[$i] != "") {
					$conn->htmlmessage($pl['from'], "<p style='font-size: xx-large; font-weight: bold; color:#{$value};  background: #000; padding:0 60px;'>  {$text[$i]}   </p>", $pl['type']);
					usleep(150000);
					$i++;
				}
			}
		}
	}
	else {
		$conn->message($event['from'], "Usage: #em <words, yo>", $event['type']);
	}
}


?>
