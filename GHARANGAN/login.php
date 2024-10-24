<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ghar Angan Sweets - Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            box-sizing: border-box;
        }

        button {
            background-color:orangered;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        .signup-link {
            text-align: center;
            margin-top: 10px;
        }

        .signup-link a {
            color: #3498db;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <form method="post" action="login.php">
        <h2>Login to Ghar Angan Sweets to order online</h2>
        <label for="username">Phone/Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit">Login</button>

        <div class="signup-link">
            <p>Not registered yet? <a href="signup.php">Sign up now</a></p>
            <hr>
            <P><a href="">Forgot password</a></P>
        </div>
    </form>
</body>

</html>

<?php
session_start();

// Database connection details
$servername = "localhost"; // Change this if your database is hosted elsewhere
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password
$dbname = "gharangansweets";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // SQL query to check if username and password match
    $sql = "SELECT * FROM registeration WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Login successful
        $_SESSION['username'] = $username;
        echo "<script> 
        alert('hello ".$username." you are successfully logged in');
        </script>";
         header("Location: index.php?username=" . urlencode($username));
         exit;
       
    } else {
        // Login failed
        echo "<script> alert('wrong username or password'); </script>";
    }
}

// Close the database connection
$conn->close();
?>
