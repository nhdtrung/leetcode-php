<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function sortedSquares($nums) {
        $i = 0;
        $size = $j = sizeof($nums) - 1;
        $result = $nums;
        
        while($i <= $j) {
            if($nums[$i]**2 < $nums[$j]**2) {
                $result[$size] = $nums[$j]**2;
                $j--;
            } else {
                $result[$size] = $nums[$i]**2;
                $i++;
            }
            $size--;
        }
        
        return $result;        
    }
}
