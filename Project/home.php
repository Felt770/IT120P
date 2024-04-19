<?php 
include('Php/functions.php');
?>
<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
		<title>Home</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="Style/bootstrap.min.css">
        <link rel="stylesheet" href="Style/style.css">
        <link rel="stylesheet" href="Style/home.css">
        
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
    <div class="banner"></div>
    <div class="body">
        <h1 style="font-size: 76px;">FURCO</h1>
        <p>A family owned business, looking to give pets and pet owners their wants and needs anytime!</p>
    </div>
    <?= template_footer() ?>
</body>
</html>