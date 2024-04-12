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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/subscriptions.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Your Subscriptions</title>
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
        <h1>Subscriptions</h1>


        <section class="subscription-list">
            <?php foreach ($subscriptions as $subscription): ?>
                <a href = "subscription-view.php?id=<?php echo $subscription['id']; ?>">
                    <div class="subcription-item">
                        <img src="<?php echo $subscription['image']; ?>" alt="<?php echo $subscription['name']; ?>">
                        
                        <div class="subcription-desc">
                            <h3><?php echo $subscription['name']; ?></h3>
                            <p><?php echo $subscription['description']; ?></p>
                            <span class="price">₱<?php echo $subscription['price']; ?> </span>
                        </div>
                    </div>
                </a>
            <?php endforeach; ?>
        </section>
    </main>

    <footer>
        <div class="container">
            <div class="row">
            <div class="col-md-1">
                <svg width="87" height="75" viewBox="0 0 87 75" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.4" d="M69.1661 49.1251C67.0273 38.0938 54.7386 29.125 41.7611 29.125C27.6597 29.125 15.2623 38.9688 14.066 51.0938C13.5948 55.7813 15.3348 60.2188 18.9235 63.5626C22.476 66.9063 27.4785 68.7501 32.916 68.7501H49.8811C56.0073 68.7501 61.3723 66.6876 65.0336 62.9688C68.6948 59.2501 70.1448 54.3126 69.1661 49.1251Z" fill="#FF8E3C"/>
                    <path d="M37.2635 24.5625C43.1295 24.5625 47.8848 20.4631 47.8848 15.4062C47.8848 10.3494 43.1295 6.25 37.2635 6.25C31.3976 6.25 26.6423 10.3494 26.6423 15.4062C26.6423 20.4631 31.3976 24.5625 37.2635 24.5625Z" fill="#292D32"/>
                    <path d="M61.4075 28.2183C66.2926 28.2183 70.2525 24.8044 70.2525 20.5933C70.2525 16.3821 66.2926 12.9683 61.4075 12.9683C56.5225 12.9683 52.5625 16.3821 52.5625 20.5933C52.5625 24.8044 56.5225 28.2183 61.4075 28.2183Z" fill="#292D32"/>
                    <path d="M74.4923 40.4062C78.3964 40.4062 81.561 37.678 81.561 34.3124C81.561 30.947 78.3964 28.2188 74.4923 28.2188C70.5885 28.2188 67.4235 30.947 67.4235 34.3124C67.4235 37.678 70.5885 40.4062 74.4923 40.4062Z" fill="#292D32"/>
                    <path d="M14.2825 34.313C19.1674 34.313 23.1275 30.8991 23.1275 26.688C23.1275 22.4768 19.1674 19.063 14.2825 19.063C9.39756 19.063 5.4375 22.4768 5.4375 26.688C5.4375 30.8991 9.39756 34.313 14.2825 34.313Z" fill="#292D32"/>
                </svg>
            </div>
            <div class="col-md-2">
                
                    <h1>FURCO</h1>
            </div>
            
            <div class="col-md-3">
                <h3 class="text-uppercase">CONTACT US</h3>
                <p>Phone: 1234-567-8910<br>
                BF Paranaque<br>
                </p>
            </div>
            <div class="col-md-3">
                <h3 class="text-uppercase">OPEN HOURS</h3>
                <p>8am - 8pm<br>
                Monday-Saturday<br>
                <br>
                For inquiries during holidays, please contact us!
                </p>
            </div>
            <div class="col-md-3">
                <h3 class="text-uppercase"></h3>
                <br>
                <!-- From Navbar -->
                <div class="footer-links">
                <a href="#">Home</a>
                <a href="#">Subscriptions</a>
                <a href="#">Products</a>
                <a href="#">My Orders</a>
                </div>
            </div>
            </div>
            <hr>
            <div class="row align-items-center">
            <div class="col-md-6">
                <p>&copy; 2024 Furco All rights reserved</p>
            </div>
            
            </div>
        </div>
    </footer>
  
</body>

</html>
