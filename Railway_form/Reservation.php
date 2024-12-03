<?php include 'connection.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
    <style>

        h2{
            text-align: center;
        }
        form{
            margin: 0 auto;
            width: 50%;
            border: 1px solid black;
            padding: 10px;
            margin-top: 50px;
        }
        input{
            width: 100%;
            padding: 10px;
            margin: 10px;
        }

        button{
            width: 100%;
            padding: 10px;
            margin: 10px;
        }
        select{
            width: 100%;
            padding: 10px;
            margin: 10px;
        }
        option{
            padding: 10px;
            margin: 10px;

        }
        label{
            padding: 10px;
            margin: 10px;
        }

    </style>
    
</head>
<body>
    <h2>Railway Reservation Form </h2>
  <form method="POST">
    <label for="Name">Candidate Name: </label>
    <input type="text" id="Name" name="Name" placeholder="Your Name.." required><br>
    <label for="Email">Email:</label>
    <input type="email" id="Email" name="Email" placeholder="Your Email.." required><br>
    <label for="Contact">Contact</label>
    <input type="number" id="Contact" name="Contact" placeholder="Your Contact.." required><br>
    <label for="Departure">Departure</label>
    <input type="text" id="Departure" name="Departure" placeholder="Your Departure.." required><br>
    <label for="Destination">Destination</label>
    <input type="text" id="Destination" name="Destination" placeholder="Your Destination.." required><br>
    <label for="Date">Date</label>
    <input type="date" id="Date" name="Date" placeholder="Your Date.." required><br>
    <select name="Class" id="Class" required>
        <option value="" disabled selected>Select Class</option>
        <option value="First Class">First Class</option>
        <option value="Second Class">Second Class</option>
        <option value="Third Class">Third Class</option>
    </select>
  
    <label for="Passenger">Passenger</label>
    <input type="number" id="Passenger" name="Passenger" placeholder="Number of Passengers.." required><br>
    
    <label for="Payment">Payment</label><br>
    <input type="radio" id="CreditCard" name="Payment" value="Credit Card" required>
    <label for="CreditCard">Credit Card</label><br>
    <input type="radio" id="DebitCard" name="Payment" value="Debit Card" required>
    <label for="DebitCard">Debit Card</label><br>
    <input type="radio" id="NetBanking" name="Payment" value="Net Banking" required>
    <label for="NetBanking">Net Banking</label><br>
    <input type="radio" id="UPI" name="Payment" value="UPI" required>
    <label for="UPI">UPI</label><br>

    <input type="submit" name="save_btn" value="Save">
    <button><a href="view.php">View</a></button>
  </form>

  <?php
    if(isset($_POST['save_btn'])){
        $Name = $_POST['Name'];
        $Email = $_POST['Email'];
        $Contact = $_POST['Contact'];
        $Departure = $_POST['Departure'];
        $Destination = $_POST['Destination'];
        $Date = $_POST['Date'];
        $Class = $_POST['Class'];
        $Passenger = $_POST['Passenger'];
        $Payment = $_POST['Payment'];

        $sql = "INSERT INTO Info (Name, Email, Contact, Departure, Destination, Date, Class, Passenger, Payment) VALUES ('$Name', '$Email', '$Contact', '$Departure', '$Destination', '$Date', '$Class', '$Passenger', '$Payment')";
        $result = mysqli_query($conn, $sql);

        if($result){
            echo "Data inserted";
        } else {
            echo "Data not inserted";
        }
    }
  ?>
</body>
</html>