<?php

class Solution {

    /**
     * Two-pointer opposite direction
     *
     * @param Integer[] $nums
     * @return Integer[]
     */
    function sortArrayByParity($nums) {
        $i = 0;
        $j = sizeof($nums) - 1;
        $si = $sj = false;
        
        while($i < $j) {
            if($nums[$i] % 2 == 0) {
                $i++;
            } else {
                $si = true;
            }
            
            if($nums[$j] % 2 != 0) {
                $j--;
            } else {
                $sj = true;
            }
            
            if($si && $sj) {
                $t = $nums[$i];
                $nums[$i] = $nums[$j];
                $nums[$j] = $t;
                $i++;
                $j--;
                $si = $sj = false;
            }
        }
        
        return $nums;
    }
}
