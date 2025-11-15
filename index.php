<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>User Registration Form</h2>

    <form action="insert.php" method="POST">
        <label>Full Name:</label>
        <input type="text" name="fullname" required>

        <label>Email:</label>
        <input type="email" name="email" required>

        <label>Username:</label>
        <input type="text" name="username" required>

        <label>Password:</label>
        <input type="password" name="password" required>

        <label>Confirm Password:</label>
        <input type="password" name="confirm_password" required>

        <label>Gender:</label>
        <div class="gender">
          <input type="radio" name="gender" value="Male" required> Male
          <input type="radio" name="gender" value="Female" required> Female
        </div>

        <label>Phone Number:</label>
        <input type="text" name="phone" required>

        <button type="submit" name="submit">Register</button>
    </form>

    <p><a href="display.php">View Registered Users</a></p>
</div>

</body>
</html>
