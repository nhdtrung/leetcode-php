<?php

class Solution {

    /**
     * Time Complexity : O(n) 
     * Auxiliary Space : O(1)
     *
     * @param Integer[] $nums
     * @return Integer
     */
    function findMaxConsecutiveOnes($nums) {
        $max = 0;
        $count = 0;

        for($i = 0; $i < sizeof($nums); $i++) {
            if($nums[$i] == 1) {
                $count++;
                $max = max($max ,$count);
            } else {
                $count = 0;
            }
        }
        
        return $max;
    }
}
