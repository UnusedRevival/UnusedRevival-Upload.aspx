<?php
//tysm - dimpersbumpers on discord for giving this public

$robloxContents = file_get_contents('php://input');
$fix = zlib_decode($robloxContents);
$fp = fopen('RBXL/place-1.rbxl', 'w');
fwrite($fp, $fix);
fclose($fp);
?>