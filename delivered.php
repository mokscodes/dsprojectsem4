<?php
// Assuming you already have a database connection stored in $con
require 'connection.php';
if (isset($_POST['mark_delivered'])) {
    $orderid = $_POST['orderid'];

    // Update the users_items table to mark the order as delivered
    $update_query = "UPDATE users_items SET delivery = '1' WHERE orderid = $orderid";
    $update_result = mysqli_query($con, $update_query);

    if ($update_result) {
        // Marking as delivered successful
        echo "<script>alert('Order marked as delivered.');</script>";
        // Redirect to the same page or any other page as needed
        header("Location: compdash.php");
        exit();
    } else {
        // Failed to mark as delivered
        echo "<script>alert('Failed to mark order as delivered.');</script>";
    }
}

// Close the database connection
mysqli_close($con);
?>
