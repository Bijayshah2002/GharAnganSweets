<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "gharangansweets";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $people = $_POST['people'];
    $time = $_POST['time'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Insert data into the reservation table
    $sql = "INSERT INTO reservation (People, Date, Time, Name, Phone, Email) 
            VALUES ('$people', '$date', '$time', '$name', '$phone', '$email')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>
        alert('successfully reserved. We will contact you soon for confirmation.');
       </script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
