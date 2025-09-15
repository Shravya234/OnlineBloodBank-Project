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
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=$_POST['name'];
    $mobilenumber=$_POST['mobilenumber'];
    $email=$_POST['email'];
    $message=$_POST['message'];
    $sql="INSERT INTO feedback(name,mobilenumber,email,message) VALUES('$name','$mobilenumber','$email','$message')";

}
     
mysqli_close($conn);
?>