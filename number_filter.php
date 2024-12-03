<?php
$var = 3;


var_dump(filter_var($var, FILTER_VALIDATE_INT));


$options = array("options" => array("min_range" => 20, "max_range" => 40));


if (filter_var($var, FILTER_VALIDATE_INT, $options)) {
    echo "The number is within the range";
} else {
    echo "The number is not within the range";
}
?>