<?php

// definisikan variabel
$DB_HOST = 'localhost';
$DB_USER = 'root';
$DB_PASS = '';
$DB_NAME = 'db_2201010538';

// Koneksi ke database
$mysqli = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

// Memeriksa koneksi
if ($mysqli->connect_errno) {
    die("Failed to connect to MySQL: " . $mysqli->connect_error);
}