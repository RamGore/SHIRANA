
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mailto = "gore64643@gmail.com"; // Your email where you want to receive inquiries
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $service_name = $_POST['service_name'];
    $messagee = $_POST['message'];

    $subject = "For Services Inquiry";
    $user_message = "Dear " . $name . ",\n\nThank you for your inquiry regarding the service '" . $service_name . "'. We will get back to you shortly.\n\nBest regards,\n WebsarITSolutions";

    // Send email to the person who filled the form
    $user_subject = "Thank you for your inquiry";
    $user_headers = "From: contact@websartech.com";
    $user_result = mail($email, $user_subject, $user_message, $user_headers);

    // Send email to your email address
    $message = "Name of Person: " . $name . "\n"
        . "Email: " . $email . "\n"
        . "Mobile: " . $mobile . "\n"
        . "Name of Service: "  . $service_name . "\n"
        . "Message: "  . $messagee;

    $headers = "From: " . $email;

    $result1 = mail($mailto, $subject, $message, $headers);

    if ($result1 && $user_result) {
        $success = "Your message was sent successfully!";
        header('Location: thankyou-page.html');
    } else {
        $failed = "Sorry! Message was not sent. Please try again later.";
    }
}
 else {
         echo "Invalid request.";
    }

?>