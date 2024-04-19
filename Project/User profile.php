<?php include('Php/functions.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="Style/ShoppingCartStyle.css">
  <link rel="stylesheet" href="Style/style.css">
  <title>Pet Products</title>
  <link rel="icon" type="image/x-icon" href="Image/furco_logo.png">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
	<style>

		
	body {
		margin: 0;
		padding: 0;
		background-color: #EAC0A2;
		}
		
	.container-form{
		margin-left: 30%;
		margin-right: 30%;
		margin-top: 50px;
		margin-bottom: 50px;
	}
	
	.title-container {
		display: flex;
		justify-content: space-between; /* Align items horizontally with space between them */
		align-items: center; /* Align items vertically */
	}

	.title-container h2 {
		margin-right: auto; /* Push the h2 element to the left as much as possible */
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
    
  <main>
  <div class="container-form">
  <div class="title-container">
    <h2>Edit Profile</h2>
	<img src="Image/user_icon.png" width="100" height="100" alt="User Icon" class="logo">
</div>
    <form>
      <div class="form-group">
        <label for="fullName">Full Name:</label>
        <input type="text" class="form-control" id="fullName">
      </div>
      <div class="form-group">
        <label for="emailAddress">Email Address:</label>
        <input type="email" class="form-control" id="emailAddress">
      </div>
      <div class="form-group">
        <label for="address">Address:</label>
        <input type="text" class="form-control" id="address">
      </div>
      <div class="form-group">
        <label for="contactNumber">Contact Number:</label>
        <input type="tel" class="form-control" id="contactNumber">
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="city">City:</label>
          <input type="text" class="form-control" id="city">
        </div>
        <div class="form-group col-md-6">
          <label for="region">Region:</label>
          <input type="text" class="form-control" id="region">
        </div>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control" id="password">
      </div>
      <button type="reset" class="btn btn-secondary">Cancel</button>
      <button type="submit" class="btn btn-primary">Save</button>
    </form>
  </div>
</main>
<?= template_footer() ?>
