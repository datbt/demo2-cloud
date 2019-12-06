<?php

session_start();

$host = "ec2-174-129-255-21.compute-1.amazonaws.com"; /* Host name */
$user = "oftpgoaawpzwpx"; /* User */
$password = "670d8ba27f33e6017da397e9175a92ae4359b7b34faad4e18ec8bc2700f2577c"; /* Password */
$dbname = "d801jhb9g4lins"; /* Database name */
$port = '5432';
$con = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");
// Check connection
if (!$con) {
    echo "An error occurred.\n";
    exit;
}
