<?php 

date_default_timezone_set("America/New_York");

$IPaddress = $_GET[IPaddress];
$Port = $_GET[Port];

//$command = escapeshellcmd('ssh pi@134.117.143.136 \'wget -r 134.117.143.136:8080/stream -O /home/pi/Videos/'.date("Y-m-d_h:i:sa").'.mjpeg\'');
$command = escapeshellcmd('ssh pi@'.$IPaddress.' \'wget -r '.$IPaddress.':'.$Port.'/stream -O /home/pi/Videos/'.date("Y-m-d_h:i:sa").'.mjpeg\'');

$output = shell_exec($command);

header("Location: /expanded_video.php?IPaddress=".$IPaddress."&Port=".$Port);
exit();

?>