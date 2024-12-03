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
        <th>Institute</th>
        <th>Email</th>
        <th>Organization</th>
    </tr>
    <?php
    $sql = "SELECT * FROM Information";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td><?php echo $row['Name']; ?></td>
                <td><?php echo $row['Institute']; ?></td>
                <td><?php echo $row['Email']; ?></td>
                <td><?php echo $row['Organization']; ?></td>
            </tr>
            <?php
        }
    } else {
        echo "0 results";
    }
    
    
    
    ?>


</table>

    
</body>
</html>