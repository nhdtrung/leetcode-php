<?php

class Solution {

    /**
     *
     * @param Integer[] $nums
     * @param Integer $val
     * @return Integer
     */
    function removeElement(&$nums, $val) {
        $i = 0;
        
        for ($j = 0; $j < count($nums); $j++) {
            if ($nums[$j] !== $val) {
                $nums[$i++] = $nums[$j];
            }
        }
        
        return $i;
    }
}
