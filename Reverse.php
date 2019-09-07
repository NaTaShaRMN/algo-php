<?php
    final class Rerverse{
        public static function string(string $string){
            return strrev($string);
        }
        public static function int(int $int){
            if ($int<0) abs($int);
            return (int)strrev(strval($int));
        }
        // if you want to another way , you can read it
        // public static function reverseVal($val){
        //     $result=null;
        //     if (is_numeric($val)){
        //         //echo("done");
        //         $result = strval($val);
        //         //var_dump($result);
        //     }
        //     for($i=0;$i>strlen($result)/2;$i++){
        //         $tmp = $result[$i];
        //         $result[$i] = $result[strlen($result)-1-$i];
        //         $result[strlen($result)-1-$i] = $tmp;
        //     }
        //     //echo($result);
        //      return $result;
                
        // }
    }
    // echo(Rerverse::string("tuan"));
    // echo("\n");
    // echo(Rerverse::int(12345));
    // var_dump(Rerverse::int(12345));
    //echo(Rerverse::reverseVal(1234));
    // echo(is_string("fghj"));
?>