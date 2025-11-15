<?php
include 'db.php';

if (isset($_POST['submit'])) {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm_password'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];

    // Validate passwords
    if ($password !== $confirm) {
        echo "<script>alert('Passwords do not match!'); window.history.back();</script>";
        exit();
    }

    // Hash password before storing and for security purposes
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO students (fullname, email, username, password, gender, phone)
            VALUES ('$fullname', '$email', '$username', '$hashed_password', '$gender', '$phone')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('User Registered Successfully!'); window.location='display.php';</script>";
    } else {
        echo "Error: " . $conn->error;
    }
}
$conn->close();
?>
