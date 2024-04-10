<?php

// Database connection (replace with your details)
$servername = "localhost";
$username = "User";
$password = "123456";
$dbname = "your_database";

// Define variables
$limit = 5; // Number of items per page
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1; // Get current page from GET parameter

// Connect to database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Calculate offset for current page
$offset = ($page - 1) * $limit;

// Fetch products query (replace with your table and columns)
$sql = "SELECT * FROM products LIMIT $limit OFFSET $offset";
$result = $conn->query($sql);

// Display products
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    // Display product details using $row data
    echo "<div class='product-item'>";
    // ... product details ...
    echo "</div>";
  }
} else {
  echo "No products found.";
}

// Check if there are more products
$total_products_sql = "SELECT COUNT(*) FROM products";
$total_result = $conn->query($total_products_sql);
$total_products = $total_result->fetch_row()[0]; // Get total product count

if ($total_products > $page * $limit) {
  echo "<a href='?page=" . ($page + 1) . "' class='view-more'>View More</a>";
}

$conn->close();

?>
