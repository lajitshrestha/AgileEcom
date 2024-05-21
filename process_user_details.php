<?php
include_once "./connection/connect.php";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize form inputs
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact_number = $_POST['contact_number'];
    $address = $_POST['address'];
    $payment_method = $_POST['payment_method']; // Retrieve payment method from form

    // Sanitize inputs to prevent SQL injection
    $name = mysqli_real_escape_string($conn, $name);
    $email = mysqli_real_escape_string($conn, $email);
    $contact_number = mysqli_real_escape_string($conn, $contact_number);
    $address = mysqli_real_escape_string($conn, $address);

    // Insert data into the database
    $sql = "INSERT INTO orders (delivered_to, email_address, phone_no, deliver_address, pay_method) 
            VALUES ('$name', '$email', '$contact_number', '$address', '$payment_method')"; // Include payment method in SQL query
    if (mysqli_query($conn, $sql)) {
        // Data inserted successfully, display confirmation message
        echo "Your product will soon be delivered.";
    } else {
        // Error occurred while inserting data
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
} else {
    // If form is not submitted, redirect user back to the form page
    header("Location: user_details_form.php");
    exit();
}

?>
