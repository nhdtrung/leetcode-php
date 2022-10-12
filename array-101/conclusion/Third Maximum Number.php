<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function thirdMax($nums) {
        rsort($nums);
        $count = 0;
        for($i = 0; $i < sizeof($nums) - 1; $i++) {
            if($nums[$i] != $nums[$i+1]) {
                $count++;
            }
            if($count == 2) {
                return $nums[$i + 1];
            }
        }
        
        return $nums[0];
    }
}
