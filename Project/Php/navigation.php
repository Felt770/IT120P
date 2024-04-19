<?php
if (isLoggedIn()) {
    // Common links for both admin and user
    echo '<a href="Home.php">Home</a>';
    echo '<a href="Products.php">Products</a>';
    // Conditional links based on admin status
    if (isAdmin()) {
        // Only show logout for admin
        echo '<a href="Php/logout.php" class="logout">Logout</a>';
    } else {
        // Additional options for regular user
        echo '<a href="subscriptions.php">Subscription</a>';
        echo '<a href="OrderHistoryPage.php">My Order</a>';
        echo '<button><img src="Image/furco_cart.png" alt="FURCO Cart" class="cart"></button>';
        echo '<button><img src="Image/furco_profile.png" alt="FURCO Profile" class="profile"></button>';
        echo '<a href="Php/logout.php" class="logout">Logout</a>';
    }
} else {
    // Links for visitors
    echo '<a href="Home.php">Home</a>';
    echo '<a href="Products.php">Products</a>';
    // Determine if on the login page to show "Register" instead of "Login"
    $currentPage = basename($_SERVER['PHP_SELF']);
    if ($currentPage == 'login.php') {
        echo '<a href="register.php" class="login">Register</a>';
    } else {
        echo '<a href="login.php" class="login">Login</a>';
    }
}
?>
