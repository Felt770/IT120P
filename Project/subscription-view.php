<?php 
include('Php/functions.php');
?>
<?php 
    $subscriptions = [
        ['id' => 1,
            'name' => 'Whiskas', 
            'description' => 'Ocean Fish Flavor Loaf', 
            'price' => 80, 
            'image' => 'Image/whiskas.png',
            'arrival' => 'Monday, May 20', 
            'address-line-1' => '101 Emerald St. Brgy Dolores,',
            'address-line-2' => 'San Fernando, Pampanga'],
        ['id' => 2,
            'name' => 'Vitality', 
            'description' => 'Classic', 
            'price' => 100, 
            'image' => 'Image/vitality-1.png',
            'arrival' => 'Monday, May 20', 
            'address-line-1' => '101 Emerald St. Brgy Dolores,',
            'address-line-2' => 'San Fernando, Pampanga'],
        ['id' => 3,
            'name' => 'Pedigree', 
            'description' => 'Adult', 
            'price' => 120, 
            'image' => 'Image/pedigree.png',
            'arrival' => 'Monday, May 20', 
            'address-line-1' => '101 Emerald St. Brgy Dolores,',
            'address-line-2' => 'San Fernando, Pampanga'],
        ['id' => 4,
            'name' => 'Vitality', 
            'description' => 'High Energy', 
            'price' => 130, 
            'image' => 'Image/vitality-2.png',
            'arrival' => 'Monday, May 20', 
            'address-line-1' => '101 Emerald St. Brgy Dolores,',
            'address-line-2' => 'San Fernando, Pampanga'],
        ['id' => 5,
            'name' => 'Whiskas', 
            'description' => 'Ocean Fish Flavor Loaf', 
            'price' => 80, 
            'image' => 'Image/whiskas.png',
            'arrival' => 'Monday, May 20', 
            'address-line-1' => '101 Emerald St. Brgy Dolores,',
            'address-line-2' => 'San Fernando, Pampanga'],
        ['id' => 6,
            'name' => 'Vitality', 
            'description' => 'Classic', 
            'price' => 100, 
            'image' => 'Image/vitality-1.png',
            'arrival' => 'Monday, May 20', 
            'address-line-1' => '101 Emerald St. Brgy Dolores,',
            'address-line-2' => 'San Fernando, Pampanga'],
        ['id' => 7,
            'name' => 'Pedigree', 
            'description' => 'Adult', 
            'price' => 120, 
            'image' => 'Image/pedigree.png',
            'arrival' => 'Monday, May 20', 
            'address-line-1' => '101 Emerald St. Brgy Dolores,',
            'address-line-2' => 'San Fernando, Pampanga'],
        ['id' => 8,
            'name' => 'Vitality', 
            'description' => 'High Energy', 
            'price' => 130, 
            'image' => 'Image/vitality-2.png',
            'arrival' => 'Monday, May 20', 
            'address-line-1' => '101 Emerald St. Brgy Dolores,',
            'address-line-2' => 'San Fernando, Pampanga']
    ]; 

    $id = $_GET['id'] ?? null;

    // Find the subscription with the matching ID
    $selectedSubscription = null;
    foreach ($subscriptions as $subscription) {
        if ($subscription['id'] == $id) {
            $selectedSubscription = $subscription;
            break;
        }
    }

    // If no subscription found, redirect back to subscriptions.php
    if (!$selectedSubscription) {
        header('Location: subscriptions.php');
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/subscription-view.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Subscription Details</title>
    <link rel="icon" type="image/x-icon" href="Image/furco_logo.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body>
    <div class="navbar">
        <img src="Image/furco_logo.png" alt="FURCO Paw Logo" class="logo">
        <h1>FURCO</h1>
        <div class="search-container">
            <img src="Image/furco_search.png" alt="Search" class="search-icon">
            <input type="search" placeholder="Search">
        </div>
        <a href="Home.php">Home</a>
        <a href="#">Subscriptions</a>
        <a href="Product.php">Products</a>
        <a href="Order History page.php">My Order</a>
        <button><img src="Image/furco_cart.png" alt="FURCO Cart" class="cart"></button>
        <button><img src="Image/furco_profile.png" alt="FURCO Profile" class="profile"></button>
    </div>    
  
    <main>
        <h1>Subscription Details</h1>

        <a href="subscriptions.php">
            <button id="back-btn">BACK</button>
        </a>
        
        <div class="subscription-details">
            <div class="subscription-info">
                <h2><?php echo $selectedSubscription['name']; ?></h2>
                <p class="desc"><?php echo $selectedSubscription['description']; ?></p>
                <span>Next Delivery Will Arrive By</span>
                <p><?php echo $selectedSubscription['arrival']; ?></p>
                <button id="skip-btn">SKIP NEXT DELIVERY</button>
            </div>
            <div class="subscription-img">
                <img src="<?php echo $selectedSubscription['image']; ?>" alt="<?php echo $selectedSubscription['name']; ?>">
            </div>
        </div>

        <hr id="hr" align="left">
        
        <div class="subscription-details">
            <div class="subscription-info">
                <span>Shipping Address</span>
                <button id="change-btn">CHANGE</button><br>
                <span><?php echo $selectedSubscription['address-line-1']; ?></span><br>
                <span><?php echo $selectedSubscription['address-line-2']; ?></span>
            </div>
        </div>
        
        <hr id="hr" align="left">

        <div class="subscription-details">
            <div class="subscription-info">
                <span>Payment Method</span><br>
                <span>Card Ending in 1008<br>
            </div>
        </div>

        <hr id="hr" align="left">

        <div class="subscription-details">
            <div class="subscription-info">
                <span>Change Your Delivery Schedule</span><br>
                <select id="sub-qty" name="subscription-qty">
                    <option value="1">1 Unit</option>
                    <option value="2">2 Unit</option>
                    <option value="3">3 Unit</option>
                    <option value="4">4 Unit</option>
                    <option value="5">5 Unit</option>
                </select>

                <select id="sub-freq" name="subscription-freq">
                    <option value="1 week">Every 1 Week</option>
                    <option value="2 weeks">Every 2 Weeks</option>
                    <option value="3 weeks">Every 3 Weeks</option>
                    <option value="1 month">Every 1 Month</option>
                    <option value="5 weeks">Every 5 Weeks</option>
                    <option value="6 weeks">Every 6 Weeks</option>
                    <option value="7 weeks">Every 7 Weeks</option>
                    <option value="2 months">Every 2 Months</option>
                </select> 

                <br>

                <button id="save-btn">SAVE CHANGES</button>
            </div>

        </div>
        <hr id="hr" align="left">
        
        <button id="cancel-btn">CANCEL SUBSCRIPTION</button>

        
        
    </main>
    <?= template_footer() ?>