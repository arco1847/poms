<!DOCTYPE html>
<html lang="en">

<?php

// Step 1: Create a database connection
$conn = new mysqli("localhost", "root", "", "learn");

if ($conn->connect_error) {
    die("Connection Failed");
}

// Step 2: Retrieve data from the database
$sql = "SELECT Companyname, license_number FROM shipmenttime";
$result = $conn->query($sql);

// Step 3: Check if there is any data

session_start();
$_SESSION['license'] = 'Ship';

$cookie_name = "user";
$cookie_value = "Ship";
$expiration = time() + (86400*2);//expires in 2 days

setcookie($cookie_name, $cookie_value, $expiration, "/");

?>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="work.css">
  <style>

.prtiom{
  background-image: url(portproject2.jpg);
  height: 1000px;
  background-size: cover;
}

.banner{
  border: 4pc;
}



.abc
{
   text-transform: uppercase;
  background-image: linear-gradient(
    -225deg,
    #231557 0%,
    #44107a 29%,
    #ff1361 67%,
    #fff800 100%
  );
  /* background-size: auto auto; */
  background-clip: border-box;
  background-size: 52% ;
  color: #fff;
  background-clip: text;
  text-fill-color: transparent;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  animation: textclip 2s linear infinite;
  display: inline-block;
      font-size: 50px;
}

@keyframes textclip {
  to {
    background-position: 200% center;
  }
}




</style>
</head>
<body>
 <!-- Navbar Start -->
 <nav class="navbar navbar-expand-lg bg-white navbar-light shadow border-top border-5 border-primary sticky-top p-0">
        <a href="index.html" class="navbar-brand bg-primary d-flex align-items-center px-4 px-lg-5">
            <h2 class="abc">Port Management System</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
              
                <a href="profile2.html" class="nav-item nav-link active">Create Profile</a>
                <!-- <a href="index.html" class="nav-item nav-link active">Company Details</a> -->
                <a href="Companydetails.php" class="nav-item nav-link">Submit Details</a>

                <a href="submitpdf.php" class="nav-item nav-link">Submit files</a>
                <a href="about.php" class="nav-item nav-link">About US</a>
                <a href="#" class="nav-item nav-link" id="paymentButton">Payment</a>
<div id="paymentOptions" style="display: none;">
  <button onclick="window.location.href='insert.php?method=Bkash'" class="nav-item nav-link">Bkash</button>
  <button onclick="window.location.href='insert.php?method=Nagad'" class="nav-item nav-link">Nagad</button>
</div>

<script>
  // Get the elements
  var paymentButton = document.getElementById("paymentButton");
  var paymentOptions = document.getElementById("paymentOptions");

  // Add click event listener to paymentButton
  paymentButton.addEventListener("click", function() {
    // Toggle the display style of paymentOptions
    if (paymentOptions.style.display === "none") {
      paymentOptions.style.display = "block";
    } else {
      paymentOptions.style.display = "none";
    }
  });
</script>
                <a href="shipmenttime.php" class="nav-item nav-link">Shipment time</a>

                <div class="nav-item dropdown">
                    <!-- <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
                    <div class="dropdown-menu fade-up m-0">
                        <a href="price.html" class="dropdown-item">Pricing Plan</a>
                        <a href="feature.html" class="dropdown-item">Features</a>
                        <a href="quote.html" class="dropdown-item">Free Quote</a>
                        <a href="team.html" class="dropdown-item">Our Team</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        <a href="404.html" class="dropdown-item">404 Page</a>
                    </div> -->
                </div>
                <!-- <a href="contact.html" class="nav-item nav-link">Contact</a> -->
            
    </nav>
    <!-- Navbar End -->
<div class="prtiom">
<br> 
<div class="content">
            <h1 style="color:Yellow" align-items-center>Port <br>System <br>Management Solution</h1>
            <p class="par" style="color:yellow"><b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt neque 
                 expedita atque eveniet <br> quis nesciunt. Quos nulla vero consequuntur, fugit nemo ad delectus 
                <br> a quae totam ipsa illum minus laudantium?</b></p>

                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                <button class="btn btn-secondary py-md-3 px-md-5 animated slideInRight" style="background-color: green;">Lets Go!</button>



                
</div>
</div>
</div>
  <!-- Fact Start -->
  <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-secondary text-uppercase mb-3">Some Facts</h6>
                    <h1 class="mb-5">#1 Place To Manage All Of Your Shipments</h1>
                    <p class="mb-5">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                    <div class="d-flex align-items-center">
                        <i class="fa fa-headphones fa-2x flex-shrink-0 bg-primary p-3 text-white"></i>
                        <div class="ps-4">
                            <h6>Call for any query!</h6>
                            <h3 class="text-primary m-0">+012 345 6789</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row g-4 align-items-center">
                        <div class="col-sm-6">
                            <div class="bg-primary p-4 mb-4 wow fadeIn" data-wow-delay="0.3s">
                                <i class="fa fa-users fa-2x text-white mb-3"></i>
                                <h2 class="text-white mb-2" data-toggle="counter-up">1234</h2>
                                <p class="text-white mb-0">Happy Clients</p>
                            </div>
                            <div class="bg-secondary p-4 wow fadeIn" data-wow-delay="0.5s">
                                <i class="fa fa-ship fa-2x text-white mb-3"></i>
                                <h2 class="text-white mb-2" data-toggle="counter-up">1234</h2>
                                <p class="text-white mb-0">Complete Shipments</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="bg-success p-4 wow fadeIn" data-wow-delay="0.7s">
                                <i class="fa fa-star fa-2x text-white mb-3"></i>
                                <h2 class="text-white mb-2" data-toggle="counter-up">1234</h2>
                                <p class="text-white mb-0">Customer Reviews</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fact End -->
<!-- Footer Start -->
<div class="container-fluid bg-dark text-light footer pt-5 wow fadeIn" data-wow-delay="0.1s" style="margin-top: 6rem;">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Address</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Services</h4>
                    <!-- <a class="btn btn-link" href="">Air Freight</a> -->
                    <a class="btn btn-link" href="">Sea Freight</a>
                    <!-- <a class="btn btn-link" href="">Road Freight</a> -->
                    <a class="btn btn-link" href="">Logistic Solutions</a>
                    <a class="btn btn-link" href="">Industry solutions</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Our Services</a>
                    <!-- <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Support</a> -->
                </div>
                <!-- <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Newsletter</h4>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved.
                    </div>
                     <div class="col-md-6 text-center text-md-end">
                        /*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        <!-- Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a> -->
                    </div> 
                </div> 
            </div>
        </div>
    </div>
    <!-- Footer End -->
    
<!--
// write*******
session_start(); // Start or resume the session

// Step 1: Create a database connection
$conn = new mysqli("localhost", "root", "", "learn");

if ($conn->connect_error) {
    die("Connection Failed");
}

// Step 2: Retrieve data from the database
$sql = "SELECT Companyname, license_number FROM shipmenttime";
$result = $conn->query($sql);

// Step 3: Check if there is any data
if ($result->num_rows > 0) {
    // Process the data
} else {
    // No data found
}

// Set CSRF token
$token_name = 'csrf_token';
if (!isset($_SESSION[$token_name])) {
    $_SESSION[$token_name] = bin2hex(random_bytes(32));
}

// Validate CSRF token
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!isset($_POST[$token_name]) || !hash_equals($_SESSION[$token_name], $_POST[$token_name])) {
        die("CSRF token validation failed");
    }
}

// Function to sanitize user input
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize input
    $email = sanitize_input($_POST["email"]);
    $password = sanitize_input($_POST["password"]);

    // Input validation
    if (empty($email) || empty($password)) {
        die("Email and password are required");
    }

    // Access control
    $sql = "SELECT * FROM joinn WHERE email = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Authentication successful
        $_SESSION["email"] = $email; // Store user's email in session
        header("Location: dashboard.php");
        exit();
    } else {
        // Authentication failed
        die("Invalid email or password");
    }
}

// Close database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="work.css">
    <style>
        /* Your styles here */
    </style>
</head>
<body>
    
    <form action="****** echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        
        <input type="hidden" name="****** echo $token_name; ?>" value="******* echo $_SESSION[$token_name]; ?>">
        
    </form>
</body>
</html>

-->


</body>
</html