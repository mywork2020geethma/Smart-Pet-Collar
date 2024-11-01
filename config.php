<?php 
define('DB_HOST', 'localhost'); 
define('DB_USERNAME', 'id83562419_furlink'); 
define('DB_PASSWORD', 'furlink2023'); 
define('DB_NAME', 'id83562419_dbFurlink');

date_default_timezone_set('Asia/Colombo');

// Connect with the database 
$db = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME); 
 
// Display error if failed to connect 
if ($db->connect_errno) { 
    echo "Connection to database failed: " . $db->connect_error;
    exit();
}

// SQL statement to create the table
$sql = "CREATE TABLE IF NOT EXISTS gps_data (
    id INT PRIMARY KEY AUTO_INCREMENT,
    lat FLOAT NOT NULL,
    lng FLOAT NOT NULL,
    created_date DATETIME DEFAULT CURRENT_TIMESTAMP
)";

// Execute the query
if ($db->query($sql) === TRUE) {
    echo "Table gps_data created successfully";
} else {
    echo "Error creating table: " . $db->error;
}

// Close the database connection
$db->close();
?>