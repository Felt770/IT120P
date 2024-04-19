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
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pet Products</title>
  <link rel="icon" type="image/x-icon" href="Image/furco_logo.png">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="Style/History style.css">
  <link rel="stylesheet" href="Style/bootstrap.min.css">
  <link rel="stylesheet" href="Style/style.css">
	<style>

header {
  background-color: #f0f0f0;
  padding: 20px;
}
.navbar {
  display: flex;
  align-items: center;
  background-color: #FFC59E;
  padding: 20px; 
  justify-content: space-between;
}

.navbar img.logo {
  margin-right: 30px;
}

.navbar .search-container {
  position: relative;
  flex-grow: 0.6;
  margin-left: 30px;
}

.navbar .search-icon {
  position: absolute;
  left: 10px;
  top: 50%;
  transform: translateY(-50%);
  height: 20px; 
  width: auto;
}

.navbar input[type="search"] {
  border: 2px solid #000;
  border-radius: 20px;
  padding: 10px 20px;
  padding-left: 40px;
  outline: none;
  width: 100%;
  margin-right: 20px;
}

.navbar a {
  text-decoration: none;
  color: black;
  margin: 0 10px;
  padding: 5px 10px;
  border: none;
  background: none;
  font-size: 22px;
}

.navbar .sign-in {
  color: white;
  background-color: #FF8E3C;
  padding: 10px 30px;
  font-size: 14px;
  border: none;
  cursor: pointer;
  margin-left: auto;
  border-radius: 10px;
  box-shadow: 2px 2px 4px #000; 
}

main {
  padding: 20px;
}

.product-list {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}

.product-item {
  width: calc(15% - -20px);
  background-color: #fff;
  border: 1px solid #ddd;
  border-radius: 5px;
  padding: 10px;
  margin-bottom: 10px;
  text-align: center;
}

.product-item img {
  width: 40%;
  margin-bottom: 0px;
}

.product-item h3 {
  font-size: 16px;
  margin-bottom: 5px;
}

.product-item p {
  margin-bottom: 5px;
  font-style: italic;
}

.product-item span {
  font-weight: bold;
}

.view-more {
  text-align: center;
  margin-top: 20px;
}

.view-more a {
  text-decoration: none;
  color: #333;
  font-weight: bold;
}

.payment-info {
  background: #FA8232;
  padding: 10px;
  border-radius: 6px;
  color: black;
  font-weight: bold;
}

.product-details {
  padding: 10px;
}

body {
  background: #EAC0A2;
  margin: 0px;
  min-height: 100vh;
  display: flex;
  flex-direction: column;
}

.cart {
  background: #fff;
}

.p-about {
  font-size: 12px;
}

.table-shadow {
  -webkit-box-shadow: 5px 5px 15px -2px rgba(0,0,0,0.42);
  box-shadow: 5px 5px 15px -2px rgba(0,0,0,0.42);
}

.type {
  font-weight: 400;
  font-size: 10px;
}

label.radio {
  cursor: pointer;
}

label.radio input {
  position: absolute;
  top: 0;
  left: 0;
  visibility: hidden;
  pointer-events: none;
}

label.radio span {
  padding: 1px 12px;
  border: 2px solid #ada9a9;
  display: inline-block;
  color: #8f37aa;
  border-radius: 3px;
  text-transform: uppercase;
  font-size: 11px;
  font-weight: 300;
}

label.radio input:checked + span {
  border-color: #fff;
  background-color: #F9C180;
  color: #fff;
}

.credit-inputs {
  background: rgb(102,102,221);
  color: black;
  border-color: rgb(102,102,221);
}

.credit-inputs::placeholder {
  color: #D9D9D9;
  font-size: 13px;
}

.credit-card-label {
  font-size: 9px;
  font-weight: 300;
}

.form-control.credit-inputs:focus {
  background: rgb(255,255,255);
  border: rgb(102,102,221);
}
.form-control.credit-inputs {
  background: rgb(255,255,255);
  border: rgb(102,102,221);
}

.line {
  border-bottom: 1px solid rgb(102,102,221);
}

.information span {
  font-size: 12px;
  font-weight: 500;
}

.information {
  margin-bottom: 5px;
}

.items {
  -webkit-box-shadow: 5px 5px 4px -1px rgba(0,0,0,0.25);
  box-shadow: 5px 5px 4px -1px rgba(0, 0, 0, 0.08);
}

.spec {
  font-size: 11px;
}
    
    

.delivery-address-container {
    background-color: #F9C180;
    border: 1px solid #CCC;
    border-radius: 10px;
    padding: 10px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    margin-bottom: 10px;
    
}


.delivery-address-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 15px;
}

.delivery-address-header h2 {
    margin: 0;
}

.add-address-button {
    background-color: #F9C180;
    color: #000;
    border: none;
    border-radius: 5px;
    padding: 8px 15px;
    cursor: pointer;
}

.address-name {
    font-weight: bold;
    margin-bottom: 5px;
}

.address-line {
    margin-bottom: 10px;
}
#cartcontainer{
	background-color: #EAC0A2;
}
#product-details{
	background-color: #F9C180;
}

#checkout_button{
	background-color: white;
	color: black;
	
}
#total_price{
	margin-bottom: 210px;
}
	</style>
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
    
	<div class="container mt-5 p-3 rounded cart" id="cartcontainer">
        <div class="row no-gutters">
            <div class="col-md-8">
                <div class="product-details mr-2">
                    <div class="d-flex flex-row align-items-center"><i class="fa fa-long-arrow-left"></i><span class="ml-2">Continue Shopping</span></div>
                    <hr>
                    <h6 class="mb-0">Shopping cart</h6>
                    <div class="d-flex justify-content-between"><span>You have 4 items in your cart</span>
                        <div class="d-flex flex-row align-items-center"><span class="text-black-50">Sort by:</span>
                            <div class="price ml-2"><span class="mr-1">price</span><i class="fa fa-angle-down"></i></div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-3 p-2 items rounded" id="product-details">
                        <div class="d-flex flex-row"><img class="rounded" src="Image/vitality.png" width="40">
                            <div class="ml-2"><span class="font-weight-bold d-block">Vitality</span><span class="spec">High Energy Adult</span></div>
                        </div>
                        <div class="d-flex flex-row align-items-center"><span class="d-block">2</span><span class="d-block ml-5 font-weight-bold">&#8369;100</span><i class="fa fa-trash-o ml-3 text-black-50"></i></div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-3 p-2 items rounded" id="product-details">
                        <div class="d-flex flex-row"><img class="rounded" src="Image/vitality2.png" width="40">
                            <div class="ml-2"><span class="font-weight-bold d-block">Vitality</span><span class="spec">Puppy</span></div>
                        </div>
                        <div class="d-flex flex-row align-items-center"><span class="d-block">2</span><span class="d-block ml-5 font-weight-bold">&#8369;100</span><i class="fa fa-trash-o ml-3 text-black-50"></i></div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-3 p-2 items rounded" id="product-details">
                        <div class="d-flex flex-row"><img class="rounded" src="Image/vitality3.png" width="40">
                            <div class="ml-2"><span class="font-weight-bold d-block">Vitality</span><span class="spec">Classic Adult</span></div>
                        </div>
                        <div class="d-flex flex-row align-items-center"><span class="d-block">1</span><span class="d-block ml-5 font-weight-bold">&#8369;110</span><i class="fa fa-trash-o ml-3 text-black-50"></i></div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-3 p-2 items rounded" id="product-details">
                        <div class="d-flex flex-row"><img class="rounded" src="Image/pedigree.png" width="40">
                            <div class="ml-2"><span class="font-weight-bold d-block">Pedigree&nbsp;</span><span class="spec">Classic</span></div>
                        </div>
                        <div class="d-flex flex-row align-items-center"><span class="d-block">1</span><span class="d-block ml-5 font-weight-bold">&#8369;120</span><i class="fa fa-trash-o ml-3 text-black-50"></i></div>
                    </div>
                </div>
				<div style="text-align: left; padding: 10px;">
    <div class="delivery-address-container">
        <div class="delivery-address-header">
            <h2>Select Delivery Address</h2>
            <button class="add-address-button">+ ADD NEW</button>
        </div>
        <div class="delivery-address-details">
            <div class="address-name">Firstname Lastname</div>
            <div class="address-line">Address line 1, Area</div>
        </div>
		<hr>
		<div class="delivery-address-details">
            <div class="address-name">Firstname Lastname</div>
            <div class="address-line">Address line 1, Area</div>
        </div>
    </div>
</div>
            </div>
            <div class="col-md-4">
                <div class="payment-info">
                    <div class="d-flex justify-content-between align-items-center"><span>Card details</span><img class="rounded" src="Image/user_icon.png" width="30"></div><span class="type d-block mt-3 mb-1">Card type</span><label class="radio"> <input type="radio" name="card" value="payment" checked> <span><img width="30" src="https://img.icons8.com/color/48/000000/mastercard.png"/></span> </label>

<label class="radio"> <input type="radio" name="card" value="payment"> <span><img width="30" src="https://img.icons8.com/officel/48/000000/visa.png"/></span> </label>

<label class="radio"> <input type="radio" name="card" value="payment"> <span><img width="30" src="Image/gcash.png"/></span> </label>


<label class="radio"> <input type="radio" name="card" value="payment"> <span><img width="30" src="https://img.icons8.com/officel/48/000000/paypal.png"/></span> </label>
                    <div><label class="credit-card-label">Name on card</label><input type="text" class="form-control credit-inputs" placeholder="Name"></div>
                    <div><label class="credit-card-label">Card number</label><input type="text" class="form-control credit-inputs" placeholder="0000 0000 0000 0000"></div>
                    <div class="row">
                        <div class="col-md-6"><label class="credit-card-label">Date</label><input type="text" class="form-control credit-inputs" placeholder="12/24"></div>
                        <div class="col-md-6"><label class="credit-card-label">CVV</label><input type="text" class="form-control credit-inputs" placeholder="342"></div>
                    </div>
                    <hr class="line">
                    <div class="d-flex justify-content-between information"><span>Subtotal</span><span>&#8369;430</span></div>
                    <div class="d-flex justify-content-between information"><span>Shipping</span><span>&#8369;50</span></div>
                    <div class="d-flex justify-content-between information" id="total_price"><span>Total(Incl. taxes)</span><span>&#8369;480</span></div><button class="btn btn-primary btn-block d-flex justify-content-between mt-3" id="checkout_button" type="button"><span>&#8369;480</span><span>Checkout<i class="fa fa-long-arrow-right ml-1"></i></span></button></div>
            </div>
        </div>
    </div>
 
  <footer>
  <div class="container">
    <div class="row">
	 <div class="col-md-1">
        <svg width="87" height="75" viewBox="0 0 87 75" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path opacity="0.4" d="M69.1661 49.1251C67.0273 38.0938 54.7386 29.125 41.7611 29.125C27.6597 29.125 15.2623 38.9688 14.066 51.0938C13.5948 55.7813 15.3348 60.2188 18.9235 63.5626C22.476 66.9063 27.4785 68.7501 32.916 68.7501H49.8811C56.0073 68.7501 61.3723 66.6876 65.0336 62.9688C68.6948 59.2501 70.1448 54.3126 69.1661 49.1251Z" fill="#FF8E3C"/>
			<path d="M37.2635 24.5625C43.1295 24.5625 47.8848 20.4631 47.8848 15.4062C47.8848 10.3494 43.1295 6.25 37.2635 6.25C31.3976 6.25 26.6423 10.3494 26.6423 15.4062C26.6423 20.4631 31.3976 24.5625 37.2635 24.5625Z" fill="#292D32"/>
			<path d="M61.4075 28.2183C66.2926 28.2183 70.2525 24.8044 70.2525 20.5933C70.2525 16.3821 66.2926 12.9683 61.4075 12.9683C56.5225 12.9683 52.5625 16.3821 52.5625 20.5933C52.5625 24.8044 56.5625 28.2183 61.4075 28.2183Z" fill="#292D32"/>
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
          <a href="Home.php">Home</a>
          <a href="">Subscriptions</a>
          <a href="Product.php">Products</a>
          <a href="Order History page.php">My Orders</a>
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
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script>
    

  </script>
</body>

</html>
