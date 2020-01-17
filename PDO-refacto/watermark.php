<?php

$stamp = imagecreatefrompng("images/wf3.png");
$im = imagecreatefromjpeg("images/cofee.jpg");

$marge_right = 10;
$marge_bottom = 10;
$sx = imagesx($stamp);
$sy = imagesy($stamp);


imagecopy($im, $stamp, imagesx($im) - $sx, imagesy($im) - $sy, 0, 0, imagesx($stamp), imagesy($stamp));

header("Content-type: image/png");
imagejpeg($im);
imagejpeg($im, "images/cofee-with-watermark.jpg");