<?php
include('Php/functions.php');

if (!isAdmin()) {
  $_SESSION['msg'] = "You must log in first";
  header('location: login.php');
}

if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['user']);
  header("location: login.php");
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>History</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="Style/History style.css">
  <link rel="stylesheet" href="Style/bootstrap.min.css">
  <link rel="stylesheet" href="Style/style.css">
</head>

<body>
  <div class="navbar">
    <img src="Image/furco_logo.png" alt="FURCO Paw Logo" class="logo">
    <h1>FURCO</h1>
    <div class="search-container">
      <img src="Image/furco_search.png" alt="Search" class="search-icon">
      <input type="search" placeholder="Search">
    </div>
    <?php require_once("Php/navigation.php"); ?>
  </div>

  <main>
    <h1>Order History</h1>
    <section class="order-list">
      <h2>Recent Orders</h2>
      <div class="order-item">
      </div>
      <button class="view-more">View More</button>
    </section>
  </main>
  <?= template_footer() ?>