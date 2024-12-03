<!DOCTYPE html>
<html>
<head>
    <title>Simple User Form</title>
    <style>
        .error {color: red;}
    </style>
</head>
<body>
    <h2>User Details Form</h2>

    <?php
    $nameErr = $emailErr = "";
    $name = $email = $gender = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
        } else {
            $name = $_POST["name"];
            if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
                $nameErr = "Only letters and spaces allowed";
            }
        }

        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = $_POST["email"];
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
            }
        }

        if (!empty($_POST["gender"])) {
            $gender = $_POST["gender"];
        }
    }
    ?>

    <form method="post" action="">
        Name: <input type="text" name="name" value="<?php echo $name; ?>">
        <span class="error">* <?php echo $nameErr; ?></span>
        <br><br>

        Email: <input type="text" name="email" value="<?php echo $email; ?>">
        <span class="error">* <?php echo $emailErr; ?></span>
        <br><br>

        Gender (optional):
        <input type="radio" name="gender" value="female" <?php if (isset($gender) && $gender == "female") echo "checked"; ?>> Female
        <input type="radio" name="gender" value="male" <?php if (isset($gender) && $gender == "male") echo "checked"; ?>> Male
        <br><br>

        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($nameErr) && empty($emailErr)) {
        echo "<h2>Your Input:</h2>";
        echo "Name: $name<br>";
        echo "Email: $email<br>";
        echo "Gender: $gender<br>";
    }
    ?>
</body>
</html>