


<!-- //multipli of two ma -->
<?php
// Define two matrices
$matrix1 = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);
$matrix2 = array(
    array(7, 8, 9),
    array(4, 5, 6),
    array(1, 2, 3)
);

// Initialize result matrix
$result = array_fill(0, 3, array_fill(0, 3, 0));
// print the matrix
echo "<pre>";
print_r($result);
echo "</pre>";
// Perform multiplication
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        for ($k = 0; $k < 3; $k++) {
            $result[$i][$j] += $matrix1[$i][$k] * $matrix2[$k][$j];
        }
    }
}
// print  on   browser 





?>








