<?php

/**
 * Simple PDO Database connection
 * 
 */

 # fill this details with your database details
$dbname = '';
$dbuser = '';
$dbhost = '';
$dbpass = '';

// dsn: host dbname, user, pass
try {
    $conn = new PDO("mysql:host={$dbhost};dbname={$dbname}", $dbuser, $dbpass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected";
} catch(PDOException $e){
    echo "Error: " . $e->getMessage();
}

/**
 * If you have tested and it shows ```Connected``` and you want to use
 * the connection, just comment line 17 and you will be good to go
 * 
 * The connection is accessed ```$conn```
 */


