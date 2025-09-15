<?php
include 'conn.php'; // Ensure this file contains your database connection

// Check if ID is provided in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch current data for the specified ID
    $sql = "SELECT * FROM request WHERE id='$id'";
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
    $name = $_POST['name'];
    $blood_group = $_POST['blood_group'];
    $unit = $_POST['unit'];
    $contact = $_POST['contact'];
    $city = $_POST['city'];
    $gender = $_POST['gender'];

    $update_sql = "UPDATE request SET name='$name', blood_group='$blood_group', unit='$unit', contact='$contact', city='$city', gender='$gender' WHERE id='$id'";

    if (mysqli_query($conn, $update_sql)) {
        echo "Record updated successfully.";
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
    <title>Update Request</title>
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
    <h2>Update Request</h2>
    <form method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="<?php echo $row['name']; ?>" required>

        <label for="blood_group">Blood Group:</label>
        <input type="text" name="blood_group" id="blood_group" value="<?php echo $row['blood_group']; ?>" required>

        <label for="unit">Unit:</label>
        <input type="number" name="unit" id="unit" value="<?php echo $row['unit']; ?>" required>

        <label for="contact">Contact:</label>
        <input type="text" name="contact" id="contact" value="<?php echo $row['contact']; ?>" required>

        <label for="city">City:</label>
        <input type="text" name="city" id="city" value="<?php echo $row['city']; ?>" required>

        <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value="Male" <?php if ($row['gender'] == 'Male') echo 'selected'; ?>>Male</option>
                <option value="Female" <?php if ($row['gender'] == 'Female') echo 'selected'; ?>>Female</option>
            </select>
        
        <button type="submit">Update Request</button>
    <a href="adminpanel.php">Back to Dashboard</a>
    </div>
</body>
</html>