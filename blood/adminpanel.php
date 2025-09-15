
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Bank Admin Panel</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap&family=Oswald:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f8f8f8;
            margin: 0;
            padding: 0;
            color: #333;
            display: flex;
        }
        .header {
            background-color: #b90808;
            padding: 20px;
            text-align: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            position: fixed;
            width: 100%;
            height: 5vh;
        }
        .header h1 {
            color: white;
            margin: 0;
            font-size: 2em;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);
        }
        .header .buttons {
            position: absolute;
            right: 20px;
            top: 20px;
        }
        .header .buttons button {
            margin-left: 10px;
        }
        .sidebar {
            background-color: #b90808;
            width: 200px;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            padding-top: 60px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        }
        .sidebar a {
            padding: 15px;
            text-align: center;
            text-decoration: none;
            font-size: 18px;
            color: white;
            display: block;
            transition: background-color 0.3s ease;
        }
        .sidebar a:hover {
            background-color: #575757;
        }
        .container {
            margin-top: 12vh;
            margin-left: 18vw;        
            padding: 18px;
            width: calc(250% - 240px);
        }
        .card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 90%;
            margin: 10px 0;
            padding: 20px;
            text-align: left;
        }
        .card h2 {
            margin-top: 0;
            color: #b90808;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
        }
        .card table {
            width: 100%;
            border-collapse: collapse;
        }
        .card table, .card th, .card td {
            border: 1px solid #ddd;
        }
        .card th, .card td {
            padding: 12px;
            text-align: left;
        }
        .card th {
            background-color: #b90808;
            color: white;
        }
        button {
            background-color: #b90808;
            color: white;
            padding: 10px 20px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }
        .sidebar_btn {
            cursor: pointer;
            background-color:
        }
        button:hover {
            background-color: #a00707;
            transform: scale(1.05);
        }
        .button-group {
            text-align: right;
        }
        input[type="text"], input[type="number"], input[type="email"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Blood Bank Admin Panel</h1>
    </div>

    <div class="sidebar">
        <a class="sidebar_btn"></a>
        <a href="#manage-donors">Manage Donors</a>
        <a href="#manage-inventory">Manage Inventory</a>
        <a href="#manage-requests">Manage Requests</a>
        <a href="adminlogout.php" class="sidebar_btn" >Logout</a>

    </div>

    <div class="container">
        <div id="manage-donors" class="card">
            <h2>Manage Donors</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Gender</th>
                        <th>Blood Type</th>
                        <th>Phone</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                   
                    include 'conn.php';

                    $sql = "SELECT * FROM register";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo  "<td>".$row['id']."</td>";
                            echo  "<td>".$row['fullName']."</td>";
                            echo  "<td>".$row['email']."</td>";
                            echo  "<td>".$row['username']."</td>";
                            echo  "<td>".$row['password']."</td>";
                            echo  "<td>".$row['gender']."</td>";
                            echo  "<td>".$row['bloodGroup']."</td>";
                            echo  "<td>".$row['contact']."</td>";
                            echo  "<td><button onclick=\"window.location.href='reg.html'\">Add</button>
                            <button onclick=\"window.location.href='update_register.php?id=".$row['id']."'\">Update</button></td>";

                            echo "</tr>";
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
<div id="manage-inventory" class="card">
    <h2>Manage Inventory
        <button onclick="window.location.href='add_inventory.php'">Add</button>
    </h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Blood Type</th>
                <th>Quantity (units)</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'conn.php';
           
            $sql = "SELECT * FROM register";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$row['id']."</td>";
                    echo "<td>".$row['bloodGroup']."</td>";
                    echo "<td>".$row['unit']."</td>";
                    echo "<td>
                        <button onclick=\"window.location.href='update_availability.php?id=".$row['id']."'\">Update</button>
                        <button onclick=\"window.location.href='delete_availability.php?id=".$row['id']."'\">Delete</button>
                    </td>";
                    echo "</tr>";
                }
            }
            ?>
        </tbody>
    </table>
</div>


        <div id="manage-requests" class="card">
            <h2>Manage Requests</h2>
            <table>
                <thead>
                    <tr>
                        <th>Request ID</th>
                        <th>Name</th>
                        <th>Blood Group</th>
                        <th>Unit</th>
                        <th>Contact</th>
                        <th>City</th>
                        <th>Gender</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM request";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>" . $row['id'] . "</td>";
                            echo "<td>" . $row['name'] . "</td>";
                            echo "<td>" . $row['blood_group'] . "</td>";
                            echo "<td>" . $row['unit'] . "</td>";
                            echo "<td>" . $row['contact'] . "</td>";
                            echo "<td>" . $row['city'] . "</td>";
                            echo "<td>" . $row['gender'] . "</td>";
                            echo  "<td><button onclick=\"window.location.href='req.html'\">Add</button>
                            <button onclick=\"window.location.href='update_request.php?id=".$row['id']."'\">Update</button></td>";
                           
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <script>
        function logout() {
             alert('Logging out');
            
                    window.location.href = 'home.php';
        }
    </script>
   
</body>
</html>

