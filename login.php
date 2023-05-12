<?php
    // Database credentials
    $db_host = 'localhost';
    $db_user = 'username';
    $db_pass = 'password';
    $db_name = 'database_name';

    // Establishing a connection to the database
    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // If the login form is submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // SQL query to check if the username and password match
        $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

        // Executing the query
        $result = mysqli_query($conn, $sql);

        // Checking the result
        if (mysqli_num_rows($result) > 0) {
            // If the user is authenticated, redirect to the dashboard page
            header('Location: dashboard.php');
            exit;
        } else {
            // If the user is not authenticated, display an error message
            echo "Invalid username or password.";
        }
    }

    // Closing the database connection
    mysqli_close($conn);
?>
