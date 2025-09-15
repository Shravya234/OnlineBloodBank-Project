

<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize input data
    $name = htmlspecialchars($_POST['name']);
    $blood_group = htmlspecialchars($_POST['blood_group']);
    $unit = htmlspecialchars($_POST['unit']);
    $contact = htmlspecialchars($_POST['contact']);
    $city = htmlspecialchars($_POST['city']);
    $gender=htmlspecialchars($_POST['gender']);

    // Simple validation to check if all fields are filled (not empty)
    if (!empty($name) && !empty($blood_group)  && !empty($unit) && !empty($contact) && !empty($city) && !empty($gender)) 
    {
        // Here you could insert the data into a database, send an email, etc.
        // For demonstration, let's just display the data
        echo "('Request is submitted successfully . $name ')";
    } else {
        echo "All fields are required.";
    }
} else {
    // Not a POST request, redirect to form or handle differently
    echo "Please submit the form.";
}

?>





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
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	
 $name=$_POST['name'];
 $blood_group=$_POST['blood_group'];
 $unit=$_POST['unit'];
 $contact=$_POST['contact'];
 $city=$_POST['city'];
 $gender=$_POST['gender'];
 $sql="INSERT INTO request(name,blood_group,unit,contact,city,gender) VALUES('$name','$blood_group','$unit','$contact','$city','$gender')";
if(mysqli_query($conn,$sql))
{
	echo"thank you";
}else{
	echo"error:".$sql."<br>".mysqli_error($conn);
}
}
mysqli_close($conn);
?>