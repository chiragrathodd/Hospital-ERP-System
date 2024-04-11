<?php
// update.php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get data from the form
    $edit_id = $_POST['edit_id'];
    $edit_name = $_POST['edit_name'];
    $edit_email = $_POST['edit_email'];

    // Update the record in the database
    $conn = mysqli_connect("localhost:3307", "root", "", "test");
    $query = "UPDATE students SET name = '$edit_name', email = '$edit_email' WHERE id = $edit_id";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo 'Record updated successfully';
    } else {
        echo 'Error updating record: ' . mysqli_error($conn);
    }
} else {
    echo 'Invalid request';
}
?>
