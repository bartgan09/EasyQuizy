<?php

$host = getenv('DB_HOST');
$user = getenv('DB_USER');
$pass = getenv('DB_PASS');
$database = getenv('DB_DATABASE');

$db = mysqli_connect($host, $user, $pass, $database);