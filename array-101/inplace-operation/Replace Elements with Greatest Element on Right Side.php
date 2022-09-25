<?php

class Solution {

    /**
     * @param Integer[] $arr
     * @return Integer[]
     */
    function replaceElements($arr) {
        $len = sizeof($arr);
        $max = $arr[$len - 1];
        $arr[$len - 1] = -1;
        
        for($i = $len - 2; $i >= 0; $i--) {
            $omax = $max;
            $max = $arr[$i] > $max ? $arr[$i] : $max;
            $arr[$i] = $omax;
        }
        
        return $arr;
    }
}
