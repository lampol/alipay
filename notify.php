<?php


$log_file='log.txt';

$data = $_POST;

file_put_contents($log_file,$data, FILE_APPEND);

echo "success";
