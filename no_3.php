<?php

function createTwoArrayDimension($total) {
    // looping data dari parameter yang diterima
    $result = [];
    for ($i = 0; $i < $total; $i++) {
        for ($j = 0; $j < $total; $j++) {
            if ($i == $j) {
                $result[$i][$j] = $total;
            } else {
                $result[$i][$j] = 0;
            }
        }
    }
    
    return $result;
}

$input_1 = 4;
$input_2 = 9;

$output_1 = createTwoArrayDimension($input_1);
$output_2 = createTwoArrayDimension($input2);

// Menampilkan output
echo "Output 1:\n";
foreach ($output_1 as $row) {
    foreach ($row as $element) {
        echo $element . " ";
    }
    echo "\n";
}

echo "\nOutput 2:\n";
foreach ($output_2 as $row) {
    foreach ($row as $element) {
        echo $element . " ";
    }
    echo "\n";
}
