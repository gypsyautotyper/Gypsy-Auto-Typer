<?php
header('Content-Type: application/json');
$count = (int)file_get_contents(__DIR__ . '/count.txt');
echo json_encode(['count' => $count]);
