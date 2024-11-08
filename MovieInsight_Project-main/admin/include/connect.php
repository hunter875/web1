<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "swiss_collection";

// Establish a database connection using the provided credentials
$db_handle = new mysqli($server, $user, $password, $db);

// Check for a connection error
if ($db_handle->connect_error) {
    die("Connection failed: " . $db_handle->connect_error);
}

?>
