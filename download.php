<?php
// Path to your counter
$counterFile = __DIR__ . '/count.txt';

// Read, increment, and save
$count = (int)file_get_contents($counterFile);
$count++;
file_put_contents($counterFile, $count);

// Stream the EXE
$file = __DIR__ . '/Gypsy AutoTyper.exe';
if (!file_exists($file)) {
    header("HTTP/1.0 404 Not Found");
    exit("File not found.");
}

header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename="'.basename($file).'"');
header('Content-Length: ' . filesize($file));

flush();
readfile($file);
exit;
?>
