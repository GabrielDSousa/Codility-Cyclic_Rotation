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
    }

    foreach ($A as $key => $a){
        $B[(($K+$key)%$len)] = $a;
    }
    ksort($B);
    return $B;
}
