<?php
    
    
        // binary search is a algorithms to search a value in a sequence of number (or a string ) which was sort
         
            function binarySearch($array, $left, $right, $value){
                if ($right>$left){
                $mid = $left + ($right-$left)/2;
                if ($array[$mid]==$value) 
                    return true;
                elseif ($array[$mid]>$value){
                    return binarySearch($array,$left,$mid-1,$value);
                }
                elseif ($array[$mid]<$value){
                    return binarySearch($array,$mid+1,$right,$value);
                }
            }
            return false;
        }

        function linenearSearch($array,$value){
            for ($i=0;$i<count($array);$i++){
                if ($array[$i]==$value){
                    return true;
                }
            }
            return false;
        }
    $arr = array(1,2,3,4,5,6,7,8,9);
    echo(binarySearch($arr,0,count($arr)-1,2));
   // echo(linenearSearch($arr,5));
    
?>