<?php
$servername = 'localhost';
$username = 'root';
$password = 'mysql';
$dbname = 'registration_db';

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    echo 'Connection Failed';
    die;
}
