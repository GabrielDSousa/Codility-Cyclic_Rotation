<?php
/*
Rotate an array to the right by a given number of steps.
*/
/**
 * @param array $A
 * @param int $K
 * @return array
 */
function solution($A, $K): array
{
    $B =[];
    $len = count($A);

    if($K === 0 || $K === $len){
        return $A;
    }elseif ($K < $len){
        foreach ($A as $key => $a){
            if($key+$K < $len)
                $B[$key+$K] = $a;
            else{
                $B[($key+$K)-$len] = $a;
            }
        }
        ksort($B);
        return $B;
    }

    foreach ($A as $key => $a){

        if($key-($len-$K) < $len){
            $B[$key-($len-$K)] = $a;
        }else{
            //
            $B[(($K+$key)%$len)] = $a;
        }
    }
    ksort($B);
    return $B;
}
