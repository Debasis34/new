<?php
require_once("connection.php");

if (isset($_GET['file_id'])) {
    $id = intval($_GET['file_id']); // Using intval for better security

    // Fetch file to download from database
    $sql = "SELECT * FROM upload_files WHERE ID = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($result && mysqli_num_rows($result) == 1) {
        $file = mysqli_fetch_assoc($result);
        $filepath = 'uploads/' . $file['NAME'];

        if (file_exists($filepath)) {
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename=' . basename($filepath));
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize($filepath));
            readfile($filepath);

            // Now update downloads count
            $newCount = $file['DOWNLOAD'] + 1;
            $updateQuery = "UPDATE upload_files SET DOWNLOAD = ? WHERE ID = ?";
            $updateStmt = mysqli_prepare($conn, $updateQuery);
            mysqli_stmt_bind_param($updateStmt, "ii", $newCount, $id);
            mysqli_stmt_execute($updateStmt);

            exit;
        } else {
            echo "File not found.";
            exit;
        }
    } else {
        echo "File not found in database.";
        exit;
    }
} else {
    echo "No file ID specified.";
    exit;
}
?>
