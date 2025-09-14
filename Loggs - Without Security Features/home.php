<?php
session_start(); // Start session to manage user authentication

// Establish database connection
$conn = new mysqli('localhost', 'root', '', 'learn');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL Injection Prevention and Authentication
if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Use prepared statement to prevent SQL injection
    $stmt = $conn->prepare("SELECT * FROM joinn WHERE email = ? AND password = ?");
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Authentication successful
        $_SESSION['logged_in'] = true;
        header("location: dashboard.php"); // Redirect to dashboard upon successful login
        exit(); // Terminate script execution after redirection
    } else {
        // Authentication failed
        $error_message = "Invalid email or password";
        // Log failed login attempt
        error_log("Failed login attempt for email: $email", 3, "login.log");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Easy Port</title>
    <link rel="stylesheet" href="cssFolder/index.css">
    <style>
        .xyz {
            background-image: url(abcdhome2.jpg);
            height: 1000px;
        }
    </style>
</head>
<body>
    <div class="xyz">
        <div class="main">
            <div class="navbar">
                <div class="icon">
                    <h2 class="logo" style="color:#8C030E">Easy PORT</h2><hr>
                </div>
                <div class="menu">
                    <!-- Menu items -->
                </div>
                <div class="search">
                    <input class="srch" type="search" name="" placeholder="Type To text">
                    <a href="#"><button class="btn">Search</button></a>
                </div>
            </div>
            <div class="content">
                <h1 style="color:#1F7334">Easy <br>Port <br>Management</h1>
                <p class="par">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt neque 
                    expedita atque eveniet <br> quis nesciunt. Quos nulla vero consequuntur, fugit nemo ad delectus 
                    <br> a quae totam ipsa illum minus laudantium?</p>
                <button class="button button2" onclick="window.location.href = 'authority.php';">PORT AUTHORITY</button>
                <div class="form">
                    <form action="home.php" method="post">
                        <h2>Login Here</h2>
                        <input type="text" name="email" placeholder="Enter Email Here" required>
                        <input type="password" name="password" placeholder="Enter Password Here" required>
                        <input type="submit" name="submit" value="submit" class="btn solid">
                    </form>
                    <p class="link">Don't have an account<br>
                        <button class="button button1" onclick="window.location.href = 'signup.php';">Sign Up</button>
                    </p>
                    <p class="liw">Log in with</p>
                    <div class="icons">
                        <!-- Social media icons -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
