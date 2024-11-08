<?php
class DBController {
    private $host = "localhost";  // Your database host
    private $user = "root";       // Your database username
    private $password = "";       // Your database password
    private $database = "webpage"; // Your database name
    public $conn;

    function __construct() {
        $this->conn = $this->connectDB();
    }

    function connectDB() {
        $conn = new mysqli($this->host, $this->user, $this->password, $this->database);
        
        // Check for connection error
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        return $conn;
    }

    function runQuery($query) {
        $result = $this->conn->query($query);
        
        // Check if the query was successful
        if ($result === false) {
            // Query failed, output the error message
            echo "Error: " . $this->conn->error;
            return []; // Return an empty array if there was an error
        }

        $resultArray = [];
        // Fetch results if any rows are returned
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $resultArray[] = $row; // Append each row to the results array
            }
        }
        return $resultArray; // Return the results array
    }
}

// Instantiate the database controller
$db_handle = new DBController();
?>
