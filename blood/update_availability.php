<?php
include 'conn.php'; // Make sure this file contains your database connection

// Check if ID is provided in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch current data for the specified ID
    $sql = "SELECT * FROM blood_availability WHERE id='$id'";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die("Query Failed: " . mysqli_error($conn));
    }

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    } else {
        echo "Record not found.";
        exit;
    }
} else {
    echo "ID not provided.";
    exit;
}

// Handle form submission for updating the data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $blood_type = $_POST['blood_type'];
    $quantity = $_POST['quantity'];
 

    $update_sql = "UPDATE blood_availability SET blood_type='$blood_type', quantity='$quantity'";

    if (mysqli_query($conn, $update_sql)) {
        echo "Record updated successfully.";
        // Redirect back to the admin panel or any other page after update
        header("Location: adminpanel.php");
        exit;
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Availability</title>
    <style>
       body {
            font-family: 'Roboto', sans-serif;
            background-color: #f8f8f8;
            color: #333;
        }
        .container {
            width: 50%;
            margin: auto;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #b90808;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin: 10px 0 5px;
        }
        input[type="text"], input[type="email"], input[type="password"], select {
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        button {
            background-color: #b90808;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #a00707;
        }
    </style> 
</head>
<body>
    <div class="container">
        <h2>Update Register Entry</h2>
        <form method="POST" action="">
            <label for="blood_type">Blood Group:</label>
            <select id="blood_type" name="blood_type" required>
                <option value="A+" <?php if ($row['blood_type'] == 'A+') echo 'selected'; ?>>A+</option>
                <option value="A-" <?php if ($row['blood_type'] == 'A-') echo 'selected'; ?>>A-</option>
                <option value="B+" <?php if ($row['blood_type'] == 'B+') echo 'selected'; ?>>B+</option>
                <option value="B-" <?php if ($row['blood_type'] == 'B-') echo 'selected'; ?>>B-</option>
                <option value="AB+" <?php if ($row['blood_type'] == 'AB+') echo 'selected'; ?>>AB+</option>
                <option value="AB-" <?php if ($row['blood_type'] == 'AB-') echo 'selected'; ?>>AB-</option>
                <option value="O+" <?php if ($row['blood_type'] == 'O+') echo 'selected'; ?>>O+</option>
                <option value="O-" <?php if ($row['blood_type'] == 'O-') echo 'selected'; ?>>O-</option>
            </select>
            <label for="quantity">Quantity:</label>
            <input type="number" id="quantity" name="quantity" value="<?php echo htmlspecialchars($row['quantity']); ?>" required><br>


            <button type="submit">Update Entry</button>
        </form>
        <a href="adminpanel.php">Back to Dashboard</a>
    </div>
</body>
</html>