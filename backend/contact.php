<?php

require_once('connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Establish database connection
    $conn = connect();

    // Retrieve form data
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $mobile = mysqli_real_escape_string($conn, $_POST["mobile"]);
    $subject = mysqli_real_escape_string($conn, $_POST["subject"]);
    $message = mysqli_real_escape_string($conn, $_POST["message"]);

    // Prepare SQL query
    $sql = "INSERT INTO contact (name, email, mobile, subject, message) 
            VALUES ('$name', '$email', '$mobile', '$subject', '$message')";

    // Execute SQL query
    if ($conn->query($sql) === TRUE) {
        // Send email
        $mailto = "gore64643@gmail.com";
        $subject = "For " . $subject;
        $email_message = "Full Name: " . $name . "\n"
            . "Email: " . $email . "\n"
            . "Mobile No.: " . $mobile . "\n"
            . "Name of Subject: " . $subject . "\n"
            . "Message : " . $message;
        $headers = "From: " . $email;

        $result1 = mail($mailto, $subject, $email_message, $headers);

        if ($result1) {
            $response = array(
                'success' => true,
                'message' => 'Your message has been sent.'
            );
        } else {
            $response = array(
                'success' => false,
                'message' => 'Error: Message not sent. Please try again later.'
            );
        }
    } else {
        $response = array(
            'success' => false,
            'message' => "Error: " . $sql . "<br>" . $conn->error
        );
    }

    // Close database connection
    $conn->close();

    // Send JSON response
    echo json_encode($response);
}


?>