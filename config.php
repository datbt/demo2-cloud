<?php

session_start();

$host = "ec2-54-221-214-3.compute-1.amazonaws.com"; /* Host name */
$user = "xftogjfqyxqtey"; /* User */
$password = "38b32364fdbc8622f2ae5f58b33ecd202869267a01999706ab73414e327263c4"; /* Password */
$dbname = "d2gmj18ps8f95a"; /* Database name */
$port = '5432';
$con = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");
// Check connection
if (!$con) {
    echo "An error occurred.\n";
    exit;
}
