<?php
$name = $gender = $email = $phone = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = textinput($_POST["name"]);
    $gender = textinput($_POST["gender"]);
    $email = textinput($_POST["email"]);
    $phone = textinput($_POST["phone"]);

    // Print the processed data
    echo "<h2>Form Data Submitted:</h2>";
    echo "Name: " . $name . "<br>";
    echo "Gender: " . $gender . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Phone: " . $phone . "<br>";
}

function textinput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data); // Add htmlspecialchars to escape HTML entities
    return $data;
}
?>
