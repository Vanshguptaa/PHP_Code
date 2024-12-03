<!-- <?php
// Define a multidimensional array
$result = array(
    array(
        "name" => "Vivek Patel",
        "cgpa" => 9.9,
        "status" => "Pass"
    ),
    array(
        "name" => "Vansh",
        "cgpa" => 8.2,
        "status" => "Pass"
    )
);

// Print the array
foreach ($result as $student) {
    echo "Name: " . $student["name"] . "\n";
    echo "CGPA: " . $student["cgpa"] . "\n";
    echo "Status: " . $student["status"] . "\n";
    echo "\n";
}
?> -->

<!-- <?php
// Define the size of the multiplication table
$size = 10;

// Initialize the multiplication table array
$multiplicationTable = array();

// Populate the multiplication table array
for ($i = 1; $i <= $size; $i++) {
    for ($j = 1; $j <= $size; $j++) {
        $multiplicationTable[$i][$j] = $i * $j;
    }
}

// Print the multiplication table
for ($i = 1; $i <= $size; $i++) {
    for ($j = 1; $j <= $size; $j++) {
        echo $multiplicationTable[$i][$j] . "\t";
    }
    echo "\n";
}
?> -->









<?php
// Define two matrices
$matrix1 = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);

$matrix2 = array(
    array(9, 8, 7),
    array(6, 5, 4),
    array(3, 2, 1)
);

// Get the dimensions of the matrices
$rows1 = count($matrix1);
$cols1 = count($matrix1[0]);
$rows2 = count($matrix2);
$cols2 = count($matrix2[0]);

// Check if matrices can be multiplied
if ($cols1 != $rows2) {
    die("Matrices cannot be multiplied");
}

// Initialize the result matrix
$result = array();
for ($i = 0; $i < $rows1; $i++) {
    for ($j = 0; $j < $cols2; $j++) {
        $result[$i][$j] = 0;
    }
}

// Perform matrix multiplication
for ($i = 0; $i < $rows1; $i++) {
    for ($j = 0; $j < $cols2; $j++) {
        for ($k = 0; $k < $cols1; $k++) {
            $result[$i][$j] += $matrix1[$i][$k] * $matrix2[$k][$j];
        }
    }
}

// Print the result matrix
for ($i = 0; $i < $rows1; $i++) {
    for ($j = 0; $j < $cols2; $j++) {
        echo $result[$i][$j] . "\t";
    }
    echo "\n";
}
?>