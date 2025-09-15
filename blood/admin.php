<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN LOGIN</title>
<script>
        function preventBack() {
            window.history.forward(); 
        }
          
        setTimeout("preventBack()", 0);
          
        window.onunload = function () { null };
    </script>
</head>
<body>
<style>

body{
    width: 90%;
    background-image: url("images/adminbg2.jpg");
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    height: 95vh;
}

.form{
    width: 300px;
    height: 400px;
    background: linear-gradient(to top, rgba(0,0,0,0.8)50%,rgba(0,0,0,0.8)50%);
    position: absolute;
    top:200px;
    left:600px;
    border-radius: 10px;
    padding: 20px;
    

}

.form h2{
    width:90%;
    font-family: 'Times New Roman';
    text-align: center;
    color: orange;
    font-size: 22px;
    background-color: white;
    border-radius: 10px;
    margin: 2px;
    padding: 8px;

}

 .h{
    width: 100%;
    height: 75px;
    background: transparent;
    border-bottom: 1px solid #ff7200;
    border-top: none;
    border-right: none;
    border-left:none;
    color:#fff;
    font-size: 15px;
    letter-spacing: 1px;
    margin-top: 30px;
    font-family: 'Times New Roman';
    border-radius:10px;
}
.h:focus{
    outline: none;
}

::placeholder{
    color:#fff;
    font-family: 'Times New Roman';
    
}

.btnn{
    width: 300px;
    height: 40px;   
    
    background: #ff7200;
    border:none;
    margin-top: 70px;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
    color:#fff;
  
}

.btnn:hover{
    background: #fff;
    color:#ff7200;
}

.btnn a{
    text-decoration: none;
    color: black;
    font-weight: bold;
}

.form .link{
    font-family: 'Times New Roman';
    font-size: 17px;
    padding-top: 20px;
    text-align: center;
    color: #fff;
}

.form .link a{
    text-decoration: none;
    color:#ff7200
}



.helloadmin{
    width: 1500px;
    height: 100%;
    margin-top: 60px;
    text-align: center;
}
.helloadmin h1{
    margin-top: 650px;
    margin-left: 40px;
    display: inline;
    font-family: 'Times New Roman';
    font-size: 50px;
    color: white;
}

    .back {
    width: 250px;
    height: 40px;
    background: transparent;
    border: none;
    margin-top: 10PX;
    margin-left: 25PX;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
    color: white;
}

.back a{
    text-decoration: none;
    color: white;
    font-weight: bold;
}
</style>

<?php
require_once('conn.php');
session_start();  // ✅ Always start session at the top

if (isset($_POST['adlog'])) {
    $id = $_POST['adid'];
    $pass = $_POST['adpass'];
    
    if (empty($id) || empty($pass)) {
        echo '<script>alert("Please fill the blanks")</script>';
    } else {
        $query = "SELECT * FROM admin WHERE ADMIN_ID='$id'";
        $res = mysqli_query($conn, $query);

        if ($row = mysqli_fetch_assoc($res)) {
            $db_password = $row['ADMIN_PASSWORD'];

            if ($pass == $db_password) {
                // ✅ Save session values
                $_SESSION['admin_id'] = $row['ADMIN_ID'];
                $_SESSION['admin_name'] = $row['ADMIN_NAME']; // optional, if you have this column

                echo '<script>alert("Welcome ADMINISTRATOR!");</script>';
                header("Location: adminpanel.php");
                exit(); // ✅ Important to stop script after redirect
            } else {
                echo '<script>alert("Enter a proper password")</script>';
            }
        } else {
            echo '<script>alert("Invalid user id or password")</script>';
        }
    }
}
?>

    <div class="helloadmin">
    <h1>HELLO ADMIN!</h1></div>

    
    <form class="form" method="POST">
        <h2>Admin Login</h2>
        <input class="h" type="text" name="adid" placeholder="Enter admin user id">
        <input class="h" type="password" name="adpass" placeholder="Enter admin password">
        <input type="submit" class="btnn" value="LOGIN" name="adlog" >
        <button class="back"><a href="home.php">Home</a></button>
    </form>
    
    

</body>
</html>