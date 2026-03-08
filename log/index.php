<?php
$input = file_get_contents('php://input');
$q = $_SERVER['QUERY_STRING'] ?? '';
$line = date('c') . "\t" . $_SERVER['REMOTE_ADDR'] . "\t" . $_SERVER['REQUEST_METHOD'] . "\t" . $q . "\t" . $input . "\n";
file_put_contents(__DIR__ . '/../hits.log', $line, FILE_APPEND);
http_response_code(204);
