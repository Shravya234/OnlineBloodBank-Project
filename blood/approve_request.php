<?php
// Assuming you have a database connection established
include 'conn.php';
// Check if request ID is provided and admin is logged in (you may need to implement login functionality)
if (isset($_GET['id']) && $_SESSION['admin_logged_in']) 
    $requestId = $_GET['id'];
    
    // Update the request status in the database
    $sql = "UPDATE request SET action = 'approved' WHERE id="$id";
    // Execute the SQL query (you should use prepared statements for security)
     $result = mysqli_query($conn, $sql);

    // Example response
    if ($result) {
        echo "Request approved successfully!";
    } else {
        echo "Error approving request.";
    }
} else {
    echo "Invalid request.";
}

?>
