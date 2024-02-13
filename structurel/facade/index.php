<?php 

require_once('./VideoConverter.php'); // ma facade

$converter = new VideoConverter();
$mp4 = $converter->convert("funny-cats-video.ogg", "mp4");
$mp4->save();