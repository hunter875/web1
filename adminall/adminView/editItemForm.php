<?php
include_once "../config/dbconnect.php";

// Handle AJAX requests for adding or updating products
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['action']) && $_POST['action'] === 'addProduct') {
        $name = $_POST['name'];
        $description = $_POST['description'];
        $category = $_POST['category'];

        $targetDir = "../uploads/";
        $fileName = basename($_FILES["image"]["name"]);
        $targetFilePath = $targetDir . $fileName;

        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)) {
            $stmt = $conn->prepare("INSERT INTO movies (name, description, category_id, image) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssis", $name, $description, $category, $targetFilePath);

            echo $stmt->execute() ? "Product added successfully." : "Error: " . $stmt->error;
            $stmt->close();
        } else {
            echo "Error uploading image.";
        }
        exit;
    } elseif (isset($_POST['action']) && $_POST['action'] === 'updateProduct') {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $description = $_POST['description'];
        $category = $_POST['category'];
        $image = $_POST['existingImage'];

        if (!empty($_FILES["newImage"]["name"])) {
            $targetDir = "../uploads/";
            $fileName = basename($_FILES["newImage"]["name"]);
            $targetFilePath = $targetDir . $fileName;
            if (move_uploaded_file($_FILES["newImage"]["tmp_name"], $targetFilePath)) {
                $image = $targetFilePath;
            }
        }

        $stmt = $conn->prepare("UPDATE movies SET name=?, description=?, category_id=?, image=? WHERE id=?");
        $stmt->bind_param("ssisi", $name, $description, $category, $image, $id);

        echo $stmt->execute() ? "Product updated successfully." : "Error: " . $stmt->error;
        $stmt->close();
        exit;
    }
}

// Fetch categories for the form dropdown
$categoryOptions = "";
$catQuery = $conn->query("SELECT * FROM categories ORDER BY name");
while ($row = $catQuery->fetch_assoc()) {
    $categoryOptions .= "<option value='" . htmlspecialchars($row['id']) . "'>" . htmlspecialchars($row['name']) . "</option>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product Management</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
</head>
<body>
<div class="container p-5">
    <!-- Add Product Form -->
    <h4>Add New Product</h4>
    <form id="addProductForm" enctype="multipart/form-data">
        <input type="hidden" name="action" value="addProduct">
        <div class="form-group">
            <label for="newProductName">Product Name:</label>
            <input type="text" class="form-control" id="newProductName" name="name" required>
        </div>
        <div class="form-group">
            <label for="newProductDescription">Product Description:</label>
            <input type="text" class="form-control" id="newProductDescription" name="description" required>
        </div>
        <div class="form-group">
            <label>Category:</label>
            <select id="newProductCategory" name="category" class="form-control">
                <?= $categoryOptions ?>
            </select>
        </div>
        <div class="form-group">
            <label for="newProductImage">Choose Image:</label>
            <input type="file" id="newProductImage" name="image" class="form-control-file" required>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success btn-lg" id="addProductBtn">
                <i class="fas fa-plus-circle"></i> Add Product
            </button>
        </div>
    </form>

    <!-- Edit Product Form -->
    <?php
    if (isset($_POST['record'])) {
        $ID = $_POST['record'];
        $qry = $conn->query("SELECT * FROM movies WHERE id='$ID'");
        if ($qry->num_rows > 0) {
            $row1 = $qry->fetch_assoc();
            ?>
            <h4>Edit Product Detail</h4>
            <form id="updateProductForm" enctype="multipart/form-data">
                <input type="hidden" name="action" value="updateProduct">
                <input type="hidden" name="id" value="<?= htmlspecialchars($row1['id']) ?>">
                <div class="form-group">
                    <label for="name">Product Name:</label>
                    <input type="text" class="form-control" name="name" value="<?= htmlspecialchars($row1['name']) ?>">
                </div>
                <div class="form-group">
                    <label for="description">Product Description:</label>
                    <input type="text" class="form-control" name="description" value="<?= htmlspecialchars($row1['description']) ?>">
                </div>
                <div class="form-group">
                    <label>Category:</label>
                    <select name="category" class="form-control">
                        <?= str_replace("value='" . htmlspecialchars($row1['category_id']) . "'", "value='" . htmlspecialchars($row1['category_id']) . "' selected", $categoryOptions) ?>
                    </select>
                </div>
                <div class="form-group">
                    <img width="200px" height="150px" src="<?= htmlspecialchars($row1['image']) ?>">
                    <input type="hidden" name="existingImage" value="<?= htmlspecialchars($row1['image']) ?>">
                    <input type="file" name="newImage" class="form-control-file">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Update Product</button>
                </div>
            </form>
            <?php
        }
    }
    ?>
</div>

<script>
    // AJAX for Add Product
    $("#addProductForm").submit(function (e) {
        e.preventDefault();
        var formData = new FormData(this);

        // Disable button to prevent multiple submissions
        $("#addProductBtn").prop("disabled", true).text("Adding...");

        $.ajax({
            url: "", // Current file
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            success: function (response) {
                alert(response);
                $("#addProductBtn").prop("disabled", false).html('<i class="fas fa-check-circle"></i> Product Added!');
                setTimeout(() => location.reload(), 1000); // Refresh after a short delay
            },
            error: function () {
                alert("Error adding product.");
                $("#addProductBtn").prop("disabled", false).html('<i class="fas fa-times-circle"></i> Try Again');
            }
        });
    });

    // AJAX for Update Product
    $("#updateProductForm").submit(function (e) {
        e.preventDefault();
        var formData = new FormData(this);

        $.ajax({
            url: "", // Current file
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            success: function (response) {
                alert(response);
                location.reload();
            },
            error: function () {
                alert("Error updating product.");
            }
        });
    });
</script>
</body>
</html>
