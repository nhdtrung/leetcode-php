<?php

class Solution {

    /**
     * In-Place solution
     *
     * O(N) time
     * O(1) space
     *
     * @param Integer[] $nums
     * @return NULL
     */
    function moveZeroes(&$nums) {
        $pos = 0;
        
        for($i = 0; $i < sizeof($nums); $i++) {
            if($nums[$i] != 0) {
                $nums[$pos++] = $nums[$i];
            }           
        }
        
        for($pos; $pos < sizeof($nums); $pos++) {
            $nums[$pos] = 0;
        }
        
        return $nums;
    }


    /**
     * Extra space solution
     *
     * O(N) time
     * O(N) space
     *
     * @param Integer[] $nums
     * @return NULL
     */
    function moveZeroes(&$nums) {
        // Push all non-zero to extra array;
    }

}
