<?php
include 'db.php';
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM students WHERE id=$id");
$row = $result->fetch_assoc();

if (isset($_POST['update'])) {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];

    $sql = "UPDATE students SET fullname='$fullname', email='$email',username='$username', gender='$gender', phone='$phone' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Record Updated!'); window.location='display.php';</script>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Edit User</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
  <h2>Edit User</h2>
  <form method="POST">
    <label>Full Name:</label>
    <input type="text" name="fullname" value="<?= $row['fullname']; ?>" required>

    <label>Email:</label>
    <input type="email" name="email" value="<?= $row['email']; ?>" required>

    <label>Username:</label>
    <input type="text" name="username" value="<?= $row['username']; ?>" required>

    <label>Gender:</label>
    <select name="gender" required>
      <option value="Male" <?= $row['gender'] == 'Male' ? 'selected' : '' ?>>Male</option>
      <option value="Female" <?= $row['gender'] == 'Female' ? 'selected' : '' ?>>Female</option>
    </select>

    <label>Phone:</label>
    <input type="text" name="phone" value="<?= $row['phone']; ?>" required> 
  

    <button type="submit" name="update">Update</button>
  </form>
</div>
</body>
</html>
