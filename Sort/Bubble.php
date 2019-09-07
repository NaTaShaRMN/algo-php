<?php
    final class Bubble{
        public static function bubbleSort($arr){
            for ($i=0;$i<count($arr);$i++){
                for ($j=0;$j<count($arr);$j++){
                    if ($arr[$i]<$arr[$j])
                    self::swap($arr[$i],$arr[$j]);
                }
            }
        }
        public static function swap(&$a,&$b){
            $temp = $a;
            $a = $b;
            $b = $temp;
        }

    }
    // $a = 3;
    // $b = 4;
    // Bubble::swap($a,$b);
    // echo("$a is value of a and $b is value of b");
?>