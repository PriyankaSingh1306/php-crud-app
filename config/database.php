<?php
session_start();
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbName = "crud";

// Create connection 
$conn = @new mysqli(
    $servername,
    $username,
    $password,
    $dbName
);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
