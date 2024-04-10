<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Order Tracker</title>
  <link rel="stylesheet" href="Style/Tracker style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>

<body>
    <div class="navbar">
    <a href="#"><img src="Image/furco_logo.png" alt="Furco Logo"> </a>
          <div class="search-bar">
            <input type="text" placeholder="Search...">
            <div class="search-btn">
              <i class="fa fa-search"></i>
            </div>
          </div>
          <a href="Home page.php">Home</a>
          <a href="Subscription page.php">Subscription</a>
          <a href="Product page.php">Products</a>
          <a href="Tracker page.php" class="active">Tracker</a>
          <i class='far fa-user-circle' style='font-size:48px;'></i>
    </div>

  <main>
    <div class="container2">
      <div class="order-details">
        <h2>Order #<span id="order-number"><?php echo $order_data['order_number']; ?></span></h2>
        <p>Total: $<span id="order-total"><?php echo $order_data['total']; ?></span></p>
      </div>
      <div class="order-activity">
        <ul>
          <?php foreach ($order_activity_data as $activity) : ?>
            <li>
              <span class="activity-status <?php echo $activity['status']; ?>"><?php echo $activity['description']; ?></span>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
  </main>

  <footer>
    <div class="container">
      <p>&copy; 2024 Furco. All Rights Reserved.</p>
    </div>
  </footer>
</body>

</html>