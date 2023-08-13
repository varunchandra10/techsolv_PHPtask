<?php
// Validate inputs
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $full_name = $_POST["full_name"];
    $phone_number = $_POST["phone_number"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];



    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "techsolve";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert data into the database
    $sql = "INSERT INTO contact_form (full_name, phone_number, email, subject, message, ip_address, timestamp)
            VALUES ('$full_name', '$phone_number', '$email', '$subject', '$message', '" . $_SERVER['REMOTE_ADDR'] . "', NOW())";

    if ($conn->query($sql) === TRUE) {
        // Send email notification
        $to = "test@techsolvitservice.com";
        $subject_email = "New Contact Form Submission";
        $message_email = "Name: $full_name\nEmail: $email\nPhone: $phone_number\nSubject: $subject\nMessage: $message";

        mail($to, $subject_email, $message_email);
        $conn->close();
        header("Location: techsolve_task.html?success=true");
        exit;

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        $conn->close();
    }

} else {
    header("Location: techsolve_task.html");
    exit;
}
?>