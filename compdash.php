<?php
    session_start();
    require "connection.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Company Dashboard</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
            <?php
                require 'header2.php';
            ?>
            <div class="container">
                <div class="jumbotron">
                    <h1>Welcome to the Company Dashboard</h1>
                    <p>Check and monitor orders.</p>
                </div>
            </div>
            <div class="container">
    <div class="row">
        <?php

        // Query to fetch order details from user_item table
        $order_query = "SELECT * FROM (users_items ut iNNER JOIN items it ON it.id = ut.item_id)INNER JOIN users pt ON pt.id = ut.user_id";
        $order_result = mysqli_query($con, $order_query);

        // Check if there are any orders
        if (mysqli_num_rows($order_result) > 0) {
            // Loop through each row in the result set
            while ($order_row = mysqli_fetch_assoc($order_result)) {
                // Output HTML for each order
                ?>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <center>
                            <div class="caption">
                                <h3><?php echo $order_row['name']; ?></h3>
                                <p>Price: Rs. <?php echo $order_row['price']; ?></p>
                                <p>Product: <?php echo $order_row['itname']; ?></p>
                                <p>Status: <?php echo $order_row['status']; ?></p>
                                <?php if ($order_row['delivery'] == '0') { ?>
                    <!-- Form to mark order as delivered -->
                    <form action="delivered.php" method="post">
                        <input type="hidden" name="orderid" value="<?php echo $order_row['orderid']; ?>">
                        <button type="submit" class="btn btn-primary" name="mark_delivered">Mark as Delivered</button>
                    </form>
                <?php } else { ?>
                    <button class="btn btn-success" disabled>Delivered</button>
                <?php } ?>
                            </div>
                        </center>
                    </div>
                </div>
            <?php
            }
        } else {
            // No orders found
            echo "<p>No orders found.</p>";
        }

        // Close the database connection
        mysqli_close($con);
        ?>
    </div>
</div>

        </div>
    </body>
</html>
