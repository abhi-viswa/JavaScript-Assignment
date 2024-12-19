<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fullName = htmlspecialchars($_POST['fullName']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $dob = htmlspecialchars($_POST['dob']);
    $gender = htmlspecialchars($_POST['gender']);
    $message = htmlspecialchars($_POST['message']);

    echo "<h2>Application Submitted Successfully</h2>";
    echo "<p><strong>Full Name:</strong> $fullName</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Phone:</strong> $phone</p>";
    echo "<p><strong>Date of Birth:</strong> $dob</p>";
    echo "<p><strong>Gender:</strong> $gender</p>";
    echo "<p><strong>Message:</strong> $message</p>";
} else {
    echo "<p>Invalid request. Please submit the form.</p>";
}
?>
