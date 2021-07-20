<?php

$host = 'blog:3308';
$user = 'root';
$pass = '';
$db_name = 'blog';

$conn = new mysqli($host, $user, $pass, $db_name);

if ($conn->connect_error) {
    die('Database connection error: ' . $conn->connect_error);
}
