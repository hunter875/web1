<?php
    include_once "../config/dbconnect.php";
    
    if (isset($_POST['upload'])) {

        // Sanitize input data
        $ProductName = mysqli_real_escape_string($conn, $_POST['p_name']);
        $desc = mysqli_real_escape_string($conn, $_POST['p_desc']);
        $category = mysqli_real_escape_string($conn, $_POST['category']);
        
        // Check if a file was uploaded
        if (isset($_FILES['file']) && $_FILES['file']['error'] == 0) {
            $name = $_FILES['file']['name'];
            $temp = $_FILES['file']['tmp_name'];
            
            // Define allowed file types and max size (e.g., 5MB)
            $allowed_types = ['image/jpeg', 'image/png', 'image/gif'];
            $max_size = 5 * 1024 * 1024; // 5 MB
            
            // Get file MIME type and size
            $file_type = mime_content_type($temp);
            $file_size = $_FILES['file']['size'];

            // Validate file type and size
            if (!in_array($file_type, $allowed_types)) {
                echo "Invalid file type. Only JPG, PNG, and GIF are allowed.";
                exit;
            }
            if ($file_size > $max_size) {
                echo "File size exceeds the maximum limit of 5MB.";
                exit;
            }
            
            // Specify the upload directory
            $location = "./uploads/";
            $image = $location . basename($name);

            // Upload the file
            if (move_uploaded_file($temp, "../uploads/" . basename($name))) {
                // Insert product details into the database using prepared statements
                $stmt = $conn->prepare("INSERT INTO product (product_name, product_image, price, product_desc, category_id) VALUES (?, ?, ?, ?, ?)");
                $stmt->bind_param("ssdis", $ProductName, $image, $price, $desc, $category);
                
                if ($stmt->execute()) {
                    echo "Records added successfully.";
                } else {
                    echo "Error: " . $stmt->error;
                }
                
                // Close the prepared statement
                $stmt->close();
            } else {
                echo "Error uploading the file.";
            }
        } else {
            echo "No file uploaded or there was an error with the file.";
        }
    }
?>
