<?php
    include_once "../config/dbconnect.php";
    
    if (isset($_POST['upload'])) {
        // Lấy tên thể loại từ form
        $catname = $_POST['category_name'];
        
        // Sử dụng prepared statement để tránh SQL injection
        $stmt = $conn->prepare("INSERT INTO categories (category_name) VALUES (?)");
        $stmt->bind_param("s", $catname); // "s" cho biết loại dữ liệu là string

        // Thực thi câu lệnh
        if ($stmt->execute()) {
            // Nếu thành công, chuyển hướng về trang dashboard với thông báo thành công
            header("Location: ../dashboard.php?category=success");
            exit(); // Dừng script sau khi redirect
        } else {
            // Nếu có lỗi, in ra lỗi và chuyển hướng về trang dashboard với thông báo lỗi
            echo "Error: " . $stmt->error;
            header("Location: ../dashboard.php?category=error");
            exit();
        }

        // Đóng statement
        $stmt->close();
    }
?>
