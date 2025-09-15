<?php
$servername="localhost:3306";
$username="root";
$password="";
$dbname="bloodbank";
$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn)
{
    die("Connection failed:".mysqli_connect_error());
}


 $sql="SELECT * FROM request";
$result=mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0) {
    // Output data of each row
    echo "<table border='1'>";
    echo "<tr><th>Name</th><th>Email</th><th>Username</th><th>Password</th><th>Blood Group</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["blood_group"] . "</td>";
        echo "<td>" . $row["contact"] . "</td>";
        echo "<td>" . $row["city"] . "</td>";
        echo "<td>" . $row["gender"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

mysqli_close($conn);
?>