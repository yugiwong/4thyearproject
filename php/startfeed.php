<?php 

$IPaddress = $_GET[IPaddress];
$Port = $_GET[Port];

if ($IPaddress == 'thethirdeye.ddns.net'){
	$command = escapeshellcmd('ssh -p2221 pi@174.112.74.174 \'sudo uv4l --auto-video_nr --width 480 --height 340 --framerate 10 --driver raspicam --encoding mjpeg --server-option \'--port=8080\'\'');
} else {
	$command = escapeshellcmd('ssh pi@'.$IPaddress.' \'sudo uv4l --auto-video_nr --width 480 --height 340 --framerate 20 --driver raspicam --encoding mjpeg --server-option \'--port=8080\'\'');
}

$output = shell_exec($command);

header("Location: /expanded_video.php?IPaddress=".$IPaddress."&Port=".$Port);
exit();

?>