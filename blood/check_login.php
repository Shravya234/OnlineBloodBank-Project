<?php
session_start(); // Start the session (if not already started)

// Check if the user is logged in
if(isset($_SESSION['user_id'])) { // Assuming you have a session variable 'user_id' set when the user logs in
    // User is logged in, so display the logout button
    echo '<a href="logout.php">Logout</a>'; // Assuming 'logout.php' is your logout script
} else {
    // User is not logged in, do nothing or show a login button
}
?>
