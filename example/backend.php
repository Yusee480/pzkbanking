<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $referralCode = $_POST['referralCode'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    $agreeTerms = isset($_POST['agreeTerms']) ? "Yes" : "No";
    $registerAsMember = isset($_POST['member']) ? "Yes" : "No";

    // Validation (you can add more validation as per your requirements)

    // Assuming you have a database connection
    // Insert the data into the database
    // Example: $sql = "INSERT INTO users (fullname, email, phoneNumber, referralCode, password, agreeTerms, registerAsMember) VALUES ('$fullname', '$email', '$phoneNumber', '$referralCode', '$password', '$agreeTerms', '$registerAsMember')";
    
    // After successful registration, you can redirect the user to a success page
    // Example: header("Location: registration_success.html");
    // Remember to exit after redirection
}
?>
