<?php
    declare(strict_types=1);
    namespace Sort;

    final class  Sort{
        public  static function Insertion(array $arr)  {
            $n = count($arr);
            for ($i = 1; $i < $n; $i++) {
                $key = $arr[$i];
                for($j = $i - 1 ;$j >= 0 && $arr[$j] > $key; $j-- ) {
                    $arr[$j + 1] = $arr[$j];
                }
                $arr[$j + 1] = $key;
            }
            return $arr;
        }
    }
?>