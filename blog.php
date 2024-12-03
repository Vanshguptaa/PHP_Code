<?php
    
        if (isset($_POST['submit'])) {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operator = $_POST['operator'];

            if (!empty($num1) && !empty($num2)) {
                switch ($operator) {
                    case "Add":
                        echo $num1 + $num2;
                        break;
                    case "Subtract":
                        echo $num1 - $num2;
                        break;
                    case "Multiply":
                        echo $num1 * $num2;
                        break;
                    case "Divide":
                        if ($num2 != 0) {
                            echo $num1 / $num2;
                        } else {
                            echo "Cannot divide by zero!";
                        }
                        break;
                    default:
                        echo "Invalid operation selected.";
                        break;
                }
            } else {
                echo "Please enter both numbers.";
            }
        }
    ?>
   