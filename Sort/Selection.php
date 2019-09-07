<?php


namespace Sort;


final class Selection
{
    public static function Selection(array $input) {
        $n = count($input);
        for($i = 0; $i < $n ; $i++) {
            $min_index = $i;
            for($j = $i + 1; $j < $n ; $j++) {
                if ($input[$j] < $input[$min_index]) {
                    $min_index = $j;
                }
            }


            if ($input[$i] > $input[$min_index]) {
                $tmp = $input[$i];
                $input[$i] = $input[$min_index];
                $input[$min_index] = $tmp;
            }
        }
        return $input;
    }
}