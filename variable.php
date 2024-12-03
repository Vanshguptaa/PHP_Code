<!-- global variable -->

<?php


// function static_var(){
//     static $a=2;
//     $b=5;

//     $a++;
//     $b++;
//     echo "Static variable a is $a <br>";
//     echo "Local variable b is $b <br>";



    
// }
// static_var();

// static_var();





// function tv($string){
//     echo "The value of the variable is $string <br>";
//     function b(){
//         echo "I am heres spil the code";
//     }
// }


// tv("apple");
// b();




//include and require in php 


// require 'array.php';
// echo "This is the main content.";
// include 'footer.php';










?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Credit Card Fraud Detection</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.container {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 300px;
    text-align: center;
}

h1 {
    margin-bottom: 20px;
}

label {
    display: block;
    margin: 10px 0 5px;
}

input {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

button {
    width: 100%;
    padding: 10px;
    background-color: #28a745;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background-color: #218838;
}

#result {
    margin-top: 20px;
    font-weight: bold;
}
    </style>
</head>
<body>
    <div class="container">
        <h1>Credit Card Fraud Detection</h1>
        <form id="fraudForm" action="detect_fraud.php" method="POST">
            <label for="cardNumber">Credit Card Number:</label>
            <input type="text" id="cardNumber" name="cardNumber" required>
            <label for="expiryDate">Expiry Date:</label>
            <input type="text" id="expiryDate" name="expiryDate" required>
            <label for="cvv">CVV:</label>
            <input type="text" id="cvv" name="cvv" required>
            <button type="submit">Check for Fraud</button>
        </form>
        <div id="result"></div>
    </div>
    <?php
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $cardNumber = $_POST['cardNumber'];
        $expiryDate = $_POST['expiryDate'];
        $cvv = $_POST['cvv'];
    
        // Simulate fraud detection logic
        $isFraud = false;
    
        // Example logic: if the card number ends with an odd digit, it's considered fraud
        if (intval(substr($cardNumber, -1)) % 2 !== 0) {
            $isFraud = true;
        }
    
        if ($isFraud) {
            echo "Fraud detected!";
        } else {
            echo "No fraud detected.";
        }
    } else {
        echo "Invalid request method.";
    }
    ?>
    
    <script>
        document.getElementById('fraudForm').addEventListener('submit', function(event) {
    event.preventDefault();
    
    const formData = new FormData(this);
    
    fetch('detect_fraud.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        document.getElementById('result').innerText = data;
    })
    .catch(error => {
        console.error('Error:', error);
    });
});
    </script>

</body>
</html>



