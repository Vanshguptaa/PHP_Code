<?php
        if(isset($_POST['name'])){
            $name = $_POST['name'];
            $institution = $_POST['institution'];
            $email = $_POST['email'];
            $comme = $_POST['comme'];
           

            echo "<h2>Registration Details</h2>";
            echo "<p><strong>Name:</strong> $name</p>";
            echo "<p><strong>Institution:</strong> $institution</p>";
            echo "<p><strong>Email:</strong> $email</p>";
            echo "<p><strong>Organizers:</strong> $comme</p>";
         
        }
        ?>
    