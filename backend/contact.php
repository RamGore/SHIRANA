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

        // Send email to admin
        $adminEmail = "gore64643@gmail.com";
        $adminSubject = "New Enquiry: " . $subject;
        $adminMessage =
            "Dear Admin,\n\n" .
            "We have received a new enquiry through the contact us form on the website. Here are the details:\n\n" .
            "Full Name: " . $name . "\n" .
            "Email: " . $email . "\n" .
            "Mobile No.: " . $mobile . "\n" .
            "Subject: " . $subject . "\n" .
            "Message: " . $message . "\n\n" .
            "Best regards,\n" .
            $name;

        $headers = "From: " . $email;

        $adminEmailResult = mail($adminEmail, $adminSubject, $adminMessage, $headers);

        // Send acknowledgment email to the user
        $userSubject = "Thank you for contacting us";
        $userMessage =
            "Dear " . $name . ",\n\n" .
            "Thank you for reaching out to us. We have received your message and will get back to you shortly.\n\n" .
            "Best regards,\n" .
            "NAGARI VIKAS SEVABHAVI SANSTHA";

        $userEmailResult = mail($email, $userSubject, $userMessage, $headers);

        if ($adminEmailResult && $userEmailResult) {
            header('Location: thankyou.php');
            exit(); // Ensure no further code is executed after the redirect
        } else {
            $response = array(
                'success' => false,
                'message' => 'Sorry! Message was not sent. Please try again later.'
            );
        }

    } else {
        $response = array(
            'success' => false,
            'message' => 'Error: Message not sent. Please try again later.'
        );
    }

    // Close database connection
    $conn->close();

    // Send JSON response
    echo json_encode($response);
}
?>
