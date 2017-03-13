<?php
system("python http://spyonleslie.ddns.net:8000/Documents/Python/stopRecording.py");

header("Location: /expanded_video.php?name=http://spyonleslie.ddns.net:2222/stream");
exit();
?>