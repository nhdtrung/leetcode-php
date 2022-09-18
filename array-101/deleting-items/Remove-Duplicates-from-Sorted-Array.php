<?php

class Solution {

    /**
     * O(n) time, O(1) space complexity
     *
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums) {
        if(sizeof($nums) == 0)
            return 0;
        
        $i = 0;
        for($j = 0; $j < sizeof($nums); $j++) {
            if($nums[$i] == $nums[$j]) {
                $nums[$i] = $nums[$j];
            } else {
                $nums[++$i] = $nums[$j];
                $count++;
            }
        }
        
        return ++$i;
    }
}
