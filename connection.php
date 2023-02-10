<?php
$servername = "localhost";
$username = "..."; //Username dalam database
$password = "..."; //Password dalam database
$db = "..."; //Database dalam database

// Inisialisasi koneksi
$conn = new mysqli($servername, $username, $password, $db);

// Cek koneksi
if ($conn->connect_error){
    die("Connection Error: " . $conn->connect_error);
} else {
    echo "Connection Successfull";
}

?>