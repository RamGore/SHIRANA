<?php

require_once('connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Establish database connection
    // $conn = connect();

    // Retrieve form data
    $name = mysqli_real_escape_string($conn, $_POST["fullname"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $mobile = mysqli_real_escape_string($conn, $_POST["mobile_number"]);
    $service = mysqli_real_escape_string($conn, $_POST["interested_in"]);
    $product = mysqli_real_escape_string($conn, $_POST["product"]);
    $message = mysqli_real_escape_string($conn, $_POST["description"]);

    // Prepare SQL query
    $sql = "INSERT INTO contact (name, email, mobile, service, product, message) 
            VALUES ('$name', '$email', '$mobile', '$service', '$product', '$message')";

    // Execute SQL query
    if ($conn->query($sql) === TRUE) {
        // Send email
        $mailto = "gore64643@gmail.com";
        $subject = "For " . $service . " Service Inquiry ";
        $email_message = "Full Name: " . $name . "\n"
            . "Email: " . $email . "\n"
            . "Mobile No.: " . $mobile . "\n"
            . "Name of Services: " . $service . "\n"
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