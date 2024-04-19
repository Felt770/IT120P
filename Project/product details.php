<?php 
include('Php/functions.php');
$conn = db_connect();

function getProductDetails($conn, $product_id) {
    // Prepare a statement to fetch the product details
    $stmt = $conn->prepare("SELECT * FROM products WHERE id = ?");
    $stmt->bind_param("i", $product_id);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->fetch_assoc();
}

function addToCart($conn, $product_id, $user_id, $quantity, $size, $subscription) {
    // Insert into the cart table
    $stmt = $conn->prepare("INSERT INTO cart (user_id, product_id, quantity, size, subscription) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("iiiss", $user_id, $product_id, $quantity, $size, $subscription);
    $stmt->execute();
    
    // Insert into the subscriptions table if the subscription is selected
    if ($subscription !== 'no_subscription') {
        $subscription_details = "Size: $size, Subscription: $subscription"; // Customize as needed
        $stmt = $conn->prepare("INSERT INTO subscriptions (user_id, product_id, subscription_details) VALUES (?, ?, ?)");
        $stmt->bind_param("iis", $user_id, $product_id, $subscription_details);
        $stmt->execute();
    }
}

// Check if the 'id' GET parameter is set
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $product_id = $_GET['id'];
    $product = getProductDetails($conn, $product_id);

    // If no product is found, redirect to the products page or display an error
    if (!$product) {
        header("Location: products.php");
        exit;
    }
    
    // If form data has been submitted, add to cart
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        session_start();
        $user_id = $_SESSION['user_id'] ?? null; // Replace with actual user session variable
        $quantity = $_POST['quantity'] ?? 1;
        $size = $_POST['size'] ?? 'default_size'; // Ensure you have a default size or handle this appropriately
        $subscription = $_POST['subscription'] ?? 'no_subscription';
        
        if ($user_id) {
            addToCart($conn, $product_id, $user_id, $quantity, $size, $subscription);
            // Redirect to shopping cart page after adding to cart
            header("Location: shopping cart.php");
            exit;
        } else {
            // Redirect to login page if not logged in
            header("Location: login.php");
            exit;
        }
    }

} else {
    // No product ID provided, redirect to products page or display an error
    header("Location: products.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>

		<meta charset="utf-8">
		<title>Product Details</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="Style/bootstrap.min.css">
        <link rel="stylesheet" href="Style/Style.css">
        <link rel="stylesheet" href="Style/product details.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
<div class="navbar">
        <img src="Image/furcologo.svg" alt="FURCO Paw Logo" class="logo">
        <h1>FURCO</h1>
        <div class="search-container">
            <img src="Image/furco_search.png" alt="Search" class="search-icon">
            <input type="search" placeholder="Search">
        </div>
        <?php require_once("Php/navigation.php"); ?>
    </div>
    <div class="container">
    <main class="content">
    <div class="row">
        <div class="image-column">
            <div class="image-wrapper">
                <img src="<?= htmlspecialchars($product['image']) ?>" alt="<?= htmlspecialchars($product['name']) ?>" class="product-image"/>
            </div>
        </div>
        <div class="details-column">
            <h1><?= htmlspecialchars($product['name']) ?></h1>
            <p class="brand">Brand: <?= htmlspecialchars($product['brand']) ?></p>
            <p class="category">Category: <?= htmlspecialchars($product['category']) ?></p>
            <p class="availability">Availability: <?= htmlspecialchars($product['availability']) ?></p>
            <p class="price">Price: ₱<?= htmlspecialchars($product['price']) ?></p>
            <form id="add-to-cart-form" method="post" action="add-to-cart.php">
                <input type="hidden" name="product_id" value="<?= htmlspecialchars($product['id']) ?>">
                <label for="size">Size:</label>
                <select name="size" id="size" class="form-control">
                    <option value="small">Small</option>
                    <option value="medium">Medium</option>
                    <option value="large">Large</option>
                </select>
                <label for="subscription">Subscription:</label>
                <select name="subscription" id="subscription" class="form-control">
                    <option value="4_days">Every 4 days</option>
                    <option value="weekly">Weekly</option>
                    <!-- Add more subscription options as needed -->
                </select>
                <label for="quantity">Quantity:</label>
                <input type="number" name="quantity" id="quantity" class="form-control" min="1" value="1">
                <button type="submit" class="btn add-to-cart-btn">Add to Cart</button>
            </form>
        </div>
    </div>
                <div class="description">
                  <h2>Description</h2>
                  <p><?= htmlspecialchars($product['long_description']) ?></p>
                </div>
              </main>
            </div>
          </body>
          </html>