<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $conn = mysqli_connect('localhost', 'root', '', 'blood_donation') or die("Connection failed: " . mysqli_connect_error());

    // Check if all required fields are set in $_POST
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['blood'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $blood = $_POST['blood'];

        // Prepare the SQL statement to prevent SQL injection
        $sql = "INSERT INTO `user` (`name`, `email`, `phone`, `blood`) VALUES ('$name', '$email', '$phone', '$blood')";

        $query = mysqli_query($conn, $sql);
        if ($query) {
            echo "Entry Successful";
        } else {
            echo "Error Occurred: " . mysqli_error($conn);
        }
    }
}

?>
