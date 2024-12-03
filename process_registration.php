<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
 
    $first_name = htmlspecialchars(trim($_POST['first_name']));
    $last_name = htmlspecialchars(trim($_POST['last_name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $password = trim($_POST['password']);

    
    if (empty($first_name) || empty($last_name) || empty($email) || empty($password)) {
        echo "<h2>All fields are required. Please fill out the form completely.</h2>";
        echo '<a href="register.php">Go back to the form</a>';
        exit;
    }

    
    echo "<h1>Registration Successful!</h1>";
    echo "<p><strong>First Name:</strong> $first_name</p>";
    echo "<p><strong>Last Name:</strong> $last_name</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p>Password has been securely submitted and will not be displayed.</p>";
} else {
    
    header('Location: register.php');
    exit;
}
?>
