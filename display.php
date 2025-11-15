<?php
include 'db.php';
$result = $conn->query("SELECT * FROM students");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Registered Users</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
  <h2>Registered Users</h2>
  <table border="1" width="100%" cellpadding="8" cellspacing="0">
    <tr style="background-color:#5563de; color:white;">
      <th>ID</th>
      <th>Full Name</th>
      <th>Email</th>
      <th>Username</th>
      <th>Gender</th>
      <th>Phone</th>
      <th>Actions</th>
    </tr>

    <?php while($row = $result->fetch_assoc()) { ?>
      <tr>
        <td><?= $row['id']; ?></td>
        <td><?= $row['fullname']; ?></td>
        <td><?= $row['email']; ?></td>
        <td><?= $row['username']; ?></td>
        <td><?= $row['gender']; ?></td>
        <td><?= $row['phone']; ?></td>
        <td>
          <a href="edit.php?id=<?= $row['id']; ?>">Edit</a> |
          <a href="delete.php?id=<?= $row['id']; ?>" onclick="return confirm('Delete this user?')">Delete</a>
        </td>
      </tr>
    <?php } ?>
  </table>
  <p><a href="index.php">← Back to Registration</a></p>
</div>

</body>
</html>
