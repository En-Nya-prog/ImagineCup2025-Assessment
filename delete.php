<?php
include 'db.php';

$id = $_GET['id'];
$sql = "DELETE FROM students WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Record Deleted!'); window.location='display.php';</script>";
} else {
    echo "Error deleting record: " . $conn->error;
}
$conn->close();
?>
