<?php
    final class Fibonacci{
        // use a times of loop  to find the result 
        public static function findLastFibo($val){
            if ($val == 0) 
                return 0;
            if ($val==1 )
                return 1;
            else return Fibonacci::findLastFibo($val-2) + Fibonacci::findLastFibo($val-1);
        }
        
    }
    // if you want to print the sequence of fibonacci, you could use a loop, for example
    for ($i = 0;$i<10;$i++){
        echo(Fibonacci::findLastFibo($i)." ");
    }
    echo("\n");
    echo(Fibonacci::findLastFibo(6));
    echo("\n");
    echo(Fibonacci::findLastFibo(7));
    echo("\n");
    echo(Fibonacci::findLastFibo(8));
    echo("\n");
    echo(Fibonacci::findLastFibo(9));
    echo("\n");
?>