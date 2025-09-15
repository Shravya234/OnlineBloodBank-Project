<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Availability</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap&family=Oswald:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-left: 5px solid #dc3545;
            border-right: 5px solid #dc3545;
        }

        .header {
            text-align: center;
            margin-bottom: 30px;
        }

        .header img {
            width: 175px;
            margin-bottom: 5px;
        }

        h1 {
            font-family: 'Oswald', sans-serif;
            color: #dc3545;
            margin-bottom: 5px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
            font-family: 'Oswald', sans-serif;
        }

        table, th, td {
            border: 2px solid #dee2e6;
        }

        th, td {
            padding: 15px;
            text-align: center;
        }

        th {
            background-color: #343a40;
            color: #fff;
            border-left: 2px solid #dee2e6;
            border-right: 2px solid #dee2e6;
        }

        .available {
            background-color: #28a745;
            color: #fff;
            font-weight: bold;
            border: 2px solid #28a745;
            border-radius: 5px;
        }

        .limited {
            background-color: #ffc107;
            color: #856404;
            font-weight: bold;
            border: 2px solid #ffc107;
            border-radius: 5px;
        }

        .unavailable {
            background-color: #dc3545;
            color: #fff;
            font-weight: bold;
            border: 2px solid #dc3545;
            border-radius: 5px;
        }

        .blood-type {
            background-color: #007bff;
            color: #fff;
            font-weight: bold;
            border: 2px solid #007bff;
            border-radius: 5px;
        }

        .quantity {
            background-color: #17a2b8;
            color: #fff;
            font-weight: bold;
            border: 2px solid #17a2b8;
            border-radius: 5px;
        }

        .button-container {
            text-align: center;
            margin-top: 20px;
        }

        .btn {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            font-size: 16px;
        }

        .btn:hover {
            background-color: #0056b3;
        }
        
    </style>
</head>
<body>
    <div class="container">
        <a href="home.php">Back To Home</a>
        <div class="header">
            <img src="assets/images/bloodbank.jpg" alt="Blood Bank Logo">
            <h1>Blood Availability</h1>
            

        </div>
        <table>
            <thead>
                <tr>
                    <th class="blood-type">Blood Type</th>
                    
                    <th class="quantity">Quantity (units)</th>
                </tr>
                
            </thead>
            <tbody>
                <?php
                include 'conn.php';

            $sql = "SELECT bloodGroup, unit FROM register";     
           $result = mysqli_query($conn, $sql);

                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)){
                        echo "<tr>";
                        echo  "<td>".$row['bloodGroup']."</td>";
                        echo  "<td>".$row['unit']."</td>";
                        echo "</tr>";
                    }
                }
    
                
                ?>

                
        
        <div class="button-container">
            <button class="btn" onclick="refreshAvailability()">Refresh Availability</button>
        </div>
    </div>

    <script>
        function refreshAvailability() {
            // Logic to refresh blood availability can be added here
            alert("Refreshing blood availability...");
            // This is just a placeholder. Actual implementation would involve fetching updated data from a server.
        }
    </script>


<?php


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
include 'conn.php';

$sql = "SELECT bloodGroup,unit FROM blood_availability";
$result = $conn->query($sql);


$data = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
} else {
    $data = [];
}
$conn->close();


?>

</body>

</html>