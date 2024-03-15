<?php
    function isSimilar($word_1, $word_2){
        // mengubah setiap huruf menjadi lowercase dan menghapus spasi apabila ada.
        $word_1 = strtolower(str_replace(' ', '', $word_1));
        $word_2 = strtolower(str_replace(' ', '', $word_2));

        // sorting karakter huruf dari setiap kata 
        $word_1_sorted = str_split($word_1);
        sort($word_1_sorted);
        $word_1_sorted = implode('', $word_1_sorted);

        $word_2_sorted = str_split($word_2);
        sort($word_2_sorted);
        $word_2_sorted = implode('', $word_2_sorted);

        // membandingkan nilai dari dua kata yang ada
        return $word_1_sorted === $word_2_sorted;
    }

    $word_1 = "Race";
    $word_2 = "Care";

    // ternary operator
    isSimilar($word_1, $word_2) ? "true":"false";

    // logical if
    if (isSimilar($word_1, $word_2)) {
        echo "True";
    } else {
        echo "False";
    }