<?php include('Php/functions.php'); ?>
<!DOCTYPE html>
<html data-bs-theme="light" lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FURCO</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="Style/styles.min.css">
</head>
<body style="background: url('Image/pawsfull.svg') left / contain no-repeat, rgb(234,192,162);">
<nav class="navbar navbar-expand py-3" style="background: rgb(255,197,158);">
    <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="Image/logo.svg">
            <span style="font-family: Ubuntu, sans-serif; font-weight: bold; font-size: 24px; color: rgb(0,0,0);">FURCO</span>
        </a>
        <input class="form-control-lg" type="search" name="Search" placeholder="Search" style="border-radius: 22px; border: 2px solid rgb(0,0,0); font-family: Poppins, sans-serif; margin-right: auto;">
        <div class="d-flex align-items-center">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="Home.php" style="font-size: 24px; font-family: Poppins, sans-serif; color: rgb(0,0,0);">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="Product.php" style="font-size: 24px; font-family: Poppins, sans-serif; color: rgb(0,0,0);">Products</a></li>
            </ul>
            <a class="btn btn-primary" role="button" href="register.php" style="background: #ff8e3c; font-family: Roboto, sans-serif; width: 114px; height: 43px; border-color: #ff8e3c; border-radius: 22px; box-shadow: 0 5px 10px rgb(0,0,0); font-weight:bold;">Sign Up</a>
        </div>
    </div>
</nav>
    <section class="d-flex justify-content-center align-items-center py-4 py-xl-5" style="min-height: 100vh;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card" style="background: #f9c180; border-radius: 19px; box-shadow: 0 5px 10px;">
                    <div class="card-body">
                        <h2 style="font-family: Poppins, sans-serif; border-bottom: 2px solid; padding-bottom: 10px;">Login</h2>
                        <p>Welcome Back! Sign in to your account.</p>
                        <form method="post" action="login.php">
                            <?php echo display_error(); ?>
                            <div class="mb-3">
                                <label class="form-control-plaintext" style="font-weight: bold; font-family: Poppins, sans-serif;">Email Address *</label>
                                <input class="form-control" type="email" name="email" style="border-radius: 22px; font-family: Poppins, sans-serif;" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-control-plaintext" style="font-weight: bold; font-family: Poppins, sans-serif;">Password *</label>
                                <input class="form-control" type="password" name="password" style="border-radius: 22px; font-family: Poppins, sans-serif;" required>
                            </div>
                            <button class="btn btn-primary w-100" type="submit" style="background: #ff8e3c; font-family: Poppins, sans-serif; border-color: #ff8e3c; border-radius: 22px; color: black; font-weight: bold;">Login</button>
                            <p class="text-muted">Don't have an account? <a href="register.php"><strong>Sign Up</strong></a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <footer class="d-flex justify-content-center align-items-center" style="background: #9e6b2f;padding: 25px;">
        <div class="container">
            <div class="row">
                <div class="col-md-1"><svg width="87" height="75" viewBox="0 0 87 75" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path opacity="0.4" d="M69.1661 49.1251C67.0273 38.0938 54.7386 29.125 41.7611 29.125C27.6597 29.125 15.2623 38.9688 14.066 51.0938C13.5948 55.7813 15.3348 60.2188 18.9235 63.5626C22.476 66.9063 27.4785 68.7501 32.916 68.7501H49.8811C56.0073 68.7501 61.3723 66.6876 65.0336 62.9688C68.6948 59.2501 70.1448 54.3126 69.1661 49.1251Z" fill="#FF8E3C"></path>
			<path d="M37.2635 24.5625C43.1295 24.5625 47.8848 20.4631 47.8848 15.4062C47.8848 10.3494 43.1295 6.25 37.2635 6.25C31.3976 6.25 26.6423 10.3494 26.6423 15.4062C26.6423 20.4631 31.3976 24.5625 37.2635 24.5625Z" fill="#292D32"></path>
			<path d="M61.4075 28.2183C66.2926 28.2183 70.2525 24.8044 70.2525 20.5933C70.2525 16.3821 66.2926 12.9683 61.4075 12.9683C56.5225 12.9683 52.5625 16.3821 52.5625 20.5933C52.5625 24.8044 56.5225 28.2183 61.4075 28.2183Z" fill="#292D32"></path>
			<path d="M74.4923 40.4062C78.3964 40.4062 81.561 37.678 81.561 34.3124C81.561 30.947 78.3964 28.2188 74.4923 28.2188C70.5885 28.2188 67.4235 30.947 67.4235 34.3124C67.4235 37.678 70.5885 40.4062 74.4923 40.4062Z" fill="#292D32"></path>
			<path d="M14.2825 34.313C19.1674 34.313 23.1275 30.8991 23.1275 26.688C23.1275 22.4768 19.1674 19.063 14.2825 19.063C9.39756 19.063 5.4375 22.4768 5.4375 26.688C5.4375 30.8991 9.39756 34.313 14.2825 34.313Z" fill="#292D32"></path>
		</svg></div>
                <div class="col-md-2">
                    <h1 style="color: rgb(255,255,255);">FURCO</h1>
                </div>
                <div class="col-md-3">
                    <h3 class="text-uppercase" style="color: rgb(255,255,255);">CONTACT US</h3>
                    <p style="color: rgb(255,255,255);">Phone: 1234-567-8910<br> BF Paranaque<br></p>
                </div>
                <div class="col-md-3">
                    <h3 class="text-uppercase" style="color: rgb(255,255,255);">OPEN HOURS</h3>
                    <p style="color: rgb(255,255,255);">8am - 8pm<br> Monday-Saturday<br><br> For inquiries during holidays, please contact us! </p>
                </div>
                <div class="col-md-3">
                <h3 class="text-uppercase" style="color: rgb(255,255,255);">QUICK LINKS</h3>
                    <div class="d-grid footer-links"><a href="#" style="color: rgb(255,255,255);">Home</a><br><a href="#" style="color: rgb(255,255,255);">Subscriptions</a><br><a href="#" style="color: rgb(255,255,255);">Products</a><br><a href="#" style="color: rgb(255,255,255);">My Orders</a></div>
                </div>
            </div>
            <hr>
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p style="color: rgb(255,255,255);">© 2024 Furco All rights reserved</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>