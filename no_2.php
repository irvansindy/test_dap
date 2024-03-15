<?php

function findMostFrequentWord($text) {
    // mengubah setiap huruf menjadi lowercase dan menghapus spasi apabila ada.
    $text = strtolower(str_replace(' ', '', $text));

    // menghitung jumlah masing-masing huruf dalam kalimat
    $word_count = [];
    $max_count = 0;
    $most_frequent_word = '';

    for ($i = 0; $i < strlen($text); $i++) {
        $letter = $text[$i];
        if (!isset($word_count[$letter])) {
            $word_count[$letter] = 0;
        }
        $word_count[$letter]++;
        if ($word_count[$letter] > $max_count) {
            $max_count = $word_count[$letter];
            $most_frequent_word = $letter;
        }
    }

    return "Huruf $most_frequent_word muncul sebanyak $max_count kali";
}

// Contoh penggunaan
$text_1 = "giffari";
$text_2 = "gunung arjuno";

echo findMostFrequentWord($text_1) . "\n";
echo findMostFrequentWord($text_2) . "\n";
