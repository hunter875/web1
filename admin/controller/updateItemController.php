<?php
    include_once "../config/dbconnect.php";

    // Sanitize input data to prevent SQL injection
    $product_id = mysqli_real_escape_string($conn, $_POST['product_id']);
    $p_name = mysqli_real_escape_string($conn, $_POST['p_name']);
    $p_desc = mysqli_real_escape_string($conn, $_POST['p_desc']);
    $category = mysqli_real_escape_string($conn, $_POST['category']);

    // Define the upload directory path
    $dir = '../uploads/';

    // Check if an image is being uploaded
    if (isset($_FILES['newImage']) && $_FILES['newImage']['error'] == 0) {

        $img = $_FILES['newImage']['name'];
        $tmp = $_FILES['newImage']['tmp_name'];
        $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
        $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'webp');
        
        // Generate a unique name for the image to prevent overwriting
        $image = rand(1000, 1000000) . "." . $ext;
        $final_image = $dir . $image;

        // Validate the file type
        if (in_array($ext, $valid_extensions)) {
            // Move the uploaded file to the target directory
            if (move_uploaded_file($tmp, $final_image)) {
                // File upload successful
            } else {
                echo "Error uploading the file.";
                exit;
            }
        } else {
            echo "Invalid file type.";
            exit;
        }
    } else {
        // No new image uploaded, use the existing image
        $final_image = $_POST['existingImage'];
    }

    // Prepare the SQL query to update the product
    $stmt = $conn->prepare("UPDATE product SET 
        product_name=?, 
        product_desc=?, 
        price=?, 
        category_id=?, 
        product_image=? 
        WHERE product_id=?");

    // Bind parameters to the query
    $stmt->bind_param("ssdiis", $p_name, $p_desc, $p_price, $category, $final_image, $product_id);

    // Execute the query and check if the update was successful
    if ($stmt->execute()) {
        echo "true";  // Update successful
    } else {
        echo "Error: " . $stmt->error;  // Output error if update fails
    }

    // Close the statement
    $stmt->close();
?>
