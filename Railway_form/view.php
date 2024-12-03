<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            margin: 0 auto;
            width: 50%;
            border: 1px solid black;
            margin-top: 50px;
        }
        th,td{
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>

<?php include 'connection.php'; ?>
<table border="1px" cellpadding="10px" cellspacing="0">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Contact</th>
        <th>Departure</th>
        <th>Destination</th>
        <th>Date</th>
        <th>Class</th>
        <th>Passenger</th>
        <th>Payment</th>



        
    </tr>
    <?php
    $sql = "SELECT * FROM Info";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>".$row['Name']."</td>";
            echo "<td>".$row['Email']."</td>";
            echo "<td>".$row['Contact']."</td>";
            echo "<td>".$row['Departure']."</td>";
            echo "<td>".$row['Destination']."</td>";
            echo "<td>".$row['Date']."</td>";
            echo "<td>".$row['Class']."</td>";
            echo "<td>".$row['Passenger']."</td>";
            echo "<td>".$row['Payment']."</td>";
            echo "</tr>";
        }
    }
    
    
    
    
    ?>


</table>

    
</body>
</html>