// This code would typically be placed in a separate file (e.g., "fetch_order_data.php") 
// and included using PHP's "include" or "require" functions.
<?php
// Connect to your database
$conn = mysqli_connect("your_hostname", "your_username", "your_password", "your_database");

// Retrieve order details based on a specific order ID (e.g., from a query string or session variable)
$order_id = $_GET['order_id']; // Example of getting order ID from query string
$sql = "SELECT * FROM orders WHERE order_id = $order_id";
$result = mysqli_query($conn, $sql);
$order_data = mysqli_fetch_assoc($result);

// Retrieve order activity log for the given order ID
$sql_activity = "SELECT * FROM order_activity WHERE order_id = $order_id";
$result_activity = mysqli_query($conn, $sql_activity);
$order_activity_data = mysqli_fetch_all($result_activity, MYSQLI_ASSOC);

// Close the database connection
mysqli_close($conn);
?>
