<?php 

$IPaddress = $_GET[IPaddress];
$Port = $_GET[Port];

if ($IPaddress == 'thethirdeye.ddns.net'){
	$command = escapeshellcmd('ssh -p2221 pi@174.112.74.174 \'sudo pkill uv4l\'');
} else {
	$command = escapeshellcmd('ssh pi@'.$IPaddress.' \'sudo pkill uv4l\'');
}

$output = shell_exec($command);

header("Location: /expanded_video.php?IPaddress=".$IPaddress."&Port=".$Port);
exit();

?>