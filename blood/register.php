<?php
session_start();
$servername="localhost";
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
 $sql_count="SELECT COUNT(*) AS total FROM register";
 $result_count=mysqli_query($conn,$sql_count);
 $row_count=mysqli_fetch_assoc($result_count);
 $total_items=$row_count['total'];

 $id=$total_items+1;
 $fullName=$_POST['fullName'];
 $email=$_POST['email'];
 $username=$_POST['username'];
 $password=$_POST['password'];
 $gender=$_POST['gender'];
 $bloodGroup=$_POST['bloodGroup'];
 $contact=$_POST['contact'];
 $unit=$_POST['unit'];
 $role=$_POST['role'];

//Check whether user is already registered

$sql_u = "SELECT * FROM register WHERE username='$username'";
$sql_e = "SELECT * FROM register WHERE email='$email'";

$res_u = mysqli_query($conn, $sql_u);
$res_e = mysqli_query($conn, $sql_e);

if (mysqli_num_rows($res_u) > 0) {
    echo "<script>alert('Sorry... username/email is already taken...')</script>";      
  }else if(mysqli_num_rows($res_e) > 0){
    echo "<script>alert('Sorry... email already taken..')</script>";        
  }else{

 $sql="INSERT INTO register(id,fullName,email,username,password,gender,bloodGroup,contact,unit,role)
  VALUES($id,'$fullName','$email','$username','$password','$gender','$bloodGroup','$contact','$unit','$role')";

if(mysqli_query($conn,$sql))
{
	echo "<script>alert('Registered Successfully')</script>";
    $_SESSION["username"]=$username;

    //Redirect after checking form
    header("Location: home.php");

}else{
	echo "error:".$sql."<br>".mysqli_error($conn);
}
  }
}

mysqli_close($conn);


?>