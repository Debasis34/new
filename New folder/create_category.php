<?php
error_reporting(0); // Disable error reporting
require_once("connection.php");
error_reporting(E_ALL); // Re-enable error reporting

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['categoryName']) && !empty($_POST['categoryName'])) {
        $categoryName = $_POST['categoryName'];

        // Insert the new category into the database
        $sql = "INSERT INTO categories (name) VALUES (?)";
        $stmt = $conn->prepare($sql);
        if ($stmt) {
            $stmt->bind_param("s", $categoryName);
            if ($stmt->execute()) {
                echo json_encode(['status' => 'success', 'categoryName' => $categoryName]);
            } else {
                echo json_encode(['status' => 'error', 'message' => $stmt->error]);
            }
            $stmt->close();
        } else {
            echo json_encode(['status' => 'error', 'message' => $conn->error]);
        }
        $conn->close();
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Category name is required.']);
    }
}
?>
